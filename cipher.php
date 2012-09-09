<?php
/*
	Loops through each of 26 shifts of caesar cipher for your string and displays them one after the other
	Easy to just grab the one that looks right out of the list then
*/

$string = "ABCDEFJKLMNOPQRSTUVWXYZ";

$stringA = str_split($string);


for ($i = 0; $i < 26; $i++)
{
	foreach ($stringA as $letter)
	{
		$num = ord($letter);
		if ($num >= 97 and $num <= 122)
		{
			$num -= 97;
			$num += $i;
			$num = $num %26;
			$num +=97;
		}
		elseif ($num >= 65 and $num <=90)
		{
			$num -= 65; 
			$num += $i;
			$num = $num %26;
			$num += 65;;
		}
		else
		{
			echo $letter;
			continue;
		}

		echo chr($num);
	}
echo "\n";


}

?>
