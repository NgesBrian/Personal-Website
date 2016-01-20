<!DOCTYPE html>
<html>
<head>

</head>
	<body>	
 	<div class="text-left">
 			         <?php echo CHtml::link('<button class="btn btn-danger" type="submit">inbox</button>',array('/site/inbox',));?>			
	 </div>
	 <div class="text-center">
	 		         <?php echo CHtml::link('<button class="btn btn-warning" type="submit">Mails</button>',array('/site/mails',));?>			
	</div>
	<div class="text-right">
			         <?php echo CHtml::link('<button class="btn btn-primary" type="submit">compose</button>',array('/site/compose',));?>			
		</div>
	<table class='table table-striped' style="color:black">
		<thead>
			
			<th>Email</th>
			<th>Subject</th>
			<th>Body</th>
			<th>Date</th>
		
		</thead>
	
	<div class ="text-center">
		hello you are in the your Mails
	</div>
	<div class="text-center">	



	<?php
		
		$model=new Compose;
		$row=Compose::model()->findAll();


		foreach($row as $value){
			
			echo "
		
			

				<tbody>
				
				
					<td>$value->email</td>
						<td>$value->subject</td>
					
						
					<td>$value->body</td>
					<td>$value->date</td> 
                                </tbody>
					";
			        echo '<td>';	echo CHtml::link('<button class="btn btn-warning" type="submit">delete</button>',array('site/delet',));						   
				echo '</td>';
				
					
		}
	?>

<table>
</body>
</html>
