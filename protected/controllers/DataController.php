<?php

class DataController extends Controller
{
	public function actionClear()
	{
		$refererurl = Yii::app()->request->getUrlReferrer();
		Yii::app()->user->setFlash("success","Success! Data cleared");
		/**
		 * @todo  - clear data here
		 */
		if (!isset($refererurl) && empty($refererurl)) {
			$refererurl = $this->createUrl('/site/index');
		}
		$this->redirect($refererurl);
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