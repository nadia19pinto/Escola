<?php
define("DB_HOST","localhost");      
//servidor
define("DB_USER","root");      
//utilizador da base de dados
define("DB_PASS","");      
//palavra passe do utilizador da base de dados
define("DB_NAME","escola");      
//nome da base de dados
define("DSN_USE","mysql:host=" . DB_HOST . ";dbname=" . DB_NAME);    
 //link para a base de dados
 define("CONFIG_OP", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  
//configuração dos erros da ligação á base de dados



//LIGAÇÃO A BASE DE DADOS

function ligarBD(){
    try{
        $conn = new PDO(DSN_USE,DB_USER,DB_PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    }catch(PDOEXCEPTION $e){
        echo "ligação falhou" . $e->getMessage();
    }

    return $conn;

}
?>