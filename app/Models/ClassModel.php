<?php
namespace App\Models;
use CodeIgniter\Model;

class ClassModel extends Model{
	protected $table = "class";
	protected $allowedFields = ["id","name","photo","days","time","cost","desc","inst_name","inst_title","inst_profile","status"];
	protected $useTimestamps = true;

	public function get_single_class($val = null, $key = 'class.id', $single = false)
	{
		$builder = $this->select('class.*');

			//->where('product.category', 'cat.id');
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
