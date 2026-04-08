<?php
//versão corrigida para evitar SQL Injection

session_start();
$dbname = "udemy_loja_online";
$username = "user_loja_web";
$password = "123";

try {
    $user = $_POST['text_username'];
    $pass = $_POST['text_pass'];

    $ligacao = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", $username, $password);
  
    $parametro=[
        ':user' =>$_POST['text_username'],
        ':pass' =>$_POST['text_pass']
    ];

   

    $comando = $ligacao->prepare("SELECT * FROM usuarios WHERE username = :user AND passwrd = :pass");
    $comando->execute($parametro);
    $resultado = $comando->fetchAll(PDO::FETCH_OBJ);

    if (count($resultado) == 1) {
        echo "<pre>";
        print_r($resultado);
        echo "</pre>";
    } else {
        $_SESSION['mensagem'] = 'login nao encontrado';
        header("Location: index.php");
        exit;
    }
} catch (Exception $erro) {

    echo $erro->getMessage();
}
?>

