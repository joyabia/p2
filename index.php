<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>
<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	 
	<title>Joy's xkcd password gen</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="p3.css">

</head>
<body>
<div class="container">
<!--this is the heading of the document-->
  <h1 id="header">  Joy's XKCD Password Generator</h1>
<!--end heading-->

<!--this is the sidebar where I explain how the xkcd generator works-->
  <div class="col-md-4" id="section-left">
  <div id="box">
	<h3 id="header_sidebar"> How Joy's XKCD Password Generator Works</h3>
  <p id="text_sidebar">The concept of XKCD passwords, is to generate passwords that
  are easier for humans to remember but more difficult for computers to crack.  
  Difficult passwords translates to written down passwords which pose security risks.</p>
  <p> An example of the relative strength of xkcd passwords compared to other forms
  can be seen here: <a href="https://xkcd.com/936/">Relative Strength of XKCD passwords </a></p>

  <p>The XKCD Password generator, generates a password  that is a combination of english words. 
  The user choses the Number of words by entering a number in the field "Number of Words". 
  The user elects to include special character separators. The user can also decide to 
  append a number to the password. </p>
  </div><!--close box-->
  </div><!--close box-sidebar-left-->
<!--close section-left-->

<!--form section-->
  <div class="col-md-6" >
  <div class="row" id="password_gen">
<form class="form-horizontal" action="logic.php" method="get">


  <div class="form-group">
    <label class="label-class">Generated Password:</label>
    <input type="text" class="form-control" name="gen_password" value="<?php if(isset($_SESSION['gen_password'])) echo $_SESSION['gen_password'];?>" id="gen_password" placeholder="copy generated password from here" readonly>
  
  </div><!--close div for gen password field-->

  <div class="form-group">
   
<label class="label-class"> Number of words:</label>
<input type="text" class="form-control" name="numwords" id="numwords" placeholder="3" onfocus="this.placeholder='';" required>
  </div><!--close div for number of words field-->


<!--include a special character-->
  <div class="form-group">
    <label class="label-class"> Include a separator (+, #, -,...):</label>
    <select class="form-control" name="separator">
      <option></option>
      <option>-</option>
      <option>+</option>
      <option>$</option>
      <option>=</option>
      <option>%</option>
      <option>#</option>
    </select>
  </div>

  <!--Ask if user wants a number appended to the password -->
 <div class="form-group">
 <div class="checkbox">
  <label class="label-class">
    <input type="checkbox" name="AppendNum">
    Append a number(1-10)?
  </label>
</div>
</div>


<div class ="row" id="button_div">
  <button type="submit" class="btn btn-primary">Submit</button>
</div><!--close button div-->

</form>

</div><!-- close row form section-->


  <div class="col-md-2">
  </div><!--close col-sm-2-->
  
</div><!--close container class-->


</div>
</body>
</html>