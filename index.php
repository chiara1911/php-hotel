<!-- php -->

<?php
include __DIR__ . "/partials/header.php";
// var_dump($hotels);

if (isset($_GET['parking'])) {
    $parking = $_GET['parking'];
    // var_dump($parking);
    $park_array = [];
    foreach ($hotels as $hotel) {
        if ($hotel['parking'] === (bool) $parking) {
            $park_array[] = $hotel;
        }
    };
    $hotels = $park_array;   
};
if (isset($_GET['vote'])) {
    $vote = $_GET['vote'];   
    $vote_array = [];
    foreach ($hotels as $hotel) {
        if ($hotel['vote'] <= $vote) {
            $vote_array[] = $hotel;
        }       
    };  
    $hotels = $vote_array;
};
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
                            echo '<i class=" fa-solid fa-check"></i>';
                        } else {
                            echo '<i class ="fa-solid fa-xmark"></i>';
                        }
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