<?php 

namespace Interaction\Interface;

Interface Database
{
	function config();

	function getInstance();

	function exec();

	function query();

	function beginTransaction();

	function commit();

	function rollback();

	function errorCode();

	function errorInfo();

	function lastInsertId();
}