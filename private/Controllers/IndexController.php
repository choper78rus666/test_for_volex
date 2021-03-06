<?
namespace Choper78rus\Volex\Controllers;
use Choper78rus\Volex\Base\GenerateResponse;
use Choper78rus\Volex\Models\TestModel;

class IndexController {
    private $test;
    
    public function __construct() {
        $this->test = new TestModel();
    }
    
    function indexAction() {
        $title = 'Главная';
        $view = 'index_view.php'; // вид
        
        GenerateResponse::generateResponse($view, [
            'title' => $title,
            'stats' => $this->test->getStats(),
            'last_id' => 0
        ]);
    }
    
}

?>