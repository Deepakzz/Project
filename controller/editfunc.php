<?php
foreach ($result3 as $res3):
endforeach;
?>
<html>
<style>
body{
margin: 0;
padding: 0;
background: #d3d3d3;
color: #fff;
font-family: cursive;
}
input[type=submit] {
width: 120px;
height: 30px;
background-color: #4c75af;
color: white;
padding: 0px 15px;
margin: -15px 70px;
border: none;
border-radius: 4px;
cursor: pointer;
font-family: cursive;
}
input[type=submit]:hover {
background-color: #729edc;
}
h1 {
font-family: cursive;
color: #fff;
text-align: center;
}
.welcome{
background:#4c75af;
}
p {
margin-right: 5px;
font-family: cursive;
color: #fff;
text-align: right;
}
.login1{
position: absolute;
top: calc(20% - 5px);
left: calc(55% - 50px);
background : #fff;
box-shadow: 5px 5px 3px #2A2B2B;
z-index : 5;
color: #4c75af;
height: 400px;
width: 300px;
padding: 10px;
border-radius: 4px;
z-index: 2;
}
.login{
position: absolute;
top: calc(20% - 5px);
left: calc(30% - 50px);
background : #fff;
box-shadow: 5px 5px 3px #2A2B2B;
z-index : 5;
color: #4c75af;
height: 400px;
width: 300px;
padding: 10px;
border-radius: 4px;
z-index: 2;
}
input[type=submit] {
width: 120px;
height: 30px;
background-color: #4c75af;
color: white;
padding: 0px 15px;
margin: -15px 70px;
border: none;
border-radius: 4px;
cursor: pointer;
font-family: cursive;
}
input[type=submit]:hover {
background-color: #729edc;
}
input[type=text]{
width: 260px;
height: 30px;
background: rgba(255, 255, 255,0.6);
border: 1px solid rgba(63, 127, 191,0.6);
border-radius: 4px;
color: #3F7FBF;
font-family: 'Exo', sans-serif;
font-size: 16px;
font-weight: 400;
padding: 4px;
margin-top: 10px;
}
input[type=date]{
width: 260px;
height: 30px;
background: rgba(255, 255, 255,0.6);
border: 1px solid rgba(63, 127, 191,0.6);
border-radius: 4px;
color: #3F7FBF;
font-family: 'Exo', sans-serif;
font-size: 16px;
font-weight: 400;
padding: 4px;
margin-top: 10px;
}
input[type=time]{
width: 260px;
height: 30px;
background: rgba(255, 255, 255,0.6);
border: 1px solid rgba(63, 127, 191,0.6);
border-radius: 4px;
color: #3F7FBF;
font-family: 'Exo', sans-serif;
font-size: 16px;
font-weight: 400;
padding: 4px;
margin-top: 10px;
}
</style>
<body>
<div class="welcome">
<h1>Edit Task</h1>
<strong> <p> Welcome, <?php $fname = $_SESSION['first_name']; echo $fname;?>
<?php $lname = $_SESSION['last_name']; echo $lname;?></p></strong>

</div>

<div class="login">
<h3>Old Values</h3>
<strong>Task: </strong><input type="text" name="" value=" <?php echo
$res3['todo']; ?>"><br>
<strong>Description: </strong><input type="text" name="" value=" <?php echo
$res3['description']; ?>"><br>
<strong>Date: </strong><input type="text" name="" value=" <?php echo
$res3['date']; ?>"><br>
<strong>Time: </strong><input type="text" name="" value=" <?php echo
$res3['time']; ?>"><br>
</div>
<br>
<div class="login1">
 <h3>Enter New Values</h3>

 <form style="margin-top: 15px;" action="index.php" method="post">
  <strong>Task: </strong><input type="text" name="edtask"><br>
   <strong>Description: </strong><input type="text" name="edescription"><br>
    <strong>Date: </strong><input type="date" name="date" ><br>
     <strong>Time: </strong><input type="time" name="time" ><br><br><br>
      <input type="hidden" name="user_id" value="<?php echo $res3['id']; ?>">
       <input type="submit" value="Edit">
        <input type="hidden" name='action' value="etask">
	 </form>
	  </div>


	  </body>
	  </html>

