<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-22 21:31:37 --- CRITICAL: View_Exception [ 0 ]: The requested view article/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\dev\www\kohanaTest\system\classes\Kohana\View.php:137
2013-10-22 21:31:37 --- DEBUG: #0 C:\dev\www\kohanaTest\system\classes\Kohana\View.php(137): Kohana_View->set_filename('article/index')
#1 C:\dev\www\kohanaTest\application\classes\Controller\article.php(9): Kohana_View->__construct('article/index')
#2 C:\dev\www\kohanaTest\system\classes\Kohana\Controller.php(84): Controller_Article->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\dev\www\kohanaTest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Article))
#5 C:\dev\www\kohanaTest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\dev\www\kohanaTest\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\dev\www\kohanaTest\index.php(118): Kohana_Request->execute()
#8 {main} in C:\dev\www\kohanaTest\system\classes\Kohana\View.php:137
2013-10-22 22:08:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\article.php [ 55 ] in file:line
2013-10-22 22:08:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 22:10:02 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete article model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\dev\www\kohanaTest\application\classes\Controller\article.php:54
2013-10-22 22:10:02 --- DEBUG: #0 C:\dev\www\kohanaTest\application\classes\Controller\article.php(54): Kohana_ORM->delete()
#1 C:\dev\www\kohanaTest\system\classes\Kohana\Controller.php(84): Controller_Article->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\dev\www\kohanaTest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Article))
#4 C:\dev\www\kohanaTest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\dev\www\kohanaTest\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\dev\www\kohanaTest\index.php(118): Kohana_Request->execute()
#7 {main} in C:\dev\www\kohanaTest\application\classes\Controller\article.php:54
2013-10-22 22:10:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\article.php [ 35 ] in file:line
2013-10-22 22:10:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 22:12:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\article.php [ 40 ] in file:line
2013-10-22 22:12:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 22:13:00 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant EDIT_PAGE - assumed 'EDIT_PAGE' ~ APPPATH\classes\Controller\article.php [ 26 ] in C:\dev\www\kohanaTest\application\classes\Controller\article.php:26
2013-10-22 22:13:00 --- DEBUG: #0 C:\dev\www\kohanaTest\application\classes\Controller\article.php(26): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\dev\www\koha...', 26, Array)
#1 C:\dev\www\kohanaTest\system\classes\Kohana\Controller.php(84): Controller_Article->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\dev\www\kohanaTest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Article))
#4 C:\dev\www\kohanaTest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\dev\www\kohanaTest\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\dev\www\kohanaTest\index.php(118): Kohana_Request->execute()
#7 {main} in C:\dev\www\kohanaTest\application\classes\Controller\article.php:26
2013-10-22 22:13:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\article.php [ 40 ] in file:line
2013-10-22 22:13:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 22:14:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\article.php [ 40 ] in file:line
2013-10-22 22:14:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 22:14:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\article.php [ 40 ] in file:line
2013-10-22 22:14:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 22:24:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\article.php [ 40 ] in file:line
2013-10-22 22:24:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 22:25:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\article.php [ 40 ] in file:line
2013-10-22 22:25:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line