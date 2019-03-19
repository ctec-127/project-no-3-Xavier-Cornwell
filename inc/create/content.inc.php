<?php // Filename: connect.inc.php

require_once __DIR__ . "/../db/mysqli_connect.inc.php";
require_once __DIR__ . "/../app/config.inc.php";

$error_bucket = [];

// http://php.net/manual/en/mysqli.real-escape-string.php

if($_SERVER['REQUEST_METHOD']=="POST"){
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
    }
    else {
        $phone = $db->real_escape_string($_POST['phone']);
    }
      //checking if the field is empty for the error bucket
      if (empty($_POST['gpa'])) {
        array_push($error_bucket,"<p>A gpa number is required.</p>");
    } else {
        $gpa = $db->real_escape_string($_POST['gpa']);
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
        $sql = "INSERT INTO $db_table (first_name,last_name,student_id,email,phone,gpa,financial_aid,degree_program,graduation_date) ";
        $sql .= "VALUES ('$first','$last',$sid,'$email','$phone','$gpa','$financial_aid','$degree', $graduation)";

        // comment in for debug of SQL
        // echo $sql;

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
            //unsetting to make so user is able to create multiple new students
            unset($financial_aid);
            unset($degree);
            unset($id);
            unset($graduation);
        }
    } else {
        display_error_bucket($error_bucket);
    }
}

?>
