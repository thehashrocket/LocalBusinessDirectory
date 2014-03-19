<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ads extends Controller {
	
	function __construct()
	{
		parent::__construct();

		$this->load->library('tank_auth');
	}
	
	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$this->load->model('Ads_model');
      $this->load->model('Gallery_model');
      $data['images'] = $this->Gallery_model->get_images();
			$data['frontads'] = $this->Ads_model->frontpageAds();
		  $data['page_title'] = 'Verde Valley Business Resource - Add and Delete Ads';
		  $data['page'] = '/ads/admin_view'; // pass the actual view to use as a parameter
		  $this->load->view('container',$data);
		}
	}
  
  function business($id)
  {
    if (!$this->tank_auth->is_logged_in()) {
      redirect('/auth/login/');
    } else {
      $this->load->model('Ads_model');
      $this->load->model('Gallery_model');
      $data['images'] = $this->Gallery_model->get_images();
      $data['business'] = $this->Ads_model->businessLists();
      $data['categories'] = $this->Ads_model->getCategories($id);
      $data['page_title'] = 'Verde Valley Business Resource - Add and Delete Ads';
      $data['page'] = '/ads/admin_business_view'; // pass the actual view to use as a parameter
      $this->load->view('container',$data);
    }
  }      function clients($id)  {    if (!$this->tank_auth->is_logged_in()) {      redirect('/auth/login/');    } else {      $this->load->model('Ads_model');      $this->load->model('Gallery_model');      $data['clients'] = $this->Ads_model->clientsList();      $data['page_title'] = 'Verde Valley Business Resource - Add and Delete Clients';      $data['page'] = '/ads/admin_clients_view'; // pass the actual view to use as a parameter      $this->load->view('container',$data);    }  }
  
  function priority()
  {
    if (!$this->tank_auth->is_logged_in()) {
      redirect('/auth/login/');
    } else {
      $this->load->model('Ads_model');
      $this->load->model('Gallery_model');
      $data['images'] = $this->Gallery_model->get_images();
      $data['frontads'] = $this->Ads_model->frontPageAds();
      $data['page_title'] = 'Verde Valley Business Resource - Prioritize Ads';
      $data['page'] = '/ads/admin_priority_view'; // pass the actual view to use as a parameter
      $this->load->view('container',$data);
    }
  }    function slogans($id)  {    if (!$this->tank_auth->is_logged_in()) {      redirect('/auth/login/');    } else {      $this->load->model('Ads_model');      $data['slogans'] = $this->Ads_model->slogansList();      $data['page_title'] = 'Verde Valley Business Resource - Add and Delete Clients';      $data['page'] = '/ads/admin_slogans_view'; // pass the actual view to use as a parameter      $this->load->view('container',$data);    }  }
	
	function deletead() {
		$this->load->model('Ads_model');
		$this->load->library('form_validation');
		
		$id = (string)$this->input->post('id', TRUE);
		$redirect = "/ads/index";
		$this->Ads_model->deleteAd($id, $redirect);
	}
	
	function deletebusiness() {
    $this->load->model('Ads_model');
    $this->load->library('form_validation');
    
    $id = (string)$this->input->post('id', TRUE);
    $redirect = "/ads/business";
    $this->Ads_model->deleteBus($id, $redirect);
  }  function deleteclient() {    $this->load->model('Ads_model');    $this->load->library('form_validation');        $id = (string)$this->input->post('id', TRUE);    $redirect = "/ads/clients";    $this->Ads_model->deleteClient($id, $redirect);  }
  
  function setpriority() {
    $this->load->model('Ads_model');
    $this->load->library('form_validation');
    
    $id = (string)$this->input->post('id', TRUE);
    
    $priority = (string)$this->input->post('priority', TRUE);
    $redirect = "/ads/priority";
    
    $this->Ads_model->prioritizeAd($id, $priority, $redirect);
    
  }
	
  function do_upload()  
  {
  $this->load->model('Gallery_model');
  $this->load->model('Ads_model');
  
  $this->gallery_path = $_SERVER['DOCUMENT_ROOT']. '/assets/images/logos/';
  $this->gallery_path_url = base_url().'assets/images/logos/';
  
  // Upload Image

    $config['upload_path'] = $this->gallery_path;
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = '3072';
    $config['max_width']  = '2048';
    $config['max_height']  = '2048';
    
    $this->load->library('upload', $config);
    $this->upload->do_upload();
    
    $image_data = $this->upload->data();
    
    // Convert Image to slide and move to new folder

    $config['source_image'] = $_SERVER['DOCUMENT_ROOT']. '/assets/images/logos/' . $image_data['file_name'];
    $config['new_image'] = $_SERVER['DOCUMENT_ROOT']. '/assets/images/logos/' . $image_data['file_name'];
    $config['maintain_ratio'] = TRUE;
    $config['width']   = 126;
    $config['height'] = 106;
    
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();
    
    $upload = $this->upload->data();
    
    // Process form 
    $name = (string)$this->input->post('name', TRUE);
    $desc = (string)$this->input->post('description', TRUE);
    $web = (string)$this->input->post('url', TRUE);
    $newlogo = $this->gallery_path_url . $upload['file_name'];
    $url = (string)$this->input->post('redirect', TRUE);
    $priority = (string)$this->input->post('priority', TRUE);
    
    $this->Ads_model->createad($name, $desc, $web, $newlogo, $priority);
    
    redirect($url);
    
  }

  function createbusiness()  
    {
    $this->load->model('Gallery_model');
    $this->load->model('Ads_model');
    
    $this->gallery_path = $_SERVER['DOCUMENT_ROOT']. '/assets/images/logos/';
    $this->gallery_path_url = base_url().'assets/images/logos/';
    
    // Upload Image
  
      $config['upload_path'] = $this->gallery_path;
      $config['allowed_types'] = 'jpg|jpeg|png';
      $config['max_size'] = '3072';
      $config['max_width']  = '2048';
      $config['max_height']  = '2048';
      
      $this->load->library('upload', $config);
      $this->upload->do_upload();
      
      $image_data = $this->upload->data();
      
      // Convert Image to slide and move to new folder
  
      $config['source_image'] = $_SERVER['DOCUMENT_ROOT']. '/assets/images/logos/' . $image_data['file_name'];
      $config['new_image'] = $_SERVER['DOCUMENT_ROOT']. '/assets/images/logos/' . $image_data['file_name'];
      $config['maintain_ratio'] = TRUE;
      $config['width']   = 126;
      $config['height'] = 106;
      
      $this->load->library('image_lib', $config);
      $this->image_lib->resize();
      
      $upload = $this->upload->data();
      
      // Process form 
      $name = (string)$this->input->post('name', TRUE);
      $desc = (string)$this->input->post('description', TRUE);
      $web = (string)$this->input->post('url', TRUE);
      $street = (string)$this->input->post('street', TRUE);
      $city = (string)$this->input->post('city', TRUE);
      $state = (string)$this->input->post('state', TRUE);
      $zip = (string)$this->input->post('zip', TRUE);
      $phone = (string)$this->input->post('phone', TRUE);
      $newlogo = $this->gallery_path_url . $upload['file_name'];
      $url = (string)$this->input->post('redirect', TRUE);
      $category = (string)$this->input->post('category', TRUE);
      
      $this->Ads_model->createBusiness($name, $desc, $web, $newlogo, $street, $city, $state, $zip, $phone, $category);
      
      redirect($url);
      
    }

  function updateBusiness() {
    $this->load->model('Ads_model');
    // Process form 
    $id = (string)$this->input->post('id', TRUE);
      $title = (string)$this->input->post('title', TRUE);
      $desc = (string)$this->input->post('description', TRUE);
      $web = (string)$this->input->post('webaddress', TRUE);
      $street = (string)$this->input->post('street', TRUE);
      $city = (string)$this->input->post('city', TRUE);
      $state = (string)$this->input->post('state', TRUE);
      $zip = (string)$this->input->post('zip', TRUE);
      $phone = (string)$this->input->post('phone', TRUE);            $category = (string)$this->input->post('category', TRUE);
      $newlogo = (string)$this->input->post('logo', TRUE);
      $url = (string)$this->input->post('redirect', TRUE);
      
      $this->Ads_model->updateBusiness($id, $title, $desc, $web, $newlogo, $street, $city, $state, $zip, $phone, $category);
      
      redirect($url);
  }
	 function createclient()      {    $this->load->model('Ads_model');      // Process form       $name = (string)$this->input->post('clientname', TRUE);      $letter = (string)$this->input->post('firstletter', TRUE);      $url = (string)$this->input->post('redirect', TRUE);            $this->Ads_model->createClient($name, $letter);            redirect($url);          }  function updateclient() {    $this->load->model('Ads_model');    // Process form       $id = (string)$this->input->post('id', TRUE);      $name = (string)$this->input->post('clientname', TRUE);      $letter = (string)$this->input->post('firstletter', TRUE);      $url = (string)$this->input->post('redirect', TRUE);            $this->Ads_model->updateClient($id, $name, $letter);            redirect($url);  }    function updateslogan() {    $this->load->model('Ads_model');    // Process form       $id = (string)$this->input->post('id', TRUE);      $laura = (string)$this->input->post('lauraslogan', TRUE);      $cheryl = (string)$this->input->post('cherylslogan', TRUE);            $chrissy = (string)$this->input->post('chrissyslogan', TRUE);            $rita = (string)$this->input->post('ritaslogan', TRUE);            $jeanine = (string)$this->input->post('jeanineslogan', TRUE);      $url = (string)$this->input->post('redirect', TRUE);            $this->Ads_model->updateSlogan($id, $laura, $cheryl, $chrissy, $rita, $jeanine);            redirect($url);  }  
}

/* End of file ads.php */
/* Location: ./system/application/controllers/ads.php */