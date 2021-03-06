<?
namespace Choper78rus\Volex\Controllers;
use Choper78rus\Volex\Base\GenerateResponse;
use Choper78rus\Volex\Models\TestModel;

class AddController {
    private $test;
    
    public function __construct() {
        $this->test = new TestModel();
    }
    
    function indexAction() {
        $post = $_POST;
        if(isset($post)){
            $title = 'Результат теста';
            $view = 'resault.php'; // вид
            GenerateResponse::generateResponse($view, [
                'title' => $title,
                'resault' => $this->test->addTest($post)
            ]);
        }
        
    }
    
}

?>