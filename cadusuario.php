<?php
/**
 * Created by PhpStorm.
 * User: guilh
 * Date: 16/03/2019
 * Time: 12:23
 */

session_start();

define("server", "mysql:host=localhost;dbname=blogpronto");
define('user', 'root');
define('senha', '');

class cadusuario
{
    public $id;
    public $nome;
    public $email;
    public $senha;
    public $foto;

    public function listarAll()
    {
        //criar a conexao com o banco de dados
        $pdo = new PDO(server, user, senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        // criar o comando sql
        $smtp = $pdo->prepare("select * from usuario");

        // executar no banco
        $smtp->execute();

        // verificar se retornou dados
        if ($smtp->rowCount() > 0) {

            return $result = $smtp->fetchAll(PDO::FETCH_CLASS);
        }
    }

    public function inserir()
    {
        if (isset($_GET["nome"]) && isset($_GET["email"]) && isset($_GET["senha"]) && isset($_GET["foto"])) {
            //preenche os atributos com os  valores do formulario
            $this->Nome = $_GET["nome"];
            $this->Email = $_GET["email"];
            $this->Senha = $_GET["senha"];
            $this->Foto = $_GET["foto"];

            // criar a conexao com o banco de dados
            $pdo = new PDO(server, user, senha);
            // criar o comando sql
            $smtp = $pdo->prepare("insert into usuario(id, nome, email, senha, foto) values(:id, :nome, :email, :senha, :foto)");

            // executar no banco passando os valores recebidos como parametros
            $smtp->execute(array(
                ':id' => Null,
                ':nome' => $this->Nome,
                ':email' => $this->Email,
                ':senha' => md5($this->Senha),
                ':foto' => $this->Foto
            ));

            // verificar se retornou dados
            if ($smtp->rowCount() > 0) {

                //volta para index
                header("location: index.php");
            }

        } else {
            //volta para index
            header("location: cad");
        }
    }
}