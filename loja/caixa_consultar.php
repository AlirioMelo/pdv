<?php
$conn = @mysql_connect("localhost", "root", "");
$db = @mysql_select_db("loja", $conn);

$codigo = trim($_POST['codigo']);
$sql = mysql_query("SELECT * FROM produto WHERE cbarra = '{$codigo}'");
$produto = mysql_fetch_object($sql);

echo json_encode($produto);