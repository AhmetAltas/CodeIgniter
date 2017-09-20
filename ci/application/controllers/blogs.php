<?php
class blogs extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('blogs_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['blogs'] = $this->blogs_model->get_blogs();
        $data['title'] = 'blogs archive';

        $this->load->view('templates/header', $data);
        $this->load->view('blogs/index', $data);
        $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
        $data['blogs_item'] = $this->blogs_model->get_blogs($slug);

        if (empty($data['blogs_item']))
        {
                show_404();
        }

        $data['title'] = $data['blogs_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('blogs/view', $data);
        $this->load->view('templates/footer');
        }
        public function create()
        {
         $this->load->helper('form');
         $this->load->library('form_validation');

        $data['title'] = 'Create a blogs item';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
         {
         $this->load->view('templates/header', $data);
         $this->load->view('blogs/create');
         $this->load->view('templates/footer');

        }
        else
        {
        $this->blogs_model->set_blogs();
         $this->load->view('blogs/success');
        }
    }
}