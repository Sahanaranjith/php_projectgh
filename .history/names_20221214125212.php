<?php
   $name = ['james','michel','jhon','hony'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="">
    <h1>Names</h1>
    <ul$class = count($names)>3 ? "more-names": "some-names";>
        <?php foreach($name as $name){?>
            <li><?=$name ?></li>
            <?php }?>
    </ul>
    
</body>
</html>
<?php 

$class = count($names)>3 ? "more-names": "some-names";

$grade= $marks<40 ? "fail": "pass";

if($marks<40){
    $grade = "fail";
}else{
    $grade = "pass";
}

?>
if(count($names)>3){
  more-names
}else{

}