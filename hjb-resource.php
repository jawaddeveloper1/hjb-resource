<?php 
/*
Plugin Name: HJB Resource
*/

if(!defined('ABSPATH')){
    exit;
}

if(!defined('hjb_plugin_dir_path')){
    define('hjb_plugin_dir_path',plugin_dir_path(__FILE__));
}

/* Job Custom Post Type */
require  hjb_plugin_dir_path .'/inc/job-post-type.php';

/* Job Country Taxonomy */
require hjb_plugin_dir_path .'/inc/jobcountry-taxomony.php';


/* Job Category Taxonomy */
require hjb_plugin_dir_path .'/inc/jobcategory-taxomony.php';