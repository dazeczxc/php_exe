<?php
    include_once ('../header.php');
?>

<h1>EXERCISE 4</h1>

<div class="question">
    <p>Task: <br>Create the given pattern<br>
    <pre>
1    2    4    8    16
2    6    18   54   162
3    12   48   192  768
4    20   100  500  2500
5    30   180  1080 6480
6    42   294  2058 14406

    </pre>            
    </p>
</div>

<div class="answer">
    <p style="margin: 0">Result:</p>

    <div class="codeBg">
        <div class="bgPaddings">

            <?php
                echo "<table>";
                
                // Loop for creating the rows
                for ($rowIndex = 1; $rowIndex <= 6; $rowIndex++) { 
                    // Output the table row with no border
                    echo "<tr style='border: none'>";
                    // Output the current row index
                    echo "<td style='border: none'>".$rowIndex."</td>";
                    // Calculate the first multiplication
                    $firstMultiplication = $rowIndex*($rowIndex+1);
                    // Output the first multiplication
                    echo "<td style='border: none'>".$firstMultiplication. "</td>";
                    // Calculate the second multiplication
                    $secondMultiplication = $firstMultiplication*($rowIndex+1);
                    // Output the second multiplication
                    echo "<td style='border: none'>".$secondMultiplication. "</td>";
                    // Calculate the third multiplication
                    $thirdMultiplication = $secondMultiplication*($rowIndex+1);
                    // Output the third multiplication
                    echo "<td style='border: none'>".$thirdMultiplication. "</td>";
                    // Calculate the fourth multiplication
                    $fourthMultiplication = $thirdMultiplication*($rowIndex+1);
                    // Output the fourth multiplication
                    echo "<td style='border: none'>".$fourthMultiplication. "</td>";
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
