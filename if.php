<!-- <?php

$name ="Rizwan Gulzar";
if ($name =="Rizwan Gulzar"){
    echo "Welcome Back $name";
}else{
echo "$name Name is not found in database";
}

?> -->


<!-- 
<?php
$fruite ="mango";
if($fruite=="apple"){
    echo"eat this $fruite";
}elseif($fruite=="orange"){
    echo"eat this $fruite";
}else{
    echo"you have noting for eating";
}
?> -->



<?php
$month ="febrary";
switch($month){
    case "janury":
    echo"$month is first month";
    break;

    case"febrary":
    echo"$month is second month";
    break;

    case "december":
    echo "$month is last month";
    break;
    default:echo"this month is not matched";
    break;
}

?>