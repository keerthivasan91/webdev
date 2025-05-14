<?php
// 1. Indexed Array (list of numbers)
$numbers = array(10, 20, 30);
echo "Indexed Array:\n";
print_r($numbers);

// Add an element
$numbers[] = 40;
echo "\nAfter Adding 40:\n";
print_r($numbers);

// Delete an element
unset($numbers[1]); // deletes 20
echo "\nAfter Deleting index 1:\n";
print_r($numbers);

// Access an element
echo "\nAccessing index 0: " . $numbers[0];


// 2. Associative Array (animal sounds)
$animalSounds = [
    "dog" => "bark",
    "cat" => "meow",
    "cow" => "moo"
];
echo "\n\nAssociative Array:\n";
print_r($animalSounds);

// Add an element
$animalSounds["duck"] = "quack";
echo "\nAfter Adding 'duck':\n";
print_r($animalSounds);

// Delete an element
unset($animalSounds["cat"]);
echo "\nAfter Deleting 'cat':\n";
print_r($animalSounds);

// Access an element
echo "\nSound of dog: " . $animalSounds["dog"];


// 3. Multidimensional Array (student marks)
$students = [
    "John" => ["math" => 85, "science" => 90],
    "Amy"  => ["math" => 78, "science" => 88]
];
echo "\n\nMultidimensional Array:\n";
print_r($students);

// Add a new student
$students["Tom"] = ["math" => 92, "science" => 81];
echo "\nAfter Adding Tom:\n";
print_r($students);

// Delete a subject mark
unset($students["Amy"]["science"]);
echo "\nAfter Deleting Amy's science mark:\n";
print_r($students);

// Access a mark
echo "\nJohn's Math mark: " . $students["John"]["math"];
?>
