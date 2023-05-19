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
                    <a href='index.php?pg=4'>Avançar</a>
                </div>
            </div>";
  }
?>

<?php
  $dbVerifica = new BancoDeDados;
  $dbVerifica->query("SELECT * FROM respostas where pergunta = 2");
  foreach ($dbVerifica->result() as $verifica) {}
  if ($verifica['status'] == 0){
    echo "<div class='row'>
                <div class='col-md-12 mt-3 alert alert-danger'>
                    Você não respondeu a pergunta anterior. <br/>
                    Não dê uma de espertinho. 
                </div>
            </div>";
  }else{
?>
<div class="row mt-1">
            <div class="col-md-12 mb-2">
                <h1>????</h1>
                <span>
                    <img src="img/p3.jpg" alt="">
                </span>
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
                $resposta = "amor";
                $formulario = strtolower($_POST["resposta"]);
                
                if ($resposta == $formulario){
                    $banco->query("UPDATE respostas SET status = 1 WHERE pergunta = '$numero';");
                    echo "<div class='row'>
                            <div class='col-md-12 mt-3 alert alert-success'>
                                É o que eu sinto por você ❤️
                                <br/>
                                <a href='index.php?pg=5'>Avançar</a>
                            </div>
                        </div>";
                }else{
                    echo "<div class='row'>
                            <div class='col-md-12 mt-3 alert alert-danger'>
                                Clássicos dos ARGs. Tente novamente. 
                            </div>
                        </div>";
                }
            }
        ?>

        <?php
         }
        ?>