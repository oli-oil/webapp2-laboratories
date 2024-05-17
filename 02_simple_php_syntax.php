<?php

// 1. Variables 

$name = "Oli"; 
$age = 20; 
$address = "Angeles City";

$hobbies = array("Reading: Articles, Books, Manhwa, and Manga", "Playing Kalimba", "Scrolling", "Procrastinating");
$pet_peeve = array("Untidy Place and Environment", "Someone else using my Personal Things Without Permission");

echo '<pre>';
echo $name; 
echo '<pre>';
echo $age; 
echo '<pre>';
echo $address;
echo '<pre>'; 

echo $hobbies; 
echo '<pre>'; 
echo $pet_peeve; 
echo '<pre>'; 

// 2. Single-line comment

// $hobbies = array("Reading: Articles, Books, Manhwa, and Manga", "Playing Kalimba", "Scrolling", "Procrastinating");
# $pet_peeve = array("Untidy Place and Environment", "Someone else using my Personal Things Without Permission");

// 3. Constants

define ('NAME', 'Oli'); 
define ('AGE', 25); 
define ('ADDRESS', 'Angeles City'); 
define ('HOBBIES', array("Reading: Articles, Books, Manhwa, and Manga", "Playing Kalimba", "Scrolling", "Procrastinating")); 
define ('PET_PEEVE', array("Untidy Place and Environment", "Someone else using my Personal Things Without Permission")); 

echo NAME;
echo '<pre>'; 
echo AGE;
echo '<pre>'; 
echo ADDRESS;
echo '<pre>'; 
var_dump (HOBBIES);
echo '<pre>'; 
var_dump (PET_PEEVE);
echo '<pre>'; 

// 4. var_dump

var_dump (NAME);
echo '<pre>'; 
var_dump (AGE);
echo '<pre>'; 
var_dump (ADDRESS);
echo '<pre>'; 
var_dump (HOBBIES);
echo '<pre>'; 
var_dump (PET_PEEVE);

// 5. Multi-line comment

/* I usually do my school-related work, tasks, and activities in a clean and tidy environment that smells good and is an appropriate venue to study well;
however, dealing with different kinds of dirt, stack-up dishes, and just an overall untidy place makes my brain hurts to its deepest roots, and it makes me want to scream out loud.(oa XXD)
Aside from this, if someone else, whether close to me or not all, uses my things, stuff, and anything personal objects that I hold dear, without my permission, I actually consider it rude
when someone does that, I just don't like the fact that someone "borrows" (as they claimed it to be) my stuff and without my consent. (I'll let them borrow that, they just have to say so XXD)  */