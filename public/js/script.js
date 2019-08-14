$(document).ready(function(){
    $(window).scroll(function(){
        if($(this.window).scrollTop() > 20) $('.menu').addClass("background");
        if($(this.window).scrollTop() <= 20) $('.menu').removeClass("background")
    });
    $(".data-login input").on("focus", function(){
        $(this).addClass("focus");
    });
    $(".data-login input").on("blur", function(){
        if($(this).val() == "")
        {
            $(this).removeClass("focus");
        }
    });
        if($(".data-login input").val() != ""){
            $(".data-login input").addClass("focus");
        }
    $("#cauhoi").change(function(){
        var id = $(this).val();
        $.get("ajax/nguoirade/danhsachcauhoi/" + id, function(data){
            $("#dscauhoi").html(data);
        });
    });

});
