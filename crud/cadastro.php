<?php
include("crud-templates/foreign-header.php");

if(isset($_POST['login'],$_POST['password'],$_POST['confirm-password'])) {
    
    $username = $_POST['login'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    include("conexao.php");
    $result = mysqli_query($con, "SELECT * from tb_users WHERE `username` = '$username'");
    $exists = mysqli_num_rows($result);
    if ($exists){
        echo(
            '<p class="incorrect">Este usuário já existe!</p>'
        );
    }else if($password != $confirmPassword) {
        echo(
            '<p class="incorrect">As senhas não coincidem!</p>'
        );
        
    } else {
        include("conexao.php");
        mysqli_query($con, "INSERT INTO tb_users (`username`,`password`) VALUES ('$username', '$password') ;");
        header('location:login.php');
        die;
    };
}
?>
<div class="foreing signup">
<form action="cadastro.php" method="post">

<label for="login">Login: </label>
<input type="text" name="login" id="login">
<label for="password">Senha: </label>
<input type="password" name="password" id="password">
<label for="confirm-password">Confirmar Senha: </label>
<input type="password" name="confirm-password" id="confirm-password">
<button type="submit" class="btn-confirm">Cadastrar-se</button>
</form>
<p>Já tem um cadastro? <a href="login.php">Faça login!</a></p>
</div>
<?php 
include("crud-templates/crud-footer.php");
?>