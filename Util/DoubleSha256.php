<?php

namespace AStar\Util;

    class DoubleSha256{

        public function hashFile($fileToHash){

            $digest = hash("sha256", $fileToHash);
            $bytesData = hash("sha256", $digest);

            return $bytesData;

        }
    }


?>