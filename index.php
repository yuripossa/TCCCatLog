<html>
   <head>
   <?PHP      
      session_start();         
            if((!isset ($_SESSION['email']) == true)){
               unset($_SESSION['email']);
               header('location:login.html');
            }
      ?>
      <meta charset='utf-8'>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
      <link href='css/style.css' rel='stylesheet' type='text/css'>
      <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link rel="icon" href="images/minicat.png">
      <title>cat.logue</title>
      <meta charset='utf-8'>
   </head>
   <body>
      
      <a id="button" title="Clique em mim para voltar ao topo da página"></a>

      <!------------------------------BARRA DE NAVEGAÇÃO---------------------------------->
      <form method='post' action='listarprod.php'>
      <div class="top-nav-bar">
         <div class='search-box'>
            <i class="fa fa-bars" id='menu-btn' onclick='openmenu()'></i>
            <i class="fa fa-times" id='close-btn' onclick='closemenu()'></i>
            <a href='index.php'><img class='logo' src='images/final.jpg'></a>
            <input type='text' name='busca' class="form-control" placeholder="Digite o nome de um produto ou loja...">
            <button class='input-group-text'><i class="fa fa-search"></i></button>
         </div>
         <div class='menu-bar'>
            <ul>
               <li><a href='#'><i class="fa fa-heart"></i>Favoritos</a></li>
               <li><a href='perfil.html'><i class="fa fa-user"></i>Perfil</a></li>
               <li><a href='logout.php'><i class="fa fa-sign-out"></i>Sair</a></li>
            </ul>
         </div>
      </div>
      </form>
       <!--------------------------BARRA LATERAL--------------------------->
      <section class='header'>
         <div class='side-menu' id='side-menu'>
            <ul>
               <li>Em Alta</li>
               <li>Mobília<i class="fa fa-angle-right"></i>
                  <ul>                     
                     <li href='#'>Camas</li>
                     <li href='#'>Mesas</li>
                     <li href='#'>Guarda-Roupa</li>
                     <li href='#'>Cadeiras</li>
                     <li href='#'>Sofá</li>
                  </ul>               
               </li>
               <li>Computadores<i class="fa fa-angle-right"></i>
                  <ul>                     
                     <li href='#'>Monitores</li>
                     <li href='#'>Teclados</li>
                     <li href='#'>Headset</li>
                     <li href='#'>Mouse</li>
                     <li href='#'>Placa de vídeo</li>
                  </ul>               
               </li>
               <li>Leitura<i class="fa fa-angle-right"></i>
                  <ul>                     
                     <li href='#'>Livros</li>
                     <li href='#'>Revistas</li>
                     <li href='#'>Quadrinhos</li>
                     <li href='#'>Mangás</li>
                  </ul>               
               </li>
               <li>Brinquedos<i class="fa fa-angle-right"></i>
                  <ul>                     
                     <li href='#'>Bonecas</li>
                     <li href='#'>Carrinhos</li>
                     <li href='#'>Laptop</li>
                     <li href='#'>Bichos de pelúcia</li>
                  </ul>               
               </li>
               <li>Acessórios<i class="fa fa-angle-right"></i>
                  <ul>                     
                     <li href='#'>Óculos</li>
                     <li href='#'>Pulseiras</li>
                     <li href='#'>Anéis</li>
                     <li href='#'>Brincos</li>
                     <li href='#'>Pingentes</li>
                  </ul>               
               </li>
               <li>Eletrodomésticos<i class="fa fa-angle-right"></i>
                  <ul>                     
                     <li href='#'>Liquidificador</li>
                     <li href='#'>Batedeira</li>
                     <li href='#'>Cafeteira</li>
                     <li href='#'>Geladeira</li>
                     <li href='#'>Aspirador de pó</li>
                     <li href='#'>Aparelho de barbear</li>
                  </ul>               
               </li>
               <li>Jogos<i class="fa fa-angle-right"></i>
                  <ul>                     
                     <li href='#'>PS4</li>
                     <li href='#'>X-BOX 360/ONE</li>
                     <li href='#'>Switch</li>
                  </ul>               
               </li>
               <li>Cozinha<i class="fa fa-angle-right"></i>
                  <ul>                     
                     <li href='#'>Talheres</li>
                     <li href='#'>Panelas</li>
                     <li href='#'>Pratos</li>
                     <li href='#'>Copos</li>
                  </ul>               
               </li>
               <li>Alimentos<i class="fa fa-angle-right"></i>
                  <ul>                     
                     <li href='#'>Verduras</li>
                     <li href='#'>Carne</li>
                     <li href='#'>Doces</li>
                  </ul>               
               </li>
            </ul>
         </div>
      </section>
      <!-----------------------------SLIDER---------------------------->
      <div class='slider'>
         <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="images/ad1.jpg" alt="First slide">
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="images/ad2.jpg" alt="Second slide">
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="images/ad3.jpg" alt="Third slide">
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="images/ad4.jpg" alt="Fourth slide">
               </div>
            </div>
             <ol class="carousel-indicators">
               <li data-target="#slider" data-slide-to="0" class="active"></li>
               <li data-target="#slider" data-slide-to="1"></li>
               <li data-target="#slider" data-slide-to="2"></li>
               <li data-target="#slider" data-slide-to="3"></li>
            </ol>
         </div>      
      </div>

    <!-----------------SEÇÃO #1 DE PRODUTOS----------------------->
      <section class='em-alta'>
         <div class='container'>
            <div class='title-box-grandinho'>
               <h2>Confira uma amostra de produtos e lojas</h2>
            </div>
         </div>
      </section>
      <section class='em-alta'>
         <div class='container'>
            <div class='title-box'>
               <h2>Em Alta</h2>
            </div>
            <!--1-->
            <div class='row'>
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img src="images/produto1.jpeg">
                     <div class='overlay-right'>
                        <form method='get' action='produto_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Air Jordan</h3>
                        <h5>R$219.00</h5>              
                  </div>
               </div>

            <!--2-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img src="images/produto2.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='produto_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Relógio</h3>
                        <h5>R$320.00</h5>              
                  </div>
               </div>

            <!--3-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img src="images/produto3.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='produto_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Blusa</h3>
                        <h5>R$65.00</h5>              
                  </div>
               </div>

            <!--4-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img src="images/produto4.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='produto_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Talheres</h3>
                        <h5>R$80.00</h5>              
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!------------SEÇÃO #2 DE PRODUTOS---------------->
      <section class='em-alta'>
         <div class='container'>
            <div class='title-box'>
               <h2>Camisas</h2>
            </div>
            <!--1-->
            <div class='row'>
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img src="images/camisa1.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='produto_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Camisa Social</h3>
                        <h5>R$55.00</h5>              
                  </div>
               </div>

            <!--2-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img src="images/camisa2.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='produto_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Camisa Florida</h3>
                        <h5>R$30.00</h5>              
                  </div>
               </div>

            <!--3-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img src="images/camisa3.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='produto_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Camisa Polo</h3>
                        <h5>R$45.00</h5>              
                  </div>
               </div>

            <!--4-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img src="images/camisa4.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='produto_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Camisa Estampada</h3>
                        <h5>R$100.00</h5>              
                  </div>
               </div>
            </div>
         </div>
      </section>

 <!------------SEÇÃO #3 DE PRODUTOS---------------->
      <section class='em-alta'>
         <div class='container'>
            <div class='title-box'>
               <h2>Móveis</h2>
            </div>
            <!--1-->
            <div class='row'>
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img src="images/moveis1.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='produto_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Sofá Cinza</h3>
                        <h5>R$600.00</h5>              
                  </div>
               </div>

            <!--2-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img src="images/moveis2.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='produto_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Mesa</h3>
                        <h5>R$250.00</h5>              
                  </div>
               </div>

            <!--3-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img src="images/moveis3.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='produto_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Guarda-Roupa</h3>
                        <h5>R$1000.00</h5>              
                  </div>
               </div>

            <!--4-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img src="images/moveis4.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='produto_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Cama de Casal</h3>
                        <h5>R$279.00</h5>              
                  </div>
               </div>
            </div>
         </div>
      </section>
 <!------------SEÇÃO #4 DE PRODUTOS---------------->
      <section class='em-alta'>
         <div class='container'>
            <div class='title-box'>
               <h2>Leitura</h2>
            </div>
            <!--1-->
            <div class='row'>
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img src="images/livros1.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='produto_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Revista em Quadrinhos</h3>
                        <h5>R$20.00</h5>              
                  </div>
               </div>

            <!--2-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img src="images/livros2.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='produto_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Livro</h3>
                        <h5>R$40.00</h5>              
                  </div>
               </div>

            <!--3-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img src="images/livros3.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='produto_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Mangá</h3>
                        <h5>R$22.00</h5>              
                  </div>
               </div>

            <!--4-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img src="images/livros4.png">
                     <div class='overlay-right'>
                        <form method='get' action='produto_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Revista</h3>
                        <h5>R$13.00</h5>              
                  </div>
               </div>
            </div>
         </div>
      </section>
   
      <!--------------------------------Lojas------------------------------------>

      <section class='em-alta'>
         <div class='container'>
            <div class='title-box'>
               <h2>Lojas</h2>
            </div>
            <!--1-->
            <div class='row'>
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img class='loja' src="images/loja1.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='loja_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Banca do João</h3>
                  </div>
               </div>

            <!--2-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img class='loja' src="images/loja2.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='loja_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Banca Jardim Brasil</h3>
                  </div>
               </div>

            <!--3-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img class='loja' src="images/loja3.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='loja_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Wal Açaí</h3>
                  </div>
               </div>

            <!--4-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img class='loja' src="images/loja4.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='loja_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Femme</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
		<br><br>
      <section class='em-alta'>
         <div class='container'>
            <!--1-->
            <div class='row'>
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img class='loja' src="images/loja5.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='loja_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>simple.</h3>
                  </div>
               </div>

            <!--2-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img class='loja' src="images/loja6.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='loja_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Mercadinho Mansano</h3>
                  </div>
               </div>

            <!--3-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img class='loja' src="images/loja7.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='loja_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>RURAL Agropecuária</h3>
                  </div>
               </div>

            <!--4-->
               <div class='col-md-3'>
                  <div class='product-top'>
                     <img class='loja' src="images/loja8.jpg">
                     <div class='overlay-right'>
                        <form method='get' action='loja_info.html'>
                           <button type='submit' class="btn btn-secondary" title="Visualizar">
                              <i class="fa fa-eye"></i>
                           </button>
                        </form>                        
                        <form method='get' action='index.html'>
                           <button type='submit' class="btn btn-secondary" title="Gostei">
                              <i class="fa fa-heart-o"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="product-bottom text-center">
                        <h3>Dimitri</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
		<br><br>
      <section class='em-alta'>
            <div class='container'>
               <!--1-->
               <div class='row'>
                  <div class='col-md-3'>
                     <div class='product-top'>
                        <img class='loja' src="images/loja9.jpg">
                        <div class='overlay-right'>
                           <form method='get' action='loja_info.html'>
                              <button type='submit' class="btn btn-secondary" title="Visualizar">
                                 <i class="fa fa-eye"></i>
                              </button>
                           </form>                        
                           <form method='get' action='index.html'>
                              <button type='submit' class="btn btn-secondary" title="Gostei">
                                 <i class="fa fa-heart-o"></i>
                              </button>
                           </form>
                        </div>
                     </div>
                     <div class="product-bottom text-center">
                           <h3>Treliça artesanato</h3>
                     </div>
                  </div>

               <!--2-->
                  <div class='col-md-3'>
                     <div class='product-top'>
                        <img class='loja' src="images/loja10.jpg">
                        <div class='overlay-right'>
                           <form method='get' action='loja_info.html'>
                              <button type='submit' class="btn btn-secondary" title="Visualizar">
                                 <i class="fa fa-eye"></i>
                              </button>
                           </form>                        
                           <form method='get' action='index.html'>
                              <button type='submit' class="btn btn-secondary" title="Gostei">
                                 <i class="fa fa-heart-o"></i>
                              </button>
                           </form>
                        </div>
                     </div>
                     <div class="product-bottom text-center">
                           <h3>Bolo ao forno</h3>
                     </div>
                  </div>

               <!--3-->
                  <div class='col-md-3'>
                     <div class='product-top'>
                        <img class='loja' src="images/loja11.jpg">
                        <div class='overlay-right'>
                           <form method='get' action='loja_info.html'>
                              <button type='submit' class="btn btn-secondary" title="Visualizar">
                                 <i class="fa fa-eye"></i>
                              </button>
                           </form>                        
                           <form method='get' action='index.html'>
                              <button type='submit' class="btn btn-secondary" title="Gostei">
                                 <i class="fa fa-heart-o"></i>
                              </button>
                           </form>
                        </div>
                     </div>
                     <div class="product-bottom text-center">
                           <h3>Doce Lembranças</h3>
                     </div>
                  </div>

               <!--4-->
                  <div class='col-md-3'>
                     <div class='product-top'>
                        <img class='loja' src="images/loja12.jpg">
                        <div class='overlay-right'>
                           <form method='get' action='loja_info.html'>
                              <button type='submit' class="btn btn-secondary" title="Visualizar">
                                 <i class="fa fa-eye"></i>
                              </button>
                           </form>                        
                           <form method='get' action='index.html'>
                              <button type='submit' class="btn btn-secondary" title="Gostei">
                                 <i class="fa fa-heart-o"></i>
                              </button>
                           </form>
                        </div>
                     </div>
                     <div class="product-bottom text-center">
                           <h3>Oficina de Mulher</h3>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      <!--------------------------------RODAPÉ----------------------------------->
      <footer class="page-footer font-small indigo rodape">
         <div>
           <iframe class="col-md-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.2955224682037!2d-44.023230585120324!3d-19.954070386590296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa695fdbb39c08f%3A0x8d7706a7909d9f96!2sSENAI+Contagem+CFP+Euvaldo+Lodi!5e0!3m2!1spt-BR!2sbr!4v1560175256349!5m2!1spt-BR!2sbr" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="container text-center text-md-left">
          <!-- Grid row -->
          <div class="row">
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none">
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><a href='quemsomos.html'>Quem Somos</a></h5>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><a href='faleconosco.html'>Fale Conosco</a></h5>
            </div>
          </div>
        </div>
        <div class="footer-copyright text-center py-3 last">© TCC Informática 2019</div>
      </footer>
      <!-- Footer -->
         <!----------------------SCRIPT---------------------->
      	<script>
           	function openmenu(){
               	document.getElementById('side-menu').style.display='block';
               	document.getElementById('menu-btn').style.display='none';
               	document.getElementById('close-btn').style.display='block';
            	}
            	function closemenu(){
               	document.getElementById('side-menu').style.display='none';
               	document.getElementById('menu-btn').style.display='block';
               	document.getElementById('close-btn').style.display='none';
            	}
            
            /*-------------DE VOLTA AO TOPO---------------*/
            var btn = $('#button');
            $(window).scroll(function() {
              if ($(window).scrollTop() > 300) {
                btn.addClass('show');
              } else {
                btn.removeClass('show');
              }
            });
            btn.on('click', function(e) {
              e.preventDefault();
              $('html, body').animate({scrollTop:0}, '300');
            });

            /*--------------------------STAR RATING---------------------*/
            var $star_rating = $('.star-rating .fa');
            var SetRatingStar = function() {
              return $star_rating.each(function() {
                if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                  return $(this).removeClass('fa-star-o').addClass('fa-star');
                } else {
                  return $(this).removeClass('fa-star').addClass('fa-star-o');
                }
              });
            };
            $star_rating.on('click', function() {
              $star_rating.siblings('input.rating-value').val($(this).data('rating'));
              return SetRatingStar();
            });
            SetRatingStar();
            $(document).ready(function() {
            });


            /*------------------------------DROPDOWN DAS OPÇÕES DO PERFIL------------------*/
            $('ul.nav li.dropdown').hover(function() {
               $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function() {
               $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            });
      	</script>
   </body>
</html>
