<?php

// Create an array to hold list of todo items
$items = array();

if (empty($items)) {
	echo "The list is currently empty.\n" , "Needs Input" . PHP_EOL;
}

// the loop!

do {
 	// Iterate through list items
 	foreach ($items as $key => $item) {
 		$key++;
 		// Display each item and a newline
 		echo "[{$key}] {$item}\n";
 	}
 		//show the menu options
 		echo '(N)ew item , (R)emove item, (Q)uit , : ' .PHP_EOL;

if (empty($items)) {
	echo "The list is currently empty.\n" , "Needs Input:" . PHP_EOL;
}


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
 		 	if (isset($items[$key-1])) {
 		 		unset($items[$key-1]);
 		 		$items=array_values($items);
 		 	 }
			
 		 	 
 		 	 	# code...
 		 	 
    }
        //Exit when input is (Q)uit

    } while ($input != 'Q');
    //say adios
    echo "Goodbye\n";

    {
    	# code...
    }

    //Exit with 0 errors
    exit(0);
 		 		# code...
 		 	
 		  		# code...
 		  		# code...
 		  
 	














?>