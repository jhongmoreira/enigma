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
                    <a href='index.php?pg=2'>Avançar</a>
                </div>
            </div>";
  }
?>

<?php
  $dbVerifica = new BancoDeDados;
  $dbVerifica->query("SELECT * FROM respostas where pergunta = 0");
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
            <div class="col-md-12">
                <h1>Quem sou eu?</h1>
                <span>
                    "Eu, filho do carbono e do amoníaco,<br/>
                    Monstro de escuridão e rutilância,<br/>
                    Sofro, desde a epigênesis da infância,<br/>
                    A influência má dos signos do zodíaco.<br/><br/>

                    Profundissimamente hipocondríaco, <br/>
                    Este ambiente me causa repugnância... <br/>
                    Sobe-me à boca uma ânsia análoga à ânsia <br/>
                    Que se escapa da boca de um cardíaco.<br/><br/>

                    Já o verme — este operário das ruínas —<br/>
                    Que o sangue podre das carnificinas <br/>
                    Come, e à vida em geral declara guerra,<br/><br/>

                    Anda a espreitar meus olhos para roê-los, <br/>
                    E há-de deixar-me apenas os cabelos, <br/>
                    Na frialdade inorgânica da terra!"<br/><br/>
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
                $resposta = "augusto dos anjos";
                $formulario = strtolower($_POST["resposta"]);
                
                if ($resposta == $formulario){
                    $banco->query("UPDATE respostas SET status = 1 WHERE pergunta = '$numero';");
                    echo "<div class='row'>
                            <div class='col-md-12 mt-3 alert alert-success'>
                                Sabia que te amo meu amor ❤️? Sigamos em frente.
                                <br/>
                                <a href='index.php?pg=2'>Avançar</a>
                            </div>
                        </div>";
                }else{
                    echo "<div class='row'>
                            <div class='col-md-12 mt-3 alert alert-danger'>
                                Não é tão difícil assim. Tente novamente.
                            </div>
                        </div>";
                }
            }
        ?>

        <?php
         }
        ?>