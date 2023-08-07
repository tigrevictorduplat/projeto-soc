<?php

include("crud-templates/crud-header.php");

$aboutID = (isset($_GET['about_id']))? $_GET['about_id'] : $_POST['about_id'];

if (isset($_POST['about_who'],$_POST['about_mission'],$_POST['about_valors'])){

    $aboutWho = $_POST['about_who'];
    $aboutMission = $_POST['about_mission'];
    $aboutValors = $_POST['about_valors'];
    
    include("conexao.php");
    mysqli_query($con,"UPDATE tb_about SET about_who ='$aboutWho' , about_mission = '$aboutMission' ,about_valors='$aboutValors' WHERE about_id = '$aboutID' ");

    header("location:listar.php");
    die;
}

include("conexao.php");
$result = mysqli_query($con, "SELECT * FROM tb_about WHERE `about_id` = '$aboutID'");
$row = mysqli_fetch_array($result);

?>

<form action="alterar-about.php" method="post">
<input type="hidden" name="about_id" id="about_id" value="<?=$row['about_id']?>" >
<table>
        <tr>
            <td>
                <label for="about_who">Quem Somos:</label>
            </td>
            <td>
            <textarea type="text" name="about_who" id="about_who" rows="10" cols="100"><?= $row['about_who'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="about_mission">Missão:</label>
            </td>
            <td>
            <textarea type="text" name="about_mission" id="about_mission" rows="10" cols="100"><?= $row['about_mission']?></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="about_valors">Valores: </label>
            </td>
            <td>
                <textarea name="about_valors" id="about_valors" rows="3" cols="100"><?=$row['about_valors']?></textarea>
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