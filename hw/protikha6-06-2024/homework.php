<?php

// i. Find maximum number from an array
function findMax($array) {
    return max($array);
}

// ii. Find 2nd max number from an array
function findSecondMax($array) {
    rsort($array);
    return $array[1];
}

// iii. Sort array from min to max
function sortArray($array) {
    sort($array);
    return $array;
}

// iv. Calculate average number of an array
function calculateAverage($array) {
    return array_sum($array) / count($array);
}

// v. Merging 2 different types of array together
function mergeArrays($array1, $array2) {
    return array_merge($array1, $array2);
}

// vi. Search data from an array
function searchData($array, $value) {
    return in_array($value, $array);
}

// vii. Show array data in lowercase and uppercase
function showArrayCase($array) {
    return [
        'lowercase' => array_map('strtolower', $array),
        'uppercase' => array_map('strtoupper', $array),
    ];
}

// viii. Get unique values
function getUniqueValues($array) {
    return array_unique($array);
}

// ix. Remove duplicate values
function removeDuplicates($array) {
    return array_values(array_unique($array));
}

// x. Check if email address is unique
function isEmailUnique($array, $email) {
    return !in_array($email, $array);
}

// xi. Check unique username
function isUsernameUnique($array, $username) {
    return !in_array($username, $array);
}

// xii. Merge 2 comma separated lists with unique value only
function mergeCommaSeparatedLists($list1, $list2) {
    $array1 = explode(',', $list1);
    $array2 = explode(',', $list2);
    return implode(',', array_unique(array_merge($array1, $array2)));
}

// xiii. Difference between 2 multi-dimensional arrays
function arrayDiffMulti($array1, $array2) {
    return array_diff_assoc($array1, $array2);
}

// xiv. Check if all values are string or not
function areAllValuesString($array) {
    foreach ($array as $value) {
        if (!is_string($value)) {
            return false;
        }
    }
    return true;
}

// xv. Union of 2 arrays
function unionArrays($array1, $array2) {
    return array_unique(array_merge($array1, $array2));
}

// xvi. Filter out array data with some specific keys
function filterArrayByKeys($array, $keys) {
    return array_intersect_key($array, array_flip($keys));
}

// xvii. Filter a multi-dimensional array
function filterMultiDimensionalArray($array, $callback) {
    return array_filter($array, $callback);
}

// xviii. Remove all white spaces from an array
function removeWhiteSpaces($array) {
    return array_map('trim', $array);
}

// xix. Combine 2 arrays and use one array data as keys and others as values
function combineArraysAsKeyValue($keys, $values) {
    return array_combine($keys, $values);
}

// xx. Convert string to array
function stringToArray($string, $delimiter = ',') {
    return explode($delimiter, $string);
}

// Example usage:

// i.
echo "<pre>";
echo findMax([1, 2, 3, 4, 5]); // 5

// ii.
echo findSecondMax([1, 2, 3, 4, 5]); // 4

// iii.
print_r(sortArray([5, 3, 1, 4, 2]));

// iv.
echo calculateAverage([1, 2, 3, 4, 5]); // 3

// v.
print_r(mergeArrays([1, 2], ['a', 'b']));

// vi.
echo searchData([1, 2, 3, 4, 5], 3); // 1 (true)

// vii.
print_r(showArrayCase(['Apple', 'Banana', 'Cherry']));

// viii.
print_r(getUniqueValues([1, 1, 2, 2, 3, 3]));

// ix.
print_r(removeDuplicates([1, 1, 2, 2, 3, 3]));

// x.
echo isEmailUnique(['test@example.com'], 'new@example.com'); // 1 (true)

// xi.
echo isUsernameUnique(['user1', 'user2'], 'user3'); // 1 (true)

// xii.
echo mergeCommaSeparatedLists('a,b,c', 'b,c,d'); // a,b,c,d

// xiii.
print_r(arrayDiffMulti(['a' => 1, 'b' => 2], ['a' => 1, 'b' => 3]));

// xiv.
echo areAllValuesString(['a', 'b', 'c']); // 1 (true)

// xv.
print_r(unionArrays([1, 2], [2, 3]));

// xvi.
print_r(filterArrayByKeys(['a' => 1, 'b' => 2, 'c' => 3], ['a', 'c']));

// xvii.
print_r(filterMultiDimensionalArray([['name' => 'John'], ['name' => 'Jane']], function($item) {
    return $item['name'] === 'John';
}));

// xviii.
print_r(removeWhiteSpaces([' a ', ' b ', ' c ']));

// xix.
print_r(combineArraysAsKeyValue(['a', 'b'], [1, 2]));

// xx.
print_r(stringToArray('a,b,c'));
echo "</pre>";
?>
