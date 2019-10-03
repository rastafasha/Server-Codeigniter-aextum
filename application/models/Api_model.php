<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model 
{
	public function get_blogs($featured, $recentpost)
	{
		$this->db->select('blog.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('blogs blog');
		$this->db->join('users u', 'u.id=blog.user_id');
		$this->db->join('categories cat', 'cat.id=blog.category_id', 'left');
		$this->db->where('blog.is_active', 1);

		if($featured) {
			$this->db->where('blog.is_featured', 1);
		}
		if($recentpost){ 
			$this->db->order_by('blog.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_blog($id)
	{
		$this->db->select('blog.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('blogs blog');
		$this->db->join('users u', 'u.id=blog.user_id');
		$this->db->join('categories cat', 'cat.id=blog.category_id', 'left');
		$this->db->where('blog.is_active', 1);
		$this->db->where('blog.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	// resultados
	//

	// contact

	public function get_contacts($featured, $recentpost)
	{
		$this->db->select('contact.*');
		$this->db->from('contacts contact');

		if($recentpost){
			$this->db->order_by('contact.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_contact($id)
	{
		$this->db->select('contact.*');
		$this->db->from('contacts contact');
		$this->db->join('name u', 'u.id=contact.name');
		$this->db->join('lastname u', 'u.id=contact.lastname');
		$this->db->join('email u', 'u.id=contact.email');
		$this->db->join('phone u', 'u.id=contact.phone');
		$this->db->join('message u', 'u.id=contact.message');
		$this->db->where('contact.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	// newsletters

	public function get_newsletters($featured, $recentpost)
	{
		$this->db->select('newsletter.*');
		$this->db->from('newsletters newsletter');

		if($recentpost){
			$this->db->order_by('newsletter.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_newsletter($id)
	{
		$this->db->select('newsletter.*');
		$this->db->from('newsletters newsletter');
		$query = $this->db->get();
		return $query->row();
	}


	// gallery

	public function get_gallerys($featured, $recentpost)
	{
		$this->db->select('gallery.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('gallerys gallery');
		$this->db->join('users u', 'u.id=gallery.user_id');
		$this->db->join('categories cat', 'cat.id=gallery.category_id', 'left');
		$this->db->where('gallery.is_active', 1);

		if($featured) {
			$this->db->where('gallery.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('gallery.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_gallery($id)
	{
		$this->db->select('gallery.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('gallerys gallery');
		$this->db->where('gallery.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//

	// modal home

	public function get_modals($featured, $recentpost)
	{
		$this->db->select('modal.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('modals modal');
		$this->db->join('users u', 'u.id=modal.user_id');
		$this->db->join('categories cat', 'cat.id=modal.category_id', 'left');
		$this->db->where('modal.is_active', 1);

		if($featured) {
			$this->db->where('modal.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('modal.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_modal($id)
	{
		$this->db->select('modal.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('modals modal');
		$this->db->where('modal.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//


	// Users

	public function get_users($featured, $recentpost)
	{
		$this->db->select('user.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('users user');
		$this->db->join('users u', 'u.id=user.user_id');
		$this->db->where('user.is_active', 1);

		if($featured) {
			$this->db->where('user.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('user.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_user($id)
	{
		$this->db->select('user.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('users user');
		$this->db->where('user.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//


	// wax

	public function get_waxs($featured, $recentpost)
	{
		$this->db->select('wax.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('waxs wax');
		$this->db->join('users u', 'u.id=wax.user_id');
		$this->db->join('categories cat', 'cat.id=wax.category_id', 'left');
		$this->db->where('wax.is_active', 1);

		if($featured) {
			$this->db->where('wax.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('wax.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_wax($id)
	{
		$this->db->select('wax.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('waxs wax');
		$this->db->where('wax.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//




	public function get_categories()
	{
		$query = $this->db->get('categories');
		return $query->result();
	}

	public function get_page($slug)
	{
		$this->db->where('slug', $slug);
		$query = $this->db->get('pages');
		return $query->row();
	}

// contact
public function insert_contact($contactData)
	{
		$this->db->insert('contacts', $contactData);
		return $this->db->insert_id();
	}

public function updateContact($id, $contactData)
{
	$this->db->where('id', $id);
	$this->db->update('contacts', $contactData);
}

public function deleteContact($id)
{
	$this->db->where('id', $id);
	$this->db->delete('contacts');
}

	
	//

// newsletter
public function insert_newsletter($newsletterData)
	{
		$this->db->insert('newsletters', $newsletterData);
		return $this->db->insert_id();
	}

public function updateNewsletter($id, $newsletterData)
{
	$this->db->where('id', $id);
	$this->db->update('newsletters', $newsletterData);
}

public function deleteNewsletter($id)
{
	$this->db->where('id', $id);
	$this->db->delete('newsletters');
}

	
	//
// login
	public function insert_subcritore($subcritoreData)
	{
		$this->db->insert('subcriptores', $subcritoreData);
		return $this->db->insert_id();
	}

	public function login($username, $password) 
	{
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get('users');

		if($query->num_rows() == 1) {
			return $query->row();
		}
	}

	//

	public function get_admin_blogs()
	{
		$this->db->select('blog.*, u.first_name, u.last_name');
		$this->db->from('blogs blog');
		$this->db->join('users u', 'u.id=blog.user_id');
		$this->db->order_by('blog.created_at', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_blog($id)
	{
		$this->db->select('blog.*, u.first_name, u.last_name');
		$this->db->from('blogs blog');
		$this->db->join('users u', 'u.id=blog.user_id');
		$this->db->where('blog.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	// gallery

	public function get_admin_gallerys()
	{
		$this->db->select('gallery.*, u.first_name, u.last_name');
		$this->db->from('gallerys gallery');
		$this->db->join('users u', 'u.id=gallery.user_id');
		$this->db->order_by('gallery.created_at', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_gallery($id)
	{
		$this->db->select('gallery.*, u.first_name, u.last_name');
		$this->db->from('gallerys gallery');
		$this->db->join('users u', 'u.id=gallery.user_id');
		$this->db->where('gallery.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
//


	// Modal home

	public function get_admin_modals()
	{
		$this->db->select('modal.*, u.first_name, u.last_name');
		$this->db->from('modals modal');
		$this->db->join('users u', 'u.id=modal.user_id');
		$this->db->order_by('modal.created_at', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_modal($id)
	{
		$this->db->select('modal.*, u.first_name, u.last_name');
		$this->db->from('modals modal');
		$this->db->join('users u', 'u.id=modal.user_id');
		$this->db->where('modal.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
//


	// publicacion

	public function get_admin_publicacions()
	{
		$this->db->select('publicacion.*, u.first_name, u.last_name');
		$this->db->from('publicacions publicacion');
		$this->db->join('users u', 'u.id=publicacion.user_id');
		$this->db->order_by('publicacion.created_at', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_publicacion($id)
	{
		$this->db->select('publicacion.*, u.first_name, u.last_name');
		$this->db->from('publicacions publicacion');
		$this->db->join('users u', 'u.id=publicacion.user_id');
		$this->db->where('publicacion.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
//

// User

public function get_admin_users()
{
	$this->db->select('user.*, u.first_name, u.last_name');
	$this->db->from('users user');
	$this->db->join('users u', 'u.id=user.id');
	$this->db->order_by('user.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_user($id)
{
	$this->db->select('user.*, u.first_name, u.last_name');
	$this->db->from('users user');
	$this->db->join('users u', 'u.id=user.id');
	$this->db->where('user.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//


// wax

public function get_admin_waxs()
{
	$this->db->select('wax.*, u.first_name, u.last_name');
	$this->db->from('waxs wax');
	$this->db->join('users u', 'u.id=wax.user_id');
	$this->db->order_by('wax.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_wax($id)
{
	$this->db->select('wax.*, u.first_name, u.last_name');
	$this->db->from('waxs wax');
	$this->db->join('users u', 'u.id=wax.user_id');
	$this->db->where('wax.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//



	public function checkToken($token)
	{
		$this->db->where('token', $token);
		$query = $this->db->get('users');

		if($query->num_rows() == 1) {
			return true;
		}
		return false;
	}

	public function insertBlog($blogData)
	{
		$this->db->insert('blogs', $blogData);
		return $this->db->insert_id();
	}

	public function updateBlog($id, $blogData)
	{
		$this->db->where('id', $id);
		$this->db->update('blogs', $blogData);
	}

	public function deleteBlog($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('blogs');
	}


	// gallery
	public function insertGallery($galleryData)
	{
		$this->db->insert('gallerys', $galleryData);
		return $this->db->insert_id();
	}

	public function updateGallery($id, $galleryData)
	{
		$this->db->where('id', $id);
		$this->db->update('gallerys', $galleryData);
	}

	public function deleteGallery($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('gallerys');
	}


	// Modal home
	public function insertModal($modalData)
	{
		$this->db->insert('modals', $modalData);
		return $this->db->insert_id();
	}

	public function updateModal($id, $modalData)
	{
		$this->db->where('id', $id);
		$this->db->update('modals', $modalData);
	}

	public function deleteModal($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('modals');
	}


	// publicacion
	public function insertPublicacion($publicacionData)
	{
		$this->db->insert('publicacions', $publicacionData);
		return $this->db->insert_id();
	}

	public function updatePublicacion($id, $publicacionData)
	{
		$this->db->where('id', $id);
		$this->db->update('publicacions', $publicacionData);
	}

	public function deletePublicacion($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('publicacions');
	}

//
// User
	public function insertUser($userData)
	{
		$this->db->insert('users', $userData);
		return $this->db->insert_id();
	}

	public function updateUser($id, $userData)
	{
		$this->db->where('id', $id);
		$this->db->update('users', $userData);
	}

	public function deleteUser($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('users');
	}
	//

	// wax
	public function insertWax($waxData)
	{
		$this->db->insert('waxs', $waxData);
		return $this->db->insert_id();
	}

	public function updateWax($id, $waxData)
	{
		$this->db->where('id', $id);
		$this->db->update('waxs', $waxData);
	}

	public function deleteWax($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('waxs');
	}
	
//

	
	
}
