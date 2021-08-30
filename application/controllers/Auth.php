 <?php 
 defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

	 public function __construct()
    {
        parent::__construct();
        $this->CI = get_instance();
    }

// public function change_password(){

	
// 	$this->form_validation->set_rules('oldpassword','Old Password','callback_password_check');
// 	$this->form_validation->set_rules('newpassword','New Password','trim|required|min_length[5]');
// 	$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[5]|matches[new_password]');

// 	$this->form_validation->set_error_delimiters('<div class="error">','</div>');

// 	if($this->form_validation->run() == false)
// 	 	 {

	 	 	
// 	 	 	$this->load->view('change_password');
// 	 		//add user in database
// 	 	}
// 	 	else{

// 	 		$id = $this->session->userdata('id');

//             $newpassword = $this->input->post('newpassword');

//             $this->auth_model->update_user($id, array('password' => md5($newpassword)));

//             redirect('auth/login');

// 	 	}

// 	// $this->load->view('change_password');

// }

 // public function password_check($oldpass)
 //    {
 //        $id = $this->session->userdata('id');
 //        $user = $this->Auth_model->get_user($user_id);

 //        if($user->password !== md5($oldpassword)) {
 //            $this->form_validation->set_message('password_check', 'The {field} does not match');
 //            return false;
 //        }

 //        return true;
 //    }


	public function change_password()
	{


	$this->form_validation->set_rules('oldpassword','Old Password','trim|required|min_length[5]');
	$this->form_validation->set_rules('newpassword','New Password','trim|required|min_length[5]');
	$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[5]|matches[new_password]');

	if($this->form_validation->run() == false)
	{

		

		$this->load->view('change_password');	
	
	}
}
public function logout()
{


	unset ($_SESSION);   
	session_destroy();
	redirect("auth/login","refresh");

}
public function login()
{

		 $this->form_validation->set_rules('username','Username','required');
	 	 $this->form_validation->set_rules('password','Password','required|min_length[5]');
	 	 if($this->form_validation->run() == TRUE)
	 	 {


	 	 	$username=$_POST['username'];
	 	 	$password=md5($_POST['password']);

	 	 	//check user in database
	 	 	$this->db->select('*');
	 	 	$this->db->from('users');
	 	 	$this->db->where(array('username'=>$username,'password'=>$password));
	 	 	$query=$this->db->get();
	 	 	$user=$query->row();

	 	 	//if user exists
	 	 	if($user->email)
	 	 	{
	 	 		//temporary message

	 	 		$this->session->set_flashdata("success","You are logged in");


	 	 		//set session varaiable
 
	 	 		$_SESSION['user_logged']=TRUE;
	 	 		$_SESSION['username']=$user->username;

	 	 		//redirect to profile page

	 	 		redirect("user/profile","refresh");


	 	 	}
	 	 	else
	 	 	{ 
	 	 		$this->session->set_flashdata("error","No such account found in database");
	 	 		redirect("auth/login","refresh");
	 	 	}

	 	 }

         $this->load->view('login');

	
}

// public function index()
//     {
       

//         $this->load->view('register');
//     }
//     //file upload function
//     public function upload()
//     {
//         //set preferences
//         $config['upload_path'] = './uploads/';
//         $config['allowed_types'] = 'txt|pdf';
//         $config['max_size']    = '100';

//         //load upload class library
//         $this->load->library('upload', $config);

//         if (!$this->upload->do_upload('filename'))
//         {
//             // case - failure
//             $upload_error = array('error' => $this->upload->display_errors());
//             $this->load->view('register', $upload_error);
//         }
//         else
//         {
//             // case - success
//             $upload_data = $this->upload->data();
//             $data['success_msg'] = '<div class="alert alert-success text-center">Your file <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';
//             $this->load->view('register', $data);
//         }
//     }

 public function index() { 
         $this->load->view('register'); 
      } 
        
      public function do_upload() { 
      
        $this->load->library('upload',$config);


      } 

public function register() 
{


     if(isset($_POST['register'])){


        //if form vaidated true
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');
        $this->form_validation->set_rules('confirm_password','Confirm Password','required|min_length[5]|matches[password]');
        $this->form_validation->set_rules('phone','Phone','required|min_length[10]');
        if($this->form_validation->run() == TRUE){

            // echo "form validated";

            $data=array(

                  'username' =>$_POST['username'],
                  'email' =>$_POST['email'],
                  'password' =>md5($_POST['password']),
                  'gender' =>$_POST['gender'],
                  'phone' =>$_POST['phone']
            );

            $this->db->insert('users',$data);
            
            $CI =& get_instance();
            $CI->load->library('Phpmailer');
            $mail = new PHPMailer();
            $mail->IsSMTP(); // telling the class to use SMTP
            $mail->SMTPAuth   = true;                  // enable SMTP authentication
            $mail->Host       = "ssl://smtp.googleemail.com"; // SMTP server
            $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
            // $mail->Host       = "smtp.office365.com"; // SMTP server
            $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
            $mail->SMTPSecure = 'ssl'; 
            $mail->Username   = "priscillapremdeepika@gmail.com";  // GMAIL username
            $mail->Password   = "gardentomb1";            // GMAIL password
            $mail->Subject = 'vvvvvvvvvvvvvvvvvvvvv';
            $mail->WordWrap = 50;
            $mail->MsgHTML('fghkfdjhgkjhdfkjg');
            $mail->AddAddress('priscilladeepika123@gmail.com');
            $mail->Send();


            // $mail->AddCC("");
            
            $this->session->set_flashdata("success","Your account has been registered.You can login now");
            //redirect("auth/register","refresh");

            //add user in database
        }
     }



    $this->load->view('register');
}

 public function email(){



 }   



 public function verify($hash=NULL)
    {
        if ($this->auth_model->verifyEmailID($hash))
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
            redirect('auth/register');
        }
        else
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
            redirect('auth/register');
        }
    }

} 




?>