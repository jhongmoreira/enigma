<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>???</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h1>Qual é a resposta?</h1>
                <p>O que é, o que é: cai deitado e corre em pé?</p>
            </div>
        </div>
        <form method="post">
            <div class="row">
                <div class="col-md-12">
                    <input class="form form-control" type="text" name="resposta" id="resposta">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3">
                    <button class="btn btn-primary form form-control">Enviar</button>
                </div>
            </div>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == 'POST')
            {
                $resposta = "chuva";
                $formulario = $_POST["resposta"];
                
                if ($resposta == $formulario){
                    echo "<div class='row'>
                            <div class='col-md-12 mt-3 alert-info'>
                                Ok, você é bom nisso, vamos para a próxima
                            </div>
                        </div>";
                }else{
                    echo "<div class='row'>
                            <div class='col-md-12 mt-3 alert-danger'>
                                Não é bem isso, tente novamente.
                            </div>
                        </div>";
                }
            }
        ?>
    </div>    
</body>
</html>