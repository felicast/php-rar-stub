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
		public function extract($path, $filename = '', $password = null, $extended_data = false) {}
		public function getPosition() {}
		/** @return string */
		public function getName() {}
		/** @return int */
		public function getUnpackedSize() {}
		/** @return int */
		public function getPackedSize() {}
		/** @return string */
		public function getHostOs() {}
		/** @return int */
		public function getFileTime() {}
		/** @return string */
		public function getCrc() {}
		/** @return string */
		public function getAttr() {}
		/** @return string */
		public function getVersion() {}
		/** @return string */
		public function getMethod() {}
		public function getStream($password) {}
		/** @return boolean */
		public function isDirectory() {}
		/** @return boolean */
		public function isEncrypted() {}
		public function __toString() {}
	}
}
