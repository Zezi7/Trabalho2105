<?php
    include 'navbar.php';
    require 'conectaBanco.php';
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $desc = $_POST['descricao'];
    if(empty($nome)){
        echo "<p>Campo nome deve ser preenchido </p>";
    }else{
        $sql = "INSERT INTO produto(nome, valor, descricao) VALUES 
                                        ('$nome','$valor', '$desc')";
        $banco->query($sql); 
        if($banco->affected_rows >= 1){
            echo "<p>Produto $nome cadastrado com sucesso!</p>";
        }else{
            echo "Erro ao inserir produto $nome no banco de dados!";
        }
    }

    $banco->close();
?>