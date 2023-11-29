<!-- php -->
<?php
include __DIR__ . "/../model/db.php";
?>



<!-- html -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Hotel</title>
</head>

<body>
    <header class="container pt-4">
        <div class="mt-4">
            <form action="index.php" methods="GET" class="m-4">
                <select class="form-select " name="parking" placeholder="seleziona il parcheggio">
                     <option value="all">All</option>
                    <option value="0">no</option>
                    <option value="1">sì</option>
                </select>                
                <select class="form-select mt-3" aria-label="Default select example" name="vote" placeholder ="seleziona il voto">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button class="btn btn-primary mt-3 " type="submit">Search</button>
            </form>
        </div>
    </header>