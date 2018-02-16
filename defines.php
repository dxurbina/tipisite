<?php
/**
 * En este config se definen constantes usadas en todo
 * el programa. asi como se agregan los directorios View, controller y model 
 * a la ruta de busqueda de archivos php para evitar incluirlos por nombre completo
 * Hay que notar que si dos archivos tienen el mismo nombre en carpetas distintas solo se incluira
 * el primero en encontrarse, en este caso no es un gran problema por que las clases llevan un sufijo
 * que evita que choquen los nombres ej. UserModel en la carpeta Model, pero UserController en la carpeta controller
 * creo que por defecto la funcion sp_autload de PHP busca clases por nombres de archivos
 * asi que no creo que sea necesario hacer "includes", por ejemplo se puede usar la clase
 * UserModel, PHP la busca en la path sin necesidad de haser include_once("UserModel")
*/
    call_user_func(function(){
        define("UPLOADS_DIR", dirname(__FILE__) . "/uploads/");
        define ("AVATAR_DIR", UPLOADS_DIR . "/avatar/");
        define("MEDIA_DIR", UPLOADS_DIR . "/media/");
        $dir = dirname(__FILE__); //no uso __DIR__ por que no existia en PHP 5.3
        $path = get_include_path();
        $path .= (PATH_SEPARATOR . dirname($dir));
        $path = $path . PATH_SEPARATOR .  $dir;
        spl_autoload_register(function ($cls) {
            require_once $cls . ".php";
        });
        #eso era
        #some/directory:antoher/directory
        # se toma la cadena y se troza cada vez que encuentre un PATH_SEPARATOR
        # se buscan los archivos en cada uno de esos trozo
        #es para saber donde comienza una ruta 
        # ¿ya?
        # si :V 
        #¿todas las rutas las mando a llamar desde a quío?
        #si, no me vengas con "optiminzacion", diciendome que eso es mucha carga
        #jaja no tranquilo, esta interesante.
        #dale, usa este archivo para configurar la applicacion, ya con esto esta centralizado
        

        $path .= (PATH_SEPARATOR . "$dir/Controller");
        $path .= (PATH_SEPARATOR . "$dir/View"); #proba, asi
        $path .= (PATH_SEPARATOR . "$dir/Model");
        # para model, creo que si vas a tener que hacer un include relativo
        # include_once("Entity/comment.php") por ejemplo
        //¿ya? con lo ultimo mas o menos xd
        //quiero ver que cambies el punto y coma, buscal la constante
        //googlea esto php path separator
        set_include_path($path);
    });
    
    //hace que inicie siempre desde index para que esta configuracion sea global
?>
