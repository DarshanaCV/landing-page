<?php 

    $sname= "localhost";
    $unmae= "root";
    $password = "";

    $db_name = "travel_vibe";

    $conn = mysqli_connect($sname, $unmae, $password, $db_name);

    if (!$conn) {
        echo "Connection failed!";
    }

    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

    $name= $email = $message = "";
        $name=validate($_POST["name"]);
        $email=validate($_POST["email"]);
        $message=validate($_POST["message"]);


    if (empty($name)) {
		header("Location: index.php?error=Name is required");
	    exit();
	}
	else if(empty($email)){
        header("Location: index.php?error=Email is required");
	    exit();
	}
    else if(empty($message)){
        header("Location: index.php?error=Message is required");
    }
    else{
        $sql = "INSERT INTO users(name, email, message) VALUES('$name', '$email', '$message')";
        $result = mysqli_query($conn, $sql);
        if ($result){
           	header("Location: index.php?success=Your data has been submitted successfully");
	        exit();
        }
		else {
	        header("Location: index.php?error=unknown error occurred&$uname");
		    exit();
        }
    }
?>