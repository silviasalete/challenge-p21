<!doctype html>
<html lang="en">
<head> 
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
     <title>Home</title>
</head>
<body> 
     
    <div class="container-fluid">
          <div class="row ">
               <header class=" col-2">
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
                                        <a class="nav-link text-white" href="enviar-email.php" tabindex="-1">E-MAIL</a>
                                   </li>
                                   <li class="nav-item">
                                        <a class="nav-link text-white" href="novo-excel.php" tabindex="-1">Novo Excel</a>
                                   </li>
                         </ul>
                    </nav>
               </header>               
               <main class=" col-10 ">  
                    <div class="container main">
                         <div class="row">
                              <header class="col-12">
                                   <div class="row">
                                        <div class="col-12">
                                             <br><br>
                                             <div class="row">
                                                  <div class="col-12 text-center">
                                                  <h2>ALL BLACKS</h2>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </header> 
                         </div> 
                         <div class="row">
                              <div class="col-12">
                                   <section>     
                                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                             <div class="carousel-inner">
                                                  <div class="carousel-item active">
                                                       <img src="img/slide-1.jpg" class="d-block w-100" alt="Imagem da equipe All Blacks">
                                                  </div>
                                             <div class="carousel-item">
                                                  <img src="img/slide-2.jpg" class="d-block w-100" alt="Imagem da equipe All Blacks">
                                             </div>
                                                  <div class="carousel-item">
                                                       <img src="img/slide-3.jpg" class="d-block w-100" alt="Imagem da equipe All Blacks">
                                                  </div>
                                             </div>
                                             <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                  <span class="sr-only">Previous</span>
                                             </a>
                                             <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                  <span class="sr-only">Next</span>
                                             </a>
                                        </div>
                                   </section> 
                              </div>
                         </div>
                    </div>      
               </main>    
          </div> 
          
    </div> 
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script>
          $('.carousel-fade').carousel({
               interval: 2000
          })   
     </script>
</body>
</html>