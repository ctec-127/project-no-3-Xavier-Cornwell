<?php // Filename: connect.inc.php

require_once __DIR__ . "/../db/mysqli_connect.inc.php";
require_once __DIR__ . "/../app/config.inc.php";

$error_bucket = [];

// http://php.net/manual/en/mysqli.real-escape-string.php

if($_SERVER['REQUEST_METHOD']=="POST"){
    // grab primary key from hidden field
    if (!empty($_POST['id'])) {
        $id = $_POST['id'];
    }
    // First insure that all required fields are filled in
    if (empty($_POST['first'])) {
        array_push($error_bucket,"<p>A first name is required.</p>");
    } else {
        $first = $db->real_escape_string(strip_tags($_POST['first']));
    }
    if (empty($_POST['last'])) {
        array_push($error_bucket,"<p>A last name is required.</p>");
    } else {
        $last = $db->real_escape_string(strip_tags($_POST['last']));
    }
    if (empty($_POST['sid'])) {
        array_push($error_bucket,"<p>A student ID is required.</p>");
    } else {
        $sid = $db->real_escape_string(strip_tags($_POST['sid']));
    }
    if (empty($_POST['email'])) {
        array_push($error_bucket,"<p>An email address is required.</p>");
    } else {
        $email = $db->real_escape_string(strip_tags($_POST['email']));
    }
    if (empty($_POST['phone'])) {
        array_push($error_bucket,"<p>A phone number is required.</p>");
    } else {
        $phone = $db->real_escape_string(strip_tags($_POST['phone']));
    }
          //checking if the field is empty for the error bucket
          if (empty($_POST['gpa'])) {
            array_push($error_bucket,"<p>A gpa number is required.</p>");
        } else {
            $gpa = $db->real_escape_string(strip_tags($_POST['gpa']));
        }
        //checking if the field is empty for the error bucket
        if (empty($_POST['financial_aid'])) {
            array_push($error_bucket,"<p>A financial aid info is required.</p>");}
        
    
       //checking if degree is set and setting what ever the value is to the variable
       if(isset($_POST['degree'])){
        $degree = $_POST['degree'];
    } 
    //checking if finicial aid is set and setting the value to the variable for the query
    if(isset($_POST['financial_aid'])){
        $financial_aid = $_POST['financial_aid'];
    } 

    if (empty($_POST['graduation_date'])) {
        array_push($error_bucket,"<p>A graduation date is required.</p>");
    } else {
        $graduation = $db->real_escape_string(strip_tags($_POST['graduation_date']));
    }

    // If we have no errors than we can try and insert the data
    if (count($error_bucket) == 0) {
        // Time for some SQL
        $sql = "UPDATE $db_table SET first_name='$first', last_name='$last', student_id=$sid, email='$email',phone='$phone', gpa='$gpa', financial_aid='$financial_aid', degree_program='$degree', graduation_date='$graduation' WHERE id=$id";

        $result = $db->query($sql);
        if (!$result) {
            echo '<div class="alert alert-danger" role="alert">
            I am sorry, but I could not save that record for you. ' .  
            $db->error . '.</div>';
        } else {
            echo '<div class="alert alert-success" role="alert">
            I saved that new record for you!
          </div>';
            unset($first);
            unset($last);
            unset($sid);
            unset($email);
            unset($phone);
            unset($gpa);
            //unsetting to make sure it is clear incase they want to make another update
            unset($financial_aid);
            unset($degree);
            unset($id);
            unset($graduation);
        }
    } else {
        display_error_bucket($error_bucket);
    } // end of error bucket
} else {
    // check for record id (primary key)
    $id = $_GET['id'];
    // now we need to query the database and get the data for the record
    // note limit 1
    $sql = "SELECT * FROM $db_table WHERE id=$id LIMIT 1";
    // query database
    $result = $db->query($sql);
    // get the one row of data
    while($row = $result->fetch_assoc()) {
        $first = $row['first_name'];
        $last = $row['last_name'];
        $sid = $row['student_id'];
        $email = $row['email'];
        $phone = $row['phone'];

        //added gpa finanical_aid and degree to the program
        $gpa = $row['gpa'];
        $financial_aid = $row['financial_aid'];
        $degree = $row['degree_program'];
<<<<<<< HEAD
        $graduation = $row['graduation_date'];
=======
>>>>>>> a3457de0c05ffc0bf3bb8cc106667d01c5c13b76
    }

}