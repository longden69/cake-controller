<?php
class UsersController extends AppController
{
	public $name = "Users";
	function index()
	{
		// $this->request->controller;
		// $this->request['controller'];
		// $this->request->params['controller'];
		// $name = $this->request->params['name'];
		// echo $name;
		// $url = $this->request['url'];
		// print_r($url);
		// die;

		// Phải truyền tham số dạng ?=
		// $name = $this->request->query['name'];
		// $name = $this->request['url']['name'];
		// echo $name;

		// Test post
		$data_user = $this->request->input('json_decode');
		print_r($data_user);
		$data = $this->User->find("all");
		$this->set("data", $data);
	}

	function register()
	{
		// $data = $this->request["data"];
		print_r($this->request->is('post')); // 'get', 'put', 'post', 'delete', 'head', 'option', 'ajax', 'ssl', 'flash', 'mobile'
		// print_r($data);
		die;
	}

	function getHeader()
	{
		$data = $this->request->header('User-Agent');
		// $data = $this->request->here;
		print_r($data);
		die;
	}	

	function getResponse()
	{
		$data = $this->response;
		print_r($data);
		die;
	}

	public function getFile($id)
	{
		$file = $this->Attachment->getFile($id);
	    $this->response->file(
		    $file['path'],
		    array('download' => true, 'name' => 'foo')
		);
	}

	public function sendIcs() 
	{
	    $icsString = $this->Calendar->generateIcs();
	    $this->response->body($icsString);
	    $this->response->type('ics');

	    //Optionally force file download
	    $this->response->download('filename_for_download.ics');

	    // Return response object to prevent controller from trying to render
	    // a view
	    return $this->response;
	}
}
