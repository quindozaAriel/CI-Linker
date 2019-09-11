<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/* 
This serves as styles or css files declaration 
DO NOT CHANGE ARRAY NAME
*/
$style_tags  = [
	'datatable'           => base_url().'assets/plugins/DataTables/datatables.min.css',
	'user_maintenance'    => base_url().'assets/styles/css/user_maintenance/user_maintenance.min.css',
	'parts_registration'  => base_url().'assets/styles/css/parts_registration/parts_registration.min.css'
];


/* 
This serves as script files declaration 
DO NOT CHANGE ARRAY NAME
*/
$script_tags = [
	'datatable'           => base_url().'assets/plugins/DataTables/datatables.min.js',
	'user_maintenance'    => base_url().'assets/scripts/user_maintenance/user_maintenance.js',
	'pr_front'            => base_url().'assets/scripts/parts_registration/frontend.js',
	'pr_back'             => base_url().'assets/scripts/parts_registration/backend.js',
];


