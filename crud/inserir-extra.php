<?php
include("crud-templates/crud-header.php");

if (isset($_POST['extra_id'],$_POST['extra_subtitle'],$_POST['extra_img'])){
    
    $extraID = $_POST['extra_id'];
    $extraSubtitle = $_POST['extra_subtitle'];
    $extraURL = $_POST['extra_img'];

 echo(
    '<section class="right-content">'.
    '<h2>SpotMy</h2>'.
  ' <figure class="album-img">'.
      ' <img src="'.$extraURL.'" alt="Imagem do Tópico Atual">'.
   '</figure>'.
   '<h2>Titulo Principal</h2>'.
   '<p>'.$extraSubtitle.'</p>'.
   '<div class="tracker">'.
       '<progress value="2" max="100"></progress> <br>'.
       '<i class="fa fa-play-circle fa-4x"></i>'.
   '</div>'.
'</section>'
 ) ;
?>
<form action="listar.php" method="post">
    <input type="text" name="extra_id" id="extra_id"
    value="<?=$extraID?>"hidden
    >
    <input type="text" name="extra_subtitle" id="extra_subtitle" 
    value="<?= $extraSubtitle?>"hidden
    >
    <input type="text" name="extra_img" id="extra_img" 
    value="<?= $extraURL?>"hidden
    >
    <button type="submit">Confirmar</button>
    </form>

<?php }?>

<form action="inserir-extra.php" method="post">
    <table>
        <tr>
            <td>
                <label for="extra_id"> Post Relacionado: </label>
            </td>
            <td>
                <input type="number" name="extra_id" id="extra_id" >
            </td>
        </tr>
        <tr>
            <td>
                <label for="extra_subtitle"> Subtítulo: </label>
            </td>
            <td>
                <input type="text" name="extra_subtitle" id="extra_subtitle" >
            </td>
        </tr>
        <tr>
            <td>
                <label for="extra_img"> URL Extra: </label>
            </td>
            <td>
                <input type="text" name="extra_img" id="extra_img" >
            </td>
        </tr>
            <td style="text-align:center;">
                <button type="submit" colspan="2" style="width: 100%; ">Novo Extra</button>
            </td>
        </tr>
    </table>
</form>

<?php 
include("crud-templates/crud-footer.php");
?>