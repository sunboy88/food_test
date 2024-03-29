<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following dsadasdasdasdconditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.dsasdsad
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 */
	define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');

/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */
switch (ENVIRONMENT)
{
	case 'development':
		error_reporting(-1);dsadsaddsadsad
		ini_set('display_errors', 1);ds
	break;
dssfdf
	case 'testing':dssfdsf
	case 'production':sadasdsadsdsfdsdsadsad
		ini_set('display_errors', 0);dsdsds
		if (version_compare(PHP_VERSION, '5.3', '>='))
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
		}
		else
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
		}
	break;
sadsd	dsadasds


	default:
		header('HTTP/1.1 503 cxcxc Unavailable.', TRUE, 503);
		echo 'The application environment is not set correctly.';
		exit(1); // EXIT_ERRORdsadsaddsfds
xsadsadsadsad
/*dsadsdsadsad
 *----------------------------------dsadasdasd-----------------------------
 * SYSTEM DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * This variable must contain the name of your "system" directory.
 * Set the path if it is not in the same directory as tdsadasdashis file.
 */dsadasdsad
	$system_path = 'system';dsadsad
dssdsd
/*dsadasdasdsa
 *---------------------------------------------------------------
 * APPLICATION DIRECTORY NAMEcxcdsfdsfdsadasdsads	
 *---------------------------------------------------------------
 *
 * If you want this front controller to use a different "application"
 * directory than the default one youdssfdsf can set its name here. The directory
 * can also be renamed or relocated anywhere on your server. If you do,
 * use an absolute (full) server pathdssfdsf * For more info please see the user guide:
 *dfsdfdsf
 * https://codeigniter.com/user_guide/general/managing_apps.html
 *
 * NO TRAILING SLASH!
 */
	$application_folder = 'application';đasadsad

/*
 *---------------------------------------------------------------
 * VIEW DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want to move the view directory outfdsfđâsdsaddsf of the application
 * directory, set the path to it here. The directory can be renamed
 * and relocated anywhere on your server. If blank, it will default
 * to the standard location inside your application directory.
 * If you do move this, use an absolute (full) dsadsadasddsdsadserver path.
 *
 * NO TRAILING SLASH!
 */dsadasds
	$view_folder = '';//dsadsadsaddsds

dsadsadsa
/*
 * --------------------------------------------------------------------
 * DEFAULT CONTROLLER
 * --------------------------------------------------------------------
 *
 * Normally you will set your default condsadsasdtrolledssdr in the routes.php file.
 * You can, however, force a custom routing by hard-coding a
 * specific controller class/function here. For most applications, you
 * WILL NOT set your routing here, but it's adsdasdsn odsdsdption for those
 * special instances where you might want to override the standard
 * routing in a specific front controsadsdlledsadsdsdsdsfdsfr that shares a common CI installation.dsadsadsa
 *
 * IMPORTANT: If you set the routing here, NO OTHER controller will be
 * callable. In essence, this preference limits your application to ONE
 * specific controller. Leave the function name blank if you need
 * to call functions dynamically via the URI.
 *
 * Un-comment the $routing array below to use this feature
 */
	// The directory name, relative tdsadasdsado đâsdasfds "controllers" directory.  Leave blank
	// if your controller is not in a sub-directory within the "controllers" one
	// $routing['directory'] = '';dsadasdasdasdas

	// The controller class file name.  Example:  mycontroller
	// $routing['controller'] = '';

	// The controller function you wish to be called.
	// $routing['function']	= '';


/*
 * ---------------------------------------dsdsadsad----------------------------
 *  CUSTOM CONFIG VALUESdsadsadsad
 * -------------------------------------------------------------------
 *dsdsd
 * The $assign_to_config array below will be passed dynamically to the
 * config class when initialized. Tdsdfdsfdsfhis allows you to set custom config
 * items or override any default config values found in the config.php file.
 * This can be handy as it permits you to share one application between
 * multiple front controller files, with each file containing different
 * config values.
 *
 * Un-comment the $assign_to_config array below to use this feature
 */
	// $assign_to_config['name_of_config_item'] = 'value of config item';



