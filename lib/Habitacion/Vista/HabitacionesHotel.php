<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Habitaciones por hotel</h3>
    </div>
    <div class="panel-body" style="margin: 5px 5px 5px 5px;">
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
                <td colspan="2">
            <center><input type="button" onclick="GridHabitacionesHotel()" class="btn btn-primary" value="Ver habitaciones"></center>
            </td>
            </tr>
        </table><br>
        <table id="hoteles_hab" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Nombre habitacion</th>
                    <th>Tipo</th>
                    <th>Acomodacion</th>
                </tr>
            </thead>
        </table>

    </div>
</div>
<script>
    HotelesL();
    $("#hotel").select2();
</script>