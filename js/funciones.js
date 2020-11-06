$(function() {
    $("#ciudades").accordion();
    $("#dialog").dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 1000
        }
    });

    $("#opener").on("click", function() {
        $("#dialog").dialog("open");
    });
    $("#caliImg").draggable();
    $("#bogotaImg").draggable();
    $("#cartagenaImg").draggable();
    $("#medellinImg").draggable();
    $("#tabs").tabs();
    var state = true;
    $("#efectoComida").on("click", function() {
        if (state) {
            $("#effectFood").animate({
                backgroundColor: "#aa0000",
                color: "#fff",
                width: 500
            }, 1000);
        } else {
            $("#effectFood").animate({
                backgroundColor: "#fff",
                color: "#000",
                width: 240
            }, 1000);
        }
        state = !state;
    });

    $("#efectoMusica").on("click", function() {
        if (state) {
            $("#effectMusic").animate({
                backgroundColor: "#aa0000",
                color: "#fff",
                width: 500
            }, 1000);
        } else {
            $("#effectMusic").animate({
                backgroundColor: "#fff",
                color: "#000",
                width: 240
            }, 1000);
        }
        state = !state;
    });
    $("#datepicker").datepicker();
});

