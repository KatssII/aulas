<!DOCTYPE HTML>
<html lang='Pt-Br'>
    <head>
        <title>Casdastro de usuario</title>
       <link rel="schortcut icon" type="image/png" href="img/8413196.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>

        <div class='container'>
            <h1 style="text-align:center;">Cadastro de Usuario</h1>
            <br><br>
            <form action="CRUD/cadastro_usuario.php" method="post">
            <div class = "form-grup offset-md-3">
                <div class="col-md-6">
                    <label for="">Nome:</label>
                    <br>
                    <input type="text" name ="nome_pessoa" id="" class="form-control" placeholder="Insira seu nome">

                </div>            
            </div>
            <div class = "form-grup offset-md-3">
                <div class="col-md-6">
                    <br>
                    <label for="">Email:</label>
                    <br>
                    <input type="text" name ="email_pessoa" id="" class="form-control " placeholder="Insira um email">
                </div>            
            </div>
            <div class = "form-grup offset-md-3">
                <div class="col-md-6">
                    <br>
                    <label for="">CPF:</label>
                    <br>
                    <input type="text" name ="cpf_pessoa" id="" class="form-control " placeholder="Insira seu cpf">
                </div>            
            </div>
            <div class = "form-grup offset-md-3">
                <div class="col-md-6">
                    <br>
                    <label for="">CEP:</label>
                    <br>
                    <input type="text" name ="cep_pessoa" id="" class="form-control" placeholder="Insira seu cep">
                </div>     
                <div class="col-md-6">
                    <br>
                    <input type="submit" class="btn btn-success" value= "CADASTRAR">       
                    </a>          

                </div>     
                                    
                </div>            
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>        
    </body>
</html>