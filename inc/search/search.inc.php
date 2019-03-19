<?php // Filename: connect.inc.php

require_once __DIR__ . "/../db/mysqli_connect.inc.php";
require_once __DIR__ . "/../app/config.inc.php";



// Code to display search results
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // build SQL
    //checking if the form is empty. if it is post null if its not generate a string for the query for search
    if (!empty($_POST["sid"])) {
        $sid = $_POST["sid"];
        $sidSQL = " AND Student_id = " .  '"' . $sid . '"';
    } else {
        $sidSQL = '';
    }

    if (!empty($_POST["first"])) {
        $first = $_POST["first"];
        $firstSQL =  " AND first_name =" . '"' .  $first . '"';
    } else {
        $firstSQL = '';
    }
    //last is disfferent since it is the first query. It is set to not null at the beggining incase there is no last name input
    if (!empty($_POST["last"])) {
        $last = $_POST["last"];
        $lastSQL = '=' . '"' . $last .'"';
    } else {
        $lastSQL = '!=' . '"'. "null" .'"'  ;
    }

    if (!empty($_POST["email"])) {
        $email = $_POST["email"];
        $emailSQL = " AND email =" . '"'. $email . '"';
    } else {
        $emailSQL = '';
    }
    if (!empty($_POST["phone"])) {
        $phone = $_POST["phone"];
        $phoneSQL = " AND phone =" . '"' . $phone .  '"';
    } else {
        $phoneSQL = '';
    }
   
 
    if (!empty($_POST["financial_aid"])) {
        //checking if the value is no because when it was 0 it showed up empty. if the value is no it puts 0 in to the query
        if ($_POST["financial_aid"]=='no') {
            $financial_aidSQL = " AND financial_aid = " . '"' . '0' . '"' ;
        }
        else{
        $financial_aid = $_POST["financial_aid"];
        $financial_aidSQL = " AND financial_aid = " . '"' . $financial_aid . '"' ;
    }
    } 
    else {
        $financial_aidSQL = '';
    }
    if (!empty($_POST["degree"])) {
        $degree = $_POST["degree"];
        $degreeSQL = " AND degree_program = " .  '"' . $degree . '"';
    } else {
        $degreeSQL = '';
    }

    if (!empty($_POST["gpa"])) {
        $gpa = $_POST["gpa"];
        $gpaSQL = " AND gpa >= " .  '"'. $gpa . '"';
    } else {
        $gpaSQL = '';
    }
    if (!empty($_POST["graduation_date"])) {
        $graduation = $_POST["graduation_date"];
        $graduationSQL =" AND graduation_date >= " . '"' . $graduation . '"';
    } else {
        $graduationSQL = '';
    }
//query for the form using concatination
    $sql = "SELECT * FROM $db_table  WHERE last_name". "$lastSQL" . "$firstSQL" . "$sidSQL" . "$emailSQL" . "$phoneSQL" . "$financial_aidSQL".  "$degreeSQL" . "$gpaSQL"  . "$graduationSQL";

    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        echo "<h3 class='alert alert-success mb-4'>$result->num_rows results were found</h3>";
     
            // Code to change showing T / F to Yes / No
            echo '<div class="table-responsive">';
            echo "<table id='table' class=\"table table-striped table-hover table-sm mt-3 table-bordered\">";

            //added sortby gpa financial aid and degree via link by a url query. the a link calles the sort by for sql and creates a slot on the table of the database
            //took out the a tags due to not working, and having the javascript plugin that can work around it.
            echo '<thead class="thead-dark"><tr><th class="bg-primary">Actions</th><th>Student ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Degree</th><th>
            Financial Aid</th><th>GPA</th><th>Graduation Date</th></tr></thead>';
   
            # $row will be an associative array containing one row of data at a time
            while ($row = $result->fetch_assoc()){
                # display rows and columns of data
                echo '<tr>';
                echo "<td><a href=\"update-record.php?id={$row['id']}\">Update</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"delete-record.php?id={$row['id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
                echo "<td>{$row['student_id']}</td>";
                echo "<td><strong>{$row['first_name']}</strong></td>";
                echo "<td><strong>{$row['last_name']}</strong></td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['phone']}</td>";
            
                //calling a query from the sql server and outputting the the resault for the defined table fropm the ctec database
                echo "<td>{$row['degree_program']}</td>";
                echo "<td>{$row['financial_aid']}</td>";
                echo "<td>{$row['gpa']}</td>";
                echo "<td>{$row['graduation_date']}</td>";
                echo '</tr>';
            } // end while
            // closing table tag and div
            echo '</table>';
            echo '</div> ';
            //echoing out javascript to send the user to the bottom of the page when the post is made
            echo '<script type="text/javascript">location.href = "advanced-search.php#table";</script>';
            ?>
        </table>
        <?php
    } else {
        echo "<h3 class=\"mt-5\">Rut-roh. No data was found for your query.</h3>";
    }

}
?>

