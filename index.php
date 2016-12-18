<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jarosław Dolega</title>
</head>
<body>
    <h1>Ćwiczenia praktyczne z PHP</h1>
    <p>
    <?php
    //wprowadzenie zmiennyvh
    $keyword1 = "Ewelina";
    $keynumber = 7;
    $array1 = array("czerwony", "niebieski", "zielony", "fioletowy");
    $array2 = array(1, 5, 7, 8, 13, 17);
    
    //wyświetenie zmiennych
    print "$keyword1</br>";
    print "$keynumber</br>";
    print "$array1[0]</br>";
    print "$array2[0]</br>";
    
    //pętla
    for ($i = 0; $i > $keynumber; $i++) {
        print "$i</br>";
    }
    
    ?>
    </p>
</body>
</html>