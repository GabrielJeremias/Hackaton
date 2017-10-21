<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Control Panel</title>
    <link rel="stylesheet" href="<?=BASE_URL?>public/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>public/css/dashboard.css">
    <script>
        var BASE_URL = "<?=BASE_URL?>";
    </script>
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


    <div class="container-fluid">
        <div class="row">
            <nav class="cj-aside">
                <ul class="list-group">
                    <li id="lista" class="list-group-item active">Registrados</li>
                    <li id="generar" class="list-group-item">Equipos</li>
                    <li id="configurar" class="list-group-item">Nuevo alumno</li>
                </ul>
            </nav>

            <main class="cj-section" role="main">
                <button class="cj-show-aside" id="show-aside"><img src="<?=BASE_URL?>public/img/icon/more.svg" width="30px"></button>
                <section id="participantes" class="">
                    <h2>Participantes</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Matrícula</th>
                                    <th class="td-student">Nombre</th>
                                    <th class="td-student">Correo</th>
                                    <th>Perfil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($studentInfo as $student): ?>
                                <tr>
                                    <td>
                                        <?= $contador++ ?>
                                    </td>
                                    <td>
                                        <?=$student["matricula"];?>
                                    </td>
                                    <td class="td-student">
                                        <?=trim($student["nombre"])." ".trim($student["apellido_p"])." ".trim($student["apellido_m"]);?>
                                    </td>
                                    <td class="td-student">
                                        <?=$student["correo_institucional"]?>
                                    </td>
                                    <td><a class="btn btn-primary" href="<?=BASE_URL?>Dashboard/estudiante/<?=$student["matricula"];?>">Editar</a></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </section>
                <section class="equipos" id="equipos">
                    <div class="team">
                        <button id="btn-generar" class="btn btn-primary">Generar equipos</button>
                        <br><br>
                        <div class="equipos-generados" id="equipos-generados">
                        </div>
                        <div id="load" class="load">
                            <div class="loader"></div>
                            <h3>Creando equipos, espere...</h3>
                        </div>
                    </div>
                    <div id="information" class="list-group information">
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                            <div class="d-flex w-100 justify-content-between">
                                <h3 class="mb-1">Novedades</h3>
                                <small>6 de octubre del 2017</small>
                            </div>
                        </a>
                        <a href="#" id="sin-novedades" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Sin novedades</h5>
                            </div>
                        </a>
                    </div>
                    <span id="notify" class="notify">
                <img src="<?=BASE_URL?>public/img/icon/done.svg" width="30px" alt=""><strong>¡Listo!</strong></span>
                </section>
                <section id="configuracion" class="">
                    <div>
                        <section class="je-container">
                            <h1 class="je-title">Configuración del Evento</h1>
                            <p class="je-text">Última modificación: <span id="date-log"></span></p>
                            <form class="je-form" id="frm-conf" action="<?=BASE_URL?>views/save-config.php" method="post">
                                <label for="fecha-ini">Fecha de Inicio</label>
                                <input class="je-input" type="date" name="start-date" id="start-date" required>
                                <label for="fecha-fin">Fecha de Inicio</label>
                                <input class="je-input" type="date" name="finish-date" id="finish-date" required>
                                <label for="location">Lugar del Evento</label>
                                <input class="je-input" type="text" name="location" id="location" required>
                                <label for="institution">Intitución que lo Organiza</label>
                                <input class="je-input" type="text" name="institution" id="institution" required>
                                <input class="je-input je-check" type="checkbox" name="new-file" id="new-file">
                                <label class="je-lbl-check" for="new-file">Nueva configuración</label>
                                <input class="je-input je-button" type="submit" id="save" value="Guardar configuración" disabled>
                            </form>
                        </section>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <script src="<?=BASE_URL?>public/js/jquery.js"></script>
    <script src="<?=BASE_URL?>public/js/bootstrap/popper.js"></script>
    <script src="<?=BASE_URL?>public/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?=BASE_URL?>public/js/equipos-aleatorios.js"></script>
    <script src="<?=BASE_URL?>public/js/configure.js"></script>
    <script src="<?=BASE_URL?>public/js/dashboard.js"></script>
</body>

</html>
