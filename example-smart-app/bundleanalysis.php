<?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
          
        function get_data() { 
            $datae = array(); 
            $datae[] = array( 
                'Bundle' => $_POST['bundle'], 
                'Doctors' => $_POST['doctors'], 
                'Beds' => $_POST['beds'], 
            ); 
            return json_encode($datae); 
        } 
          
        $name = "bundleanalysis"; 
        $file_name = $name . '.json'; 
       
        if(file_put_contents( 
            "$file_name", get_data())) { 
                echo $file_name .' file created'; 
            } 
        else { 
            echo 'There is some error'; 
        } 
    } 
?> 
