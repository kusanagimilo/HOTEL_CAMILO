function ListaHoteles() {
    var data;
    $.ajax({
        type: "POST",
        url: "lib/Hotel/Controlador/ControlHotel.php",
        async: false,
        dataType: 'json',
        data: {
            opcion: 'ListaHoteles'
        },
        success: function (retu) {
            data = retu;
        }
    });

    return data;

}

function CargarVistaHoteles() {
    var data;
    $.ajax({
        type: "POST",
        url: "lib/Hotel/Vista/ListaHoteles.php",
        async: false,
        success: function (retu) {
            data = retu;
        }
    });

    $("#contenido").html(data);

}

function DialogCrearHotel() {
    var data;

    $.ajax({
        type: "POST",
        url: 'lib/Hotel/Vista/CrearHotel.php',
        async: false,
        success: function (retu) {
            data = retu;
        }
    });

    $("#dialog_n_hotel").html(data);
    $("#dialog_n_hotel").dialog({
        width: '500',
        height: '500',
        title: 'Crear hotel',
        modal: true,
        buttons: {
            "Cerrar": function ()
            {
                $("#dialog_n_hotel").dialog('close');
                $("#dialog_n_hotel").dialog('destroy');
                $("#dialog_n_hotel").html("");
            }
        }
    });

}
function CrearHotel()
{
    var data;
    $.ajax({
        type: "POST",
        url: "lib/Hotel/Controlador/ControlHotel.php",
        async: false,
        data: {
            opcion: 'CrearHotel',
            nombre_hotel: $("#nombre_hotel").val(),
            direccion: $("#direccion").val(),
            ciudad: $("#ciudad").val(),
            nit: $("#nit").val(),
            numero_habitaciones: $("#numero_habitaciones").val()

        },
        success: function (retu) {
            data = retu;
        }
    });

    if (data == 1) {

        alert("Se ingreso correctamente el hotel");
        $("#dialog_n_hotel").dialog('close');
        $("#dialog_n_hotel").dialog('destroy');
        $("#dialog_n_hotel").html("");
        CargarVistaHoteles();


    } else if (data == 2)
    {
        alert("Este hotel ya existe cambielo");
    } else
    {
        alert("No se logro ingresar el hotel, comuniquese con soporte");
    }
}
function HotelesL() {
    var data;
    $.ajax({
        type: "POST",
        url: "lib/Hotel/Controlador/ControlHotel.php",
        async: false,
        dataType: 'json',
        data: {
            opcion: 'HotelesL'
        },
        success: function (retu) {
            data = retu;
        }
    });

    $("#hotel").html("");
    $("#hotel").append("<option value=''>--seleccione--</option>");
    $.each(data, function (key, datos) {
        //console.log(data.id_tipo_proceso);
        $("#hotel").append("<option value='" + datos.id_hotel + "'>" + datos.nit + " - " + datos.nombre_hotel + "</option>");
    });
}