<?php
	namespace app\core;
	use \app\components\Helper;

	class Model extends Helper
	{
		protected $connection;

		function __construct()
		{
			$this->connection = Db::getConnection();
		}

		public function get_data($data)
		{

		}

	}