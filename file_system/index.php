<?php
//$dir = scandir(__DIR__);
//
//var_dump(is_file($dir[3]));
//var_dump(is_dir($dir[2]));

//mkdir('foo');
//rmdir('foo.txt');
//rmdir('foo');

// Create directory recursively
//mkdir('foo/bar', recursive: true);

//rmdir('foo');

//file_put_contents('foo.txt', 'Hello World');

//$size = filesize('foo.txt');
//echo $size;
////clearstatcache();
//echo $size;

/// Open file


/////// check if file exits
//if (!file_exists('foo.txt')){
//    echo 'File Not Found!';
//    return;
//}
//$file = fopen('foo.txt', 'r');
//var_dump($file);

//Read File Line By Line
//$file = fopen('foo.txt', 'r');
//while (($line = fgets($file)) !== false){
//    echo $line . '<br/>' ;
//}

// fgets csv
//$file = fopen('foo.txt', 'r');
//while (($line = fgetcsv($file)) !== false){
//    print_r($line);
//}
//
//$content = file_get_contents('foo.txt');
//echo $content;

//file_put_contents('foo.txt', 'Hello');
//file_put_contents('foo.txt', 'World', FILE_APPEND);
//$content = file_get_contents('foo.txt');
//echo $content;

//copy('foo.txt', 'bar.txt');
rename('bar.txt', 'foo.txt');
