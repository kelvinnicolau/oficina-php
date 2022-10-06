<?php

    require_once '../../Autoload.php';

    switch ($acao) {
        case 'detalhe';
        // require_once 'Pages/detalhe.php';
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $noticia = new Noticias();
                $noticias = $noticia->getPeloId($id);
                $item = $noticias[0];
            }
            break;
        default:
           $noticia = new Noticias();
           $noticias = $noticia->get();
        //    var_dump($noticias);
        break;
    }
?>