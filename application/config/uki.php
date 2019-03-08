<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| WARNING: You MUST set this value!
|
| If it is not set, then CodeIgniter will try guess the protocol and path
| your installation, but due to security concerns the hostname will be set
| to $_SERVER['SERVER_ADDR'] if available, or localhost otherwise.
| The auto-detection mechanism exists only for convenience during
| development and MUST NOT be used in production!
|
| If you need to allow multiple domains, remember that this file is still
| a PHP script and you can easily do that on your own.
|
*/
$config['site']['title'] = getenv('SITE_TITLE');
$config['base_url'] = getenv('BASEURL');
$config['faculty'] = getenv('FACULTY');
$config['gallery'] = getenv('GALLERY_PAGE_ID');
$config['category']['newsupdate'] = getenv('CATEGORY_NEWS_UPDATE');
$config['category']['announcement'] = getenv('CATEGORY_NEWS_ANNOUNCEMENT');
$config['upload']['host'] = getenv('ASSETS_URL');
$config['upload']['media']['path'] = '/';
$config['upload']['gallery']['path'] = 'gallery/';
$config['upload']['slideshow']['path'] = 'slideshow/';
$config['upload']['testimonial']['path'] = 'testimonial/';
$config['upload']['events']['path'] = 'events/';
$config['livechat']['host'] = getenv('LIVECHAT_URL');