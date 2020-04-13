 <?php

$ID=$_POST["ID"];
$pwd=$_POST["pwd"];
echo "帳號: $ID<br/>";
echo "密碼: $pwd<br/><br/>";


$link = mysqli_connect( 
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            'password',  // 密碼
            'php2020');  // 預設使用的資料庫名稱

 
$SQL="SELECT * FROM employee";

if($result=mysqli_query($link, $SQL))
{
	echo "employee資料表";
	echo "<table border='1'>";
	echo "<tr style="."font-weight:bold;"."><td>No</td><td>Fname</td><td>Minit</td><td>Lname</td><td>Bdate</td><td>Address</td><td>Sex</td><td>Salary</td>";
    while( $row = mysqli_fetch_assoc($result) )
   { 
   	   echo "<tr>";
       echo "<td>".$row['No']."</td><td>".$row['Fname']."</td><td>".$row['Minit']."</td><td>".$row['Lname']."</td><td>".$row['Bdate']."</td><td>".$row['Address']."</td><td>".$row['Sex']."</td><td>".$row['Salary']."</td>";
	
   }

   echo "</tr>";
   echo "</table>";
}
else
{
	echo "找不到資料";
}


?>