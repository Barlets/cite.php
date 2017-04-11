<?php
	namespace app\core;

	class View
	{

		function generate($content_view, $template_view, $data = NULL, $error = NULL)
		{

			include ROOT . 'app/views/' . $template_view;
		}
	}