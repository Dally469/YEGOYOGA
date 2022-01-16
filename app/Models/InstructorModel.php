<?php
namespace App\Models;
use CodeIgniter\Model;

class InstructorModel extends Model{
	protected $table = "intructor";
	protected $allowedFields = ["id","class_id","name","email","title","academic","profile","status"];
	protected $useTimestamps = true;

	public function get_single_instructor($val = null, $key = 'intructor.id', $single = false)
	{
		$builder = $this->select('intructor.*');

		if ($val !== null) {
			$builder->Where($key, $val);
		}
		$data = $builder->get();
		if ($single) {
			return $data->getRowArray();
		}

		return $data->getResultArray();
	}


}
