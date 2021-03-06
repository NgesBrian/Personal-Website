<?php
/* @var $this ReplyController */
/* @var $model Reply */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reply-reply-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<h4>	<?php	$subject=Yii::app()->user->getState('subject');
	$email=Yii::app()->user->getState('email');

	echo "EMAIL:"; echo $email;	
?><br><br>
<?php	$subject=Yii::app()->user->getState('subject');
	$email=Yii::app()->user->getState('email');

	echo "SUBJECT:"; echo $subject;	
?>
<h4>
	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
	<?php echo $form->textarea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
