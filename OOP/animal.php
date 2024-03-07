<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class Animal
    {
        public $name;
        public $legs = 4;
        public $cold_blooded = 'no';

        public function __construct($name)
        {
            $this->name = $name;
        }
    }

    $sheep = new Animal("shaun");
    echo $sheep->name; // "shaun"
    echo $sheep->legs; // 4
    echo $sheep->cold_blooded; // "no"
    
    ?>

</body>

</html>