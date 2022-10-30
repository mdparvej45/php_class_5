<?php
//html entities decode==================>
$input2 = "<p>Hello World</p>";//html entities decode print out with html as a string
echo html_entity_decode($input2);
echo '<br>';

//html entities===================>
$input = "<p>Hello World</p>";//html entities print out with html as html element
echo htmlentities($input);
echo '<br>';

//PHP str_repeat() Function
$bd = 'I love Bangladesh';
echo str_repeat($bd, 40);
echo '<br>';

//PHP empty() Function
$name = 'Parvez';
if(empty($name)){
    echo 'Please input your name';
}else{

    echo 'Welcome';
}
echo '<br>';


//PHP empty() Function another Exmp:
$name = 'Parvez';
if(!empty($name)){
    echo 'Welcome to Deshboard';
}else{
    echo 'Please input your name';
}
echo '<br>';


//PHP isset() Function another Exmp:
$email = 'pj.parvaz45@gmail.com';
if(isset($email)){
    echo 'Welcome to Login';
}else{
    echo 'Dined Access';
}
echo '<br>';



//PHP explode() Function another Exmp:
$inputImage = 'about_parvej.jpg';
$imageArray = explode('.', $inputImage);
$imageExt = end($imageArray);
if($imageExt == 'jpg'){
    echo 'This is correct image formate';
}else{
    echo 'Please differnt image';
}
echo '<br>';



//PHP explode() Function another Exmp:
function imageFormateCheck($userInput){
    $inputImage = $userInput;
    $imageArray = explode('.', $inputImage);
    $imageExt = end($imageArray);
    if($imageExt == 'jpg'){
        echo 'This is correct image formate';
    }else{
        echo 'Please differnt image';
    }
}
imageFormateCheck('parvez_fav_user.png');
echo '<br>';



//PHP count() Function another Exmp:
$users = [
    'parvej',
    'Khalid',
    'Omar',
    'Hasibur',
    'Hasan',
    'Khairul',
    'Zobaida'
];
if(count($users) >= 5){
   echo 'Enough';
}else{
    echo 'Please input more';
}
echo '<br>';


//PHP array_diff() Function another Exmp:
$users2 = ['hasan', 'korim', 'tayeb', 'shojol', 'Takrim'];
$users3 = ['hasan', 'hasem', 'tayeb', 'shojol', 'Takrim'];
print_r(array_diff($users2, $users3));
echo '<br>';

//PHP array_pop() Function another Exmp:
print_r(array_pop($users2));//Delete the last element of an array:
echo '<br>';
print_r($users2);
echo '<br>';

//PHP array_push() Function another Exmp:
print_r(array_push($users2, 'Harun'));//insert last element of an array:
echo '<br>';
print_r($users2);
echo '<br>';

//PHP array_shift() Function another Exmp:
    print_r(array_shift($users2));//Delete the fast element of an array:
    echo '<br>';


//PHP array_unshift() Function another Exmp:
    print_r(array_unshift($users2, 'kalam'));//insert fast element of an array:
    echo '<br>';



//PHP array_reverse() Function another Exmp:
    print_r(array_unshift($users2));
    echo '<br>';

    $iamge = 'my_iamge_dkjdal.jpg';
    $imageArray = explode('.', $iamge);
    $imgExt = array_reverse($imageArray);
    if($imageExt == 'jpg'){
        echo 'This is correct image';
    }else{
        echo 'This is not correct ';
    }
    echo '<br>';


?>