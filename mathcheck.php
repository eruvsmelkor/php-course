<?php
    $division = FALSE;
    switch ($_POST['operator']) {
     case '+':
        $correct_answer = $_POST['num1'] + $_POST['num2'];
        $remainder = FALSE;
        break;
     case '-':
        $correct_answer = $_POST['num1'] - $_POST['num2'];
        $remainder = FALSE;
        break;
     case '*':
        $correct_answer = $_POST['num1'] * $_POST['num2'];
        $remainder = FALSE;
        break;
     case '/':
        $division = TRUE;
        $correct_answer = $_POST['num1'] / $_POST['num2'];
        $simple_answer = intval($_POST['num1'] / $_POST['num2']);
        $remainder = $_POST['num1'] % $_POST['num2'];
        break;
     default:
        $correct_answer = 'Something Broke...';
        $remainder = FALSE;
    }
    $wrong = TRUE;
    if($_POST['answer']==$correct_answer) {
     $wrong = FALSE;
     echo "That's Right! <br><br>";
    } elseif($division) {
     $answer = strtolower($_POST['answer']);
     $answer = str_replace('rem','r',$answer);
     $answer = str_replace('remain','r',$answer);
     $answer = str_replace('remainder','r',$answer);
     $answer = str_replace('q','r',$answer);
     $answer = str_replace('quot','r',$answer);
     $answer = str_replace('quotient','r',$answer);
     $exploded = explode('r',$answer,2);
     if($exploded[0]==$simple_answer && $exploded[1]==$remainder) {
        $wrong = FALSE;
        echo "That's Right! <br><br>";
     }
     $correct_answer = $simple_answer . ' with a Remainder of ' . $remainder;
    } 
    if($wrong) {
     echo "Oops, that was Incorrect. <br>";
     echo "You said: " . $_POST['num1'] . " " . $_POST['operator'] . " " . $_POST['num2'] . " = " . $_POST['answer'] . "<br>";
     echo "But you'd better keep studying, because the correct answer is: <br>";
    }
    echo $_POST['num1'] . " " . $_POST['operator'] . " " . $_POST['num2'] . " " . " = $correct_answer <br><br>";