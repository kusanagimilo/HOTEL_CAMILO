<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Habitacion
 *
 * @author Antares
 */
include_once '../../config/BD.php';
include '../../Hotel/Modelo/Hotel.php';

class Habitacion {

    function CrearHabitacion($data) {
        $obj_bd = new BD();
        $link = $obj_bd->Conectar();

        $obj_hotel = new Hotel();
        $informacion_hotel = $obj_hotel->InfoHotel($data['hotel']);


        $sql_cont = "SELECT id_habitacion FROM habitacion WHERE id_hotel = " . $data['hotel'] . "";

        $habitaciones = $obj_bd->NumeroFilas($sql_cont, $link);


        if ($habitaciones < $informacion_hotel[0]['numero_habitaciones']) {

            $sql_revisa_existe = "SELECT id_habitacion FROM habitacion WHERE nombre_habitacion = '" . trim($data['nombre_habitacion']) . "'
                              AND id_hotel = " . $data['hotel'] . "";
            $numero_filas = $obj_bd->NumeroFilas($sql_revisa_existe, $link);

            if ($numero_filas > 0) {
                return 2;
            } else {

                $id_habitacion = $obj_bd->UltimoId('habitacion', 'id_habitacion', $link);
                $datos = array(":id_habitacion" => $id_habitacion,
                    ":nombre_habitacion" => $data['nombre_habitacion'],
                    ":tipo_habitacion" => $data['tipo_habitacion'],
                    ":acomodacion" => $data['acomodacion'],
                    ":id_hotel" => $data['hotel']);

                $sql = "INSERT INTO habitacion(id_habitacion,nombre_habitacion,tipo_habitacion,acomodacion,id_hotel)
                    VALUES(:id_habitacion,:nombre_habitacion,:tipo_habitacion,:acomodacion,:id_hotel)";

                $result = $link->prepare($sql);
                $ejecucion = $result->execute($datos);
                if ($ejecucion) {
                    return 1;
                } else {
                    return 3;
                }
            }
        } else {
            return 4;
        }
    }

    function HabitacionesHotel($id_hotel) {

        $arreglo_retorno = array();
        $obj_bd = new BD();
        $link = $obj_bd->Conectar();
        $sql = "SELECT nombre_habitacion,tipo_habitacion,acomodacion FROM habitacion WHERE id_hotel = " . $id_hotel . ";";

        // return var_dump($sql);
        $resul = $obj_bd->ResultSet($sql, $link);

        foreach ($resul as $key => $value) {

            $arreglo_interior = array($value['nombre_habitacion'],
                $value['tipo_habitacion'],
                $value['acomodacion']);
            array_push($arreglo_retorno, $arreglo_interior);
        }

        $json = json_encode($arreglo_retorno);

        return $json;
    }

}
