<?php

namespace App\Controllers;
use App\Models\ClassModel;
use App\Models\InstructorModel;
use App\Models\EventModel;
use App\Models\ScheduleModel;
use App\Models\AdminModel;
use App\Models\ClientModel;
use App\Models\PostModel;


class Home extends BaseController
{
    private $log_status = "King_logged_in";
	private $data = array();

	public function __construct()
	{
		helper('qonics');
		//service('request')->setLocale($_COOKIE['lang']);
	}

	public function _preset()
	{
		$this->session->set("return_url", current_url());
		if ($this->session->get($this->log_status) == null) {
			header("location: ".base_url('login'));die();
		} else if ($this->session->get('t_lock_status') != null) {
			header("location: ".base_url('login'));die();
		}
	}




	public function index()
	{
		$data= $this->data;
		$data["title"] = "Home";
		
		$compMdl = new ClassModel();
		$data['class'] = $compMdl->select("class.*")
			->groupBy("class.id")
			->get()->getResultArray();

		$instructorMdl = new InstructorModel();
        $data['instructor'] = $instructorMdl->select("intructor.*")
			->get()->getResultArray();

		$data["content"] = view("frontend/home", $data);
		return view('index', $data);
	}

	public function about()
	{
		$data = $this->data;
		$data["title"] = "About Us";
		$data["subtitle"] = "ABOUT US";
		$instructorMdl = new InstructorModel();

		$data['instructor'] = $instructorMdl->select("intructor.*")
		->get()->getResultArray();

		$data["content"] = view("frontend/about", $data);
		return view('index', $data);
	}

	public function event()
	{
		$data = $this->data;
		$data["title"] = "Events";
		$data["subtitle"] = "OUR EVENTS";
		$eventMdl = new EventModel();

		$data['event'] = $eventMdl->select("event.*")
		->get()->getResultArray();

		$data["content"] = view("frontend/event", $data);
		return view('index', $data);
	}

	public function class()
	{
		$data = $this->data;
		$data["title"] = "Classes";
		$data["subtitle"] = "OUR CLASSES";

		$eventMdl = new ClassModel();
		$data['class'] = $eventMdl->select("class.*")
			->get()->getResultArray();

		$instructorMdl = new InstructorModel();
        $data['instructor'] = $instructorMdl->select("intructor.*")
			->get()->getResultArray();

		$data["content"] = view("frontend/class", $data);
		return view('index', $data);
	}

	public function single_class($id)
	{
		$data = $this->data;
		$data["title"] = "Classes";
		$data["subtitle"] = "OUR CLASSES";

		$instructorMdl = new InstructorModel();
        $data['instructor'] = $instructorMdl->select("intructor.*")
			->get()->getResultArray();
			
		$classMdl = new ClassModel();
		$data['page'] = $classMdl->select("class.*")
			->where("class.id",$id)
			->get(1)->getResultArray();
		
		$data['related'] = $classMdl->select("class.*")
			->get()->getResultArray();

		$single = $classMdl->get_single_class($id, "class.id", true);
		if ($single == null){
			return redirect()->to(base_url('class'));
		}
		$data['single'] = $single;
		$data["content"] = view("frontend/single_class", $data);
		return view('index', $data);
	}
	public function single_instructor($id)
	{
		$data = $this->data;
		$data["title"] = "Instructor";
		$data["subtitle"] = "OUR CLASSES";

		$instructorMdl = new InstructorModel();
        $data['page'] = $instructorMdl->select("intructor.*")
			->where("id", $id)
			->get()->getResultArray();

		$classMdl = new ClassModel();	
			
		$data['related'] = $classMdl->select("class.*")
		->get()->getResultArray();

		$single = $instructorMdl->get_single_instructor($id, "intructor.id", true);
		if ($single == null){
			return redirect()->to(base_url('instructor'));
		}
		$data['single'] = $single;
		$data["content"] = view("frontend/single_instructor", $data);
		return view('index', $data);
	}


	public function contact()
	{
		$data = $this->data;
		$data["title"] = "Contact Us";
		$data["subtitle"] = "Marketing Company";
		//$categoryMdl = new CategoryModel();

		$data["content"] = view("frontend/contact", $data);
		return view('index', $data);
	}
	public function schedule()
	{
		$data = $this->data;
		$data["title"] = "Week Schedule";
		$data["subtitle"] = "Our Weekly Schedule";
		$mdl = new ScheduleModel();
		$data['schedule'] = $mdl->select("schedule.*")
			->orderBy("id", "DESC")
			->get(5)->getResultArray();

		$data["content"] = view("frontend/schedule", $data);
		return view('index', $data);
	}

