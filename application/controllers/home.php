<?php
        class Home extends CI_Controller {

            function __construct()
            {
            	parent::__construct();
            		$this->load->helper('url');

            	//$this->_init();
            }

            // private function _init()
            // {
            //     $this->output->set_template('default');
            //     //$this->output
            // 	$this->load->js('/assets/js/jquery-1.9.1.min.js');
            // 	$this->load->js('/assets/hero_files/bootstrap-transition.js');
            // 	$this->load->js('/assets/hero_files/bootstrap-collapse.js');
            // }
            public function index()
            {
                //$c['page_title'] = 'XRomania - Home: Your first step towards another great experience';
                $this->load->view('home');
            }
        }
