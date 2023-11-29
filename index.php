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
                <th scope="col">parcheggio</th>
                <th scope="col">distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel) { ?>
                <tr>
                    <td><?php echo $hotel['name'] ?></td>
                    <td><?php echo $hotel['description'] ?></td>
                    <td><?php echo $hotel['vote'] ?></td>
                    <td><?php if ($hotel['parking'] == true) {
                    echo '<i class=" fa-solid fa-check"></i>' ;}
                    else {
                        echo '<i class ="fa-solid fa-xmark"';}
                        ?>

                    </td>
                    <td><?php echo $hotel['distance_to_center'] ?> km</td>
                <?php } ?>
        </tbody>
    </table>
</main>
<?php
include __DIR__ . "/partials/footer.php";
?>