<?php
// Task 5: Password Generator

function generatePassword($length) {
    // All type of characters [ lowercase letters, uppercase letters, numbers, and special characters ]
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';
    $characterCount = strlen($characters);

    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, $characterCount - 1);
        $password .= $characters[$index];
    }

    // return the generated password
    return $password;
}

// length of 12 characters
$length = 12;

// call the funcation and store a variable
$password = generatePassword($length);

// print the password
echo "Generated Password: {$password}";