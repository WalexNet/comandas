<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Carta
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Carta extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        // Cargamos Modelos
        $this->load->model('Carta_model');
    }

    public function index()
    {
    // 
    // El arreglo $datos contendrá los datos dinamicos de la web
    $datos['titulo']     = 'Gestión tabla Carta';
    // El arreglo $page tecndrá las vistas
    $page['navbar']    = $this->load->view('cuerpo/navbar','',true);
    $page['menu']      = $this->load->view('cuerpo/menu','',true);
    $page['footer']    = $this->load->view('cuerpo/footer','',true);
    $page['pagina']    = 'carta';
    $page['datos']     = $datos; // Datos del cuerpo de la Carta

    // Cargamos y mostramos la Página
    $this->load->view('cuerpo/principal',$page);
    }

}


/* End of file Carta.php */
/* Location: ./application/controllers/Carta.php */