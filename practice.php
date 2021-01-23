
<?php 

$filename = "F:\\webDevelopmentCoding\\PHPHH\\practice\\data\\p2.txt";


$students= array(
    array(
        'fname' => 'Hayatul',
        'lname' => 'Emon',
        'age' => 21,
    ),
    array(
        'fname'=>'Shawon',
        'lname'=>'Ahamed',
        'age'=>'22'
    ),
    array(
        'fname'=>'Jubayer',
        'lname'=>'Ahamed',
        'age'=>20,
    ),
);

$encode = json_encode($students);
file_put_contents($filename,$encode);

$data = file_get_contents($filename);
$all = json_decode($data,true);
print_r($all);
