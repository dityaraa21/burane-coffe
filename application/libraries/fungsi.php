<?php 

Class Fungsi {
    protected $ci;

    function __construct()
    {
        $this->ci =& get_instance();
    }

    public function count_item(){
        $this->ci->load->model('model_barang');
        return $this->ci->model_barang->tampil_data()->num_rows();
    }
    public function count_kategori(){
        $this->ci->load->model('model_menu');
        return $this->ci->model_menu->tampil_data()->num_rows();
    }
}