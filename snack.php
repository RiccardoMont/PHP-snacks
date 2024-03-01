<?php 

/*SNACK 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60*/

$partite = [

    [
        'home' => 'Olimpia Milano',
        'guest' => 'Cantù',
        'home_score' => rand(30, 120),
        'guest_score' => rand(30, 120)
    ],
    [
        'home' => 'Torino',
        'guest' => 'Asti',
        'home_score' => rand(30, 120),
        'guest_score' => rand(30, 120)
    ],
    [
        'home' => 'Alessandria',
        'guest' => 'Cuneo',
        'home_score' => rand(30, 120),
        'guest_score' => rand(30, 120)
    ],
    [
        'home' => 'Vercelli',
        'guest' => 'Aosta',
        'home_score' => rand(30, 120),
        'guest_score' => rand(30, 120)
    ],

];

/*foreach ($partite as $partita){
    
    var_dump($partita);
    echo $partita['home'] . '-' . $partita['guest'] . ' ' . '|' . ' ' . $partita['home_score'] . '-' . $partita['guest_score'];
};*/

/*Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.*/

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

foreach ($posts as $date => $value) {
    echo $date . '<br>';
    
    foreach ($value as $post) {
        echo $post['title'] . ' ' . $post['author'] . ' ' . $post['text'] . '<br>';
    }
};









/* SNACK 4
 Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta*/

$numeri = [];

while (count($numeri) < 15){

    $rndmNumber = rand(0, 100);
    if(!in_array($rndmNumber, $numeri)){
    array_push($numeri, $rndmNumber);
    }


}

var_dump($numeri);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php foreach ($partite as $partita){ ?>

    <p>
    <span><?php echo $partita['home'] ?></span> - <span><?php echo $partita['guest'] ?></span> | <span><?php echo $partita['home_score'] ?>:<span><?php echo $partita['guest_score'] ?>
    </p>
    

<?php } ?>
    
</body>
</html>