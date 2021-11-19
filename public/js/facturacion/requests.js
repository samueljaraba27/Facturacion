import {
  $tblReferencia,
  $tblTercero,
  $terceroTemp,
  $referTemp,
  $fragment,
  $nitTercero,
  $porcentaje,
  alert,
  alertOptions,
  URL_REFERENCIA,
  URL_TERCERO,
  URL_PEDIDO,
  URL_FORPAG,
  URL_FORPAG2,
  URL_FACTURA,
  URL_VENDEDORES,
  URL_DEPARTAMENTOS,
  URL_MUNICIPIOS,
  URL_CREATE_TERCERO,
  URL_USERS,
  URL_DEPOSITOS,
  URL_DATOS_EMPRESA,
  validarCamposPedido,
  $selectForpag,
  $selectVend,
  getDetalleFactura,
  ajax,
  error,
  formatNum,
  getFecha,
  appendForm
} from './sources.js';

import General from './General.js';
import { verificarTercero } from './validate.js';
const $tab_content = d.getElementById('tabs-datos');

/* <---- Manejo de peticiones ----> */
export function requests() {
  d.addEventListener('submit', async (e) => {
    e.preventDefault();
    if (e.target.matches('#frmTercero')) {
      let data = await ajax(URL_TERCERO, {
        method: 'POST',
        body: new FormData(e.target)
      });
      return buscarTerceros(data);
    }
    if (e.target.matches('#frmReferencia')) {
      let data = await ajax(URL_REFERENCIA, {
        method: 'POST',
        body: appendForm({
          form: e.target,
          codcuedep: '143501',
          periodo: getFecha('yymmdd').substr(0, 4)
        })
      });
      return buscarProductos(data);
    }
    if (e.target.matches('#frmPedido')) {
      let data = await ajax(URL_PEDIDO, {
        method: 'POST',
        body: new FormData(e.target)
      });
      return savePedido(data);
    }
    if (e.target.matches('#frmCrearTercero')) {
      saveTercero();
    }
  });
}

export async function getInformationEmpresa() {
  let data = await ajax(URL_DATOS_EMPRESA, {
    method: 'POST',
    body: appendForm({ form: d.createElement('form'), data: null })
  });
  if (data && data.empresa && data.config) {
    let { NOMCIA, NITCIA, CIUCIA, DEPCIA, DIGVER, DIRCIA, TELCIA } = data.empresa;
    let { REGISTRO_MERCANTIL, CORREO } = data.config;
    $tab_content.querySelector('#nomcia').value = NOMCIA;
    $tab_content.querySelector('#nitcia').value = `${NITCIA} - ${DIGVER}`;
    $tab_content.querySelector('#ciucia').value = CIUCIA;
    $tab_content.querySelector('#depcia').value = DEPCIA;
    $tab_content.querySelector('#dircia').value = DIRCIA;
    $tab_content.querySelector('#telcia').value = TELCIA;
    $tab_content.querySelector('#regmercantil').value = REGISTRO_MERCANTIL;
    $tab_content.querySelector('#mailjet').value = CORREO.toUpperCase();
    localStorage.setItem(
      'empresa',
      JSON.stringify({
        name: NOMCIA,
        nit: `${NITCIA}-${DIGVER}`,
        address: DIRCIA,
        tel: TELCIA,
        email: CORREO
      })
    );
  } else {
    alert({
      icon: 'warning',
      title: 'Datos no encontrados',
      text: 'No se pudo obtener la información de la empresa'
    });
  }
}

export async function loadUserInfo() {
  const user = JSON.parse(sessionStorage.getItem('user'));
  if (user) {
    let { PERFIL, NOMUSU, GRUPUS, NITCLI } = user;
    d.getElementById('icon-user').dataset.bsOriginalTitle = PERFIL;
    $tab_content.querySelector('#user-perfil').value = PERFIL;
    $tab_content.querySelector('#user-nom').value = NOMUSU;
    $tab_content.querySelector('#user-group').value = GRUPUS;
    $tab_content.querySelector('#user-nit').value = NITCLI;
  }
}

