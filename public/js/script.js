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
    $(".xem_kq").click(function(){
        $(".ds_ketqua").slideDown(500);
    });
    $("#dethi_kq").change(function(){
        var id_dt_kq = $(this).val();
        $.get("ajax/nguoirade/ketquadethi/" + id_dt_kq, function(data){
            $("#dsketqua").html(data);
        });
    });
    $('.ch_checked0 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo0').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked1 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo1').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked2 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo2').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked2 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo2').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked3 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo3').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked4 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo4').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked5 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo5').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked6 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo6').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked7 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo7').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked0 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo0').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked8 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo8').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked9 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo9').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked10 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo10').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked11 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo11').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked12 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo12').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked13 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo13').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked14 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo14').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked15 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo15').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked16 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo16').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked17 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo17').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked18 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo18').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked19 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo19').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked20 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo20').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked21 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo21').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked22 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo22').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked23 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo23').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked24 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo24').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked25 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo25').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked26 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo26').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked27 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo27').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked28 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo28').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked29 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo29').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked30 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo30').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked31 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo31').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked31 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo31').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked32 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo32').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked33 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo33').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked34 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo34').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked35 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo35').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked36 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo36').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked37 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo37').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked38 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo38').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked39 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo39').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked40 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo40').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked41 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo41').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked42 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo42').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked42 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo42').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked43 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo43').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked44 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo44').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked45 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo45').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked46 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo46').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked47 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo47').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked48 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo48').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked49 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo49').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked50 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo50').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked51 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo51').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked52 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo52').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked53 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo53').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked54 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo54').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked55 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo55').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked56 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo56').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked57 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo57').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked58 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo58').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked59 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo59').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked60 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo60').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked60 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo60').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked61 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo61').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked62 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo62').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked63 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo63').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked64 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo64').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked65 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo65').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked66 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo66').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked67 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo67').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked68 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo68').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked69 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo69').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked70 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo70').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked71 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo71').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked72 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo72').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked73 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo73').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked74 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo74').css({'background': '#27ae60'});
        }
    });
    $('.ch_checked75 input').change(function(){
        if($(this).attr('checked', true)){
            $('.check_sodo75').css({'background': '#27ae60'});
        }
    });



});
