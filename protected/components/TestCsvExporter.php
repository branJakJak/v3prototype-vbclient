<?php 

/**
* TestCsvExporter
*/
class TestCsvExporter extends CComponent
{
	public function init()
	{
		
	}
	public function export()
	{
        $tempFile = tempnam(sys_get_temp_dir(), "temp");
        $fileRes = fopen($tempFile, "w+");
        fputcsv($fileRes, array("Mobile Number"));
        foreach (range(0, 300) as $key => $value) {
        	fputcsv($fileRes, array('07321654987')); 
        }
        fclose($fileRes);
        return $tempFile;
	}
}