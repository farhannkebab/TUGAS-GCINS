<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class Ape
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function yell($sound)
        {
            echo "Ape {$this->name} yell: {$sound}<br>";
        }
    }

    class Frog
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function jump($action)
        {
            echo "Frog {$this->name} jump: {$action}<br>";
        }
    }

    $sungokong = new Ape("Kera Sakti");
    $sungokong->yell("Auouo");

    $kodok = new Frog("Buduk");
    $kodok->jump("Hop hop");

    ?>

</body>

</html>