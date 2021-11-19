import {
  totalCantidad,
  parseF,
  totaTable,
  getBase,
  IVA,
  getDescuento
} from './calculos.js';
import { hideModal } from './modales.js';
import {
  verificarTercero,
  validarCampoTercero,
  validarFacturacion,
  validarCamposFacturacion,
  verificarReferencia
} from './validate.js';
import General from './General.js';
import { checkUserBD } from './requests.js';

const d = document,
  /*Templates */
  $terceroTemp = d.getElementById('terceroTemplate').content,
  $referTemp = d.getElementById('referenciaTemplate').content,
  $prodTemplate = d.getElementById('prodTemplate').content,
  $datalist = d.getElementById('temp-datalist').content,
  /*Formularios */
  $frmTercero = d.getElementById('frmTercero'),
  $frmReferencia = d.getElementById('frmReferencia'),
  /*Tablas */
  $tblTercero = d.getElementById('tableTercero'),
  $tblReferencia = d.getElementById('tableReferencia'),
  $tblProductos = d.getElementById('tableProductos'),
  //Endpoints
  URL_TERCERO = './php/t64.php',
  URL_REFERENCIA = './php/t43.php',
  URL_PEDIDO = './php/pedidos/pedidos.php',
  URL_FORPAG = './php/forpag.php',
  URL_FORPAG2 = './php/forpag/read.php',
  URL_VENDEDORES = './php/t85.php',
  URL_DATOS_EMPRESA = './php/t90.php',
  URL_DEPARTAMENTOS = './php/tbl_departamentos.php',
  URL_CREATE_TERCERO = './php/t64/create.php',
  URL_MUNICIPIOS = './php/tbl_municipios.php',
  URL_DEPOSITOS = './php/t48.php',
  URL_USERS = './php/t80.php';

/* Campos  */
let $nitTercero = d.getElementById('nitTercero'),
  $terceroName = d.getElementById('terceroName'),
  $precioUnit = d.getElementById('precioUnit'),
  $cantidad = d.getElementById('cant'),
  $porcentaje = d.getElementById('dctoRefer'),
  $totalDesc = d.getElementById('totalDesc'),
  $valBruto = d.getElementById('valBruto'),
  $base = d.getElementById('base'),
  $iva = d.getElementById('iva'),
  $neto = d.getElementById('neto'),
  $efectivo = d.getElementById('efectivo'),
  $descA = d.getElementById('desc-adi'),
  $desc2 = d.getElementById('dctoVend'),
  $inc = d.getElementById('inc'),
  $refer = d.getElementById('refer'),
  $vend = d.getElementById('select'),
  $cree = d.getElementById('cree'),
  $saldFavor = d.getElementById('saldFavor'),
  $retFue = d.getElementById('retFue'),
  $retIva = d.getElementById('retIva'),
  $retIca = d.getElementById('retIca'),
  $comis = d.getElementById('comis'),
  $propina = d.getElementById('propina'),
  $cambio = d.getElementById('cambio'),
  $selectForpag = d.getElementById('selectForpag'),
  $selectVend = d.getElementById('selectVend'),
  /*Botones */
  $btnTotales = d.getElementById('btn-totales'),
  $btnAddRerencia = d.getElementById('btnAddReferencia'),
  $searchReferencia = d.getElementById('search-reference'),
  $searchTercero = d.getElementById('searchTercero'),
  // Rutas
  URL_FACTURA = '',
  PATH_HOME = '',
  PATH_LOGIN = 'login.html',
  /*Variables */
  FACTURANDO = false,
  /*Otros*/
  $lblTotal = d.getElementById('lblTotal'),
  $fragment = d.createDocumentFragment(),
  $modalPedido = d.getElementById('modalPedido');

