<?php include "cabecalho.php"; ?>
<?php
        /* inicio da conexão com o BD*/
        $servidor = 'localhost';
        $bd = 'bd_filmes';
        $usuario = 'root';
        $senha = '';
        $id = $_GET['id'] ?? 0;
 
        $conexao = mysqli_connect($servidor,$usuario,$senha,$bd);
       
        if(!$conexao){
            die("deu ruim". mysqli_connect_error());
        }
 
        /* fim da conexao */
       
 
 
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
 
        ?>
<?php include "rodape.php"; ?>
 