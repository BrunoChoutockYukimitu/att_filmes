<?php
include "cabecalho.php";
?>
    <div class="row">
        <?PHP
include "conexao.php";
$sql = "select * from filmes order by titulo asc";
$resultado = mysqli_query($conexao, $sql);
 
    //echo"<PRE>";
    //print_r($resultado);
    //exit();
    while($linha = mysqli_fetch_assoc($resultado)){
        ?>
        <div class="col-3 text-center">
                <img src="<?=$linha['foto'];?>"class="img-fluid capa-filme">
                <h3><? echo mb_strimwidth($linha['titulo'], 0, 20, "...");?></h3>
                <h5 class="card-title"><?= $linha['titulo']; ?></h5>
                <span>⭐<?=$linha['avaliacao'];?>/10</span><br>
                <a href="umfilme.php?id=<?=$linha['id'] ?>" class="btn btn-primary">Veja detalhes</a>
        </div>
<?PHP
}
mysqli_close($conexao);?>
<?php include "rodape.php"; ?>