	public function directions()
	{
		$data = $this->data;
		$data["title"] = "Directions";
		$data["subtitle"] = "Our Traning Places";
		$mdl = new ScheduleModel();
		$data['schedule'] = $mdl->select("schedule.*")
			->orderBy("id", "DESC")
			->get(5)->getResultArray();

		$data["content"] = view("frontend/directions", $data);
		return view('index', $data);
	}

	public function massage()
	{
		$data = $this->data;
		$data["title"] = "Services";
		$data["subtitle"] = "Massage";
		$mdl = new ScheduleModel();
		$data['schedule'] = $mdl->select("schedule.*")
			->orderBy("id", "DESC")
			->get(5)->getResultArray();

		$data["content"] = view("frontend/massage", $data);
		return view('index', $data);
	}

	//BACKEND

	public function login()
	{
	
		$data["title"] = "Login";
		$data["email"] = $this->session->getFlashdata("email");
		$data["error"] = $this->session->getFlashdata("error");
			
		return view('login');
	}

	public function login_proccess()
	{
		helper(['form']);
		$model = new AdminModel();
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');
		$validation = \Config\Services::validation();
		$validation->setRule("email", 'email', 'trim|required');
		$validation->setRule("password", 'password', 'required|min_length[6]');
		if ($validation->run() !== FALSE) {
			$this->session->setFlashdata('email', $email);
			if ($this->request->getGet("type", true) == "ajax") {
				echo '{"type":"error","msg":"' . $validation->getError() . '"}';
			} else {
				$this->session->setFlashdata('error', $validation->getError());
				$this->session->setFlashdata('email', $email);
				echo "errrrer";die();
				return redirect()->to(base_url("login"));
			}
		} else {
			$result = $model->checkUser($email);
			$this->session->setFlashdata('email', $email);
			if ($result != null) {
				if (password_verify($password, $result->password)) {
					if ($result->status == 1 || $result->status == 2) {
						$data = array(
							'user_name' => $result->names,
							'user_email' => $result->email,
							'user_id' => $result->id,
							'user_phone' => $result->phone,
							'user_profile' => $result->profile,
							'user_status' => $result->status,
							$this->log_status => true
						);
						$this->session->set($data);
						$model->updateLogin($result->id);
						if ($this->request->getGet("type", true) == "ajax") {
							echo '{"type":"success","msg":"login done"}';
						} else {
							return redirect()->to(base_url('admin'));
						}
					} else {
						if ($this->request->getGet("type", true) == "ajax") {
							echo '{"type":"error","msg":"Company Account not activated"}';
						} else {
							$this->session->setFlashdata('error', "Company Account not activated");
							return redirect()->to(base_url("login"));
						}
					}
				} else {
					if ($this->request->getGet("type", true) == "ajax") {
						echo '{"type":"error","msg":"Password not correct"}';
					} else {
						$this->session->setFlashdata('error', "Password not correct");
						return redirect()->to(base_url("login"));
					}
				}
			} else {
				if ($this->request->getGet("type", true) == "ajax") {
					echo '{"type":"error","msg":"Company not found"}';
				} else {
					$this->session->setFlashdata('error', "Company not found");
					return redirect()->to(base_url("login"));
				}
			}
		}
	}

	public function admin()
	{
		$data = $this->data;
		$data["title"] = "Dashboard";
		$eventMdl = new EventModel();
		$classMdl = new ClassModel();
		$instructorMdl = new InstructorModel();
		$clientMdl = new ClientModel();
		$data["num_event"] = $eventMdl->selectCount("id")->countAllResults();
		$data["num_class"] = $classMdl->selectCount("id")->countAllResults();
		$data["num_results"] = $instructorMdl->selectCount("id")->countAllResults();
		$data["num_client"] = $clientMdl->selectCount("id")->countAllResults();

		$data["content"] = view("backend/dashboard", $data);
		return view('admin', $data);
	}

	public function add_class()
	{
		$data = $this->data;
		$data["title"] = "Add New Class";
		$data["subtitle"] = "Add New Class";
		$classMdl = new ClassModel();
		$postMdl = new PostModel();
		$instMdl = new InstructorModel();
		$data['class'] = $instMdl->select("intructor.*")
			->orderBy("id", "DESC")
			->get()->getResultArray();

		$data['classes'] = $classMdl->select("class.*")
			->orderBy("id", "DESC")
			->get()->getResultArray();

		$data['post'] = $postMdl->select("post.*")
			->orderBy("id", "DESC")
			->get()->getResultArray();	

		$data["content"] = view("backend/add_class", $data);
		return view('admin', $data);
	}

