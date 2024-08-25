<?php

// Arrays Type
// Indexed ARRAY
// Associative Array
// Multidimentional Array



// ***************************Indexed ARRAY**********************************
$students = array("Aleem", "Talib", "Aariz", "Rayyan", "Sufiyan", "Sadan");

$student=["Aleem", "Talib", "Aariz", "Rayyan", "Sufiyan", "Sadan"];


// foreach($student as $stu){
//     echo $stu."<br>";
// }

// for($i=0;$i<count($students);$i++){
//     echo $students[$i]."<br>";
// }

// ***************************Associative ARRAY**********************************


$studentAge = array(
    "Aleem" => "21",
    "Talib" => "18",
    "Aariz" => "12",
    "Rayyan" => "23",
    "Sufiyan" => "7",
    "Sadan" => "5"
);


// foreach ($studentAge as $key => $value) {
//     echo "Name => " . $key . "<br>Age => " . $value . "<br>";
// }


// ***************************Multidimentional ARRAY**********************************

$studentDetail=array(
    array("Aleem",23,"BCA"),
    array("Talib",18,"10th"),
    array("Rayyan",18,"M.A"),
    array("Aariz",18,"5th"),
);

// echo $studentDetail[3][2];

// for($i=0;$i<count($studentDetail);$i++){
//     for($j=0;$j<3;$j++){
//         echo $studentDetail[$i][$j]."<br>";
//     }
//     echo "<hr>";
// }


// ***************************Array Methods**********************************

$arr  = array("Banana","Apple","Orange","Apple","Guava","Cherry","Pineapple","Banana","Appple");
$arr1 = array("Red","Green","Blue","Yellow");
$arr2 = array(
    "name"=>"Abdul Aleem",
    "Age"=>"21",
    "Course"=>"BCA"
    );

// print_r($arr)
// is_array($arr)
// count($arr)
// array_push($arr,"val1","val2")
// array_pop($arr)
// array_merge($arr,$arr2)
// array_search("word",$arr)
// array_slice($arr,3,5)
// array_chunk($arr,2)
// array_keys($arr3)
// array_count_values($arr)
// array_key_exist("key",$arr3)



// ************************************* print_r($arr) *****************************************
//Prints human-readable information about a variable, usually an array or object.

echo "<pre>";
print_r($arr);
echo "</pre> <hr>";

// ************************************* is_array($arr) ****************************************
//Checks whether a variable is an array.

$isarr=is_array($arr);
echo $isarr."<hr>";

// ************************************* count($arr) ****************************************
//Counts the number of elements in an array.

$arrcount=count($arr);
echo $arrcount."<hr>";

// ********************************* array_push($arr,"val1","val2") **************************
//Adds one or more elements to the end of an array.

array_push($arr,"red","green","blue");
print_r($arr);
echo "<hr>";


// ********************************* array_pop($arr) **************************
//emoves and returns the last element from an array.

array_pop($arr);
print_r($arr);
echo "<hr>";

// ********************************* array_merge($arr,$arr2) **************************
//Merges one or more arrays into one array.

$mergearr=array_merge($arr,$arr1);
print_r($mergearr);
echo "<hr>";

// ********************************* array_search("word",$arr) **************************
//Searches an array for a given value and returns the first corresponding key if found.

$index=array_search("Cherry",$arr);
echo $index."<hr>";

// ********************************* array_slice($arr,5,7) **************************
//Extracts a slice (portion) of an array.

$slicedarr=array_slice($arr,5,7);
print_r($slicedarr);
echo "<hr>";

// ********************************* array_chunk($arr,3) **************************
//Splits an array into chunks (sub-arrays) of specified size.

$chunkedarr=array_chunk($arr,3);
echo "<pre>";
print_r($chunkedarr);
echo "</pre> <hr>";


// ********************************* array_keys($arr2) **************************
//Returns all the keys of an array.

$arrkeys=array_keys($arr2);
print_r($arrkeys);
echo "<hr>";

// ********************************* array_count_values($arr2) **************************
// Counts all the values in an array and returns an associative array with the values as keys and their counts as values.


$countval=array_count_values($arr);
echo "<pre>";
print_r($countval);
echo "</pre> <hr>";

// ********************************* array_key_exist("key",$arr2) **************************
//Checks if a specified key exists in an array.

echo array_key_exists("name",$arr2);
