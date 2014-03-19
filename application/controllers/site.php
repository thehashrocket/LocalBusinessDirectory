<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Site extends Controller {
  
  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->library('tank_auth');
  }
  
  function index()
  {
    $this->load->model('Ads_model');
      $data['priority'] = $this->Ads_model->priorityAds();
      $data['page_title'] = 'Verde Valley Business Resource';
      $data['page'] = 'welcome_message'; // pass the actual view to use as a parameter
      $this->load->view('container',$data);
  }
  
  function aboutus()
  {
      $data['page_title'] = 'Verde Valley Business Resource: About Us';
      $data['page'] = 'about_view'; // pass the actual view to use as a parameter
      $this->load->view('container',$data);
  }
  
  function advertise()
  {
      $data['page_title'] = 'Verde Valley Business Resource: Advertise With Us';
      $data['page'] = 'advertise_view'; // pass the actual view to use as a parameter
      $this->load->view('container',$data);
  }
  
  function business($id)
  {
      $this->load->model('Ads_model');
      $this->load->model('Gallery_model');
      $data['business'] = $this->Ads_model->businessbyId($id);
      $data['catpagename'] = $this->Ads_model->getCatPageName($id);
      $data['page_title'] = 'Verde Valley Business Resource: Find A Local Business';
      $data['page'] = 'business_view'; // pass the actual view to use as a parameter
      $this->load->view('container',$data);
  }
  
  function clients()
  {
      $data['page_title'] = 'Verde Valley Business Resource: Our Local Clients';
      $data['page'] = 'clients_view'; // pass the actual view to use as a parameter
      $this->load->view('container',$data);
  }
  function contact()
  {
      $data['page_title'] = 'Verde Valley Business Resource';
      $data['page'] = 'contactus_view'; // pass the actual view to use as a parameter
      $this->load->view('container',$data);
  }
  
  function nonprofit()
  {
      $data['page_title'] = 'Verde Valley Business Resource: Non Profit Organisations';
      $data['page'] = 'nonprofit_view'; // pass the actual view to use as a parameter
      $this->load->view('container',$data);
  }
  
  
  function contact_confirmation()
  {
      $data['page_title'] = 'Verde Valley Business Resource';
      $data['page'] = 'contactconfirm_view'; // pass the actual view to use as a parameter
      $this->load->view('container',$data);
  }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */