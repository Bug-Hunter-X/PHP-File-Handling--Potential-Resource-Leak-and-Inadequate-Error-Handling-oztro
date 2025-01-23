```php
$file = fopen("myfile.txt", "r+");
if ($file) {
    // ... process the file ...
    if (fclose($file) === false) {
        // Handle fclose error
        $error = error_get_last();
        echo "Error closing file: " . $error['message'] . "\n";
    }
} else {
    // Handle fopen error
    $error = error_get_last();
    echo "Error opening file: " . $error['message'] . "\n";
}
```
The improved code explicitly checks the return value of `fclose()`. If it's `false`, it uses `error_get_last()` to get more specific error information and handles the error appropriately.  Similar robust error handling is applied to `fopen()`.