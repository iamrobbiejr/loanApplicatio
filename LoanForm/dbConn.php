<?php

    session_start();

//variable declaration
    $fname = "";
    $lname = "";
    $ID = "";
    $gender = "";
    $dob = "";
    $address = "";
    $los = "";
    $ownership = "";
    $tel = "";
    $cell = "";
    $email = "";
    $errors = array(); 
	$_SESSION['success'] = "";

     $title = "Loan Application";

//connect to db
$db = mysqli_connect('localhost','root', '', 'testlaf');

if (isset($_POST['submit'])) {
    // receive all input values from the form
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $ownership = $_POST['ownership'];
        $address = $_POST['address'];
        $cell = $_POST['cel'];
        $tel = $_POST['tel'];
        $gender = $_POST['gender'];
        $los = $_POST['los'];
        $dob = $_POST['dob'];
        $ID= $_POST['nat_id'];


// form validation: ensure that the form is correctly filled
        if (empty($fname)) { array_push($errors, "Field is required"); }
        if (empty($lname)) { array_push($errors, "Field is required"); }
        if (empty($email)) { array_push($errors, "Field is required"); }
        if (empty($ownership)) { array_push($errors, "Field is required"); }
        if (empty($address)) { array_push($errors, "Field is required"); }
        if (empty($cell)) { array_push($errors, "Field is required"); }
        if (empty($tel)) { array_push($errors, "Field is required"); }
        if (empty($gender)) { array_push($errors, "Field is required"); }
        if (empty($dob)) { array_push($errors, "Field is required"); }
        if (empty($ID)) { array_push($errors, "Field is required"); }
        if (empty($los)) { array_push($errors, "Field is required"); }

// submit application if there are no errors in the form
		if (count($errors) == 0) {

            //Insertion Query
			$query = "INSERT INTO applicants 
                      (fname,lname,nat_id,cell) 
					  VALUES
                      ('$fname', '$lname', '$ID', '$cell')";

            $result = $mysqli->query($query);
            if($mysqli->errno) die($mysqli->error);
                $_SESSION['user_id'] = mysqli_insert_id($mysqli); 
        }
    }          
    //send form by mail     
               ?>

            

