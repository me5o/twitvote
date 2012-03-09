<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');

class SampleController extends AppController
{
    public function index()
    {
        $this->modelClass = null;
        if ($this->request->data) {
            $result = Sanitize::stripAll($this->request->data["text1"]);
        } else {
            $result = "no data.";
        }
        $this->set("result", $result);
    }
}
?>
