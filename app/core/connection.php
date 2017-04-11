<?php
	namespace app\core;

	class Connection
	{
		public $connection;

		public function __construct()
		{
			$this->connection = Db::getConnection();
		}

	}