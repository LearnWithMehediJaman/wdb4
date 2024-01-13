<?php 

//Indexed Array
// $array = ['mehedi', 'jaman', 'kamal', 'jamal'];

// echo $array[0];

// Associative Array
$array = ['first' => 'mehedi', 'second' => 'jaman', 'third' => 'kamal', 'fourth' => 'jamal'];

// echo $array[1];


$persons = [
    [
        'name' => [
            'first_name' => 'Mehedi',
            'last_name' => 'Jaman',
        ],
        'age' => 30,
        'occupation' => 'Software Engineer',
    ],
    [
        'name' => [
            'first_name' => 'Jamal',
            'last_name' => 'Uddin',
        ],
        'age' => 30,
        'occupation' => 'Software Engineer',
    ],
    [
        'name' => [
            'first_name' => 'Kamal',
            'last_name' => 'Uddin',
        ],
        'age' => 30,
        'occupation' => 'Software Engineer',
    ],
    [
        'name' => [
            'first_name' => 'Farid',
            'last_name' => 'Uddin',
        ],
        'age' => 30,
        'occupation' => 'Software Engineer',
    ],

];


function fullName($index) {
    global $persons;
    return $persons[$index]['name']['first_name']." ".$persons[$index]['name']['last_name'];
}

print_r($persons);

$single_person = [
    'name' => [
        'first_name' => 'Abdus',
        'last_name' => 'Salam',
    ],
    'age' => 30,
    'occupation' => 'Software Engineer',
];

array_push($persons, $single_person);

print_r($persons);