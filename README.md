# Acceptic test task
Problem #1 Write a function that takes an array of numbers and the length of the array. The array of numbers of can of any length with the numbers being any size. Your function should (a) report the range of the numbers (i.e. min and max), (b) print to screen a list of all numbers within the range that are missing from the array (c) print the count of all numbers that appear 2 or more times within the array.
For example: if given [3, 1, -5, 3, 3, -5, 0, 10, 1, 1] and the corresponded array length of 10, we would output the following:

Range is -5 to 10
Missing Numbers:
-4
-3
-2
-1
2
4
5
6
7
8
9
Duplicate Numbers:
3 appears 3 times
1 appears 3 times
-5 appears 2 times

Rules for Problem #1:
a) You may use any data structures you would like, and you may use data structure libraries (for example you may use a Standard Library Linked List if you think that is the right data structure to use).
b) You may not use any helper functions such as min(), max(), find(), etc
c) No sorting is allowed
d) Must be linear time O(N), so no nested loops are allowed
e) Must be memory efficient, so for input of [1, -100000, 100000], if you allocate a data structure like int [100000], you are doing something wrong, since you are using memory  of sizeof(int)*100000 even though the input array only has 3 ints.

Problem #2 Our goal is to build a transcript system for a university, such as the one below:
Name: John Doe
Id: 123-456-789
GPA: 3.63
Major: Computer Science

Winter 2013
Math 1C	B+
Comp Sci 100	A
Comp Sci 111	A-

Fall 2012
Math 1B	B
English 1	A
Comp Sci 2	A-

Spring 2012
Math 1A	A-
History 10	B+
Comp Sci 1	A

For this transcript system do all of the following. If you are unable to do all of them, do whichever you are capable of solving:
(a) Design a SQL Schema to store the data above
(b) Write the SQL Queries to get the data above from the database using the schema you design in A
(c) Write the HTML code to display the page above
(d) Write the CSS to display items as formatted above (e.g. bold, underline, white space/indenting, italics, etc)
(e) Write Javascript code so that after the page finishes loading, the GPA is dynamically calculated from the grades and displayed within the transcript.


HOW TO:
1. you need to create db 'transcript_system' and upload to it transcript_system.sql
2. that's all
