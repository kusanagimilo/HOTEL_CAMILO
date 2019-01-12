<?php

include '../Modelo/Habitacion.php';
$obj_habitacion = new Habitacion();
$opcion = $_POST['opcion'];

if ($opcion == 'CrearHabitacion') {
    $retorno = $obj_habitacion->CrearHabitacion($_POST);
    echo $retorno;
}
if ($opcion == 'HabitacionesHotel') {
    $retorno = $obj_habitacion->HabitacionesHotel($_POST['hotel']);
    echo $retorno;
}
