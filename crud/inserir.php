<?php
include("crud-templates/crud-header.php");

if (isset($_POST['post_title'],$_POST['post_first_content'],$_POST['post_second_content'],$_POST['post_first_imgURL'],$_POST['post_second_imgURL'])){

    $postTitle = $_POST['post_title'];
    $firstContent = $_POST['post_first_content'];
    $secondContent = $_POST['post_second_content'];
    $firstURL = $_POST['post_first_imgURL'];
    $secondURL = $_POST['post_second_imgURL']; 
 echo(
    '<div class="post">'.
    '<h2>'.$postTitle.'</h2>' .
    '<p>'.$firstContent.'</p>' .
    '<img src="'.$firstURL.'" alt="Imagem Principal">' .
    '<p>'.$secondContent.'</p>' .
    '<img src="'.$secondURL.'" alt="Imagem Secundária">' 
 ) ;
?>
<form action="listar.php" method="post">
    >
    <input type="text" name="post_title" id="post_title"
    value="<?=$postTitle?>"hidden
    >
    <input type="text" name="post_first_content" id="post_first_content" 
    value="<?= $firstContent?>"hidden
    >
    <input type="text" name="post_second_content" id="post_second_content" 
    value="<?= $firstContent?>"hidden
    >
    <input type="text" name="post_first_imgURL" id="post_first_imgURL" 
    value="<?= $firstURL?>"hidden
    >
    <input type="text" name="post_second_imgURL" id="post_second_imgURL" 
    value="<?= $secondURL?>"hidden
    >
    <button type="submit">Confirmar</button>
    </form>

<?php }?>

<form action="inserir.php" method="post">
<table>
        <tr>
            <td>
                <label for="post_title">Titulo: </label>
            </td>
            <td>
            <input type="text" name="post_title" id="post_title">
            </td>
        </tr>
        <tr>
            <td>
                <label for="post_first_content">Primeiro Conteúdo: </label>
            </td>
            <td>
                <textarea name="post_first_content" id="post_first_content" rows="10" cols="100"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="post_first_imgURL">Primeira URL: </label>
            </td>
            <td>
                <input type="text" name="post_first_imgURL" id="post_first_content" >
            </td>
        </tr>        
        <tr>
            <td>
                <label for="post_second_content">Segundo Conteúdo: </label>
            </td>
            <td>
                <textarea name="post_second_content" id="post_second_content" rows="10" cols="100"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="post_second_imgURL">Segunda URL: </label>
            </td>
            <td>
                <input type="text" name="post_second_imgURL" id="post_second_content" >
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align:center;">
                <button type="submit" colspan="2" style="width: 100%; ">Postar</button>
            </td>
        </tr>
    </table>
</form>

<?php 
include("crud-templates/crud-footer.php");
?>