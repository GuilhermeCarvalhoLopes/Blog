<?php
define("server", "mysql:host=localhost;dbname=blogpronto");
define('user', 'root');
define('senha', '');
class Comentario
{
    public $id;
    public $Nome;
    public $Email;
    public $Comentario;


    public function listarAll()
    {
        //criar a conexao com o banco de dados
        $pdo = new PDO(server, user, senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        // criar o comando sql
        $smtp = $pdo->prepare("select * from comentario");

        // executar no banco
        $smtp->execute();

        // verificar se retornou dados
        if ($smtp->rowCount() > 0) {

            return $result = $smtp->fetchAll(PDO::FETCH_CLASS);
        }
    }
    public function inserir()
    {
        if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["comentario"])) {
            //preenche os atributos com os  valores do formulario
            $this->NOME = $_POST["nome"];
            $this->EMAIL = $_POST["email"];
            $this->COMENTARIO = $_POST["comentario"];
            // criar a conexao com o banco de dados

            $pdo = new PDO(server, user, senha);
            // criar o comando sql
            $smtp = $pdo->prepare("insert into comentario(id, nome, email, comentario) values(:id, :nome, :email, :comentario)");

            // executar no banco passando os valores recebidos como parametros
            $smtp->execute(array(
                ':id' => Null,
                ':nome' => $this->NOME,
                ':email' => $this->EMAIL,
                ':comentario' => $this->COMENTARIO


            ));

            // verificar se retornou dados
            if ($smtp->rowCount() > 0) {

                //volta para index
                header("location:fonte.php");
            }

        } else {
            //volta para index
            header("location:./");
        }

    }
}