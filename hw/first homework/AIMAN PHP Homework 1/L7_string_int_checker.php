<?php
 function checkDataType($data) {
    if (is_int($data)) {
        return "Integer Data Type";
    } elseif (is_string($data)) {
        return "String Data Type";
    } else {
        return "Not int or str";
    }
}

echo checkDataType("China");

?>