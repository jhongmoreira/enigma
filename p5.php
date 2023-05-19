<?php
  $banco = new BancoDeDados;
  $numero = $_GET['pg'];
?>

<?php
  $dbVerifica = new BancoDeDados;
  $dbVerifica->query("SELECT * FROM respostas where pergunta = 4");
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
                <h1>Calma</h1>
                <span>
                    <p>Já vamos chegar lá</p><br/>
                    <a href="index.php?pg=0">Voltar</a>
                </span>
            </div>
  </div>
  <?php
  }
  ?>