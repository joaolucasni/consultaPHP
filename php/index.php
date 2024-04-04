<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página com Container</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script>
  $( function() {
    $( "#txtDataNascimento" ).datepicker();
  } );
  </script>

</head>
<body>
    <div class="container">

    <form method="get" action="listar.php">
        <div class="texto">
        <label for="txtCnpj">CNPJ:</label>
        <input type="text" id="txtCnpj" name="txtCnpj"><br><br>

        <label for="txtDataNascimento">Data de Nascimento:</label>
        <input type="text" id="txtDataNascimento" name="txtDataNascimento"></p> <br><br>

        <label for="txtRazaoSocial">Razão Social</label>
        <input type="text" id="txtRazaoSocial" name="txtRazaoSocial"><br><br>

        <label for="txtNomeFantasia">Nome Fantasia:</label>
        <input type="text" id="txtNomeFantasia" name="txtNomeFantasia"><br><br>

        <label for="txtTipoLogradouro">Tipo de Logradouro:</label>
        <input type="text" id="txtTipoLogradouro" name="txtTipoLogradouro"><br>
        
        <label for="txtLogradouro">Logradouro:</label>
        <input type="text" id="txtLogradouro" name="txtLogradouro"><br><br>

        <label for="txtNumero">Número:</label>
        <input type="text" id="txtNumero" name="txtNumero"><br><br>

        <label for="txtBairro">Bairro:</label>
        <input type="text" id="txtBairro" name="txtBairro"><br><br>

        <label for="txtComplemento">Complemento:</label>
        <input type="text" id="txtComplemento" name="txtComplemento"><br><br>

        <label for="txtPais">País:</label>
        <input type="text" id="txtPais" name="txtPais" value = "Brasil"><br><br>

        <label for="txtEstado">Estado:</label>
        <input type="text" id="txtEstado" name="txtEstado"><br><br>

        <label for="txtCidade">Cidade:</label>
        <input type="text" id="txtCidade" name="txtCidade"><br><br>

        <label for="txtCep">CEP:</label>
        <input type="text" id="txtCep" name="txtCep"><br><br>

        <label for="txtRua">Rua:</label>
        <input type="text" id="txtRua" name="txtRua"><br><br>
        </div>

        <input class="botao" type="submit" name= "Cadastrar" value="Cadastrar"> <br>
        <input class="botao" type="reset"  name="Limpar" value="Limpar">
        
    </form>

    <script type="text/javascript" src="js/cnpj.js"></script>
    </div>

</body>
</html>
