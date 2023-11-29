<!-- php -->

<?php
include __DIR__ . "/partials/header.php";
// var_dump($hotels);


?>

<!-- html -->
<main class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Hotel</th>
      <th scope="col">Descrizione</th>
      <th scope="col">voto</th>
      <th scope="col">distanza dal centro</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($hotels as $hotel) { ?>    
      <td>nome hotel: <?php echo $hotel['name'] ?></td>
  <td><?php echo $hotel['description'] ?></td>
  <td><?php echo $hotel['vote'] ?></td>
  <td><?php echo $hotel['distance_to_center'] ?> </td>  
  <?php } ?> 
  </tbody>
</table>
      <!-- <td><?php echo $hotel['description'] ?> :</td>    
      <td>voto: <?php echo $hotel['vote'] ?></td>       
      <td>distanza dal centro : km <?php echo $hotel['distance_to_center'] ?></td> -->
     

            <!-- <div class="col-4">
            <p></p>
            <p></p>
            <p><?php echo $hotel['parking'] ?></p>
            <p>voto: <?php echo $hotel['vote'] ?></p>
            <p> distanza dal centro : km <?php echo $hotel['distance_to_center'] ?></p>
       
    


</main>
<?php
include __DIR__ . "/partials/footer.php";
?>