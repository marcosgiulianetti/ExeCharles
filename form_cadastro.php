<html>

<head>
    <title>Cadastre-se</title>
    <link rel="stylesheet" type="text/css" href="css/formato.css">
</head>

<body>
    <div id="box_form">
        <h1 class="titulos" style="margin-left: 0%">Cadastre-se</h1>
        <form action="cadastrar.php" method="POST" enctype="multipart/form-data">
   
            <input type="text" name="nome" class="campos_cad" placeholder="Nome">
            <input type="text" name="email" class="campos_cad" placeholder="E-mail">
            <input type="text" name="cpf" class="campo_cad" placeholder="CPF">
            <input type="text" name="username" class="campo_cad" placeholder="Informe um Nome de Usuário">
            <input type="password" name="senha" class="campos_cad" placeholder="Informe uma Senha">
            

        
            <div class="botoes">
                <input type="submit" value="Cadastrar" class="bt_cad">
                <input type="reset" value="Limpar" class="bt_cad">
            </div>
            
        </form>

        <p class="p_form"> Já possui cadastro? Então clique no link abaixo para fazer login</p>
        <a href="login.php" class="form_link">Realizar login</a>
    </div>
</body>

</html>