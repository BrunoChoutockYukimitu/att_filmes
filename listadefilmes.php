<?php
include "cabecalho.php";
?>
    <div class="row">
        <?PHP
        $servidor = 'localhost';
        $bd = 'bd_filmes';
        $usuario = 'root';
        $senha = '';

        $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
        if(!$conexao){
            die("deu ruim". mysqli_connect_errno());
        }
$sql = "select * from filmes";
$resultado = mysqli_query($conexao, $sql);

    //echo"<PRE>";
    //print_r($resultado);
    //exit();
    while($linha = mysqli_fetch_assoc($resultado)){
        ?>
        <div class="col-3 mb-4">
                <img src="<?=$linha['foto'];?>"class="img-fluid">
                <h3><?=$linha['titulo'];?></h3>
                <span>⭐<?=$linha['avaliacao'];?>/10</span><br>
                <a href="umfilme.php?id=<?= $linha['id'] ?>" class="btn btn-primary">Veja detalhes</a>
        </div>
<?PHP
}?>
<?php include "rodape.php"; ?>