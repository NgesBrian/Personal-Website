<!DOCTYPE html>
<html>
<head>

</head>
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div>
<div class ="container">
	<div class="jumbotron">
	<div  class="text-center">
		<p>

		<h2 style="color:yellow">NGES B  TECH .THE CENTER OF TECHNOLOGY.<h3>
		<h3 style="color:yellow"><b> "We are giants because we stand on the shoulders of great giants"</b></h3>
		<h3 style="color:yellow"><i>"There Is Nothing Impossible .Even Impossible Says I am possible"</i><n4>
		</p>
	</div>
	</div>

	<div id="welcome" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
<!--		<div class ="container" >
		<div class="text-left">
			<ol class="nav nav-tab nav stacked affix" data-spy="affix" data-offset-top="190" >
			<li class ="active"><a href ="#who">Who We Are</a><li>
			<li><a href="#what">What We offer</a></li>
			<li><a href="#our">Our History</a></li>
			<li><a href="#where">Where We Are</a></li>
			<li><a href="#contact" >Contact US</a></li>
			</ol>
		</div>
	<div>	
	-->
		
			<div  class="text-center" style="color:#BA55D3">
				<h1 id="who">
                                <?php echo CHtml::link('ABOUT Nges B',array('site/who'));?> 
                                </h1>
				</div>
				<div >
				<h4 class="text-center" >
					<p class="lead">
			<br>
	I am a  Computer engineer, an Artise, A song Writer and A DJ<br>

I am a software Engineer who has  experience in software development. I have worked on different IDES and frameworks.Some of them are: Visual Studio, Netbeens ,Eclipse , Yii framwork, Bootstrap, Jquery,Angular Js, Laravel just to name a few.<br> 
But am not limited to Netbeans, Visual studio Yii, Laravel and the above mentioned.<br> I can program in HTML,CSS, JavaScript,PHP,C, C++,and Java computer programming languages.<br>
 
<?php echo CHtml::link('see more',array('site/who'));?>
			</h4>
					 </div>
		
		
			<div class="text-center" style="color:#FF0000">
			<h1 id="what">
                            <?php echo CHtml::link('What Nges B Tech offers',array('site/what'));?>
                        </h1>
			</div>
                            <div class="text-center" >
				<h4>
					<p class="lead">Nges B with  a strong development team from Nges B tech,  offers:
				<ol>
					<li> development of software for companies,individuals, businesses and anything technologically related aids.</li><br>
	
					<li>We debug codes, maintain sofwares , renovate softwares, and give any software related aids.</li><br>
					<li>We also help in software design as we have expert software designers and engineers.</li><br>
					<li>We teach software development,web design and development and computer related course</li>
                                            <?php echo CHtml::link('see more',array('site/what'));?>
		
                                </ul>		
                                </h4>
                            </div>
				
				<div class="text-center" style="color:#9ACD32">
					<h2 id="where">
                                            <?php echo CHtml::link('Where Is Nges B',array('site/where'));?>
                                        </h2>
                                    
					<h4 class="text-center">
					
						<p class="lead">Nges B  is currently working with "Nges B tech" as the CEO and  a  software Engineer<br>
										"Nges B tech" is an in-house startup found in Cameroon -Buea -Molyko -tared  Malingo Street at Pope John Paul II Cite.<br>
										Nges B still do jobs as and Individual as the case may be.<br> 
										                                        
										<?php echo CHtml::link('see more',array('site/where'));?>
					</h4>
					</h2>
					</div>
			
				
				<div class="text-center" style="color: 	#0000CD">
				<h2 id="contact">Contact Me</h2>
				</div>
                                    
						<h4 class="text-center">
							<p class="lead">
							  
							  You can call Nges Brian usung the Numbers<em style=" color:pink">(+237)676023729 or (00237)655771398</em><br>
							  you can write Nges  through the email <b class="text-warning">nges.brian@gmail.com</b><br>
							  OR Through  the following pages<br>
						  <div id="Get" >
							  <!--<form action="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/site/contact.php"> 
							-->
 <?php echo CHtml::link(' <img src=" bootstrap/img/fb.jpeg" height="120px" width="120px">	','https://www.facebook.com/njunglenges.brian');?>	
<?php echo CHtml::link(' <img src="bootstrap/img/tweet.jpeg" height="120px" width="120px">	','https://twitter.com/nges_b');?>		
<?php echo CHtml::link(' <img src="bootstrap/img/g++.jpeg" height="120px" width="120px">	','https://plus.google.com/u/0/108128457337391829998/posts');?>		

<?php echo CHtml::link( '<img src="bootstrap/img/me.jpeg" height="120px" width="120px">',array('/site/contact',));?><br><br>

							  
				         <?php echo CHtml::link('<button class="btn btn-primary" type="submit">Contact Us</button>',array('/site/contact',));?>			
							  
							  
							  
							  
							</p>
						</h4>					
		</div>		
</html>
