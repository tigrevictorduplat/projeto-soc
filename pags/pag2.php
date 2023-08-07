<?php include("../template-parts/header.php"); ?>
<div class="container">
    <div id="page" class="content">
        <?php
        include ("../crud/conexao.php");
        $result = mysqli_query($con, "SELECT * from tb_index");
        $currentPag = mysqli_fetch_array ($result);
        $postID = $currentPag['index_pag2']; 
        include("../template-parts/content.php"); 
        ?> 
    </div> 
</div>
<?php include("../template-parts/footer.php"); ?>