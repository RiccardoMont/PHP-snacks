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

while (count($numeri) < 15) {

    $rndmNumber = rand(0, 100);
    if (!in_array($rndmNumber, $numeri)) {
        array_push($numeri, $rndmNumber);
    }
}

var_dump($numeri);


/*SNACK 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.*/

$paragrafone = 'Le dimensioni lineari degli adulti possono variare da meno di 0,1 mm a 1,5 mm. In inglese sono detti "water bears", ossia \"orsi d\'acqua\", e \"moss piglets\", cioè, approssimativamente, \"maialini del muschio\". Le specie marine sono incolori o bianco-grigiastre, mentre quelle terrestri o d\'acqua dolce possono essere di vari colori, ad esempio arancioni, rosa, gialle, verdi o nere.

Sono organismi eutelici (hanno un numero di cellule costante durante il corso della vita; gli individui possono accrescersi solo per volume e non per mitosi[3]). Il corpo, approssimativamente cilindrico, è costituito dal capo e da quattro metameri, ciascuno dei quali porta un paio di zampe che in molte specie marine sono parzialmente retrattili con un meccanismo telescopico. Alle estremità delle zampe vi è un numero variabile di unghie o dita, generalmente compreso tra 4 e 8. Raramente le unghie possono ridursi o mancare del tutto. Il corpo è rivestito da una sottile cuticola extracellulare elastica, formata anche da chitina[senza fonte].

Possono vivere da 3 mesi fino a 2 anni, a meno che non entrino in stato dormiente (in tal caso il loro orologio biologico si sospende, potendo rimanere in tale stato anche per decine di anni).';

$paragrafetti = explode('.', $paragrafone);
foreach ($paragrafetti as $paragrafo) {
    echo $paragrafo . '<br>';
};

/*SNACK 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.*/

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

/*SNACK 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.*/

$VA = [
    [
        'name' => 'Renato',
        'lastname' => 'Carota',
        [
            'italiano' => rand(0, 10),
            'matematica' => rand(0, 10),
            'filosofia' => rand(0, 10),
            'latino' => rand(0, 10),
            'fisica' => rand(0, 10),
            'arte' => rand(0, 10)
        ]
    ],
    [
        'name' => 'Ubalda',
        'lastname' => 'Vegetale',
        [
            'italiano' => rand(0, 10),
            'matematica' => rand(0, 10),
            'filosofia' => rand(0, 10),
            'latino' => rand(0, 10),
            'fisica' => rand(0, 10),
            'arte' => rand(0, 10)
        ]
    ],
    [
        'name' => 'Cremenzio',
        'lastname' => 'Radicchio',
        [
            'italiano' => rand(0, 10),
            'matematica' => rand(0, 10),
            'filosofia' => rand(0, 10),
            'latino' => rand(0, 10),
            'fisica' => rand(0, 10),
            'arte' => rand(0, 10)
        ]
    ]

];

foreach ($VA as $alunno) {

    $result = array_sum($alunno[0]) / count($alunno[0]);
    

    echo $alunno['name'] . ' ' . $alunno['lastname'] . ' ' . 'ha una media di:' . ' ' . round($result, 1) . '<br>' ;   
    var_dump($alunno[0]);
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($partite as $partita) { ?>
        <p>
            <span><?php echo $partita['home'] ?></span> - <span><?php echo $partita['guest'] ?></span> | <span><?php echo $partita['home_score'] ?>:<span><?php echo $partita['guest_score'] ?>
        </p>
    <?php } ?>
    <?php foreach ($db as $professions => $tipo) { ?>
        <?php if ($professions == 'teachers') { ?>
            <div style="border: 10px solid grey">
                <?php foreach ($tipo as $worker) {
                    foreach ($worker as $key => $name) { ?>
                        <p><?php echo $name ?></p>
                    <?php } ?>
                <?php } ?>
            </div>
        <?php } ?>
        <?php if ($professions == 'pm') { ?>
            <div style="border: 10px solid green">
                <?php foreach ($tipo as $worker) {
                    foreach ($worker as $key => $name) { ?>
                        <p><?php echo $name ?></p>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
            </div>
        <?php } ?>
</body>
</html>