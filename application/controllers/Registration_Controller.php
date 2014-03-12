<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Register
 * 
 */
class Register_Controller extends My_Controller
{
    /**
     * Register::__construct()
     * 
     * @return
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('user_model', 'user');
    }

    /**
     * Register::index()
     * 
     * @return
     */
    public function index()
    {        
        $this->data['assets']['css_includes'] = array('mycss.css');
        $this->data['assets']['js_includes'] = array('register.js');

        $this->template
            ->title('Wrestling Manager', 'Register')
            ->set_layout('usermanagement_layout_view')
            ->set_partial('header', 'partials/header_view')
            ->set_partial('footer', 'partials/footer_view')
            ->build('registration_form_view', $this->data);
    }

    /**
     * Register::process()
     * 
     * @return
     */
    public function process()
    {
        $output_array = array();
        $output_array['status'] = 'notice';
        $output_array['message'] = 'The following action failed to submit. Please try again later.';
        $output_array['errors'] = 'No errors to report.';

        $this->form_validation->set_rules('username', 'Username',
            'trim|required|xss_clean|callback__unique_username');
        $this->form_validation->set_rules('email_address', 'Email Address',
            'trim|required|xss_clean|valid_email|callback__unique_email_address');
        $this->form_validation->set_rules('password', 'Password',
            'trim|required|xss_clean|min_length[6]|max_length[12]');

        if ($this->form_validation->run() == FALSE)
    {
            // Form validation did not pass successfully. Report back to the user there was error(s) on the form.
            $output_array['status'] = 'error';
            $output_array['message'] = 'The following form did not validate successfully. Please fix the form errors and try again.';
            $output_array['errors'] = $this->form_validation->error_array();
    }
    else
    {
    // Form validation passed successfully.
            // Set up variables from post data.
            $post_username = $this->input->post('username');
            $post_email_address = $this->input->post('email_address');
            $post_password = $this->input->post('password');
            $registration_date = gmdate('Y-m-d H:i:s', time());
            $hashed_password = $this->user->generate_password_hash($post_password);
            $registration_key = sha1($registration_date.';;'.$post_email_address.';;'.$hashed_password[0]);

            // Develop the array of post data for sending to the model.
            $data = array(
                'username' => $post_username,
                'email_address' => $post_email_address,
                'password' => $hashed_password[0],
                'password_hash' => $hashed_password[1],
                'registration_date' => $registration_date,
                'registration_key' => $registration_key
            );

            $user_id = $this->user->create_user($data);

            // Create the user.
            if (!is_numeric($user_id))
            {
                // User was not created successfully.
                $output_array['status'] = 'error';
                $output_array['message'] = 'The user was not created successfully.';
            }
            else
            {
                // User was successfully created and the user needs to verify their account.
                // Send registered an email informing them how to validate their account.
                $company_name = $this->config->item('company_name');
                $company_email_address = $this->config->item('company_email');

                $this->load->library('email');
                $this->email->from($company_email_address, $company_name);
                $this->email->to($post_email_address);
                $this->email->subject($company_name.' Registration');
                $message = 'Welcome to '.$company_name.','."\r\n \r\n";
                $message .= 'Thank you for joining the '.$company_name.' Team. ';
                $message .= 'We have listed your registration details below. Make sure you save this email.';
                $message .= 'To verify this account please click the following link.'."\r\n \r\n";
                $message .= anchor('register/verify/'.$registration_key, 'Click Here To Activate Your Account', '')."\r\n";
                $message .= 'Please verfiy your account within 2 hours, otherwise your registration will become invalid and you will have to register again.'."\r\n \r\n";
                $message .= 'Your email address: '.$post_email_address."\r\n";
                $message .= 'Your Password: '.$post_password."\r\n \r\n";
                $message .= 'Enjoy your stay here at '.$company_name.'.'."\r\n \r\n";
                $message .= 'The '.$company_name.' Team';
                $this->email->message($message);
                $this->email->send();

                $output_array['status'] = 'success';
                $output_array['message'] = 'The user was created successfully. Please check your email for the link to activate your account.';
            }
        }

        echo json_encode($output_array);
    }

    /**
     * Register::verify()
     * 
     * @return
     */
    public function verify()
    {

    }

    /**
     * Register::_unique_email_address()
     * 
     * @param mixed $str
     * @return
     */
    public function _unique_email_address($str)
    {
        $this->db->where('user_login.email_address', $this->input->post('email_address'));

        $user = $this->user->get_user();

        if (count($user))
        {
            $this->form_validation->set_message('_unique_email_address', 'This email address is already available');
            return FALSE;
        }
        return TRUE;
    }

    /**
     * Register::_unique_username()
     * 
     * @param mixed $str
     * @return bool
     */
    public function _unique_username($str)
    {
        $this->db->where('user_info.username', $this->input->post('username'));

        $user = $this->user->get_user();

        if (count($user))
        {
            $this->form_validation->set_message('_unique_username', 'This username is already available');
            return FALSE;
        }
        return TRUE;
    }
}