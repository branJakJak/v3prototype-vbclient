<?php

class ExportController extends Controller
{
	public function actionIndex()
	{
		echo "@TBD";
	}
	public function actionAll()
	{
		$fileName = 'export-data-all';
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);
		header("Content-Type: application/octet-stream");
		header("Content-Disposition: attachment; filename=\"$fileName.csv\";" );
		header("Content-Transfer-Encoding: binary");
		$exportFile = Yii::app()->csvExporter->export();
		echo file_get_contents($exportFile);
		die();
	}

	public function actionRange()
	{
		$this->render('range');
	}

	public function actionToday()
	{
		$fileName = 'export-data-today';
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);
		header("Content-Type: application/octet-stream");
		header("Content-Disposition: attachment; filename=\"$fileName.csv\";" );
		header("Content-Transfer-Encoding: binary");
		$exportFile = Yii::app()->csvExporter->export();
		echo file_get_contents($exportFile);
		die();
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}