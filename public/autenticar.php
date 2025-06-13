<?php
@session_start();
require_once("./conexao.php");
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha_crip = md5($senha);

$query = $pdo->prepare("SELECT * FROM usuarios WHERE (email =:usu or cpf = :usu) and senha_crip = :senha ");
$query->bindValue(":usu","$usuario");
$query->bindValue(":senha","$senha_crip");
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);


if ($total_reg > 0) {
    $_SESSION['id'] = $res[0]['id'];
    $_SESSION['nome'] = $res[0]['nome'];
    $_SESSION['nivel'] = $res[0]['nivel'];
    $_SESSION['empresa'] = $res[0]['empresa'];

    $id = $res[0]['id'];

    echo "<script> localStorage.setItem('id_usu', '$id') </script>";
    //$id_teste = "<script>document.write(localStorage.id_usu)</script>"


    if ($res[0]['ativo']!= 'Sim') {
        echo '<script> alert("Usuário inativo. Entre em contato com o Admin.") </script>';
        echo '<script> window.location="./index.php" </script>';
    }

    if ($_SESSION['nivel'] == 'SAS') {
        echo '<script> window.location="./saas/index.php"</script>';
    }else{
        echo '<script> window.location="./sistema"</script>';
    }


}else{

}

?>