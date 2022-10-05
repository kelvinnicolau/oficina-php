<?php

    require_once '../../Autoload.php';

    switch ($acao) {
        case 'detalhe';
            require_once 'Pages/detalhe.php';
            break;
        default:
           $noticia = new Noticias();
           $noticias = $noticia->get();
        //    var_dump($noticias);
        break;
    }
?>