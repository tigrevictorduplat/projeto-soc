<?php
include("crud-templates/crud-header.php");

$indexID = (isset($_GET['extra_id']))? $_GET['extra_id'] : $_POST['extra_id'];

if (isset($_POST['extra_post_foreing_key'],$_POST['extra_subtitle'],$_POST['extra_img'])){

    $extraPostID = $_POST['extra_post_foreing_key'];
    $extraTitle = $_POST['extra_subtitle'];
    $extraImage = $_POST['extra_img'];
    
    include("conexao.php");
    mysqli_query($con,"UPDATE tb_extras SET extra_post_foreing_key ='$extraPostID' , extra_subtitle = '$extraTitle' ,extra_img='$extraImage' WHERE extra_id = '$indexID' ");

    header("location:listar.php");
    die;
}

include("conexao.php");
$result = mysqli_query($con, "SELECT * FROM tb_extras WHERE `extra_id` = '$indexID'");
$row = mysqli_fetch_array($result);

?>

<form action="alterar-extra.php" method="post">
<input type="hidden" name="extra_id" id="extra_id" value="<?=$indexID?>" >
<table>
        <tr>
            <td>
                <label for="extra_post_foreing_key">Post Referência:</label>
            </td>
            <td>
            <input type="number" name="extra_post_foreing_key" id="extra_post_foreing_key" value="<?= $row['extra_post_foreing_key'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="extra_subtitle">Subtítulo:</label>
            </td>
            <td>
            <input type="text" name="extra_subtitle" id="extra_subtitle" value="<?= $row['extra_subtitle']?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="extra_img">URL da Imagem Extra</label>
            </td>
            <td>
                <input type="text" name="extra_img" id="extra_img" value="<?= $row['extra_img']?>">
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