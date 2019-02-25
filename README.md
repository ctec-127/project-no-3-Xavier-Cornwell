# CTEC 127 - Project No. 3

## Project Overview

Be sure to clone this repository to your computer before reading any future. Place it in your **htdocs** folder.

This project will have you modify the **Record Management** application that I have provided to include new functionality.

Several new fields have been added to the **student_v2 table**. Yes, **student_v2** will be a new table. More on this later.

You will need to **modify the form PHP code** that inserts new records into the database and the PHP code that is used to **display and search** records in the database.

Let's first explore the file and folder structure of the application. Your instructor will walk you through the entire application in class.

## File and Folder Structure

- css
	- bootstrap.min.css
	- style.css
- img
	- frown.png
	- nosmile.png
- inc
	- app
		- config.inc.php
	- create
		- content.inc.php
		- form.inc.php
	- db
		- mysqli_connect.inc.php
	- display
		- content.inc.php
	- functions
		- functions.inc.php
	- layout
		- footer.inc.php
		- header.inc.php
		- navbar.inc.php
- js
	- bootstrap.min.js
	- query-3.3.1.min.js
- sql
	- student_v2.sql
- create-record.php
- delete-record.php
- display-records.php
- search-records.php
- update-record.php

## Application Overview

The **Record Management** application has 3 pages that are used by end users.

- **display-records.php** - This is the page that should be launched to start within the applicaiton
- **create-record.php** - This page is used to create new records that get inserted into the database
- **search-records.php** - This page gets called when somebody enters text in the navigation bar search box and clicks on the **Search** button.

All of these pages uses various components from the **inc**, **css**, **img**, **functions**, **layout**, **app**, **create**, **db**, and **js** folders.

The folders for **css**, **img** and **js** are self explanatory.

The **db** folder is used for the **mysqli_connect.inc.php** that allows the entire application to connect to the **MySQL (MariaDB)** database.

The **inc** folders and **subfolders** have the following sub-folders:
- **app** is used to store a PHP file that stores variables that are used throughout the application.
- **create** contains the files that are included in the **create-record.php** page.
- **display** contains a file that gets included in the **display-records.php** page.
- **functions** contains a file that has several functions that are used throughout the application.
- **layout** contains the files for page layout such as the **header**, **footer** and top **navigation**.

## Before You Begin

**READ THE INFO IN THE PARAGRAPH BELOW BEFORE TOUCHING YOUR phpMyAdmin**

This project will have you create a **new table** in your **ctec database**. The name of the new table will be **student_v2**. There is an **SQL export file** in the **sql folder** that you you should use to create and load the table with data.

## Loading the New student_v2 table

- Start XAMPP and Apache
- Access phpMyAdmin from your browser
- Click on the **ctec** database. If you don't have the **ctec** database then create a new one.
- Now make sure that the **ctec** database is selected and then click on the SQL tab.
- Copy and paste all of the data from the student_v2.sql file in the **sql** folder and then click on the **Go** button.
- The new table will be created and 100 rows of data will be inserted into the table for you.
- Verify that this worked correctly by clicking on **Browse** in phpMyAdmin.
- 

## What You Need to Do

The database table contains new columns:

- **id** - This is a field that auto assigns a number every time a new record is inserted. You never need to code anything for this column.
- **gpa** - This field will be used to store a student's **GPA**.
- **financial_aid** - This field will be used to s\tore either a 0 or 1. 0 means that they don't have financial aid and 1 means that they do.
- **degree_program** - This will contain the name of the degree program that they are currently enrolled in.
- **date_created** - This column is a timestamp and is automatically created by the database when a new record is inserted.

## So here's the deal...

1. Modify the create_record.php and any other associated files to include form fields for:
    - The **gpa** field (A number)
    - The **financial_aid** field (A radio button that has the labels Yes and No and the values of 1 and 0 respectively)
    - The **degree_program** fields should be a select tag with at least 5 options.
2. Modify the **display_records.php** and any other associated files to show the **gpa**, **financial_aid** and **degree_program** data. I will let you decided where best to display them. You should also include all of the ones that are currently being displayed.
3. Modify the **search_records.php** to support searching of the three new fields.
4. Comment all of the PHP code. You don't have to comment evey line. Provide comments that help show me that you understand what the code is doing.
5. Test your code thoroughly.

There will be three assignment deliveries that you will need to meet:

1. The first deliverable will for you to send me a screenshot on **Slack** showing that you have the base code and database table up and running on the computer that you will be performing your development on. This is due by **Monday, February 18, 2019**. I will also expect that you will have all of the code reviewed and commented. Push your updates to **GitHub**
2. The next one will be due on **Monday, February 25, 2019**. This delivarable will include the changes to the **create_record.php** form including the insertion of new data into the student_v2 table. You will need to **push** your code to **GitHub** for me to review, test and grade.
3. The last deliverable will be on **Monday, March 4, 2019**. This deliverable will include the modifications to **display_records.php** and the commenting of all the code you added. You will need to push your code to **GitHub** for me to review, test and grade.