<?php 

$num = htmlspecialchars($_GET["number"]);

if((int)($num))
	
	{if($num < 20000)
		{if((($num > 0) && ($num%3 != 0)&&($num%2 != 0) && $num != 1) or $num == 2)
				{echo 'The number '.$num.' is prime!';}
					else 
				{echo '<font color = "blue">The number</font> '.$num.'<font color = "blue"> is NOT prime!</font><br>'; }
		}
		else
		{echo '<font color = "red"> The parameter is not within the range [0,19999]!</font><br>';}
		
		
	}
 else
 {echo '<font color = "red">The parameter in not a number!</font>';}
 
?>