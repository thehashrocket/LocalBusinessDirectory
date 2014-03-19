<?php

class Ads_model extends Model {

function frontPageAds() {
      $this->db->select('*');
      $this->db->from('frontads');
      return $this->db->get();
  }

      $this->db->select('*');
      $this->db->from('business');
      return $this->db->get();
  }

  $this->db->select('*');
  $this->db->from ('business');
  $this->db->where('category', $id);
  return $this->db->get();
}


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
  }
  
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
function createClient($name, $letter) {
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
}

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
    'zip' => $zip,
    'phone' => $phone,
    );
    $this->db->where('id', $id);
    $this->db->update('business', $data);
}
}