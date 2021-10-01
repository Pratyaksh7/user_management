# user_management
##gist of the project


User opens login page. Clicks on Register Account

Create a user registration form  with following fields:
•	Name
•	Email
•	Gender [ Radio Button]
•	Password
•	Confirm Password

After registering, user is redirected back to login page, enters email in username and fills in password, and hit login. User is logged in.

Post login , user is directed to a user listing page. It’s a data table , and columns shown in this data table are Photo, Name, Email, Address , Age , and an Action Column. Action Column has icons of edit, delete and a toggle button of status. Name is hyperlinked to this users’ view. Address is concatenation of street, city, state, zipcode[first row of address panel] View page is similar to edit page, only all fields are disabled for editing , and photo is seen.

If the toggle button is off, that user cannot login.

On clicking edit button, the complete user form opens up which has following fields:
Details which were filled at the time of registration are autofilled
•	Name
•	DOB
•	Photo[upload single image]
•	Email 
•	Gender
Then there is an address section below:

[Street , City, State, Zip Code ] These are 4 fields in a row. There is a plus button clicking on which a blank row with these 4 fields is repeated, along with a delete button.
Many such rows can be added, and again deleted as well. One row will be required. Rest are optional.
