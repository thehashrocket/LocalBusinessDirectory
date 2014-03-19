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
      $data['priority'] = $this->Ads_model->priorityAds();      $data['nopriority'] = $this->Ads_model->nonPriorityAds();
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
  /*
  function clients()
  {
      $data['page_title'] = 'Verde Valley Business Resource: Our Local Clients';
      $data['page'] = 'clients_view'; // pass the actual view to use as a parameter
      $this->load->view('container',$data);
  } */  function clients() // don't use a double "s"  {      $letters = range('A', 'Z');            $this->load->model('Ads_model');      $data['page_title'] = 'Verde Valley Business Resource: Our Local Clients';            $data['clienta'] = $this->Ads_model->clientsByLetter('A');      $data['clientb'] = $this->Ads_model->clientsByLetter('B');      $data['clientc'] = $this->Ads_model->clientsByLetter('C');      $data['clientd'] = $this->Ads_model->clientsByLetter('D');      $data['cliente'] = $this->Ads_model->clientsByLetter('E');      $data['clientf'] = $this->Ads_model->clientsByLetter('F');      $data['clientg'] = $this->Ads_model->clientsByLetter('G');      $data['clienth'] = $this->Ads_model->clientsByLetter('H');      $data['clienti'] = $this->Ads_model->clientsByLetter('I');      $data['clientj'] = $this->Ads_model->clientsByLetter('J');      $data['clientk'] = $this->Ads_model->clientsByLetter('K');      $data['clientl'] = $this->Ads_model->clientsByLetter('L');      $data['clientm'] = $this->Ads_model->clientsByLetter('M');      $data['clientn'] = $this->Ads_model->clientsByLetter('N');      $data['cliento'] = $this->Ads_model->clientsByLetter('O');      $data['clientp'] = $this->Ads_model->clientsByLetter('P');      $data['clientq'] = $this->Ads_model->clientsByLetter('Q');      $data['clientr'] = $this->Ads_model->clientsByLetter('R');      $data['clients'] = $this->Ads_model->clientsByLetter('S');      $data['clientt'] = $this->Ads_model->clientsByLetter('T');      $data['clientu'] = $this->Ads_model->clientsByLetter('U');      $data['clientv'] = $this->Ads_model->clientsByLetter('V');      $data['clientw'] = $this->Ads_model->clientsByLetter('W');      $data['clientx'] = $this->Ads_model->clientsByLetter('X');      $data['clienty'] = $this->Ads_model->clientsByLetter('Y');      $data['clientz'] = $this->Ads_model->clientsByLetter('Z');                  $data['page'] = 'clients_view'; // pass the actual view to use as a parameter | why is this clients2?      $this->load->view('container',$data);  }
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