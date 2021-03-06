<?php
/* @var $this ComposeController */
/* @var $model Compose */
/* @var $form CActiveForm */
?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'compose-compose-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject'); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textarea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>
        
         	<div class="text-center">
 			         <?php echo CHtml::link('<button class="btn btn-danger" type="submit">inbox</button>',array('/site/inbox',));?>
                                 <?php  echo CHtml::link('<button class="btn btn-success" type="submit">Mails</button>',array('/site/mails',));?>
	 </div>
		
 	

<?php $this->endWidget(); ?>

</div><!-- form -->
