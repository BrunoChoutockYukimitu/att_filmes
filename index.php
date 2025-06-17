<?php
include "cabecalho.php";
include "banner.php";
?>
<div class="container">
    <h2 class="display-5">Melhores avaliações</h2>
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
                <span>⭐<?=$linha['avaliacao'];?>/10</span>
        </div>
<?PHP
}?>
    </div>

    <div class="row mt-5">
        <div class="col-6">
            <img src="https://film-book.com/wp-content/uploads/2009/06/the-last-airbender-teaser-detalhes-header.jpg" class="img-fluid">
        </div>
        <div class="col-6 align-content-center">
            <p>Avatar: The Last Airbender, também conhecida como Avatar: The Legend of Aang (bra: Avatar: O Último Mestre do Ar; prt: Avatar: O Último Airbender), é uma série de televisão estadunidense de aventura e fantasia. É uma adaptação live-action da série de televisão de animação de mesmo nome (2005–2008).</p>
            <a href="https://youtube.com" class="btn btn-success btn-lg">ASSISTA AO detalhes</a>
        </div>
    </div>

    <div class="row">
        <div class="col-6 align-content-center">
            <p>The Dark Knight Rises is the finale of Christopher Nolan's Batman trilogy. It is set eight years after the events of The Dark Knight and follows a retired Wayne as Batman to save Gotham City from nuclear destruction by the terrorist Bane2. The film is celebrated for its grand scale, thrilling action, and standout performances by Christian Bale and Tom Hardy1.</p>
            <a href="https://youtube.com" class="btn btn-success btn-lg">ASSISTA AO detalhes</a>
        </div>
        <div class="col-6">
            <img src="https://th.bing.com/th/id/R.1575408649924b12d9fd8e4aca122552?rik=6O%2fILcaN%2brc7Wg&riu=http%3a%2f%2fwww.impawards.com%2f2012%2fposters%2fdark_knight_rises_ver13_xxlg.jpg&ehk=ow6IA89C%2f7JG3tnSJYsO6cctspsZ9QOuLkK7VnGBh0I%3d&risl=&pid=ImgRaw&r=0" class="img-fluid">
        </div>
    </div>
</div>

<button type="button" class="btn btn-waring btn-lg mt-5 fs-5 fw-bold text-danger" data-bs-togge="modal"
    data-bs-target="#exampleModal">Precisa de ajuda? Clique aqui!</button>

<div class="modal fade" id="exampleModalLabel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ajuda </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Entre em contato através dos nossos canais de comunicação:</p>
                <p>E-mail: film@feilme.com.br <br> Whatsapp:(11)99999-9999</p>
                <a href="contato.php" Formulãrio de contato></a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">
                    Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php include "rodape.php" ?>