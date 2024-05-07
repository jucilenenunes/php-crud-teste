<h1>Cadastrar novo usuário</h1>
<form action="?page=save" method="POST">
  <input type="hidden" name="action" value="register">
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="name" class="form-control" >
  </div>
  <div class="mb-3">
    <label>Data de Nascimento</label>
    <input type="date" name="date-birth" class="form-control" >
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" >
  </div>
  <div class="mb-3">
    <label>Senha</label>
    <input type="password" name="password" class="form-control" >
  </div>
  <div class="mb-3"></div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>