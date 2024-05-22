<?php
    include 'navbar.php';
    require 'conectaBanco.php';
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $desc = $_POST['descricao'];
    if(empty($nome) or empty($valor) or empty($desc)){
        echo "<p>Os Campos devem ser preenchidos </p>";
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
