<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    
	public function index()
	{
	    // Add filter CSS
        $this->page->set_css('/assets/css/pages/index.css', 'stylesheet', ['media' => 'screen']);
        $this->page->use_filters();

        // Add view
        $this->page->set_view('/templates/' . GLOBAL_TEMPLATE . '/pages/index');

        // Render page
        $this->page->render();
	}

	public function about()
    {
        // Add filter CSS
        $this->page->set_css('/assets/css/pages/about.css', 'stylesheet', ['media' => 'screen']);
        $this->page->use_filters();

        // Add view
        $this->page->set_view('/templates/' . GLOBAL_TEMPLATE . '/pages/about');

        // Render page
        $this->page->render();
    }

    public function join()
    {
        // Add view
        $this->page->set_view('/templates/' . GLOBAL_TEMPLATE . '/pages/join');

        // Render page
        $this->page->render();
    }

    public function contact()
    {
        // Add CSS
        $this->page->set_css('/assets/css/pages/contact.css', 'stylesheet', ['media' => 'screen']);

        // Add contact JavaScript
        $this->page->set_js('/assets/js/contact.js');

        // Add view
        $this->page->set_view('/templates/' . GLOBAL_TEMPLATE . '/pages/contact');

        // Render page
        $this->page->render();
    }

    public function donate()
    {
        $this->_temp();
    }

    public function partners() {
        $this->_temp();
    }

    public function projects() {
        $this->_temp();
    }

    public function documents() {
        $this->_temp();
    }

    public function flog() {
        $this->_temp();
    }

    private function _temp() {
        $this->page->render();
    }
}
