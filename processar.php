<?php

$codigo = $_POST["codigo"];
$destinatario = $_POST["destinatario"];
$cidade = $_POST["cidade"];
$peso = $_POST["peso"];

echo "<h1>Entrega Cadastrada</h1>";

echo "<p><strong>Código:</strong> " . htmlspecialchars($codigo) . "</p>";
echo "<p><strong>Destinatário:</strong> " . htmlspecialchars($destinatario) . "</p>";
echo "<p><strong>Cidade:</strong> " . htmlspecialchars($cidade) . "</p>";
echo "<p><strong>Peso:</strong> " . htmlspecialchars($peso) . " kg</p>";

?>