export {
  $terceroTemp,
  $referTemp,
  $prodTemplate,
  $frmTercero,
  $frmReferencia,
  $tblTercero,
  $tblReferencia,
  $tblProductos,
  $precioUnit,
  $cantidad,
  $porcentaje,
  $lblTotal,
  $totalDesc,
  $valBruto,
  $base,
  $iva,
  $neto,
  $vend,
  $fragment,
  $efectivo,
  $cambio,
  $refer,
  $selectForpag,
  $selectVend,
  $nitTercero,
  URL_REFERENCIA,
  URL_TERCERO,
  URL_PEDIDO,
  URL_FORPAG,
  URL_FORPAG2,
  URL_FACTURA,
  URL_VENDEDORES,
  URL_DATOS_EMPRESA,
  URL_DEPARTAMENTOS,
  URL_MUNICIPIOS,
  URL_CREATE_TERCERO,
  URL_DEPOSITOS,
  URL_USERS,
  PATH_HOME,
  PATH_LOGIN
};

export const printError = (err, element) => {
  let message = err.statusText || 'Ocurrió un error!';
  if (element) {
    element.insertAdjacentHTML(
      'afterend',
      `<span>Error: ${err.status}: ${message}</span>`
    );
  } else {
    alert(`Error ${err.status}: ${message}`);
  }
};

/** Primero verifica si una fila está seleccionada, si lo está, remueve la clase,
 * posteriormente agrega la clase a la fila donde se dió click.
 */
export function paintRow() {
  d.addEventListener('click', (e) => {
    if (e.target.matches('td') || e.target.matches('#tbl-span')) {
      // if (e.target.parentElement.classList.contains('rowTemplate')) {
      let $rowSelected = getSelectedRow(e.target.closest('table'));
      if ($rowSelected) $rowSelected.classList.remove('table-dark');
      let $row = e.target.closest('tr');
      $row.classList.add('table-dark');
      // }
    }
  });
}
/** Obtiene la fila actual seleccionada de una tabla dada, la
 * fila seleccionada es una tr con una clase en específico.
 */
export function getSelectedRow(table) {
  let rows = table.querySelector('tbody').querySelectorAll('tr');
  for (let row of rows.values()) {
    if (row.classList.contains('table-dark')) return row;
  }
}
export function countRowsAdded(table, element) {
  let n = table.querySelector('tbody').querySelectorAll('.rowTemplate').length;
  element.querySelector('tr th').textContent = ++n;
}
export function clearSelectionTable($row) {
  if ($row) $row.classList.remove('table-dark');
}
/*<------------- Alertas ------------->*/

export function alertToast(icon, title) {
  Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 1500,
    timerProgressBar: true
  }).fire({
    icon,
    title
  });
}
export function alert(options) {
  let { icon, title, text, callback } = options;
  Swal.fire({
    title,
    text,
    icon,
    customClass: {
      confirmButton: 'btn btn-success btn-modal',
      cancelButton: 'btn btn-danger btn-modal'
    },
    buttonsStyling: false
  }).then((result) => {
    if (result.isConfirmed && callback) callback();
  });
}
export function alertOptions(options, callback) {
  options.customClass = {
    confirmButton: 'btn btn-primary btn-modal',
    cancelButton: 'btn btn-secondary btn-modal'
  };
  options.buttonsStyling = false;
  Swal.fire(options).then((result) => {
    if (result.isConfirmed && callback) callback();
  });
}
/**
 *
 * @param {Object} options Un objeto que contiene el título, html y callback para lanzar el timer
 */
export function alertTimer(options) {
  let timerInterval;
  Swal.fire({
    title: options.title,
    html: `${options.html} en <b></b> milisegundos.`,
    timer: 2000,
    timerProgressBar: true,
    allowOutsideClick: false,
    didOpen: () => {
      Swal.showLoading();
      const b = Swal.getHtmlContainer().querySelector('b');
      timerInterval = setInterval(() => {
        b.textContent = Swal.getTimerLeft();
      }, 100);
    },
    willClose: () => {
      clearInterval(timerInterval);
    }
  }).then((result) => {
    if (result.dismiss === Swal.DismissReason.timer) {
      setTimeout(() => {
        options.callback();
      }, 500);
    }
  });
}

/*
 **Formatea el input o inputs pasados a formato 'thousand'
 */
export function inputFormat(...inputs) {
  inputs.forEach((el) => {
    let cleave = new Cleave(el, {
      numeral: true,
      numeralThousandsGroupStyle: 'thousand'
    });
  });
}
/*
 ** Valida los campos correspondientes al agregar una referencia a la tabla
 */
