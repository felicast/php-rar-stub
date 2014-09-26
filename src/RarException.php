<?php
namespace {	
	
	class RarException extends \Exception
	{
		protected $message;
		protected $code;
		protected $file;
		protected $line;
		private static $usingExceptions;
		public function setUsingExceptions($using_exceptions) {}
		public function isUsingExceptions() {}
		public function __construct($message, $code, $previous) {}
		public function getMessage() {}
		public function getCode() {}
		public function getFile() {}
		public function getLine() {}
		public function getTrace() {}
		public function getPrevious() {}
		public function getTraceAsString() {}
		public function __toString() {}
	}
}
