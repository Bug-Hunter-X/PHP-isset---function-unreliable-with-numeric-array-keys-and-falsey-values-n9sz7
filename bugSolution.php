The reliable way to check for a key's existence in an array, irrespective of its value, is to use `array_key_exists()`.  Here's the corrected code:

```php
<?php
$myArray = array();

if (!array_key_exists(0, $myArray)) {
  echo 'Key 0 does not exist';
} else {
  echo 'Key 0 exists';
}

$myArray[0] = 0;

if (!array_key_exists(0, $myArray)) {
  echo '\nKey 0 does not exist';
} else {
  echo '\nKey 0 exists';
}

$myArray[0] = false;

if (!array_key_exists(0, $myArray)) {
  echo '\nKey 0 does not exist';
} else {
  echo '\nKey 0 exists';
}
?>
```
This version accurately reflects whether the key '0' is present in the array, regardless of its value.