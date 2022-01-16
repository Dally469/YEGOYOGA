<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;
    protected $helpers = [];
	protected $session;
	protected $curl;
	protected $email;


 

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        $this->session = \Config\Services::session();
    }

     /**
     * Send email
     * @param string $email Destination email address
     * @param string $subject Email subject
     * @param string $msg Email body, it may contains html codes
     * @param string $institution
     * @return bool
     */
    public function sendMail(string $email, string $subject, string $msg, string $institution = 'YEGO YOGA RWANDA'): bool
    {
        $this->email=\Config\Services::email();
        $config = array("protocol"=>"mail","mailType"=>"html");
        $this->email->initialize($config);
        $this->email->setFrom("yogis@yegoyogarwanda.rw", "$institution");
        $this->email->setTo($email);
        $this->email->setSubject($subject);
        $this->email->setMessage($msg);
        if ($this->email->send(false)) {
            return true;
        }
//      var_dump($this->email->printDebugger());
        throwException(new \Exception("System failed to send email.", 400));
        
    }
}
