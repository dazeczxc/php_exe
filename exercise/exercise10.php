<?php
    include_once ('../header.php');
?>

<h1>EXERCISE 10</h1>

<div class="question">
    <p>Task: <br>Fix the code function to output the correct result. Explain your answer.<br>
    <pre>

function bubbleSort($lists) {
    $length = count($lists);

    for ($parent = 0; $parent < $length; $parent++) {
        for ($child = 0; $child < $length - $parent - 1; $child++) {
            if ($lists[$child] > $lists[$child + 1]) {
                $temp = $lists[$child + 1];
                $lists[$child] = $lists[$child + 1];
                $lists[$child + 1] = $temp;
            }
        }
    }
}

    </pre>
    </p>
</div>

<div class="answer">
    <p>Result:</p>

    <div class="codeBg">
        <pre>

function bubbleSort($lists) {
    $length = count($lists);
    
    for ($parent = 0; $parent < $length; $parent++) {
        for ($child = 0; $child < $length - $parent - 1; $child++) {
            if ($lists[$child] > $lists[$child + 1]) {
                $temp = $lists[$child]; //error 1: fixing here, swapping the current element with the next one
                $lists[$child] = $lists[$child + 1];
                $lists[$child + 1] = $temp;
            }
        }
    }
    return $lists; // error 2: returning the sorted array
}

        </pre>
    </div>
    <?php
        function bubbleSort($lists) {
            $length = count($lists);
        
            for ($parent = 0; $parent < $length; $parent++) {
                for ($child = 0; $child < $length - $parent - 1; $child++) {
                    if ($lists[$child] > $lists[$child + 1]) {
                        $temp = $lists[$child];
                        $lists[$child] = $lists[$child + 1];
                        $lists[$child + 1] = $temp;
                    }
                }
            }
            return $lists;
        }
    ?>

    <p>Error 1: The issue is with the swap operation. In the swap operation you are reassigning the value of $lists[$child] with the value of $lists[$child + 1] but at the same time you are using that value to swap with $lists[$child + 1] this will cause to lose the initial value of $lists[$child] and the function will not sort the array correctly. The correction made is just to use $temp variable to store the initial value of $lists[$child] before reassigning it with the value of $lists[$child + 1], this will make the function to sort the array correctly.</p>
    <p>Error 2: I added a return statement to return the sorted array, so that it can be use when calling code.</p>

    <?php
        $input_array = [5, 3, 8, 11, 17, 20, 2, 9, 1];
        $sorted_array = bubbleSort($input_array);
        echo "Example:<br>";
        echo "Original Array: [".implode(",", $input_array)."]<br>";
        echo "Sorted Array: [".implode(",", $sorted_array)."]";
    ?>
</div>

<a href="../index.php" class="home_btn">
    Return to Index
</a>

<?php
    include_once ('../footer.php');
?>


 