<?php
   function addTodoItem($user_id,$description,$task,$date,$time,$status){
     global $db;
     $query = 'insert into todo_things(todo, user_id, status, description, date, time) values (:task,
     :userid, :status, :todo_text, :date, :time)';
     $statement = $db->prepare($query);
     $statement->bindValue(':userid',$user_id);
     $statement->bindValue(':todo_text',$todo_text);
     $statement->bindValue(':task',$task);
     $statement->bindValue(':date',$date);
     $statement->bindValue(':time',$time);
     $statement->bindValue(':status',$status);
     $statement->execute();
     $statement->closeCursor();
    
    }

function updateStatus($status,$id){
        global $db;
	$query = 'update todo_things set status = :status where id = :id';
			$statement = $db->prepare($query);
				$statement->bindValue(':status',$status);
					$statement->bindValue(':id',$id);
						$statement->execute();
							$statement->closeCursor();
								return true;

}								
     function deleteTask($taskid){
     global $db;
     $query = 'delete from todo_things where id = :task';
     $statement = $db->prepare($query);
     $statement->bindValue(':task',$taskid);
     $statement->execute();
     $statement->closeCursor();
     return true;


    }
   function getTodoItems($user_id){
     global $db;
     $query = 'select * from todo_things where user_id= :userid and status = :status';
     $statement = $db->prepare($query);
     $statement->bindValue(':userid',$user_id);
     $statement->bindValue(':status','incomplete');
     $statement->execute();
     $result= $statement->fetchAll();
     $statement->closeCursor();
     return $result;
    }
    function completedItems($user_id){
    global $db;
    $query = 'select * from todo_things where user_id= :userid and status = :status';
    $statement = $db->prepare($query);
    $statement->bindValue(':userid',$user_id);
    $statement->bindValue(':status','complete');
    $statement->execute();
    $result= $statement->fetchAll();
    $statement->closeCursor();
    return $result;
    }
    function editValue($etask,$edescription,$edate,$etime,$eid){
    global $db;
    $query = 'update todo_things set todo = :etask, description = :edescription, date = :etime, time = :edate where id = :eid';
    $statement = $db->prepare($query);
    $statement->bindValue(':etask',$etask);
    $statement->bindValue(':eid',$eid);
    $statement->bindValue(':edescription',$edescription);
    $statement->bindValue(':edate',$edate);
    $statement->bindValue(':etime',$etime);
    $statement->execute();
    $statement->closeCursor();
    return true;
    }
    function getTask($editid){
    global $db;
    	$query = 'select * from todo_things where id = :eid';
	$statement = $db->prepare($query);
	$statement->bindValue(':eid',$editid);
	$statement->execute();
        $result= $statement->fetchAll();
	$statement->closeCursor();
	return $result;
   }
      function registerUser($fname,$lname,$contact,$email,$username,$password,$birth,$gender){
      global $db;
      $query = 'select * from Client where username = :uname';
      $statement = $db->prepare($query);
      $statement->bindValue(':uname',$username);
      $statement->execute();
      $result = $statement->fetchAll();
      $statement->closeCursor();
      $count= $statement->rowCount();
      if($count > 0){
      return true;
     }
   else{
     $query = 'insert into Client(first_name,last_name,contact_no,email,username,password,birth,gender)
                values
	       (:fname,:lname,:cont,:emailid,:uname,:pass,:birth,:gender)';
      $statement = $db->prepare($query);
      $statement->bindValue(':fname',$fname);
      $statement->bindValue(':lname',$lname);
      $statement->bindValue(':cont',$contact);
      $statement->bindValue(':emailid',$email);
      $statement->bindValue(':uname',$username);
      $statement->bindValue(':pass',$password);
      $statement->bindValue(':birth',$birth);
      $statement->bindValue(':gender',$gender);
      $statement->execute();
      $statement->closeCursor();
      return false;
	 }
       
    }
   
   function isUserValid($username,$password){
     global $db;
     $query = 'select * from Client where email_id = :name and 
     password = :pass';
     $statement = $db->prepare($query);
     $statement->bindValue(':name',$username);
     $statement->bindValue(':pass',$password);
     $statement->execute();
     $result= $statement->fetchAll();
     $statement->closeCursor();

     $count = $statement->rowCount();
     if($count == 1){
       setcookie('login',$username);
       setcookie('my_id',$result[0]['id']);
       setcookie('my_name',$result[1]['first_name']);
       setcookie('islogged',true);
       return true;
     }else{
       unset($_COOKIE['login']);
       setcookie('login',false);
       setcookie('islogged',false);
       setcookie('id',false);
       return false;
     }

   }

?>
