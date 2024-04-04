<?php
        $write = "";
        $dataNascimento = $_GET["txtDataNascimento"];
        $razaoSocial = $_GET["txtRazaoSocial"];
        $nomeFantasia = $_GET["txtNomeFantasia"];
        $tipoLogradouro = $_GET["txtTipoLogradouro"];
        $logradouro = $_GET["txtLogradouro"];
        $numero = $_GET["txtNumero"];
        $bairro = $_GET["txtBairro"];
        $complemento = $_GET["txtComplemento"];
        $pais = $_GET["txtPais"];
        $estado = $_GET["txtEstado"];
        $cidade = $_GET["txtCidade"];
        $cep = $_GET["txtCep"];
        $rua = $_GET["txtRua"];

        $write .= "Data de nascimento: $dataNascimento;" . 
        " Razão Social: $razaoSocial;" . 
        " Nome Fantasia: $nomeFantasia;" .
        " Tipo Logradouro: $tipoLogradouro;" .
        " Logradouro: $logradouro;" .
        " Número: $numero;" .
        " Bairro: $bairro;" .
        " Complemento: $complemento;" .
        " País: $pais;" .
        " Estado: $estado;" .
        " Cidade: $cidade;" .
        " Cep: $cep;" .
        " Rua: $rua \n \n";

        try
        {
            file_put_contents("registro/Registro.txt", $write, FILE_APPEND);
            echo "Os dados foram gravados com sucesso";
        }catch(Exception $e){
            echo "Erro ao gravar dados";
        }

        ?>
        <input type="button" value="Voltar" onclick="location='index.php'" />