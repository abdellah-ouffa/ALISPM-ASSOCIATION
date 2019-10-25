<?php

if(!function_exists('priceFormat')) {
    function priceFormat($number = null, $currency = 'DH', $toLeft = false) {
        return ($toLeft) ? $currency . ' ' . number_format((float)$number, 2, '.', '') 
        				 : number_format((float)$number, 2, '.', '') . ' ' . $currency;
    }
}

if(!function_exists('dateToFrFormat')) {
    function dateToFrFormat($date = null) {
        return \Carbon\Carbon::parse($date)->format('d / m / Y');
    }
}

if (!function_exists('slugify')) {
	function slugify($text) {
		$text = preg_replace('~[^\pL\d]+~u', '-', $text);
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
		$text = preg_replace('~[^-\w]+~', '', $text);
		$text = trim($text, '-');
		$text = preg_replace('~-+~', '-', $text);
		$text = strtolower($text);

		return empty($text) ? 'n-a' : $text;
	}
}


if (!function_exists('job_levels')) {
	function job_levels() {
		return [
			'Lieutent pont',
			'Lieutent machine',
			'Second machine',
			'Second pont',
			'Chef mécanicien',
			'Capitain'
		];
	}
}

if(!function_exists('saveFile')) {
	function saveFile($file, $folderName) {
		$fileName = time() . '_' . $file->getClientOriginalName();
		$storedFileLink = $file->storeAs('public/' . $folderName . '/' . date('F') . date('Y'), $fileName);
		$storedFileLink = str_replace('public/', '', $storedFileLink);
		
		return '[{"download_link":"' . $storedFileLink . '","original_name":"' . $file->getClientOriginalName() . '"}]';
	}
}