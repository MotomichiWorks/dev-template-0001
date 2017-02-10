<?php
App::uses('AppController', 'Controller');

class SamplesController extends AppController {
  // SampleModelを使用する設定
  public $uses = array('Sample');



  public function index() {

  }//end of index action

}
