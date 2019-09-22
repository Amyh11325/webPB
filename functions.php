<?php 

// returns zip_row, or the row from the CSV at which the 

// converts CSV to PHP array

//ignore integer warning error
error_reporting(E_ERROR | E_PARSE);

function find_array($zip_code) {
	//convert csv file to PHP array

	$array = [];

	$csv_r = 0;
	if (($handle = fopen("lead_data.csv", "r")) !== FALSE) {
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	        $num = count($data);
	        //echo "<p> $num fields in line $row: <br /></p>\n";
	        for ($csv_c=0; $csv_c < $num; $csv_c++) {
	            //echo $data[$c] . "<br />\n";
	            $array[$csv_r][$csv_c] = $data[$csv_c];
	        }
	    	$csv_r++;
	    }

	    fclose($handle);
	}
	return $array;
}

function find_zip_row($zip_code, $array) {
	$zip_code = $zip_code;
	$array = $array;

	// $array[x][22] is array with zip codes
	// find row with certain zip code

	$found_zip = FALSE;
	$row = 0;
	$zip_row = 0; //gives the row that has the school's specific info

	while (!$found_zip) {
		if ($zip_code != $array[$row][22]) {
			$row++;
		}
		else {
			$zip_row = $row;
			$found_zip = TRUE;
		}
	}

	return $zip_row;
}

function find_school_percentile($zip_code, $array) {
	$zip_row = find_zip_row($zip_code, $array);
	$array = $array;

	// find percent safe outlets for all data
	$i = 1;
	$safe_outlets_array = [];

	while ($i < count($array)) {
		$num_outlets_less = $array[$i][14]; //number of outlets that had less than 15 ppb of lead
		$num_outlets_more = $array[$i][15]; //number of outlets that had more than 15 ppb of lead
		if ((gettype($num_outlets_less) == integer) and (gettype($num_outlets_more)) == integer) {
		$percent_safe_outlets = $num_outlets_less/($num_outlets_less+$num_outlets_more);
		$safe_outlets_array[$i] = $percent_safe_outlets;
		$i += 1;
		}
	}

	asort($safe_outlets_array);

	// find school percentile

	$num_outlets_less = $array[$zip_row][14]; //number of outlets that had less than 15 ppb of lead
	$num_outlets_more = $array[$zip_row][15]; //number of outlets that had more than 15 ppb of lead

	if ((gettype($num_outlets_less) == integer) and (gettype($num_outlets_more)) == integer) {
		$school_percent_safe_outlets = $num_outlets_less/($num_outlets_less+$num_outlets_more);
	}

	$num_school = 0;
	while ($school_percent_safe_outlets > $safe_outlets_array[$num_school]) {
		$num_school += 1;
	}

	$percentile = $num_school/$i;

	return $percentile;
}

?>