<?php
require_once('../model/facturasModel.php');

class facturasController
{

    public static function view_get_facturas()
    {
        try {
            return facturasModel::get_facturas();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    public static function view_get_detalle_factura($id_factura) {
        return facturasModel::get_detalle_factura($id_factura);
    }
    
    

}
