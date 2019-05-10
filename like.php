<?php
session_start();


define("server", "mysql:host=localhost;dbname=blogpronto");
define('user', 'root');
define('senha', '');

class Gostei
{

    public $like;

    public function darGostei()
    {

        // criar a co
        //exao com o banco de dados
        $pdo = new PDO(server, user, senha);
        // criar o comando sql
        $smtp = $pdo->prepare("insert into gostei(usuario_id, tema_id) values(:usuario_id, :tema_id)");

        // executar no banco passando os valores recebidos como parametros
        $smtp->execute(array(
            ':usuario_id' => $_SESSION['usuario']->id,
            ':tema_id' => $_GET["tema_id"]
        ));


        // verificar se a instrucao sql foi executada
        if ($smtp->errorCode() == "00000") {


            //deu certo
               header("location: ".$_GET["url"]);

        } else {
            echo $smtp->errorInfo()[2];
        }

    }
}


$obj = new Gostei();
$obj->darGostei();

// deu errado
header("location: ".$_GET["url"]);


