import { parseF } from './calculos.js';
import General from './General.js';
import {
  $cambio,
  $efectivo,
  $neto,
  $nitTercero,
  $porcentaje,
  ajax,
  alert,
  alertOptions,
  URL_REFERENCIA,
  URL_TERCERO,
  URL_USERS
} from './sources.js';
const d = document;

export async function verificarTercero(id) {
  let data = await ajax(URL_TERCERO, {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: `txtTercero=${id}&chkTipoBusqueda=`
  });
  return data;
}

export async function verificarUsuario(user) {
  let data = await ajax(URL_USERS, {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: `username=${user.PERFIL}&password=${user.ID.split('-')[0]}`
  });
  return data;
}

export async function verificarReferencia(code) {
  let data = await ajax(URL_REFERENCIA, {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: `txtReferencia=${code}&chkTipoBusqueda=validate`
  });
  return data;
}

export function validarCampoTercero() {
  let validate = true;
  if (!$nitTercero.value) {
    alert({ title: 'Digite un Nit/Tercero válido', icon: 'warning' });
    validate = false;
  }
  return validate;
}

export async function validarFacturacion() {
  if (General.getFormaPago() === 'CT') {
    alertOptions({
      icon: 'warning',
      title: 'La forma de pago Cotización no es válida',
      text: 'Verifique'
    });
    return false;
  }
  if (parseInt($porcentaje.value) > General.MAXDESGLOBAL) {
    alertOptions({
      icon: 'warning',
      title: `No se puede hacer un descuento mayor al ${General.MAXDESGLOBAL}%`
    });
    return false;
  }
}

export async function validarCamposFacturacion() {
  let data = await verificarTercero($nitTercero.value);
  if (!data.length) {
    alertOptions({
      icon: 'warning',
      title: 'El tercero no existe',
      text: 'Verifique'
    });
    return false;
  }
  if (parseInt($efectivo.value) < parseInt($neto.value)) {
    alertOptions({
      icon: 'warning',
      title: 'El efectivo debe ser mayor al neto',
      text: 'Verifique'
    });
    return false;
  }
}
