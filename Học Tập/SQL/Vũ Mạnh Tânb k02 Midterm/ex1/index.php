<?php
for ($i = 0; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo '*';
    }
    echo "<br>";
}
echo"<br> <br> <br>";
// tam giac deu

for ($i=0; $i<=5; $i++) {
     for ($j=5; $j>$i; $j--) { 
         echo ''; 
        }
        for ($k=0; $k<$i; $k++) { 
            echo '*'; 
        }
         echo '<br>';
 }
?>
