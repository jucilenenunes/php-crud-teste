<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Variaveis de conexão
$servername = "mysql";
$username = "user_desafio";
$password = "#Senha123!";
$dbname = "db_desafio";

// Cria a conexão compartilhada
$conn = new mysqli($servername, $username, $password, $dbname);

// // Verifica a conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}