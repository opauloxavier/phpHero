<?php 

    require("core/config.php");


    function connectSQL(){
    	 try{

            $dsn = DBTYPE.":dbname=".DBNAME.";host=".HOST.";";

        	$pdo = new PDO($dsn,DBUSER,DBPASS);

        	return $pdo;
    	}
    	catch(PDOException $e){
       		echo "Erro ao conectar com banco: <br> ".$e->getMessage();
            die();
   			}
    	}

    function insertUser($nome,$telefone,$genero,$carteira,$carteira_pref,$email){

    	$pdo = connectSQL();

    	$sql = "INSERT INTO px_users SET 
        	nome='$nome',
        	telefone='$telefone',
        	genero = '$genero',
        	carteira_pref = '$carteira_pref',
        	carteira = '$carteira',
            email = '$email'
        	";

        $sql = $pdo->query($sql);

    }
?>