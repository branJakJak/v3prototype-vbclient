<?php
/* @var $this CampaignController */

$this->breadcrumbs=array(
	'Campaign',
);
$baseUrl = Yii::app()->theme->baseUrl; 

$chartDataProvider = array();
foreach (range(0, 12) as $key => $value) {
	$chartDataProvider[] = array(
			'name'=>"Status #".uniqid(),
			'y'=>rand(0, 5000),
		);
}

?>
<style type="text/css">
	#content > div.row > div.span9 > div.row > div > h3{
		margin-bottom:0px;
	}
	#content > div.row > div.span9 > div.row > div > h3 > hr {
		margin-top:0px;
		margin-bottom:0px;
	}
	#content > div.row > div.span9 > div.row > div > h3 > small	{
		font-size:30px;
	}
</style>

<div class="row">
	<div class="span12">
		<br>
	</div>
	<div class="span3 offset1">

		<div class="summary">
          <ul>
          	<li>
          		<a href="/export/today">
          		<span class="summary-icon">
                	<!-- <img src="<?php echo $baseUrl ;?>/img/credit.png" width="36" height="36" alt="Monthly Income"> -->
                	<img src="//icons.iconarchive.com/icons/double-j-design/origami/32/clock-icon.png" width="36" height="36" alt="Monthly Income">
                </span>
                <span class="summary-number">
                	<?php echo number_format(rand(20, 5000)) ?>
                </span>
                <span class="summary-title">Submitted Today</span>
                </a>
            </li>
            <li>
            	<a href="/export/all">
            	<span class="summary-icon">
                	<!-- <img src="<?php echo $baseUrl ;?>/img/page_white_edit.png" width="36" height="36" alt="Open Invoices"> -->
                	<img src="//icons.iconarchive.com/icons/oxygen-icons.org/oxygen/32/Actions-view-calendar-list-icon.png" width="36" height="36" alt="Open Invoices">
                </span>
                <span class="summary-number"><?php echo number_format(rand(20, 5000)) ?></span>
                <span class="summary-title">All Submitted</span>
                </a>
            </li>
            <li>
            	<a href="/export/range">
            	<span class="summary-icon">
                	<!-- <img src="<?php echo $baseUrl ;?>/img/page_white_excel.png" width="36" height="36" alt="Open Quotes<"> -->
                	<img src="//icons.iconarchive.com/icons/guillendesign/variations-3/32/Calendar-2-icon.png" width="36" height="36" alt="Open Quotes<">
                </span>
                <span class="summary-number">Export Range</span>
                <span class="summary-title"> Range</span>
                </a>
            </li>
            <li>
            	<a href="/data/clear" onclick='asdasd'>
            	<span class="summary-icon">
                	<!-- <img src="<?php echo $baseUrl ;?>/img/group.png" width="36" height="36" alt="Active Members"> -->
                	<img src="//icons.iconarchive.com/icons/saki/nuoveXT/32/Actions-history-clear-icon.png" width="36" height="36" alt="Active Members">
                </span>
                <span class="summary-number">Clear Data</span>
                <span class="summary-title"> Delete all data</span>
                </a>
            </li>
          </ul>
        </div>

	</div>
	<div class="span9">
		<div class="row">
			<?php
			$this->widget('bootstrap.widgets.TbAlert', array(
			    'fade'=>true,
			    'closeText'=>'×',
			    'alerts'=>array( 
				    'info'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
				    'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
				    'warning'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
			    ),
			)); ?>
		</div>
		<div class="row">
			<div class="span2 well text-center">
				<h3>
					<img src="//icons.iconarchive.com/icons/graphicloads/100-flat/48/phone-call-icon.png"><br>
					Diallable Leads
					<hr>
					<small>
						<?php echo rand(0, 5000) ?>
					</small>
				</h3>
			</div>
			<div class="span2 well text-center">
				<h3>
					<img src="//icons.iconarchive.com/icons/uiconstock/e-commerce/48/credit-card-icon.png"> <br>
					Credit Used
					<hr>
					<small>
						<?php echo rand(0, 5000) ?>
					</small>
				</h3>
			</div>
			<div class="span2 well text-center">
				<h3>
					<img src="//icons.iconarchive.com/icons/paomedia/small-n-flat/48/money-icon.png"> <br>
					Balance
					<hr>
					<small>
						<?php echo rand(0, 5000) ?>
					</small>
				</h3>
			</div>
			<div class="span2 well text-center">
				<h3>
					<img src="//icons.iconarchive.com/icons/graphicloads/colorful-long-shadow/48/Check-2-icon.png"> <br>
					5 Press
					<hr>
					<small>
						<?php echo rand(0, 5000) ?>
					</small>
				</h3>
			</div>
			<div class="span2 well text-center">
				<h3>
					<img src="//icons.iconarchive.com/icons/graphicloads/flat-finance/48/time-icon.png"> <br>
					Total Minutes
					<hr>
					<small>
						<?php echo rand(0, 5000) ?>
					</small>
				</h3>
			</div>
		</div>
    	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-th-list"></span>'.$campaignname,
			'titleCssClass'=>''
		));
		?>

            <?php
                $this->widget(
                    'yiiwheels.widgets.highcharts.WhHighCharts',
                    array(
                        'pluginOptions' => array(
                                "chart"=>array(
                                        "type"=>'pie'
                                    ),
                                "title"=>"Leads and status report",
                                "pie"=>array(
                                        "allowPointSelect"=>true,
                                        "cursor"=>'pointer',
                                        "dataLabels"=>array(
                                                'enabled'=> false,
                                                // 'format'=> '<b>{point.name}</b>: {point.percentage:.1f} %',
                                                // 'style'=> array(
                                                //     'color'=> "(Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'"
                                                // )                               
                                            ),
                                        "showInLegend"=>true
                                    ),
                                "series"=>array(
                                        array(
                                                "Name"=>"Leads",
                                                "colorByPoint"=>true,
                                                "data"=>$chartDataProvider
                                            )
                                    )
                            ),
                    )
                );
            ?>    

        <?php $this->endWidget(); ?>
	</div>

</div>
