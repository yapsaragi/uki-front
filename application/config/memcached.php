<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// --------------------------------------------------------------------------
// Servers
// --------------------------------------------------------------------------

$memcached = array();
$memcached['servers'] = array(
	'hostname' => getenv('MEMCACHED_HOST'),
	'port' => getenv('MEMCACHED_PORT'),
	'weight' => getenv('MEMCACHED_WEIGHT'),
	'persistent' => false
);

 //--------------------------------------------------------------------------
// Configuration
// --------------------------------------------------------------------------

$memcached['config'] = array(
	'engine' => 'Memcache', // Set which caching engine you are using. Acceptable values: Memcached or Memcache
	'prefix' => '', // Prefixes every key value (useful for multi environment setups)
	'compression' => false, // Default: FALSE or MEMCACHE_COMPRESSED Compression Method (Memcache only).
	// Not necessary if you already are using 'compression'
	'auto_compress_tresh' => false, // Controls the minimum value length before attempting to compress automatically.
	'auto_compress_savings' => 0.2, // Specifies the minimum amount of savings to actually store the value compressed. The supplied value must be between 0 and 1.
	'expiration' => 300, // Default content expiration value (in seconds)
	'delete_expiration' => 0, // Default time between the delete command and the actual delete action occurs (in seconds)
	'hostname' => getenv('MEMCACHED_HOST'),
	'port' => getenv('MEMCACHED_PORT'),
	'weight' => getenv('MEMCACHED_WEIGHT'),
	'persistent' => false
);

$config['memcached'] = $memcached;

/* End of file memcached.php */
/* Location: ./system/application/config/memcached.php */