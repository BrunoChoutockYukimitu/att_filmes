<?php include "cabecalho.php";
//recupegar informação do id 
$id = $_GET['id'];
//conecção com bd;;
//montagem do sql
//execução do sql
//definição das variaveis do filme
//laço com as informações do filme
//mostrar as informações na tela
//fechar o bd
?>
<?php
include "conexao.php";



$sql = "select * from filmes where id = " . $id;
$resultado = mysqli_query($conexao, $sql);

//echo "<pre>";
//print_r($resultado);
//exit();
while ($linha = mysqli_fetch_assoc($resultado)) {
?>
  <div class="container">
    <div class="row mx-5 mt-5">
      <div class="col">
      <img src="<?= $linha['foto']; ?>" class="img-fluid" alt="filme_imagem">
      </div>
      <div class="col">
        <h2><?= $linha['titulo']; ?></h2>
      <p>⭐ <?= $linha['avaliacao']; ?>/10</p>
      <p><strong>Categoria: </strong> <?= $linha['categoria']; ?> </p>
      <p><strong>História:</strong> <?= $linha['historia']; ?></p>
      </div>
    </div>
  </div>
<?php
}
mysqli_close($conexao);
?>
<?php include "rodape.php"; ?>