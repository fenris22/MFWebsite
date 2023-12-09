<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehicle Blueprints</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php require('menu.php'); ?>
    <header>Vehicle Blueprints</header>

    <?php
    $vehicleBlueprintData = file_get_contents("https://blueprints.fenristhefox.workers.dev/api/vehicle",);
    $vehicleBlueprints = json_decode($vehicleBlueprintData);
    ?>

    <table>
        <thead>
        <tr>
            <td>Type</td>
            <td>Name</td>
            <td>String</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach($vehicleBlueprints as $key => $item): ?>
            <tr>
                <td><?php echo $item->Type; ?></td>
                <td><?php echo $item->Name; ?></td>
                <td><?php echo $item->String; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>