function FormHabitacion() {
    var data;
    $.ajax({
        type: "POST",
        url: "lib/Habitacion/Vista/CrearHabitacion.php",
        async: false,
        success: function (retu) {
            data = retu;
        }
    });

    $("#contenido").html(data);

}

function CambioAcomodacion() {

    var select = "<select id='acomodacion' name='acomodacion'><option value=''>--seleccione--</option>";

    var tipo_habitacion = $("#tipo_habitacion").val();

    if (tipo_habitacion === 'ESTANDAR') {
        select += "<option value='SENCILLA'>SENCILLA</option>" +
                "<option value='DOBLE'>DOBLE</option>";
    } else if (tipo_habitacion === 'JUNIOR') {
        select += "<option value='TRIPLE'>TRIPLE</option>" +
                "<option value='CUADRUPLE'>CUADRUPLE</option>";
    } else if (tipo_habitacion === 'SUITE') {
        select += "<option value='SENCILLA'>SENCILLA</option>" +
                "<option value='DOBLE'>DOBLE</option>" +
                "<option value='TRIPLE'>TRIPLE</option>";
    } else {
        alert("Seleccione un tipo de habitacion");
        $("#cont_acomodacion").html("");
    }

    if (tipo_habitacion != "" || tipo_habitacion != null) {
        select += "</select>";
        $("#cont_acomodacion").html(select);
    }


}

function CrearHabitacion() {
    var data;
    $.ajax({
        type: "POST",
        url: "lib/Habitacion/Controlador/HabitacionControl.php",
        async: false,
        data: {
            opcion: 'CrearHabitacion',
            nombre_habitacion: $("#nombre_habitacion").val(),
            tipo_habitacion: $("#tipo_habitacion").val(),
            acomodacion: $("#acomodacion").val(),
            hotel: $("#hotel").val()
        },
        success: function (retu) {
            data = retu;
        }
    });

    if (data == 1) {
        alert("Se ingreso correctamente la habitacion");
        FormHabitacion();
    } else if (data == 2) {
        alert("Esta habitacion ya existe en este hotel cambiela");
    } else if (data == 3) {
        alert("Ocurrio un errtor al tratar de almacenar la habitacion");
    } else if (data == 4) {
        alert("Este hotel ya posee el numero maximo de habitaciones");
    }
}
function HabitacionesHotel() {
    var data;
    $.ajax({
        type: "POST",
        url: "lib/Habitacion/Vista/HabitacionesHotel.php",
        async: false,
        success: function (retu) {
            data = retu;
        }
    });

    $("#contenido").html(data);

}

function GridHabitacionesHotel() {
    var hotel = $("#hotel").val();
    if (hotel == "" || hotel == null) {
        alert("seleccione un hotel");
    } else {
        var data;
        $.ajax({
            type: "POST",
            url: "lib/Habitacion/Controlador/HabitacionControl.php",
            async: false,
            dataType: 'json',
            data: {
                opcion: 'HabitacionesHotel',
                hotel: hotel
            },
            success: function (retu) {
                data = retu;
            }
        });

        $('#hoteles_hab').DataTable({
            data: data,
            destroy: true,
            language: {
                url: "js/espanol.json"
            }
        });

    }


}
