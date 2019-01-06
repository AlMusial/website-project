<?php
class Controller {
	private $request = null;
	private $template = '';
	public function __construct($request) {
		$this->request = $request;
		$this->template = !empty($request['view']) ? $request['view'] : 'default';
	}
	public function display() {
		$view = new View();
		switch ($this->request) {
			case 'users':
				$view->setTemplate('users');
				break;
			case 'default':
			default:
				$view->setTemplate('default');
			}
		return $view->loadTemplate();
	}
}
?>