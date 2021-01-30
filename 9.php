<?php

$state="Mississippi Alabama Texas Massachusetts Kanasas";
$result=[];
$state1=explode(" ",$state);

echo "<pre>";
print_r($state1);
echo "</pre>";


echo "Original array<br>";
foreach($state1 as $i => $value){
    print("   STATES[$i]=$value<br>");
}

foreach($state1 as $a){
    if(preg_match('/xas$/',$a))
        $result[0]=$a;
}

foreach($state1 as $a){
    if(preg_match('/^k.*s$/i',$a))
        $result[1]=$a;
}

foreach($state1 as $a){
    if(preg_match('/^M.*s$/i',$a))
        $result[2]=$a;
}
foreach($state1 as $a){
    if(preg_match('/a$/i',$a))
        $result[3]=$a;
}
echo "<br>Resultant array<br>";
foreach($result as $i =>$value){
    print("   STATES[$i]=$value<br>");
}
?>