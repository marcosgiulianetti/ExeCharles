<?php
include './conexao.php';
 


$nome=$_POST['nome'];
$email=$_POST['email'];
$cpf=$_POST['cpf'];
$username=$_POST['username'];
$senha=md5($_POST['senha']);




/*  if($username == "" || $nome=="" ||$email == "" || $cpf=="" || $senha == "" ){
    echo"<script> alert('Todos os campos devem ser preenchidos'); window.location.href='form_cadastro.php' </script> ";
   
   }
 
    else{*/
      
        $sql = "INSERT into cliente values (null,'$nome','$email','$cpf','$username',$senha)";
          echo "<script>alert('Cliente cadastrado com sucesso');"
               
           . "window.location='login.php';"
                  . "</script>";

      
    
  
         
       // }
       
     
        
        
      
    
?>