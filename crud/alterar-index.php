<?php
include("crud-templates/crud-header.php");

$indexID = (isset($_GET['index_config_id']))? $_GET['index_config_id'] : $_POST['index_config_id'];

if (isset($_POST['index_pag1'],$_POST['index_pag2'],$_POST['index_pag3'])){

    $pag1 = $_POST['index_pag1'];
    $pag2 = $_POST['index_pag2'];
    $pag3 = $_POST['index_pag3'];
    
    include("conexao.php");
    mysqli_query($con,"UPDATE tb_index SET index_pag1 ='$pag1' , index_pag2 = '$pag2' ,index_pag3='$pag3' WHERE index_config_id = '$indexID' ");

    header("location:listar.php");
    die;
}

include("conexao.php");
$result = mysqli_query($con, "SELECT * FROM tb_index WHERE `index_config_id` = '$indexID'");
$row = mysqli_fetch_array($result);

?>

<form action="alterar-index.php" method="post">
<input type="hidden" name="index_config_id" id="index_config_id" value="<?=$indexID?>" >
<table>
        <tr>
            <td>
                <label for="index_pag1">ID Pág1:</label>
            </td>
            <td>
            <input type="number" name="index_pag1" id="index_pag1" value="<?= $row['index_pag1'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="index_pag2">ID Pág2:</label>
            </td>
            <td>
            <input type="number" name="index_pag2" id="index_pag2" value="<?= $row['index_pag2']?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="index_pag3">ID Pág3</label>
            </td>
            <td>
                <input type="number" name="index_pag3" id="index_pag3" value="<?= $row['index_pag3']?>">
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