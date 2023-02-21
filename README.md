# Room Calendar Application 

The aim of this project was to have running touch screen tablets affixed to the outside of each room in the university, showing whether the room is currently free together with the schedule of the room. This project was undertaken to build a web application for using such tablets. It intended that there is no need to interact with the system from the desk, but one can easily do it ad-hoc at the door of each room. The application has its database holding information about each room and its events.

The aim of the application is for the user to be able to book a room ad-hoc. To be easy and
convenient for them, we decided to omit the registration and logging in process. Alternatively,
the application is checking whether the student or staff number exists, and if it does, it lets the
user proceed with the booking. The way we are achieving this is by using session. Sessions
provide a way to store information about the user across multiple requests. The lifetime
of our session is five minutes. Once the user has entered their number, a method which checks
whether the number exists in the database is called.
There are two ways to interact with session data in Laravel. One of them is a global
session helper and the other one is by using a Request instance. We have decided to
use the second approach. Once we have checked that the number exists, we store the data
in the session. If the check was unsuccessful, a message shows up, asking
the user to try again. If it is successful, the user can proceed to the main page and book a room.

For a user to be able to delete an event, they need to have
permission to do that. However, this causes some security issues. The route for deleting
an event is publicly accessible, which leads to potential malicious URL manipulation. The
solution for this issue was "Signed URLs". Signed URLs have a "signature" hash appended
to the query string which allows Laravel to verify that the URL has not been modified.
Overall, the only way for a user to delete an event is through the email they have received, as
it is using a signed URL.

## Setup Page

The first step in the application is the setup. The setup page displays all of the rooms available
in the database and allows the user to pick the particular room they want the tablet to be
representing. The navigation bar on this page has a login option to let the administrator log in.

![setup](https://user-images.githubusercontent.com/74249819/220362266-d7d13cf7-d309-4237-b40c-3be9cd17888f.PNG)

## Student/Staff Number

A form to fill in the Student/Staff number.

![login](https://user-images.githubusercontent.com/74249819/220369900-02c7b542-876f-4bb0-a3ec-fd3447780515.PNG)

Once a room has been chosen, the next page of the application requires entering a student or
staff number in order to display the availability of the room. There are a few checks implemented to make sure the number exists in the database.

## Login Form

A login form for administrators.

![login_form](https://user-images.githubusercontent.com/74249819/220362311-9e090a02-2be7-4439-a39f-51eaeff0af0a.PNG)

## Availability Page 

Once logged in, the user can see the main page. This page shows whether the room is available
at the moment or not. A real-time clock is displayed along with the
date. From this page, the user can access the timetable of the room by clicking the "timetable"
button. By clicking the "Room information" button, a modal shows up and the user can see
additional information about the room, such as number of projectors, floor and the building
the room is located in, the table and computer capacity of the room. 

![next_meeting1](https://user-images.githubusercontent.com/74249819/220362065-40fdcfbc-43cf-4e28-a887-48d293c1272b.PNG)

## Room Information Modal

![room_info](https://user-images.githubusercontent.com/74249819/220362143-095581c7-5eea-4523-85ea-2e524a271429.PNG)

## Timetable 

The timetable for the current week. (Disabled buttons if the slot is in the past).

![timetable](https://user-images.githubusercontent.com/74249819/220362203-6ecdd520-b592-4bd3-99ad-51e775387f52.PNG)


 ## Dashboard Admin
 Once logged in as an administrator, the main page is the "Dashboard" page. From this page,
the administrator can access all of the events, student or staff numbers, buildings, floors and
rooms.

 ![dashboard](https://user-images.githubusercontent.com/74249819/220361746-75cf38bd-1d76-4396-89c6-224a55883e33.PNG)

 ## Admin Page
 
 An administrator is able to perform the Create, Read, Update and Delete operations (CRUD). The database is updated autoamtically. 

 ![events_backend](https://user-images.githubusercontent.com/74249819/220361664-534f1bf5-c6d2-474f-b23c-3c6b8261dc5f.PNG)

## Confirmation Email

A confirmation email is sent out to anyone who has booked a slot. We used Mailtrap for this purpose.

![email](https://user-images.githubusercontent.com/74249819/220362389-79222aac-221e-473b-94bf-21aa88850f78.PNG)

## Create new event form
We have made sure 
![create_event](https://user-images.githubusercontent.com/74249819/220362520-2753b237-fa8f-41e0-8179-231ba4076952.PNG)
