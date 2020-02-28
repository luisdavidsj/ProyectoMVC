<?php
    session_start(['name'=>'SBP']);
    $peticionAjax=true;
    require_once "../core/configGeneral.php";
    if(isset($_POST)){

        //MODULO CLIENTES
        if(isset($_POST['busqueda_inicial_cliente'])){
            $_SESSION['busqueda_cliente']=$_POST['busqueda_inicial_cliente'];
        }

        if(isset($_POST['eliminar_busqueda_cliente'])){
            unset($_SESSION['busqueda_cliente']);
            $url="clientsearch";
        }


        if(isset($url)){
            echo '<script> window.location.href="'.SERVERURL.$url.'/" </script>';
        }else{
            echo '<script> location.reload(); </script>';
        }

    }else{
        session_destroy();
        echo '<script> window.location.href="'.SERVERURL.'login/" </script>';
    }