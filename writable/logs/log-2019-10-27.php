<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-10-27 03:57:36 --> fopen(C:\xampp\htdocs\dgpt4711lab05\writable\writable/data/Places.csv): failed to open stream: No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'fopen(C:\\xampp\\...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(29): fopen('C:\\xampp\\htdocs...', 'r')
#2 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#3 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#6 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#9 {main}
CRITICAL - 2019-10-27 03:59:11 --> fopen(writable/data/Places.csv): failed to open stream: No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'fopen(writable/...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(29): fopen('writable/data/P...', 'r')
#2 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#3 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#6 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#9 {main}
CRITICAL - 2019-10-27 03:59:12 --> fopen(writable/data/Places.csv): failed to open stream: No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'fopen(writable/...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(29): fopen('writable/data/P...', 'r')
#2 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#3 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#6 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#9 {main}
CRITICAL - 2019-10-27 03:59:12 --> fopen(writable/data/Places.csv): failed to open stream: No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'fopen(writable/...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(29): fopen('writable/data/P...', 'r')
#2 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#3 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#6 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#9 {main}
CRITICAL - 2019-10-27 03:59:13 --> fopen(writable/data/Places.csv): failed to open stream: No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'fopen(writable/...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(29): fopen('writable/data/P...', 'r')
#2 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#3 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#6 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#9 {main}
CRITICAL - 2019-10-27 03:59:31 --> fopen(C:\xampp\htdocs\dgpt4711lab05\writable\writable/data/Places.csv): failed to open stream: No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'fopen(C:\\xampp\\...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(29): fopen('C:\\xampp\\htdocs...', 'r')
#2 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#3 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#6 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#9 {main}
CRITICAL - 2019-10-27 04:00:33 --> fopen(C:\xampp\htdocs\dgpt4711lab05\writable\Source Files/writable/data/Places.csv): failed to open stream: No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'fopen(C:\\xampp\\...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(29): fopen('C:\\xampp\\htdocs...', 'r')
#2 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#3 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#6 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#9 {main}
CRITICAL - 2019-10-27 04:00:34 --> fopen(C:\xampp\htdocs\dgpt4711lab05\writable\Source Files/writable/data/Places.csv): failed to open stream: No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'fopen(C:\\xampp\\...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(29): fopen('C:\\xampp\\htdocs...', 'r')
#2 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#3 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#6 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#9 {main}
CRITICAL - 2019-10-27 04:00:35 --> fopen(C:\xampp\htdocs\dgpt4711lab05\writable\Source Files/writable/data/Places.csv): failed to open stream: No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'fopen(C:\\xampp\\...', 'C:\\xampp\\htdocs...', 29, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(29): fopen('C:\\xampp\\htdocs...', 'r')
#2 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#3 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#6 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#9 {main}
CRITICAL - 2019-10-27 04:01:00 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:01:02 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:06:48 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(49): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 49, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(24): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:06:49 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(49): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 49, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(24): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:06:50 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(49): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 49, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(24): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:06:50 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(49): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 49, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(24): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:06:51 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(49): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 49, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(24): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:06:52 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(49): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 49, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(24): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:07:35 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:07:36 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:07:37 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:07:54 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:16:23 --> Undefined variable: keyField
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:16:30 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:16:50 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:16:51 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:16:52 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:19:44 --> Undefined property: App\Models\Places::$keyfield
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:19:47 --> Undefined property: App\Models\Places::$keyfield
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:20:02 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:20:04 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:21:47 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:21:49 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:28:38 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:35:06 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-27 04:35:06 --> Undefined property: stdClass::$id
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(22): App\Models\Simple\CSVModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\CSVModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
