<?php

	namespace vendor;

	use app\core\Connection;

	class User extends Connection
	{
		public function __construct()
		{
			parent::__construct();
			echo __CLASS__;
		}

		public function get_permission()
		{

		}

	}
