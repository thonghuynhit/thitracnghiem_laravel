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
    $('#nguoirade').change(function(){
        let id = $(this).val();
        $.get("ajax/thisinh/chondethi/" + id, function(data){
            $("#dethi").html(data);
        });
    });
    $('#dethi').change(function(){
        var id = $(this).val();
        $.get('ajax/thisinh/chonde/' + id, function(data){
            $("#chonde").html(data);
        });
    });
    $(".sodo li:first").addClass("active");
    $(".carousel-inner div:first").addClass("active");
});
