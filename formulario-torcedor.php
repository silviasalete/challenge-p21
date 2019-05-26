<!doctype html>
<html lang="en">
<head> 
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
     <title>Novo Torcedor</title>
</head>
<body> 

    <?php include_once 'includes/inserir-torcedor.php';  ?>

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
                                    <a class="nav-link text-white" href="enviar-email.php">E-MAIL</a>
                              </li>
                         </ul>
                </nav>
            </header>
            <main class="col-10  bg-white text-dark">
                <div class="container main">
                    <div class="row" >
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
                                            <h2>NOVO TORCEDOR</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <nav class="navbar navbar-dark bg-dark text-white">
                                        <a href="index.php" class="text-white"> <i class="fas fa-arrow-left"></i> </a>
                                    </nav>
                                </div>
                            </div>
                        </header>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12 ">
                            <div class="row">
                                <div class="col-10">
                                    <section>
                                        <?php echo $mensagem;?>
                                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="nome">Nome</label>
                                                        <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="documento">Documento</label>
                                                        <input type="text" class="form-control" id="documento" placeholder="000.000.000-00" name="documento">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="cep">CEP</label>
                                                        <input type="text" class="form-control" id="cep" placeholder="00.000-000" name="cep">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="endereco">Endereço</label>
                                                        <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="bairro">Bairro</label>
                                                        <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="cidade">Cidade</label>
                                                        <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="uf">UF</label>
                                                        <input type="text" class="form-control" id="uf" placeholder="XX" name="uf">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="telefone">Telefone</label>
                                                        <input type="telefone" class="form-control" id="telefone" placeholder="+55 (00) 0 0000 0000" name="telefone">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="email">E-mail</label>
                                                        <input type="email" class="form-control" id="email" placeholder="nome@site.com" name="email">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="ativo">Ativo</label>
                                                        <input type="text" class="form-control" id="ativo" placeholder="" name="ativo">
                                                    </div>
                                                    <input type="hidden" name="origem"  value="manual">
                                                    <button type="submit" name="inserir-torcedor" class="btn btn-primary">Salvar</button>     
                                            </div>
                                        </form><br>
                                    </section>
                                </div>
                                <div class="col-2">
                                    <aside class="text-center">
                                        <h3>Importar</h3><br>
                                        <div class="row">
                                            <div class="col-6"> <a href="importar-xml.php" class="btn btn-primary bg-light border-0 text-dark"><i class="fas fa-file-code"></i> XML</a></div>
                                            <div class="col-6"><a href="importar-excel.php" class="btn btn-primary bg-success  border-0"><i class="fas fa-file-excel"></i> EXCEL</a></div>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="img/jogador-1.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </main>
            <footer class="col-12">Footer</footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>