<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

switch ($_REQUEST["action"]) {
  case 'register';
    $name = $_POST["name"];
    $date_birth = $_POST["date-birth"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user (name, date_birth, email, password) VALUES (
        '{$name}', '{$date_birth}', '{$email}', '{$password}'
      )";

    $res = $conn->query($sql);
    if ($res == true) {
      print "<script>alert('Cadastro realizado com sucesso!');</script>";
    } else {
      print "<script>alert('Não foi possível cadastrar!');</script>";
    }
    print "<script>location.href='index.php?page=list';</script>";
    break;

  case 'edit':
    $name = $_POST["name"];
    $date_birth = $_POST["date-birth"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "UPDATE user SET name='{$name}', date_birth='{$date_birth}', email='{$email}', password='{$password}'
              WHERE id=" . $_POST["id"];

    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('Cadastro editado com sucesso!');</script>";
    } else {
      print "<script>alert('Não foi possível editar!');</script>";
    }
    print "<script>location.href='index.php?page=list';</script>";
    break;

  case 'delete':
    $sql = "DELETE FROM user WHERE id=" . $_REQUEST["id"];

    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('Cadastro excluído com sucesso!');</script>";
    } else {
      print "<script>alert('Não foi possível editar!');</script>";
    }
    print "<script>location.href='index.php?page=list';</script>";
    break;
}
