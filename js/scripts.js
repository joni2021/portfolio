var height = $(window).height();

$(document).ready(function(ev){
//        AJUSTE DE ALTO DE DIVS Y CENTRADO VERTICAL
    $("#dis").css('height',height);
    $("#prog").css('height',height);
    $("#textoProgramacion").css('marginTop',height/2-110);
    $("#textoProgramacion").css('marginLeft',parseInt($("#textoProgramacion").css('marginLeft'))+15+'px');
    $("#textoDisenio").css('marginTop',height/2-110);

    $("#dis2").css('height',height/2);
    $("#prog2").css('height',height/2);


    $('#img1').css('marginTop',height/2-100);
    $('#img2').css('marginTop',height/2-100);
    $('#img3').css('marginTop',height/2-100);


//        EFECTOS DE VELOCITY
    $.Velocity.mock = .4;

    $("#img1").find('img').velocity({
        properties: { translateX: "-100%" },
        options: { duration: 300, delay:2700 }
    });

    $("#img2").find('img').velocity({
        properties: { translateX: "100%" },
        options: { duration: 300, delay: 2700 }
    });

    $("#img3").find('img').velocity({
        properties: { rotateZ: "180deg",
            opacity: '0'
        },
        options: { duration: 1000, delay:2000 }
    });


//        FADES EN EL HOVER
    var opacity = "<div id='opacity' class='col-sm-6'></div>";

    $('#img1').on('mouseenter',function(ev){
        if($('#opacity')){
            $('#opacity').velocity('fadeOut',{
                duration:800,
                complete:function(){
                    $('#opacity').remove();
                }
            });
            //      QUITAR CARTEL DISEÑO
            $("#textoDisenio").velocity('fadeOut',{duracion:800});
        }

        $('.container-fluid').append(opacity);
        $('#opacity').css('right','0');
        $('#opacity').css('height',height);

        $('#opacity').velocity('fadeIn',{
            duration:800
        });

        //      MOSTRAR CARTEL DISEÑO
        $("#textoDisenio").css('marginLeft',$("#textoProgramacion").width()+45+'px');
        $("#textoDisenio").velocity('fadeIn',{duracion:800});


    });

    $('#img1').on('mouseout',function(ev){
        if($('#opacity')){
            $('#opacity').velocity('fadeOut',{
                duration:800,
                complete:function(){
                    $('#opacity').remove();
                }
            });
            //      QUITAR CARTEL DISEÑO
            $("#textoDisenio").velocity('fadeOut',{duracion:800});
        }
    });


    $('#img2').on('mouseenter',function(ev){
        if($('#opacity')) {
            $('#opacity').velocity('fadeOut',{
                duration:800,
                complete:function(){
                    $('#opacity').remove();
                }
            });
            //      QUITAR CARTEL PROGRAMACION
            $("#textoProgramacion").velocity('fadeOut',{duracion:800});
        }

        $('.container-fluid').append(opacity);
        $('#opacity').css('left','0');
        $('#opacity').css('height',height);

        $('#opacity').velocity('fadeIn',{
            duration:800
        });

        //      MOSTRAR CARTEL PROGRAMACION
        $("#textoProgramacion").velocity('fadeIn',{duracion:800});
    });

    $('#img2').on('mouseout',function(ev){
        if($('#opacity')){
            $('#opacity').velocity('fadeOut',{
                duration:800,
                complete:function(){
                    $('#opacity').remove();
                }
            });
            //      QUITAR CARTEL PROGRAMACION
            $("#textoProgramacion").velocity('fadeOut',{duracion:800});
        }
    });

});