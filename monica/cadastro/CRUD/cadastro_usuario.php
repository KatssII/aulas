<?php

    require('../conn.php');

    echo "<pre>";
    print_R($_POST);
    echo "</pre>";

    $nome_pessoa = $_POST['nome_pessoa'];
    $email_pessoa = $_POST['email_pessoa'];
    $cpf_pessoa = $_POST['cpf_pessoa'];
    $cep_pessoa = $_POST['cep_pessoa'];

    if (empty($nome_pessoa) || empty($email_pessoa) || empty($cpf_pessoa) || empty($cep_pessoa)){
        echo"Os valores não podem ser vazios";
    }else{
        $cadastro_usuario = $pdo->prepare("INSERT INTO cadastro_usuario(nome_pessoa, email_pessoa, cpf_pessoa, cep_pessoa) 
        VALUES(:nome_pessoa, :email_pessoa, :cpf_pessoa, :cep_pessoa)");
        $cadastro_usuario->execute(array(
            ':nome_pessoa'=> $nome_pessoa,
            ':email_pessoa'=> $email_pessoa,
            ':cpf_pessoa' => $cpf_pessoa,
            ':cep_pessoa' => $cep_pessoa
        ));

        echo "Sucesso";
    }
?>