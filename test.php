

              <?php
               require('config/connect.php');
  
  $sql = "SELECT * FROM gallerytimeline WHERE status='publish'";

 
 
  $result = mysqli_query($connection, $sql);
 
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
 
       $video = $row['name'];
 
       echo $video;
 
 
       
 
   ?> 
 
 <?php
                }
            } else {
                echo "0 results";
              }

            mysqli_close($connection);
              

            ?> 
