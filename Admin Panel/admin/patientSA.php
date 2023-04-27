<html>
<head>
<title>PatientView - Book Appointment</title>

<style>
ul{
list-style-type:none;
}

html, body{
height:100%;
font-family: 'Arial';
border: none;
}

/* Rectangle 3 - Side Bar Background */

#SideBarBG{
position: absolute;
width: 298px;
min-height: 100%;
left:0px;
top: 0px;
bottom:0px;
background: #FAFF00;
}
/* Group 1 - Side Bar Hyperlink Nav Container */

#SideBarNavCon{
position: absolute;
right:0px;
top: 65%;
width:100%;
}

/*Side Bar Hyperlink CSS*/
li .sideBarLink{
    display:block;
	color:#02075d;
	font-size: 25px;
	background: #FAFF00;
	border:none;
	text-decoration:none;
	padding:10px;
	width:100%;
	right:30px;
	
}
li .sideBarLink:hover{
    background-color:#4045a3;
	color:white;
	padding:10px;
	
}




/*Rectangle 5 - Text Box Field Container */
#TextBoxContainer{
position: absolute;
width: 70%;
height: 72%;
left: 24%;
top: 18%;
padding: 15px;
background: #16224E;
}
/* Rectangle 10 - Message Box */

#Msg{
position: absolute;
width: 750px;
height: 120px;
left: 25%;
top:  62%; 

background: #FFFFFF;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 20px;
border: none;
padding:7px;
}
/* Rectangle 9 - Date Today Box */

#Date{
position: absolute;
width: 750px;
height: 55px;
left: 25%;
top: 46.5%;

background: #FFFFFF;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 20px;
border: none;
padding:7px;
}
/* Rectangle 8  - Mobile Number Box */

#MobNum{
position: absolute;
width: 750px;
height: 55px;
left: 25%;
top: 32%;

background: #FFFFFF;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 20px;
border: none;

font-size:24px;
padding:7px;
}
/* Rectangle 7  - Email Textbox */

#Email{
position: absolute;
width: 750px;
height: 55px;
left: 25%;
top: 18%;

background: #FFFFFF;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 20px;
border: none;

font-size:24px;
padding:7px;
}
/* Rectangle 6 - FullName TextBox */

#FullName{
position: absolute;
width: 750px;
height: 55px;
left: 25%;
top: 4.3%;

background: #FFFFFF;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 20px;
border: none;

font-size:24px;
padding:7px;

color: white;
}
/*
----Cut code, recycle nalang pagtrip----
/* Rectangle 31 - WalkIn Button 

.WalkInBTN{
position: absolute;
width: 210px;
height: 80px;
left: 575px;
top: 33px;

background: #F09191;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 0px 50px 50px 0px;
border: none;

font-style: normal;
font-weight: 400;
font-size: 35px;
line-height: 61px;

color: #FFFFFF;
}

.WalkInBTN:hover{
background: #d98484;
}

.WalkInBTN:active{
background: #bf7575;
}
/* Rectangle 30 - Request Button */

/*.RequestBTN{
position: absolute;
width: 210px;
height: 80px;
left: 353px;
top: 33px;

background: #91A6F0;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 50px 0px 0px 50px;
border: none;

font-style: normal;
font-weight: 400;
font-size: 35px;
line-height: 61px;

color: #FFFFFF;
}

.RequestBTN:hover{
background: #8497d9;
}

.RequestBTN:active{
background: #6472a3;
}
----Cut code, recycle nalang pagtrip----
*/

/* Rectangle 25 - Send Appointment Button*/

input.SendButton{
position: absolute;
width: 550px;
height: 50px;
left: 26%;
top: 94%;

background: #4BCF49;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 50px;
border: none;

font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 30px;

color: #FFFFFF;
}
input.SendButton:hover{
background: #43b541;
}

input.SendButton:active{
background: #379136;
}

h1 {
	color: white;
}

/*
Notes:
April 16, 2023 - HTML Elements nalang dagdag

*/
</style>
</head>
<body>
<!-- 
	//Tabi lang imbis na delete
<button class="RequestBTN">Request</button>
<button class="WalkInBTN">Walk - IN</button>

-->  
<p style="position: absolute; font-size: 40px; left: 24.5%; line-height:30px; font-weight:bold; color: #140748;">Send A Request Form</p>
<p style="position: absolute; font-size: 17px; left: 24.5%; top:75px;"><i>Book an appointment with a given doctor</i></p>
<!-- Eto yung sidebar-->
<div id ="SideBarBG">
<center><img src ="./assets/images/logobrgy.png" style="width:200px; height:200px;"></center>

<?php
$name = "Peng Son"; //Dito yung name ng account I guess, kayo na kung trip niyo ibahin -Recto

echo "<p><center>$name</center></p>" ;
echo "<p><center>Patient</center></p>" ;
?>

<ul id="sideBarNavCon">
<li style="  background-color:#02075d; font-size: 25px; color:white; padding:10px;">Send Request Form</li>

<li><a class="sideBarLink" href="patientSentAppointment.php">Sent Appointments</a></li>

<li><a class="sideBarLink" href="patientindex.php">Center Homepage</a></li>

<li><a class="sideBarLink" href="dummy">Mapulang Lupa HP</a></li>
</ul>

</div>
<!--SideBar End-->


<div id="TextBoxContainer">
	
<form>
<h1>Full Name</h1> <input type ="text" id="FullName">
<br>

<h1>E-mail</h1><input type ="text" id="Email">
<br>

<h1>Mobile Number</h1><input type ="number" id="MobNum">
<br>

<h1>Date Today</h1><input type ="text" id="Date">
<br>
<h1>Message</h1><input type ="text" id="Msg">

<input type="button" class="SendButton" value="Send Appointment" >
</form>

</div>






</body>
</html>