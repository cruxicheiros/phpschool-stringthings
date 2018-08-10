Write a program that accepts a path to a text file as an argument.

Your program will need to open the text file, read its contents, strip
all non-alphabetical characters, convert the text to lowercase, and finally
produce a list of the top 5 most common words and how many times they occur
in the text.

-----------------
## HINTS
You can use regular expressions to filter out non-alphabetical characters.

Your output should be in the format:
```$sh
Top 5 most common words:
word appears 30 times
wordtwo appears 21 times
aword appears 20 times
anotherword appears 14 times
wordfive appears 2 times
```