export function validarCampos() {
  if (!getSelectedRow($tblReferencia) && $refer.value === '') {
    alert({
      icon: 'warning',
      title: 'Ups...',
      text: '¡Debes seleccionar un producto primero!'
    });
    return false;
  }
  if (parseF($cantidad.value) <= 0 || !$cantidad.value) {
    alert({
      icon: 'warning',
      title: 'Cantidad no válida',
      text: '¡Debe agregar la cantidad de la referencia!'
    });
    return false;
  }
  if (parseF($precioUnit.value) < 9 || !$precioUnit.value) {
    alert({
      icon: 'warning',
      title: 'Precio unitario no válido',
      text: '¡Agregue un precio válido a la referencia!'
    });
    return false;
  }
  if (parseF($porcentaje.value > 100) || !$porcentaje.value) {
    alert({
      icon: 'warning',
      title: 'Descuento no válido',
      text: '¡Agregue un porcentaje válido a la referencia!'
    });
    $porcentaje.focus();
    return false;
  }
  if ($nitTercero.value === '') {
    alert({
      icon: 'warning',
      title: 'Tercero no válido',
      text: '¡Agregue un tercero válido'
    });
    return false;
  }
  return true;
}
export function validarCamposPedido() {
  if (d.getElementById('nitTercero-mp').value === '') {
    alert({
      icon: 'warning',
      title: 'Tercero/Cliente no válido',
      text: '¡Agregue un Tercero/Cliente válido'
    });
    return false;
  }
  if (!$tblProductos.querySelector('.rowTemplate')) {
    alert({
      icon: 'warning',
      title: 'Ninguna referencia agregada',
      text: 'Agregue almenos una referencia'
    });
    return false;
  }
  return true;
}
export function addFragment(template, fragment, table) {
  let clone = d.importNode(template, true);
  let node = table.querySelector('tbody').querySelector('.empty');
  fragment.appendChild(clone);
  countRowsAdded(table, fragment);
  node
    ? table.querySelector('tbody').replaceChild(fragment, node)
    : table.querySelector('tbody').appendChild(fragment);
}

/**
 * Agrega la referencia seleccionada a la tabla de compras con los datos
 * recogidos de los inputs
 */
export function addProducto() {
  if (!validarCampos()) return;
  let $row = getSelectedRow($tblReferencia);
  if ($row) {
    let [name, precio, refer, code] = $row.children;
    addToTable({
      name: name.textContent,
      code: code.textContent,
      cantidad: $cantidad.value,
      punit: $precioUnit.value,
      dcto: $porcentaje.value
    });
  } else {
    addProductByRefer();
  }
  totaTable('tableProductos');
  resetReferenceInputs();
}

