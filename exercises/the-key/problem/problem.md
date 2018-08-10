Write a program that accepts two printable ASCII strings as arguments.

The first string is the text to be enciphered. The second is the key that will be used to encipher it.

Remember that only characters between `32` and `126` inclusive are printable. Your program should only produce and operate on printable characters.

-----------------
## HINTS

This challenge is based on the Vigenere cipher:  
[https://en.wikipedia.org/wiki/Vigenere_cipher](https://en.wikipedia.org/wiki/Vigenere_cipher)

However, both the text and the key can contain any printable ASCII character, for a total of 95 possible characters.

The key may be shorter than the text, meaning that it will need to be repeated.
