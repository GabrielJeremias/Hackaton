getData();
$("#frm-conf").submit(function (e) {
    e.preventDefault();
    saveData();
});
$("#new-file").click(function () {
    if ($("#new-file").prop("checked")) {
        $("#save").removeAttr("disabled");
    } else {
        $("#save").attr("disabled", true);
    }
});

function saveData() {
    
    $.ajax({
        url: BASE_URL+"Dashboard/setConfig",
        type: "POST",
        data: $("#frm-conf").serialize(),
        cache: false,
        success: function (data) {
            if (data == "save") {
                alert("Configuración Guardada");
                $("#save").attr("disabled", true);
                $("#new-file").prop("checked", false);
                getData();
            }
        }
    });
}

function getData() {
    $.ajax({
        url: BASE_URL+"Dashboard/getConfig",
        type: "POST",
        data: {
            "data": true
        },
        dataType: "json",
        cache: false,
        success: function (data) {
            if (data != "save") {
                console.log(data)
                $("#save").attr("disabled", true);
                $("#new-file").prop("checked", false);
                $("#start-date").val(data[0]);
                $("#finish-date").val(data[1]);
                $("#location").val(data[2]);
                $("#institution").val(data[3]);
                $("#date-log").text(data[4]);
            }
        }
    });
}
