<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
class StyleguidesController extends AppController {
  public $uses = array('Styleguide');

  public function index() {

  }//end of index action
}
