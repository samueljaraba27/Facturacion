//Lista de precios tercero
let LISPRE,
  MAXDESGLOBAL = 100;
const d = document;

import VAR from './var.js';
import { calcularCambio } from './calculos.js';
import {
  requests,
  loadForpag,
  loadMunicipios,
  loadVendedores,
  getInformationEmpresa,
  loadUserInfo,
  loadDeposito,
  checkUserBD
} from './requests.js';
import {
  $tblProductos,
  editProduct,
  triggerRadioCode,
  uniqueEvents,
  handlerDobleclick,
  HandlerEnterKey,
  datalistInput,
  ajax,
  PATH_LOGIN,
  PATH_HOME,
  userLogout,
  $selectForpag,
  getProductosFromTable,
  foobar,
  loadLinks,
  hiddenInputsFactura,
  loadInputsFactura,
  redirectLogin
} from './sources.js';
import { verificarReferencia, verificarUsuario } from './validate.js';

async function initComponents() {
  checkUserSession();
  loadLinks();
  getInformationEmpresa();
  loadUserInfo();
  requests();
  loadDeposito();
  loadForpag();
  loadVendedores();
  setEmptyRows();
  renderMobile();
  calcularCambio();
  editProduct();
  triggerRadioCode();
  uniqueEvents();
  handlerDobleclick();
  HandlerEnterKey();
  datalistInput();
  userLogout();
  getProductosFromTable();
  foobar();
  hiddenInputsFactura();
  loadInputsFactura();
  d.querySelector('main').classList.remove('hidden');
  d.getElementById('searchTercero').focus();
  d.addEventListener('change', (e) => {
    if (e.target.matches('#selectDep')) loadMunicipios(e.target.value);
  });
}
//Funciones para formato movil
function isMobile() {
  return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
    navigator.userAgent
  );
}
function renderMobile() {
  const $title = d.getElementById('title');
  const $logoImg = d.getElementById('logo-esys');
  if (isMobile()) {
    $title.innerHTML = '';
    $title.appendChild($logoImg);

    // COlocar texto reducido a la tabla tableProductos
    let tables = d.querySelectorAll('table');

    for (let i = 0; i < tables.length; i++) {
      tables[i].setAttribute('style', 'font-size: xx-small;');
    }
  }
}
function getFormaPago() {
  let index = $selectForpag.selectedIndex;
  return $selectForpag[index].textContent.substring(12, 14);
}
/**
 * Carga dinamicamente filas vacías en la tabla de productos
 *
 */
function setEmptyRows() {
  const $fragment = d.createDocumentFragment();
  for (let i = 1; i < 8; i++) {
    const $tr = d.createElement('tr');
    $tr.classList.add('empty');
    $tr.innerHTML = `
      <th scope="row">${i}</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>`;
    $fragment.appendChild($tr);
  }
  $tblProductos.querySelector('tbody').appendChild($fragment);
}
async function getHTML(url) {
  // const user = JSON.parse(localStorage.getItem('user'));
  // if (!user) {
  //   d.querySelector('body').innerHTML = '';
  //   location.pathname = '/facturacion/login.html';
  // }
  // return false;
  try {
    let res = await fetch(url);
    if (!res.ok) throw Error(`Error status: ${res.status}`);
    return await res.text();
  } catch (e) {
    console.log(e);
  }
}
function checkUserSession() {
  const USER_SESSION = JSON.parse(sessionStorage.getItem('user'));
  if (!USER_SESSION) redirectLogin();
  checkUserBD(USER_SESSION).then((user) => {
    if (!user) redirectLogin();
  });
}

export default {
  initComponents,
  setEmptyRows,
  getFormaPago,
  MAXDESGLOBAL
};
