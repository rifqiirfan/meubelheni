<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}

	// redirect if needed, otherwise display the user list
	function index()
	{
		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}elseif($this->ion_auth->in_group('member')){
			//if the user is an employee
			$this->load->view('admin/dashboard_view');
			// $this->load->view('admin');
		}elseif ($this->ion_auth->is_admin()){

			// $this->load->view('superadmin/dashboard_view');
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//list the users
			$this->data['users'] = $this->ion_auth->users()->result();
			foreach ($this->data['users'] as $k => $user)
			{
				$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}

			$this->_render_page('auth/index', $this->data);
		}else{
			return show_error('You must be an administrator to view this page.');

		}
	}

	// log the user in
	function login()
	{
		$this->data['title'] = $this->lang->line('login_heading');

		//validate form input
		$this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
		$this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

		if ($this->form_validation->run() == true)
		{
			// check to see if the user is logging in
			// check for "remember me"
			$remember = (bool) $this->input->post('remember');

			if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
			{
				//if the login is successful
				//redirect them back to the home page
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect('/', 'refresh');
			}
			else
			{
				// if the login was un-successful
				// redirect them back to the login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('auth/login', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{
			// the user is not logging in so display the login page
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['identity'] = array('name' => 'identity',
				'id'    => 'identity',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('identity'),
			);
			$this->data['password'] = array('name' => 'password',
				'id'   => 'password',
				'type' => 'password',
			);

			$this->_render_page('auth/login', $this->data);
		}
	}

	// log the user out
	function logout()
	{
		$this->data['title'] = "Logout";

		// log the user out
		$logout = $this->ion_auth->logout();

		// redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect('auth/login', 'refresh');
	}

	function _get_csrf_nonce()
	{
		$this->load->helper('string');
		$key   = random_string('alnum', 8);
		$value = random_string('alnum', 20);
		$this->session->set_flashdata('csrfkey', $key);
		$this->session->set_flashdata('csrfvalue', $value);

		return array($key => $value);
	}


function create_user()
	{
			$this->data['title'] = $this->lang->line('create_user_heading');

			if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
			{
					redirect('auth', 'refresh');
			}

			$tables = $this->config->item('tables','ion_auth');
			$identity_column = $this->config->item('identity','ion_auth');
			$this->data['identity_column'] = $identity_column;

			// validate form input
			$this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'required');
			$this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'required');
			if($identity_column!=='email')
			{
					$this->form_validation->set_rules('identity',$this->lang->line('create_user_validation_identity_label'),'required|is_unique['.$tables['users'].'.'.$identity_column.']');
					$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email');
			}
			else
			{
					$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique[' . $tables['users'] . '.email]');
			}
			$this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'trim');
			$this->form_validation->set_rules('company', $this->lang->line('create_user_validation_company_label'), 'trim');
			$this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
			$this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

			if ($this->form_validation->run() == true)
			{
					$email    = strtolower($this->input->post('email'));
					$identity = ($identity_column==='email') ? $email : $this->input->post('identity');
					$password = $this->input->post('password');

					$additional_data = array(
							'first_name' => $this->input->post('first_name'),
							'last_name'  => $this->input->post('last_name'),
							'company'    => $this->input->post('company'),
							'phone'      => $this->input->post('phone'),
					);
			}
			if ($this->form_validation->run() == true && $this->ion_auth->register($identity, $password, $email, $additional_data))
			{
					// check to see if we are creating the user
					// redirect them back to the admin page
					$this->session->set_flashdata('message', $this->ion_auth->messages());
					redirect("auth", 'refresh');
			}
			else
			{
					// display the create user form
					// set the flash data error message if there is one
					$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

					$this->data['first_name'] = array(
							'name'  => 'first_name',
							'id'    => 'first_name',
							'type'  => 'text',
							'value' => $this->form_validation->set_value('first_name'),
					);
					$this->data['last_name'] = array(
							'name'  => 'last_name',
							'id'    => 'last_name',
							'type'  => 'text',
							'value' => $this->form_validation->set_value('last_name'),
					);
					$this->data['identity'] = array(
							'name'  => 'identity',
							'id'    => 'identity',
							'type'  => 'text',
							'value' => $this->form_validation->set_value('identity'),
					);
					$this->data['email'] = array(
							'name'  => 'email',
							'id'    => 'email',
							'type'  => 'text',
							'value' => $this->form_validation->set_value('email'),
					);
					$this->data['company'] = array(
							'name'  => 'company',
							'id'    => 'company',
							'type'  => 'text',
							'value' => $this->form_validation->set_value('company'),
					);
					$this->data['phone'] = array(
							'name'  => 'phone',
							'id'    => 'phone',
							'type'  => 'text',
							'value' => $this->form_validation->set_value('phone'),
					);
					$this->data['password'] = array(
							'name'  => 'password',
							'id'    => 'password',
							'type'  => 'password',
							'value' => $this->form_validation->set_value('password'),
					);
					$this->data['password_confirm'] = array(
							'name'  => 'password_confirm',
							'id'    => 'password_confirm',
							'type'  => 'password',
							'value' => $this->form_validation->set_value('password_confirm'),
					);

					$this->_render_page('auth/create_user', $this->data);
			}
	}


	function _valid_csrf_nonce()
	{
		if ($this->input->post($this->session->flashdata('csrfkey')) !== FALSE &&
			$this->input->post($this->session->flashdata('csrfkey')) == $this->session->flashdata('csrfvalue'))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function _render_page($view, $data=null, $returnhtml=false)//I think this makes more sense
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;

		$view_html = $this->load->view($view, $this->viewdata, $returnhtml);

		if ($returnhtml) return $view_html;//This will return html on 3rd argument being true
	}

}
