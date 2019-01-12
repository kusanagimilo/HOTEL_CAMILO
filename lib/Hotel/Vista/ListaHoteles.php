<input type="button" class="btn btn-success" name="crear_hotel" value="Crear hotel" onclick="DialogCrearHotel()">
<br>
<br>
<table id="hoteles" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Nombre hotel</th>
            <th>Ciudad</th>
            <th>Direccion</th>
            <th>Nit</th>
            <th>#Habitaciones</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nombre hotel</th>
            <th>Ciudad</th>
            <th>Direccion</th>
            <th>Nit</th>
            <th>#Habitaciones</th>
        </tr>
    </tfoot>
</table>
<div id="dialog_n_hotel"></div>
<script>
    var json = ListaHoteles();

    $(document).ready(function () {
        $('#hoteles').DataTable({
            data: json,
            language: {
                url: "js/espanol.json"
            }
        });
    });
</script>