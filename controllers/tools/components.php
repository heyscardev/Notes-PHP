<?php 
class Tools{
public static function generateTable($titles = [], $objetos = []){
    

    foreach ($objetos as $var) {
    
   echo ' <tr class=" text-center overflow-overflow-hidden lh-lg">';
   $arra = (array) $var;
   foreach()
    ?>
    
     

        <td><?php echo $period->getCodPeriod(); ?></td>
        <td><?php echo $period->getStartDate(); ?></td>
        <td><?php echo $period->getEndDate(); ?></td>
        <td><?php echo promedio($period->getIdPeriod()); ?></td>
        <td><?php echo cursado($period->getIdUser()); ?></td>
        <td>
          <button  data-bs-toggle="modal" data-bs-target="#edit-<?php echo $period->getIdPeriod() ?>" class="btn "><img src="icons/edit-icon.svg" alt="edit"></button>
          <a href="./?controlador=Periods&accion=borrar&id=<?php echo $period->getIdPeriod(); ?>" class="btn "><img src="icons/trash-icon.svg" " alt=" delete"></a>
          <a href="" class="btn "><img src="icons/arrow-star-icon.svg" style="transform: rotate(180deg);" alt="ir"></a>
          
        </td>
        <?php  require("views/periods/updateModal.php"); ?>
      </tr>
    <?php }; ?>

} 
}
?>