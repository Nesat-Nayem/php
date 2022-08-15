<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];

// Simple array of strings
$colors = ['red', 'blue', 'green'];

// Using the array function to create an array of numbers
$numbers = [1, 2, 3, 4, 5];

$mynum = [54,546,65,5,65];
// var_dump($mynum[1] + 44);
// Outputting values from an array
// echo $numbers[0];
// echo $numbers[3] + $numbers[4];

// var_dump($colors);

// We can use print_r or var_dump to see the contents of an array
// var_dump($numbers);


/* ------ Associative Arrays ----- */

/*
  Associative arrays allow us to use named keys to identify values.
*/

// $colors = [
//   1 => 'red',
//   2 => 'green',
//   3 => 'blue',
// ];

// echo $colors[1];

// Strings as keys

$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => 8787,
];

// echo $hex['blue'];
// var_dump($hex);

/* ---- Multi-dimensional arrays ---- */

/*
  Multi-dimansional arrays are often used to store data in a table format.
*/

// Single person

$person1 = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// var_dump($person1) ;

// Array of people

$people = [
  $person1, //   [...$person1]
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com',
  ],
  [
    'first_name' => 'moke',
    'last_name' => 'le',
    'email' => 'make@gmail.com',
  ],
];

// var_dump($people[0]['email']);

// Accessing values in a multi-dimensional array

// echo $people[0]['first_name'];
// echo $people[2]['email'];

// Encode to JSON

// var_dump(json_encode($people));

// Decode from JSON


$jsonobj = '{"first_name":"Brad","last_name": "Traversy","email":"brad@gmail.com"}';
// var_dump(json_decode($jsonobj));