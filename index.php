<!DOCTYPE html>
<html>
    <head>
        <title>ZT2A</title>
        <meta charset="UTF-8">
    </head>
    <body
        <!-- zresetoval se mi po��ta� kv�li windows updatu a n�kde asi nastala chyba, proto�e v�echna diakritika se pokazila, program v�ak funguje spr�vn�.Zad�n� jsem dostal od kamar�da.-->
        style="background-image: url('background.jpg'); color:white; font-size:20px;">
	<a href="450px.jpg"><img src="450px.jpg" width="450" height="200" style=" position:absolute;left:50%;top:25%;" alt="popis obrázku"></a>
        <h1 align="center"><b><i>ZT2A</i></b></h1>
		<hr>
        <h1>H1</H1>
        <h2>H2</h2>
        <h3>H3</h3>
        <h4>H4</h4>
        <h5>H5</h5>
        <h6>H6</h6>
        <a style="color:white;" href="http://google.sk">google.sk</a><br>
        <b style="color:red;">Tučný, červený text</b>
        <ul style="font-size:20px;">
            <li><i> Kurzívou</i></li>
            <li><b>Tučný</b></li>
        </ul>
        
        <form>
            <input name="username" type="text" value="jméno"><br>
            <input name="password" type="password" value="heslo"><br>
            <input type="radio" name="pohlavie" value="1" checked>Muž<br>
            <input type="radio" name="pohlavie" value="0">Žena<br>
            <select name="vek" >
                <option value="1" selected>vek</option>
                <option value="2">0-5</option>
                <option value="3">6-12</option>
                <option value="4">12+</option>
            </select><br>
            <input type="checkbox" name="doplnil som formulár"><b>Vypnil som formulár so súhlasom.</b><br>
            <input name="submit" type="submit" value="odoslat"><br>
            <script>
                function mfunction() {
                    alert("ahoj Jožko");
                }

            </script>
        </form>
        <dl>
            <dt>Jméno</dt>
            <dd>= Označení osob</dd>
            <dt>Molekula</dt>
            <dd>= Skládá se z dvou a více atomů</dd>
        <dl>
            <dt>Meno</dt>
            <dd>= Označenie osôb</dd>
            <dt>Molekula</dt>
            <dd>= Skladá sa z 2 a viacerých atómov.</dd>
        </dl>
        <table cellpadding="3px">
            <tr>
                <td colspan="2">tabulka</td>
            </tr>
            <tr style="background-color:grey;">
                <td>1.1</td>
                <td>1.2</td>
            </tr>
            <tr style="background-color:#003333; color:red">
                <td>2.1</td>
                <td>2.2</td>
            </tr>
        </table>
        <hr>
        <br>
        <div style="color:red; position:absolute; left:45%; font-size:30px;"><b><?PHP echo date('H:i:s') ?>
        </b></div><br><br>
        <br>
        <br>
        <br>
        <?PHP
        $text= "Text Text Text kundy Text Text Text kunda Text Text Text hovna Text Text Text cubky.";

        $zakazane=array("kundy","kunda","hovna","hovny", "curaku", "curak", "picus", "zkurvenych", "cubky");
        var_dump(isValid($text, $zakazane));
        
        function isValid(string $text,array $zakazane){
            
                foreach ($zakazane as $zakazaneSlova) {
                   if(strpos($text, $zakazaneSlova)!== FALSE){
                       return True;            
                   }
                   }
            
            return FALSE;
        }
        $text1="text text text texthovna text text text.";
        $text1 = explode(" ", $text1);
        var_dump(isValid1($text1,$zakazane));
        
         function isValid1(array $text1, array $zakazane){
foreach($text1 as $slovo){
    foreach($zakazane as $noValid){
        if($slovo === $noValid){
            return TRUE;
        }
    }
}
return FALSE;
         }


        $stlpec=4;
        $riadok=3;
        echo table($stlpec,$riadok);
        
        function table(int $stlpec,int $riadok){
            echo "<table border=1>";
            for($i=1;$i<=$riadok;$i++) {
                echo "<tr>";
for($x=1;$x<=$stlpec;$x++){
    echo "<td>".$i.".".$x."</td>";
}
                echo "</tr>";
            }
            echo "</table><br><br><br>";
        }
   
        
        
        $rodneCislo="030101/1111";
        echo "rodne cislo: ".$rodneCislo;
        var_dump(vek($rodneCislo));
        
        function vek (string $rodneCislo, bool $volba = false){
            $narodenie=substr($rodneCislo,0,2);
            $storocie= substr(date("Y"),2,2);
            if($narodenie <=$storocie){
                $narodenie= "20".$narodenie;
            }
            else{
                $narodenie= "19".$narodenie;
            }
            $vek=date("Y")-$narodenie;
            if ($volba == true){
                return $narodenie;
            }
            return $vek;
        }
        
        var_dump (currency(145.25452, "eur"));
        function  currency(float $price, string $currency="CZK", int $precision=2){
            $price = round($price, $precision);
            $price = number_format($price, $precision).",-".$currency;
          return $price;  
        }
        
        $a = 3;
        $b = 5;
        echo "a=" . $a . "<br>" . "b=" . $b . "<br>";
        echo "sčítání,odčítání,děleno,krát";
        var_dump($a + $b);
        echo"<br>";
        var_dump($a - $b);
        echo"<br>";
        var_dump($a / $b);
        echo"<br>";
        var_dump($a * $b);
        echo"<br>" . "<br>";

        echo "a++,++a, a--,--a, a+=b a-=b, a*=b,a/=b";
        echo"<br>";
        var_dump($a++);
        $a = 3;
        echo"<br>";
        var_dump(++$a);
        $a = 3;
        echo"<br>";
        var_dump($a--);
        $a = 3;
        echo"<br>";
        var_dump(--$a);
        $a = 3;
        echo"<br>";
        var_dump($a += $b);
        $a = 3;
        echo"<br>";
        var_dump($a -= $b);
        $a = 3;
        echo"<br>";
        var_dump($a *= $b);
        $a = 3;
        echo"<br>";
        var_dump($a /= $b);
        $a = 3;
        echo"<br>" . "<br>";
        echo "a==b,a!=b, a>b, a < b" . "<br>";
        var_dump($a == $b);
        echo"<br>";
        var_dump($a != $b);
        echo"<br>";
        var_dump($a > $b);
        echo"<br>";
        var_dump($a < $b);
        echo"<br>";
        echo"<br>";

        echo "a||b, a&&b" . "<br>";
        $a = 0;
        $b = 1;
        echo "a=" . $a . "<br>" . "b=" . $b;
        echo"<br>";
        var_dump($a || $b);
        echo"<br>";
        var_dump($a && $b);
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        $bytost['človek'] = array(
            array('meno' => 'Arnold', 'pohlavie' => 'M', 'vek' => 16, 'povolanie' => 'študent'),
            array('meno' => 'Ladislava', 'pohlavie' => 'F', 'vek' => 17, 'povolanie' => 'študent'),
            array('meno' => 'Adam', 'pohlavie' => 'M', 'vek' => 16, 'povolanie' => 'študent'),
            array('meno' => 'Dan', 'pohlavie' => 'M', 'vek' => 16, 'povolanie' => 'študent'),
            array('meno' => 'Jakub', 'pohlavie' => 'M', 'vek' => 16, 'povolanie' => 'študent')
        );
        $bytost['zviera'] = array(
            array('meno' => 'Max', 'pohlavie' => 'M', 'druh' => 'pes', 'rasa' => 'knírač', 'vek' => 3),
            array('meno' => 'Max', 'pohlavie' => 'M', 'druh' => 'pes', 'rasa' => 'Knírač', 'vek' => 3),
            array('meno' => 'Tara', 'pohlavie' => 'F', 'druh' => 'pes', 'rasa' => 'Knírač', 'vek' => 3),
            array('meno' => 'Rex', 'pohlavie' => 'M', 'druh' => 'pes', 'rasa' => 'Husky', 'vek' => 3));
        $bytost['vymyslená bytosť'] = array(
            array('jméno' => 'Gejx', 'pohlavie' => 'F', 'druh' => 'Unicorn', 'rasa' => 'duhový', 'vek' => 20),
            array('meno' => 'Legolas', 'pohlavie' => 'M', 'druh' => 'Lesný elf', 'rasa' => 'Elf', 'vek' => 2931,),
            array('meno' => 'Albert', 'pohlavie' => 'M', 'druh' => 'Zlobr', 'rasa' => 'Horní', 'vek' => 47));

        var_dump($bytost);


        $a = 5;
        $b = 4;
        echo "IF:<br>a=" . $a . "<br> b=" . $b . "<br> či sa A rovná b<br>";
        if ($a == $b) {      
            echo "A sa rovná B <br>";
        } else {
            echo "A sa nerovná B <br>";
        }
        echo "<br>či je A väčšie nez 5..elseif či je menšie...else či je rovné<br>";
        if ($a > 5) { 
            echo "A je väčšie nez 5 <br>";
        } elseif ($a < 5) {
            echo "A je menšie nez 5 <br>";
        } else {
            echo "A je rovné 5<br><br>";
        }

        echo "Switch, pokiaľ je A<7 tak sa vypíše jeho hodnota, ak je inak tak sa spustí default, kde sa taktiež vypíše ona hodnota, ale za to se napíše 'DEFAULT'. <br>";
        $a = 30;
        switch ($a) {
            case $a < 7: echo "a = " . $a . "<br>";
                break;
            default: echo "a = " . $a . "(default)<br><br>";
                break;
        }
        echo "cyklus for:<br>";
        for ($i = 0; $i <= 5; $i++) { 
            echo $i . "<br>";
        }
        echo "cyklus while:<br>";
        $i = 0;
        while ($i <= 10) { 
            echo $i . "<br>";
            $i++;
        }
        $i = 0;
        echo "<br>Do...While vypíše hodnoty i od 0 do 7<br>";
        do {
            echo $i . "<br>";
            $i++;
        } while ($i <= 7);


        echo " <br> Foreach, vypíše jména z array<br>";
        $listmien = "Martin; Ivan-TOMAS, AdAm aLeX";
        $listmien = str_replace(" ", ", ", $listmien);
        $listmien = str_replace(";", ",", $listmien);
        $listmien = str_replace("-", ", ", $listmien);
        $listmien = str_replace(",,", ",", $listmien);
        $listmien = strtolower($listmien);
        $listmien = ucwords($listmien);
        $listmien = explode(" ", $listmien);

        echo "<table border=1>";
        $poradie = 1;
        foreach ($listmien as $mena) {
            echo "<tr><td>" . $poradie++ . "</td><td>" . $mena . "</td></tr>";
        }
        echo "</table><br><br><br>";

        echo "faktorial:<br>";
        echo faktorial(10);
        
        function faktorial($inputN) {
            $pomocne = $inputN - 1;
            for ($pomocne; $pomocne > 0; $pomocne--) {
                $inputN = $inputN * $pomocne;
            }
            return $inputN;
        }

        echo "<br><br> matematicke funkcie: hexadec na dec:<br>";
        $a = "A5CF";
        $a = hexdec($a);
        echo $a . "<br> log10:<br>";
        $a = 10.3;
        $a = log10($a);
        echo $a . "<br>";
        ?>
    </body>
</html>