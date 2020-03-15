<?php
$connect = mysqli_connect("localhost", "root", "root", "parduotuve");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM pardavejai
  WHERE name LIKE '%".$search."%'
  OR lname LIKE '%".$search."%'
  OR location LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM pardavejai ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Vardas</th>
     <th>Pavardė</th>
     <th>Skyrius</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["name"].'</td>
    <td>'.$row["lname"].'</td>
    <td>'.$row["location"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Tokio pardavėjo nėra';
}

?>
