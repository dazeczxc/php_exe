<?php
    include_once ('../header.php');
?>

<h1>EXERCISE 3</h1>

<div class="question">
    <p>Task: <br>Create the given pattern<br>
            <pre>
1
2  4
3  6  9
4  8  12  16
5  10 15  20  25
4  8  12  16
3  6  9
2  4
1
        </pre>            
    </p>
</div>

<div class="answer">
    <p>Result:</p>

    <div class="codeBg">
        <div class="bgPaddings">
            <table>

            <?php

                // Loop for creating the rows
                for ($i = 1; $i <= 5; $i++) {
                    echo "<tr>";
                    // Loop for creating the columns
                    for ($j = 1; $j <= $i; $j++) {
                        // Multiply the current row and column to get the cell value
                        $cellValue = $i * $j;
                        // Output the cell value with no border
                        echo "<td style='border: none'>" . $cellValue . "&nbsp</td>";
                    }
                    echo "</tr>";
                }

                // Loop for creating the rows in reverse order
                for ($i = 4; $i >= 1; $i--) {
                    echo "<tr>";
                    // Loop for creating the columns
                    for ($j = 1; $j <= $i; $j++) {
                        // Multiply the current row and column to get the cell value
                        $cellValue = $i * $j;
                        // Output the cell value with no border
                        echo "<td style='border: none'>" . $cellValue . "&nbsp</td>";
                    }
                    echo "</tr>";
                }
                
            ?>

            </table>
        </div>
    </div>

</div>

<a href="../index.php" class="home_btn">
    Return to Index
</a>

<?php
    include_once ('../footer.php');
?>


 