function addProductByRefer() {
  if ($refer.dataset.referCode) {
    addToTable({
      name: $refer.dataset.bsOriginalTitle,
      code: $refer.dataset.referCode,
      cantidad: $cantidad.value,
      punit: $precioUnit.value,
      dcto: $porcentaje.value
    });
  } else {
    return alert({
      title: `Verifica la referencia: "${$refer.value}"`,
      icon: 'warning'
    });
  }
}
function isProductInTable(codigo) {
  const $tbody = $tblProductos.querySelector('tbody');
  const $rows = $tbody.querySelectorAll('.product-table');
  let someRow = false;
  $rows.forEach(($row) => {
    if ($row.querySelector('.codigo').textContent === codigo) {
      let cantidadActual = $row.querySelector('.cant').textContent;
      let punit = $row.querySelector('.punit').textContent;
      $row.querySelector('.cant').textContent =
        parseF(cantidadActual) + parseF($cantidad.value);
      let cant = $row.querySelector('.cant').textContent;
      let total = totalCantidad(punit, cant);
      $row.querySelector('.total').textContent = formatNum(total);

      someRow = true;
    }
  });
  return someRow;
}
function addToTable(values) {
  let { name, code, cantidad, punit, dcto } = values;
  let total = totalCantidad(punit, cantidad);
  if (!isProductInTable(code)) {
    $prodTemplate.querySelector('.descrip').textContent = name;
    $prodTemplate.querySelector('.codigo').textContent = code;
    $prodTemplate.querySelector('.cant').textContent = cantidad;
    $prodTemplate.querySelector('.punit').textContent = punit;
    $prodTemplate.querySelector('.total').textContent = formatNum(total);
    $prodTemplate.querySelector('.desc').textContent = `${dcto}%`;
    $prodTemplate.querySelector('.coddep').textContent = 0;
    addFragment($prodTemplate, $fragment, $tblProductos);
  }
}
export function editProduct() {
  const $btn = d.getElementById('btnAddReferencia');
  d.addEventListener('click', (e) => {
    const $tr = e.target.parentElement;
    if ($tr && $tr.matches('.product-table')) {
      toggleButton({
        $btn,
        clase: 'warning',
        icon: 'cached',
        title: 'Actualizar Referencia'
      });
      rowValuesToInputs(getSelectedRow($tblProductos));
      $btn.removeEventListener('click', addProducto);
      $btn.addEventListener('click', updateProductRow);
      $cantidad.focus();
    } else if (
      !e.target.classList.contains('edit-refer') &&
      $btn.classList.contains('btn-warning')
    ) {
      clearSelectionTable(getSelectedRow($tblProductos));
      $btn.addEventListener('click', addProducto);
      $btn.addEventListener('click', updateProductRow);
      resetReferenceInputs();
      toggleButton({
        $btn,
        clase: 'success',
        icon: ' add_shopping_cart',
        title: 'Agregar referencia'
      });
    }
  });
}
export function resetReferenceInputs() {
  $refer.value = '';
  $refer.dataset.referCode = '';
  $refer.dataset.bsOriginalTitle = '';
  $precioUnit.value = 0;
  $cantidad.value = 0;
  $desc2.value = 0;
  $porcentaje.value = 0;
  clearSelectionTable(getSelectedRow($tblReferencia));
  d.getElementById('search-reference').focus();
}

function toggleEventListener(element, eventOptions) {
  let { typeEvent, removeEvent, addEvent, title } = eventOptions;
  element.removeEventListener(typeEvent, removeEvent);
  element.addEventListener(typeEvent, addEvent);
  element.textContent = title;
}

function totales() {
  const productos = $tblProductos
    .querySelector('tbody')
    .querySelectorAll('.product-table').length;
  if (productos && validarFacturacion()) {
    toggleEventListener($btnTotales, {
      typeEvent: 'click',
      removeEvent: totales,
      addEvent: imprimir,
      title: 'Imprimir'
    });
    disabled(
      $nitTercero,
      $selectForpag,
      $selectVend,
      $refer,
      $cantidad,
      $precioUnit,
      $porcentaje,
      $searchReferencia,
      $searchTercero,
      $btnAddRerencia
    );
    enabled($descA, $efectivo, $inc);
    $descA.focus();
    FACTURANDO = true;
  }
}

async function imprimir() {
  if (!validarCamposFacturacion()) return;
  console.log('adssdfsd');
  [$descA, $efectivo, $inc, $cambio].forEach((input) => (input.disabled = true));
  const indexforpag = $selectForpag.selectedIndex,
    indexvend = $selectVend.selectedIndex,
    user = JSON.parse(localStorage.getItem('user'));

  console.table([
    {
      fecha: getFecha('yymmdd'),
      valgra: $base.value,
      valiva: $iva.value,
      valnet: $neto.value,
      forpag: $selectForpag[indexforpag].textContent.substring(12, 14),
      nitcli: $nitTercero.value,
      nomcli: $terceroName.placeholder,
      codven: $selectVend[indexvend].value,
      perfil: user.PERFIL,
      horfac: getFecha('hhmm'),
      fechaElec: getFecha('yyyy-mm-dd-hh:mm:ss')
    }
  ]);
}

/*Toma los valores necesarios del producto seleccionado en la tabla y
 los pasa a sus respectivos inputs
 class: edit-refer: se le agrega a los inputs para que el estado de actualizar
 no cambie a su estado normal cuando se le da click a estos inputs
 */
function rowValuesToInputs($row) {
  let [row, descrip, codigo, cant, punit, total, desc] = $row.children;
  $refer.value = codigo.textContent;
  $cantidad.value = cant.textContent;
  $precioUnit.value = punit.textContent;
  $porcentaje.value = desc.textContent.replace('%', '');
  $refer.dataset.bsOriginalTitle = descrip.textContent;
  [$refer, $cantidad, $precioUnit, $porcentaje].forEach((element) => {
    element.classList.add('edit-refer');
  });
}

