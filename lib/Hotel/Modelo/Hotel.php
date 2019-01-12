<?php

include_once '../../config/BD.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hotel
 *
 * @author Antares
 */
//@$arreglo_sesion = $_SESSION['Usuario'];

class Hotel {

    function CrearHotel($data) {
        $obj_bd = new BD();
        $link = $obj_bd->Conectar();
        $id_hotel = $obj_bd->UltimoId('hotel', 'id_hotel', $link);


        $sql_revisa_existe = "SELECT id_hotel FROM hotel WHERE nit = '" . trim($data['nit']) . "'";
        $numero_filas = $obj_bd->NumeroFilas($sql_revisa_existe, $link);

        if ($numero_filas > 0) {
            return 2;
        } else {

            $datos = array(":id_hotel" => $id_hotel,
                ":nombre_hotel" => $data['nombre_hotel'],
                ":direccion" => $data['direccion'],
                ":ciudad" => $data['ciudad'],
                ":nit" => $data['nit'],
                ":numero_habitaciones" => $data['numero_habitaciones']);

            $sql = "INSERT INTO hotel(id_hotel,nombre_hotel,direccion,ciudad,nit,numero_habitaciones)
                    VALUES(:id_hotel,:nombre_hotel,:direccion,:ciudad,:nit,:numero_habitaciones)";

            $result = $link->prepare($sql);
            $ejecucion = $result->execute($datos);
            if ($ejecucion) {
                return 1;
            } else {
                return 3;
            }
        }
    }

    function ListaHoteles() {

        $arreglo_retorno = array();
        $obj_bd = new BD();
        $link = $obj_bd->Conectar();
        $sql = "SELECT nombre_hotel,direccion,ciudad,nit,numero_habitaciones FROM hotel;";
        $resul = $obj_bd->ResultSet($sql, $link);

        foreach ($resul as $key => $value) {

            $arreglo_interior = array($value['nombre_hotel'],
                $value['ciudad'],
                $value['direccion'],
                $value['nit'],
                $value['numero_habitaciones']);
            array_push($arreglo_retorno, $arreglo_interior);
        }

        $json = json_encode($arreglo_retorno);

        return $json;
    }

    function HotelesL() {

        $obj_bd = new BD();
        $link = $obj_bd->Conectar();
        $sql = "SELECT id_hotel,nombre_hotel,nit FROM hotel;";
        $resul = $obj_bd->ResultSet($sql, $link);
        $json = json_encode($resul);

        return $json;
    }

    function InfoHotel($id_hotel) {

        $obj_bd = new BD();
        $link = $obj_bd->Conectar();
        $sql = "SELECT id_hotel,direccion,nombre_hotel,nit,numero_habitaciones FROM hotel WHERE id_hotel = " . $id_hotel . ";";
        $resul = $obj_bd->ResultSet($sql, $link);
        return $resul;
    }

}