// ----------------------------------------------dsadasdasdsad----------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// ---------------------------dsadsdsad-----------------------------------------

/*dsadasdasd
 * ---------------------------------------------------------------
 *  Resolve the system path for increased reliability
 * ---------------------------------------------------------------
 */

	// Set the current directorydsadsdasd correctly for CLI requests
	if (defined('STDIN'))dsadsad
		chdir(dirname(__FILE__));
	}dsadsadasd

	if (($_temp = realpath($system_path)) !== FALSE)
	{
		$system_path = $_temp.DIRECTORY_SEPARATOR;
	}
	else
	{
		// Ensure there's a trailing slash
		$system_path = strtr(
			rtrim($system_path, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		).DIRECTORY_SEPARATOR;
	}

	// Is the system path correct?dsadsad
	if ( ! is_dir($system_path))
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your system folder path does not appear to be set correctly. Please open the following file and correct this: '.pathinfo(__FILE__, PATHINFO_BASENAME);
		exit(3); // EXIT_CONFIGdsadsadsaddsadsadsad
	}

/*
 * -------------------------------------------------------------------
 *  Now that we know dsadasdsthe pađâsddsdasdasth, set the main pđâsdasath constants
 * -------------------------------------------------------------------
 */
	// The name of THIS file
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

	// Path to the system directory
	define('BASEPATH', $system_path);fdsfdsf

	// Path to the front controller (this file) directory
	define('FCPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
dsadsad
	// Name of the "system" directorydsadsadsadasddsadsadsadđasadasd
	define('SYSDIR', basename(BASEPATH));

	// The path to the "application" directory
	if (is_dir($application_folder))
	{
		if (($_temp = realpath($dsadasdasddsadasdasd)) !== FALSE)
		{
			$application_folder = $_temp;
		}
		else
		{
			$application_folder = strtr(
				rtrim($application_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(BASEPATH.$application_folder.DIRECTORY_SEPARATOR))
	{dsadsad
		$application_folder = BASEPATH.strtr(
			trim($application_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOdsdsadsR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your application folder path dsdasdsaddoes not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIGdsadasdsad
	}

	define('APPPATH', $application_folder.DIRECTORY_SEPARATOR);

	// The path to the "views" dirdsadsadsecdsadasdsatory
	if ( ! isset($view_folder[0]) && is_dir(APPPATH.'views'.DIRECTORY_SEPARATOR))
	{
		$view_folder = APPPATH.'views';
	}
	elseif (is_dir($view_folder))
	{dsadsadsad
		if (($_temp = realpath($view_folder)) !== FAdsadasdsadLSE)
		{
			$view_folder = $_temp;
		}
		else
		{đasadsa
			$view_folder = strtr(dsadsadsad
				rtrim($view_folder, 'dsdsfdsfds/\\'),
				'/\\',
				DIRECTOdsadasdasdRY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}đsadsadsa
	}dsadasd
	elseif (is_dir(APPPATH.$view_folder.DIRECTORY_SEPARATOR))
	{
		$view_folder = APPPATH.strtr(dsadassdsadasd
			trim($view_folder, '/\\'),dsadsaddsadasds
			'/\\',dsfdsf
			DIRECTORY_SEPARATOR.DIRECTORY_SEdsdasdsadPARATOR xxzdasd
		);dsdsadsddsadsadsaddsfdssđsfdsf
	}dsadsadsdsadsd
	else fdfsfdsadsaddsadsaddsdsadsadsadsaddsadasd
	{ sadsfđs
		dsadsad
		header('HTTP/1.1 503 Service Unavaidsasadsadsaladsadsadble.', TRUE, 503);
		echo 'Your view folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIGdsadsadasd
	}

	define('VIEWPATH', $view_folder.DIRECTORY_SEPARATOR);dsdsadsd

/*
 * --------------------------------------------------------------------
 * LOAD THE BOOTSTRAP FILE
 * --------------------------------------------------------------------
 *
 * And away we go...
 */
require_once BASEPATH.'core/CodeIgniter.php';
