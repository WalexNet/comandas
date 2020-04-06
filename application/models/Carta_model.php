<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Carta_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Carta_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
    
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------

  public function articulos()
  {
    return $this->db->get('carta');
  }

  // ------------------------------------------------------------------------

}

/* End of file Carta_model.php */
/* Location: ./application/models/Carta_model.php */