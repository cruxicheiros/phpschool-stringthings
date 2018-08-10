Write a program that accepts a printable ASCII string and a positive integer as an argument.
The number is the number of places to 'shift' the string to the 'right' by.
The program should output the enciphered string.

Remember that only characters between `32` and `126` inclusive are printable. Your program should
only produce and operate on printable characters.

-----------------
## HINTS

This challenge is based on the Caesar/shift cipher:   
https://en.wikipedia.org/wiki/Caesar_cipher

As a demonstration of some edge cases,
`php program.php "|}~" 2` should output `~ !`.

You can assume that your input will not include any non-printable characters.

For an ASCII table, check the Wikipedia page: https://en.wikipedia.org/wiki/ASCII#Character_set

It's recommended that you use the `ord` and `chr` functions.