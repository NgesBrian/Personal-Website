<!DOCTYPE html>
<html>
<head>

</head>

<body style="color:#9ACD32">
 	<div class="text-left" >
 			         <?php echo CHtml::link('<button class="btn btn-danger" type="submit">inbox</button>',array('/site/inbox',));?>			
	 </div>
	 <div class="text-center">
	 		         <?php echo CHtml::link('<button class="btn btn-warning" type="submit">Mails</button>',array('/site/mails',));?>			
	</div>
	<div class="text-right">
			         <?php echo CHtml::link('<button class="btn btn-primary" type="submit">compose</button>',array('/site/compose',));?>			
	

	<table class='table table-striped' style="color:black">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Subject</th>
			<th>Body</th>
			<th>Date</th>
		
		</thead>
	
	<div class ="text-center">
		hello you are in the inbox 
	</div>
	<div class="text-center" >	



	<?php
		
		$model=new Contact;
		$row=Contact::model()->findAll();
            

		foreach($row as $value){
				 Yii::app()->user->setState('subject', $value->subject);
                Yii::app()->user->setState('email', $value->email);

			echo "
		
			

				<tbody>
				
					<td>$value->name</td>
					<td>$value->email</td>
						<td>$value->subject</td>
					
						
					<td>$value->body</td>
					<td>$value->date</td>
                                                

				</tbody>
					";
                		echo '<td>';	echo CHtml::link('<button class="btn btn-primary" type="submit">delete</button>',array('site/delete',));						   
				echo '</td>';
				echo '<td>';	echo CHtml::link('<button class="btn btn-danger" type="submit">reply</button>',array('site/reply',));						   
				echo '</td>';        
		}
	?>

<table>
</body>
</html>
