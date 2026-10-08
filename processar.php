<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $codigo = $_POST["codigo"];
    $destinatario = $_POST["destinatario"];
    $cidade = $_POST["cidade"];
    $peso = $_POST["peso"];

    echo "<h1>Cadastro de Entrega</h1>";

    echo "Código: " . $codigo . "<br>";
    echo "Destinatário: " . $destinatario . "<br>";
    echo "Cidade: " . $cidade . "<br>";
    echo "Peso: " . $peso . " kg<br>";

} else {

    echo "Nenhum dado foi enviado.";

}

?>