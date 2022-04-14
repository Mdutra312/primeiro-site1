<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta-charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=12">
	  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=12">
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href='img/logo/nike.png' class="logo" ><title>Nike</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <!-- MDB Bootstrap-->
	 <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
</head>
   
    <title>Untitled Document</title>

<body>
 <!--Inicio do interprete em Libras-->
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
  	<!--Fim do Interprete-->



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="logo" src="img/logo/nike.png"> </a>
        
        <H3> <a class="nav-link active" aria-current="page" href="#">Nike</a></H3>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           
    <!--Inicio do carrossel-->


         

<center>
                    
                <form action="Cookie.php" method="POST">
                    <select name="opcoes" class="form-select" aria-label="opcoes">
                        <option value="Short">Shorts</option>
                        <option value="Camisa">Camisetas</option>
                        <option value="Tenis">Tênis</option>
                    </select>
                    <a href="#descer"><button class="btn btn-outline-primary" type="submit">Selecionar</button></a>
                </form>
                
            </li>
            
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="O que deseja?" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
        </div>
    </div>
    </nav>

</center>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carrosel/tenis.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tênis Nike</h5>
      
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carrosel/tenis1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carrosel/calca.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php
        //APRESENTAR TUDO!!!


        /**========================APRESETAR Short================================= */
        if(isset($_COOKIE['opcoes'])){
            $opcoesCookie = $_COOKIE['opcoes'];

            $nomess = array(
                "tenis-1" => "Tênis Nike Court Vision Low",
                "tenis-2" => "Tênis Nike Court Vision Mid   ",
                "tenis-3"  => "Tênis Nike Air Max 90",
                "tenis-4"  => "Tênis Air Jordan 1 Mid",
                "tenis-5"  => "Tênis Nike Air Force 1 07 LV8",
                "camisa-1" => "Camisa nike RedBull",
                "camisa-2" => "Camisa nike RedBull",
                "camisa-3" => "Camisa nike RedBull",
                "camisa-4" => "Camisa Nike x Banheiristas",
                "camisa-5" => "Camisa Nike x Banheiristas",
                "short-1" => "Camisa nike RedBull",
                "short-2"  => "Shorts Nike Corinthians III",
                "short-3"  => "Tênis Nike Court Vision Low",
                "short-4"  => "Tênis Nike Court Vision Mid",
                "short-5"  => "Camisa nike RedBull"
            );
            $preco = array(
                "tenis-1" => "Tênis R$ 419,00",
                "tenis-2" => "Tênis R$ 449,00",
                "tenis-3" => "Tênis R$ 739,00",
                "tenis-4" => "Tênis R$ 999,00",
                "tenis-5" => "Tênis R$ 599,00",
                "camisa-1" => "Camisa R$ 169,00",
                "camisa-2" => "Camisa R$ 169,00",
                "camisa-3" => "Camisa R$ 169,00",
                "camisa-4" => "Camisa R$ 269,00",
                "camisa-5" => "Camisa R$ 179,00",
                "short-1" => "Short R$ 599,00",
                "short-2" => "Short R$ 249,00",
                "short-3" => "Short R$ 329,00",
                "short-4" => "Short R$ 149,00",
                "short-5" => "Short R$ 179,00"
                
            );


            if($opcoesCookie == 'Short'){
              
                $caminho = "src='img/Short/Short-";
                $vetor = "short-";
                $j = 0;
                echo("<div class='card-group'>");
                
                for($i =1; $i < 16; $i++){
                        $j++;
                        
                        echo ("<div class='card'>
                                <img  ".$caminho.$j.".jpg' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                <h5 class='card-title'>".$preco[$vetor.$j]."</h5>
                                <p class='card-text'>".$nomess[$vetor.$j]."</p>
                                
                                    <a href='#' class='btn btn-primary'>Comprar</a>
                                </div>
                            </div>
                                ");
                        if($i==5){
                            echo("</div>");   
                            echo("<div class='card-group'>");
                            $caminho = "src='img/tenis/tenis-";
                            $vetor = "camisa-";
                            $j = 0;
                        }
                        if($i==10){
                            echo("</div>");
                            echo("<div class='card-group'>");
                            $caminho = "src='img/Camisa time/camisa-";
                            $vetor = "camisa-";
                            $j = 0;

                        }
                        if($i==15){
                            echo("</div>");
                        }
                    }//

            }/////////////////////////////////////////////////////////////////////////////////

            /**========================APRESETAR CAMISA================================= */
            else if ($opcoesCookie == 'Camisa'){
                $caminho = "src='img/Camisa time/camisa-";
                $vetor = "camisa-";
                $j = 0;
                echo("<div class='card-group'>");
                
                for($i =1; $i < 16; $i++){
                        $j++;
                        
                        echo ("<div class='card'>
                                <img  ".$caminho.$j.".jpg' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                <h5 class='card-title'>".$preco[$vetor.$j]."</h5>
                                <p class='card-text'>".$nomess[$vetor.$j]."</p>
                                
                                    <a href='#' class='btn btn-primary'>Comprar</a>
                                </div>
                            </div>
                                ");
                        if($i==5){
                            echo("</div>");   
                            echo("<div class='card-group'>");
                            $caminho = "src='img/Short/Short-";

                            $vetor = "short-";
                            $j = 0;
                        }
                        if($i==10){
                            echo("</div>");
                            echo("<div class='card-group'>");
                            $caminho = "src='img/tenis/tenis-";  
                            $vetor = "tenis-";
                            $j = 0;

                        }
                        if($i==15){
                            echo("</div>");
                        }
                    }

            }else if($opcoesCookie == 'Tenis'){
                $caminho = "src='img/tenis/tenis-";

                $vetor = "tenis-";
                $j = 0;
                echo("<div class='card-group'>");
                
                for($i =1; $i < 16; $i++){
                        $j++;
                        
                        echo ("<div class='card'>
                                <img  ".$caminho.$j.".jpg' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                <h5 class='card-title'>".$preco[$vetor.$j]."</h5>
                                <p class='card-text'>".$nomess[$vetor.$j]."</p>
                                
                                    <a href='#' class='btn btn-primary'>Comprar</a>
                                </div>
                            </div>
                                ");
                        if($i==5){
                            echo("</div>");   
                            echo("<div class='card-group'>");
                            $caminho = "src='img/Camisa time/camisa-";                
                            $vetor = "camisa-";
                            $j = 0;
                        }
                        if($i==10){
                            echo("</div>");
                            echo("<div class='card-group'>");
                            $caminho = "src='img/Short/Short-"; 
                            $vetor = "short-";
                            $j = 0;

                        }
                        if($i==15){
                            echo("</div>");
                        }
                    }
            }


            /**========================APRESETAR TENIS================================= */

            
        }   
        else{
            echo("<div class='card-group'>");
            $nomess = array(
                1    => "Camisa nike RedBull",
                2    => "Short Nike",
                3    => "Shorts Nike Corinthians Dri-FIT",
                4    => "Tênis Nike Air Force 1 07 LV8",
                5    => "Shorts Nike Los Angeles Lakers",
                6    => "Shorts Nike Corinthians Foundation",
                7    => "Tênis Air Jordan 1 Mid",
                8    => "Camisa nike RedBull",
                9    => "Camisa Nike x Banheiristas",
                10    => "Camisa Nike x Banheiristas",
                11    => "Camisa nike RedBull",
                12    => "Shorts Nike Corinthians III",
                13    => "Tênis Nike Court Vision Low",
                14    => "Tênis Nike Court Vision Mid",
                15    => "Camisa nike RedBull"
            );
            $preco = array(
                1 => "Camisa R$ 169,00",
                2 => "Short R$ 149,00",
                3 => "Short R$ 179,00",
                4 => "Tênis R$ 559,00",
                5 => "Short R$ 329,00",
                6 => "Short R$ 249,00",
                7 => "Tênis R$ 999,00",
                8 => "Camisa R$ 169,00",
                9 => "Camisa R$ 179,00",
                10 => "Camisa R$ 269,00",
                11 => "Short R$ 599,00",
                12 => "Short R$ 249,00",
                13 => "Tênis R$ 419,00",
                14 => "Tênis R$ 449,00",
                15 => "Tênis R$ 449,00"
                
            );
            for($i =1; $i < 16; $i++){
                
                echo ("<div class='card' class='#descer'>
                        <img  src='img/bagunça/".$i.".jpg' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>".$preco[$i]."</h5>
                            <p class='card-text'>".$nomess[$i]."</p>
                         
                            <a href='#' class='btn btn-primary'>Comprar</a>
                        </div>
                      </div>
                        ");
                if($i==5){
                    echo("</div>");   
                    echo("<div class='card-group'>");
                }
                if($i==10){
                    echo("</div>");
                    echo("<div class='card-group'>");
                }
                if($i==15){
                    echo("</div>");
                }
            }//
        }
             
?>
<center>
<h3 class="textRede">Redes Sociais</h3>
<!-- Facebook -->
<a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"
  ><i class="fab fa-facebook-f"></i
></a>

<!-- Twitter -->
<a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"
  ><i class="fab fa-twitter"></i
></a>

<!-- Google -->
<a class="btn btn-primary" style="background-color: #dd4b39;" href="#!" role="button"
  ><i class="fab fa-google"></i
></a>

<!-- Instagram -->
<a class="btn btn-primary" style="background-color: #ac2bac;" href="#!" role="button"
  ><i class="fab fa-instagram"></i
></a>

<!-- Pinterest -->
<a class="btn btn-primary" style="background-color: #c61118;" href="#!" role="button"
  ><i class="fab fa-pinterest"></i
></a>

<!-- Youtube -->
<a class="btn btn-primary" style="background-color: #ed302f;" href="#!" role="button"
  ><i class="fab fa-youtube"></i
></a>
<br>
<h3 class="marca">Contato: igormarques@gmail.com </h3>
</body>
</html>