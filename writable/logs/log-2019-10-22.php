<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-10-22 20:34:39 --> Class 'App\Models\App\Models\Simple\CSVModel' not found
#0 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once()
#1 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\Plac...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\Plac...')
#4 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): spl_autoload_call('App\\Models\\Plac...')
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#6 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#10 {main}
CRITICAL - 2019-10-22 20:34:59 --> Undefined property: App\Models\Places::$keyfield
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:42:16 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:42:17 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:42:18 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:45:52 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:45:53 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:45:55 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:48:16 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:48:17 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:48:18 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:48:19 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:48:19 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:48:20 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
