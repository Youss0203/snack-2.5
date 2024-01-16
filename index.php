
<?php $average = [
        "results" => 0
    ];

    if ( empty($_GET['a']) || empty($_GET['b'])){
        echo 'NOPE';
    } else {
        // ? (a + b) / 2
        $average['results'] = (floatval($_GET['a']) + floatval($_GET['b'])) / 2;
    }
    ?>