<?php
/* @var $this ExportController */

$this->breadcrumbs=array(
	'Export'=>array('/export'),
	'Range',
);
?>
<div class='row'>
	<div class='span4 offset4'>
		<h1>
			Export Data From
		</h1>

		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Export range',
			));
		?>
		<?php echo CHtml::beginForm(array('/export/range'), 'POST', array('class'=>'form','style'=>'padding: 30px')); ?>
			<label>From : </label>
			<?php 
 				$this->widget('zii.widgets.jui.CJuiDatePicker',array(
 				    'name'=>'dateFrom',
 				    'options'=>array(
 				        'showAnim'=>'fold',
 				        'changeYear'=>true,
 				        'changeMonth'=>true
 				    ),
 				    'htmlOptions'=>array(
 				        'style'=>'height:20px;'
 				    ),
 				));
			?>
			<label>To : </label>
			<?php 
 				$this->widget('zii.widgets.jui.CJuiDatePicker',array(
 				    'name'=>'dateTo',
 				    'options'=>array(
 				        'showAnim'=>'fold',
 				        'changeYear'=>true,
 				        'changeMonth'=>true
 				    ),
 				    'htmlOptions'=>array(
 				        'style'=>'height:20px;'
 				    ),
 				));
			?>
			<br>
			<hr>
			<button type="submit" class="btn btn-default btn-block">Submit</button>
		<?php echo CHtml::endForm(); ?>
		<?php
			$this->endWidget();
		?>
	</div>
</div>
