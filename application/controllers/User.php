<?php

class User extends CI_Controller {
	//function auto run
	function __construct(){
		parent::__construct();
		//load model
		$this->load->model("user_m");
    }

	function form(){
		$this->load->view("form_user_v");
	}

	function add() {
		//create data array
		$data = array(
			"username" => $this->input->post("username"),
			"password" => $this->input->post("password"),
			"fullname" => $this->input->post("fullname"),
			"level" => $this->input->post("level")
			);

		//check data before save
		var_dump($data);
		//save data to database
		$this->user_m->add($data);
	}
	function index(){
		$data["tbuser"] = $this->user_m->gets();
		$this->load->view("user_data", $data);
	}
	function del($id){
		$this->user_m->del($id);
		redirect("user");
	}
}