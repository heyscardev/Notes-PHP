<?php
class Tools
{
  public static function generateTable($titles = [], $objetos = [],string $nameGetId)
  {
  ?>
  <table class="table  table-primary border-5 border-white border  rounded table-hover">
      <thead class="text-primary fw-bolder">
        <tr class="text-center text-primary">
<?php

foreach($titles as $title){
?>

<th><?php echo $title;?></th>
<?php } ?>
        </tr>
      </thead>
      <tbody class="text-primary">
<?php

    foreach ($objetos as $var) {
      $funciones =  get_class_methods($var);
      ?>
      <tr class=" text-center overflow-overflow-hidden lh-lg">
      <?php foreach ($funciones as $get) {  if(strpos($get,"set")=== false&& strpos($get,"_construct")===false && strpos($get,"Id")===false){ ?>
        <td><?php echo $var->$get(); ?></td>
        <?php }} ?>
        <td>
          <button  data-bs-toggle="modal" data-bs-target="#edit-<?php echo $var->$nameGetId(); ?>" class="btn "><img src="icons/edit-icon.svg" alt="edit"></button>
          <a href="./?controlador=Periods&accion=borrar&id=<?php echo $var->$nameGetId(); ?>" class="btn "><img src="icons/trash-icon.svg" " alt=" delete"></a>
          <a href="" class="btn "><img src="icons/arrow-star-icon.svg" style="transform: rotate(180deg);" alt="ir"></a>
          
          
        </td>
        <?php  require("views/periods/updateModal.php"); ?>
      </tr>
      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php 
  }
}
  
  ?>
