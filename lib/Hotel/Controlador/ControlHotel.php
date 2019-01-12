<?php

include '../Modelo/Hotel.php';
$obj_hotel = new Hotel();
$opcion = $_POST['opcion'];

if ($opcion == 'CrearHotel') {
    $retorno = $obj_hotel->CrearHotel($_POST);
    echo $retorno;
}if ($opcion == 'ListaHoteles') {
    $retorno = $obj_hotel->ListaHoteles();
    echo $retorno;
}if ($opcion == 'HotelesL') {
    $retorno = $obj_hotel->HotelesL();
    echo $retorno;
}
