<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/24
 * Time: 16:20
 */

// model/model.php
class Model {
    private $data = array(
        'title' => 'Hello jun',
        'welcome' => 'Welcome to jun',
    );
    public function getData($key) {
        return $this->data[$key];
    }
}
// End of model.php