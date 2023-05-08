<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Drive extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data["files"] = directory_map("./assets/img/foto/");

        $this->load->view('link/makuta-drive', $data);
    }

    public function download($fileName)
    {
        $this->load->helper('download');

        $data = file_get_contents(base_url() . 'assets/img/foto/' . $fileName);
        $name = $fileName;

        force_download($name, $data);
    }
}
