<?php // Filename: form.inc.php ?>

<!-- Note the use of sticky fields below -->
<!-- Note the use of the PHP Ternary operator
Scroll down the page
http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary
-->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <label class="col-form-label" for="first">First Name </label>
    <input class="form-control" type="text" id="first" name="first" value="<?php echo (isset($first) ? $first: '');?>">
    <br>
    <label class="col-form-label" for="last">Last Name </label>
    <input class="form-control" type="text" id="last" name="last" value="<?php echo (isset($last) ? $first: '');?>"">
    <br>
    <label class="col-form-label" for="id">Student ID </label>
    <input class="form-control" type="text" id="id" name="id" value="<?php echo (isset($id) ? $id: '');?>"">
    <br>
    <label class="col-form-label" for="email">Email </label>
    <input class="form-control" type="text" id="email" name="email" value="<?php echo (isset($email) ? $email: '');?>"">
    <br>
    <label class="col-form-label" for="phone">Phone </label>
    <input class="form-control" type="text" id="phone" name="phone" value="<?php echo (isset($phone) ? $phone: '');?>"">
    <br>
    <label class="col-form-label" for="gpa">GPA</label>
    <input class="form-control" type="number" min="0" max="4" id="gpa" name="gpa" value="<?php echo (isset($gpa) ? $gpa: '');?>"">
    <br>
    <label class="col-form-label" for="financial_aid">Financial Aid</label><br>
    <input type="radio" name="financial_aid" value="1" <?php StickySelect('1', 'financial_aid');?>> yes<br>
    <input type="radio" name="financial_aid" value="0" <?php StickySelect('1', 'financial_aid');?>> no<br>
    <br>
    <label class="col-form-label" for="degree">Degree</label>
    <select name="degree">
    <option value="undecided" <?php StickySelect('undecided', 'degree');?>>undecided</option>
    <option value="cs" <?php StickySelect('cs', 'degree');?>>CS</option>
    <option value="bio" <?php StickySelect('bio', 'degree');?>>Bio</option>
    <option value="chem" <?php StickySelect('chem', 'degree');?>>Chem</option>
    <option value="law" <?php StickySelect('law', 'degree');?>>law</option>
    <option value="english" <?php StickySelect('english', 'degree');?>>English</option>
    </select> 
<br>
<br>
    <a href="display-records.php">Cancel</a>&nbsp;&nbsp;    
    <button class="btn btn-primary" type="submit">Save Record</button>
</form>