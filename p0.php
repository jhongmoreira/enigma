<?php
  $banco = new BancoDeDados;
  $numero = $_GET['pg'];
  $banco->query("SELECT * FROM respostas where pergunta = ".$numero);
  foreach ($banco->result() as $dados) {}
  if ($dados['status'] == 1){
    echo "<div class='row'>
                <div class='col-md-12 mt-3 alert alert-success'>
                    Você já respondeu esta questão.
                    <br/>
                    <a href='index.php?pg=1'>Avançar</a>
                </div>
            </div>";
  }
?>

<div class="row mt-1">
            <div class="col-md-12">
                <h1>Qual é a resposta?</h1>
                <p>O que é, o que é: cai em pé e corre deitado?</p>
            </div>
        </div>
        <form method="post">
            <div class="row">
                <div class="col-md-12">
                    <input class="form form-control" type="text" name="resposta" id="resposta" style="text-transform:uppercase">
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
                $formulario = strtolower($_POST["resposta"]);
                
                if ($resposta == $formulario){
                    $banco->query("UPDATE respostas SET status = 1 WHERE pergunta = '$numero';");
                    echo "<div class='row'>
                            <div class='col-md-12 mt-3 alert alert-success'>
                                Ok, essa foi fácil. Vamos para a próxima?
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