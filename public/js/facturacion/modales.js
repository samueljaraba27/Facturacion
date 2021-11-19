import {
  $cantidad,
  $nitTercero,
  $refer,
  $tblReferencia,
  ajax,
  getFecha,
  getSelectedRow
} from './sources.js';
import { loadDepartamentos, loadMunicipios } from './requests.js';

const d = document;
let modalTercero = d.getElementById('modalTerceros'),
  modalPedido = d.getElementById('modalPedido'),
  modalReferencia = d.getElementById('modalReferencia'),
  $btnTercero = d.getElementById('btnModalTercero'),
  $btnSavePedido = d.getElementById('btnSavePedido');

d.addEventListener('hidden.bs.modal', (e) => {
  e.preventDefault();
  if (e.target === modalTercero) {
    delete $btnTercero.dataset.bsToggle;
    delete $btnTercero.dataset.bsTarget;
    d.querySelector('body').classList.remove('modal-open');
  }
  if (e.target.matches('#modalReferencia')) {
    if ($refer.value) $cantidad.focus();
  }
});

d.getElementById('btnTerceroPedido').onclick = () => {
  $btnTercero.dataset.bsToggle = 'modal';
  $btnTercero.dataset.bsTarget = '#modalPedido';
};

d.addEventListener('shown.bs.modal', async (e) => {
  let $btnsearch = e.target.querySelector('button[type="submit"]');
  if ($btnsearch) $btnsearch.focus();

  if (e.target.matches('#modalCrearTercero')) {
    loadDepartamentos('selectDep');
    loadMunicipios('0');
    e.target.querySelector('#fecnac').value = getFecha('yyyy-mm-dd');
    e.target.querySelector('#nitCrearTercero').value = $nitTercero.value;
  }
  if (e.target.matches('#modal-datos')) {
    loadDepartamentos('depcia');
  }
  if (e.target.matches('#modal-foto')) {
    let t = e.target,
      $row = getSelectedRow($tblReferencia),
      title = $row.querySelector('.name').textContent,
      code = $row.querySelector('.code').textContent;

    t.querySelector('#title-foto').textContent = title;
    t.querySelector('.foto-article').setAttribute(
      'src',
      `./assets/articulos/${code}.jpg`
    );
  }
});

// d.addEventListener('show.bs.modal', (e) => {
//   let t = e.target;
//   if (t.matches('#modal-foto')) {
//     let $row = getSelectedRow($tblReferencia),
//       title = $row.querySelector('.name').textContent,
//       code = $row.querySelector('.code').textContent;
//     t.querySelector('#title-foto').textContent = title;
//     t.querySelector('.foto-article').setAttribute(
//       'src',
//       `./assets/articulos/${code}.jpg`
//     );
//   }
// });

export function hideModal(idModal) {
  let myModal = bootstrap.Modal.getInstance(d.getElementById(idModal));
  myModal.hide();
}
