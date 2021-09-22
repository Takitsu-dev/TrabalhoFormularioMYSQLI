<?php 
    include('conexao.php');

    $Nome = $_POST["nome"];
    $nomeCompleto = $_POST["nome_completo"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $dataDeNascimento = $_POST["date"];
    $celular = $_POST["telefone"];
    $cep = $_POST["cep"];
    $endereço = $_POST["endereco"];
    $estado = $_POST["estado"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];

    $cadastrar_usuario = "INSERT INTO usuario (nome_usuario ,nome_completo ,email ,senha ,data_nascimento ,celular ,cep ,endereco ,estado ,cidade ,numero_casa ,bairro ,complemento) VALUES ('$Nome' ,'$nomeCompleto' ,'$email' ,'$senha' ,'$dataDeNascimento' ,'$celular' ,'$cep' ,'$endereço' ,'$estado' ,'$numero' ,'$complemento' ,'$bairro' ,'$cidade')";

    if(mysqli_query($conect ,$cadastrar_usuario)){
        echo "<h1>Novo cadastro efetuado</h1>";
    }   else{
        echo "error : " . $cadastrar_usuario . "<br>" . mysqli_error($conect);
    }
        mysqli_close($conect);
?>
