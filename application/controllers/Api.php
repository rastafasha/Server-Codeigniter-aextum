<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
	}

	public function blogs()
	{
		header("Access-Control-Allow-Origin: *");

		$blogs = $this->api_model->get_blogs($featured=false, $recentpost=false);

		$posts = array();
		if(!empty($blogs)){
			foreach($blogs as $blog){

				$short_desc = strip_tags(character_limiter($blog->description, 70));
				$author = $blog->first_name.' '.$blog->last_name;

				$posts[] = array(
					'id' => $blog->id,
					'title' => $blog->title,
					'short_desc' => html_entity_decode($short_desc),
					'author' => $author,
					'image' => base_url('media/images/'.$blog->image),
					'created_at' => $blog->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function featured_blogs()
	{
		header("Access-Control-Allow-Origin: *");

		$blogs = $this->api_model->get_blogs($featured=true, $recentpost=false);

		$posts = array();
		if(!empty($blogs)){
			foreach($blogs as $blog){
				
				$short_desc = strip_tags(character_limiter($blog->description, 70));
				$author = $blog->first_name.' '.$blog->last_name;

				$posts[] = array(
					'id' => $blog->id,
					'title' => $blog->title,
					'short_desc' => html_entity_decode($short_desc),
					'author' => $author,
					'image' => base_url('media/images/'.$blog->image),
					'created_at' => $blog->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function blog($id)
	{
		header("Access-Control-Allow-Origin: *");
		
		$blog = $this->api_model->get_blog($id);

		$author = $blog->first_name.' '.$blog->last_name;

		$post = array(
			'id' => $blog->id,
			'title' => $blog->title,
			'description' => $blog->description,
			'author' => $author,
			'image' => base_url('media/images/'.$blog->image),
			'created_at' => $blog->created_at
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($post));
	}

	public function recent_blogs()
	{
		header("Access-Control-Allow-Origin: *");

		$blogs = $this->api_model->get_blogs($featured=false, $recentpost=5);

		$posts = array();
		if(!empty($blogs)){
			foreach($blogs as $blog){
				
				$short_desc = strip_tags(character_limiter($blog->description, 70));
				$author = $blog->first_name.' '.$blog->last_name;

				$posts[] = array(
					'id' => $blog->id,
					'title' => $blog->title,
					'short_desc' => html_entity_decode($short_desc),
					'author' => $author,
					'image' => base_url('media/images/'.$blog->image),
					'created_at' => $blog->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

// Gallery 

public function gallerys()
{
	header("Access-Control-Allow-Origin: *");

	$gallerys = $this->api_model->get_gallerys($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($gallerys)){
		foreach($gallerys as $gallery){

			$short_desc = strip_tags(character_limiter($gallery->description, 70));
			$author = $gallery->first_name.' '.$gallery->last_name;

			$posts[] = array(
				'id' => $gallery->id,
				'title' => $gallery->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/gallery/'.$gallery->image),
				'created_at' => $gallery->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_gallerys()
{
	header("Access-Control-Allow-Origin: *");

	$gallerys = $this->api_model->get_gallerys($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($gallerys)){
		foreach($gallerys as $gallery){
			
			$short_desc = strip_tags(character_limiter($gallery->description, 70));
			$author = $gallery->first_name.' '.$gallery->last_name;

			$posts[] = array(
				'id' => $gallery->id,
				'title' => $gallery->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/gallery/'.$gallery->image),
				'created_at' => $gallery->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function gallery($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$gallery = $this->api_model->get_gallery($id);

	$author = $gallery->first_name.' '.$gallery->last_name;

	$post = array(
		'id' => $gallery->id,
		'title' => $gallery->title,
		'description' => $gallery->description,
		'author' => $author,
		'image' => base_url('media/images/gallery/'.$gallery->image),
		'created_at' => $gallery->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_gallerys()
{
	header("Access-Control-Allow-Origin: *");

	$gallerys = $this->api_model->get_gallerys($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($gallery)){
		foreach($gallerys as $gallery){
			
			$short_desc = strip_tags(character_limiter($gallery->description, 70));
			$author = $gallery->first_name.' '.$gallery->last_name;

			$posts[] = array(
				'id' => $gallery->id,
				'title' => $gallery->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/gallery/'.$gallery->image),
				'created_at' => $gallery->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//

// Modal 

public function modals()
{
	header("Access-Control-Allow-Origin: *");

	$modals = $this->api_model->get_modals($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($modals)){
		foreach($modals as $modal){

			$short_desc = strip_tags(character_limiter($modal->description, 70));
			$author = $modal->first_name.' '.$modal->last_name;

			$posts[] = array(
				'id' => $modal->id,
				'title' => $modal->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/modal/'.$modal->image),
				'created_at' => $modal->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_modals()
{
	header("Access-Control-Allow-Origin: *");

	$modals = $this->api_model->get_modals($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($modals)){
		foreach($modals as $modal){
			
			$short_desc = strip_tags(character_limiter($modal->description, 70));
			$author = $modal->first_name.' '.$modal->last_name;

			$posts[] = array(
				'id' => $modal->id,
				'title' => $modal->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/modal/'.$modal->image),
				'created_at' => $modal->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function modal($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$modal = $this->api_model->get_modal($id);

	$author = $modal->first_name.' '.$modal->last_name;

	$post = array(
		'id' => $modal->id,
		'title' => $modal->title,
		'description' => $modal->description,
		'author' => $author,
		'image' => base_url('media/images/modal/'.$modal->image),
		'created_at' => $modal->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_modals()
{
	header("Access-Control-Allow-Origin: *");

	$modals = $this->api_model->get_modals($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($modal)){
		foreach($modals as $modal){
			
			$short_desc = strip_tags(character_limiter($modal->description, 70));
			$author = $modal->first_name.' '.$modal->last_name;

			$posts[] = array(
				'id' => $modal->id,
				'title' => $modal->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/modal/'.$modal->image),
				'created_at' => $modal->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//


// publicacions

public function publicacions()
{
	header("Access-Control-Allow-Origin: *");

	$publicacions = $this->api_model->get_publicacions($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($publicacions)){
		foreach($publicacions as $publicacion){

			$short_desc = strip_tags(character_limiter($publicacion->description, 70));
			$author = $publicacion->first_name.' '.$publicacion->last_name;

			$posts[] = array(
				'id' => $publicacion->id,
				'title' => $publicacion->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/publicacion/'.$publicacion->image),
				'created_at' => $publicacion->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_publicacions()
{
	header("Access-Control-Allow-Origin: *");

	$publicacions = $this->api_model->get_publicacions($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($publicacions)){
		foreach($publicacions as $publicacion){
			
			$short_desc = strip_tags(character_limiter($publicacion->description, 70));
			$author = $publicacion->first_name.' '.$publicacion->last_name;

			$posts[] = array(
				'id' => $publicacion->id,
				'title' => $publicacion->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/publicacion/'.$publicacion->image),
				'created_at' => $publicacion->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function publicacion($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$publicacion = $this->api_model->get_publicacion($id);

	$author = $publicacion->first_name.' '.$publicacion->last_name;

	$post = array(
		'id' => $publicacion->id,
		'title' => $publicacion->title,
		'description' => $publicacion->description,
		'author' => $author,
		'image' => base_url('media/images/publicacion/'.$publicacion->image),
		'created_at' => $publicacion->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_publicacions()
{
	header("Access-Control-Allow-Origin: *");

	$publicacions = $this->api_model->get_publicacions($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($publicacion)){
		foreach($publicacions as $publicacion){
			
			$short_desc = strip_tags(character_limiter($publicacion->description, 70));
			$author = $publicacion->first_name.' '.$publicacion->last_name;

			$posts[] = array(
				'id' => $publicacion->id,
				'title' => $publicacion->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/publicacion/'.$publicacion->image),
				'created_at' => $publicacion->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}


//


// Users 

public function users()
{
	header("Access-Control-Allow-Origin: *");

	$users = $this->api_model->get_users($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($users)){
		foreach($users as $user){

			$short_desc = strip_tags(character_limiter($user->description, 70));
			$author = $user->first_name.' '.$user->last_name;

			$posts[] = array(
				'id' => $user->id,
				'username' => $user->username,
				'password' => $user->password,
				'first_name' => $user->first_name,
				'last_name' => $user->last_name,
				'image' => base_url('media/images/user/'.$user->image),
				'created_at' => $user->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}


public function user($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$user = $this->api_model->get_user($id);

	$author = $user->first_name.' '.$user->last_name;

	$post = array(
		'id' => $user->id,
		'username' => $user->username,
		'password' => $user->password,
		'first_name' => $user->first_name,
		'last_name' => $user->last_name,
		'image' => base_url('media/images/user/'.$user->image),
		'created_at' => $user->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}
//

// Wax 

public function waxs()
{
	header("Access-Control-Allow-Origin: *");

	$waxs = $this->api_model->get_waxs($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($waxs)){
		foreach($waxs as $wax){

			$short_desc = strip_tags(character_limiter($wax->description, 70));
			$author = $wax->first_name.' '.$wax->last_name;

			$posts[] = array(
				'id' => $wax->id,
				'title' => $wax->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $wax->price,
				'description' => $wax->description,
				'popup' => $wax->popup,
				'button' => $wax->button,
				'image' => base_url('media/images/servicios/wax/'.$wax->image),
				'created_at' => $wax->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_waxs()
{
	header("Access-Control-Allow-Origin: *");

	$waxs = $this->api_model->get_waxs($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($waxs)){
		foreach($waxs as $wax){
			
			$short_desc = strip_tags(character_limiter($wax->description, 70));
			$author = $wax->first_name.' '.$wax->last_name;

			$posts[] = array(
				'id' => $wax->id,
				'title' => $wax->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $wax->price,
				'description' => $wax->description,
				'popup' => $wax->popup,
				'button' => $wax->button,
				'image' => base_url('media/images/servicios/wax/'.$wax->image),
				'created_at' => $wax->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function wax($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$wax = $this->api_model->get_wax($id);

	$author = $wax->first_name.' '.$wax->last_name;

	$post = array(
		'id' => $wax->id,
		'title' => $wax->title,
		'short_desc' => html_entity_decode($short_desc),
		'author' => $author,
		'price' => $wax->price,
		'description' => $wax->description,
		'popup' => $wax->popup,
		'button' => $wax->button,
		'image' => base_url('media/images/servicios/wax/'.$wax->image),
		'created_at' => $wax->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_waxs()
{
	header("Access-Control-Allow-Origin: *");

	$waxs = $this->api_model->get_waxs($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($wax)){
		foreach($waxs as $wax){
			
			$short_desc = strip_tags(character_limiter($wax->description, 70));
			$author = $wax->first_name.' '.$wax->last_name;

			$posts[] = array(
				'id' => $wax->id,
				'title' => $wax->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $wax->price,
				'description' => $wax->description,
				'popup' => $wax->popup,
				'button' => $wax->button,
				'image' => base_url('media/images/servicios/wax/'.$wax->image),
				'created_at' => $wax->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//




public function categories()
	{
		header("Access-Control-Allow-Origin: *");

		$categories = $this->api_model->get_categories();

		$category = array();
		if(!empty($categories)){
			foreach($categories as $cate){
				$category[] = array(
					'id' => $cate->id,
					'name' => $cate->category_name
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($category));
	}


// Contact

	

	public function contact()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header('Access-Control-Allow-Headers: Accept,Accept-Language,Content-Language,Content-Type');

		$formdata = json_decode(file_get_contents('php://input'), true);

		if( ! empty($formdata)) {

			$name = $formdata['name'];
			$lastname = $formdata['lastname'];
			$email = $formdata['email'];
			$phone = $formdata['phone'];
			$cellphone = $formdata['cellphone'];
			$cargo = $formdata['cargo'];
			$message = $formdata['message'];

			$contactData = array(
				'name' => $name,
				'lastname' => $lastname,
				'email' => $email,
				'phone' => $phone,
				'cellphone' => $cellphone,
				'cargo' => $cargo,
				'message' => $message,
				'created_at' => date('Y-m-d H:i:s', time())
			);
			
			$id = $this->api_model->insert_contact($contactData);

			$this->sendemail($contactData);
			
			$response = array('id' => $id);
		}
		else {
			$response = array('id' => '');
		}
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	public function adminContacts()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$contacts = $this->api_model->get_admin_contacts();
			foreach($contacts as $contact) {
				$posts[] = array(
					'id' => $contact->id,
					'name' => $contact->name,
					'lastname' => $contact->lastname,
					'email' => $contact->email,
					'phone' => $contact->phone,
					'cellphone' => $contact->cellphone,
					'cargo' => $contact->cargo,
					'message' => $contact->message,
					'created_at' => $contact->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminContact($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$contact = $this->api_model->get_admin_contact($id);

			$post = array(
				'id' => $contact->id,
				'name' => $contact->name,
				'lastname' => $contact->lastname,
				'email' => $contact->email,
				'phone' => $contact->phone,
				'cellphone' => $contact->cellphone,
				'cargo' => $contact->cargo,
				'message' => $contact->message
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function updateContact($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$contact = $this->api_model->get_admin_contact($id);

			$name = $this->input->post('title');
			$lastname = $this->input->post('lastname');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$cellphone = $this->input->post('cellphone');
			$cargo = $this->input->post('cargo');
			$message = $this->input->post('message');
			
			

			$isUploadError = FALSE;

			if( ! $isUploadError) {
	        	$contactData = array(
					'name' => $name,
					'lastname' => $lastname,
					'email' => $email,
					'phone' => $phone,
					'cellphone' => $cellphone,
					'cargo' => $cargo,
					'message' => $message
				);

				$this->api_model->updateContact($id, $contactData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteContact($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$contact = $this->api_model->get_admin_contact($id);

			$this->api_model->deleteContact($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function sendemail($contactData)
	{
		$message = '<p>Hi, <br />Alguien a solicitado informacion de contacto</p>';
		$message .= '<p><strong>Nombre: </strong>'.$contactData['name'].'</p>';
		$message .= '<p><strong>Apellido: </strong>'.$contactData['lastname'].'</p>';
		$message .= '<p><strong>Email: </strong>'.$contactData['email'].'</p>';
		$message .= '<p><strong>Telefono: </strong>'.$contactData['phone'].'</p>';
		$message .= '<p><strong>Movi: </strong>'.$contactData['cellphone'].'</p>';
		$message .= '<p><strong>Cargo: </strong>'.$contactData['cargo'].'</p>';
		$message .= '<p><strong>Mensaje: </strong>'.$contactData['message'].'</p>';
		$message .= '<br />Thanks';

		$this->load->library('email');

		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';

		$this->email->initialize($config);

		$this->email->from('info@aextum.com', 'Aextum');
		$this->email->to('info@aextum.com');
		$this->email->cc('mercadocreativo@gmail.com');
		$this->email->bcc('');

		$this->email->subject('Contact Form');
		$this->email->message($message);

		$this->email->send();
	}

	//



	// neswletters

	

	public function newsletter()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header('Access-Control-Allow-Headers: Accept,Accept-Language,Content-Language,Content-Type');

		$formdata = json_decode(file_get_contents('php://input'), true);

		if( ! empty($formdata)) {

			$nombre = $formdata['nombre'];
			$email = $formdata['email'];

			$newsletterData = array(
				'nombre' => $nombre,
				'email' => $email,
				'created_at' => date('Y-m-d H:i:s', time())
			);
			
			$id = $this->api_model->insert_newsletter($newsletterData);

			$this->sendnewsletter($newsletterData);
			
			$response = array('id' => $id);
		}
		else {
			$response = array('id' => '');
		}
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	public function adminNewsletters()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$newsletters = $this->api_model->get_admin_newsletters();
			foreach($newsletters as $newsletter) {
				$posts[] = array(
					'id' => $newsletter->id,
					'nombre' => $newsletter->nombre,
					'email' => $newsletter->email,
					'created_at' => $newsletter->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminNewsletter($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$newsletter = $this->api_model->get_admin_newsletter($id);

			$post = array(
				'id' => $newsletter->id,
				'nombre' => $newsletter->nombre,
				'email' => $newsletter->email,
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function updateNewsletter($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$newsletter = $this->api_model->get_admin_newsletter($id);

			$nombre = $this->input->post('nombre');
			$email = $this->input->post('email');
			
			

			$isUploadError = FALSE;

			if( ! $isUploadError) {
	        	$newsletterData = array(
					'nombre' => $nombre,
					'email' => $email,
				);

				$this->api_model->updateNewsletter($id, $newsletterData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteNewsletter($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$newsletter = $this->api_model->get_admin_newsletter($id);

			$this->api_model->deleteNewsletter($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function sendnewsletter($newsletterData)
	{
		$message = '<p>Hi, <br />Alguien se ha registrado en el newsletter</p>';
		$message .= '<p><strong>Nombre: </strong>'.$newsletterData['nombre'].'</p>';
		$message .= '<p><strong>Email: </strong>'.$newsletterData['email'].'</p>';
		$message .= '<br />Thanks';

		$this->load->library('email');

		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';

		$this->email->initialize($config);

		$this->email->from('info@aextum.com', 'Aextum');
		$this->email->to('info@aextum.com');
		$this->email->cc('mercadocreativo@gmail.com');
		$this->email->bcc('');

		$this->email->subject('Newsletter regitro');
		$this->email->message($message);

		$this->email->send();
	}

	
	//

	// Masinfo

	

	public function masinfo()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header('Access-Control-Allow-Headers: Accept,Accept-Language,Content-Language,Content-Type');

		$formdata = json_decode(file_get_contents('php://input'), true);

		if( ! empty($formdata)) {

			$name = $formdata['name'];
			$company = $formdata['company'];
			$email = $formdata['email'];
			$phone = $formdata['phone'];
			$cargo = $formdata['cargo'];
			$message = $formdata['message'];

			$masinfoData = array(
				'name' => $name,
				'company' => $company,
				'email' => $email,
				'phone' => $phone,
				'cargo' => $cargo,
				'message' => $message,
				'created_at' => date('Y-m-d H:i:s', time())
			);
			
			$id = $this->api_model->insert_masinfo($masinfoData);

			$this->sendmasinfo($masinfoData);
			
			$response = array('id' => $id);
		}
		else {
			$response = array('id' => '');
		}
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	public function adminMasinfos()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$masinfos = $this->api_model->get_admin_masinfos();
			foreach($masinfos as $masinfo) {
				$posts[] = array(
					'id' => $masinfo->id,
					'name' => $masinfo->name,
					'company' => $masinfo->company,
					'email' => $masinfo->email,
					'phone' => $masinfo->phone,
					'cargo' => $masinfo->cargo,
					'message' => $masinfo->message,
					'created_at' => $masinfo->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminMasinfo($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$masinfo = $this->api_model->get_admin_masinfo($id);

			$post = array(
				'id' => $masinfo->id,
				'name' => $masinfo->name,
				'company' => $masinfo->company,
				'email' => $masinfo->email,
				'phone' => $masinfo->phone,
				'cargo' => $masinfo->cargo,
				'message' => $masinfo->message
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function updateMasinfo($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$masinfo = $this->api_model->get_admin_masinfo($id);

			$name = $this->input->post('name');
			$company = $this->input->post('company');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$cargo = $this->input->post('cargo');
			$message = $this->input->post('message');
			
			

			$isUploadError = FALSE;

			if( ! $isUploadError) {
	        	$masinfoData = array(
					'name' => $name,
					'compny' => $compny,
					'email' => $email,
					'phone' => $phone,
					'cargo' => $cargo,
					'message' => $message
				);

				$this->api_model->updateMasinfo($id, $masinfoData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteMasinfo($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$masinfo = $this->api_model->get_admin_masinfo($id);

			$this->api_model->deleteMasinfo($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function sendmasinfo($masinfoData)
	{
		$message = '<p>Hi, <br />Alguien ha solicitado mas info</p>';
		$message .= '<p><strong>Nombre y Apellido: </strong>'.$masinfoData['name'].'</p>';
		$message .= '<p><strong>Empresa: </strong>'.$masinfoData['company'].'</p>';
		$message .= '<p><strong>Email: </strong>'.$masinfoData['email'].'</p>';
		$message .= '<p><strong>Telefono: </strong>'.$masinfoData['phone'].'</p>';
		$message .= '<p><strong>Cargo: </strong>'.$masinfoData['cargo'].'</p>';
		$message .= '<p><strong>Mensaje: </strong>'.$masinfoData['message'].'</p>';
		$message .= '<br />Thanks';

		$this->load->library('email');

		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';

		$this->email->initialize($config);

		$this->email->from('info@aextum.com', 'Aextum');
		$this->email->to('info@aextum.com');
		$this->email->cc('mercadocreativo@gmail.com');
		$this->email->bcc('');

		$this->email->subject('Mas Info');
		$this->email->message($message);

		$this->email->send();
	}

	//

	// login
	public function login() 
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header('Access-Control-Allow-Headers: Accept,Accept-Language,Content-Language,Content-Type');

		$formdata = json_decode(file_get_contents('php://input'), true);

		$username = $formdata['username'];
		$password = $formdata['password'];

		$user = $this->api_model->login($username, $password);

		if($user) {
			$response = array(
				'user_id' => $user->id,
				'first_name' => $user->first_name,
				'last_name' => $user->last_name,
				'token' => $user->token
			);
		}
		else {
			$response = array();
		}

		$this->output
				->set_content_type('application/json')
				->set_output(json_encode($response));
	}
//

	// blog

	public function adminBlogs()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$blogs = $this->api_model->get_admin_blogs();
			foreach($blogs as $blog) {
				$posts[] = array(
					'id' => $blog->id,
					'title' => $blog->title,
					'image' => base_url('media/images/'.$blog->image),
					'created_at' => $blog->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminBlog($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$blog = $this->api_model->get_admin_blog($id);

			$post = array(
				'id' => $blog->id,
				'title' => $blog->title,
				'description' => $blog->description,
				'image' => base_url('media/images/'.$blog->image),
				'is_featured' => $blog->is_featured,
				'is_active' => $blog->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createBlog()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$blogData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertBlog($blogData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateBlog($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$blog = $this->api_model->get_admin_blog($id);
			$filename = $blog->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($blog->image && file_exists(FCPATH.'media/images/'.$blog->image))
					{
						unlink(FCPATH.'media/images/'.$blog->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$blogData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateBlog($id, $blogData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteBlog($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$blog = $this->api_model->get_admin_blog($id);

			if($blog->image && file_exists(FCPATH.'media/images/'.$blog->image))
			{
				unlink(FCPATH.'media/images/'.$blog->image);
			}

			$this->api_model->deleteBlog($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}


	// Gallery

	public function adminGallerys()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$gallerys = $this->api_model->get_admin_gallerys();
			foreach($gallerys as $gallery) {
				$posts[] = array(
					'id' => $gallery->id,
					'title' => $gallery->title,
					'image' => base_url('media/images/gallery/'.$gallery->image),
					'created_at' => $gallery->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminGallery($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$gallery = $this->api_model->get_admin_gallery($id);

			$post = array(
				'id' => $gallery->id,
				'title' => $gallery->title,
				'description' => $gallery->description,
				'image' => base_url('media/images/gallery/'.$gallery->image),
				'is_featured' => $gallery->is_featured,
				'is_active' => $gallery->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createGallery()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/gallery/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$galleryData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertGallery($galleryData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateGallery($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$gallery = $this->api_model->get_admin_gallery($id);
			$filename = $gallery->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/gallery/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($gallery->image && file_exists(FCPATH.'media/images/gallery/'.$gallery->image))
					{
						unlink(FCPATH.'media/images/gallery/'.$gallery->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$galleryData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateGallery($id, $galleryData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteGallery($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$gallery = $this->api_model->get_admin_gallery($id);

			if($gallery->image && file_exists(FCPATH.'media/images/gallery/'.$gallery->image))
			{
				unlink(FCPATH.'media/images/gallery/'.$gallery->image);
			}

			$this->api_model->deleteGallery($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}



	// Modal

	public function adminModals()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$modals = $this->api_model->get_admin_modals();
			foreach($modals as $modal) {
				$posts[] = array(
					'id' => $modal->id,
					'title' => $modal->title,
					'image' => base_url('media/images/modal/'.$modal->image),
					'created_at' => $modal->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminModal($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$modal = $this->api_model->get_admin_modal($id);

			$post = array(
				'id' => $modal->id,
				'title' => $modal->title,
				'description' => $modal->description,
				'image' => base_url('media/images/modal/'.$modal->image),
				'is_featured' => $modal->is_featured,
				'is_active' => $modal->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createModal()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/modal/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$modalData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertModal($modalData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateModal($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$modal = $this->api_model->get_admin_modal($id);
			$filename = $modal->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/modal/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($modal->image && file_exists(FCPATH.'media/images/modal/'.$modal->image))
					{
						unlink(FCPATH.'media/images/modal/'.$modal->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$modalData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateModal($id, $modalData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteModal($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$modal = $this->api_model->get_admin_modal($id);

			if($modal->image && file_exists(FCPATH.'media/images/modal/'.$modal->image))
			{
				unlink(FCPATH.'media/images/modal/'.$modal->image);
			}

			$this->api_model->deleteModal($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}


	// publicacions

	public function adminPublicacions()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$publicacions = $this->api_model->get_admin_publicacions();
			foreach($publicacions as $publicacion) {
				$posts[] = array(
					'id' => $publicacion->id,
					'title' => $publicacion->title,
					'image' => base_url('media/images/publicacion/'.$publicacion->image),
					'created_at' => $publicacion->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminPublicacion($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$publicacion = $this->api_model->get_admin_publicacion($id);

			$post = array(
				'id' => $publicacion->id,
				'title' => $publicacion->title,
				'description' => $publicacion->description,
				'image' => base_url('media/images/publicacion/'.$publicacion->image),
				'is_featured' => $publicacion->is_featured,
				'is_active' => $publicacion->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createPublicacion()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/publicacion/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$publicacionData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertPublicacion($publicacionData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updatePublicacion($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$publicacion = $this->api_model->get_admin_publicacion($id);
			$filename = $publicacion->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/publicacion/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($publicacion->image && file_exists(FCPATH.'media/images/publicacion/'.$publicacion->image))
					{
						unlink(FCPATH.'media/images/publicacion/'.$publicacion->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$publicacionData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updatePublicacion($id, $publicacionData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deletePublicacion($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$publicacion = $this->api_model->get_admin_publicacion($id);

			if($publicacion->image && file_exists(FCPATH.'media/images/publicacion/'.$publicacion->image))
			{
				unlink(FCPATH.'media/images/publicacion/'.$publicacion->image);
			}

			$this->api_model->deletePublicacion($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}
//

// Users

public function adminUsers()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$users = $this->api_model->get_admin_users();
		foreach($users as $user) {
			$posts[] = array(
				'id' => $user->id,
				'username' => $user->username,
				'password' => $user->password,
				'first_name' => $user->first_name,
				'last_name' => $user->last_name,
				'image' => base_url('media/images/user/'.$user->image),
				'created_at' => $user->created_at
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminUser($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$user = $this->api_model->get_admin_user($id);

		$post = array(
			'id' => $user->id,
			'username' => $user->username,
			'password' => $user->password,
			'first_name' => $user->first_name,
			'last_name' => $user->last_name,
			'image' => base_url('media/images/user/'.$user->image),
			'is_featured' => $user->is_featured,
			'is_active' => $user->is_active
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createUser()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$filename = NULL;

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/user/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')) {

				$isUploadError = TRUE;

				$response = array(
					'status' => 'error',
					'message' => $this->upload->display_errors()
				);
			}
			else {
				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$userData = array(
				'username' => $username,
				'password' => $password,
				'first_name' => $first_name,
				'last_name' => $last_name,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active,
				'created_at' => date('Y-m-d H:i:s', time())
			);

			$id = $this->api_model->insertUser($userData);

			$response = array(
				'status' => 'success'
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

public function updateUser($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$user = $this->api_model->get_admin_user($id);
		$filename = $user->image;

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/user/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')) {

				$isUploadError = TRUE;

				$response = array(
					'status' => 'error',
					'message' => $this->upload->display_errors()
				);
			}
			else {
   
				if($user->image && file_exists(FCPATH.'media/images/user/'.$wax->image))
				{
					unlink(FCPATH.'media/images/servicios/user/'.$user->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$userData = array(
				'username' => $username,
				'password' => $password,
				'first_name' => $first_name,
				'last_name' => $last_name,
				'button' => $button,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active
			);

			$this->api_model->updateUser($id, $userData);

			$response = array(
				'status' => 'success'
			);
		   }

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

public function deleteUser($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$user = $this->api_model->get_admin_user($id);

		if($user->image && file_exists(FCPATH.'media/images/user/'.$user->image))
		{
			unlink(FCPATH.'media/images/user/'.$user->image);
		}

		$this->api_model->deleteUser($id);

		$response = array(
			'status' => 'success'
		);

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

	// Wax

	public function adminWaxs()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$waxs = $this->api_model->get_admin_waxs();
			foreach($waxs as $wax) {
				$posts[] = array(
					
					'id' => $wax->id,
					'title' => $wax->title,
					'price' => $wax->price,
					'description' => $wax->description,
					'popup' => $wax->popup,
					'button' => $wax->button,
					'image' => base_url('media/images/servicios/wax/'.$wax->image),
					'created_at' => $wax->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminWax($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$wax = $this->api_model->get_admin_wax($id);

			$post = array(
					'id' => $wax->id,
					'title' => $wax->title,
					'price' => $wax->price,
					'description' => $wax->description,
					'popup' => $wax->popup,
					'button' => $wax->button,
					'image' => base_url('media/images/servicios/wax/'.$wax->image),
					'created_at' => $wax->created_at
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createWax()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/wax/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$waxData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertWax($waxData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateWax($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$wax = $this->api_model->get_admin_wax($id);
			$filename = $wax->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/wax/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($wax->image && file_exists(FCPATH.'media/images/servicios/wax/'.$wax->image))
					{
						unlink(FCPATH.'media/images/servicios/wax/'.$wax->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			

			if( ! $isUploadError) {
	        	$waxData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$this->api_model->updateWax($id, $waxData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteWax($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$wax = $this->api_model->get_admin_wax($id);

			if($wax->image && file_exists(FCPATH.'media/images/servicios/wax/'.$wax->image))
			{
				unlink(FCPATH.'media/images/servicios/wax/'.$wax->image);
			}
			

			$this->api_model->deleteWax($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}
//


}
