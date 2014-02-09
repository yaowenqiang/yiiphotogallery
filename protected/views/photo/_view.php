<?php
/* @var $this PhotoController */
/* @var $data Photo */
?>

<div class="view">
    <div class='imgWrap'>
        <?php
            echo CHtml::link(
              //  'link text or image',
                CHtml::image($data->getThumb(),
                        CHtml::encode($data->alt_text),array()),
                $data->getUrl(),
                array('rel'=>'colorBox','title'=>CHtml::encode($data->alt_text))
            );
        ?>
    </div>

    <div class='caption'>
        <?php echo CHtml::encode($data->caption);?>
    </div>

</div>
