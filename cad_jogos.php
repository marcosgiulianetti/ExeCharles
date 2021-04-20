<html>

<head>
    <title>Cadastrar Jogo</title>
    <link rel="stylesheet" type="text/css" href="css/formato.css">
</head>

<body>
    <div id="box_form">
        <h1 class="titulos" style="margin-left: 0%">Cadastro de Jogos</h1>
        <form action="cadastrar.php" method="POST" enctype="multipart/form-data">
   
            <input type="text" name="nome_jogo" class="campos_cad" placeholder="Nome">
            <textarea name="descricao" id="descricao" cols="30" rows="10" class="campos_cad" placeholder="Descrição do Jogo"></textarea>
            <input type="file" name="img_jogo" class="campos_cad">
            
        
            <div class="botoes">
                <input type="submit" value="Cadastrar" class="bt_cad">
                <input type="reset" value="Limpar" class="bt_cad">
            </div>
            
        </form>
    </div>
</body>

</html>