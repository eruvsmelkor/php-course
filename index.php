<?php
   require 'header.php';
   if($_POST['num1']&&$_POST['num2']&&$_POST['operator']&&is_numeric($_POST['answer'])) require 'mathcheck.php';
   elseif($_POST['type']) $type = $_POST['type'];
   elseif(isset($_POST['addition'])) $type = '+';
   elseif(isset($_POST['subtraction'])) $type = '-';
   elseif(isset($_POST['multiplication'])) $type = '*';
   elseif(isset($_POST['division'])) $type = '/';
   elseif(isset($_POST['random'])) $type = '%';
   if(!isset($type)) echo 'Please choose one of the available options to generate a practice question.';
   else require 'questions.php';
   include 'footer.php';
?>