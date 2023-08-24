<?php
// code php here
$x = 10;
$x =" hello word00";
echo  $x."<br/>";
$y = 20;
if ($y>10){

} else{

}

$arr = [];
$arr[]= 10;
$arr[]= "heloo";
$arr[]= true;

for ($i=0;$i<count($arr);$i++){

}
foreach ($arr as $item){

}
$sv = [];
$sv["name"] = "Nguyen Van A";
$sv["age"] = 18;

$teacher = [
  "fullname"=>"Dao Duy A",
    "age"=>22,
    "email"=>"duy@...."."br/"
];
echo  "ul";
foreach ($teacher as $k=>$t){
    echo "li".$k.":".$t."/li";
}
echo "/ul";
echo "Ten giao vien:".$teacher["fullname"];
function tinhtong($a,$b){
    //return a+b;
    echo $a+$b;
}
tinhtong(5,8);
