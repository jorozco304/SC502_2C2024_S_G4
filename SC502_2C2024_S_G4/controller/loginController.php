<?php

class LoginController
{
    public static function inicioSesion($data)
    {
        try {
            // Validar que se hayan proporcionado todos los datos necesarios
            if (empty($data['username']) || empty($data['password'])) {
                throw new Exception('Error al iniciar sesión. Los campos son nulos.');
            }

            $username = $data['username'];
            $password = $data['password'];

            // Aquí debes agregar la lógica de autenticación, por ejemplo:
            // if (User::authenticate($username, $password)) {
            //     // Autenticación exitosa
            // } else {
            //     throw new Exception('Nombre de usuario o contraseña incorrectos.');
            // }

            // Simulación de autenticación exitosa
            session_start();
            $_SESSION['username'] = $username;
            header('Location: ./view/principal.php');
            exit(); // Asegurarse de que se detenga la ejecución después de la redirección

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
            session_start(); // Asegúrate de que la sesión esté iniciada

            // Verificar si hay una sesión activa
            if (isset($_SESSION['username'])) {
                // Destruir la sesión
                session_unset();
                session_destroy();
                
                // Redirigir al usuario a la página de inicio
                header('Location: /index.php');
                exit(); // Asegurarse de que se detenga la ejecución después de la redirección
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
