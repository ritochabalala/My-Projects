# Render Visualisations
A customer's financial income and expenses

The goal is to build an extensible web-based workflow system. The workflow is driven by HTML form

The system you are going to build loosely reflects some of the processes most organisations use to get data from excel into the system and render visualisations. The user must enter a customer and the information captured as follows:

First name
Last name
Date of birth

The user is also going to upload an excel file that has the customer's financial income and expenses in the last 12 months. All user interaction should be through super simple HTML forms. The user must upload the excel file when they capture the customer information. The system must render a temporal graph showing the customer's income and expenditure for the last 12 months

The template as an example for the excel file:

Month	Income	    Expenses
Jan 	R19,770.00 	R3,438.00
Feb 	R29,926.00 	R25,382.00
Mar 	R21,500.00 	R26,737.00
Apr 	R29,023.00 	R18,685.00
May 	R24,486.00 	R22,691.00
Jun 	R29,245.00 	R13,706.00
Jul 	R28,474.00 	R10,402.00
Aug 	R25,398.00 	R12,039.00
Sep 	R33,953.00 	R3,411.00
Oct 	R30,650.00 	R26,110.00
Nov 	R20,149.00 	R9,971.00
Dec	  R30,613.00	R20,821.00 

Here are the steps I under followed to build the system using HTML, CSS, PHP, MySQL and other languages:

Create the HTML form: Create an HTML form using HTML and CSS to capture the customer information and allow the user to upload the Excel file. Make sure to include fields for the first name, last name, date of birth, and a file input field for the Excel file.

Process the form data: Use PHP to process the form data when it is submitted by the user. In PHP, use the $_FILES superglobal to access the uploaded Excel file and extract its contents.

Store the data in the database: Store the customer information and the financial data from the Excel file in a MySQL database. Use PHP to insert the data into the database using an SQL INSERT statement.

Generate the visualisation: Use a library in PHP, such as pChart to generate a temporal graph showing the customer's financial income and expenses for the last 12 months. 

Display the visualisation: Once the visualisation has been generated, display it to the user on the HTML page using PHP to retrieve the data from the database and embed the visualisation in the page.

Validate user input: Use PHP to validate the user input to ensure that the form is filled out correctly and that the uploaded Excel file is in the correct format.

Handle errors: Use PHP to handle any errors that might occur during the processing of the form data or the generation of the visualisation. Display error messages to the user if necessary.
