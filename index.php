<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
        <script src="js/jquery.js"></script>
        <script src="css/bootstrap-3.3.7/js/bootstrap.js"></script>
        <link href="css/jquery.dataTables.css" rel="stylesheet" id="bootstrap-css">
        <link href="js/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" id="bootstrap-css">
        <script src="js/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
        <script src="js/jquery.dataTables.js"></script>
        <script src="js/Hotel.js"></script>
        <script src="js/Habitacion.js"></script>
        <script src="js/jquery_validate.js"></script>
        <script src="js/select2/select2.js"></script>
        <link href="js/select2/select2.css" rel="stylesheet" id="bootstrap-css">
        <style>
            body{margin-top:50px;}
            .glyphicon { margin-right:10px; }
            .panel-body { padding:0px; }
            .panel-body table tr td { padding-left: 15px }
            .panel-body .table {margin-bottom: 0px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-home">
                                        </span>Hoteles</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-plus"></span><a href="#" onclick="CargarVistaHoteles()">Crear / Ver hoteles</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-bed">
                                        </span>Habitaciones</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-plus"></span><a href="#" onclick="FormHabitacion()">Adicionar habitacion</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-lamp"></span><a href="#" onclick="HabitacionesHotel()">Habitaciones por hotel</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-sm-9 col-md-9">
                    <div class="well" id="contenido">
                        <h2>SISTEMA PARA EL CONTROL DE HOTELES Y HABITACIONES</h2>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>