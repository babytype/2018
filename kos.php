<?
function cmp($a, $b){
	if ($a==$b) return 0;
	if ($a<$b) return -1;
	if ($a>$b) return 1;
}
$arr= array(1 ,3, 5, 4, 7, 2, 0 );
usort($arr, cmp);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo count($arr);


substr(string, start)
count(var)


?>