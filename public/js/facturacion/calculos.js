import {
  $base,
  $iva,
  $lblTotal,
  $totalDesc,
  $valBruto,
  inputFormat,
  $neto
} from './sources.js';

const d = document,
  $efectivo = d.getElementById('efectivo'),
  $cambio = d.getElementById('cambio'),
  IVA = 1.19;

export { IVA };
/** Calcula el cambio en tiempo real, en base a los inputs NETO y EFECTIVO */
export function calcularCambio() {
  d.addEventListener('change', (e) => {
    if (e.target === $neto) {
      console.log('in');
      $cambio.value = 0;
      let neto = parseF($neto.value);
      let cambio = parseF($cambio.value);
      neto ? ($cambio.value = cambio -= neto) : 0;
    }
  });
  d.addEventListener('keyup', (e) => {
    if (e.target === $efectivo) {
      let montoPago = parseF($neto.value);
      montoPago = montoPago - montoPago * 2; //Salva el valor del monto en negativo
      $cambio.value = montoPago;
      let efectivo = parseF($efectivo.value);
      let cambio = parseF($cambio.value);
      efectivo ? ($cambio.value = cambio += efectivo) : montoPago;
      $cambio.focus();
    }
  });
}

/** Calcula el total de cada producto según la cantidad estipulada. */
export function totalCantidad(precio, cantidad) {
  let x = parseFloat(precio.replaceAll(',', ''));
  let y = parseFloat(cantidad);
  return x * y;
}
/** Actualiza los campos al agregar una referencia */
export function updateValues(values) {
  let { base, iva, valBruto, total, totalDto } = values;
  $base.value = base;
  $iva.value = iva;
  $neto.value = total;
  $valBruto.value = valBruto;
  $totalDesc.value = totalDto;
  $lblTotal.textContent = `$ ${Math.round(Number(total)).toLocaleString()}`;
  inputFormat($totalDesc, $valBruto, $base, $iva, $neto);
}

/**
 * Obtiene la base del valor total de una referencia.
 * @param {String} $total El valor total de la referencia
 * @returns El valor del la referencia sin el IVA aplicado.
 */
export function getBase(total) {
  return Math.round(total / IVA);
}

/** Obtiene el descuento en base al valor total de la referencia dada. */
export function getDescuento(value, desc) {
  return Math.round((value * desc) / 100);
}

function getIVA(total, base) {
  return Math.round(total - base);
}
/**
 * Recibe un String que reemplaza puntos y comas, posteriormente
 * lo parsea a un Float
 * @param {String} $val Valor (numérico) del elemento para parsear
 * @returns Un float
 */
export function parseF($val) {
  if (typeof $val === 'string') {
    let val = $val.replaceAll(',', '');
    if (val === $val) val = $val.replaceAll('.', '');
    return parseFloat(val);
  }
  return $val;
}

/**
 * Calcula el total de la tabla con base en los productos agregados y
 * actualiza los campos correspondientes
 * @param {String} idTable Id de la tabla
 */
export function totaTable(idTable) {
  const $tbody = d.getElementById(idTable).querySelector('tbody');
  const $rows = $tbody.querySelectorAll('.product-table');
  let total, valBruto, totalDto;
  total = valBruto = totalDto = 0;
  $rows.forEach(($row) => {
    let totalCantidad = parseF($row.querySelector('.total').textContent),
      porcentajeDcto = $row.querySelector('.desc').textContent,
      descuento = getDescuento(totalCantidad, parseF(porcentajeDcto.replace('%', '')));
    total += totalCantidad - descuento; //totalCompra
    valBruto += totalCantidad;
    totalDto += descuento;
  });
  let values = {
    base: getBase(total),
    iva: getIVA(total, getBase(total)),
    valBruto: Math.round(valBruto),
    total: Math.round(total),
    totalDto
  };
  updateValues(values);
}
