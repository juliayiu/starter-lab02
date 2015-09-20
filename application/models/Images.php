<?php

/** 
 * Images model that contains a constructor and two functions 
 * named all() and newest().
 * The all() function returns all the images in descending order 
 * by the post date.
 * The newest() function returns the 3 newest images
 */

class Images extends CI_Model {
    
    // constructor
    function __construct() 
    {
        parent::__construct();
    }
    
    // return all images, descending order by post date
    function all()
    {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('images');
        
        return $query->result_array();
    }
    
    // return the 3 newest images.
    function newest()
    {
        $this->db->order_by("id", "desc");
        $this->db->limit(3);
        $query = $this->db->get('images');
        
        return $query->result_array();
    }
}