<?php


/**
** Класс конфигурации базы данных
*/
class DB {
	const USER = "root";
	const PASS = "root";
	const HOST = "localhost";
	const DB   = "kamil_mvc_app";

	public static function connToDb() {
		$user = self::USER;
		$pass = self::PASS;
		$host = self::HOST;
		$db 	= self::DB;

		$conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
		return $conn;

	}
} 