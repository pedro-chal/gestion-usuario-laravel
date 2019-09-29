<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
  
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/bootbox.min.js"></script>
    <script src="js/jquery.js"></script>

    <title>Sistema de Usuarios</title>
  </head>
  <body>
    
    <div class="container-fluid p-4 bg-info">
        <div class="container py-4">
            <nav class="navbar navbar-expand-sm navbar-dark bg-info">
                <a class="navbar-brand" href="#">Sistema Gestion Usuarios - laravel</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <!-- <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li> -->
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <p class="text-white">Pedro David Chalas Garcia</p>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <div class="container pt-4 mt-4">



        <div class="row justify-content-center">
        
            <div class="col-8 pt-4">
              
                <label class="display-4 " ><img src="icon/user.svg" width="100px" class="img-fluid" alt="" srcset=""></label>
                <p class="d-inline display-4">Felicidades Te has Logueado con exito,{{ usuario }}!</p>
                <hr class="bg-primary mt-0">
                
            </div>
        </div>
    </div>
    
    <!-- Button trigger modal -->
    
    
    
  </body>
</html>