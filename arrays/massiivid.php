<?php
$kasutajad = array(
    array(
        'Alice',
        'Alice',
        'Liddle',
        'female'
    ),
    array(
        'Bob',
        'Bob',
        'Builder',
        'male'
    )
);


echo '<hr>';
echo '<table style="border: 1px solid">';
echo '<tr>
        <th>Kasutaja</th>
        <th>Eesnimi</th>
        <th>Perenimi</th>
        <th>Sugu</th>
      </tr>';
foreach ($kasutajad as $kasutaja){
    foreach ($kasutaja as $element){
        for($i = 0; $i < count($kasutaja); $i++){
            if($kasutaja[3] == 'female'){
                echo '<td style="color: red">';
            } else {
                echo '<td style="color: blue; font-size: 40px">';
            }
        }
        echo $kasutaja.'</td>';
    }
    echo '<hr>';
}