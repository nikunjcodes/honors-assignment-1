# Assignment 1 of the Full Stack Honors Course of RCOEM

The problem statement of the given assignment is :
Script 1:  Create a Form with the above fields and when that form is submitted, it should save the data in a database table.

Script 2:  There should be another page in your application to list all the entries added. It should show all users added in the database in an HTML table.
Keep the following things in mind:
Solution:
The problem is solved via 4php scripts and 1 html script.

## Index.HTML:
![image](https://github.com/nikunjcodes/honorsassign1/assets/149929909/946203d4-408d-4703-a8e3-70e1df580797)
In this file if the user choose to enter data it take you to form2.php which has the php form and if they choose to see data it takes them to table.php which has the entered data.

## Form2.php:
This file contains the form required for entering data into the database. If submitted the form uses the post method and then php script takes over.
using PDO we enter the data into the already made database table. And if the data is successfully entered we echo ' Data Sucessfully entered.  
Herewith are the 3 sample data being entered into the form:
![image](https://github.com/nikunjcodes/honorsassign1/assets/149929909/f385665b-aa87-4841-b06d-97887e8907d4)
![image](https://github.com/nikunjcodes/honorsassign1/assets/149929909/02e8d389-e4c4-4d5d-a3af-6b15a87da250)
![image](https://github.com/nikunjcodes/honorsassign1/assets/149929909/aa9ab6a3-bf66-44d1-be26-3974f99b8603)



The submit button is being used to submit the form while the go back button is used to go to the index.html page
Data getting entered into the Database
![image](https://github.com/nikunjcodes/honorsassign1/assets/149929909/0aa87dc6-337e-4ec7-aae8-2db6f0737816)


# The Form2.php uses the DbConnection class which contains the static method to connect to the database.
## Table.php:
This page is used to display the data from the Database.
It uses the QueryBuilder class which takes in the pdo and the table name to construct a fetchAll statement which is used the table. Using foreach loop each entry of the student gets displayed.
Here is the output of the same:
![image](https://github.com/nikunjcodes/honorsassign1/assets/149929909/10cadd72-21d9-491d-9f22-49b3249b2145)


