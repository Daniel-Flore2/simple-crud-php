<?php 

session_start();
//conexion a la bd de php_myAdmin
$conn = mysqli_connect(
    '127.0.0.1',
    'root',
    '', //sin password
    'crud_php',
);

/*if (isset($conn)) {
    echo "DB  is connected";
}*/

?>