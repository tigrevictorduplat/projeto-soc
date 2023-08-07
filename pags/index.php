<?php include("../template-parts/header.php"); ?>
<script src="../src/scripts/main.js"></script>
<div class="container">
    <div class="content">
<?php
include ("../crud/conexao.php");

$result = mysqli_query($con, "SELECT * from tb_index");
$currentPag = mysqli_fetch_array ($result);
$postID = $currentPag['index_pag1']; 
include("../template-parts/content.php"); 
?>
<hr id = "first-break">
<?php
$postID = $currentPag['index_pag2']; 
include("../template-parts/content.php"); 
?>
<hr id = "second-break">
<?php
$postID = $currentPag['index_pag3']; 
include("../template-parts/content.php"); 
?>
</div>
<section id="extra1" class="right-content">
<?php
$extraID = $currentPag['index_pag1']; 
include("../template-parts/right-content.php"); 
?>
</section>
<section id="extra2" class="right-content" hidden>
<?php
$extraID = $currentPag['index_pag2']; 
include("../template-parts/right-content.php"); 
?>
</section>
<section id="extra3" class="right-content" hidden>
<?php
$extraID = $currentPag['index_pag3']; 
include("../template-parts/right-content.php"); 
?>
</section>
</div>
<?php include("../template-parts/footer.php"); ?>