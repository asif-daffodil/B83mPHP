<?php
function checkDataType($data) {
    if (is_numeric($data)) {
        return "Integer";
    } else {
        return "String";
    }
}

echo checkDataType("hello") . "\n";
echo checkDataType(5) . "\n";


