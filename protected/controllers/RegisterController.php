<?php

class RegisterController extends Controller
{

	// public function actions()
	// {
	// 	return array(
	// 		// captcha action renders the CAPTCHA image displayed on the contact page
	// 		'captcha'=>array(
	// 			'class'=>'CCaptchaAction',
	// 			'backColor'=>0xFFFFFF,
	// 		),
	// 		// page action renders "static" pages stored under 'protected/views/site/pages'
	// 		// They can be accessed via: index.php?r=site/page&view=FileName
	// 		'page'=>array(
	// 			'class'=>'CViewAction',
	// 		),
	// 	);
	// }

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// crear una instancia del modelo, para poder validar el formulario, si no no puedo
		$model=new RegisterForm;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'

		// le paso model a la vista
		$this->render('index',array('model'=>$model));	
		// $this->render('index');
		// echo "blog";
	}

	// public function actionError()
	// {
	// 	if($error=Yii::app()->errorHandler->error)
	// 	{
	// 		if(Yii::app()->request->isAjaxRequest)
	// 			echo $error['message'];
	// 		else
	// 			$this->render('error', $error);
	// 	}
	// }

		public function actionRegisterr()
	{
		$model=new RegisterForm;
		if(isset($_POST['ContactRegister']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{

				echo "correcto";
				// $name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				// $subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				// $headers="From: $name <{$model->email}>\r\n".
				// 	"Reply-To: {$model->email}\r\n".
				// 	"MIME-Version: 1.0\r\n".
				// 	"Content-Type: text/plain; charset=UTF-8";

				// mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				// Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				// $this->refresh();
			}
		}
		// $this->render('contact',array('model'=>$model));
	}
	

	
}