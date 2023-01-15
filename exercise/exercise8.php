<?php
    include_once ('../header.php');
?>

<h1>EXERCISE 8</h1>

<div class="question">
    <p>Task: <br>
        Create a queue of integers using arrays (first in first out )</br>
        ● create input fields and push a button to insert a new value</br>
        ● Create a pop button to remove the old value</br>
        ● Always display the existing queue content</br>
        ● Do not use pre-defined PHP array function like array_pop
    </p>
</div>

<div class="answer">
    <p>Result:</p>

    <div class="codeBg">
        

        <?php
            session_start();

            // Function to add a value to the stack array
            function addValueToArray($stackArray, $value) {
                $stackArray[] = $value;
                return $stackArray;
            }

            //removes the old value from the stack
            function removeOldValue($array) {
                $firstValue = $array[0];
                unset($array[0]);
                $newArray = array_values($array);
                return $newArray;
            }

            //Function to check array length
            function checkStackLength($stackArray) {
                return count($stackArray);
            }

            //Function to dislay the stack content
            function displayStack($stackArray) {
                if (count($stackArray) == 0) {
                    echo '<div class="bgPaddings">';
                    echo 'Stack is empty';
                    echo '</div>';
                } else {
                    echo '<div class="bgPaddings">';
                    foreach($stackArray as $val){
                        echo $val." ";
                    }
                    echo '</div>';
                }
            }

            // Check if the push button has been clicked
            if(isset($_POST['push_btn'])){
                // Add the value entered in the text field to the my_array session variable
                $_SESSION['my_array2'] = addValueToArray($_SESSION['my_array2'], $_POST['push_val']);
                // Display the updated stack
                displayStack($_SESSION['my_array2']);
            }

            // Check if the pop button has been clicked
            if(isset($_POST['pop_btn'])){
                if (checkStackLength($_SESSION['my_array2']) == 0) {
                    echo '<div class="bgPaddings">';
                    echo 'Stack is empty';
                    echo '</div>';
                } else {
                    //Remove the oldest value
                    $new_array = removeOldValue($_SESSION['my_array2']);
                    // Updates the session array with the updated stack array
                    $_SESSION['my_array2'] = $new_array;
                    // Display the updated stack
                    displayStack($_SESSION['my_array2']);
                }
            }

        ?>

    </div>

    <div class="formContainer">
        <form method="post" action="">
            <input type="text" name="push_val" placeholder="input" required>
            <input type="submit" class="pushButton" name="push_btn" value="Push" >
        </form>

        <form method="post" action="">
            <input type="submit"  class="popButton" name="pop_btn" value="Pop" >
        </form>
    </div>

</div>

<a href="../index.php" class="home_btn">
    Return to Index
</a>


<?php
    include_once ('../footer.php');
?>


 