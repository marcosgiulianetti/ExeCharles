<?php

include("conexao.php");    

//O campo usuário e senha preenchidos para validar
if((isset($_POST['username'])) && (isset($_POST['senha']))){
 $usuario =($conn, $_POST['username']);
 $senha = mysqli_real_escape_string($conecta, $_POST['senha']);
 $senha = md5($senha);
 
 //Buscar na tabela o usuário que corresponde com os dados digitado no formulário
 $result_usuario = "SELECT * FROM usuario WHERE username = '$usuario' && password = '$senha' LIMIT 1";
 $resultado_usuario = mysqli_query($conn, $result_usuario);
 $resultado = mysqli_fetch_assoc($resultado_usuario);
 

 
 if(isset($resultado)){
    echo "<script>alert('Login realizado com Sucesso! Aproveite nossa Loja de Games');"
         
    . "window.location='index.php';"
           . "</script>";
  
 }
    
 //Não foi encontrado um usuario na tabela 
 }else{    
     $_SESSION['loginErro'] = "Usuário ou senha Inválido";
     echo "<script>alert('Usuário ou Senha inválido, tente novamente!');"
         
     . "window.location='login.php';"
            . "</script>";

 }
//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login

?>



