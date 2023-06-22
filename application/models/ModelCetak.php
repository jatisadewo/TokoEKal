<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelCetak extends MY_Model
{
    public function getallorder()
    {
        return $this->db->get('orders')->result_array();

    }

    public function available($where = null)
    {
        return $this->db->get_where('product',  $where);

    }


}