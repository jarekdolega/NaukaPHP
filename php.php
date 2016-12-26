 <?php
    include 'head.php';
    include 'header.php';
 ?>
    <h1>Ćwiczenia praktyczne z PHP</h1>
    <p>
    <form action="php.php" method="get">
        <p>Keyword: <input type="text" name="keyword"/></p>
        <p>Keynumber: <input type="number" name="keynumber"/></p>
        <p><input type="submit" name="submit" value="Zapisz"/></p>
    </form>
    <?php
    //wprowadzenie zmiennych
    $keyword1 = $_GET['keyword'];
    $keynumber1 = $_GET['keynumber'];
    $array1 = array("czerwony", "niebieski", "zielony", "fioletowy");
    $array2 = array(1, 5, 7, 8, 13, 17); 
    ?> 
    </p>
    
    <p>
    <?php
    //wyświetenie zmiennych
    print "$keyword1</br>";
    print "$keynumber1</br>";
    print join("; ", $array1);
    echo "</br>";
    print join("; ", $array2);
    echo "</br>"; 
    ?> 
    </p>
    
    <p>
    <?php
    //czy w $array2 znajduje $keynumber
    for ($i = 0; $i < count($array2); $i++) {
        if ($array2[$i] == $keynumber1) {
            print "<p>zmienna jest równa $keynumber1</p>";
        } 
    } 
    ?> 
    </p>
    
    <p>
    <?php
    //pętla
    for ($i = 0; $i < $keynumber1; $i++) {
        print "$i</br>";
    }
     
    ?> 
    </p>
 <?php
    include 'footer.php';
 ?>