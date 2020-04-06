<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Inicio
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

class Inicio extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Carta_model');
    }

    public function index()
    {
        $this->load->library('calendar');
        // El arreglo $datos contendrá los datos dinamicos de la web
        $datos['titulo']     = 'Página Principal del Contenido';
        $datos['calendario'] = $this->calendar->generate();
        // El arreglo $page tecndrá las vistas
        $page['pagina'] = 'inicio';
        $page['navbar'] = $this->load->view('cuerpo/navbar','',true);
        $page['menu']   = $this->load->view('cuerpo/menu','',true);
        $page['footer'] = $this->load->view('cuerpo/footer','',true);
        $page['datos']  = $datos;

        // Cargamos y mostramos la Página
        $this->load->view('cuerpo/principal',$page);

    }

}


/* End of file Inicio.php */
/* Location: ./application/controllers/Inicio.php */