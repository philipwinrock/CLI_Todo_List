<?php

// Create an array to hold list of todo items
$items =array();
// the loop!

do {
 	// Iterate through list items
 	foreach ($items as $key => $item) {
 		$key++;
 		// Display each item and a newline
 		echo "[{$key}] {$item}\n";
 	}
 		//show the enu options
 		echo '(N)ew item , (R)emove item, (Q)uit : ';

 		// Get the input from user
 		//Use trim () to remove whitespace
 		 //and new lines

 		 $input = trim(fgets(STDIN));
 		 $input = strtoupper($input);
 		 // Check for actionable input
 		 if ($input == 'N') {
 		 	//Ask for entry
 		 	echo 'Enter item: ';
 		 	 		 	// Add entry to list array
 		 	$items[] = trim(fgets(STDIN));
 		} 
 		 elseif ($input == 'R') {
 		 	// Remove which item?
 		 	 echo 'Enter item to remove: ';
 		 	 //Get array key
 		 	 $key = trim(fgets(STDIN));
 		 	 //remove item from array
 		 	 unset($items[$key-1]);
        }
        //Exit when input is (Q)uit

    } while ($input != 'Q');
    //say adios
    echo "Goodbye\n";

    //Exit with 0 errors
    exit(0);
 		 		# code...
 		 	
 		  		# code...
 		  		# code...
 		  
 	














?>