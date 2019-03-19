<?php // Filename: form.inc.php 

//sticky select function that gets the value and the place its from and if it is checked selected is set by that value
function StickySelect($value, $selectName){

    if (isset($_POST["$selectName"])){

        $checker = $_POST["$selectName"];

        if ($checker == $value){

        echo "selected";

        }

    }

}

//fucntion that gets the post of the name and then playses an checked for the radio button
function StickyRadio($value, $selectName){

    if (isset($_POST["$selectName"])){

        $checker = $_POST["$selectName"];

        if ($checker == $value){

        echo "checked";

        }

    }

}

?>

<!-- Note the use of sticky fields below -->
<!-- Note the use of the PHP Ternary operator
Scroll down the page
http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary
-->
<form class = "text-left border border-light p-5" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <label class="col-form-label" for="first">First Name </label>
    <input class="form-control" type="text" id="first" name="first" value="<?php echo (isset($first) ? $first : '');?>">
    <br>
    <label class="col-form-label" for="last">Last Name </label>
    <input class="form-control" type="text" id="last" name="last" value="<?php echo (isset($last) ? $last : '');?>">
    <br>
    <label class="col-form-label" for="sid">Student ID </label>
    <input class="form-control" type="text" id="sid" name="sid" value="<?php echo (isset($sid) ? $sid: '');?>">
    <br>
    <label class="col-form-label" for="email">Email </label>
    <input class="form-control" type="text" id="email" name="email" value="<?php echo (isset($email) ? $email : '');?>">
    <br>
    <label class="col-form-label" for="phone">Phone </label>
    <input class="form-control" type="text" id="phone" name="phone" value="<?php echo (isset($phone) ? $phone : '');?>">
    <br>
    <label class="col-form-label" for="gpa">GPA</label>
    <input class="form-control" type="number" min="0" max="4" id="gpa" name="gpa" value="<?php echo (isset($gpa) ? $gpa: '');?>">
    <br>
   
   
   
    <label class="col-form-label" for="radio1">Financial Aid</label><br>
    <label class="col-form-label">
    <input type="radio" name="financial_aid"  value="1" id='radio1'  > yes </label><br>
    <label class="col-form-label">
    <input type="radio" name="financial_aid"  value="no" id='radio2' > no </label><br>
    <br>
    
    
    
    <label class="col-form-label" for="degree">Degree</label><br>


    <select name="degree" id="degree" class="form-control">
        <option value="" <?php StickySelect('', 'degree');?>>none</option>
        <option value="undecided" <?php StickySelect('undecided', 'degree');?>>undecided</option>
        <option value="cs" <?php StickySelect('cs', 'degree');?>>CS</option>
        <option value="bio" <?php StickySelect('bio', 'degree');?>>Bio</option>
        <option value="chem" <?php StickySelect('chem', 'degree');?>>Chem</option>
        <option value="law" <?php StickySelect('law', 'degree');?>>law</option>
        <option value="english" <?php StickySelect('english', 'degree');?>>English</option>
    </select> <br>
    <label class="col-form-label" " for="graduation_date">Graduation Date:</label><br>
    <input id="graduation_date" type="date" name="graduation_date" class="form-control" value="<?php echo (isset($graduation) ? $graduation: '');?>">
    <br>
    <button  class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Search</button>
    <button class="btn btn-outline-secondary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="reset">Reset</button>

    <input type="hidden" name="id" value="<?php echo (isset($id) ? $id : '');?>">
</form>