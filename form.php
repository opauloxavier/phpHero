<?php 
    require("functions.php");

    ini_set('display_errors', 1);


    if( isset($_POST['enviar'])){

        if (!empty($_POST['nome']) && !empty($_POST['telefone']) && !empty($_POST['email']) && !empty($_POST['genero']) && !empty($_POST['carteira_pref']) && !empty($_POST['carteira'])){
            insertUser($_POST['nome'],$_POST['telefone'],$_POST['genero'],$_POST['carteira'],$_POST['carteira_pref'],$_POST['email']);
        }

        else
            echo "Existem dados faltando no seu formulario";
    }
?>