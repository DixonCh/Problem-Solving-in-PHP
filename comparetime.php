//Program to compare time
<?php  
//10:19PM 02:49AM 08:49AM 09:10AM
$timearr=array('10:19PM','02:49AM','08:49AM','09:10AM','12:49AM'
,'11:49AM');
$n=count($timearr);
for($i=0;$i<$n;$i=$i+2)
{
if($timearr[$i]<$timearr[$i+1])
{
echo "First<br>";
}
else if($timearr[$i]>$timearr[$i+1])
{
echo "Second<br>";
}
}
?> 
