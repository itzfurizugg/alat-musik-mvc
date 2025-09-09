<?php
include "connect.php";
include "./model/model.php";
include "./controller/controller.php";
include "./view/music/music-view.php";
$music = new MusicView();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alat Musik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php include "./view/utils/navbar-utils.php"; ?>
    <?php $music->find(); ?>

    <div class="d-flex justify-content-center">
        <table class="table table-striped w-50">
            <tr>
                <th>No. </th>
                <th>Nama Alat Musik</th>
                <th>Jenis</th>
                <th>Cara Memainkan</th>
            </tr>
            <?php $music->show() ?>
        </table>
    </div>
</body>
</html>