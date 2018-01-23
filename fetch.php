<?php
$connect=mysqli_connect('localhost','root','','livesearch');//database connection
$output='';
$sql="SELECT * FROM customer WHERE name LIKE '%".$_POST['search']."%'";//extracting value from database

$result=mysqli_query($connect,$sql);
if(mysqli_num_rows($result)>0)//if value is more than 1 means value exist in databse.
{
  $output .='<h4 class="text=center">Search Result</h4>';
  $output .='  <table class="table table-striped">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Customer Name </th>
                  <th>City</th>
                  <th>Postal Code</th>
                  <th>Country</th>
                </tr>
                </thead>';
      while($row=mysqli_fetch_assoc($result))
      {
        $output .='
                      <tr>
                        <td>'.$row['id'].' </td>
                        <td>'.$row['name'].' </td>
                        <td>'.$row['city'].' </td>
                        <td>'.$row['postalcode'].' </td>
                        <td>'.$row['country'].' </td>
                      </tr>
                    ';
      }
      $output.=' </table>';
      echo $output;
}
else {
  echo "<br>NO Match Found";
}

 ?>
