<?php // Filename: form.inc.php 

function StickySelect($value, $selectName){

    if (isset($_POST["$selectName"])){

        $checker = $_POST["$selectName"];

        if ($checker == $value){

        echo "selected";

        }

    }

}

?>

<!-- Note the use of sticky fields below -->
<!-- Note the use of the PHP Ternary operator
Scroll down the page
http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary
-->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <label class="col-form-label" for="first">First Name </label>
    <input class="form-control" type="text" id="first" name="first" value="<?php echo (isset($first) ? $first : '');?>">
    <br>
    <label class="col-form-label" for="last">Last Name </label>
    <input class="form-control" type="text" id="last" name="last" value="<?php echo (isset($last) ? $last : '');?>"">
    <br>
    <label class="col-form-label" for="sid">Student ID </label>
    <input class="form-control" type="text" id="sid" name="sid" value="<?php echo (isset($sid) ? $sid: '');?>"">
    <br>
    <label class="col-form-label" for="email">Email </label>
    <input class="form-control" type="text" id="email" name="email" value="<?php echo (isset($email) ? $email : '');?>"">
    <br>
    <label class="col-form-label" for="phone">Phone </label>
    <input class="form-control" type="text" id="phone" name="phone" value="<?php echo (isset($phone) ? $phone : '');?>"">
    <br>
    <label class="col-form-label" for="gpa">GPA</label>
    <input class="form-control" type="number" min="0" max="4" id="gpa" name="gpa" value="<?php echo (isset($gpa) ? $gpa: '');?>"">
    <br>
   
   
   
    <label class="col-form-label" for="financial_aid">Financial Aid</label><br>
    <label class="col-form-label">
    <input type="radio" name="financial_aid" value="1" <?php if (isset($_POST['financial_aid']) && $_POST['financial_aid'] == "1") echo 'checked';?>> yes </label><br>
    <label class="col-form-label">
    <input type="radio" name="financial_aid" value="0" <?php if (isset($_POST['financial_aid']) && $_POST['financial_aid'] == "0") echo 'checked';?>> no </label><br>
    <br>
    <label class="col-form-label" for="degree">Degree</label><br>



    <select name="degree" class="form-control">
        <option value="undecided" <?php StickySelect('undecided', 'degree');?>>undecided</option>
        <option value="cs" <?php StickySelect('cs', 'degree');?>>CS</option>
        <option value="bio" <?php StickySelect('bio', 'degree');?>>Bio</option>
        <option value="chem" <?php StickySelect('chem', 'degree');?>>Chem</option>
        <option value="law" <?php StickySelect('law', 'degree');?>>law</option>
        <option value="english" <?php StickySelect('english', 'degree');?>>English</option>
    </select> <br>

    
    <a href="display-records.php">Cancel</a>&nbsp;&nbsp;
    <button class="btn btn-primary" type="submit">Save Record</button>
    <input type="hidden" name="id" value="<?php echo (isset($id) ? $id : '');?>">
</form>