<?php
require_once("db.php");
$db = new db();
$db->conndb();
$response = $db->printAllChien();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <title>Mes chiens</title>
</head>

<body>
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>id_chien</th>
                <th>nom</th>
                <th>age</th>
                <th>race</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($response as $value) { ?>
                <tr>
                    <td><?php echo $value["id_chien"]; ?></td>
                    <td><?php echo $value["nom"]; ?></td>
                    <td><?php echo $value["age"]; ?></td>
                    <td><?php echo $value["race"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
<script src="datatable.js"></script>

</html>