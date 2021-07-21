<?php
for($i=1; $i<=100; $i++){
     if($i%3==0 && $i%5==0){echo "Tuing"; echo "<br>";}
         
        else if($i%3==0){echo "Ping"; echo "<br>";}
        else if($i%5==0){echo "Pong"; echo "<br>";}

else{
echo $i;
echo "<br>";

}


 
}
?>