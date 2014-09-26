<?php
namespace {	
	
	class RarEntry
	{
		private $rarfile;
		private $position;
		private $name;
		private $unpacked_size;
		private $packed_size;
		private $host_os;
		private $file_time;
		private $crc;
		private $attr;
		private $version;
		private $method;
		private $flags;
		public function extract($path, $filename, $password, $extended_data) {}
		public function getPosition() {}
		public function getName() {}
		public function getUnpackedSize() {}
		public function getPackedSize() {}
		public function getHostOs() {}
		public function getFileTime() {}
		public function getCrc() {}
		public function getAttr() {}
		public function getVersion() {}
		public function getMethod() {}
		public function getStream($password) {}
		public function isDirectory() {}
		public function isEncrypted() {}
		public function __toString() {}
	}
}
