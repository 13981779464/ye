<?php
/* header("Content-type: text/html; charset=utf-8"); */
$a=mysqli_connect('localhost', 'root', 'root', 'yi');
$sql="SELECT * FROM all_a " ;
$b = mysqli_query($a,$sql);
while ( $re = mysqli_fetch_assoc($b)) {
     echo $re['name']."<br/>";
}
$x=$_POST['value1'];
echo$x;
// if ($x) {
//     echo  json_encode($re);
// }