function updateProductRow() {
  const $row = getSelectedRow($tblProductos);
  if ($row) {
    let total = totalCantidad($precioUnit.value, $cantidad.value);
    $row.querySelector('.cant').textContent = $cantidad.value;
    $row.querySelector('.punit').textContent = $precioUnit.value;
    $row.querySelector('.desc').textContent = `${$porcentaje.value}%`;
    $row.querySelector('.total').textContent = formatNum(total);
    totaTable('tableProductos');
  }
}

function toggleButton(options) {
  const $span = d.createElement('span');
  let { $btn, clase, icon, title } = options;
  $btn.classList = `btn btn-${clase} form-control`;
  $btn.dataset.bsOriginalTitle = title;
  $span.classList.add('material-icons-outlined');
  $span.textContent = icon;
  $btn.firstElementChild.replaceWith($span);
}

export function addDataRow() {
  d.addEventListener('click', (e) => {
    const t = e.target;
    //Add tercero values to inputs
    if (t.matches('#btnModalTercero')) {
      let $row = getSelectedRow($tblTercero);
      if ($row) {
        addTercero({
          NITCLI: $row.querySelector('.nit').textContent,
          NOMCLI: $row.querySelector('.nombre').textContent
        });
      }
    }
    //Add refer values to inputs
    if (t.matches('#btnModalReferencia')) {
      let $row = getSelectedRow($tblReferencia);
      if ($row) {
        addReferencia({
          name: $row.querySelector('.name').textContent,
          precio: $row.querySelector('.precio').textContent,
          refer: $row.querySelector('.refer').textContent
        });
      }
      $btnAddRerencia.click();
    }
    //Reset facturación
    if (t.matches('#btnReset')) {
      resetAll();
    }
    //Add product to table
    // if (t.matches('#btnAddReferencia') || t.matches('#btnAddReferencia *')) {
    //   addProducto();
    // }
  });
}

function addTercero(tercero) {
  let { NITCLI, NOMCLI } = tercero;
  $nitTercero.value = NITCLI;
  $terceroName.placeholder = NOMCLI.trim();
  d.getElementById('nitTercero-mp').value = NITCLI;
  d.getElementById('terceroName-mp').value = NOMCLI.trim();
  alertToast('success', NOMCLI);
}

export function addReferencia(referencia) {
  let { name, precio, refer, code } = referencia;
  $refer.value = refer;
  $precioUnit.value = precio;
  $cantidad.value = 1;
  $cantidad.focus();
  $refer.dataset.bsOriginalTitle = name;
  $refer.dataset.referCode = code;
  inputFormat('#precioUnit');
  alertToast('success', name);
}

export function uniqueEvents() {
  $btnAddRerencia.addEventListener('click', addProducto);
  $btnTotales.addEventListener('click', totales);
}

/**
 * Captura el evento click de un input radio CODIGO, para cambiar el tipo de input de text
 * a number y quitar el input check 'Que contenga'
 */
//! Refactorizar
export function triggerRadioCode() {
  d.addEventListener('click', (e) => {
    if (e.target.matches('input[type="radio"]')) {
      let $row = e.target.closest('.row'),
        $radio = $row.querySelector('.change-radio'),
        $input = $row.querySelector('input[type="number"]');
      if ($input) $input.setAttribute('type', 'text');
      $row.querySelector('input[type="checkbox"]').removeAttribute('disabled');
      if ($radio.checked) {
        $input = $row.querySelector('input[type="text"');
        $input.setAttribute('type', 'number');
        $input.setAttribute('maxlength', '6');
        $row.querySelector('input[type="checkbox"]').setAttribute('disabled', true);
      }
    }
  });
}
/**
 * Limpia todos los inputs y tablas para volver a el estado de inicio
 */
