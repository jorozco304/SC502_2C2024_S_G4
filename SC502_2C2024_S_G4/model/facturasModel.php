<?php
require_once('../model/conexionModel.php');

class facturasModel{
    

    public static function get_facturas(){

        try {
            $lista=conexionModel::now_execute('call pr_getAllFacturas');
            return$lista;
        } catch (Exception $e) {
            echo "Error: ". $e->getMessage();
            
        }
        

    }

    public static function get_detalle_factura($id_factura) {
        try {
            $scriptSQL = "
                SELECT v.id_venta, p.descripcion AS producto, v.cantidad, v.precio, (v.cantidad * v.precio) AS total_linea,f.total
                FROM venta v
                JOIN producto p ON v.id_producto = p.id_producto
                JOIN factura f ON v.id_factura=f.id_factura
                WHERE v.id_factura = " . intval($id_factura);
            
            return conexionModel::now_execute($scriptSQL);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>