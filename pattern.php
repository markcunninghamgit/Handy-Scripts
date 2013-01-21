#!/usr/bin/php
<?php
$count = 0;
$max = 15;
if (isset($argv[1]) and $argv[1] >=0)
{
	$max = $argv[1];
}
for ($first = 65; $first <= 90; $first ++)
{
	for ($second = 97; $second <= 122; $second ++)
	{
		for ($third = 0; $third <= 9; $third ++)
		{
			echo chr($first) . chr($second) . "$third";
			$count ++;
			if ($count >= $max)
			{
				echo "\n";
				exit();
			}
		}
	}
}
