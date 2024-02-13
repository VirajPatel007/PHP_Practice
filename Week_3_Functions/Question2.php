<?php
declare(strict_types=1);
//echo 'dir';

$five_long_string = "abcde";
$coldplay_song = <<<HEREDOC
'Cause you're a sky, 'cause you're a sky full of stars
I'm gonna give you my heart
'Cause you're a sky, 'cause you're a sky full of stars
'Cause you light up the path
I don't care, go on and tear me apart
I don't care if you do, ooh-ooh, ooh
'Cause in a sky, 'cause in a sky full of stars
I think I saw you
'Cause you're a sky, 'cause you're a sky full of stars
I wanna die in your arms, oh, oh-oh
'Cause you get lighter the more it gets dark
I'm gonna give you my heart, oh
I don't care, go on and tear me apart
I don't care if you do, ooh-ooh, ooh
'Cause in a sky, 'cause in a sky full of stars
I think I see you
I think I see you
'Cause you're a sky, you're a sky full of stars
Such a heavenly view
You're such a heavenly view
Yeah, yeah, yeah, ooh
HEREDOC;
// Lyrics of "A sky full of stars" as performed by Coldplay. All rights belong to their respective owners. Used
// under fair use for educational purposes only.

$mixed_case_string = "ThIs Is A mIxEd CaSe StRiNg.";
$untrimmed_variable = "     blabla\t     ";

/*
 * Question 2 - String functions
 *
 * a) Use the strlen() function to obtain the length of the string contained in the pre-defined $five_long_string
 *      variable. Use the debug() function to display the result.
 *
 * b) Use the strtolower() and strtoupper() functions to obtain the lowercase and uppercase versions of the string
 *      pre-defined variable $mixed_case_string and use the debug() function to display both results.
 *
 * c) The pre-defined variable $coldplay_song contains the lyrics of the song "A sky full of stars" by Coldplay. Define
 *      a "offset" integer variable initialized with zero, a while loop with an assignment operation as the condition,
 *      and use the strpos() function and the debug() function to display the positions of all the occurences of the string
 *      "sky full of stars" inside the lyrics.
 *
 * d) Use the str_replace() function to replace the string "full of" by the string "filled with" in the coldplay
 *      song lyrics contained in the string variable $coldplay_song. Use the debug() function to display the resulting
 *      modified string.
 *
 * e) Define a variable conatining a string with formatting markers able to be formatted as to contain
 *      "Hello, my name is <the name>!". Use the sprintf() and debug() functions to display said string with your own
 *      name. (Hint: the format marker for string replacement is '%s').
 *
 * f) Sequentiually use the functions ltrim(), rtrim() and trim() and debug() to trim the pre-defined string variable
 *      $untrimmed_variable and display the result of each trimming function.
 */

// a)
var_dump(strlen($five_long_string));

// b)
echo PHP_EOL;
var_dump(strtolower($mixed_case_string));
var_dump((strtoupper($mixed_case_string)));

// c)
echo PHP_EOL;
$offset = 0;
while ($offset = strpos($coldplay_song, "sky full of stars", $offset)) {
//    echo '\'sky full of stars\' located at position: ';
    echo "'sky full of stars' located at position: ";
    var_dump($offset);
    $offset++;
}

// d)
echo PHP_EOL;
/* The str_replace() function replaces some characters with some other characters in a string.
This function works by the following rules:
If the string to be searched is an array, it returns an array.
If the string to be searched is an array, find and replace is performed with every array element.
If both find and replace are arrays, and replace has fewer elements than find, an empty string will be used as replace.
If find is an array and replace is a string, the replace string will be used for every find value.

Syntax:     str_replace(find,replace,string,count)

Parameter Values:
Parameter	    Description
find	        Required. Specifies the value to find.
replace	        Required. Specifies the value to replace the value in find.
string	        Required. Specifies the string to be searched.
count	        Optional. A variable that counts the number of replacements.
*/
var_dump(str_replace("full of", "filled with", $coldplay_song));

// e)
echo PHP_EOL;
$format_string = "Hello, my name is %s!";
// sprintf — Return a formatted string. Returns a string produced according to the formatting string format. The sprintf() function writes a formatted string to a variable.
var_dump(sprintf($format_string, "Viraj Patel"));

// f)
echo PHP_EOL;
var_dump(ltrim($untrimmed_variable));
var_dump(rtrim($untrimmed_variable));
var_dump(trim($untrimmed_variable));