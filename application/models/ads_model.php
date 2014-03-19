<?php

class Ads_model extends Model {

function frontPageAds() {
      $this->db->select('*');
      $this->db->from('frontads');
      return $this->db->get();
  }
function businessLists() {
      $this->db->select('*');
      $this->db->from('business');
      return $this->db->get();
  }
function businessById($id) {
  $this->db->select('*');
  $this->db->from ('business');
  $this->db->where('category', $id);
  return $this->db->get();
}function clientsList() {      $this->db->select('*');      $this->db->from('clients');            $this->db->order_by("clientname");       return $this->db->get();  }function slogansList() {      $this->db->select('*');      $this->db->from('slogans');      return $this->db->get();  }
function clientsByLetter($id) {       $this->db->select('*');            $this->db->order_by('clientname');            $result = $this->db->get_where('clients', array('firstletter'=>$id));      return $result;  }
function getCategories() {
      $this->db->select('*');
      $this->db->from('categories');
      return $this->db->get();
  }

function getCatPageName($id) {
  $this->db->select('*');
  $this->db->from('categories');
  $this->db->where('id',$id);
  return $this->db->get();
}

function priorityads() {
      $priority = '1';
      $this->db->select('*');
      $this->db->from('frontads');
      $this->db->where('priority', $priority); 
      return $this->db->get();
  }function nonPriorityads() {      $priority = '0';      $this->db->select('*');      $this->db->from('frontads');      $this->db->where('priority', $priority);       return $this->db->get();  }
  
function createAd($name, $desc, $web, $newlogo, $priority) {
  $data = array(
    'title' => $name,
    'description' => $desc,
    'webaddress' => $web,
    'logo' => $newlogo,
    'priority' => $priority,
    );
    $this->db->insert('frontads', $data);
}

function createBusiness($name, $desc, $web, $newlogo, $street, $city, $state, $zip, $phone, $category) {
  $data = array(
    'title' => $name,
    'description' => $desc,
    'webaddress' => $web,
    'logo' => $newlogo,
    'street' => $street,
    'city' => $city,
    'state' => $state,
    'zip' => $zip,
    'phone' => $phone,
    'category' => $category,
    );
    $this->db->insert('business', $data);
}
function createClient($name, $letter) {  $data = array(    'clientname' => $name,    'firstletter' => $letter,    );    $this->db->insert('clients', $data);}
function prioritizeAd($id, $priority, $redirect) {
  $data = array(
    'id' => $id,
    'priority' => $priority,
    );
    $this->db->where('id', $id);
    $this->db->update('frontads', $data);
    redirect($redirect);
}


function deleteAd($id, $redirect) {
  $this->db->delete('frontads', array('id' => $id));
  redirect($redirect);
}

function deleteBus($id, $redirect) {
  $this->db->delete('business', array('id' => $id));
  redirect($redirect);
}function deleteClient($id, $redirect) {  $this->db->delete('clients', array('id' => $id));  redirect($redirect);}

function updateBusiness($id, $title, $desc, $web, $newlogo, $street, $city, $state, $zip, $phone, $category) {
  $data = array(
    'id' => $id,
    'title' => $title,
    'description' => $desc,
    'webaddress' => $web,
    'logo' => $newlogo,
    'street' => $street,
    'city' => $city,
    'state' => $state,
    'zip' => $zip,        'category' => $category,
    'phone' => $phone,
    );
    $this->db->where('id', $id);
    $this->db->update('business', $data);
}function updateClient($id, $name, $letter) {  $data = array(    'id' => $id,    'clientname' => $name,    'firstletter' => $letter,    );    $this->db->where('id', $id);    $this->db->update('clients', $data);}function updateSlogan($id, $laura, $cheryl, $chrissy, $rita, $jeanine) {  $data = array(    'id' => $id,    'laura' => $laura,    'cheryl' => $cheryl,        'chrissy' => $chrissy,        'rita' => $rita,        'jeanine' => $jeanine    );    $this->db->where('id', $id);    $this->db->update('slogans', $data);}
}