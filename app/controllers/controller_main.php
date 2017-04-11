<?php

	class Controller_Main extends \app\core\Controller
	{

		function action_index()
		{
			$user = new \vendor\User();

			$this->view->generate('main_view.php', 'template_view.php');
		}

	}