<!DOCTYPE html> 
<html lang = "en">
 
   <head>
<title> Lean Carreon </title>

<style>
ul
	{
    list-style-type:none;
	}
.oo {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

#myform {
	color: white;
}

.error {
	color : red;
}

a{
	color: white;
	text-decoration: none;
}

a:hover {
	color: red;
}

.uuu{
	color: White;
    width: 60%;
	border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
	border-collapse: collapse;
	
}
</style>
</head>
	
<body bgcolor="#0E3468">
<A NAME="Home"><
<center>
<div> <img src="<?php echo base_url(); ?>Pics/Finlstep.gif" width="1000px" height="180px"> </div>
<center>
<br>
     <h1><font color="White">Lean Nasser Q. Carreon </h1> 
    <center>
<nav class="nav">
<ul id="navmenu">
<table class="oo" width="500">
  <tr>
    <th> <button type="button" onclick="document.getElementById('Favorite Websites').style.display='table-cell'">Favorite Websites</button></th>
    <th><button type="button" onclick="document.getElementById('Hobbies').style.display='table-cell'">Hobbies</button></th>
    <th><button type="button" onclick="document.getElementById('Interests').style.display='table-cell'">Interest</button></th>
  </tr>
  <tr>
    <td id="Favorite Websites" style="display:none"><a href="#Favorite Website"><font color="White"><u>Facebook, Twitter, Moodle</u></td>
    <td id="Hobbies" style="display:none"><a href="#Hobby"><font color="White"><u>Basketball, Working out, Dota 2</u></td>
    <td id="Interests" style="display:none"><a href="#Interest"><font color="White"><u>Cars, Shoes, Laptops</u></td>
  </tr>
</table>
  <a href="#Home"><font color="White"><u>Home</u></a>
  <a href="#About Me"><font color="White"><u>About Me</u></a>
  <center>
<h1><a href = "<?php echo base_url(); ?>index.php/users/add_view"><u>Create Database</u></a></h1>
</center>
      
		
      <table class="uuu" border = "1"> 
         <?php 
            $i = 1; 
            echo "<tr>"; 
            echo "<td>User Id</td>"; 
            echo "<td>Complete Name</td>"; 
            echo "<td>Nickname</td>"; 
            echo "<td>Email Address</td>";
            echo "<td>Home Address</td>";
            echo "<td>Sex</td>"; 
            echo "<td>Cellphone No.</td>"; 
            echo "<td>Edit</td>"; 
            echo "<td>Delete</td>"; 
            
            echo "<tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$r->user_id."</td>"; 
               echo "<td>".$r->complete_name."</td>"; 
               echo "<td>".$r->nick."</td>"; 
               echo "<td>".$r->eadd."</td>"; 
               echo "<td>".$r->address."</td>"; 
               echo "<td>".$r->sex."</td>"; 
               echo "<td>".$r->no."</td>"; 
               echo "<td><a href = '".base_url()."index.php/users/edit/"
                  .$r->user_id."'><u>Edit</u></a></td>"; 
               echo "<td><a href = '".base_url()."index.php/users/delete/"
                  .$r->user_id."'><u>Delete</u></a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
</ul>
</nav>
</center>
	Trivia about my Interest/Hobbies or myself
 <p id="Trivia">Click for a Trivia.</p>
<button type="button" onclick="document.getElementById('Trivia').innerHTML = 'I  always play Basketball!'">Click For A Trivia!</button>
<button type="button" onclick="document.getElementById('Trivia').innerHTML = 'I  always play Dota 2'">Click For A Trivia!</button>
<button type="button" onclick="document.getElementById('Trivia').innerHTML = 'Im  always active in Facebook!'">Click For A Trivia!</button>
<button type="button" onclick="document.getElementById('Trivia').innerHTML = 'I  like shoes!'">Click For A Trivia!</button>
<button type="button" onclick="document.getElementById('Trivia').innerHTML = 'I  like cars!'">Click For A Trivia!</button>

<p><b>Tip:</b> Underlined words are Clickable</p>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<A NAME ="Favorite Website" align="left">
<div> <font size="36"><h1><big>FAVORITE WEBSITES</big></h1></font></div>
<ul><li><a href="#Home"><font color="White" align="left" ><u>Home</u></a></li></ul>
<p align="left">
<a href="https://twitter.com/LeanSanity123"><img src="<?php echo base_url(); ?>Pics/Twitter.png"width=310px" height=310">
</a>
<a href="https://www.facebook.com/Wewertt"> <img src="<?php echo base_url(); ?>Pics\Facebook.jpg"width=310px" height=310"> 
</a>
<a href="http://moodle2.apc.edu.ph/user/profile.php?id=8229"> <img src="<?php echo base_url(); ?>Pics\Moodle.png">
</a>
</p>
Tip: Click the Picture if you want to be directed to the Website.
<br>
<A NAME="Hobby"align="left">
<div> <font size="36"><h1><big>HOBBIES</big></h1></font> </div>
<ul><li><a href="#Home"><font color="White"><u>Home</u></a></li></ul>
<img src="<?php echo base_url(); ?>Pics\Basketball.JPG"width=310px" height=410">
<img src="<?php echo base_url(); ?>Pics\Dota.jpg"width=510px" height=410">
<img src="<?php echo base_url(); ?>Pics\workout.jpg"width=330px" height=410">
<br>
<A NAME="Interest"align="left">
<div> <font size="36"><h1><big>INTEREST</big></h1></font> </div>
<ul><li><a href="#Home"><font color="White"><u>Home</u></a></li></ul>
<img src="<?php echo base_url(); ?>Pics\car.JPG"width=410px" height=410">
<img src="<?php echo base_url(); ?>Pics\shoes.jpg"width=410px" height=410">
<img src="<?php echo base_url(); ?>Pics\laptop.jpg"width=410px" height=410">
<br>
<A NAME="About Me"align="left">
<div> <font size="36"><h1><big>About Me</big></h1></font> </div>
<ul><li><a href="#Home"><font color="White"><u>Home</u></a></li></ul>
<p align="left>
<br>
<font size="36"><br></font>
<font size="36">Full name: Lean Nasser Quiles Carreon<br></font>
<font size="36">Nickname: Lee<br></font>
<font size="36">Address: Taguig City<br></font>
<font size="36">School: Asia Pacific College<br></font>
<font size="36">Course: BSIT-MI<br></font>
</p>
<br>

<div id="phpform">
		
   </body>
	
</html>