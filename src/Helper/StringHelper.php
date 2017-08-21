<?php
/**
 * author: ninoplettenberg
 */

namespace IngenicoZvt\Helper;


class StringHelper
{
    public static function isNullOrEmpty(string $string) : boolean
	{
		$valid = true;
		if (!isset($string))
		{
			$valid = false;
		}
		if(is_null($string))
		{
			$valid = false;
		}
		if($string == '')
		{
			$valid = false;
		}
		return $valid;
	}
}