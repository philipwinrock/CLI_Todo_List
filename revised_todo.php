 <?php




// Add a (S)ort option to your menu. When it is chosen, it should call a function called sort_menu().
// When sort menu is opened, show the following options "(A)-Z, (Z)-A, (O)rder entered, (R)everse order entered".
// When a sort type is selected, order the TODO list accordingly and display the results.









 // Create array to hold list of todo items
 $items = array();

 // List array items formatted for CLI
 function list_items($list)
 {
    $list_strings ='';

    foreach ($list as $key => $items) {
        $key++;

        $list_string .= "[{$key}] {$items}" . PHP_EOL;


        # code...
    }
    return $list_string;


     //  Return string of list items separated by newlines.
     // Should be listed [KEY] Value like this:
     // [1] TODO item 1
     // [2] TODO item 2 - blah
     // DO NOT USE ECHO, USE RETURN
 }

 // Get STDIN, strip whitespace and newlines, 
 // and convert to uppercase if $upper is true
     function get_input($upper = FALSE) 
{
    // Return filtered STDIN input
     if ($upper){
        $user_input = strtoupper(trim(fgets(STDIN)));
        return $user_input;

}    else{
        $user_input = trim(fgets(STDIN));
        return $user_input;

} 

}
    function file_list($file , $array){
        //open list of things to do//
        $handle = fopen($file , 'r');
        //read in entire file and remove any blank lines//
        $content = trim(fread($handle , filesize($file)));
        //always close the file//
        fclose($handle);
        //split the contents of file into an array//
        $list = explode("\n", $content);
        foreach ($list as $items) {
            $new_itemfromfile = array_shift($list);
            array_push($array ,$new_itemfromfile);

            # code...
        }
            return $array;

    }

    function sort_menu($array) {

        echo '(A)-Z , (Z)-A , (O)rder Entered , (R)everse order Entered , ' . PHP_EOL;
        $input = get_input(TRUE);
        switch($input){
            case 'A': 
            asort($array);
            break;
            case 'Z':
            arsort($array);
            break;
            case 'O':
            ksort($array);
            break;
            case 'R':
            krsort($array);
            break;

            default:
            break;

        }
            return $array;

    }

 // The loop!
     do {
     // Echo the list produced by the function
     echo list_items($items);

     // Show the menu options
     echo '(N)ew item, (R)emove item, (Q)uit , (S)ort (O)pen file: ';

     if (empty($items)) {
    echo PHP_EOL . "The list is currently empty.\n" , "Needs Input:" . PHP_EOL;
}

     // Get the input from user
     // Use trim() to remove whitespace and newlines
     $input = get_input(TRUE);

     // Check for actionable input
     if ($input == 'N') {
         // Ask for entry
         echo 'Enter item: ';
         // Add entry to list array
         $adding = get_input();
         echo 'You wish to add this to the (S)tart or the (E)nd of list?';
         $begorEnd = get_input(TRUE);
         if ($begorEnd == 'S') {
             # code...
            array_unshift($items,$adding);

         }
            else{
                array_push($items , $adding);
            }




         //put sort here??//

}    elseif ($input == 'R') {
         // Remove which item?
         echo 'Enter item number to remove: ';
         // Get array key
         $key = get_input();
         // Remove from array
         unset($items[--$key]);
         $items = array_values($items);
     }
     elseif ($input == 'S') {
        $items = sort_menu($items);


     }
     elseif ($input=='F') {
        array_shift($items);
         # code...
     }

     elseif ($input=='L') {
        array_pop($items);


         # code...
     }
        elseif ($input == 'O') {
            echo 'Give path or file name: ';
            $filename = get_input();
            $items = file_list($filename ,$items);
            

            # code...
        }
 // Exit when input is (Q)uit
}    while ($input != 'Q');


 // Say Goodbye!
         echo "Goodbye!\n";

 // Exit with 0 errors
    exit(0);




?>













