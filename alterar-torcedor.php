<!doctype html>
<html lang="en">
<head> 
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
     <title>Alterar Torcedor</title>
</head>
<body>

    <?php
        include_once 'includes/alterar-torcedor.php'; 
        $id = $_GET['id'];
        $torcedorConsultado = $torcedorDAO->consultarTorcedorPorId($id);
    ?>
<div class="container-fluid">
     <div class="row">
          <header class="col-2">
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
                              <a class="nav-link text-white disabled" href="#" tabindex="-1" aria-disabled="true">E-MAIL</a>
                         </li>
                    </ul>
                </nav>
          </header>
          <main class="col-10 bg-white text-dark">
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
                                            <h2>ALTERAR CADASTRO</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                   <nav class="navbar navbar-dark bg-dark text-white">
                                        <a href="torcedores-cadastrados.php" class="text-white"> <i class="fas fa-arrow-left"></i> </a>
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
                                             <div class="row ">
                                                  <div class="col-6">
                                                       <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                                                       <div class="form-group">
                                                            <label for="nome">Nome</label>
                                                            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $torcedorConsultado[0]['NOME']?>">
                                                       </div>
                                                       <div class="form-group">
                                                            <label for="documento">Documento</label>
                                                            <input type="text" class="form-control" id="documento" name="documento" value="<?php echo $torcedorConsultado[0]['DOCUMENTO']?>">
                                                       </div>
                                                       <div class="form-group">
                                                            <label for="cep">CEP</label>
                                                            <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $torcedorConsultado[0]['CEP']?>">
                                                       </div>
                                                       <div class="form-group">
                                                            <label for="endereco">Endereço</label>
                                                            <input type="text" class="form-control" id="endereco" name="endereco"  value="<?php echo $torcedorConsultado[0]['ENDERECO']?>">
                                                       </div>
                                                       <div class="form-group">
                                                            <label for="bairro">Bairro</label>
                                                            <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $torcedorConsultado[0]['BAIRRO']?>">
                                                       </div>
                                                       <div class="form-group">
                                                            <label for="cidade">Cidade</label>
                                                            <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $torcedorConsultado[0]['CIDADE']?>">
                                                       </div>
                                                       <div class="form-group">
                                                            <label for="uf">UF</label>
                                                            <input type="text" class="form-control" id="uf" name="uf" value="<?php echo $torcedorConsultado[0]['UF']?>">
                                                       </div>
                                                       <div class="form-group">
                                                            <label for="telefone">Telefone</label>
                                                            <input type="text" class="form-control" id="telefone" name="telefone"  value="<?php echo $torcedorConsultado[0]['TELEFONE']?>">
                                                       </div>
                                                       <div class="form-group">
                                                            <label for="email">E-mail</label>
                                                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $torcedorConsultado[0]['EMAIL']?>">
                                                       </div>
                                                       <div class="form-group">
                                                            <label for="ativo">Ativo</label>
                                                            <input type="text" class="form-control" id="ativo" name="ativo" value="<?php echo $torcedorConsultado[0]['ATIVO']?>">
                                                       </div>
                                                       <input type="hidden" name="id"      value="<?php echo $torcedorConsultado[0]['ID']?>">   
                                                       <button type="submit" class="btn btn-primary" name="alterar-torcedor">Alterar</button>    
                                                       </form>
                                                  </div>
                                                  <div class="col-6">
                                                       <img src="img/jogador-2.png" class="img-fluid" alt="Jogador">
                                                  </div>
                                             </div>
                                        </section>
                                        
                                  </div> 
                             </div>
                         </div>
                    </div>
               </div>
          </main>
     </div>
</div>
    
    <footer></footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>