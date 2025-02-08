# PHP isset() Gotcha with Numeric Keys and Falsey Values

This repository demonstrates a subtle bug in PHP related to the `isset()` function, numeric array keys, and values that evaluate to false (such as 0 and false).  The `isset()` function doesn't reliably distinguish between a key's absence and a key holding a falsey value.

## The Problem

The `bug.php` file contains PHP code that showcases the issue.  It demonstrates how `isset()` behaves inconsistently when checking for the existence of a numeric array key, particularly when the potential value is 0 or false.  This can lead to unexpected program behavior and logic errors. 

## The Solution

The `bugSolution.php` file provides a corrected approach. It uses `array_key_exists()` which directly checks for the existence of the key regardless of the value.