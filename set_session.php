<?php
/*Cookies and Sessions are used to store information. Cookies are only stored on the client-side machine,
while sessions get stored on the client as well as a server.

Session:A session creates a file in a temporary directory on the server where registered session variables 
and their values are stored. This data will be available to all pages on the site during that visit.
A session ends when the user closes the browser or after leaving the site, the server will terminate the 
session after a predetermined period of time, commonly 30 minutes duration.

Cookies:Cookies are text files stored on the client computer and they are kept of use tracking purpose.
Server script sends a set of cookies to the browser. For example name, age, or identification number etc.
The browser stores this information on a local machine for future use.When next time browser sends any 
request to web server then it sends those cookies information to the server and server uses that information
to identify the user.*/




//setting sessions
session_start();
$_SESSION['name']='Samikshan';



?>