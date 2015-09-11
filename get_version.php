<?php

if (defined('HHVM_VERSION')) {
	echo HHVM_VERSION;
} else {
	echo 'No HHVM_VERSION Found';
}