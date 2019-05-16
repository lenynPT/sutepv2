<?php

    $pagina = (!empty($_POST))? $_POST['page']:"inicio";

    switch ($pagina) {
        case 'inicio':
            # code...
            include_once('inicio.php');
            echo "this page is the menu";
            break;
        case 'forum':
            # code...
            include_once('forum.php');
            echo "this page is the forum";
            break;
        case 'organizacion':
            include_once('organizacion.php');            
            echo "this page is of the organizacion";
            break;
        case 'certificado':
            include_once('certificado.php');            
            echo "this page is of certification";
            break;            
        default:
            # code...
            echo "Error ";
            break;
    }

?>