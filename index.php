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
    //wprowadzenie zmiennych
    $keyword1 = "Ewelina";
    $keynumber1 = 7;
    $array1 = array("czerwony", "niebieski", "zielony", "fioletowy");
    $array2 = array(1, 5, 7, 8, 13, 17);
    
    //wyświetenie zmiennych
    print "$keyword1</br>";
    print "$keynumber1</br>";
    print "$array1[0]</br>";
    print "$array2[0]</br>";
    
    //czy w $array2 znajduje $keynumber
    for ($i = 0; $i < count($array2); $i++) {
        if ($array2[$i] == $keynumber1) {
            print "<p>zmienna jest równa $keynumber1</p>";
        } 
    }
    
    //pętla
    for ($i = 0; $i < $keynumber1; $i++) {
        print "$i</br>";
    }
     
    ?> 
    </p>
</body>
</html>