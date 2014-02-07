<?php
/* @var $this AlbumController */
/* @var $data Album */
?>

<div class="view">
    <div class='imgWrap'>
        <?php
            echo CHtml::link(
              //  'link text or image',
                CHtml::image('/upload/thumbs/'.$data->filename,
                        CHtml::encode($data->alt_text),array()),
                '/upload/'.$data->filename,
                array('rel'=>'colorBox','title'=>CHtml::encode($data->alt_text))
            );
        ?>
    </div>

    <div class='caption'>
        <?php echo CHtml::encode($data->caption);?>
    </div>
</div>
