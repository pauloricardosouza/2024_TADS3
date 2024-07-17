<?php

    include("conexaoBD.php");

    //Cria variáveis para receber o email e a senha informados no formLogin
    //Utiliza a função mysqli_real_escape_string para evitar SQL Injection
    $emailUsuario = mysqli_real_escape_string($conn, $_POST['emailUsuario']);
    $senhaUsuario = mysqli_real_escape_string($conn, $_POST['senhaUsuario']);

    //Criar a QUERY responsável por realizar a verificação dos dados no BD
    $buscarLogin = "SELECT *
                    FROM Usuarios
                    WHERE emailUsuario = '{$emailUsuario}'
                    AND senhaUsuario = md5('{$senhaUsuario}')";

    //Cria uma variável booleana para verificar se a query foi executa com sucesso
    $efetuarLogin = mysqli_query($conn, $buscarLogin);

    if($registro = mysqli_fetch_assoc($efetuarLogin)){
        $quantidadeLogin = mysqli_num_rows($efetuarLogin);

        //Cria variáveis PHP para armazenar os registros encontrados no BD
        $idUsuario    = $registro['idUsuario'];
        $tipoUsuario  = $registro['tipoUsuario'];
        $fotoUsuario  = $registro['fotoUsuario'];
        $emailUsuario = $registro['emailUsuario'];
        $nomeUsuario  = $registro['nomeUsuario'];

        //Cria variáveis de Sessão para armazenar os valores
        $_SESSION['idUsuario']    = $idUsuario;
        $_SESSION['tipoUsuario']  = $tipoUsuario;
        $_SESSION['fotoUsuario']  = $fotoUsuario;
        $_SESSION['emailUsuario'] = $emailUsuario;
        $_SESSION['nomeUsuario']  = $nomeUsuario;

        $_SESSION['logado'] = true;
        $_SESSION['ultimoAcesso'] = time();

        header('location:index.php'); //Redireciona para a Página Inicial
    }
    elseif(empty($_POST['emailUsuario']) || empty($_POST['senhaUsuario']) || $quantidadeLogin == 0){
        header('location:formLogin.php?erroLogin=dadosInvalidos');
    }

?>