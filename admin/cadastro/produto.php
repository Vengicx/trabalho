<form method="post" action="home.php?op=salvar&pg=produto" id="tela" enctype="multipart/form-data">
<div class="form-group">
    <label for="id">Identificação</label>
    <input type="number" class="form-control" placeholder="ID do produto" name="id">
    <small class="form-text">Se for um novo produto, basta não preencher nada.</small>
</div>  
<div class="form-group">
    <label for="nome">Nome do Produto</label>
    <input type="text" class="form-control" placeholder="Digite o nome do Produto" required
    data-parsley-required-message="Preencha o nome do produto" name="nome">
</div>
<div class="form-group">
    <label for="descricao">Descrição do Produto</label>
    <input type="descricao" class="form-control" placeholder="Digite a descrição do produto" required
    data-parsley-required-message="Preencha a descrição do produto" name="descricao">
</div>
<div class="form-group">
    <label for="foto">Foto</label>
    <input type="file" class="form-control" accept="image/*" data-parsley-required-message="Por favor, selecione uma imagem JPG" 
    required name="foto" id="foto">
</div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>