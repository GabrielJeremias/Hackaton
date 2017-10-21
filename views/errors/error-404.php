<?php
defined("ACCESS_SUCCESS") or die ("NO TIENES PERMISO PARA VER ESTO");
header($_SERVER["SERVER_PROTOCOL"] . "404 Not Found", true, 404);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Error 404</title>
    <link rel="stylesheet" href="">
    <style>
        body {
            margin: 0 30%;
        }

        h1 {
            font-size: 6em;
            color: #F84D2B;
            text-align: center;
            margin: 0;
        }

        span {
            font-size: 2em;
            color: black;
        }

        h2 {
            font-size: 1.5em;
            margin: 0;
            text-align: justify;
        }

        p {
            font-size: 1.2em;
        }

        a {
            text-decoration: none;
        }

        @media screen and (max-width: 768px) {
            body {
                margin: 5%;
            }
            h1 {
                font-size: 3em;
            }
            h2{
                text-align: center;
            }
        }

    </style>
</head>

<body>
    <h1>Oh no!! <br> <span>404 :(</span></h1>
    <h2>La página que intentas solicitar no se encuentra en el servidor (Error 404)</h2>
    <p>Prueba mejor suerte en estos links:</p>
    <ul>
        <li><a href="#">email me</a></li>
        <li><a href="#">email me</a></li>
        <li><a href="#">email me</a></li>
        <li><a href="#">email me</a></li>
        <li><a href="#">email me</a></li>
        <li><a href="#">email me</a></li>
    </ul>
    <p>Prueba nuevamente en nuestro homepage <a href="#">Homepage.com</a> </p>
</body>

</html>

