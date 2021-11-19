URL_NOMINA = 'php/nomina.php',
    URL_TERCERO = './php/t64.php';

let $nominaTemp = document.getElementById('nominaTemplate').content;
let $nominaTemp2 = document.getElementById('nominaTemplate2').content;
let $tblNomina = document.getElementById('tblNomina');
let $fragment = document.createDocumentFragment();
let $fragment2 = document.createDocumentFragment();
let $fragment3 = document.createDocumentFragment();

async function buscarPorId(id) {
    let data = await ajax(URL_TERCERO, {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `txtTercero=${id}&chkTipoBusqueda=`
    });

    // data.forEach(element => {
    //     let { NOMCLI } = element;
    //     $nominaTemp.querySelector('.docEmpleado').textContent = NOMCLI;
    //     console.log(NOMCLI);

    // });

    return data[0].NOMCLI;
}



document.addEventListener('DOMContentLoaded', () => {

    for (let i = 2022; i <= 2120; i++) {

        var select = document.getElementById("anio");

        let option = document.createElement("option");

        option.setAttribute('value', i)

        option.textContent = i;

        select.appendChild(option);

    }

})


document.addEventListener('click', async e => {
    let formdata = new FormData();
    if (e.target.matches('#btnBuscar')) {
        formdata.append('anio', document.getElementById('anio').value);
        formdata.append('mes', document.getElementById('mes').value);
        formdata.append('periodo', document.getElementById('periodo').value);
        let data = await ajax(URL_NOMINA, {
            method: 'POST',
            body: formdata
        })
        buscarNomina(data);
    }
});

async function ajax(url, options = null) {
    try {
        let res = await fetch(url, options);
        if (!res.ok) throw { status: res.status, statusText: res.statusText };
        let data = await res.json();
        return data;
    } catch (err) {
        console.log(err.status, err.statusText);
    }
}


function formatNum(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}

