 <?php 
 function doDB() {    
global $mysqli;
   $mysqli = mysqli_connect("localhost", "root", "", "test"); 
            if (mysqli_connect_errno()) { 
             printf("Connect failed: %s\n", mysqli_connect_error()); 
               exit();   
                } else {
                	printf('connected');
                }
               }

               doDB();
?>
