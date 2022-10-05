<?php
    require_once '../Componnents/header.php';

    $pagina = 'inicio';
    $acao = isset($_GET['a']) ? $_GET['a'] : 'noticia';

    require_once '../../App/Controller/InicioController.php';
    
    switch ($acao) {
        case 'detalhe';
            require_once 'pages/detalhe.php';
            break;
        default:
            require_once 'pages/noticias.php';
        break;
    }

    require_once '../Componnents/footer.php';

?>