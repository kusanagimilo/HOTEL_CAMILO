<script>
    $('#frm_rol').validate({
        rules: {

            nombre_hotel: {required: true},
            direccion: {required: true},
            ciudad: {required: true},
            nit: {required: true},
            numero_habitaciones: {required: true}

        },
        messages: {
            nombre_hotel: {required: 'Ingrese el nombre del hotel.'},
            direccion: {required: 'Ingrese la direccion del hotel.'},
            ciudad: {required: 'Ingrese la ciudad del hotel.'},
            nit: {required: 'Ingrese el nit del hotel.'},
            numero_habitaciones: {required: 'Ingrese el # de habitaciones.'}
        },
        debug: true,
        invalidHandler: function () {

            alert('Hay información en el formulario sin diligenciar por favor completarla');
            return false;
        },
        submitHandler: function (form) {
            CrearHotel();
        }
    });
</script>

<div class="panel panel-default">

    <div class="panel-heading">
        <h3 class="panel-title">Nuevo hotel</h3>
    </div>
    <div class="panel-body" >
        <form id="frm_rol">
            <table class="table table-bordered table-striped">

                <tr>
                    <td>Ingrese el nombre del hotel</td>
                    <td><input type="text" id="nombre_hotel" name="nombre_hotel"></td>
                </tr>
                <tr>
                    <td>Ingrese la ciudad de el hotel</td>
                    <td><input type="text" id="ciudad" name="ciudad"></td>
                </tr>
                <tr>
                    <td>Ingrese la direccion del hotel</td>
                    <td><input type="text" id="direccion" name="direccion"></td>
                </tr>
                <tr>
                    <td>Ingrese el nit del hotel</td>
                    <td><input type="text" id="nit" name="nit"></td>
                </tr>
                <tr>
                    <td>Ingrese el numero de habitaciones</td>
                    <td><input type="text" id="numero_habitaciones" name="numero_habitaciones"></td>
                </tr>
                <td colspan="2"><center>

                    <button id="btoGuardarHote" name="btoGuardarHote" class="btn btn-success" type="submit" >Guardar</button>
                </center></td>
                </tr>
            </table>
        </form>
    </div>
</div>