export function resetAll() {
  if (FACTURANDO) return cancelarFacturacion();
  $tblProductos.querySelector('tbody').innerHTML = '';
  $selectForpag.selectedIndex = 0;
  $selectVend.selectedIndex = 0;
  General.setEmptyRows();
  resetReferenceInputs();
  clearSelectionTable(getSelectedRow($tblReferencia));
  $nitTercero.value = '1000';
  $terceroName.placeholder = 'VENTAS DE CONTADO';
  $lblTotal.textContent = '$ 0';
  inputValueToZero(
    $valBruto,
    $base,
    $iva,
    $neto,
    $totalDesc,
    $descA,
    $porcentaje,
    $inc,
    $cree,
    $saldFavor,
    $retFue,
    $retIva,
    $retIca,
    $comis,
    $propina,
    $efectivo,
    $cambio
  );
  disabled($descA, $inc, $efectivo);
}

function cancelarFacturacion() {
  $cambio.value = 0;
  disabled($descA, $inc, $efectivo);
  enabled(
    $nitTercero,
    $selectForpag,
    $selectVend,
    $refer,
    $cantidad,
    $precioUnit,
    $porcentaje,
    $searchReferencia,
    $searchTercero,
    $btnAddRerencia
  );
  toggleEventListener($btnTotales, {
    typeEvent: 'click',
    removeEvent: imprimir,
    addEvent: totales,
    title: 'Totales'
  });
  FACTURANDO = false;
}

export function getProductosFromTable() {
  const $tbody = $tblProductos.querySelector('tbody'),
    $rows = $tbody.querySelectorAll('.rowTemplate'),
    productos = [];
  $rows.forEach(($row) => {
    let $td = $row.children;
    let producto = {
      cod: $td[2].textContent,
      descrip: $td[1].textContent,
      cant: $td[3].textContent,
      punit: $td[4].textContent,
      total: $td[5].textContent
    };
    productos.push(producto);
  });
  return productos;
}

export function foobar() {
  d.addEventListener('click', (e) => {
    if (e.target.matches('#btnPedido') || e.target.matches('#btnPedido *')) {
      const USER_SESSION = JSON.parse(sessionStorage.getItem('user'));
      checkUserBD(USER_SESSION).then((user) => {
        if (!user)
          alertTimer({
            title: 'Usuario no válido!',
            html: 'Redireccionando al login',
            callback: redirectLogin
          });
      });
      const $tbody = $tblProductos.querySelector('tbody'),
        $rows = $tbody.querySelectorAll('.rowTemplate'),
        sesionStr = [];
      $rows.forEach(($row) => {
        let $td = $row.children,
          refercode = $td[2].textContent,
          punit = parseF($td[4].textContent),
          total = parseF($td[5].textContent),
          pordes = parseInt($td[6].textContent.replace('%', '')),
          valdes = getDescuento(total, pordes),
          valnet = total - valdes,
          valbas = valnet / IVA;

        let producto = {
          cod: refercode,
          descrip: $td[1].textContent,
          cant: parseF($td[3].textContent),
          valtra: punit,
          valbas,
          valiva: valnet - valbas,
          pordes: pordes,
          valnet,
          valdes,
          preuco: 1,
          valpreu: 1,
          porivaref: 19
        };
        sesionStr.push(producto);
      });
      sesionStr.length
        ? sessionStorage.setItem('productos', JSON.stringify(sesionStr))
        : null;
    }
  });
}

export function getDetalleFactura() {
  return {
    emailEmpresa: d.getElementById('mailjet').value,
    productos: getProductosFromTable(),
    values: {
      fecha: getFecha('dd/mm/yyyy'),
      valbruto: $valBruto.value,
      desc: $totalDesc.value,
      base: $base.value,
      iva: $iva.value,
      retfue: $retFue.value,
      retiva: $retIva.value,
      total: $neto.value
    }
  };
}

function setIndividualProduct() {}

/**
 * Obtiene la fecha actual con base al formato pasado.
 * @param {String} format Cadena que indica el formato que se quiere obtener de la fecha.
 * @returns Un String con la fecha actual.
 */
