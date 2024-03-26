<?php
$www=123;
$msg =$www >100? "Large":"small";
echo "First message: $msg \n<br>";
// another message
$msg =($www %2 ==0)? "Even":"Odd";
echo "Second message : $msg \n<br>";
// another message
$msg =($www` %2)? "odd":"Even";
echo "third message : $msg \n<br>";
?>