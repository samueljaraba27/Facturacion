const d = document,
  $efectivo = d.getElementById('efectivo'),
  $cambio = d.getElementById('cambio');

d.querySelectorAll('.form-floating input[type="text"]').forEach((el) => {
  let cleave = new Cleave(el, {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
  });
});
$cambio.addEventListener('focus', (e) => {
  const cleave = new Cleave($cambio, {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
  });
  $efectivo.focus();
});

var tooltipTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});
