<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro</title>
  <link href="/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Cadastro</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=new">Novo Usuário</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=list">Listar Usuário</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <?php
        include("connect.php");
        switch (@$_REQUEST["page"]) {
          case "new":
            include("new-user.php");
            break;
          case "list":
            include("list-user.php");
            break;
          case "save":
            include("save-user.php");
            break;
          case "edit":
            include("edit-user.php");
            break;
          case "delete":
            include("list-user.php");
            break;
          default:
            print "<h1>Bem vindos!</h1>";
        }
        ?>
      </div>
    </div>
  </div>

  <script src="/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>