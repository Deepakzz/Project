




<html>
<style>
table {
    border-collapse: collapse;
        width: 100%;
	}
	th, td {
	    font-family: cursive;
	        text-align: left;
		    padding: 8px;
		    }
		    tr:nth-child(even){background-color: #f2f2f2}
		    th {
		        background-color: #4c75af;
			    color: white;
			    }
			    input[type=text]{
			    width: 260px;
			    height: 30px;
			    background: rgba(255, 255, 255,0.6);
			    border: 1px solid rgba(63, 127, 191,0.6);
			    border-radius: 2px;
			    color: #3F7FBF;
			    font-family: 'Exo', sans-serif;
			    font-size: 16px;
			    font-weight: 400;
			    padding: 4px;
			    margin-top: 10px;
			    }

input[type=submit] {
width: 120px;
height: 30px;
background-color: #4c75af;
color: white;
padding: 0px 15px;
margin: -15px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}
input[type=submit]:hover {
background-color: #729edc;
}
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

      </style>
      <body style="background: #d3d3d3">
      <div class="welcome">
      <h1> To do list system</h1>
      <strong> <p> Welcome, <?php $fname = $_SESSION['first_name']; echo
      $fname;?> <?php $lname = $_SESSION['last_name']; echo
      $lname;?></p></strong>
      </div>
      <h3><strong>Task To Complete</strong></h3>
      <table>
      <tr>
      <th style="text-align: center;">Task</th>
      <th style="text-align: center;">Description</th>
      <th style="text-align: center;">Date</th>
      <th style="text-align: center;">Time</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      </tr>
      <?php foreach($result as$res):?>
     <tr>
     <td style="text-align: center;"> <?php echo $res['todo']; ?> </td>
     <td style="text-align: center;"> <?php echo $res['description']; ?> </td>
     <td style="text-align: center;"> <?php echo $res['date']; ?>  </td>
     <td style="text-align: center;"> <?php echo $res['time']; ?> </td>

     <td><form style="margin-top: 15px;" action="index.php" method="post">
      <input type="hidden" name="user_id" value="<?php echo $res['id']; ?>">
      <input style="text-align: center; font-family: cursive;" type="submit"
      value="Delete">
       <input type="hidden" name='action' value="deletetask">
        </form>
	        </td>
       <td><form style="margin-top: 15px;" action="index.php" method="post">
        <input type="hidden" name="user_id" value="<?php echo $res['id']; ?>">
       <input type="submit" style="text-align: center; font-family: cursive;"
       value="Update Status">
       <input type="hidden" name='action' value="statusupdate">
       	</form>
	</td>
        <td>

      <form style="margin-top: 15px;" action="index.php" method= "post">
      <input type="hidden" name= "user_id" value="<?php echo $res['id']; ?>">
      <input type="submit" style="text-align: center;font-family: cursive; " value = "Edit">
       <input type="hidden" name='action' value="edittask">
       </form>
       	</td>
	</tr>  

	<?php endforeach;?>
	 </table>
	 <form style="margin-top:10px;" method = 'post' action='addtask.php'>
	 <br> <input type="submit" style="font-family: cursive;" value="Add Task"/>
         </form>
	  <h3><strong>Completed Task</strong></h3>
	      <table>
	 <tr>
	 <th style="text-align: center;">Task</th>
	 <th style="text-align: center;">Description</th>
	 <th style="text-align: center;">Date</th>
	 <th style="text-align: center;">Time</th>
	 <th>&nbsp;</th>
	</tr>


<?php foreach($result2 as $res2):?>
	   <tr>
	   <td style="text-align: center;"> <?php echo $res2['todo']; ?>  </td>
           <td style="text-align: center;"> <?php echo $res2['description']; ?>  </td>
	   <td style="text-align: center;"> <?php echo $res2['date']; ?>  </td>
           <td style="text-align: center;"> <?php echo $res2['time']; ?>  </td>
	    <td><form style="margin-top: 15px;" action="index.php" method="post">
	    <input type="hidden" name="user_id" value="<?php echo $res2['id']; ?>">
	   <input type="submit" style="font-family: cursive;" value="Delete">
	  <input type="hidden" name='action' value="deletetask">
	  </form>
	  </td>
	   </tr>
	  <?php endforeach;?>
	 </table>

	 </body>
	 </html>
         <?php
	 include('../view/footer.php');
         ?>
