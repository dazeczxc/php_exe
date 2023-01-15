<?php
    session_start();
    $_SESSION['my_array'] = array();
    $_SESSION['my_array2'] = array();

    include_once('header.php');
?>
    
<h1>EXERCISES</h1>

<a href="exercise/exercise1.php" class="square">
    <p> Create the given pattern (Diamond)</p>
</a>

<a href="exercise/exercise2.php" class="square">
    <p>Create the given pattern (X)</p>
</a>

<a href="exercise/exercise3.php" class="square">
    <p>Create the given pattern</p>
</a>

<a href="exercise/exercise4.php" class="square">
    <p>Create the given pattern</p>
</a>

<a href="exercise/exercise5.php" class="square">
    <p>Generate a random character from a -k</br>
        ● Create a 4 x 5 table</br>
        ● Display all the random characters inside the table</br>
         Highlight all the character that belongs to the even column
    </p>
</a>

<a href="exercise/exercise6.php" class="square">
    <p>Manipulation of multidimensional array</br>
        ● Create a 4x4 table</br>
        ● Generate a random number from 1 - 100</br>
        ● The number generated should always be unique</br>
        ● Sum up the number per column and row
    </p>
</a>

<a href="exercise/exercise7.php" class="square">
    <p>Create a stack of integers using arrays( First in last out )</br>
        ● create input fields and push a button to insert a new value</br>
        ● Create a pop button to remove the top value</br>
        ● Always display the existing stack content</br>
        ● Do not use pre-defined PHP array functions like array_pop
    </p>
</a>

<a href="exercise/exercise8.php" class="square">
    <p>Create a queue of integers using arrays (first in first out )</br>
        ● create input fields and push a button to insert a new value</br>
        ● Create a pop button to remove the old value</br>
        ● Always display the existing queue content</br>
        ● Do not use pre-defined PHP array function like array_pop
    </p>
</a>

<a href="exercise/exercise9.php" class="square">
    <p>Using a PHP POST method, ask the user to input 2 numbers</br>
        ● Create a Grid using 2 inputs as the length and width.</br>
        ● Insert random CONSONANT letters into the grid</br>
        ● Display the grid in table
    </p>
</a>

<a href="exercise/exercise10.php" class="square">
    <p>Fix the code function to output the correct result. Explain your answer.</p>
</a>

<?php
    include_once('footer.php');
?>