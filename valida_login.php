<?php

    session_start();

//variavel que verifica se a autenticacao foi realizada
$usuario_autenticado = false;

//USUARIOS DO SISTEMA
$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd')
);

foreach($usuarios_app as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

if($usuario_autenticado){
    echo 'Usuário autenticado.';
    $_SESSION['autenticado'] = 'SIM';
    header('location: home.php');
}else{
    $_SESSION['autenticado'] = 'NAO';
    header('location: index.php?login=erro');
}



?>