<?php
class Product extends CI_Controller
{
    //fungsi untuk menambahkan data
    function tambah()
    {        
        //jika ada post submit yang diterima dalam form
        if($this->input->post('submit'))
        {
            // $this->load->helper(array('form', 'url'));
            //load file model 
            $this->load->model('productmodel');

            //menjalankan fungsi tambah data pada model
            $this->productmodel->tambah();
            $this->session->set_flashdata('item','tambah');
            //mengarahkan file ke controller 
            //artinya mengarahkan ke index
            redirect ('product');
        }  
    
        $this->load->view('tambah_product');
    }
    
    //fungsi pertama kali diload ketika memanggil controller
    function index()
    {
        //meload file model
        $this->load->model('Productmodel');

        //mengambil nilai pengambalian dari fungsi tampil pada model
        //return nilai didapat berupa array
        $data['hasil'] = $this->Productmodel->tampil();

        //meload file view
        //sekaligus memberikan parameter $data
        //yang berisi data $hasil dari fungsi tampil pada model
        $this->load->view('view_product', $data);
    }

    //fungsi pertama kali diload ketika memanggil controller
    function carimerek()
    {
        //meload file model
        $this->load->model('Productmodel');

        //mengambil nilai pengambalian dari fungsi tampil pada model
        //return nilai didapat berupa array
        $data['hasil'] = $this->Productmodel->tampil_merek();

        //meload file view
        //sekaligus memberikan parameter $data
        //yang berisi data $hasil dari fungsi tampil pada model
        $this->load->view('view_product', $data);
    }

    
    //fungsi hapus data
    function delete($id)
    {
        //meload file model
        $this->load->model('Productmodel');

        //menjalankan fungsi hapus pada model
        $this->Productmodel->delete($id);

        //mengarahkan ke controller
        redirect('product');
    }

    //fungsi untuk melakukan perubahan data
    function update($id)
    {
        //membaca apakah form submit dilakukan
        if($_POST==null)
        {            
            //meload file model
            $this->load->model('Productmodel');
            //menjalankan fungsi ubah tampil
            $data['hasil'] = $this->Productmodel->ubah_tampil($id);

            //meload file view
            $this->load->view('ubah_product', $data);
        }
        else
        {
            // $this->load->helper(array('form', 'url'));
            //meload file model
            $this->load->model('Productmodel');
            //menjalankan fungsi ubah 
            $this->Productmodel->ubah($id);
            //mengarahkan file controller
            redirect('product');
        } 
    }
}
?>