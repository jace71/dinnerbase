<?php

?>

<h2>Your Recipies</h2>

<table class="table-striped table-hover">
  
<?php foreach $recipies as $recipe : ?>
  
  <tr>
    <td><?= $recipe['name']; ?></td>
    <td><?= $recipe['instructions']; ?></td>
  </tr>

<?php endforeach ?>
  
</table>