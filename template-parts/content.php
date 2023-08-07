
<?php
include("../crud/conexao.php"); 
$result = mysqli_query($con,"SELECT * FROM tb_post WHERE `post_id` = '$postID' ");
$row = mysqli_fetch_array($result);
?>
<div class="post">
    <h2><?=$row['post_title']?></h2>
    <img src="<?= $row['post_first_imgURL'] ?>" alt="Imagem Principal">

    <p><?= $row['post_first_content']  ?></p>

    <img src="<?= $row['post_second_imgURL']?>" alt="Imagem Secundária">

    <p><?= $row['post_second_content'] ?></p>

</div>