<?php

// require_once('./src/person.php');
// $person = new Person();
// require_once('./autoloder.php');
require_once('./bootstaping.php');
$contentPerson = $person->getpersonDetails();
$contentAnimal = $animal->getanimalDetails();


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>autoloader</title>
</head>
<body>
    <h4>hello world</h4>
    
    <h4>
       <?php echo $contentPerson['name'];?>
    </h4> 
    
    <h4>
        <?php echo $contentPerson['age'];?>
    </h4>
    <h4>
        <?php echo $contentPerson['class'];?>
    </h4>
    <?php echo $contentAnimal['name'];?> <br>
    <?php echo $contentAnimal['type'];?> <br>
    <?php echo $contentAnimal['class'];?>

</body>
</html>
