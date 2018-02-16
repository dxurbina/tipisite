<?php
class PruebaarchivoController{
//esto no te va a servir, esto va a buscar el index.php en la carpeta de YA SE:View perame.
//crea un archivo defines.php o config.php y ahi pones esas configuraciones
//(carpeta de subida de archivos, contrasennas y servidor de base de datos)

 /*
 foreach ($_FILES["archivo"]["error"] as $clave => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $nombre_tmp = $_FILES["archivo"]["tmp_name"][$clave];
        // basename() puede evitar ataques de denegació del sistema de ficheros;
        // podría ser apropiado más validación/saneamiento del nombre de fichero
        $nombre = basename($_FILES["archivo"]["name"][$clave]);
        move_uploaded_file($nombre_tmp, $dir.$nombre);[
    }
}*/

/*** */
public function agregar(){
    if(isset($_FILES["archivo"]) && $_FILES["archivo"]["name"][0]){
        //deja!, jajajajajaajajajaj
        $i = 0;
        foreach($_FILES as $ffileinputname => $file){ // esta es la falla, $file es un archivo y lo estas usando comoindice
            //por custumbre siempre he usado el foreach asi
            //¿ya de aquí sabes que hacer?, ¿no?
            //cambialo vos, por que me da weba el teamviewer, cuando termines lo probamos. dale

            //iyay! AER
            //no no, lo que vas a cambiar es a $file
            //para no evaluar $file["type"][0] dos veces
            //proba
            for($i = 0; $i < count($file["name"]); $i++) {
                if((($type =  $file['type'][$i])== "image/jpeg") ||( $type == "image/png" )) {
                    $origen = $file['tmp_name'][$i] ;
                    $destino = UPLOADS_DIR .$file['name'][$i];
                    echo $destino;
                    if(move_uploaded_file($origen, $destino))
                    {
                        echo "se subió el archivo $destino"; //para depura correlo, no vi que subieras un archivo, pero bueno ,,
                    }else{
                        echo "no se pudo mover";
                    }
                }else{ echo "no es un formato válido"; }
            }
        }
    }else{ echo "no existe archivo";}
}
}
?>