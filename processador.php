<?php
session_start();


require_once "inserir.php";
//criar um objeto do tipo cargo
$comentario = new Comentario();

// chamar a funcao para listar todos cargos
$lista = $comentario->listarAll();
// chamar a funcao para inserir testando se foi clicado no botao salvar
if(isset($_POST['salvar'])){
    $comentario->inserir();
}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Blog Computador</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#hide").click(function(){
            $("tr").hide();
        });
        $("#show").click(function(){
            $("tr").show();
        });
    });
</script>
<?php
	header("Content-Type:text/html; charset=utf8");
$con = new PDO("mysql:host=localhost; dbname=blogpronto; charset=utf8", "root", "");
$sql = $con->prepare("SELECT 
        p.id,
        DATE_FORMAT(p.data, '%d/%m/%Y %H : %i') as data,
    p.mensagem, 
    u.nome as autor,
    u.foto, 
    t.assunto FROM post p 
    INNER JOIN usuario u ON u.id=p.usuario_id
    LEFT JOIN tema t ON t.id=p.tema_id where tema_id = '3' ");
$sql->execute();

//fetchAll - feito para recuperar todos os registros da tabela
//PDO::FETCH_CLASS - feito para armazenar os dados recuperados em um objeto
$rows = $sql->fetchAll(PDO::FETCH_CLASS);

foreach ($rows as $row){

    foreach ($rows as $row){

    }
    echo "</table>";

}

?>

</body>
</html>

<!DOCTYPE html>
<head>
    <title>Blog Computador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height: 1500px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height: auto;}
        }

        .butaolike{
            background-color: transparent;
            border: 0px;
            width: 70px;
            height: 50px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h4 class="text-center">Blog Computador</h4><br>
            <ul class="nav nav-pills nav-stacked">
                <hr>
                <li class=" btn btn-danger" style=" width: 550px; color: red;"><a href="index.php" class="text-center" style="color: black;">Logout</a></li>
                <hr>
                <h3 style="margin-right: 90px">Escolha seu artigo...</h3><Br><br><Br><br>
                <li class="active" style=" width: 550px;"><a href="../blogentrega/processador.php" class="text-center">Processador</a></li><br><Br>
                <li class="active" style=" width: 550px;"><a href="../blogentrega/memoria.php" class="text-center">Memória</a></li><br><Br>
                <li class="active" style=" width: 550px;"><a href="../blogentrega/gabinete.php" class="text-center">Gabinete</a></li><br><Br>
                <li class="active" style=" width: 550px;"><a href="../blogentrega/mouse.php" class="text-center">Mouse</a></li><br><Br>
                <li class="active" style=" width: 550px;"><a href="../blogentrega/fonte.php" class="text-center">Fonte</a></li><br><Br>

                <li class="active" style=" width: 550px;"><a href="../blogentrega/placamae.php" class="text-center">Placa mãe</a></li><br><Br>
                <li class="active" style=" width: 550px;"><a href="../blogentrega/placavideo.php" class="text-center">Plava de vídeo</a></li><br><Br>

            </ul><br>

        </div>

        <div class="col-sm-9">
            <h4><small>RECENT POSTS</small></h4>
            <hr>
            <?php
            foreach ($rows as $row){

                echo "<h4>$row->autor <img width='50px;' height='50px;' class='rounded-circle' src='../blogNovo/images/$row->foto''> </h4> <h5><span class=\"glyphicon glyphicon-time\"></span>  $row->data</h5>
    <p> $row->mensagem</p>
    <br><br>
    <h4>Deixe seu Comentario:</h4>
        <div class=\"form-group\">
            <form action=\"indie.php\" method=\"post\">
                <input type=\"text\" name=\"nome\" class=\"form-control mb-30\" placeholder=\"Nome\"><br>
                <input type=\"email\" name=\"email\" class=\"form-control mb-30\" placeholder=\"Email\"><br>
                    <textarea name=\"comentario\" class=\"form-control\" rows=\"3\" required></textarea>
                </div>
                    <button name='salvar' style='margin-bottom: 37px' type=\"submit\" class=\"btn btn-success\">Enviar</button>
            </form>
        <form method='get' action='like.php'>
            <input type='hidden' value='processador.php' name='url'>
            <input type='hidden' value='3' name='tema_id'>
            <input type='hidden' value='". $_SESSION['usuario']->id ."' name='usuario_id'>
            <button class='butaolike' type='submit'><img src='../blogNovo/images/like.jfif' style=' margin-right: 1030px;'  width='60px;' height='50px;'></button>
        </form>
        
    <br>";

            if($lista) : ?>
            <?php foreach ($lista as $comentario) : ?>
            <h4>Comentários</h4>
            <a href="#" class="author-name">Nome:<?php echo $comentario->nome;?>
                <p>Comentario:<?php echo $comentario->comentario;?></p>
                <?php endforeach; ?>
                <?php endif;

            }
            ?>
        </div>
    </div>
</div>
</div>
</div>



</body>
</html>

