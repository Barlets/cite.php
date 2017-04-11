<?php
	namespace app\core;

	class Db
	{

		public static function getConnection()
		{
			$paramsPath = ROOT . 'app/config/db_parameters.php';
			$params = include($paramsPath);

			$connection = new \mysqli($params['host'], $params['user'], $params['password'], $params['dbname']);

			if (($connection->connect_errno)) {
				echo 'Failed to connect MySQL: ' . $connection->connect_error;
			}
			return $connection;
		}
	}