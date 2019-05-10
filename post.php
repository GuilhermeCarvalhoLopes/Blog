<?php
/**
 * Created by PhpStorm.
 * User: 21801150
 * Date: 18/03/2019
 * Time: 13:45
 */

session_start();

define("server", "mysql:host=localhost;dbname=blog");
define('user', 'root');
define('senha', '');
class post
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
        $smtp = $pdo->prepare("select * from post");

        // executar no banco
        $smtp->execute();

        // verificar se retornou dados
        if ($smtp->rowCount() > 0) {

            return $result = $smtp->fetchAll(PDO::FETCH_CLASS);
        }
    }

    public function listarprocessador(){
        $pdo = new PDO(server, user, senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        // criar o comando sql
        $smtp = $pdo->prepare("select * from post where tema == processador");

        // executar no banco
        $smtp->execute();

        // verificar se retornou dados
        if ($smtp->rowCount() > 0) {

            return $result = $smtp->fetchAll(PDO::FETCH_CLASS);
        }
    }

}