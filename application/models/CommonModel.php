<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

###+------------------------------------------------------------------------------------------------
###| Project for Naveen BHai
###+------------------------------------------------------------------------------------------------
###| Code By - busyboy_shubro
###+------------------------------------------------------------------------------------------------
###| Date - March  2023
###+------------------------------------------------------------------------------------------------

class CommonModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function get_enquiry_data(){
		$this->db->select('*');
		$query = $this->db->get('enquiry');		
		return $query->result();
		//return $query->result_array();
	}
	

}