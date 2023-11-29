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
                <tr>
                    <td>nome hotel: <?php echo $hotel['name'] ?></td>
                    <td><?php echo $hotel['description'] ?></td>
                    <td><?php echo $hotel['vote'] ?></td>
                    <td><?php echo $hotel['distance_to_center'] ?></td>
                <?php } ?>
        </tbody>
    </table>
</main>
<?php
include __DIR__ . "/partials/footer.php";
?>