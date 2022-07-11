$(function() {
    $("#opener").on("click", function() {
        $("#dialog").dialog("open");
    });
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
  
  } );