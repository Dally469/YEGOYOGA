<?php
namespace App\Models;
use CodeIgniter\Model;

class EventModel extends Model{
	protected $table = "event";
	protected $allowedFields = ["id","photo","name","host","description","avenue","date","status"];
	protected $useTimestamps = true;


}
