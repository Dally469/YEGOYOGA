<?php
namespace App\Models;
use CodeIgniter\Model;

class ClientModel extends Model{
	protected $table = "client";
	protected $allowedFields = ["id","firstname","lastname","email","status"];
	protected $useTimestamps = true;


}
