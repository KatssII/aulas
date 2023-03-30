<?php

require("conn.php");

$tabela = $pdo->prepare("SELECT id2''+

+_produto, nome_produto, qtd_produto, valor_produto, valor_produto, cat_produto from tb_produtos;");
$tabela->execute();
$rowTabela = $tabela->fetchAll();

if (empty($rowTabela)) {
    echo "<script>alert('Tabela Vazia')</script>";
}

?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <title>tabela</title>
    <link rel="schortcut icon" type="image/png" href="img/8413196.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                    ID do Produto
                </th>
                <th scope="col">
                    Nome do Produto
                </th>
                <th scope="col">
                    Quantidade de Produto
                </th>
                <th scope="col">
                    Categoria Produto
                </th>
                <th scope="col">
                    Valor do Produto
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($rowTabela as $linha) {
                echo '<tr>';
                echo "<th scope='row'>" . $linha['id_produto'] . "</th>";
                echo "<td>" . $linha['nome_produto'] . "</td>";
                echo "<td>" . $linha['cat_produto'] . "</td>";
                echo "<td>" . $linha['qtd_produto'] . "</td>";
                echo "<td>" . $linha['valor_produto'] . "</td>";
                echo '<td><a href=edit_tabela.php?produto='.$linha['id_produto'].' class="btn btn-warning">Editar</a></td>"';
                echo '<td><button type="button" class="btn btn-danger">Excluir</button></td>"';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>