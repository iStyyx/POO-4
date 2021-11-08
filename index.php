<?php
    require_once 'Bicycle.php';
    require_once 'Car.php';
    require_once 'Truck.php';
    require_once 'Skateboard.php';
    require_once 'PedestrianWay.php';
    require_once 'MotorWay.php';
    require_once 'ResidentialWay.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO 3 - Cars</title>
</head>
<body>
    <?php
    
    $tesla = new Car('black', 4, 'electric');

    $bicycle = new Bicycle('red', 1, 2);

    $truck = new Truck(100, 'red', 2, 'electric');
    echo $truck->setLoading(0);

    $highway = new MotorWay(3, 130);
    // echo $highway->addVehicle($tesla);
    $tesla->setParkBrake(true);
    try {
        $tesla->start();
    } catch(Exception $e){
        // code to manage exceptions
        $tesla->setParkBrake(false);
        echo "Exception received  : ". $e->getMessage();
    } finally {
        echo "<br> Ma voiture roule comme un donut";
    }
    
    // var_dump($highway->getCurrentVehicles());
    ?>
</body>
</html>