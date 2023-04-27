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
width: 300px;
min-height: 100%;
left:0px;
top: 0px;
bottom:0px;
background: #FAFF00;
}

/* Group 1 - Side Bar Hyperlink Nav Container */

#SideBarNavCon{
position: absolute;
right:10px;
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
/* End of Group 1 - Side Bar Hyperlink Nav Container */

/*content*/
.container {
    width: 80%;
    height: 100%;
    margin: 0 auto;
    background-color: #fff;
}
/*end of content*/

/*Search buttons*/
.search-container {
	position: absolute;
	width: 667px;
	height: 48px;
	left: calc(100% - 667px - 20px);
	top: 20px;
	background: #FFFFFF;
	box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
	border-radius: 30px;
	display: flex;
	align-items: center;
  }
  
  .search-input {
	flex-grow: 1;
	height: 100%;
	border: none;
	border-radius: 30px;
	padding: 0 10px;
	outline: none;
  }
  
  .search-button {
	background: none;
	border: none;
	height: 100%;
	padding: 0 20px;
	cursor: pointer;
  }
  
  .search-button img {
	height: 24px;
	width: 24px;
  }
  /*End Search buttons*/

  
  

</style>
</head>
<body>

/*Yellow part*/
<div id ="SideBarBG">
<div style="display: flex; flex-direction: column; align-items: center;">
<img src=".admin/assets/images/logobrgy.png" style="width:200px; height:200px;">
<p style="width: 188px; height: 42px; font-family: 'Inter'; font-style: italic; font-weight: 700; font-size: 35px; line-height: 42px; color: #1B0D55;">Pengson, J</p>
<p styles="width: 75px; height: 30px; font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 25px; line-height: 30px; color: #5C5C5C;">Admin</p>
</div>

<ul id="sideBarNavCon">
<li><a class="sideBarLink" href="patientSA.php">Send Request Form</a></li>

<li style="  background-color:#02075d; font-size: 25px; color:white; padding:10px;">Sent Appointment</li>

<li><a class="sideBarLink" href="patientindex.php">Center Homepage</a></li>

<li><a class="sideBarLink" href="dummy">Mapulang Lupa HP</a></li>
</ul>

</div>

/*White side of the page*/
<div calss="container">
<h1 style="position: absolute; width: 564px; height: 61px; left: calc(50% - 564px/2 - 255px); top: calc(50% - 61px/2 - 455px); font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 50px; line-height: 61px; color: #140748;">Appointment Requests</h1><br>
<h1 style="position: absolute; width: 564px; height: 61px; left: calc(50% - 564px/2 - 255px); top: calc(50% - 61px/2 - 455px); font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 24px; line-height: 200px; color: #000000; font-style: italic;">See Request from Patients.</h1><br>    

<div class="search-container">
  <input type="text" class="search-input" placeholder="Search Patien's Name">
  <button class="search-button">
    <img src="./images/search.png" alt="Search">
  </button>
</div>


<button style="position: absolute; width: 258px; height: 56px; left: 359px; top: 267px; font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 30px; line-height: 36px; text-align: center; color: #FFFFFF; background-color: #4BCF49; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 50px;">Approved</button>
<button style="position: absolute; width: 258px; height: 56px; left: 651px; top: 267px; font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 30px; line-height: 36px; text-align: center; color: #FFFFFF; background-color: #CFCA49; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 50px;">Pending</button>
<button style="position: absolute; width: 258px; height: 56px; left: 943px; top: 270px; font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 30px; line-height: 36px; text-align: center; color: #FFFFFF; background-color: #CF7949; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 50px;">Reschedule</button>
<button style="position:absolute; width:258px; height:56px; left:1235px; top:270px; font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 30px; line-height: 36px; text-align: center; color: #FFFFFF; background-color:#CF4949; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 50px;">Cancelled</button>



</div>

</body>
</html>
