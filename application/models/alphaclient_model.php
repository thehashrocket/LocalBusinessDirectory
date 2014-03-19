<?php

class Alphaclient_model extends Model {
function clientsByLetter($id) {      $this->db->select('*');      $this->db->from('clients');            $this->db->order_by("clientname");            $this->db->group_by("firstletter");             $this->db->get_where('mytable', array('id' => $id);      return $this->db->get();  }


}