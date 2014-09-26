<?php
namespace 
{
    class RarArchive
    {
        public function open($filename, $password = null, $volume_callback = null) {}

        /**
         * @return \RarEntry[]
         */
        public function getEntries() {}

        /**
         * @return \RarEntry
         */
        public function getEntry($filename) {}
        public function isSolid() {}
        public function getComment() {}
        public function isBroken() {}
        public function setAllowBroken($allow_broken) {}
        public function close() {}
        public function __toString() {}
    }
}
