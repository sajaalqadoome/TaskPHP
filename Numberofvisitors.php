
<?php
session_start(); 
           if(!isset($_SESSION['counter'])) {
             $handle = fopen("counter.txt", "r"); 
             if(!$handle){ 
              echo "Could not open the file" ;
               } 
              else { 
                $counter = ( int ) fread ($handle,20) ;
                fclose ($handle) ;
                $counter++ ; 
                echo" <p> Visitor Count: ". $counter . " </p> " ; 
                $handle = fopen("counter.txt", "w" ) ; 
                fwrite($handle,$counter) ; 
                fclose ($handle) ;
                $_SESSION['counter'] = $counter;
                }

           } else { 
             $counter = $_SESSION['counter'];
             echo" <p> Visitor Count: ". $counter . " </p> " ;
           }
?>
