<?php
$servername="localhost";
$username="root";
$password="";
$dbname="database structures";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn){
    die ("connection failed:".mysqli_connect_error());
}
$sql="SELECT * FROM survey_tb2";
$result = mysqli_query($conn, $sql);
?>
<table>
  <tr>
    <th>Q no</th>
    <th>Question</th>
    <th>choice1</th>
    <th>choice2</th>
    <th>choice3</th>
    <th>choice4</th>
    <th>answer ch1 </th>
    <th>answer ch2</th>
    <th>answer ch3</th>
    <th>answerch4</th>
    <th>links</th>
</tr>
  <?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
          <td><?php echo $row["Question_no"]; ?></td>
          <td><?php echo $row["Question"]; ?></td>
          <td><?php echo $row["ch1"]; ?></td>
          <td><?php echo $row["ch2"]; ?></td>
          <td><?php echo $row["ch3"]; ?></td>
          <td><?php echo $row["ch4"]; ?></td>
          <td><?php echo $row["ans_ch1"]; ?></td>
          <td><?php echo $row["ans_ch2"]; ?></td>
          <td><?php echo $row["ans_ch3"]; ?></td>
          <td><?php echo $row["ans_ch4"]; ?></td>
         <td><a href="ch pie.php?q=<?php echo $row["Question_no"]; ?>">view pie chart</a></td>
         

         
         
         
         
         
          
    </tr>
    <?php
    }
  } else {
    echo "0 results";
  }
  ?>
  </table>
