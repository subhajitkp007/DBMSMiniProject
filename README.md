## Current status 
* [x] completed
## Contents
* [Introduction](#Introduction)
* [Objective](#Objective)
* [Software Requirement](#SoftwareRequirement)
* [Instructions for running the project](#Instructions)
* [Devloper details](#Devloper)
# Introduction
### This is an small project on Database Manegment system,it is designed for performing support some basic functionality such as delete,insert,find in database using Graphical user interface. I have designed a simple and interactive user interface for performing these operation on table.
# Objective
Learn to devlop website , connect to database from the website and perform various operation on the database.
## Main Component of Project
* FRONTEND
    * HTML
    * CSS
* Backend Programming language
  * PHP
  * mysql
---
# SoftwareRequirement
1. Standard browser application( Chrome,Morzilla,Firefox )
2. XAMPP [Download link.](https://sourceforge.net/projects/xampp/) If you have not intalled xampp [Click here to watch video guide](https://www.youtube.com/watch?v=N6ENnaRotmo )
3. Text editor (If you want to modify the source code )
---
# Instructions
### Download the project to your machine:
 ```
click clone or download > download Zip 
```
 or use following the command on git bash
```
git clone https://github.com/subhajitkp007/DBMSMiniProject.git
```
DBMSMiniProject-master.zip file will be downloaded.
Unzip the files. Rename your folder as **DBMSMiniProject**.
**DBMSMiniProject** move the folder to \<your xampp installed location>/xampp/htdocs. If you have not changed the location duing XAMPP installation then path will be **C:\xampp\htdocs**
### Set up your Enviorment:
Open XAMPP control Panel start Apache and MySql.

### Import Database
Open XAMPP control panel click on the admin button of MySql.You will be redirected to [phpMyadmin](http://localhost/phpmyadmin/) 
```
Click new > database name will be "company" > create > Import > choose file > select project file location/Database/company.sql > Go  > Import has been successfully finished.
```
#### Congratulations you have succesfully imported the database.

### Run the Project
Open your browser and paste the following link:
    http://localhost/DBMSMiniProject or [click here](http://localhost/DBMSMiniProject)
#### Now explore the features of the project.If you want to some make changes then go to the path **C:\xampp\htdocs\DBMSMiniProject** open the files using text editor modify the file according to your requirements , save that and refresh your browser or [click here to see the changes](http://localhost/DBMSMiniProject.) If you are facing any problem drop your mail [subhajitmahata06@gmail.com](mailto:someone@example.com?Subject=DBMS%20MINI%20Project%20on%github). For quick response send me message on [Whatsapp click here.]( https://api.whatsapp.com/send?phone=+919732273358)

## SQL TABLE STRUCTURE DETAILS
**Customer Table**
*cust(cust:int,primary, Cname:String, City:string)*

| cust        | Cname        | City          |
| ----------- | ------------ | ------------- |
| customer ID | custome name | customer city |

**Order Table** *(Order:int,primary,Odate:date,OAmt:int)*

| order    | Odate      | OAmt          |
| -------- | ---------- | ------------- |
| order ID | order date | Order ammount |

**Item details Table** *(Item:int,primary,Price:int)*

| Item    | Price             |
| ------- | ----------------- |
| Item ID | Price of the item |

**Shipment Table** *( Order:int,primary, warehouse:int, shipdate:date)*

| cust | Cname           | City    |
| ---- | --------------- | ------- |
| 1    | Subhajit mahata | Purulia |

 **Warehouse details Table** *warehouse(Warehouse:int,primary, City:string)*

| Warehouse    | City                  |
| ------------ | --------------------- |
| warehouse ID | location of warehouse |

 ---
 # Devloper 
 Subhajit Mahata 

 Mail id: [subhajitmahata06@gmail.com](mailto:someone@example.com?Subject=DBMS%20MINI%20Project%20on%github)  
 linkedin[ https://www.linkedin.com/in/subhajitmahata/](https://www.linkedin.com/in/subhajit-mahata-1b6b52170/)
 Contact : +91 9732273358 / +91 9382747308
