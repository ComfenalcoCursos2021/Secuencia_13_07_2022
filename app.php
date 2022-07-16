
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
    var_dump($edad);
    var_dump($altura);
    var_dump($soyProfesor);
    var_dump($pasaTiempos);
    var_dump($dirrecion);
    var_dump($cuerpo);
    var_dump($_SERVER["SCRIPT_FILENAME"]);
?>



