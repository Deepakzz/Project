<html>
<style>
.welcome{
background:#4c75af;
}
h1 {
font-family: cursive;
color: #fff;
text-align: center;
}
h3 {
font-family: cursive;
text-align: center;
}
p {
margin-right: 5px;
font-family: cursive;
color: #fff;
text-align: right;
}
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
.grad{
position: absolute;
top: 135px;
left: 700px;
right: 400px;
bottom: 500px;
width: 500px;
height: 300px;
background: -webkit-gradient(linear, left top, left bottom,
color-stop(0%,rgba(0,0,0,0.29)), color-stop(100%,rgba(0,0,0,0.65)));
z-index: 1;
opacity: 0.7;
}
.login{
position: absolute;
top: calc(20% - 5px);
left: calc(45% - 50px);
background : #fff;
box-shadow: 5px 5px 3px #2A2B2B;
z-index : 5;
color: #4c75af;
height: 400px;
width: 300px;
padding: 10px;
border-radius: 4px;
z-index: 2
}

</style>
<body>
<div class="welcome">
<h1>Add Task</h1>

</div>
<div class="login">
<form style="margin-left:18px;" method = 'post' action='index.php'>
<strong> Task:- </strong><br> <input type='text' name='task'/><br><br>
<strong> Description:- </strong><br> <input type='text'
name='description'/><br><br>
<strong> Date:- </strong><br> <input type="date" name = "datetodo"><br><br>
<strong> Time:- </strong><br> <input type="time" name="timetodo"><br><br>
<input type="hidden" name="userid" value="<?php echo $_COOKIE['my_id']; ?>">
<input type = 'hidden' name = 'action' value='addtask'><br>
<input type="submit" value="Add Task"/>
</form>
</div>
</body>
</html>














