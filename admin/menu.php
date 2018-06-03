<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php"><img src="imagens/logo.png" alt="Logo Mercado Mega Power"><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="menu-user" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Usuario
      <i class="fa fa-user"></i></a>
      <div class="dropdown-menu text-secondary">
        <a class="nav-link text-secondary" href="#"><i class="fa fa-pencil text-secondary"></i> Novo Usuário</a>
      </div>
    </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="menu-user" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Produto
      <i class="fa fa-television"></i></a>
      <div class="dropdown-menu text-secondary">
        <a class="nav-link text-secondary" href="home.php?op=cadastro&pg=produto"><i class="fa fa-pencil text-secondary"></i> Cadastrar Produto</a>
        <a class="nav-link text-secondary" href="home.php?op=listar&pg=produto"><i class="fa fa-list text-secondary"></i> Listar Produtos</a>
      </div>
    </li>
    </ul>
  </div>
  <ul class="navbar-nav bg-dark">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="menu-user" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Menu Usuário
      <i class="fa fa-user-circle"></i></a>
      <div class="dropdown-menu text-secondary">
        <a class="nav-link text-secondary" href="sair.php"><i class="fa fa-power-off text-secondary"></i> Logout</a>
        <a class="nav-link text-secondary" href="home.php?op=cadastro&pg=alterarSenha"><i class = "fa fa-key text-secondary"></i> Alterar Senha</a>
      </div>
    </li>
  </ul>
</nav>