export const getFecha = (format) => {
  let date = new Date(),
    year = date.getFullYear(),
    month = date.getMonth() + 1,
    day = date.getDate().toString().padStart(2, '0'),
    hours = date.getHours().toString().padStart(2, '0'),
    minutes = date.getMinutes().toString().padStart(2, '0'),
    seconds = date.getSeconds().toString().padStart(2, '0'),
    formatDate = '';
  month = month.toString().padStart(2, '0');

  switch (format.toLowerCase()) {
    case 'dd/mm/yyyy':
      formatDate = `${day}/${month}/${year}`;
      break;
    case 'yymmdd':
      year = year.toString().substring(2);
      formatDate = `${year}${month}${day}`;
      break;
    case 'yyyy-mm-dd':
      formatDate = `${year}-${month}-${day}`;
      break;
    case 'yyyy-mm-dd-hh:mm:ss':
      formatDate = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
      break;
    case 'hhmm':
      formatDate = `${hours}${minutes}`;
      break;
  }
  return formatDate;
};

/**
 * Realiza una petición AJAX a la url dada y devuelve un objeto
 * con la informacion retornada por el servidor
 */
/**
 *
 * @param {String} url
 * @param {Object} options Objeto que contiene la información de la petición AJAX
 * @returns
 */
export async function ajax(url, options = null) {
  try {
    let res = await fetch(url, options);
    if (!res.ok) throw { status: res.status, statusText: res.statusText };
    let data = await res.json();
    return data;
  } catch (err) {
    console.log(err.status, err.statusText);
    return error(err);
  }
}

export function error(err) {
  alert({
    icon: 'error',
    title: err.statusText || 'Ocurrió un problema',
    text: 'Verifique'
  });
}

//Función para formatear números miles
export function formatNum(num) {
  return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}

export function handlerDobleclick() {
  d.addEventListener('dblclick', (e) => {
    if (e.target.parentElement.matches('.dblclick-refer')) {
      let $td = e.target.parentElement;
      addReferencia({
        name: $td.querySelector('.name').textContent,
        precio: $td.querySelector('.precio').textContent,
        refer: $td.querySelector('.refer').textContent
      });
      d.querySelector('#btnAddReferencia').click();
      hideModal('modalReferencia');
    }
    if (e.target.parentElement.matches('.dblclick-tercero')) {
      let $tr = e.target.parentElement;
      addTercero({
        NITCLI: $tr.querySelector('.nit').textContent,
        NOMCLI: $tr.querySelector('.nombre').textContent
      });
      hideModal('modalTerceros');
    }
    if (e.target.parentElement.matches('.product-table')) {
      deleteProductRow($tblProductos);
    }
  });
}

export function HandlerEnterKey() {
  d.addEventListener('keydown', async (e) => {
    if (e.target.classList.contains('modal') && e.key === 'Enter') {
      if (getSelectedRow(e.target.querySelector('table'))) {
        e.target.querySelector('.btn-success').click();
      }
    }
    if (e.target === $nitTercero && e.key === 'Enter') {
      if (!validarCampoTercero()) return;
      verificarTercero(e.target.value).then((res) => {
        if (res.length > 0) {
          addTercero(res[0]);
        } else {
          alertOptions({
            title: '¡El tercero no existe!',
            text: '¿Desea crearlo?',
            icon: 'question',
            confirmButtonText: 'Si',
            cancelButtonText: 'Cancelar',
            showCancelButton: true
          });
          d.querySelector('.swal2-confirm').dataset.bsToggle = 'modal';
          d.querySelector('.swal2-confirm').dataset.bsTarget = '#modalCrearTercero';
        }
      });
    }
    if (e.target === $refer && e.key === 'Enter') {
      if (!$refer.value) return;
      ajax(URL_REFERENCIA, {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `txtReferencia=${e.target.value}&chkTipoBusqueda=input`
      }).then((res) => {
        if (res.length > 0) {
          addReferencia(res[0]);
        } else {
          alert({
            title: 'La referencia no existe',
            text: 'Verifique',
            icon: 'warning'
          });
          resetReferenceInputs();
        }
      });
    }
  });
}

