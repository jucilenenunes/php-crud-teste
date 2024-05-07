<h1>Editar Usuário</h1>
<?php
$sql = "SELECT * FROM user WHERE id=" . $_REQUEST["id"];
print($sql);
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=save" method="POST">
  <input type="hidden" name="action" value="edit">
  <input type="hidden" name="id" value="<?php print $row->id; ?>">
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="name" value="<?php print $row->name; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label>Data de Nascimento</label>
    <input type="date" name="date-birth" value="<?php print $row->date_birth; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label>Senha</label>
    <input type="password" name="password" required class="form-control">
  </div>
  <div class="mb-3"></div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>