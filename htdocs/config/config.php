<?php

class Config {	

	public static function get($param) {
		
		$config = array (
			
			// name of website
			'site_name' => 'DDAC Airways',
			
			// base url
			'base_url' => 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']),
			
			// base path
			'base_path' => realpath(__DIR__ . '/..'),
			
			// home page
			'home' => 'home',
			
			// write user actions to usage.log file (true/false)
			'write_log' => false,
		
			// database server
			'db_host' => '127.0.0.1',
			
			// database login
			'db_username' => '',
			'db_password' => '',
			
			// database name
            'db_name' => '',
            
			// file directory mode
			// 0755 = everything for owner, read and execute for others
			'new_dir_mode' => 0755,
			
			// time/date format - see php date()
			'time_format' => 'd/m/y',
		
			// this restricted files will be hidden (no wildcards)
			'restricted_files' => array('.htaccess','Thumbs.db'),
		
			// user's cookie
			'cookie_name' => 'hash',
			
			// cookie expiry (86400 = a day)
			'cookie_expiry' => 86400
					
		);
		
		if(isset($config[$param])) {
			return $config[$param];
		}
	}
}