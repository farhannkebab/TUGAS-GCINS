<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>

<body>
    <h1>Berlatih Looping</h1>

    <?php
    echo "<h3>Soal No1 Looping I LOVE PHP</h3>";
    /*
    Soal No1
    Looping I LOVE PHP
    Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) dan Looping yang ke dua menurun (Descending).
    
    Output:
    LOOPING PERTAMA 
    2- I LOVE PHP
    4- I LOVE PHP
    6- I LOVE PHP
    8- I LOVE PHP
    10- I LOVE PHP
    12- I LOVE PHP
    14- I LOVE PHP
    16- I LOVE PHP
    18- I LOVE PHP 
    20- I LOVE PHP
    LOOPING KEDUA
    20- I LOVE PHP
    18- I LOVE PHP
    16- I LOVE PHP
    14- I LOVE PHP
    12- I LOVE PHP
    10- I LOVE PHP
    8- I LOVE PHP
    6- I LOVE PHP
    4- I LOVE PHP
    2- I LOVE PHP
    */
    echo "LOOPING PERTAMA <br>";
    for ($i = 2; $i <= 20; $i += 2) {
        echo "$i- I LOVE PHP <br>";
    }

    echo "<br>LOOPING KEDUA <br>";
    for ($i = 20; $i >= 2; $i -= 2) {
        echo "$i- I LOVE PHP <br>";
    }

    echo "<h3>Soal No 2 Looping Array Modulo</h3>";
    /*
    Soal No 2
    Looping Array Module
    Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
    Tampung kedalam array baru bernama $rest
    */
    $numbers = [18, 45, 29, 61, 47, 34];
    echo "array numbers: ";
    print_r($numbers);
    echo "<br>";

    $rest = [];
    foreach ($numbers as $number) {
        $rest[] = $number % 5;
    }

    echo "Array sisa baginya adalah: ";
    print_r($rest);

    echo "<h3>Soal No 3 Looping Associative Array</h3>";
    /*
    Soal No 3
    Loop Associative array
    Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk array Asosiatif.
    Setiap item memiliki key yaitu :id, name, price, description,source.

    Output:
    Array ([id] =>001[name]=> Keyboard Logitek [price]=>60000[description] =>'keyboard yang mantab untuk kantoran'[source]=>logitek.jpeg)
    Array ([id] =>002[name]=> Keyboard MSI [price]=>300000[description] =>'keyboard gaming MSI mekanik'[source]=>msi.jpeg)
    Array ([id] =>003[name]=> Mouse Genius[price]=>50000[description] =>'Mouse genius biar lebih pintar'[source]=>genius.jpeg)
    Array ([id] =>004[name]=> Mouse jerry [price]=>30000[description] =>'Mouse yang disukai Kucing'[source]=>jerry.jpeg)

    jangan ubah variabel $items 
    */
    $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboar yang mantab untuk kantoran', 'logitek.jpeg'],
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse genius', 50000, 'Mouse genius biar lebih pintar', 'genius.jpeg'],
        ['004', 'Mouse jerry', 30000, 'Mouse yang disukai Kucing', 'jerry.jpeg'],
    ];

    $itemsAssoc = [];
    foreach ($items as $item) {
        $itemsAssoc[] = [
            'id' => $item[0],
            'name' => $item[1],
            'price' => $item[2],
            'description' => $item[3],
            'source' => $item[4]
        ];
    }

    echo "<pre>";
    print_r($itemsAssoc);
    echo "</pre>";

    echo "<h3>Soal No 4 Asterix </h3>";
    /*
    Soal No 4
    Asterik 5x5
    Tampilan dengan Loping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut Output:
    *
    * *
    * * *
    * * * *
    * * * * *
    */
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    ?>
</body>

</html>