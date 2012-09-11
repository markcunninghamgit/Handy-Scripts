<?php
/* 
	Tired of having binary - ascii converters that couldn't deal with new lines
	and other crap.
	Pulls out JUST the 1's and 0's and tries to convert them.
	If not enough data to make up the end binary bit, just fills up the rest of the 
	slots with 0s' so if you had "111", it would interpret it as "00000111" 
*/

$displayStatistics = true;
$debug = false;

$string = "01110100011
aaaaaaaaaaaaaaaaa 010000110100
aaaaaaaaaa10111001100100000011aaaaaaaaaaaaaaaaaaa

010010111001100|1|0><0000011000010010fdsafdafdas0000011101000110010101sfdafda1100110111010000100000011011010110010101110fdsafdafda0110111001101100001fdafda0110011101100fdafdafda101";

$stringA = str_split($string);
$binary = "";
foreach ($stringA as $char)
{
	if ($char === "1" or $char === "0")
	{
		$binary .= $char;
	}
}

$binaryA = str_split($binary);
$bits = count($binaryA);

$leftoverBits = $bits  % 8;
$bytes = ($bits - $leftoverBits) / 8;

if ($displayStatistics === true)
{
	echo "Bits: $bits, Bytes: $bytes, leftover bits: $leftoverBits\n";

}

for ($counter =0; $counter  < count($binaryA); $counter +=8)
{
	$binNum = "";
	for ($i=0; $i<8; $i++)
	{
		if (!isset($binaryA[ ($i + $counter)]))
		{
			$binNum .= "0";
		}
		else
		{
			$binNum .= $binaryA[ ($i + $counter)];
		}
	}
	
	$dec = bindec($binNum);
	$char = chr($dec);

	if ($debug === true)
	{
		
		echo "Binary: $binNum\n";
		echo "Dec   : $dec\n";
		echo "Char  : $char\n";
	}
	echo $char;
}
echo "\n";
