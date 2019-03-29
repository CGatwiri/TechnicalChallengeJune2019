<?php
        #We obtain the data which is contained in the post url on our server.
        //$sessionID=$_GET['sessionID'];
        $phonenumber=$_GET['phonenumber'];
        $text=$_GET['text'];
        $serviceCode=$_GET['serviceCode'];
        
        $level = explode("*", $text);

        if ($text)
        {
            //this is the first ussd request
            if ( $text == "" ) 
            {
                $response="CON Hello There! Welcome to our service.\nPlease enter you full name";
            }

            if($level[1])
            {
              $response="CON Hello ".$level[0].", please enter your email address";
                 
            }
            else if(isset($level[1]) && $level[1]!="" && !isset($level[2]))
            {
                    $response="Please enter you national ID number\n"; 
            }
            else if(isset($level[2]) && $level[2]!="" && !isset($level[3]))
            {
                //Save data to database
                $data=array('phonenumber'=>$phonenumber,'fullname' =>$level[0],'email_address' => $level[1],'national_id'=>$level[2]);
                
                $response="END Thank you ".$level[0]." for registering.\n"; 
            }
            
            header('Content-type: text/plain');
            echo $response;
    }
?>