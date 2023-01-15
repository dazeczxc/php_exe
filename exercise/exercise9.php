<?php
  include_once ('../header.php');
?>

<h1>EXERCISE 9</h1>

<div class="question">
  <p>Task: <br>
    Using a PHP POST method, ask the user to input 2 numbers</br>
    ● Create a Grid using 2 inputs as the length and width.</br>
    ● Insert random CONSONANT letters into the grid</br>
    ● Display the grid in table 
  </p>

  <p style="margin:0;padding:0;">Example</p>

  <table>
    <tr>
      <td>b</td>
      <td>c</td>
      <td>d</td>
      <td>f</td>
    </tr>
    <tr>
      <td>g</td>
      <td>s</td>
      <td>r</td>
      <td>t</td>
    </tr>

    <tr>
      <td>h</td>
      <td>m</td>
      <td>n</td>
      <td>p</td>
    </tr>

    <tr>
      <td>k</td>
      <td>l</td>
      <td>q</td>
      <td>q</td>
    </tr>
  </table>
  
</div>

<div class="answer">
  <p>Result:</p>

  <div class="codeBg">

    <?php
      // Function to create grid
      function create_grid($length, $width) {
        // Create the grid with given length and width
        $grid = array();
        for ($rowIndex = 0; $rowIndex < $length; $rowIndex++) {
            for ($colIndex = 0; $colIndex < $width; $colIndex++) {
                $random_char = chr(rand(97,122)); //generating a random lowercase letter
                // check if the letter is a vowel
                if(preg_match('/^[aeiou]$/i',$random_char)){
                    // if it is a vowel replace it with a random consonant
                    $random_char = chr(rand(97,122));
                    while(preg_match('/^[aeiou]$/i',$random_char)) {
                        $random_char = chr(rand(97,122));
                    }
                }
                $grid[$rowIndex][$colIndex] = $random_char;
            }
        }

        echo '<div class="bgPaddings">';
        // Display the grid in a table
        echo "<table>";
        for ($rowIndex = 0; $rowIndex < $length; $rowIndex++) {
            echo "<tr>";
            for ($colIndex = 0; $colIndex < $width; $colIndex++) {
                echo "<td>".$grid[$rowIndex][$colIndex]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo '</div>';
      }
      
      // Check if the button has been clicked
      if(isset($_POST['createGrid'])){
        $length = $_POST["length"];
        $width = $_POST["width"];
        create_grid($length, $width);
      }

    ?>
    
  </div>

  <form method="post">
    <input type="text" name="length" required placeholder="length"> 
    <input type="text" name="width" required placeholder="width"><br>
    <input type="submit" class="generateButton" name="createGrid" value="Create Grid">
  </form>

</div>

<a href="../index.php" class="home_btn">
    Return to Index
</a>

<?php
  include_once ('../footer.php');
?>
