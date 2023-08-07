<?php
include("../crud/conexao.php"); 
$result = mysqli_query($con,"SELECT * FROM tb_about WHERE `about_id` = 1 ");
$row = mysqli_fetch_array($result);
?>
<div id="about" class="about">

    <h2>Quem Somos?</h2>
    <p><?= $row['about_who']  ?></p>
    <h2>Missão</h2>
    <p><?= $row['about_mission'] ?></p>
    <h2>Valores</h2>
    <?php
    $valors = explode(",",$row['about_valors']);
    ?>
    <dl>
        <dt><?=$valors[0] ?></dt>
        <dt><?=$valors[1] ?></dt>
        <dt><?=$valors[2] ?></dt>
    </dl>
</div>

