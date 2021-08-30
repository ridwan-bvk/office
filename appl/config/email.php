<?php	if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * PHP 5
 *
 * Application System Environment (X-ASE)
 * laxono :  Rapid Development Framework (http://www.laxono.us)
 * Copyright 2011-2015.
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource email.php
 * @copyright Copyright 2011-2015, laxono.us.
 * @author blx
 * @package 
 * @subpackage	
 * @since Aug 29, 2015
 * @version 
 * @modifiedby 
 * @lastmodified	
 *
 *
 */

$config['protocol'] = 'smtp';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'iso-8859-1';
//$config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;

$config['smtp_host'] = 'ssl://smtp.googlemail.com';
$config['smtp_port'] = '465';
$config['smtp_user'] = 'eoffice.ham@gmail.com';
$config['smtp_pass'] = 'buanavaria102938';
$config['smtp_timeout']='10';

$config['mailtype'] = "html";
$config['newline'] = "\r\n";
$config['crlf'] = "\r\n";

/**
 * End of file email.php 
 * Location: ./.../.../.../email.php 
 */