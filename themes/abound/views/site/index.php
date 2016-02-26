<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<?php
$gridDataProvider = new CArrayDataProvider(array(
    array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS','usage'=>'<span class="inlinebar">1,3,4,5,3,5</span>'),
    array('id'=>2, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript','usage'=>'<span class="inlinebar">1,3,16,5,12,5</span>'),
    array('id'=>3, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML','usage'=>'<span class="inlinebar">1,4,4,7,5,9,10</span>'),
    array('id'=>4, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript','usage'=>'<span class="inlinebar">1,3,16,5,12,5</span>'),
    array('id'=>5, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML','usage'=>'<span class="inlinebar">1,3,4,5,3,5</span>'),
));
/*generate campaign data*/
$campaignCollectionArr = array();
foreach (range(0, 3) as $key => $value) {
    $campaignCollectionArr[] = array(
            'id'=>$key+1,
            'campaign_name'=>"Campaign # ".($key+1),
            'balance'=>rand(0, 5000),
            'credit_used'=>rand(0, 5000),
            'dialable_leads'=>rand(0, 5000),
            'leads'=>rand(0, 5000),
            'total_minutes'=>rand(0, 5000),
        );
}
?>

<style type="text/css">
    .campaign-card-container {
        text-align:center;
    }
    .campaign-cards {
        margin-bottom: 50px;
    }
    .campaign-cards h4 {
        font-size: 15px;
        padding-left: 9px;
    }

</style>


<div class="row">
    <div style="margin: 5px 50px" class='campaign-card-container'>
    <h1>Campaigns</h1>
    <hr>
        <?php foreach ($campaignCollectionArr as $key => $value): ?>
        <div class="span3 campaign-cards">
            <?php
                $this->beginWidget('zii.widgets.CPortlet', array(
                    'title'=>"<strong>".$value['campaign_name']."</strong>",
                ));
            ?>
                <h4>
                    Balance
                    <small><?php echo $value['balance'] ?></small>
                </h4>
                <hr>
                <h4>
                    Credit Used
                    <small><?php echo $value['balance'] ?></small>
                </h4>
                <hr>
                <h4>
                    Diallable leads
                    <small><?php echo $value['dialable_leads'] ?></small>
                </h4>
                <hr>
                <h4>
                    Leads
                    <small><?php echo $value['leads'] ?></small>
                </h4>
                <hr>
                <h4>
                    Total Minutes
                    <small><?php echo $value['total_minutes'] ?></small>
                </h4>
                <hr>
                <?php echo CHtml::link('More Details >>', array('/campaign/'.$value['campaign_name']), array('class'=>'btn btn-default btn-block')); ?>
            <?php
                $this->endWidget();
            ?>
        </div>        
        <?php endforeach ?>
    </div>
    </div>
</div>
