<?php

class User_m extends CI_Model{
	function gets(){}
	function get(){}
	function add(){
	/**
	* $data param data array=>column, value
	*/
	function add($data){
		$this->db->insert("user",$data);
	}

	function edit(){}
	function del(){}
}