<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog Computador</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
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


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
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
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h4 class="text-center">Blog Computador</h4>
            <ul class="nav nav-pills nav-stacked">
                <hr>
                <li class=" btn btn-danger" style=" width: 550px; color: red;"><a href="index.php" class="text-center" style="color: black;">Logout</a></li>
                <hr>
                <h3 style="margin-right: 50px">Escolha seu artigo...</h3><Br><br><Br><br>
                <li class="active" style=" width: 550px;"><a href="../blogentrega/processador.php" class="text-center">Processador</a></li><br><Br>
                <li class="active" style=" width: 550px;"><a href="../blogentrega/memoria.php" class="text-center">Memória</a></li><br><Br>
                <li class="active" style=" width: 550px;"><a href="../blogentrega/gabinete.php" class="text-center">Gabinete</a></li><br><Br>
                <li class="active" style=" width: 550px;"><a href="../blogentrega/mouse.php" class="text-center">Mouse</a></li><br><Br>
                <li class="active" style=" width: 550px;"><a href="../blogentrega/fonte.php" class="text-center">Fonte</a></li><br><Br>

                <li class="active" style=" width: 550px;"><a href="../blogentrega/placamae.php" class="text-center">Placa mãe</a></li><br><Br>
                <li class="active" style=" width: 550px;"><a href="../blogentrega/placavideo.php" class="text-center">Plava de vídeo</a></li><br><Br>

        </div>







        <div class="col-sm-9">
            <h4><small>Bem vindo</small></h4>
            <hr>



            <h3><center>Bem vindo ao nosso blog.</center> </h3>
            <h3><center>Aqui iremos falar um pouco sobre os componentes de um computador.</center> </h3>





</body>
</html>