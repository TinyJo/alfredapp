<?php

function clean_utf8($string) {
	return iconv('UTF-8', 'UTF-8', $string);
}

?>