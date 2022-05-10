<!DOCTYPE html>
<html>
	<body>

<?php
	$naam = "Axel Vanherle";
	echo "Hello World! Mijn eerste PHP code<br><br>";

	echo "Deze code is geschreven door $naam<br>";
	echo "Ik heb zelfs al een variabele gebruik!<br><br>";
    
    //En dit is een comment.
    #Dit ook
    
    /*
    En net zoals C is dit ook een comment.
    */
    
    $getal1 = 10;
    $getal2 = 5;
    
    echo "We kunnen ook optellen.<br>";
    echo $getal1 + $getal2;
    echo "<br><br>";
    
    echo"We kunnen ook variablele declareren in PHP, maar de scope is speciaal.<br>";
    echo"Pak bijvoorbeeld de variabele $getal1, hier kunnen we ze perfect printen maar in een fucntie gaat dit niet lukken.<br>";
    
    function mijnEersteFunctie()
    {
    	$localVariable = "Ik ben lokaal!";
        global $getal1;
        echo "<br><br>We zitten nu in de functie!<br>";
    	echo "We maken direct onze eerste functie aan!<br>";
        echo "We zullen nu de getal 1 eens proberen te printen: $getal1<br>";
        echo "Jammer, dat werkte niet. Maar wat als we nu eens een locale variabele afdrukken: $localVariable.<br>";
        echo "Dat werkte! Leuk he ;)<br>";
        echo "Globale variable kan je elders overal afprinten: $getal1<br>";
        echo "En nu zijn we uit de functie!<br><br>";
    }
    
    mijnEersteFunctie();
    
    echo "Stel nu dat ik niet wil dat een locale variabele zijn waarde berliest zodra ik uit de functie ga, dan maak ik hem static.<br>";
    echo "Hieronder een voorbeeld: <br>";
    function statischeFunctie()
    {
    	static $getal3 = 0;
        echo "$getal3 ";
        $getal3++;
        
    }
    statischeFunctie();
    statischeFunctie();
    statischeFunctie();
    statischeFunctie();
    statischeFunctie();
    statischeFunctie();
    echo "<br>Hier is net de functie statischeFunctie(); 6 keer opgeroepen.<br>";
    
    print "IPV echo kunnen we ook print doen<br>";
    print "En natuurlijk kunnen we zoals html ook de tekst aanpassen:<br>";
    print "<p>Deze tekst is normaal.</p>";
    print "<p><b>Deze tekst is bold.</b></p>";
    print "<p><strong>Deze tekst is strong.</strong></p>";
    print "<p><i>Deze tekst is italic.</i></p>";
    print "<p><em>Deze tekst is emphasized</em></p>";
    print "<p><small>Deze tekst is klein!</small></p>";
    print "<p><mark>Deze tekst is gemarkeerd.</mark></p>";
    print "<p><del>Door deze tekst zit een streep.</del></p>";
    print "<p><ins>Deze tekst is underlined.</ins></p>";
    print "<p>Deze tekst is <sub>Subscript.</sub></p>";
    print "<p>En deze is <sup>Superscript.</sup></p>";
    
    echo "<br><br>";
    echo "We kunnen ook spelen met strings in PHP:<br>";
    $str1 = "Dit is een string";
    echo "We zullen <b>$str1</b> gebruiken als voorbeeld.<br>";
    print "Lengte van de string:"; echo strlen($str1); print "<br>";
    print "Hoeveelheid woorden in de string:"; echo str_word_count($str1); print "<br>";
    print "Omgekeerde van de string:"; echo strrev($str1); print "<br>";
    print "We kunnen natuurlijk meer doen, dit is zijn maar een paar voorbeelden!<br><br>";
    
    print "PHP heeft ook ingebouwde functies met math!: <br>";
    print "Hier is PI: "; echo (pi()); print "<br>";
    echo "We kunnen ook de min/max van deze getallen vinden (0, 150, 30, 20, -8, -200):<br>";
    print "Hier is de min: "; echo(min(0, 150, 30, 20, -8, -200)); print "<br>";
    print "Hier is de max: "; echo(max(0, 150, 30, 20, -8, -200)); print "<br>";
    print "Hier is een random getal: "; echo(rand()); print "<br>";
    print "Hier is een random getal tussen 1 en 100: "; echo(rand(1,100)); print "<br>";
    print "We kunnen natuurlijk meer doen, dit is zijn maar een paar voorbeelden!<br><br>";
	?> 

	</body>
</html>
