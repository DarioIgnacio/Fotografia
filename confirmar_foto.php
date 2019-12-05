<?php

$dir_subida = 'imagenes/';
$destino = $dir_subida . $_FILES['miarchivo']['name'];

if(file_exists($destino)){
    echo "ya existe ese archivo, cambia el nombre";
    die();
}

if(move_uploaded_file($_FILES['miarchivo']['tmp_name'],$destino)){
    echo "el fichero es valido y se subio con exito";

    $conexion = mysqli_connect("Localhost", "root", "", "fotografia");
    $sql = "insert into fotos(path_foto,id_trabajo) VALUES('$destino',1)";
    $respuesta = mysqli_query($conexion,$sql);
}else {
    echo "no se pudo subir archivo";
}