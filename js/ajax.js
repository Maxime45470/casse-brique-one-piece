// Load background image défaite
bkgImage = new Image();
bkgImage.src = "resources/loose.jpg";
bkgImageWin = new Image();
bkgImageWin.src = "resources/win.jpeg";
function win() {
    clearInterval(iGameLoopId);
    with (win) {
        context.drawImage(bkgImageWin, 0, 0);
    }
    document.getElementById("score").innerHTML = "Tu es le roi des pirates" + "<br>" + "Score :" + " " + iScore;
    $('#visible').css('visibility', 'visible', 'important');
    $('#visible2').css('visibility', 'visible', 'important');
    $('.visible3').css('visibility', 'visible', 'important');
}
function loose() {
    clearInterval(iGameLoopId);
    with (loose) {
        context.drawImage(bkgImage, 0, 0);
    }
    document.getElementById("score").innerHTML = "Tu n'est pas le roi des pirates" + "<br>" + "Score:" + " " + iScore;
    $('#visible').css('visibility', 'visible', 'important');
    $('#visible2').css('visibility', 'visible', 'important');
    $('.visible3').css('visibility', 'visible', 'important');
}
$('#submit2').on({
    click: function () {
        var pseudo = $('#pseudo').val();
        var score = iScore;
        $.ajax({
            url: "ajax.php",
            method: "GET",
            data: { pseudo: pseudo, score: score },
            dataType: "json",
        })
            .done(function () {
                // alert( "success" );
                // console.log(data.result);
            })
            .fail(function () {
                alert("error");
            })
            //Ce code sera exécuté en cas d'échec - L'erreur est passée à fail()
            .fail(function (error) {
                alert("Une erreur c'est produite");
            });
    }
});