	public function add_schedule()
	{
		$data = $this->data;
		$data["title"] = "Add New Schedule";
		$data["subtitle"] = "Add New Class";
		$classMdl = new ClassModel();
		$postMdl = new ScheduleModel();
		$instMdl = new InstructorModel();
		$data['instructor'] = $instMdl->select("intructor.*")
			->orderBy("id", "DESC")
			->get()->getResultArray();

		$data['class'] = $classMdl->select("class.*")
			->orderBy("id", "DESC")
			->get()->getResultArray();

		$data['schedule'] = $postMdl->select("schedule.*")
			->orderBy("id", "DESC")
			->get(5)->getResultArray();	

		$data["content"] = view("backend/add_schedule", $data);
		return view('admin', $data);
	}

	public function add_client()
	{
		$data = $this->data;
		$data["title"] = "Add New Client";
		$data["subtitle"] = "Add New Class";
		$classMdl = new ClassModel();
		$clientMdl = new ClientModel();
		$instMdl = new InstructorModel();
		$data['client'] = $clientMdl->select("client.*")
			->orderBy("id", "DESC")
			->get()->getResultArray();

		$data["content"] = view("backend/add_client", $data);
		return view('admin', $data);
	}

	public function add_instructor()
	{
		$data = $this->data;
		$data["title"] = "Add New Instructor";
		$data["subtitle"] = "Add New Class";
		
		$instMdl = new InstructorModel();
		$postMdl = new PostModel();
		$classMdl = new ClassModel();
		$data['instructor'] = $instMdl->select("intructor.*")
			->orderBy("id", "DESC")
			->get()->getResultArray();

		$data['post'] = $postMdl->select("post.*")
			->orderBy("id", "DESC")
			->get()->getResultArray();
		$data['class'] = $classMdl->select("class.*")
			->orderBy("id", "DESC")
			->get()->getResultArray();	

		$data["content"] = view("backend/add_instructor", $data);
		return view('admin', $data);
	}

	public function manage_schedule()
	{
		$data = $this->data;
		$data["title"] = "Add New Schedule";
		$data["subtitle"] = "Add New Class";
		$classMdl = new ClassModel();
		$postMdl = new ScheduleModel();
		$instMdl = new InstructorModel();
		$data['instructor'] = $instMdl->select("intructor.*")
			->orderBy("id", "DESC")
			->get()->getResultArray();

		$data['class'] = $classMdl->select("class.*")
			->orderBy("id", "DESC")
			->get()->getResultArray();

		$data['schedule'] = $postMdl->select("schedule.*")
			->orderBy("id", "DESC")
			->get(5)->getResultArray();	

		$data["content"] = view("backend/manage_schedule", $data);
		return view('admin', $data);
	}

	public function manipulate_schedule()
	{
		$this->_preset();
		$inst = $this->request->getPost("instructor");
		$class= $this->request->getPost("class");
		$date = $this->request->getPost("date");
		$fromtime = $this->request->getPost("fromtime");
		$totime = $this->request->getPost("totime");
		$venue = $this->request->getPost("venue");
		$status = $this->request->getPost("status");
		$postModel = new ScheduleModel();
		$data = array(
			"instructor" => $inst,
			"class" => $class,
			"date" => $date,
			"fromtime" => $fromtime,
			"totime" => $totime,
			"venue" => $venue,
			"status" => $status
			);
		try {
			$postModel->save($data);
			return redirect()->to(base_url("manage_schedule"));
		} catch (\Exception $e) {
			return $this->response->setJSON(array("error" => "Error: " . $e->getMessage()));
		}
	}

	public function manipulate_client()
	{
		$this->_preset();
		$fname= $this->request->getPost("firstname");
		$lname= $this->request->getPost("lastname");
		$email = $this->request->getPost("email");
		$postModel = new ClientModel();
		$data = array(
			"firstname" => $fname,
			"lastname" => $lname,
			"email" => $email
			);
		try {
			$postModel->save($data);
			return redirect()->to(base_url("add_client"));
		} catch (\Exception $e) {
			return $this->response->setJSON(array("error" => "Error: " . $e->getMessage()));
		}
	}

