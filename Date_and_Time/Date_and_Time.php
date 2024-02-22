<?php
// time() function:
// The time() function returns the current time in the number of seconds since the Unix Epoch (January, 1 1970 00:00:00 GMT).
// time — Return current Unix timestamp. Returns the current time measured in the number of seconds since the Unix Epoch (January, 1 1970 00:00:00 GMT).
echo "time() = " . time() . PHP_EOL;

// date() function:
// The date() function formats a local date and time, and returns the formatted date string.
echo PHP_EOL. "DATE_ATOM = ";
echo date(DATE_ATOM) . PHP_EOL;

echo "DATE_RFC3339_EXTENDED = ";
echo date(DATE_RFC3339_EXTENDED);

// Prints the day, date, month, year, time, AM or PM
echo PHP_EOL . date("l jS \of F Y h:i:s A"). PHP_EOL;


//DateTime class
// Creating a new DateTime() object.
$dateTimeObject = new DateTime();
// Setting the date to 25th July 2024 and time to 12:00:30 AM and DateTimeZone to America/Toronto.
//$dateTimeObject = new DateTime('25-07-2024 12:00:30 AM', new DateTimeZone("America/Toronto"));
echo PHP_EOL. '$dateTimeObject = ';
var_dump($dateTimeObject);

echo PHP_EOL . '$dateTimeObject->format()' .PHP_EOL;
var_dump($dateTimeObject->format('jS F Y h:i:s A T e O'));
// Sets the current date of the DateTime object to a different date.
$dateTimeObject->setDate(2024, 07, 25);
echo PHP_EOL . '$dateTimeObject (after setDate using setDate method) = ';
var_dump($dateTimeObject);

// Get the TimeZone associated with the DateTime
echo PHP_EOL. '$dateTimeObject->getTimezone()->getName()'. $dateTimeObject->getTimezone()->getName() . PHP_EOL;
var_dump($dateTimeObject->getTimezone());

// Returns date formatted according to specified format.
echo '$dateTimeObject->format(DATE_ATOM) = ' . $dateTimeObject->format(DATE_ATOM);

$dateTimeFromFormat = DateTime::createFromFormat("d-m-Y H:i:s", '01-01-2024 12:30:00');
echo '$dateTimeFromFormat = ';
var_dump($dateTimeFromFormat);

