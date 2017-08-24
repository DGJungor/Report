<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/24
 * Time: 15:58
 */



// controller/democontroller.php
class DemoController
{
    // private $data = 'Hello furzoom!';
    function Index($param)
    {
        require('./View/demo.php');
        require('./Model/demo.php');
        $model = new Model();
        $view = new Index();
        $data = $model->getData($param);
        $view->display($data);

    }
}// End of the class DemoController
// End of file democontroller.php