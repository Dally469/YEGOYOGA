<?php
namespace App\Models;
use CodeIgniter\Model;

class PostModel extends Model{
	protected $table = "post";
	protected $allowedFields = ["id","title"];
	protected $useTimestamps = false;

	

}
