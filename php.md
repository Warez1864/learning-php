# PHP Notes

This is some of my PHP Notes, which will be usefull.

<h2> PHP's Data Types: </h2>

String: A string is a sequence of characters, like "My name is Warez"
   * A string can be any text inside quotes
   * A string can be used in single or double quotes
   * The simplest way to create a string is to use single quotes,
   but the double quotes are used to create relatively complex strings compared to single quotes


Simple string in PHP. Example:
```php
<?php
    var_dump('I am 15 years old');


// Output:
// String "I am 15 years old"
?>
```
* The strlen() function is used to calculate the number of characters inside a string. It also includes the blank spaces inside the string.
```
// Example:

<?php
   $MyAge = 'I am 15 years old';

// Outputs: 28
echo strlen($MyAge);
?>
```
* The str_word_count() function counts the number of words in a string.
```
// Example:

<?php
$MyName = 'My name is Warez.';

// Output: 4
echo str_word_count($MyName);
?>
```
Integer: An integer data type is a non-decimal number, like 5
   * An integer must have at least one digit
   * An integer can not have a decimal point
   * An integer can be either positive or negative
   * An integer data type is a non-decimal number between -2147483648 and 2147483647. A value greater (or lower) than this, will be stored as float, because it exceeds the limit   of an integer.

Example:
* An integer can be: $5




Float: A float is a number with a decimal point, like 5.5
   * Float is also called double
   * A number with a decimal point is a real number

Example:
* A float can be: $5.123


Boolean: Booleans are like a switch, it has only two possible values either 1 (true) or 0 (false).
   * Booleans are often used in conditional testing.
```
<?php
// Example:

$ImHappy = True;
var_dump($ImHappy);

// Output: True
?>
```

Array: An array is a data structure that can hold more than one value at a time.
   * Used to store multiple data items
   * Stores multiple values in one single variable.
   * Consisting of a collection of elements
   * Each element identified by at least one array index or key.



   ```
   * The first element in an array is 0






```
<?php
// Example:

$Countries = array("Mexico","Germany","Russia");
var_dump($Countries);

?>

Object: An Object is an individual instance of the data structure defined by a class.
   * We define a class once and then make many objects that belong to it.
   * Objects are also known as instances.
```
<?php
// Example:

class Country {
  public $land;
  public $country;
  public function __construct($land, $country) {
    $this->land = $land;
    $this->country = $country;
  }
  public function message() {
    return "My country is " . $this->land . " " . $this->country . "!";
  }
}

$myCountry = new Country("beloved", "Afghanistan");
echo $myCountry -> message();
echo "<br>";
$myCountry = new Country("mighty", "Afghanistan");
echo $myCountry -> message();
// Output: My country is beloved Afghanistan
// Output: My country is migthy Afghanistan

?>