export function checkUserBD(user) {
  const data = ajax(URL_USERS, {
    method: 'POST',
    body: appendForm({
      form: d.createElement('form'),
      username: user.PERFIL,
      password: atob(user.ID),
      nomusu: user.NOMUSU,
      nitcli: user.NITCLI,
      grupus: user.GRUPUS,
      mode: 'validate'
    })
  });
  return data;
}

function buscarTerceros(data) {
  $tblTercero.querySelector('tbody').innerHTML = '';
  if (data.length > 0) {
    data.forEach((value) => {
      let { NITCLI, NOMCLI, CIUCLI } = value;
      $terceroTemp.querySelector('.nit').textContent = NITCLI;
      $terceroTemp.querySelector('.nombre').textContent = NOMCLI;
      $terceroTemp.querySelector('.ciudad').textContent = CIUCLI;
      let $clone = d.importNode($terceroTemp, true);
      $fragment.appendChild($clone);
    });
    $tblTercero.querySelector('tbody').appendChild($fragment);
  } else {
    return alert({
      icon: 'warning',
      title: '¡No se encontraron resultados!'
    });
  }
}
function buscarProductos(data) {
  $tblReferencia.querySelector('tbody').innerHTML = '';
  if (data.length > 0) {
    data.forEach((value) => {
      let { name, refer, code, precio, disp } = value;
      $referTemp.querySelector('.name').textContent = name;
      $referTemp.querySelector('.refer').textContent = refer;
      $referTemp.querySelector('.code').textContent = code.substr(1, 6);
      $referTemp.querySelector('.precio').textContent = formatNum(precio);
      $referTemp.querySelector('.disp').textContent = disp;
      let $clone = d.importNode($referTemp, true);
      $fragment.appendChild($clone);
    });
    $tblReferencia.querySelector('tbody').appendChild($fragment);
  } else {
    alert({
      icon: 'warning',
      title: '¡No se encontraron resultados!'
    });
  }
}
async function savePedido(data) {
  if (!validarCamposPedido()) return;
  if (data.error) return error(data.error);
  validacionesForpag(data.tercero.FORPAG);
  let details = getDetalleFactura();
  let isSaved = await ajax('./php/t89.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json; charset=utf-8' },
    body: sendDataPedido()
  });
  if (isSaved) {
    localStorage.setItem('tercero', JSON.stringify(data.tercero));
    localStorage.setItem('details', JSON.stringify(details));
    alertOptions(
      {
        title: 'Pedido guardado',
        text: '¿Desea imprimir el comprobante?',
        icon: 'success',
        confirmButtonText: 'Imprimir',
        cancelButtonText: 'Cancelar',
        showCancelButton: true
      },
      () => {
        window.open(URL_FACTURA);
      }
    );
  } else {
    return error({ statusText: '¡Algo salió mal!' });
  }
}
export async function saveTercero() {
  const nit = d.getElementById('nitCrearTercero').value;
  const data = await verificarTercero(nit);
  if (data.length > 0) {
    return alertOptions({
      title: 'Nit/Cédula existente!',
      text: 'Verifique',
      icon: 'warning'
    });
  } else {
    ajax(URL_CREATE_TERCERO, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json; charset=utf-8' },
      body: sendDataTercero()
    }).then((res) => {
      if (res) {
        alert({
          icon: 'success',
          title: 'Tercero guardado '
        });
      }
    });
  }
}

export async function loadDeposito() {
  let data = await ajax(URL_DEPOSITOS, {
    method: 'POST',
    headers: { 'Content-Type': 'application/json; charset=utf-8' },
    body: JSON.stringify({ coddep: null })
  });
  let { CODDEP, NOMDEP, CODCUE } = data;
  d.getElementById('coddep').value = CODDEP;
  d.getElementById('nomdep').value = NOMDEP;
  d.getElementById('dep-cuedep').value = CODCUE;
}

/**
 * Carga dinamicamente las formas de pago de la base de datos
 */
