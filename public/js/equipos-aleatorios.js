$(document).ready(function () {
    $("#equipos").hide();
    $("#configuracion").hide();
    $("#datos").hide();
    $("#generar").click(function (e) {
        e.preventDefault();
        $("#load").hide();
        $("#no-novedades").hide();
        $("#participantes").hide();
        $("#configuracion").hide();
        $("#equipos").show();
        $("#lista").removeClass("active");
        $("#generar").addClass("active");
        $("#configurar").removeClass("active");
    });
    $("#configurar").click(function (e) {
        e.preventDefault();
        $("#participantes").hide();
        $("#load").hide();
        $("#no-novedades").hide();
        $("#participantes").hide();
        $("#equipos").hide();
        $("#configuracion").show();
        $("#lista").removeClass("active");
        $("#generar").removeClass("active");
        $("#configurar").addClass("active");
    });
    $("#lista").click(function (e) {
        e.preventDefault();
        $("#equipos").hide();
        $("#configuracion").hide();
        $("#participantes").show();
        $("#lista").addClass("active");
        $("#generar").removeClass("active");
        $("#configurar").removeClass("active");
    });
    $("#btn-generar").click(function () {
        $("#load").hide();
        $("#equipos-generados").hide();
        $("#information").hide();
        $("#load").fadeIn();
        $("#load").delay(1000);
        $("#load").fadeOut("slow");
        showNotify(2000);
        getData();
        $("#equipos-generados").delay(2000).fadeIn();
        var equipos = obtenerEquipo();
        var resultados = createTeam(equipos);
        $("#equipos-generados").html(resultados[0]);
        var sobrantes = restantes(resultados[1], equipos);
        $("#information").delay(2000);
        $("#information").fadeIn();
        if(resultados[1] != 0){
            $("#sin-novedades").hide();
            $("#information").html(sobrantes);
        }
    });

    var programador;
    var diseñador;
    var orador;

    function getData() {

        programador = new Array(
            ["1", "Manuel1", "Programador"], ["2", "Manuel2", "Programador"], ["3", "Manuel3", "Programador"], ["4", "Manuel4", "Programador"], ["5", "Manuel5", "Programador"]);
        diseñador = new Array(
            ["7", "Ana1", "Diseñador"], ["8", "Ana2", "Diseñador"], ["9", "Ana3", "Diseñador"], ["10", "Ana4", "Diseñador"]
        );
        orador = new Array(
            ["11", "Marco1", "Orador"], ["12", "Marco2", "Orador"], ["13", "Marco3", "Orador"], ["14", "Marco3", "Orador"]
        );
    }

    function getList(lista) {
        if (lista.length != 0) {
            var aleatorio = Math.floor(Math.random() * lista.length);
            var resultado = lista[aleatorio];
            lista.splice(aleatorio, 1);
            return resultado;
        } else {
            return null;
        }
    }

    function obtenerEquipo() {
        var equipo = new Array();

        while (true) {
            var getP = getList(programador);
            var getD = getList(diseñador);
            var getO = getList(orador);

            if (getP != null) {
                equipo.push(getP);
            }
            if (getD != null) {
                equipo.push(getD);
            }
            if (getO != null) {
                equipo.push(getO);
            }
            if (getP == null && getD == null && getO == null) {
                break;
            }
        }
        return equipo;
    }

    function showNotify(time) {
        $("#notify").delay(time);
        $("#notify").animate({
            marginRight: 0
        }, 500, function () {
            $("#notify").delay(time);
            $("#notify").animate({
                marginRight: -250
            }, 250);
        });
    }
    
    
    function createTeam(equipos) {
        var html = "";
        var contTable = 0;
        var aux = null;
        var contTeam = 1;
        var resultados = new Array("", 0, 0);
        
        for (var i = 0; i < equipos.length; i++) {
            if (contTable == 0) {
                if (((equipos.length - 1) - i) <= 2) {
                    aux = i;
                    resultados[0] = html;
                    resultados[1] = aux;
                    
                    return resultados;
                }
                html += " <h4> Equipo: " + (contTeam) + "</h4> <table class='table table-striped'> <thead> <tr> <th> ID </th> <th> Nombre </th> <th> Perfil </th>  </tr>" +
                    "<tbody> <tr> <td>" + equipos[i][0] + " </td> <td>" + equipos[i][1] + " </td> <td>" + equipos[i][2] + " </td> </tr>";
                contTeam++;
                contTable++;
            } else {
                contTable++;
                html += "<tr> <td>" + equipos[i][0] + " </td> <td>" + equipos[i][1] + " </td> <td>" + equipos[i][2] + " </td> </tr>";
                if (contTable == 3) {
                    contTable = 0;
                    html += "</tbody> </table>";
                    console.log("Seria el fin de un equipo");
                }
            }
        }
        return resultados;
    }

    function restantes(aux, equipos) {
        var html2 = "";
        html2 += "<a href='#' class='list-group-item list-group-item-action flex-column align-items-start               active'>"+
                        "<div class='d-flex w-100 justify-content-between'>"+
                                "<h4 class='mb-1'>Sin Asignar</h4>"+
                                "<small>6 de octubre del 2017</small>"+
                            "</div>"+
                    "</a>"; 
        for (var i = aux; i < equipos.length; i++) {            
            html2 += "<a href='#' class='list-group-item list-group-item-action flex-column align-items-start'>" +
                "<div class='d-flex w-100 justify-content-between'>" +
                "<h5 class='mb-1'>"+equipos[i][1]+"</h5>" +
                "<small class='text-muted'>ID: "+equipos[i][0]+"</small>" +
                "</div>" +
                "<p class='mb-1'>"+equipos[i][2]+"</p>" +
                
                "<div style='text-align: right;'> <button type='button' class='btn btn-primary'>Agregar a:</button> </div>"+
                
                "</a>";
        }
        return html2;
    }

});
