<!DOCTYPE html>
<html>
<head>

</head>
<body>
 	<div class="text-left">
 			         <?php echo CHtml::link('<button class="btn btn-danger btn-block" type="submit">inbox</button>',array('/site/inbox',));?>			
	 </div><br>
	 <div class="text-center">
	 		         <?php echo CHtml::link('<button class="btn btn-warning btn-block" type="submit">Mails</button>',array('/site/mails',));?>			
	</div><br>
	<div class="text-right">
			         <?php echo CHtml::link('<button class="btn btn-primary btn-block" type="submit">compose</button>',array('/site/compose',));?>			
	
            </div><br>
</html>
