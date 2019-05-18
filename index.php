<?php

    $pagina = (!empty($_POST))? $_POST['page']:"inicio";

    switch ($pagina) {
        case 'inicio':
            # code...
            include_once('inicio.php');            
            break;
        case 'forum':
            # code...
            include_once('forum.php');            
            break;
        case 'organizacion':
            include_once('organizacion.php');                    
            break;
        case 'certificado':
            include_once('certificado.php');            
            break;            
        default:
            # code...
            echo "Error ";
            break;
    }

?>