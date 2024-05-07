<h1>Lista de usuário</h1>
<?php
$sql = "SELECT * FROM user";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
  print "<table class='table table-hover table-striped table-bordered'>";
  print "<tr>";
  print "<td>#</td>";
  print "<td>Nome</td>";
  print "<td>Data de Nascimento</td>";
  print "<td>Email</td>";
  print "<td>Ações</td>";
  print "</tr>";
  while ($row = $res->fetch_object()) {
    print "<tr>";
    print "<td>" . $row->id . "</td>";
    print "<td>" . $row->name . "</td>";
    print "<td>" . $row->date_birth . "</td>";
    print "<td>" . $row->email . "</td>";
    print "<td>
                <button onclick=\"location.href='?page=edit&id=" . $row->id . "';\" class='btn btn-success'>Editar</button>
                <button 
                  onclick=\"if(confirm('Tem certeza que deseja excluir?'))
                  {location.href='?page=save&action=delete&id=" . $row->id . "';}else{false;}\" 
                  class='btn btn-danger'>Excluir
                </button>
              </td>";
    print "</tr>";
  }
  print "</table>";
} else {
  print "<p class='alert alert-danger'>Não há registros!</p>";
}
?>