<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class galery extends CI_Controller {

    public function main()
    {
        $data['konten']="galery";
        $this->load->view('template',$data);

    }

}
?>
