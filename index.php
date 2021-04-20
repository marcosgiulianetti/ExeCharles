<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/formato.css">
</head>

<body>
    <div id="box_form">
        <h1 class="titulos" style="margin-left: 0%">Logar</h1>
        <form action="verificar_login.php" method="POST" enctype="multipart/form-data">
   
            <input type="text" name="username" class="campos_cad" placeholder="Nome">
            <input type="password" name="senha" class="campos_cad" placeholder="Senha">
        
            <div class="botoes">
                <input type="submit" value="Login" class="bt_cad">
                <input type="reset" value="Limpar" class="bt_cad">
            </div>
            
        </form>

        <p class="p_form">Não possui cadastro? Então clique no link abaixo para fazer o cadastro</p><br>
        <a href="form_cadastro.php" class="form_link">Cadastrar-se</a>
    </div>
</body>

</html>