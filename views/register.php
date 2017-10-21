<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Hackaton 2017</title>
    <link rel="stylesheet" href="<?=BASE_URL?>public/css/uikit/uikit.min.css" />
    <style>
        body {
            background-image: url(img/hackaton.jpg);
            background-size: 100%;
            background-attachment: fixed;
            height: 100% !important;
        }

        form {
            width: 70%;
            margin-top: 20px;
        }

        .input50,
        .input100 {
            margin-bottom: 10px;
            width: 49% !important;
        }

        .input100 {
            width: 100% !important;
        }

        .my-navbar {
            background-color: rgba(0, 0, 0, 0.9) !important;
        }

        .txt-white {
            color: white !important;
        }

        .txt-gray {
            color: lightgray !important;
        }

        .uk-select {
            padding-left: 13%;
        }

        .uk-container-small {
            padding: 20px !important;
            margin: 25px auto !important;
        }

        @media screen and (max-width:768px) {
            form {
                width: 98%;
                margin-top: 20px;
            }
            .input50 {
                width: 100% !important;
            }
            .input-container {
                flex-direction: column;
            }
        }

    </style>
</head>

<body>
    <nav class="uk-navbar-container uk-margin my-navbar">
        <div class="uk-navbar-left">
            <a class="uk-navbar-item uk-logo txt-white" href="#">Hackatón</a>
            <ul class="uk-navbar-nav">
                <li class="uk-active">
                    <a href="#" class="txt-white">
                        <span class="uk-icon uk-margin-small-right" uk-icon="icon: users"></span>
                        Registro
                    </a>
                </li>
                <li>
                    <a href="<?=BASE_URL?>dashboard" class="txt-gray">
                        <span class="uk-icon uk-margin-small-right" uk-icon="icon: file-edit"></span>
                        Dashboard
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="uk-section uk-section-muted uk-container-small">
        <h3 class="uk-text-center">Tiempo restante para el inicio del Hackaton 2017</h3>
        <div class="uk-grid-small uk-child-width-auto uk-flex uk-flex-center" uk-grid uk-countdown="date: 2017-11-20T00:24:25+00:00">
            <div>
                <div class="uk-countdown-number uk-countdown-days"></div>
                <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Días</div>
            </div>
            <div class="uk-countdown-separator">:</div>
            <div>
                <div class="uk-countdown-number uk-countdown-hours"></div>
                <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Horas</div>
            </div>
            <div class="uk-countdown-separator">:</div>
            <div>
                <div class="uk-countdown-number uk-countdown-minutes"></div>
                <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Minutos</div>
            </div>
            <div class="uk-countdown-separator">:</div>
            <div>
                <div class="uk-countdown-number uk-countdown-seconds"></div>
                <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Segundos</div>
            </div>
        </div>

        <h4 class="uk-text-center">¡Vamos el tiempo está corriendo!, no lo pienses ni un segundo más y registrate para poder participar en el tan eperado Hackatón Tec Motul 2017</h4>
        <div class="uk-flex uk-flex-center">
            <form>
                <div class="uk-flex uk-flex-between input-container">
                    <div class="uk-inline input50">
                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                        <input class="uk-input" type="text" placeholder="Nombres" required>
                    </div>
                    <div class="uk-inline input50">
                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                        <input class="uk-input" type="text" placeholder="Apellidos" required>
                    </div>
                </div>
                <div class="uk-flex uk-flex-between input-container">
                    <div class="uk-inline input50">
                        <span class="uk-form-icon" uk-icon="icon: star"></span>
                        <select class="uk-select" required>
                            <option disabled selected>Selecciona un Perfil</option>             <option>Programador</option>
                            <option>Diseñardor</option>
                            <option>Orador</option>
                        </select>
                    </div>
                    <div class="uk-inline input50">
                        <span class="uk-form-icon" uk-icon="icon: world"></span>
                        <select class="uk-select" required>
                            <option disabled selected>Selecciona un Estado</option>
                            <option>Yucatán</option>
                            <option>Campeche</option>
                            <option>Q. Roo</option>
                        </select>
                    </div>
                </div>
                <div class="uk-flex uk-flex-between input-container">
                    <div class="uk-inline input50">
                        <span class="uk-form-icon" uk-icon="icon: location"></span>
                        <select class="uk-select" required>
                            <option disabled selected>Selecciona una Ciudad</option>
                            <option>Cacalchén</option>
                            <option>Izamal</option>
                            <option>Tixpeual</option>
                            <option>Motul</option>
                        </select>
                    </div>
                    <div class="uk-inline input50">
                        <span class="uk-form-icon" uk-icon="icon: list"></span>
                        <select class="uk-select" required>
                            <option disabled selected>Selecciona tu Escuela</option>
                            <option>Tec Motul</option>
                            <option>Tec Progreso</option>
                            <option>Tec Valladolid</option>
                            <option>Tec Sur de Yucatán</option>
                        </select>
                    </div>
                </div>
                <div class="uk-flex uk-flex-between input-container">
                    <div class="uk-inline input50">
                        <span class="uk-form-icon" uk-icon="icon: bolt"></span>
                        <select class="uk-select" required>
                            <option disabled selected>Selecciona una Carrera</option>
                            <option>Ingeniería en Sistemas Computacionales</option>
                            <option>Ingeniería en Electrónica</option>
                            <option>Ingeniería en Electromecánica</option>
                            <option>Ingeniería en Enegias Renovables</option>
                            <option>Ingeniería Industrial</option>
                        </select>
                    </div>
                    <div class="uk-inline input50">
                        <span class="uk-form-icon" uk-icon="icon: hashtag"></span>
                        <input class="uk-input" type="text" placeholder="Matrícula" required>
                    </div>
                </div>
                <div class="uk-flex uk-flex-between input-container">
                    <div class="uk-inline input100">
                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                        <input class="uk-input" type="email" placeholder="Correo Institucional" required>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center">
                    <button class="uk-button uk-button-secondary input50" type="submit">¡Registrarse!</button>
                </div>

            </form>
        </div>
    </section>
    <script src="<?=BASE_URL?>public/js/jquery.js"></script>
    <script src="<?=BASE_URL?>public/js/uikit/uikit.min.js"></script>
    <script src="<?=BASE_URL?>public/js/uikit/uikit-icons.min.js"></script>
</body>

</html>
