<?php

$t=40;

if ($t<=20){
    echo "It's so cold today";
}
else if ($t>20 && $t<30){
    echo "The weather is just perfect";
}
else if ($t>=30 && $t<40){
    echo "It's so hot today";
}
else if ($t>=40){
    echo "Is this the Sahara desert?!";
}
else{
    echo "It's a nice day out";
}
?>