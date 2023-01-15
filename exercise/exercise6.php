<?php
    include_once ('../header.php');
?>

<h1>EXERCISE 6</h1>

<div class="question">
    <p>Task: <br>Manipulation of multidimensional array</br>
                ● Create a 4x4 table</br>
                ● Generate a random number from 1 - 100</br>
                ● The number generated should always be unique</br>
                ● Sum up the number per column and row<br>  
    </p>

    <table>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td style="border: none;">10</td>
  </tr>
  <tr>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td style="border: none;">26</td>
  </tr>
  <tr>
    <td>9</td>
    <td>10</td>
    <td>11</td>
    <td>12</td>
    <td style="border: none;">42</td>
  </tr>
  <tr>
    <td>13</td>
    <td>14</td>
    <td>15</td>
    <td>16</td>
    <td style="border: none;">58</td>
  </tr>
  <tr>
  <td style="border: none;">28</td>
  <td style="border: none;">32</td>
  <td style="border: none;">36</td>
  <td style="border: none;">40</td>
  </tr>
</table>

</div>

<div class="answer">
    <p>Result:</p>

    <div class="codeBg">

        <?php
            function createTable() {
                $table = array();
                $randomNumbers = range(1, 100);
                shuffle($randomNumbers);

                // Create a 4x4 table with unique random numbers
                for ($rowIndex = 0; $rowIndex < 4; $rowIndex++) {
                    for ($colIndex = 0; $colIndex < 4; $colIndex++) {
                        $table[$rowIndex][$colIndex] = array_pop($randomNumbers);
                    }
                }

                // Sum up the numbers per column
                $colSums = array();
                for ($colIndex = 0; $colIndex < 4; $colIndex++) {
                    $colSums[$colIndex] = 0;
                    for ($rowIndex = 0; $rowIndex < 4; $rowIndex++) {
                        $colSums[$colIndex] += $table[$rowIndex][$colIndex];
                    }
                }

                // Sum up the numbers per row
                $rowSums = array();
                for ($rowIndex = 0; $rowIndex < 4; $rowIndex++) {
                    $rowSums[$rowIndex] = array_sum($table[$rowIndex]);
                }

                echo '<div class="bgPaddings">';
                echo "<table>";
                for ($rowIndex = 0; $rowIndex < 4; $rowIndex++) {
                    echo "<tr>";
                    for ($colIndex = 0; $colIndex < 4; $colIndex++) {
                        echo "<td>" . $table[$rowIndex][$colIndex] . "</td>";
                    }
                    echo "<td style='border:none'>".$rowSums[$rowIndex]."</td>";
                    echo "</tr>";
                }
                echo "<tr>";
                for ($colIndex = 0; $colIndex < 4; $colIndex++) {
                    echo "<td style='border:none'>".$colSums[$colIndex]."</td>";
                }
                echo "</tr>";
                echo "</table>";
                echo '</div>';
            }
            // Check if the random button has been clicked
            if(isset($_POST['random'])){
                createTable();
            }
        ?>

         
    </div>

    <form method="post" action="">
        <input class="generateButton" type="submit" name="random" value="Generate numbers" >
     </form>
 

</div>

<a href="../index.php" class="home_btn">
    Return to Index
</a>

<?php
    include_once ('../footer.php');
?>


