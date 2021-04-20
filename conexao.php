<?php


try{
    $conecta=new PDO('mysql:host=localhost; port=3306;dbname=bdprojeto1',"root","");
    $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $erro){
    echo "Erro no BD";
}
?>