<script>
    $('#frm_rol').validate({
        rules: {

            hotel: {required: true},
            nombre_habitacion: {required: true},
            tipo_habitacion: {required: true},
            acomodacion: {required: true}
        },
        messages: {
            hotel: {required: 'Seleccione el hotel.'},
            nombre_habitacion: {required: 'Ingrese el nombre habitacion.'},
            tipo_habitacion: {required: 'Ingrese el tipo.'},
            acomodacion: {required: 'Ingrese la acomodacion.'}

        },
        debug: true,
        invalidHandler: function () {

            alert('Hay información en el formulario sin diligenciar por favor completarla');
            return false;
        },
        submitHandler: function (form) {
            CrearHabitacion();
        }
    });
</script>

<div class="panel panel-default">

    <div class="panel-heading">
        <h3 class="panel-title">Nueva habitacion</h3>
    </div>
    <div class="panel-body" >
        <form id="frm_rol">
            <table class="table table-bordered table-striped">

                <tr>
                    <td>Seleccione el hotel</td>
                    <td>
                        <select id="hotel" name="hotel">
                            <option value="">--seleccione--</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Ingrese el nombre de la habitacion</td>
                    <td><input type="text" id="nombre_habitacion" name="nombre_habitacion"></td>
                </tr>
                <tr>
                    <td>Seleccione el tipo de habitacion</td>
                    <td>
                        <select id="tipo_habitacion" name="tipo_habitacion" onchange="CambioAcomodacion()">
                            <option value="">--seleccione--</option>
                            <option value="ESTANDAR">ESTANDAR</option>
                            <option value="JUNIOR">JUNIOR</option>
                            <option value="SUITE">SUITE</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Seleccione la acomodacion</td>
                    <td id="cont_acomodacion"></td>
                </tr>
                <td colspan="2"><center>

                    <button id="btoGuardarHabi" name="btoGuardarHabi" class="btn btn-success" type="submit" >Guardar</button>
                </center></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<script>
    HotelesL();
    $("#hotel").select2();
</script>

