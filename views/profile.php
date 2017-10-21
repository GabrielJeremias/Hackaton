<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Perfil de usuario</title>
        <link rel="stylesheet" href="<?=BASE_URL?>public/css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?=BASE_URL?>public/css/dashboard.css">
        <link rel="stylesheet" href="<?=BASE_URL?>public/css/profile.css">
    </head>
    <body>
        <header>
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Hackaton 2017</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-options">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-options">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Alumnos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Evento</a>
                        </li>
                    </ul>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle cj-btn" data-toggle="dropdown">
                        Administrador
                        </button>
                        <div class="dropdown-menu cj-dropdown-menu">
                            <button class="dropdown-item " type="button">Salir</button>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    
        <section class="cj-profile">
            <button class="cj-show-aside" id="show-aside"><img src="<?=BASE_URL?>public/img/icon/more.svg" width="30px"></button>
            <form>
               
               <div class="form-group row">
                    <label for="names" class="col-sm-12 col-form-label"><strong>Datos academicos</strong></label>
                    
               </div>
                
                <div class="form-group row">
                    <label for="names" class="col-sm-3 col-form-label">Nombre Completo</label>
                    <div class="col-sm-3 cj-no-mr cj-margin">
                        <input type="text" class="form-control" id="name" placeholder="Nombres" value="<?=$studentInfo["nombre"]?>">
                    </div>
                    <div class="col-sm-3 cj-no-mr cj-margin">
                        <input type="text" class="form-control" id="last-name" placeholder="Apellido Paterno" value="<?=$studentInfo["apellido_p"]?>">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="last-name2" placeholder="Apellido Materno" value="<?=$studentInfo["apellido_m"]?>">
                    </div>
                </div>
                <div class="form-group row">
                   
                    <label for="names" class="col-sm-3 col-form-label">Grupo</label>
                    <div class="col-sm-2 cj-no-mr cj-margin">
                        <input type="text" class="form-control" id="group" placeholder="Grupo" value="<?=$studentInfo["grupo"]?>">
                    </div>
                    <label for="names" class="col-sm-3 col-form-label text-right cj-margin">Estado academico</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="status" placeholder="Status Academico" value="<?=$studentInfo["estatus"]?>">
                    </div>
                    
                </div>
                <div class="form-group row">
                    <label for="names" class="col-sm-3 col-form-label">Matrícula / Semestre</label>
                    <div class="col-sm-5 cj-no-mr cj-txt-id">
                        <input type="text" class="form-control" id="id" placeholder="Matricula" value="<?=$studentInfo["matricula"]?>">
                    </div>
                    <div class="col-sm-4 cj-no-mr">
                        <input type="text" class="form-control" id="semester" placeholder="Semestre" value="<?=$studentInfo["semestre"]?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="school-email" class="col-sm-3 col-form-label">Carrera</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="carrer" placeholder="Carrera" value="<?=$studentInfo["carrera"]?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="school-email" class="col-sm-3 col-form-label">Correo Institucional</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="institutional-email" placeholder="Correo Institucional" value="<?=$studentInfo["correo_institucional"]?>">
                    </div>
                </div>
               
                <div class="form-group row">
                    <label for="names" class="col-sm-12 col-form-label"><strong>Datos personales</strong></label>
                   
                </div>    
                
                <div class="form-group row">
                    <label for="names" class="col-sm-3 col-form-label">fecha de nacimiento</label>
                    <div class="col-sm-3 cj-no-mr cj-margin">
                        <input type="text" class="form-control" id="birthdate" placeholder="Fecha de Nacimiento" value="<?=$studentInfo["fecha_nacimiento"]?>">
                    </div>
                     <label for="names" class="col-sm-2 text-right cj-margin col-form-label">curp</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="curp" placeholder="Curp" value="<?=$studentInfo["curp"]?>">
                    </div>
                 
                   
                </div>    
                
                
                <div class="form-group row">
                    <label for="names" class="col-sm-3 col-form-label">Sexo</label>
                    <div class="col-sm-3 cj-no-mr cj-margin">
                        <input type="text" class="form-control" id="sex" placeholder="Genero" value="<?=$studentInfo["genero"]?>">
                    </div>  
                    
                    <label for="names" class="col-sm-2 text-right cj-margin col-form-label">Télefono</label> 
                     <div class="col-sm-4">
                        <input type="text" class="form-control" id="phone" placeholder="Télefono" value="<?=$studentInfo["telefono"]?>">
                    </div>   
                 
                </div>
                
                
                <div class="form-group row">
                    <label for="names" class="col-sm-3 col-form-label">Localidad</label>
                       
                      <div class="col-sm-3 cj-no-mr cj-margin">
                        <input type="text" class="form-control" id="location" placeholder="localidad" value="<?=$studentInfo["localidad"]?>">
                    </div> 
                    <label for="names" class="col-sm-2 text-right cj-margin col-form-label">Dirección</label>
                     <div class="col-sm-4 cj-no-mr">
                        <input type="text" class="form-control" id="addres" placeholder="Dirección" value="<?=$studentInfo["direccion1"]?>">
                    </div> 
                </div>
                 <div class="form-group row">
                    <label for="personal-email" class="col-sm-3 col-form-label">Correo Personal</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="personal-email" placeholder="Correo Personal" value="<?=$studentInfo["correo_personal"]?>">
                    </div>
                </div>
                
                
                
                <div class="form-group row">
                    <div class="col-sm-12 d-flex flex-md-row justify-content-sm-around flex-column">
                        <button type="submit" class="btn btn-primary cj-btn-update">Actualizar Información</button>
                        <button type="submit" class="btn btn-danger">Eliminar Participante</button>
                    </div>
                </div>
            </form>
        </section>
        <aside class="cj-aside">
            <div class="cj-profile-img">
               <img class="rounded-circle img-fluid" src="http://lorempixel.com/400/200">
                <h3 class="text-center"><?=$studentInfo["nombre"]." ".$studentInfo["apellido_p"]?></h3>
            </div>            
            <ul class="list-group">
                <li class="list-group-item active">Perfil</li>
                <li class="list-group-item">Proyectos</li>
                <li class="list-group-item">Contactar</li>
            </ul>
        </aside>
        <script src="<?=BASE_URL?>public/js/jquery.js"></script>
        <script src="<?=BASE_URL?>public/js/bootstrap/popper.js"></script>
        <script src="<?=BASE_URL?>public/js/bootstrap/bootstrap.min.js"></script>
        <script src="<?=BASE_URL?>public/js/dashboard.js"></script>
    </body>
</html>