<?php 
    require_once 'data.php';

    if(!empty($_GET['hospitals'])) {
        $hospitals = unserialize($_GET['hospitals']);
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Url Experiment</title>
</head>
<body>
    <form method="POST" action="data.php">
    <div>
        <label>Division : </label>
        <select name="division">
            <option value="0">Select an Option</option>
            <option value="1">Dhaka</option>
            <option value="2">Chattogram</option>
            <option value="3">Barishal</option>
        </select>
    </div><br>
    <div>
        <label>District : </label>
        <input name="district" value="" type="text">
    </div><br>
    <div>
        <button type="submit" name="submit">Submit</button>
    </div>
    </form>

    <div>
        <?php foreach($hospitals AS $hospital) : ?>
            <h5>Hospital Name: <?= $hospital['name'] ?></h5>
            <h6>Phone: <?= $hospital['phone'] ?></h5>
        <?php endforeach; ?>
    </div>
</body>
</html>