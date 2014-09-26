<?php
namespace 
{
	class RarArchive
	{
		public function open($filename, $password = null, $volume_callback = null) {}
		public function getEntries() {}
		public function getEntry($filename) {}
		public function isSolid() {}
		public function getComment() {}
		public function isBroken() {}
		public function setAllowBroken($allow_broken) {}
		public function close() {}
		public function __toString() {}
	}
}
