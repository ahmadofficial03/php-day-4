<?php

/*

WORKING WITH FILES SYSTEM

*/

// echo "Hello Apache" . "<br />";

// List of files and directories in the given path:
// $dir = scandir(__DIR__);

// var_dump(is_dir($dir[1]));
// var_dump(is_file($dir[2]));


// CREATING DIRETORY:
// mkdir("foo");               // Making Directory
// rmdir("foo");               // Removing Directory

// mkdir("foo/bar", recursive: true);   // Will create foo directory, and inside create bar directory

// rmdir("foo/bar");             // will remove directory bar.
// rmdir("foo");                  //remove foo directory


// CHECKING FILE EXITS OR NOT AND SIZE OF FILE:
// if(file_exists("foo.txt")) {
//     echo filesize('foo.txt');
//     file_put_contents("foo.txt", "Hello world");    // Putting contents in file
// } else {
//     echo "File not Found";
// }

// OPEN FILES:
// $file = @fopen('NoFound.txt', 'r');     // Error handing if file is not found.
// $file = fopen('foo.txt', 'r');


// Read this file line by line:
// while(($line = fgets($file)) !== false) {
//     echo $line . "<br />";
// }

// fclose($file);     //close file

// GET CONTENT OF FILE AND STORE IN VARIABLE:
// $content = file_get_contents('foo.txt', offset: 3, length: 2);
// echo $content;



// WRITE CONTENT TO A FILE:
// file_put_contents('bar.txt', "Hello");
// // file_put_contents('bar.txt', 'world');   // But it will overwrite hello to world.

// file_put_contents('bar.txt', "World", FILE_APPEND);

// unlink('bar.txt');     // Remove File

// copy('foo.txt', 'bar.txt');         // foo.txt copy is created with bar.txt name

// rename ('foo.txt', 'oof.txt');     // now, foo.txt is gone and oof.txt created.


/*

STRING FUNCTIONS:

*/

$string = "my name is Ahmad Fraz";
echo "String is: " . $string . "<br />";
echo "Length of string is:  " . strlen($string) . "<br />";            

echo "Starting occurance of world a is: " . strpos($string, 'a') . "<br />";  
echo "Last occurance of world a is: " . strrpos($string, 'a') . "<br />";       

echo "Reverse String: " . strrev($string) . "<br />";        
echo "String to Uppercase: " . strtoupper($string) . "<br />";     
echo "String to Lowercase: " . strtolower($string) . "<br />";    
echo "First word is uppercase: " . ucwords($string) . "<br />";   
echo "Replace Word: " . str_replace('Fraz', 'Joyia', $string) . "<br />";   
echo "Replace all string: " . str_replace($string, 'I am passionate about coding', $string) . "<br />";   
echo "Taking some portion of string: " . substr($string, 11, 21) . "<br />"; 

echo "Taking some portion of string: " . substr($string, 3) . "<br />"; 

// Loop on string:
// for ($i = 0; $i < strlen($string); $i++) {
//     echo $string[$i];
// }


if (str_starts_with($string, 'my')) {
    echo "Yes It's start with word my" . "<br />";
} 

if (str_ends_with($string, 'z')) {
    echo "YES" . "<br />";
}

// $string2 = '<h1>Hello Ahmad</h1>';
$string2 = '<script>alert(1)</script>';             //alert appears :. But if you want as a string then,
echo htmlspecialchars($string2) . "<br />";
// echo $string2;


printf('%s likes to %s', 'Ahmad', 'code');         
printf ('1+1 = %d', 1 + 1);






?>