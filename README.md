# MaristClassroomDirectory
**Daniel Gisolfi**

## Description
A web app that stores and retrieves details about the hardware and software within each classroom on the Marist campus, intended for use by the Marist college help desk.

## User Manuel

### Basic Usage
The home page is where all users of the site will start, whether you are an admin or an ordinary user. To find the available information about a classroom or lab either select a marker on the map corresponding to the building then select the room by number or on the navigation bar select "Search Classroom" and enter a query.

#### Viewing a Room

When viewing a room and its available details it is important to remember that only information that is available is shown and any missing information is not available for that room. Additionally if the browser you are using makes it difficult to view the image of the podium or lab simply right click on the image and open it in a new tab or download and view it.

### Administrator Usage

As an administrator a three tools are available for use once logged in. To log in, press the admin link within the navigation bar on the top right. Once the page loads you may log in with your admin account. An admin account is created by a supervisor the default account within the database has a username of "admin" and a password of "admin". Once a supervisor creates their own account this can be removed. Once logged in find usage instructions for the tools below.

#### Manage Classrooms

The classroom management tool is used to add or remove classrooms directly from the database. To delete a record press the "-" symbol in the left most column of a record. To add a record scroll to the bottom of the page and press the "Add Classroom" button. As the table has nine columns a scroll bar has been added scroll left and right within the table to view further details of a record.

##### Adding Classrooms
When the "Add Classroom" button is pressed you are redirected to a page with a form instructing you to fill in all required fields and submit. When entering a building ID make sure corresponds to the correct building (you can find the building ID’s on the manage buildings page). When entering a file path for wither the software files or images you will need to use the format found below. Ensure the file can be found at that path and then add the record. The new classroom record should appear in the manage classrooms table as well as within all other views on the site.
**Software List**

“../data/software/RoomNumber.txt”

**Image**

“../data/images/RoomNumber.jpg”

#### Manage Buildings
The Building management tool is used to add or remove Buildings directly from the database. To delete a record press the "-" symbol in the left most column of a record. To add a record scroll to the bottom of the page and press the "Add Building" button
##### Adding Buildings
When the "Add Buildings" button is pressed you are redirected to a page with a form instructing you to fill in all required fields and submit. When entering a building ID make sure it is a new ID for the DB.

#### Manage Admins
The Administrator management tool is used to add or remove Administrators directly from the database. To delete a record press the "-" symbol in the left most column of a record. To add a record scroll to the bottom of the page and press the "Add Admin" button

##### Adding Admins
When the "Add Admin" button is pressed you are redirected to a page with a form instructing you to fill in all required fields and submit. When entering a new admin ensure the username entered is unique using either the UR or ST account. Once added an admin is given the same access as all other admins and may login.

## Issues
If the site has any major issues or no longer works please report a [Issue](https://github.com/dgisolfi/MaristClassroomDirectory/issues) through GitHub
