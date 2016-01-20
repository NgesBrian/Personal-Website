<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{

		$store= new Contact;
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{

			$store->name=$_POST['ContactForm']['name'];	
			$store->email=$_POST['ContactForm']['email'];
			$store->subject=$_POST['ContactForm']['subject'];
			$store->body=$_POST['ContactForm']['body'];		
			$store->save();

			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";
			
				mail(Yii::app()->params['nges.brian@gmail.com'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting me. I will respond to you as soon as possible.');
					
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionAdmin()
	{
    $model=new Admin;
	

   
    if(isset($_POST['ajax']) && $_POST['ajax']==='admin-admin-form')
    {
        echo CActiveForm::validate($model);
        Yii::app()->end();
    }
   

    if(isset($_POST['Admin']))
    {

		$admin= new Admin;
		$model=new Admin;		
		
		if(isset($_POST['Admin']))
		{
	
				//var_dump($_POST);	
				$name=$_POST['Admin']['name'];
				$pwd=$_POST['Admin']['password'];
				$email=$_POST['Admin']['email'];
                                Yii::app()->user->setState('uname',$_POST['Admin']['name']);
				$rows=Admin::model()->findAll();
	
			 foreach($rows as $value){
				if( $value->name===$name && $value->password === $pwd && $value->email===$email ){
						
						$this->render('manage');
					exit;
				}
				

			}

		}	
			else {
					$this->render('admin');
					exit;
				}
					
			exit;	

	}
	
    $this->render('admin',array('model'=>$model));
}

	public function actionCompose()
{
    $model=new Compose;
    $insert=new Compose; 
  
    
    if(isset($_POST['ajax']) && $_POST['ajax']==='partnersinbox-compose-form')
    {
        echo CActiveForm::validate($model);
        Yii::app()->end();
    }
    

    if(isset($_POST['Compose']))
    {
   
    $insert->email=$_POST['Compose']['email'];
	$Email=$_POST['Compose']['email'];
    $insert->subject=$_POST['Compose']['subject'];
    $insert->body=$_POST['Compose']['body'];
  	 $insert->date=DATE("Y-m-d H+6:i:s");
    $insert->save();
   

				mail("nges,brian@gmail.com",$insert->subject,$insert->date,$insert->body);
				mail($Email,$insert->subject,$insert->date,$insert->body);
				 $this->render('mails');
			    exit;
				 $this->render('mails');
				$this->refresh();
        $model->attributes=$_POST['Compose'];
        if($model->validate())
        {
            // form inputs are valid, do something here
    		$this->render('manage');
		exit;
			
	
        }
    

	}
	
    $this->render('compose',array('model'=>$model));
}

	public function actionMails(){
		$this->render('mails');
	
	
	}

	public function actionInbox(){
		$this->render('inbox');
	
	
	}

	public function actionDelete(){
		$model=new Contact;
                $some =new ContactForm;

				$row=Contact::model()->findall();
		           foreach ($row as $value) {
	            	
							//$clas::model()->deleteAll("name"===$_POST['Dismis']['name']);
							Yii::app()->db->createCommand("delete from `mywebsite`.`".strtolower('contact')."` where `".strtolower('contact')."`.`name`='".$value->name."'")->query();
							$this->render('inbox');
							exit;
	            	}
					
	            }

	public function actionDelet(){
		
                $some =new Compose;

				$row=Compose::model()->findall();
		           foreach ($row as $value) {
	            	
							//$clas::model()->deleteAll("name"===$_POST['Dismis']['name']);
							Yii::app()->db->createCommand("delete from `mywebsite`.`".strtolower('compose')."` where `".strtolower('compose')."`.`email`='".$value->email."'")->query();
							$this->render('mails');
							exit;
	            	}
					
	            }
                    
        public function actionReply(){                    
	
    $model=new Reply;

    // uncomment the following code to enable ajax-based validation
    /*
    if(isset($_POST['ajax']) && $_POST['ajax']==='reply-reply-form')
    {
        echo CActiveForm::validate($model);
        Yii::app()->end();
    }
    */
	$insert=new Compose;
    if(isset($_POST['Reply']))
    {

	$subject=Yii::app()->user->getState('subject');
	$email=Yii::app()->user->getState('email');
	$body=$_POST['Reply']['body'];
	$date=DATE('Y:M:D');

	$insert->subject=$subject;
	$insert->email=$email;
	 $insert->body=$_POST['Reply']['body'];
	 $insert->date=DATE("Y-m-d H+6:i:s");
	$insert->save();
	
		
		mail($email,$subject,$date,$body);
		$this->render('mails');
        $model->attributes=$_POST['Reply'];
		exit;
        if($model->validate())
        {
            // form inputs are valid, do something here
            return;
        }
    }
    $this->render('reply',array('model'=>$model));
}          
   
        
        
      	public function actionWho(){
		$this->render('who');
	}
	
	public function actionWhere(){
		$this->render('where');
	
	}

       	public function actionWhat(){
            $this->render('what');
	
	}
	}
