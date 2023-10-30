<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel ="icon" type="image/png"  href="./images/menu.png">
    <link rel="stylesheet" href="formulario.css">
    <title> Agência MTS - Painel de Administração</title>
</head>
<body>

<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

    <header>
    <nav class="navbar  fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style=" background-color: #1095D6">
      <span class="navbar-toggler-icon"  ></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.htm">Voltar para o painel de login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.htm">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.htm#about">Sobre Nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.htm#services">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.htm#portfolio">Portfólio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.htm#pricing">Preços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.htm#contact">Contatos</a>
          </li>
         
      </div>
    </div>
  </div>
</nav>
    

<br> <br><br><br><br>




<div class="container">
    <div class="card card-register mx-auto col-6 px-0">
        <div class="card-header bg-warning text-dark">Consultar por nome que enviou a mensagem</div>
        <div class="card-body">
            
            <form action="painel_consultar_formulario.php" method="POST">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <label for="pesquisar">Pesquisar pelo nome que enviou a mensagem</label>
                            <input type="text" name="pesquisar" class="form-control" placeholder="Pesquisar pelo nome Completo">
                        </div>
                </div>
                <button class="btn btn-warning mt-3 btn-block">Pesquisar</button>
                
                <br>

            </form>
            <center><h3>Não Utilize espaços</h3></center>
           
        </div>
    </div>
</div>   


<br> <br><br><br><br>





<div class="container">
    <div class="card card-register mx-auto col-6 px-0">
        <div class="card-header bg-danger text-light">Digite o nome do digitado que deseja excluir</div>
        <div class="card-body">
            <form action="painel_excluir_formulario.php" method="POST">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <label for="excluir">Digite o nome desejado</label>
                            <input type="text" name="excluir" class="form-control" placeholder="Pesquisar pelo nome Completo">
                        </div>
                </div>
                <br>
                <button class="btn btn-danger mt-3 btn-block">Excluir</button>
                <br><br>
            
                <br>

            </form>
            <center><h3><font color="red">Quando for Excluido, os dados nunca mais podem ser recuperados!!</font></h3></center>
        </div>
    </div>
</div> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>




</body>
</html>
