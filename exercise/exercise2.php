<?php
  include_once ('../header.php');
?>

<h1>EXERCISE 2</h1>

<div class="question">
    <p>Task: <br>Create the given pattern (X)<br>
    <pre>
*                   *
  5               5
    *           *
      3       3
        *   *
          1
        *   *
      3       3
    *           *
  5               5
*                   *
    </pre>            
    </p>
</div>

<div class="answer">
  <p style="margin: 0">Result:</p>

  <div class="codeBg">
    <div class="bgPaddings">

      <?php

        echo "<pre>";
        // Starting the outer loop for rows
        for ($row = 1; $row <= 11; $row++) {
            // Starting the inner loop for columns
            for ($col = 1; $col <= 11; $col++) {
                // Checking if the current row and column match the conditions 
                if ($row == $col || $row + $col == 12) {
                    // Checking if the current row and column is 6,6
                    if($row == 6 && $col == 6){
                        echo "1";
                    }
                    // Checking if the current row is 2 or 10
                    elseif($row == 2 || $row == 10){
                        echo "5";
                    } 
                    // Checking if the current row is 4 or 8
                    elseif($row == 4 || $row == 8){
                        echo "3";
                    } 
                    // If none of the above conditions are met
                    else {
                        echo "*";
                    }
                } 
                // If the current row and column do not match the conditions
                else {
                    echo "  ";
                }
            }
            // Creating a new line after each row
            echo "\n";
        }
        // Closing the table
        echo " </pre>";
        
      ?>
      
    </div>
  </div>
</div>

<a href="../index.php" class="home_btn">
    Return to Index
</a>

<?php
  include_once ('../footer.php');
?>



		 