export async function loadForpag() {
  const $select = d.getElementById('selectForpag');
  let data = await ajax(URL_FORPAG2);
  data.forEach((forpag, index) => {
    let { FORPAG, DESFORPAG } = forpag;
    const $opt = d.createElement('option');
    $opt.setAttribute('value', index);
    $opt.textContent = `Forma pago: ${FORPAG} - ${DESFORPAG}`;
    $select.appendChild($opt);
  });
}
export async function loadVendedores() {
  const $select = d.getElementById('selectVend');
  let data = await ajax(URL_VENDEDORES, {
    method: 'POST',
    headers: { 'Content-Type': 'application/json; charset=utf-8' },
    body: JSON.stringify({ data: null })
  });
  data.forEach((vend) => {
    let { CODVEN, NOMVEN } = vend;
    const $opt = d.createElement('option');
    $opt.setAttribute('value', CODVEN);
    $opt.textContent = `VEND:  ${NOMVEN}`;
    $select.appendChild($opt);
  });
}
export async function loadDepartamentos(selectId) {
  const $select = d.getElementById(selectId);
  let data = await ajax(URL_DEPARTAMENTOS, {
    method: 'POST',
    body: appendForm({ form: d.createElement('form'), data: null })
  });
  data.forEach((dep) => {
    let { id, nombre, codigo } = dep;
    const $opt = d.createElement('option');
    $opt.setAttribute('value', id);
    $opt.textContent = `${id.toString().padStart(2, '0')} - ${nombre}`;
    $select.appendChild($opt);
  });
}
export async function loadMunicipios(codDep) {
  const $select = d.getElementById('selectMunic');
  let data = await ajax(URL_MUNICIPIOS, {
    method: 'POST',
    body: appendForm({
      form: d.createElement('form'),
      coddep: codDep
    })
  });
  $select.innerHTML = '';
  data.forEach((muni) => {
    console.log(muni);
    let { id, codigo, nombre } = muni;
    const $opt = d.createElement('option');
    $opt.setAttribute('value', codigo);
    $opt.textContent = `${id.toString().padStart(4, '0')} - ${nombre}`;
    $select.appendChild($opt);
  });
}
async function validacionesForpag(forpag) {
  let forpagSelect = General.getFormaPago();
  let habiCreTer = forpag.includes(forpagSelect);
  if (forpagSelect !== 'PC' && forpagSelect !== 'CT') {
    let data = await ajax(URL_FORPAG, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json; charset=utf-8' },
      body: JSON.stringify({ fp: forpagSelect })
    });
    if (data.error) return error(data.error);
    console.log(data);
    return data ? true : false;
  }
}
function sendDataPedido() {
  const date = new Date();
  return JSON.stringify({
    nitcli: $nitTercero.value,
    fecha: getFecha('yymmdd'),
    codven: Math.abs($selectVend.value),
    mesmov: date.getMonth() + 1,
    coment1: d.getElementById('coment1').value,
    coment2: d.getElementById('coment2').value,
    anomov: String(date.getFullYear()).substring(2),
    pordes: $porcentaje.value,
    nitcliref: d.getElementById('nitTercero-mp').value,
    productos: JSON.parse(sessionStorage.getItem('productos')),
    cuedep: d.getElementById('dep-cuedep').value,
    coddep: d.getElementById('coddep').value
  });
}

//! Check
function sendDataTercero() {
  return JSON.stringify({
    nitcli: d.getElementById('nitCrearTercero').value,
    identi: 'C',
    cod_clasificacion: d.getElementById('tipocla').value,
    digver: d.getElementById('digVerificacion').value,
    nomcli: d.getElementById('nombre1').value, //
    apellido: d.getElementById('apellidocli').value,
    apellido2: d.getElementById('apellidocli2').value,
    nombre: d.getElementById('nombre1').value,
    nombre2: d.getElementById('nombre2').value,
    dircli: d.getElementById('dircli').value,
    email: d.getElementById('emailcli').value,
    fecnac: d.getElementById('fecnac').value.replaceAll('-', ''),
    telcli: d.getElementById('telcli').value,
    cod_dep: d.getElementById('selectDep').value,
    cod_mun: d.getElementById('selectMunic').value
  });
}
