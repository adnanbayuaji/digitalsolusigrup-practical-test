<?php
class Productmodel extends CI_Model
    {
        //fungsi untuk melakukan penambahan data pada database
        function tambah()
        {
            //mengambil data dari view
            //lalu diletakkan ke variabel
            $merek = $this->input->post('merek');
            $jenis = $this->input->post('jenis');
            $jumlah = $this->input->post('jumlah');
            $harga = $this->input->post('harga');
            $keterangan = $this->input->post('keterangan');

            //meletakkan isi variabel ke dalam array
            //array adalah nama kolom di tabel pada database
            $data = array('merek'=>$merek, 'jenis'=>$jenis, 'jumlah'=>$jumlah, 'harga'=>$harga, 'keterangan'=>$keterangan);

            //menginput array $data ke dalam tabel database
            $this->db->insert('ms_product', $data);
        }

        //fungsi untuk membaca data dari database
        function tampil()
        {
            //mengambil data dari tabel database ke variabel 
            $tampil = $this->db->get('ms_product');
            
            //memeriksa jumlah row != 0
            if($tampil->num_rows() > 0)
            {
                //perulangan data diletakkan ke $data
                foreach ($tampil->result() as $data)
                {
                    //setiap data yang ditemukan diletakkan ke array 
                    $hasil[] = $data;
                }
                //mengembalikan nilai data dari array
                return $hasil;
            }
        }

        //fungsi untuk membaca data dari database
        function tampil_merek()
        {
            $merek = $this->input->post('merek');
            //mengambil data dari tabel database ke variabel 
            $tampil = $this->db->query("SELECT * FROM ms_product WHERE merek like '%".$merek."%'");
            
            //memeriksa jumlah row != 0
            if($tampil->num_rows() > 0)
            {
                //perulangan data diletakkan ke $data
                foreach ($tampil->result() as $data)
                {
                    //setiap data yang ditemukan diletakkan ke array 
                    $hasil[] = $data;
                }
                //mengembalikan nilai data dari array
                return $hasil;
            }
        }

        function delete($id)
        {
            $this->db->delete('ms_product', array('id'=>$id));
        }

        //fungsi menampilkan saat akan mengubah
        function ubah_tampil($id)
        {
            //membaca dari tabel
            return $this->db->get_where('ms_product', array('id'=>$id))->row();
        }

        //fungsi ubah data
        function ubah($id)
        {
            //mengambil dari post ke var
            $merek = $this->input->post('merek');
            $jenis = $this->input->post('jenis');
            $jumlah = $this->input->post('jumlah');
            $harga = $this->input->post('harga');
            $keterangan = $this->input->post('keterangan');

            //meletakkan isi variabel ke dalam array
            //array adalah nama kolom di tabel pada database
            $data = array('merek'=>$merek, 'jenis'=>$jenis, 'jumlah'=>$jumlah, 'harga'=>$harga, 'keterangan'=>$keterangan);

            //kondisi yang akan dirubah by id
            $this->db->where('id', $id);

            //update tabel ke array
            $this->db->update('ms_product', $data);
        }
    }
    ?>