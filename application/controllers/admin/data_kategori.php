<?php 

class Data_kategori extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('auth/login');
        }
    }
    public function index()
    {
		$data['menu'] = $this->model_menu->tampil_data()->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_kategori', $data);
		$this->load->view('template_admin/footer');
    }

    public function detail($id_menu)
    {
        $data['menu'] = $this->model_menu->detail_menu($id_menu);
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/detail_menu', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_brg       = $this->input->post('nama_brg');
        $keterangan     = $this->input->post('keterangan');
        $kategori     = $this->input->post('kategori');
        $harga          = $this->input->post('harga');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar =''){          
        }else{
            $config['upload_path']   = './uploads';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal di Upload!";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array (
            'nama_brg'     => $nama_brg,
            'keterangan'   => $keterangan,
            'kategori'   => $kategori,
            'harga'        => $harga,
            'gambar'       => $gambar
        );

        $this->model_menu->tambah_barang($data, 'tb_menu');
        redirect('admin/data_kategori/index');
    }   

    public function hapus ($id)
    {
        $where = array('id_menu' => $id);
        $this->model_menu->hapus_data($where, 'tb_menu');
        redirect('admin/data_kategori/index');
    }
    
    public function edit($id)
    {
        $where = array ('id_menu' =>$id);
        $data['menu'] = $this->model_menu->edit_menu($where, 'tb_menu')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_menu', $data);
        $this->load->view('template_admin/footer');
    }

    public function update()
    {
        $id                     = $this->input->post('id_menu');
        $nama_brg               = $this->input->post('nama_brg');
        $keterangan             = $this->input->post('keterangan');
        $harga                  = $this->input->post('harga');

        $data = array(
            'nama_brg'          => $nama_brg,
            'keterangan'        => $keterangan,
            'harga'             => $harga,
        );

        $where = array(
            'id_menu'    => $id
        );

        $this->model_menu->update_data($where,$data,'tb_menu');
        redirect('admin/data_kategori/index');
    }
}