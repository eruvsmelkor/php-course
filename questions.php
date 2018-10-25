<?php
      $num1 = $_POST['num1'] ? $_POST['num1'] : rand(1,10);
      $num2 = $_POST['num2'] ? $_POST['num2'] : rand(1,10);
      if($_POST['operator']) $operator = $_POST['operator'];
      elseif($type=='%') {
         switch (rand(1,4)) {
            case 1:
               $operator = '+';
               break;
            case 2:
               $operator = '-';
               break;
            case 3:
               $operator = '*';
               break;
            case 4:
               $operator = '/';
               break;
            default:
               $operator = '+';
         }
      } else $operator = $type;
      echo "$num1 $operator $num2 = ??? <br><br>";
?>
      <form method="post" action="/">
         <input type="hidden" name="type" value="<?php echo $type; ?>">
         <input type="hidden" name="num1" value="<?php echo $num1; ?>">
         <input type="hidden" name="num2" value="<?php echo $num2; ?>">
         <input type="hidden" name="operator" value="<?php echo $operator; ?>">
         Answer: <input type="text" name="answer"><br>
         <input type="submit" value="Check Answer">
      </form>