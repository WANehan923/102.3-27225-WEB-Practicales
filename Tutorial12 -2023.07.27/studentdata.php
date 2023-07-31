<?php

$conn = mysqli_connect("localhost", "root", "", "university");
if(!$conn)
{
    die ("connection Failed");
}
$sql="select * from students";
$result=$conn->query($sql);

if($result->num_rows >0){
?>
<table border="2">
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>password</th>
    
<?php

    while($row=$result->fetch_assoc()){
   ?> 
   
    <tr>
       <td> <?php echo $row ["id"] ?></td>
       <td> <?php echo $row ["name"] ?></td>
       <td> <?php echo $row ["email"] ?></td>
       <td> <?php echo $row ["password"] ?></td>
    
    </tr>
    </table>
   <?php   
    }
}  
    else
    {
          echo "no data";   
    }


?>