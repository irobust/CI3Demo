<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hook['post_controller_constructor'] = array(
		'class' 	=> 'Authen',
		'function' 	=> 'login',
		'filename'	=> 'Authen.php',
		'filepath'	=> 'hooks'
);