	public function manipulate_class()
	{
		$this->_preset();
	
		$profile = $this->request->getFile("photo");
		$file = $this->request->getFile("inst_profile");
		$name = $this->request->getPost("name");
		$days = $this->request->getPost("days");
		$time = $this->request->getPost("time");
		$price = $this->request->getPost("cost");
		$desc = $this->request->getPost("desc");
		$inst_name = $this->request->getPost("inst_name");
		$inst_title = $this->request->getPost("inst_title");

		if ($file->getExtension() != "jpg" && $file->getExtension() != "jpeg" & $file->getExtension() != "png") {
			return $this->response->setJSON(array("error" => lang("Image you Upload is not Allowed")));
		}
		if ($file->getSize() > 512 * 1024) {
			return $this->response->setJSON(array("error" => lang("Image you Upload is too large")));
		}

		if ($profile->getExtension() != "jpg" && $profile->getExtension() != "jpeg" & $profile->getExtension() != "png") {
			return $this->response->setJSON(array("error" => lang("Image you Upload is not Allowed")));
		}
		if ($profile->getSize() > 512 * 1024) {
			return $this->response->setJSON(array("error" => lang("Image you Upload is too large")));
		}
		$nameImg = uniqid() . "." . $file->getExtension();
		$nameImgProfile = uniqid() . "." . $profile->getExtension();

		if ($file->move(FCPATH . "assets/backend/webimg/class", $nameImg,$nameImgProfile)) {
			//save  event
			$classModel = new ClassModel();
			$data = array(
				"photo"=> $nameImg,
				"name" => $name, 
				"days" => $days, 
				"time" => $time, 
				"cost" => $price, 
				"desc" => $desc, 
				"inst_name" => $inst_name, 
				"inst_title" => $inst_title, 
				"inst_profile" => $nameImgProfile
				);
			try {
				$classModel->save($data);
				return redirect()->to(base_url("add_class"));
			} catch (\Exception $e) {
				return $this->response->setJSON(array("error" => "Error: " . $e->getMessage()));
			}

			return redirect()->to(base_url("add_class"));
		}else {
			//upload error
			return $this->response->setJSON(array("error" => $file->getErrorString()));
		}


	}

	public function manipulate_instructor()
	{
		$this->_preset();
		$profile = $this->request->getFile("profile");
		$name = $this->request->getPost("name");
		$email = $this->request->getPost("email");
		$class = $this->request->getPost("class_id");
		$desc = $this->request->getPost("academic");
		$title = $this->request->getPost("title");

	
		if ($profile->getExtension() != "jpg" && $profile->getExtension() != "jpeg" & $profile->getExtension() != "png") {
			return $this->response->setJSON(array("error" => lang("Image you Upload is not Allowed")));
		}
		if ($profile->getSize() > 512 * 1024) {
			return $this->response->setJSON(array("error" => lang("Image you Upload is too large")));
		}
	
		$nameImgProfile = uniqid() . "." . $profile->getExtension();

		if ($profile->move(FCPATH . "assets/backend/webimg/instructor",$nameImgProfile)) {
			//save  event
			$classModel = new InstructorModel();
			$data = array(
				"profile"=> $nameImgProfile,
				"name" => $name, 
				"class_id" => $class, 
				"email" => $email, 
				"academic" => $desc, 
				"title" => $title, 
				);
			try {
				$classModel->save($data);
				return redirect()->to(base_url("add_instructor"));
			} catch (\Exception $e) {
				return $this->response->setJSON(array("error" => "Error: " . $e->getMessage()));
			}

			return redirect()->to(base_url("add_instructor"));
		}else {
			//upload error
			return $this->response->setJSON(array("error" => $file->getErrorString()));
		}


	}


	public function manipulate_send_schedule()
	{
		try {
            $email = "dallyjones6@gmail.com,shimwa.claudian@gmail.com";
            $password = "ffffff";
			$updates = $this->request->getPost("news_update");
			$postMdl = new ScheduleModel();
			$clientMdl = new ClientModel();
			$schedule= $postMdl->select("schedule.*")
				->orderBy("id", "DESC")
				->get(5)->getResultArray();	

			$info = array();
			$query = $clientMdl->select("client.email")
				->orderBy("id", "DESC")
				->get()->getResultArray();
			
            $body = view('backend/send_schedule', ['news_update' => $updates, 'schedule' => $schedule
                , 'names' => 'SHEMA Ally Blaise','type' => 'ddddd','phone'=>"0785194263", 'location' => "kgl"]);
            
			foreach ($query as $value) {

				$this->sendMail(implode(', ', $value), "WEEKLY SCHEDULE ", $body);
			}
			
			return redirect()->to(base_url("admin"));

        } catch (\Exception $e) {
            echo $e->getMessage();
        }
	}

	public function logout(){
		session_destroy();
		return redirect()->to(base_url(""));
	}

}
