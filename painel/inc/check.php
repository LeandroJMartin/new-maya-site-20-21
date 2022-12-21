<?php

    if (!isset($_SESSION)) :
        session_start();
    endif;

    require '../../class/global.php';

    if(isset($_POST['submit'])) :

        $get_user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING );
        $get_pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_EMAIL );
        $get_pass = md5($get_pass);

        include_once('connect.php');

        $values = $db->query("SELECT * FROM users WHERE user = '$get_user' && pass = '$get_pass'");
        $search = $values->fetchAll(PDO::FETCH_ASSOC);

        $cont = count($search);

        foreach($search as $item){

            $id   = $item['id'];
            $name = $item['name'];
            $user = $item['user'];
            $pass = $item['pass'];

        }

        if( $user == $get_user && $pass == $get_pass ) :

            if( $cont === 1 ) :

                $_SESSION['id'] = $id;
                $_SESSION['name'] = $name;
                header('Location: ../dashboard.php?p=home');
                exit();

            else :

                $_SESSION['loginErro'] = 'Usuário não encontrado';
                header('Location:' . DIR);
                exit();

            endif;

        else :

            $_SESSION['loginErro'] = 'Usuário ou senha inválidos!';
            header('Location:' . DIR);
            exit();

        endif;

    else :

        $_SESSION['loginErro'] = 'Preencha os campos para se conectar!';
        header('Location:' . DIR);
        exit();

    endif;
