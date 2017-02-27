<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // Add filter CSS
        $this->page->set_css('/assets/css/pages/sponsors.css', 'stylesheet', ['media' => 'screen']);
        $this->page->use_filters();

        // Add view
        $this->page->set_view('/templates/' . GLOBAL_TEMPLATE . '/pages/tickets/index');

        // Render page
        $this->page->render();
    }


}
