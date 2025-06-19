<?php include "cabecalho.php"; ?>
<?php
include "conexao.php";
       
 
 
        $sql = "select * from filmes where id = " . $id;
        $resultado = mysqli_query($conexao,$sql);
       
        //echo "<pre>";
        //print_r($resultado);
        //exit();
        while($linha = mysqli_fetch_assoc($resultado) ){
          ?>
          <div class="container">
            <h2><?=$linha['titulo'];?></h2>
            <img src="<?=$linha['foto'];?>">
            <p>⭐ <?=$linha['avaliacao'];?>/10</p>
            <p><strong>Categoria: </strong> <?=$linha['categoria'];?> </p>
            <p><strong>História:</strong> <?=$linha['historia'];?></p>
        </div>
        <?php
        }
        mysqli_close($conexao);
        ?>
<?php include "rodape.php"; ?>
 