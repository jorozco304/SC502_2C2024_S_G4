<?php

class conexionModel{

    public static function execute($scriptSQL){
        try{

            $conexion = mysqli_connect(
                'localhost',
                'root',
                '',
                'gold_coffee',

            )or die ('No puede conectarse a la BD');

            $script = mysqli_query($conexion, $scriptSQL);
            $resultado=array(
                'exito' =>$script,
                'error'=>mysqli_error($conexion),
                'conexion'=>$conexion
            );
            
            return $resultado;
        }catch(Exception $e){
            echo 'Error: '.$e->getMessage();
        }


    }

    public static function now_execute($scriptSQL){
        try {
           
            $resultado = self::execute($scriptSQL);
            $registros = array();
 
            if($resultado['exito']){
 
                while($filas = mysqli_fetch_array($resultado['exito'],MYSQLI_ASSOC)){
                    $registros[] = $filas;
                }
 
                self::desconectar($resultado['conexion'],$resultado['exito']);
 
            }
 
            return $registros;
 
        } catch (Exception $e) {
            echo "Error: ". $e->getMessage();
        }
    }
 
    private static function desconectar($conexion,$resultado){
        try {
           
            if ($resultado instanceof mysqli_result) {
                mysqli_free_result($resultado);
            }
            mysqli_close($conexion);
 
        } catch (Exception $e) {
            echo "Error: ". $e->getMessage();
        }
    }


}

?>