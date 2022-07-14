
<?php
    $nombre = (string) "Miguel Angel";
    $edad = (int) 24;
    $altura = (float) 1.63;
    $soyProfesor = (bool) true;
    $pasaTiempos = (array) [
        (string) "Programar",
        (string) "Cocinar",
        (string) "Trotar",
        (string) "Audio Lectura"
    ];
    $dirrecion = (array) [
        "Principal" => (string) "Calle 11",
        "opcional" => (string) "Calle 14",
    ];
    $cuerpo = (object) [];
    $cuerpo->colorPiel = (string) "Trigeño";
    $cuerpo->colorOjos = (string) "Cafes Oscuros";
    $cuerpo->tipoPelo = (string) "Liso";

    var_dump($nombre);
    echo "<br> <br>";
    var_dump($edad);
    echo "<br> <br>";
    var_dump($altura);
    echo "<br> <br>";
    var_dump($soyProfesor);
    echo "<br> <br>";
    var_dump($pasaTiempos);
    echo "<br> <br>";
    var_dump($dirrecion);
    echo "<br> <br>";
    var_dump($cuerpo);

?>



