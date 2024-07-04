<?php
// Set header to return JSON content
header('Content-Type: application/json');

// Function to detect bad words and phrases
function containsBadWords($inputString) {
    $badWords = file('blocked.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    // Split input string into words based on spaces and punctuation
    $inputWords = preg_split('/\s+|(?<=[,.;!?])|(?=[,.;!?])/', $inputString, -1, PREG_SPLIT_NO_EMPTY);

    // Check each word against the bad words list
    foreach ($inputWords as $word) {
        foreach ($badWords as $badWord) {
            // Exact match check for words
            if (strcasecmp($word, $badWord) === 0) {
                return true;
            }
        }
    }

    // Check for bad phrases within the input string
    foreach ($badWords as $badWord) {
        if (stripos($inputString, $badWord) !== false) {
            return true;
        }
    }

    return false;
}

// Get input string from either query parameter or POST body
$inputString = $_GET['text'] ?? $_POST['text'] ?? '';

// Check for bad words
$result = containsBadWords($inputString);

// Return result as JSON
echo json_encode(['containsBadWords' => $result]);