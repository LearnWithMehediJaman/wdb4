<?php

// $names = array('foo', 'bar', 'baz');
// $names = ['foo', 'bar', 'baz'];

// echo $names[1];

// $person = ['Name' => 'John', 'Age' => 30];

// echo $person['name'].PHP_EOL;
// print_r($person);
// print_r(array_change_key_case($person, CASE_LOWER));


// $numbers = [1,2,3,4,5,6,7,8,9,10];

// $sub_array = array_chunk($numbers, 5);
// print_r($sub_array[1]);


// $persons = [
//     [
//         'name' => 'John',
//         'age' => 30,
//         'city' => 'New York',
//     ],
//     [
//         'name' => 'Jane',
//         'age' => 25,
//         'city' => 'Paris',
//     ],
//     [
//         'name' => 'Bob',
//         'age' => 40,
//         'city' => 'London',
//     ],
//     [
//         'name' => 'Alice',
//         'age' => 35,
//         'city' => 'Tokyo',
//     ],
// ];

// $names = array_column($persons, 'city');

// print_r($names);


// key => value

// $ages = [30, 25, 40];
// $names = ['john', 'jane', 'bob'];

// $persons = array_combine($ages, $names);
// // print_r($persons);

// echo $persons[40].PHP_EOL;

// $names = [
//     'john' => ['John', 30], 
//     'jane' => ['Jane', 25, 'Paris'],
//     'bob' => ['Bob', 40, 'London', 'UK'],
// ];

// print_r(array_count_values($names['john'])).PHP_EOL;

// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("e"=>"red","f"=>"green","g"=>"blue");

// $diff = array_diff($a1, $a2);

// print_r($diff);

$colors = ['red', 'green', 'blue'];

$new_array = array_pad($colors, 5, 'yellow');

print_r($new_array);