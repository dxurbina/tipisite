<html lang = "es">
<head>
    <meta charset = "UTF-8">
    <title>Tipi Site</title>
    <link rel="stylesheet" type="text/css"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="View/css/AdminLTE.css"/>
    <link rel="stylesheet" type="text/css" href="View/css/estilos.css"/>
    <link rel="stylesheet" type="text/css" href="View/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css"/>
    <script src="View/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="View/js/jspage.js" type="text/javascript"></script>
    <style>

    * {
        margin: 0;
        padding: 0;
    }
      html, body{
            min-height: 100%;
            padding: 0;
            margin: 0;
            font-family: 'Source Sans Pro', "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .divPanel{
            margin-left: 4.16%; margin-right: 4.16%; padding: 0; text-align: center;
        }

        .divPanel2{
            margin-left: 4%; margin-right: 4%; padding: 0; text-align: center;
        }

        .fondofoto{
            
        }

        .btns {background-color: #445A5D; color: white;}

        
    </style>
</head>
<body onLoad="mostrarInputFileModificado(1);" style="background-color: #445A5D;">
    <header>
        <nav class="navbar navbar-inverse navbar-static-top" style="background-color: #445A5D; border-bottom-width: 1px; border-bottom-color: #f9f9f9;">
            <div class="container-fluid">
                <div class= "navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="Navbar-brand" href="?c=View">Tipi Site</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                    <ul class="nav navbar-nav">
                        <li><a href="?c=View"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Inicio</a></li>
                        <li class="dropDown"><a class="dropdDown-toggle" data-toggle = "dropdown" ><i class="fa fa-book fa-fw" aria-hidden = "true"></i>&nbsp; Balneareos<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="?c=View&a=indexTrapiche">Trapiche</a></li>
                                <li><a href="?c=View&a=indexTrapichito">Trapichito</a></li>
                                <li><a href="?c=View&a=indexTermales">Termales</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php/?c=Principal"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; Acerca de</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input  type="text" class="form-control" placeholder = "Buscar"/>
                    </div>
                    <button type="submit" class= "btn btn-default">Buscar</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-right dropdown"><a class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Sesión<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" data-target="#imodal" data-toggle="modal">Iniciar</a><li>
                            <li><a href="?c=View&a=indexRegistrarse">Registrarse</a><li>
                        </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- POP UP inicio Sesion -->
            <div class="modal fade" id="imodal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div classs="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" style="text-align: center">Inicio Sesión</h4>
                        </div>
                        <div clas="modal-body">
                            <form action="?c=Sesion&a=Iniciar" method="POST">
                                <div class="form-group" style="text-align: center;"><label>NickName</label></div>
                                <div class="form-group"><input name="nickname" type="text" class="form-control"/></div>
                                <div class="form-group" style="text-align: center;"><label>PassWord</label></div>
                                <div class="form-group"><input name="password" type="password" class="form-control"/></div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btns" value="Iniciar" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </header>
    
  
