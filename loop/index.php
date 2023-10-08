<?php
//foreach loop
//$languages = ['php', 'c', 'c++', 'python'];
//
//foreach ($languages as $key => $language){
//    echo $key . ': ' . $language . '<br>';
//}
//unset($language);

$user = [
    'name' => 'Mahfuz',
    'email' => 'mahfuz@mahfuz.com',
    'skills' => ['php', 'c', 'c++', 'python'],
];


//foreach ($user as $key => $value){
//    echo $key . ': ' . $value . '<br>';
//}
//this will occur error

//Solve this error
//use json_encode
//foreach ($user as $key => $value){
//    echo $key . ': ' . json_encode($value) . '<br>';
//}

//or use implode
//foreach ($user as $key => $value){
//    if (is_array($value)){
//        $value = implode(',', $value);
//    }
//    echo $key . ': ' . $value . '<br>';
//}

// Or use another foreach loop
foreach ($user as $key => $value){
    echo $key . ': ';
    if (is_array($value)){
        foreach ($value as $skill){
            echo $skill. ',';
        }
    }else{
        echo $value .'<br/>';
    }
}