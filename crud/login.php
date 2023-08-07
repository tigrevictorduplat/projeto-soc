<?php
include("crud-templates/foreign-header.php");

if(isset($_POST['login'],$_POST['password'])) {
    
    $username = $_POST['login'];
    $password = $_POST['password'];

    include("conexao.php");
    $result = mysqli_query($con, "SELECT * from tb_users WHERE `username` = '$username' AND `password` = '$password' ");
    $validation = mysqli_num_rows($result);
    if ($validation){
        $_SESSION['username']= $username; 
        header('location:listar.php');
      die;
    } else {
        echo(
            '<p class="incorrect"> Usuário ou Senha incorreto!</p>'
        );
    } ;
}
?>
<div class="foreing login">
<form action="login.php" method="post">
    <label for="login">Login: </label>
    <input type="text" name="login" id="login">
    <label for="password">Senha: </label>
    <input type="password" name="password" id="password">
    <button class="btn-confirm" type="submit">Conectar</button>    
</form>
<p>Ainda não tem cadastro? <a href="cadastro.php">Junte-se a nós!</a></p>
</div>
<?php 
include("crud-templates/crud-footer.php");
?>