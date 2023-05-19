<?php
  $banco = new BancoDeDados;
?>

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
                            <div class='col-md-12 mt-3 alert alert-success'>
                                Ok, você é bom nisso. Vamos para a próxima?
                                <br/>
                                <a href='index.php?pg=1'>Avançar</a>
                            </div>
                        </div>";
                }else{
                    echo "<div class='row'>
                            <div class='col-md-12 mt-3 alert alert-danger'>
                                Não é bem isso, tente novamente.
                            </div>
                        </div>";
                }
            }
        ?>