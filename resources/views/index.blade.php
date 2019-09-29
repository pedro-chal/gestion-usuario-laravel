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
      
<!-- alerta  -->
<div id="CamposVacios" class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    <span class="sr-only">Close</span>
  </button>

</div>
<!-- alerta  -->


        <div class="row justify-content-center">
        
            <div class="col-8 pt-4">
              
                <label class="display-4" ><img src="icon/user.svg" width="100px" class="img-fluid" alt="" srcset="">Login</label>
                <hr class="bg-primary mt-0">
                <form id="FormValidate">
                    <div class="form-group row">
                      <label for="usuario" class="col-sm-2 col-form-label">Usuario</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="usuario" placeholder="Usuario">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="clave" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="clave" placeholder="Password">
                      </div>
                    </div>
                    <div class="text-center">
                        <button type="reset" class="btn btn-outline-danger">Limpiar</button>
                        <button type="submit" class="btn btn-outline-success">Validar</button>
                        <hr>
                        
                        
                       
                          <button type="button" data-toggle="modal" data-target="#modelId" class="btn btn-outline-info">Agregar Nuevo Usuario</button>
                       
                    </div>
                  </form>
            </div>
        </div>
    </div>
    
    <!-- Button trigger modal -->
    
    
    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <!-- alerta  -->
<div id="alertAdd"  class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
    <p id="CamposVaciosAdd"></p>
  </div>
  <!-- alerta  -->
  
                <div class="modal-header">
                    <h5 class="modal-title"><img src="icon/user.svg" width="100px" class="img-fluid" alt="" srcset="">Nuevo Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form id="addUsers">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="Nombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nombre" id="Nombre" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Apellido" class="col-sm-2 col-form-label">Apellido</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="apellido" id="Apellido" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Usuario" class="col-sm-2 col-form-label">Usuario</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="usuario" id="Usuario">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="text" name="password" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label for="Sexo" class="col-sm-2 col-form-label">Sexo</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexo" value="M">
                                <label class="form-check-label" for="inlineCheckbox1">Masculino</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" name="sexo" type="radio"  value="F">
                                <label class="form-check-label" for="inlineCheckbox2">Femenino</label>
                              </div>
                              
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Pais" class="col-sm-2 col-form-label">Pais</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="pais">
                              <option value="Republica Dominicana">Republica Dominicana</option>
                              <option value="China">China</option>
                              <option value="Venezuela">Venezuela</option>
                          </select>
                        </div>
                      </div>
                      
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                </div>
              </form>
            </div>
        </div>
    </div>

    
  </body>
</html>