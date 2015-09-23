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
	<title>Document</title>
<!-- Include the library-->
<?php require('simple_html_dom.php'); ?>

</head>
<body>
<? include('simple_html_dom.php'); ?>


<?php

//read an html file with English words to use for passwords into variable $html
$html = new simple_html_dom('http://www.paulnoll.com/Books/Clear-English/words-03-04-hundred.html');

//print_r($_REQUEST) ;

// Retrieve all li elements from $html and store words in array
foreach($html->find('li') as $e){
	
    
	$words[] = $e-> innertext;
	
}

foreach ($words as $value) {
    //echo $value.'<br>';
}



$numwords = $_GET["numwords"];
$separator = $_GET["separator"];
$endnum= 10;

//randomly select array keys based on number of words
$wordcount = array_rand($words,$numwords);
$newpassword ="";
foreach($wordcount as $value){
	$newpassword .= $words[$value] ;
	
}


//$Password_String =  $newpassword;
$Password_String = trim($newpassword);
$Password_String = preg_replace('/\\s{2,}/', $separator, $Password_String);



//append the number at the end
//$Password_String .=$endnum;

//echo $newpassword.'<br>';
//replace spaces with separator or remove spaces if there are no separators

if ($_GET['AppendNum']== 'on'){
	$AppendNum = rand(0,10);
}

$Password_String = $Password_String.$AppendNum;
$_SESSION['gen_password'] = $Password_String;
$_SESSION['numwords'] = $numwords;
$_SESSION['separator'] = $separator;
header ("location: index.php");
?>

</body>
</html>

