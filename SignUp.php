<?php
if(isset($_POST['submit'])){


try{
 $conn = new PDO("mysql:host=localhost;dbname=Ocean_Green","cms","adediperhema");
 //echo "connected";
 //var_dump($conn);
 
 

 
 //$results= $statement->fetchAlL(PDO::FETCH_OBJ);

 //$familyMembers =json_encode($results);
 //echo $familyMembers;


 }catch(PDOException $e){
 	echo $e->getMessage();
 	exit();
 }

 	$Username=$_POST['username'];
	$Email=$_POST['email'];
    $Password=$_POST['password'];

$statement= $conn->prepare("insert into users(Username,Email,Password) values(:Username,:Email,:Password)");

$statement->bindParam(':Username', $Username);
$statement->bindParam(':Email', $Email);
$statement->bindParam(':Password', $Password);
$statement->execute();

 //echo "done";


// if($pdoExec)
// {
// 	echo 'Data inserted';
// }else{
// 	echo 'Data not inserted';
// }

	
}
	// $myFriend=array(
	// 	'John',
	// 	'Kate',
	// 	'Gail'
	// );
	// $phpjson = json_encode($myFriend);
	// echo $phpjson;
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post" action="SignUp.php">
                    <label>Full Name</label>
                    <input type="text" name="username" class="inputbox" />
                    <br />

                    <label>Email Address</label>
                    <input type="email" name="email" class="inputbox" />
                    <br />

                    <label>Password</label>
                    <input type="password" name="password" class="inputbox" min="8" max="100"/>
                    <br />

                    <div class="checkbox">
                        <input id="send_updates" type="checkbox" />
                        <label for="send_updates">Send me occasional email updates</label>
                    </div>
                    <div>
                   
                    <div class="action_btns">
                        <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                        <div class="one_half last"><input class="btn btn_red" type="submit" name="submit" value="Sign Up"></div>
                    </div>
                </form>
                </body>
</html> -->