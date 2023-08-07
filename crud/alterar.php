<?php
include("crud-templates/crud-header.php");

$postID = (isset($_GET['post_id']))? $_GET['post_id'] : $_POST['post_id'];

if (isset($_POST['post_title'],$_POST['post_first_content'],$_POST['post_second_content'],$_POST['post_first_imgURL'],$_POST['post_second_imgURL'])){

    $postTitle = $_POST['post_title'];
    $firstContent = $_POST['post_first_content'];
    $secondContent = $_POST['post_second_content'];
    $firstURL = $_POST['post_first_imgURL'];
    $secondURL = $_POST['post_second_imgURL'];
    
    include("conexao.php");
    mysqli_query($con,"UPDATE tb_post SET post_title ='$postTitle' , post_first_content = '$firstContent' ,post_second_content='$secondContent' ,post_first_imgURL='$firstURL' ,post_second_imgURL='$secondURL' WHERE post_id = '$postID' ");

    header("location:listar.php");
    die;
}

include("conexao.php");
$result = mysqli_query($con, "SELECT * FROM tb_post WHERE `post_id` = '$postID'");
$row = mysqli_fetch_array($result);

?>

<form action="alterar.php" method="post">
<input type="hidden" name="post_id" id="post_id" value="<?=$row['post_id']?>" >
<table>
        <tr>
            <td>
                <label for="post_title">Titulo: </label>
            </td>
            <td>
            <input type="text" name="post_title" id="post_title" value="<?= $row['post_title']?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="post_first_content">Primeiro Conteúdo: </label>
            </td>
            <td>
                <textarea name="post_first_content" id="post_first_content" rows="10" cols="100"><?=$row['post_first_content']?></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="post_first_imgURL">Primeira URL: </label>
            </td>
            <td>
                <input type="text" name="post_first_imgURL" id="post_first_content"  value="<?=$row['post_first_imgURL']?>">
            </td>
        </tr>        
        <tr>
            <td>
                <label for="post_second_content">Segundo Conteúdo: </label>
            </td>
            <td>
                <textarea name="post_second_content" id="post_second_content" rows="10" cols="100"><?= $row['post_second_content']?></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="post_second_imgURL">Segunda URL: </label>
            </td>
            <td>
                <input type="text" name="post_second_imgURL" id="post_second_content"  value="<?=$row['post_second_imgURL']?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align:center;">
                <button type="submit" colspan="2" style="width: 100%; ">Atualizar</button>
            </td>
        </tr>
    </table>
</form>

<?php 
include("crud-templates/crud-footer.php");
?>