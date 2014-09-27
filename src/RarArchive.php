<?php
namespace 
{
    class RarArchive
    {
        /** @return \RarArchive */
        public static function open($filename, $password = null, $volume_callback = null) {}

        /**
         * @return \RarEntry[]
         */
        public function getEntries() {}

        /**
         * @return \RarEntry
         */
        public function getEntry($filename) {}
        /** @return boolean */
        public function isSolid() {}
        /** @return string */
        public function getComment() {}
        /** @return boolean */
        public function isBroken() {}
        public function setAllowBroken($allow_broken) {}
        public function close() {}
        public function __toString() {}
    }
}
