<?php
    include_once ('../header.php');
?>

<h1>EXERCISE 7</h1>

<div class="question">
    <p>Task: <br>
        Create a stack of integers using arrays( First in last out )</br>
        ● create input fields and push a button to insert a new value</br>
        ● Create a pop button to remove the top value</br>
        ● Always display the existing stack content</br>
        ● Do not use pre-defined PHP array functions like array_pop<br>   
    </p>
</div>

<div class="answer">
    <p>Result:</p>
    
    <?php
        session_start();
        
        // Function to add a value to the stack array
        function addValueToArray($stackArray, $value) {
            $stackArray[] = $value;
            return $stackArray;
        }

        // Function to remove a value to the stack array
        function removeTopValue($stackArray) {
            unset($stackArray[count($stackArray)-1]);
            $newArray = array_values($stackArray);
            return $newArray;
        }

        //Function to check array length
        function checkStackLength($stackArray) {
            return count($stackArray);
        }

        //Function to dislay the stack content
        function displayStack($stackArray) {
            if (count($stackArray) == 0) {
                echo 'Stack is empty';
            } else {
                echo "Stack: ";
                foreach($stackArray as $val){
                    echo $val." ";
                }
            }
        }

         // Check if the push button has been clicked
        if(isset($_POST['push_btn'])){
            // Add the value entered in the text field to the my_array session variable
            $_SESSION['my_array'] = addValueToArray($_SESSION['my_array'], $_POST['push_val']);
            // Display the updated stack
            displayStack($_SESSION['my_array']);
         }

          // Check if the pop button has been clicked
        if(isset($_POST['pop_btn'])){
            // Check if the stack is empty
            if (checkStackLength($_SESSION['my_array']) == 0) {
                echo 'Stack is empty';
            } else {
                // Remove the top value from the stack
                $new_array = removeTopValue($_SESSION['my_array']);
                // Updates the session array with the updated stack array
                $_SESSION['my_array'] = $new_array;
                // Display the updated stack
                displayStack($_SESSION['my_array']);
            }
        }

    ?>

    <div class="formContainer">
        <form method="post" action="">
            <input type="text"  name="push_val" placeholder="integer" required>
            <input type="submit" class="pushButton" name="push_btn" value="Push" >
        </form>

        <form method="post" action="">
            <input type="submit" class="popButton" name="pop_btn" value="Pop">
        </form>
    </div>

</div>

<a href="../index.php" class="home_btn">
    Return to Index
</a>

<?php
    include_once ('../footer.php');
?>


 