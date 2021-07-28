<?php
// const FIVE = 5;
// for ($i=1; $i<=100; $i++)
// {
//     if ($i % FIVE==0)
//         $j++;
// }
// echo $j . " ";
const ONE_100 = 100;
$sum=0;
$k= false;
for ($i = 2; $i<ONE_100; $i++) {
     $k = true; 
        for ($j = 2; $j<=($i/2); $j++) {
                if ($i % $j==0) {
                          $k = false;
                                  break;
                                }
                   }
        if ($k) {
               echo $i . " ";
               $sum+=$i;
                  }
        
}
echo ($sum)."\n";
//define("LIMIT",100);
define("LIMIT", floor(sqrt(ONE_100)));
	
$S = array_fill(2,ONE_100-1,true);
$sum=0;
$k==true;
for($i=2;$i<=LIMIT;$i++){
	if($S[$i]===true){
        
		for($j=$i*$i; $j<=ONE_100; $j+=$i){
			$S[$j]=false;
            
		}

    }

}
    print_r($S);
    for ($i=0; $i<=ONE_100; $i++)
    {
        if ($S[$i]===true)
        {
            $sum+=$i;
        } 
    }
    echo $sum;