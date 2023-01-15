<?php
  include_once ('../header.php');
?>

<h1>EXERCISE 5</h1>

<div class="question">
  <p>Task: <br>
    Generate a random character from a - k<br>
    ● Create a 4 x 5 table<br>
    ● Display all the random characters inside the table<br>
    ● Highlight all the character that belongs to the even column<br>
  </p>
    <p style="margin: 0; padding: 0;">(odd/even column)</p>

  <table class="table" style="">
    <tr>
      <td>a</td>
      <td>b</td>
      <td>c</td>
      <td>d</td>
      <td>e</td>
      <td>f</td>
      <td>g</td>
      <td>h</td>
      <td>i</td>
      <td>j</td>
      <td>k</td>
    </tr>


    <tr>
      <td class="td">0</td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
      <td>7</td>
      <td>8</td>
      <td>9</td>
      <td>10</td>
    </tr>
  </table> <br>

  <p style="margin: 0; padding: 0;">Sample Result</p>

  <table>
    <tr>
      <td style="background-color: #cccc00;">a</td>
      <td style="background-color: #cccc00;">c</td>
      <td style="background-color: #cccc00;">e</td>
      <td style="background-color: #cccc00;">g</td>
      <td>h</td>
    </tr>

    <tr>
      <td>f</td>
      <td style="background-color: #cccc00;">a</td>
      <td>j</td>
      <td style="background-color: #cccc00;">k</td>
      <td style="background-color: #cccc00;">a</td>
    </tr>

    <tr>
      <td>f</td>
      <td>h</td>
      <td>I</td>
      <td>j</td>
      <td>d</td>
    </tr>

    <tr>
      <td>b</td>
      <td>b</td>
      <td>b</td>
      <td>b</td>
      <td>b</td>
    </tr>
  </table>

</div>

<div class="answer">
  <p>Result:</p>

  <div class="codeBg">
    
      <?php
        function generateTable() {
          echo '<div class="bgPaddings">';
          echo '<table>';
          // Loop for creating the rows
          for ($rowIndex = 1; $rowIndex <= 4; $rowIndex++) {
              echo "<tr>";
              // Loop for creating the columns
              for ($colIndex = 1; $colIndex <= 5; $colIndex++) {
                  // Generating a random character between 'a' and 'k'
                  $randomCharacter = chr(rand(97, 107));
                  // Getting the ASCII value of the character
                  $asciiValue = ord($randomCharacter);
                  // Checking if the ASCII value is even
                  if ($asciiValue % 2 == 1) {
                      // Highlighting even characters
                      echo "<td bgcolor='#cccc00'>$randomCharacter</td>";
                  } else {
                      echo "<td>$randomCharacter</td>";
                  }
              }
              echo "</tr>";
          }
          echo "</table>";
          echo '</div>';
        }
        
        // Check if the random button has been clicked
        if(isset($_POST['random'])){
          generateTable();
        }
      ?>
     
  </div>

  <form method="post" action="">
    <input class="generateButton" type="submit" name="random" value="Generate characters" >
  </form>
    
</div>

<a href="../index.php" class="home_btn">
    Return to Index
</a>

<?php
  include_once ('../footer.php');
?>


 