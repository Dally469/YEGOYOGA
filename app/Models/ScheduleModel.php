<?php
namespace App\Models;
use CodeIgniter\Model;

class ScheduleModel extends Model{
	protected $table = "schedule";
	protected $allowedFields = ["id","instructor","class","date","fromtime","totime","venue","status"];
	protected $useTimestamps = true;

	


}
