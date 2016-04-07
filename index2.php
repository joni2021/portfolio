<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="css/bootstrap.css">
   <!--    <link rel="stylesheet" href="css/animate.css">-->
    <link rel="stylesheet" href="css/estilos.css">

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/velocity.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="container-fluid col-sm-6 col-sm-offset-4">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href=javasctipt:void(0)>Link</a></li>
                            <li><a href=javasctipt:void(0)>Link</a></li>
                            <li><a href=javasctipt:void(0)>Link</a></li>
                            <li><a href=javasctipt:void(0)>Link</a></li>
                            <li><a href=javasctipt:void(0)>Link</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="row">
            <div class="col-xs-12" id="quienSoy">
                <div class="row">
                    <div class="hidden-xs col-sm-12">
        <!--                <div id="img1" class="animated slideOutLeft">-->
                        <div id="img1">
                            <img src="img/yo.png" alt="yo">
<!--                            <div></div>-->
                        </div>
                        <div id="img2">
        <!--                <div id="img2" class="animated slideOutRight">-->
                            <img src="img/yo.png" alt="yo">
<!--                            <div></div>-->
                        </div>
                        <div id="img3">
        <!--                <div id="img3" class="animated rotateOut">-->
                            <img src="img/yingyang.png" alt="yingyang">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="hidden-xs col-sm-12" style="margin-top: 220px">
                        <div class="hidden-xs col-sm-6 col-md-4 col-md-offset-2 disenio">
                            <h1>DISEÑADOR</h1>
                            <h4>Recibido de Director de Arte Publicitario en la AAP <br/>
                            "Las mejores ideas vienen como chistes. Haz tus pensamientos tan divertidos como puedas"<br/><small>DAVID OGILVY</small></h4>
                        </div>
                        <div class="hidden-xs col-sm-6 col-md-4 programacion">
                            <h1>PROGRAMADOR</h1>
                            <h4>Graduado de Programador Web en Escuela Da Vinci
                                <small><br></small>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="visible-xs col-xs-12">
                        <div class="col-xs-6 disenio">
                            <h1>DISEÑADOR</h1>
                            <h4>Recibido de Director de Arte Publicitario en la AAP <br/>
                                "Las mejores ideas vienen como chistes. Haz tus pensamientos tan divertidos como puedas"<br/><small>DAVID OGILVY</small></h4>
                        </div>
                        <div class="col-xs-6 programacion">
                            <h1>PROGRAMADOR</h1>
                            <h4>Graduado de Programador Web en Escuela Da Vinci
                                <small><br></small>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>






    </div>



    <script>
        $(".navbar-nav").find("a").on('click',function(ev){
            ev.preventDefault();

            if($(".navbar-nav").find("a").parent().hasClass('active')){
                $(".navbar-nav").find("a").parent().removeClass('active');
            }

            $(this).parent().addClass('active');

        });

        $.Velocity.mock = .4;

        $("#img1").velocity({
            properties: { translateX: "-100%" },
            options: { duration: 300, delay:2700 }
        });

        $("#img2").velocity({
            properties: { translateX: "100%" },
            options: { duration: 300, delay: 2700 }
        });

        $("#img3").velocity({
            properties: { rotateZ: "180deg",
                          opacity: '0'
            },
            options: { duration: 1000, delay:2000 }
        });

    </script>

</body>
</html>