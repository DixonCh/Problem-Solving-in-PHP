<?php //practice
// // $nam1= "Hello ";
// // $nam1 .= "OLOOOOO";
// // echo $nam1; //." ".$nam2;
// // $hjsd = <<<TEST
// // <br>'KCC-Unlock your potential
// // TEST;
// // echo $hjsd;
// // $a=5;
// // $b=23;
// // function add()
// // {
// // $sum=$GLOBALS['a']+$GLOBALS['b'];
// // echo "<br>The sum of ".$GLOBALS['a']." and 
".$GLOBALS['b']." is ".$sum.".<br>";
// // }
// // add();
// // $arr=array("Ram","Hari","Shyam");
// // foreach($arr as $nam)
// // {
// // echo $nam."<br>";
// // }
// function result($a0,$a1,$a2,$b0,$b1,$b2)
// {
// $a0=6;$a1=7;$a2=9;$b0=4;$b1=8;$b2=9;
// $arr= array($a0,$a1,$a2);
// $arrb= array($b0,$b1,$b2);
// for($i=0;$i<=2;$i++)
// {
// if($arr[$i]>$arrb[$i])
// {
// return $arr[$i]=1;
// return $arrb[$i]="";
// // echo " Point of Alice in".$arr[$i].": 1";
// // echo " Point of Bob in".$arrb[$i].": 0";
// }
// else if($arr[$i]==$arrb[$i])
// {
// return $arrb[$i]="";
// return $arr[$i]="";
// // echo " Point of Alice in".$arr[$i].": 0";
// // echo " Point of Bob in".$arr[$i].": 0";
// }
// else if($arrb[$i]>$arr[$i])
// {
// return $arrb[$i]=1;
// return $arr[$i]="";
// // echo " Point of Alice in".$arr[$i].": 0";
// // echo " Point of Bob in".$arr[$i].": 1";
// }
// // else break;
// }
// }
// $ans= result(6,7,9,4,8,9);
// echo implode(" ",$ans);
// // foreach($x as $arr)
// // {
// // echo "alice point:".$x;
// // }
// // foreach($arrb as $y)
// // {
// // echo "bob point:".$y;
// // }
?>
<?php // Bithday Candle
// Bithday Candle
$n=4;
$arr=array(3,2,1,3);
$ae=array_count_values($arr);
$maxim=max($ae);
echo "Birthday Candle New :".$maxim."<br>";
//////////////Next Technique using loop///////////
$large=$arr[0];
for($i=0; $i<$n; $i++)
{
if($arr[$i] > $large)
$large=$arr[$i];
}
$c=0;
for($i=0; $i<$n; $i++)
{
if($arr[$i]==$large)
{
$c++;
}
}
echo "Birthday Candle: ".$c."<br>";
//End of Birthday Candle
?>
<?php //\\ Migrating Birds Starts 
//$arr=array(1,3,4,4,5);
// $ans =array_count_values($arr);
// print_r($ans);
// $keys=array_keys($ans);
// echo $keys;
//$res= implode(" ",$ans);
// $newarr=array($res);
// $keys=array_keys($newarr);
// echo $keys;
////////////////////////\\\ Migrating Birds 
Starts/\\\\\//\/\/\/\/\/\\/\/\//\/\\/\/
$arr=array(1,3,4,4,4,5);
$r=array_count_values($arr);
$k=array_search(max($r),$r);
echo "Most Frequent Birds are of id: ".$k."<br>";
/////////////////////////////
$array=array('Fruit1'=>'Apple','Fruit2'=>'Banana','Fruit3'=
>'Apple','Fruit4'=>'Orange');
while (($fruit_name = current($array))!==FALSE)
{
echo key($array)."<br>";
next($array);
}
//Next Technique for Migrating Birds//\/\/\\\\///\/\/\\\\/
$azr=array();
$qar=array(1,2,3,4,2,1,4,2,4);
//$qar=array(4,4,5,6,6,6,7,7,7);
$min=min($qar);
$ad=array_count_values($qar);
$n=count($ad);
$maxx=max($ad);
for($i=0;$i<$n;$i++)
{
if(($ad[$i+$min])==$maxx)
{
$azr[$i]=array_search($maxx,$ad);
}
}
$minn=min($azr);
echo "Migrating Birds Final Answer : ".$minn."<br>";
?>
<?php //////////////////\\\Camelcase 
Starts/\\\\\//\/\/\/\/\/\\/\/\//\/\\/\/ 
$stre= "saveChangesInTheEditor";
// $result=explode("/[A-Z]/",$stre);
// $c=sizeof($result);
// echo $c;
$b=1;
for($i=0;$i<strlen($stre);$i++)
{
// Using ORD Technique///->->->-> 
if(ord($stre[$i])>=65 && ord($stre[$i])<=96)
if(preg_match("/[A-Z]/",$stre[$i]))
{
$b++;
}
}
// echo ord('A');
// echo ord('a');
echo "Camelcase: ".$b."<br>";
?>
<?php  ///////Favourite Days///////////
$x=20;$y=23;$z=6;
$ar=array(0);
$n=$x-$y;
if($n>0)
{
for($i=0;$i<=$n;$i++)
{
$ar[$i]=$x+$i;
}
}
else if($n<0)
{
$n=$n*(-1);
for($i=0;$i<=$n;$i++)
{
$ar[$i]=$y+$i;
}
}
$vv=sizeof($ar);
$h=0;
for($j=0;$j<$vv;$j++) 
{
$t=$ar[$j]/10;
$r=$ar[$j]%10;
$rv=$r*10+$t;
$ss=($ar[$j]-$rv)%$z;
if($ss==0)
{
$h++;
}
}
echo "Favourite Days: ".$h."<br>";
/////////////\\\\\\\\\\Next Technique//////\\\
$n=$y-$x;
$h=0;
for($i=$x;$i<=$y;$i++)
{
$ss=abs($i-strrev($i))%$z;
if($ss==0)
{
$h++;
}
}
echo "Next Technique for Fvourite days :".$h."<br>";
////////////////End\\\\\\\\\\\\\
?>
<?php  /////Bon Appetite///////
$n=4;$k=1;$b=12;$sum=0;
$areq=array(3,10,2,9);
for($i=0;$i<$n;$i++)
{
$sum=$sum+$areq[$i];
}
$result=$sum-$areq[$k];
if($b==($result/2))
{
echo "Bon Appetit";
}
else
{
$x=$b-($result/2);
echo "Bon Appetite: ".$x."<br>";
}
?>
<?php  ///Anagram\\\\\\\\//////////
$n=6;
$value=array("aaabbbba","ab","bbbc","moop","xyyx","xvxbbbxx");
for($i=0;$i<$n;$i++)
{
if((strlen($value[$i]))%2==0)
{
$v=0;$c=0;
$vz=(strlen($value[$i]))/2;
$vx=substr($value[$i],0,$vz);
$vs=substr($value[$i],$vz);
$s1=str_split($vx);
sort($s1);
//$s1=implode($s1);
$s2=str_split($vs);
sort($s2);
//$s2=implode($s2);
for($j=0;$j<$vz;$j++)
{
//$pos=0;
for($k=0;$k<$vz;$k++)
{
if($s1[$j]==$s2[$k])
{
$v++;
break;
//$pos=$i+1;
// echo $v."\t";
}
// if($s1[$j]!==$s2[$k])
// {
// $c++;
// break;
// }
} 
}
// if($c==$v)
// {
echo $v."\t";
// echo $c."C\t";
// $c=(strlen($value[$i]))/2-$v;
// }
// else if($c<$v)
// {
// $a=(strlen($value[$i]))/2-$c;
// }
// $a=abs($c-$v);
// echo "$a<br>";
}
else if((strlen($value[$i]))%2!=0)
echo "-1<br>";
}
//***************************************************************
//Anagram with intersection Technique
//$value=array("aaabbb","ab","bbbc","moop","xyyx","xvxbbbxx");
$string1="xvxbbbxx";
if((strlen($string1))%2==0)
{
$length=(strlen($string1))/2;
$word1=substr($string1,0,$length);
$word2=substr($string1,$length);
$wordd1=str_split($word1);
$wors1=array_unique($wordd1);
$wordd2=str_split($word2);
$wors2=array_unique($wordd2);
$re=array_intersect($wors1,$wordd2);
$re2=array_intersect($wordd1,$wors2);
$n=count($re);
$n2=count($re2);
// echo "jh".$n;
// echo $n2;
$fns=$length-$n;
//echo "<br>dj".$n2;
$fns2=$length-$n2;
if($fns==$fns2)
{
echo "<br> Anagram Intersect Technique 
:".$fns."<br>";
// echo "Ans::".$fns2; 
}
else
{
$finn=abs($fns-$fns2);
echo "<br> Anagram Intersect Technique :".$finn."<br>";
}
// $worr1=str_split($word1);
// $worr2=str_split($word2);
// $wor1=array_unique($worr1);
// $wor2=array_unique($worr2);
// $n1=count($wor1);
// $n2=count($wor2);
// $max=max($n1,$n2);
// $result=array_intersect($wor1,$wor2);
// $num=count($result);
// $ans=$max-$num;
// $ans1=$num+$length;
// if($ans1==$length)
// {
// echo "<br> Intersect Technique :".$ans1."<br>";
// }
// else
// echo "<br> Intersect Technique :".$ans."<br>";
}
else if((strlen($string1))%2!=0)
echo "<br> Anagram Intersect Technique : -1<br>";
////////////////////Anagram Next Techniques////\\\\\\\\\\
// $word1="aaa";
// $word2="bbb";
// $first=[0];$second=[0];
// $c=0;
// while ($word1[$c]!='\0')
// {
// $first[$word1[$c]-'$word1']++;
// $c++;
// }
// $c=0;
// while ($word2[$c]!='\0')
// {
// $second[$word12[$c]-'$word1']++;
// $c++;
// }
// for($c=0;$c<26;$c++)
// {
// if($first[$c]!=$second[$c])
// {
// echo "0"; 
// }
// }
// echo "1";
//////////Check Anagram ends///\\\
?>
<?php //////////SOSSORSQS\\\\\\\\\\\\/////////
// $string= "SOSSORSQSTOS";
// $findstr="SOS";
// $z=0;
// $bc= strlen($findstr);
// $ac= strlen($string);
// for($i=0;$i<$ac;$i=$i+$bc)
// {
// $re=substr($string,$i,$bc);
// if((strcmp($findstr,$re))!=0)
// {
// $z++;
// }
// }
// echo "<br>SOS Result: ".$z."<br>";
$string="SOSSORSQSTOS";
$ac=strlen($string)/3;
$con="";
$c=0;
for($i=0;$i<$ac;$i++)
{
$con.="SOS";
}
for($i=0;$i<strlen($string);$i++)
{
if((strcmp($string[$i],$con[$i]))!=0)
{
$c++;
}
}
echo "No. of letters changed: ".$c;
?> 
<?php  //////////////Divisible Sum Pairs//////////\\\\\\\\\
$arrz=array(1,3,2,6,1,2);
$total=6;
$f=3;
sort($arrz);
$n=0;
for($i=0;$i<$total;$i++)
{
for($j=$i+1;$j<$total;$j++)
{
if(($arrz[$i]+$arrz[$j])%$f==0)
{
$n++;
}
}
}
echo "<br>No. of Divisible Sum Pairs are: ".$n."<br>";
?>
<?php /////////////////////Equalize Array///
$n=6;
$a=array(1,4,4,4,5,3);
// //echo sizeof($a);
// $v=0;
// for($i=0;$i<$n-1;$i++)
// for($j=$i+1;$j<$n;$j++)
// {
// if($a[$i]==$a[$j])
// {
// $v++;
// //$mode=$a[$i];
// }
// }
// echo "<br>Mode".$v."<br>";
//////////////////Next Technique//////\\\
$maxvalue=0;$maxcount=0;
for($i=0;$i<$n;$i++)
{
$v=0;
for($j=$i;$j<$n;$j++)
{
if($a[$i]==$a[$j])
{
$v++;
//$mode=$a[$i]; 
}
}
if($v>$maxcount)
{
$maxcount=$v;
$maxvalue=$a[$i];
}
}
echo "Mode: ".$maxvalue;
echo "<br>Repeated Number:".$maxcount."<br>";
///////////////////Nexttttt Technique\\\\\\\\\\\
// $arr=array(1,3,4,4,5);
// $ans =array_count_values($arr);
// print_r($ans);
// $keys=array_keys($ans);
// echo $keys;
?>
<?php  //////////////Cats and 
Mouse////////////\\\\\\\\\\\\\///////
// $arr=array(1,2,3);
// $q=3;
// $x=1;$y=2;$z=3;
// if($arr[1]==$x)
// {
// echo "Cat A";
// }
// else if($arr[1]==$y)
// {
// echo "Cat B";
// }
// else if($arr[1]==$z)
// {
// echo "Mouse C";
// }
$x=1;$y=2;$z=3;
$a=abs($z-$x);
$b=abs($z-$y);
if($a==$b)
{
echo "Mouse C\n";
} 
else if($a>$b)
{
echo "Cat B\n";
}
else if($a<$b)
{
echo "Cat A\n";
}
?>
<?php  //////////////////Tight array\\\\\\\\\//////
$a=5;$b=7;$c=11;
$sub1=($a-$b);
$sub2=($b-$c);
$ar1=array(0);
$ar2=array(0);
if($sub1<0)
{
$n1=abs($sub1);
for($i=$n1;$i>=0;$i--)
{
$ar1[$i]=$a-$i;
}
}
else if($sub1>0)
{
$n1=$sub1;
for($i=0;$i<=$n1;$i++)
{
$ar1[$i]=$a+$i;
}
}
if($sub2<0)
{
$n2=abs($sub2);
for($i=$n2;$i>=0;$i--)
{
$ar2[$i]=$b-$i;
}
}
else if($sub2>0)
{
$n2=$sub2;
for($i=0;$i<=$n2;$i++) 
{
$ar2[$i]=$b+$i;
}
}
$ans_ar=array_merge($ar1,$ar2);
$ans=sizeof($ans_ar);
echo "<br> Tight array ans :".$ans;
//////////////\\\\\\\\Tight Array in Another 
Technique/////////////\\\\
$que=array(1,3,4,2,8,9,11,12,14);
//$que=array(3,1,2);
$num=sizeof($que);
$c=1;
for($i=0;$i<$num-1;$i++)
{
$sub=abs($que[$i]-$que[$i+1]);
$c=$c+$sub;
}
echo "<br> Ans of Tight array in another technique :".$c;
?>
<?php  //////////PDF Viewer
$h=array(1,3,1,3,1,4,1,3,2,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5);
$string="abc";
$arr1=array();
$length=strlen($string);
for($i=0;$i<$length;$i++)
{
$xx=ord($string[$i])-97;//It can also be written 
as->->->  $xx=ord($string[$i])-ord('a');
$arr1[$i]=$h[$xx];
}
//$large=max($arr1); ////To find large number in array
$large=$arr1[0];
for($i=0; $i<$length; $i++)
{
if($arr1[$i] > $large)
$large=$arr1[$i];
}
$ans=$large*$length;
echo "<br> Ans Of PDF Viewer :".$ans;
?>
<?php  /////////////HOT AND cOLD//////////\\\
$as1=array(50,40,70,66); 
$hit=sizeof($as1);
$cc=0;$bb=0;
for($i=0;$i<=1;$i++)
{
if($as1[$i]>=35 && $as1[$i]<=66)
{
$cc++;
}
if($as1[$i+2]>=66 && $as1[$i+2]<=95)
{
$bb++;
}
}
$o=$cc+$bb;
if($o==4)
echo "<br>Yes<br>";
else echo "<br>No<br>";
?>
<?php  ////////////Sum of Sub Array ////////////
$n=4;
$aar=array(3,1,4,2);
$sum=0;
$aasr=array(array(array()));
//$aaz=array();
for($i=0;$i<=$n;$i++)
{
for($j=$i;$j<$n;$j++)
{
for($k=$i;$k<=$j;$k++)
{
$aasr[$i][$j][$k]=$aar[$k];
// $aaca=sizeof($aasr[$i]);
//echo $aar[$k]."\t";
}
// $vare=array_count_values($aasr[$i][$j]);
// $maxx[$i][$j]=array_search(max($vare),$vare);
// $minn[$i][$j]=array_search(min($vare),$vare);
// $a=$maxx[$i][$j]-$minn[$i][$j];
// $aaz[$i][$j]=count($aasr[$i][$j],COUNT_RECURSIVE);
// $a=$aaz[$i][$j]-1;
$maxx= max($aasr[$i][$j]);
$minn= min($aasr[$i][$j]);
$a=$maxx-$minn; 
$p=$a*$a;
$sum=$sum+$p;
}
// $aaz[$i]=$aaca*$aaca;
// $sum=$sum+$aaz[$i];
}
//echo var_dump($maxx);
// print_r($aasr);
// echo sizeof($aasr);
// print_r($aaz);
echo "Sum of Subarray: ".$sum;
?>
<?php  ///////////////Max Score ////////\\\\\\\\\
// 4
// 107493882593281 9436949668167681 2227744075153409
4692795778924545
// 9470765577011206
$n=5;
$aqr=array(4,2,3,5,3);
//$aqr=array(107493882593281,9436949668167681,2227744075153409,4
692795778924545);
$init=0;
$summ=0;
for($i=$n-1;$i>=0;$i--)
{
$axa=$init%$aqr[$i];
$init=$init+$aqr[$i];
$summ=$summ+$axa;
}
echo "<br>Max Score: ".$summ."<br>";
?>

//Program having bug
//Find the bug in the program
<?php  
$n=5;
$item=array("OOOOO","OOXOO","OOOOO","OOOOO","OOOOO"); 
//$aarr=array();
for($i=0;$i<$n;$i++)
{
for($j=0;$j<$n;$j++)
{
if($item[$i][$j]=='X')
{
echo $i.",".$j."<br>";
// $aarr[$i]=$i;
// $aarr[$i+1]=$j;
}
}
}
// echo var_dump($aarr);
?>


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
