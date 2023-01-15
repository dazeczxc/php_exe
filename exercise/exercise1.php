<?php
    include_once ('../header.php');
?>

<h1>EXERCISE 1</h1>

<div class="question">
    <p>Task: <br>Create the given pattern (Diamond)<br>
    <pre>
       | 
    *  |  * 
  *    |    * 
*      |      * 
  *    |    * 
    *  |  * 
       |
    </pre>
    </p>
</div>

<div class="answer">
    <p style="margin: 0">Result:</p>
 
    <div class="codeBg">
        <div class="bgPaddings">

        <?php
            echo "<table>";
            // loop through each row
            for($row=1; $row<=7; $row++) {
                echo "<tr>";
                // loop through each column
                for($col=1; $col<=7; $col++) {
                    // check for second row, third and fifth column
                    if($row == 2 && ($col == 3 || $col == 5)) {
                        echo "<td style='border: none'>*</td>";
                    } 
                    // check for sixth row, third and fifth column
                    elseif($row == 6 && ($col == 3 || $col == 5)) {
                        echo "<td style='border: none'>*</td>";
                    } 
                    // check for third row, second and sixth column
                    elseif($row == 3 && ($col == 2 || $col == 6)) {
                        echo "<td style='border: none'>*</td>";
                    } 
                    // check for fifth row, second and sixth column
                    elseif($row == 5 && ($col == 2 || $col == 6)) {
                        echo "<td style='border: none'>*</td>";
                    } 
                    // check for fourth row, first and last column
                    elseif($row == 4 && ($col == 1 || $col == 7)) {
                        echo "<td style='border: none'>*</td>";
                    } 
                    // check for middle column
                    elseif($col == 4) {
                        echo "<td style='border: none'>|</td>";
                    } 
                    // if none of the above conditions are met, insert an empty space
                    else {
                        echo "<td style='border: none'>&nbsp;</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
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


 