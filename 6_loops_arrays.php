<?php

//For
//

for ($i = 0; $i < 10; $i++){
    echo $i . '<br />';
}

//For compuesto
//

for ($i = 0,  $y = 0; $i < 10; $i++, $y += 2){

    echo "i = $i. y = $y";

}


//Foreach
//

$persons = array('Felipe', 'Alex', 'Essien', 'Vasty');

foreach ($personas as $persona){
    echo $persona . '<br />';
}

$personsTvShow = array(
    'Felipe'  => 'Lost',
    'Alex'    => 'Person of Interest',
    'Essien'  => 'Teenage Mutant Ninja Turtles',
    'Vasty'   => 'Dora The Explorer'
);

foreach ($personsTvShow as $person => $tvShow){
    echo "A $person le gusta $tvShow";
}

//Application of foreach...Having an array with the soccer champions,
//display the information

$soccerChampions = array(
    'countries' => array(
        'Brazil' => array(
            'championships' => 5
        ),
        'Italy' => array(
            'championships' => 4
        ),
        'Germany' => array(
            'championships' => 3
        )
    ),
    'players' => array(
        'Ronaldo' => array(
            'country' => 'Brazil', 
            'goals' => 15
        ),
        'Miroslav Klose' => array(
            'country' => 'Germany', 
            'goals' => 14
        ),
        'Berd Muller' => array(
            'country' => 'Germany', 
            'goals' => 13
        )
    )
);

//Display WorldCup Champions
foreach ($soccerChampions['countries'] as $country => $data){
    echo $country . ' ha sido campeon ' . $data['championships'] . ' veces.';
}

//Display WorldCup GoalsChampions
foreach ($soccerChampions['players'] as $player => $data){
    echo $player . ' es originario de ' . $data['country'] . ' y ha anotado ' . $data['goals'] . ' goles en los mundiales.';
}


//While

$i = 0;

while ($i < 20){
    echo $i . ', ';
}


//While Application
//There is a fighter and a punshing machine, each time the machine punch the fighter, the health of the fighter will be
//decresead by the intensity value of the machine punches. The intensity will be increased with each punch by 1, starting in 1.
//Display a message when the fighter being defeated.

$fighter = array(
    'isAlive' => true,
    'health' => 100
);
//Otra forma de crearlo
$fighter['isAlive'] = true;
$fighter['health'] = 100;

$intensity = 1;
while ($fighter['isAlive']){
    //punching!!!
    $fighter['health'] -= $intensity;
    $intensity++;
    
    if ($fighter['health'] <= 0){
        $fighter['isAlive'] = false;
        echo 'El peleador ha sido derrotado!';
    }
    else{
        echo 'Salud: ' . $fighter['health'];
    }
    
}

//Do-While
//

$flip = '';
do{
    $coin = rand(0, 1);    
    if ($coin){
        $flip = 'Sol';
    }
    else{
        $flip = 'Aguila';
    }
    
    echo $flip . '<br />';
}while($flip == 'Sol');
