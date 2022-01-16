<?php
namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model{
	protected $table = "users";
	protected $allowedFields = ["id","names","phone","email","password","type","profile","status","lastlogin"];
	protected $useTimestamps = false;

	public function checkUser($username,$key="email"){
		$res = $this->where($key,$username)
			->get();
		return $res->getRow();
	}

	public function updateLogin($id){
		return $this->where("email",$id)->update(null,array("lastlogin"=>time()));
	}

}
