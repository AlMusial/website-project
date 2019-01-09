<?php
class Router{
	private $request;
	public function __construct($request){
		$this->request = $request;
	}
	public function get($route, $function){
		$uri = trim( $this->request, "/" );
		$uri = explode("/", $uri);
		if('/' . $uri[0] == $route) {
			$function->__invoke();
			die();
		}
		}
	}
?>