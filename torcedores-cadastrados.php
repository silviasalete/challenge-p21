<!doctype html>
<html lang="en">
<head> 
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
     <title>Home</title>
</head>
<body>
     <?php @$mensagem = $_GET['excuido'];
          if ($mensagem == 'sim') {
              $mensagem = '<div class="alert alert-success" role="alert">Torcedor excluido com sucesso</div>';
          }elseif($mensagem == 'nao'){
               $mensagem = '<div class="alert alert-danger" role="alert">Torcedor não pode ser excluido</div>';
          }
     ?>
    <div class="container-fluid">
          <div class="row">
                <header class="col-2" >
                    <h1> <a href="index.php"><img src="img/pena.png" class="img-fluid" alt=""></a></h1>
                    <nav class="navbar">
                         <ul class="nav flex-column font-weight-light">
                              <li class="nav-item">
                                   <a class="nav-link text-white" href="index.php">HOME</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link text-white" href="formulario-torcedor.php">NOVO</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link text-white" href="torcedores-cadastrados.php">CADASTRADOS</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link text-white" href="enviar-email.php">E-MAIL</a>
                              </li>
                         </ul>
                    </nav>
               </header>
               <main class="col-10  bg-white text-dark">
                    <div class="container main">
                         <div class="row">
                              <header class="col-12">
                                   <div class="row">
                                        <div class="col-12">
                                             <div class="row">
                                                  <div class="col"> <hr><hr></div>
                                                  <div class="col-1 text-center"><img src="img/pena-black.png" class="img-fluid" alt=""></div>
                                                  <div class="col"> <hr><hr></div>
                                             </div>
                                             <div class="row">
                                                  <div class="col-12 text-center">
                                                  <h2>CADASTRADOS</h2>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-12">
                                             <nav class="navbar navbar-dark bg-dark text-white">
                                             <a href="index.php" class="text-white"> <i class="fas fa-arrow-left"></i> </a>
                                             <form class="form-inline">
                                                  <div class="input-group">
                                                       <div class="input-group-prepend">
                                                       <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                                                       </div>
                                                       <input  name="buscar" id="buscar" type="text" class="form-control" placeholder="Nome do torcedor" aria-label="Username" aria-describedby="basic-addon1">
                                                  </div>
                                             </form>
                                             </nav>
                                        </div>
                                   </div>
                              </header>
                         </div>
                         <br>
                         <div class="row">
                              <div class="col-12">
                                   <div class="row">
                                        <div class="col-12">
                                             <section>                                                  
                                                  <?php echo $mensagem;?>
                                                  <table class="table table-hover table-responsive"  id="resultado"></table>
                                             </section>
                                        </div>
                                   </div>
                              </div>
                         </div> 
                    </div>
               </main>
          </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/busca-torcedor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>