export function datalistInput() {
  const listRefer = d.getElementById('list-refer');
  const listTercero = d.getElementById('list-terceros');
  d.addEventListener('keyup', (e) => {
    if (e.target === $refer && $refer.value) {
      listRefer.innerHTML = '';
      ajax(URL_REFERENCIA, {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `txtReferencia=${$refer.value}&chkTipoBusqueda=name&chkContain=`
      }).then((res) => {
        console.clear();
        res.forEach((val) => {
          let { name, code } = val;
          console.log(name);
          $datalist.querySelector('option').value = code;
          $datalist.querySelector('option').textContent = name;
          let $clone = d.importNode($datalist, true);
          $fragment.appendChild($clone);
        });
        console.log($fragment);
        listRefer.appendChild($fragment);
      });
    }
    if (e.target === $nitTercero && $nitTercero.value) {
      listTercero.innerHTML = '';
      ajax(URL_TERCERO, {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `txtTercero=${$nitTercero.value}&chkTipoBusqueda=nit`
      }).then((res) => {
        res.forEach((val) => {
          let { nomcli, nitcli } = val;
          $datalist.querySelector('option').value = nitcli;
          $datalist.querySelector('option').textContent = nomcli;
          let $clone = d.importNode($datalist, true);
          $fragment.appendChild($clone);
        });
        listTercero.appendChild($fragment);
      });
    }
  });
}

function deleteProductRow($table) {
  const productos = [];
  let $row = getSelectedRow($table);
  alertOptions(
    {
      icon: 'question',
      title: '¿Eliminar referencia?',
      text: $row.querySelector('.descrip').textContent,
      confirmButtonText: 'Eliminar',
      cancelButtonText: 'Cancelar',
      showCancelButton: true
    },
    () => {
      $row.remove();
      let $rows = $table.querySelector('tbody').querySelectorAll('.product-table');
      $rows.forEach(($tr) => {
        let { children } = $tr;
        productos.push({
          name: children[1].textContent,
          code: children[2].textContent,
          cantidad: children[3].textContent,
          punit: children[4].textContent,
          dcto: children[6].textContent.replace('%', '')
        });
      });
      $table.querySelector('tbody').innerHTML = '';
      General.setEmptyRows();
      for (const producto of productos) {
        addToTable(producto);
      }
      totaTable('tableProductos');
      resetReferenceInputs();
    }
  );
}

export function appendForm(values) {
  let formdata = new FormData(values.form);
  for (const key in values) {
    formdata.append(key, values[key]);
  }
  return formdata;
}

export function userLogout() {
  d.addEventListener('click', (e) => {
    if (e.target.matches('#logout-btn')) {
      localStorage.clear();
      sessionStorage.clear();
    }
  });
}

export function handlerArrowKeys() {}

function disabled(...inputs) {
  inputs.forEach((input) => (input.disabled = true));
}

function enabled(...inputs) {
  inputs.forEach((input) => (input.disabled = false));
}

function inputValueToZero(...inputs) {
  inputs.forEach((input) => (input.value = 0));
}

export function loadLinks() {
  PATH_HOME = location.origin + location.pathname;
  URL_FACTURA = PATH_HOME + 'factura.html';
  let $link_inicio = d.getElementById('link-inicio');
  let $link_navbar = d.getElementById('link-navbar');
  [$link_inicio, $link_navbar].forEach(($link) => $link.setAttribute('href', PATH_HOME));
}

export function redirectLogin() {
  localStorage.clear();
  sessionStorage.clear();
  let pathname = location.pathname;
  let length = location.pathname.lastIndexOf('/') + 1;
  pathname = pathname.substr(0, length);
  location.pathname = pathname + PATH_LOGIN;
}
/* ----------------------------------------------
 ** SAMUEL
 **---------------------------------------------- */

export function hiddenInputsFactura() {
  let $campos = d.querySelectorAll('.campos-factura');
  d.addEventListener('click', (e) => {
    if (e.target.matches('.checkbox-gestion input')) {
      $campos.forEach((campo) => {
        if (campo.classList.contains(e.target.id)) {
          e.target.checked
            ? campo.classList.remove('hidden')
            : campo.classList.add('hidden');
          e.target.checked
            ? campo.parentElement.classList.remove('hidden')
            : campo.parentElement.classList.add('hidden');
        }
      });
    }
  });
}

export function loadInputsFactura() {
  let $checks = d.querySelectorAll('.checkbox-gestion input');
  $checks.forEach((check) => {
    check.checked
      ? d.querySelector(`.${check.id}`).classList.remove('hidden')
      : d.querySelector(`.${check.id}`).classList.add('hidden');
  });
}
