<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $regalo = $_POST['regalo'];

    $_SESSION['nombre'] = $nombre;
    $_SESSION['regalo'] = $regalo;

    echo "<p>Los Reyes Magos han recibido la carta de ". $nombre . " correctamente, usarán toda su magia para poder traerle " . $regalo . ". ¡Enhorabuena!<br></p>";
} else {
    echo "<p>No se ha enviado ningún dato.</p>";
}


?>