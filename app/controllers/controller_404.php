<?php

	class Controller_404 extends \app\core\Controller
	{

		function action_index()
		{
			$this->view->generate('404_view.php', 'template_view.php');
		}

	}
