<!DOCTYPE HTML>
<html lang='Pt-Br'>
    <head>
        <title>OnlyFans</title>
       <link rel="schortcut icon" type="image/png" href="img/8413196.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>

        <div class='container'>
            <h1 style="text-align:center;">Cadastro de Produto</h1>
            <br><br>
            <form action="CRUD/cad_prod.php" method="post">
            <div class = "form-grup offset-md-3">
                <div class="col-md-6">
                    <label for="">Nome do Produto:</label>
                    <br>
                    <input type="text" name ="name_prod" id="" class="form-control">

                </div>            
            </div>
            <div class = "form-grup offset-md-3">
                <div class="col-md-6">
                    <br>
                    <label for="">Quantidade do Produto:</label>
                    <br>
                    <input type="text" name ="qtd_prod" id="" class="form-control">
                </div>            
            </div>
            <div class = "form-grup offset-md-3">
                <div class="col-md-6">
                    <br>
                    <label for="">Valor do Produto:</label>
                    <br>
                    <input type="text" name ="valor_prod" id="" class="form-control">
                </div>            
            </div>
            <div class = "form-grup offset-md-3">
                <div class="col-md-6">
                    <br>
                    <label for="">Categoria do Produto:</label>
                    <br>
                    <input type="text" name ="cat_prod" id="" class="form-control">
                </div>     
                <div class="col-md-6">
                    <br>
                    <input type="submit" class="btn btn-success" value= "CADASTRAR PRODUTO">       
                    <a href="tabela.php" type="button" class="btn btn-primary float-end">Tabela Produtos</a>          

                </div>     
                                    
                </div>            
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>        
    </body>
</html>