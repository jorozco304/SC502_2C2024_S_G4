<?php

class LoginController
{
    public static function inicioSesion($data)
    {
        try {
            
            if (empty($data['username']) || empty($data['password'])) {
                throw new Exception('Error al iniciar sesión. Los campos son nulos.');
            }

            $username = $data['username'];
            $password = $data['password'];

            
            if (User::authenticate($username, $password)) {
            
            } else {
                throw new Exception('Nombre de usuario o contraseña incorrectos.');
             }

             session_start();
            $_SESSION['username'] = $username;
            header('Location: ./view/principal.php');
            exit(); 

        } catch (Exception $e) {
            echo "<script>
                    alert('{$e->getMessage()}');
                    window.location.href = '/index.php';
                  </script>";
        }
    }

public static function cerrarSesion()
    {
        try {
            session_start(); 

            
            if (isset($_SESSION['username'])) {
                
                session_unset();
                session_destroy();
                
                header('Location: /index.php');
                exit(); 
            } else {
                throw new Exception('No hay una sesión activa para cerrar.');
            }

        } catch (Exception $e) {
            echo "<script>
                    alert('{$e->getMessage()}');
                    window.location.href = '/index.php';
                  </script>";
        }
    }
}

?>
