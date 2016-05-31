<?php 
/**
* Lit
*
* An open source application development framework for PHP
*
* This content is released under the MIT License (MIT)
*
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
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
* @package Lit
* @author Jackson Oates
* @copyright Copyright (c) 2016, Jackson Oates
* @license http://opensource.org/licenses/MIT  MIT License
* @filesource
*/

# set application directory relative to this file
$app_directory = '../app';
$system_directory = '../system';
$vendor_directory = '../vendor';
$view_directory = '../templates';
$debug = true;

/*
* ------------------------------------------------------
*  set Constants
* ------------------------------------------------------
*/

define('APPPATH', $app_directory.DIRECTORY_SEPARATOR);
define('SYSPATH', $system_directory.DIRECTORY_SEPARATOR);
define('VENDORPATH', $vendor_directory.DIRECTORY_SEPARATOR);
define('VIEWPATH', $view_directory.DIRECTORY_SEPARATOR);
define('BASENAME', 'Lit\\');
define('DEBUG', $debug);

/*
* --------------------------------------------------------------------
* Enable PHP debugging
* --------------------------------------------------------------------
 */
if(DEBUG){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
/*
* --------------------------------------------------------------------
* Use Lit
* --------------------------------------------------------------------
 */
require_once SYSPATH.'core/Lit.php';