function buscarNomina(data) {

    $tblNomina.querySelector('#body1').innerHTML = '';
    $tblNomina.querySelector('#body2').innerHTML = '';
    // $tblNomina.querySelector('#totales').innerHTML = '';
    if (data) {
        let { TABLA1, TABLA2 } = data;
        // console.log(TABLA1, TABLA2);
        TABLA1.forEach(async (value) => {
            let { ID_EMPLEADO, DOCUMENTO_EMPLEADO, DIAS_TRABAJADOS, SALARIO_BASICO_GUARDADO, AUXILIO_TRANSPORTE, HORAS_EXTRAS, COMISIONES, TOTAL_DEVENGADO, SALUD, OTRAS_DEDUCCIONES, TOTAL_DEDUCIONES, NETO } = value;

            // buscarPorId(DOCUMENTO_EMPLEADO).then(tercero =>{

            // documento = $nominaTemp.querySelector('.docEmpleado').textContent = tercero;
            $nominaTemp.querySelector('.docEmpleado').textContent = DOCUMENTO_EMPLEADO;
            // $nominaTemp.querySelector('.idEmpleado').textContent = ID_EMPLEADO;
            $nominaTemp.querySelector('.diasTrabajados').textContent = formatNum(DIAS_TRABAJADOS);
            $nominaTemp.querySelector('.totalSalarioGuardado').textContent = "$ " + formatNum(SALARIO_BASICO_GUARDADO);
            $nominaTemp.querySelector('.auxTransporte').textContent = "$ " + formatNum(AUXILIO_TRANSPORTE);
            $nominaTemp.querySelector('.horasExtras').textContent = "$ " + formatNum(HORAS_EXTRAS);
            $nominaTemp.querySelector('.comisiones').textContent = "$ " + formatNum(COMISIONES);
            $nominaTemp.querySelector('.totalDevengado').textContent = "$ " + formatNum(TOTAL_DEVENGADO);
            $nominaTemp.querySelector('.salud').textContent = "$ " + formatNum(SALUD);
            $nominaTemp.querySelector('.pension').textContent = "$ " + formatNum(SALUD);
            $nominaTemp.querySelector('.otrasDeducciones').textContent = "$ " + formatNum(OTRAS_DEDUCCIONES);
            $nominaTemp.querySelector('.totalDeduciones').textContent = "$ " + formatNum(TOTAL_DEDUCIONES);
            $nominaTemp.querySelector('.neto').textContent = "$ " + formatNum(NETO);
            let $clone = document.importNode($nominaTemp, true);
            $fragment.appendChild($clone);
            // }); 
        });





        let totalSalud = 0, totalPension = 0, totalArl = 0, totalCaja = 0, totalIcbf = 0, totalSena = 0, totalPrima = 0, totalCesantias = 0, totalIntereses = 0, totalVacaciones = 0;
        TABLA2.forEach((value) => {
            let { ID, ID_NOMINA, ID_EMPLEADO, SALUD_EMPLEADOR, PENSION_EMPLEADOR, ARL, CAJA, ICBF, SENA, PRIMA, CESANTIAS, INTERESES, VACACIONES } = value;
            // $nominaTemp2.querySelector('.id').textContent = formatNum(ID);
            // $nominaTemp2.querySelector('.idNomina').textContent = formatNum(ID_NOMINA);
            $nominaTemp2.querySelector('.idEmpleado').textContent = formatNum(ID_EMPLEADO);
            $nominaTemp2.querySelector('.saludEmpleado').textContent = "$ " + formatNum(SALUD_EMPLEADOR);
            $nominaTemp2.querySelector('.pensionEmpleador').textContent = "$ " + formatNum(PENSION_EMPLEADOR);
            $nominaTemp2.querySelector('.arl').textContent = "$ " + formatNum(ARL);
            $nominaTemp2.querySelector('.caja').textContent = "$ " + formatNum(CAJA);
            $nominaTemp2.querySelector('.icbf').textContent = "$ " + formatNum(ICBF);
            $nominaTemp2.querySelector('.sena').textContent = "$ " + formatNum(SENA);
            $nominaTemp2.querySelector('.prima').textContent = "$ " + formatNum(PRIMA);
            $nominaTemp2.querySelector('.cesantias').textContent = "$ " + formatNum(CESANTIAS);
            $nominaTemp2.querySelector('.intereses').textContent = "$ " + formatNum(INTERESES);
            $nominaTemp2.querySelector('.vacaciones').textContent = "$ " + formatNum(VACACIONES);
            let $clone = document.importNode($nominaTemp2, true);
            $fragment2.appendChild($clone);


            totalSalud += parseFloat(SALUD_EMPLEADOR)
            totalPension += parseFloat(PENSION_EMPLEADOR)
            totalArl += parseFloat(ARL)
            totalCaja += parseFloat(CAJA)
            totalIcbf += parseFloat(ICBF)
            totalSena += parseFloat(SENA)
            totalPrima += parseFloat(PRIMA)
            totalCesantias += parseFloat(CESANTIAS)
            totalIntereses += parseFloat(INTERESES)
            totalVacaciones += parseFloat(VACACIONES)

        });


        $tblNomina.querySelector('#body1').appendChild($fragment);
        $tblNomina.querySelector('#body2').appendChild($fragment2);

        $tblNomina.querySelector('.tSalud').textContent = "$ " + formatNum(totalSalud.toFixed(2));
        $tblNomina.querySelector('.tPension').textContent = "$ " + formatNum(totalPension.toFixed(2));
        $tblNomina.querySelector('.tArl').textContent = "$ " + formatNum(totalArl.toFixed(2));
        $tblNomina.querySelector('.tCaja').textContent = "$ " + formatNum(totalCaja.toFixed(2));
        $tblNomina.querySelector('.tIcbf').textContent = "$ " + formatNum(totalIcbf.toFixed(2));
        $tblNomina.querySelector('.tSena').textContent = "$ " + formatNum(totalSena.toFixed(2));
        $tblNomina.querySelector('.tPrima').textContent = "$ " + formatNum(totalPrima.toFixed(2));
        $tblNomina.querySelector('.tCesantias').textContent = "$ " + formatNum(totalCesantias.toFixed(2));
        $tblNomina.querySelector('.tIntereses').textContent = "$ " + formatNum(totalIntereses.toFixed(2));
        $tblNomina.querySelector('.tVacaciones').textContent = "$ " + formatNum(totalVacaciones.toFixed(2));


    } else {

        return alert('No se encontraron resultados');

    }
}