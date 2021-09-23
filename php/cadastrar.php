<?php

    include('conexao.php');

    $nome           = $_POST["nomeCompleto"];
    $genero         = $_POST["genero"];
    $user           = $_POST["usuario"];
    $email          = $_POST["email"];
    $senha          = $_POST["senha"];
    $date           = $_POST["date"];
    $cpf            = $_POST["cpf"];
    $telefone       = $_POST["telefone"];
    $cep            = $_POST["cep"];
    $uf             = $_POST["uf"];
    $cidade         = $_POST["cidade"];
    $endereco       = $_POST["endereco"];
    $numero         = $_POST["numero"];
    $complemento    = $_POST["complemento"];


    $cadastra = "INSERT INTO users (nome, genero, user, email, senha, data, cpf, telefone, cep, uf, cidade, endereco, numero, complemento) VALUES ('$nome', '$genero', '$usuario', '$email', '$senha', '$date', '$cpf', '$telefone', '$cep', '$uf', '$cidade', '$endereco', '$numero', '$complemento')";

    if (mysqli_query($conn, $cadastra)){
        echo "<h1>Novo cadastro realizado</h1></br>";
    } else {
        echo "Erro: " . $cadastra . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>
