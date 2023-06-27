<?php 

class Anggota_model extends CI_model{
    public function getAllAnggota(){
       return $this->db->get('anggota')->result_array();
       
    }
    
    public function getAnggota($limit, $start, $keyword = null){
        if($keyword){
            $this->db->like('kode_anggota', $keyword);
            $this->db->or_like('nama', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('no_hp', $keyword);
            $this->db->or_like('kemampuan_bahasa', $keyword);
            $this->db->or_like('alamat', $keyword);
        }
        return $this->db->get('anggota', $limit, $start)->result_array();
    }
    public function tambahDataAnggota(){
        $data=[
            "kode_anggota"=>$this->input->post('kode_anggota', true),
            "nama" =>$this->input->post('nama', true),
            "email" =>$this->input->post('email', true),
            "no_hp" =>$this->input->post('no_hp', true),
            "kemampuan_bahasa" =>$this->input->post('kemampuan_bahasa', true),
            "alamat" =>$this->input->post('alamat', true)
        ];

        $this->db->insert('anggota', $data);
    }
    public function kode(){
        $this->db->select('RIGHT(anggota.kode_anggota,3) as kode_anggota', FALSE);
        $this->db->order_by('kode_anggota','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('anggota');  //cek dulu apakah ada sudah ada kode di tabel.    
        if($query->num_rows() <> 0){      
             //cek kode jika telah tersedia    
             $data = $query->row();      
             $kode = intval($data->kode_anggota) + 1; 
        }
        else{      
             $kode = 1;  //cek jika kode belum terdapat pada table
        }
            // $tgl=date('dmY'); 
            // $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
            // $kodetampil = "AG-"."5".$tgl.$batas;  //format kode
            // return $kodetampil;  

            $kodemax = str_pad($kode,3, "0", STR_PAD_LEFT);
            $kodetampil = "AG-".$kodemax;
            return $kodetampil;

       }
    public function hapusDataAnggota($id){
        $this->db->where('id', $id);
        $this->db->delete('anggota');
    }
    public function getAnggotaById($id){
        return $this->db->get_where('anggota', ['id' => $id])->row_array();
    }
    public function ubahDataAnggota(){
        $data=[
            "kode_anggota"=>$this->input->post('kode_anggota', true),
            "nama" =>$this->input->post('nama', true),
            "email" =>$this->input->post('email', true),
            "no_hp" =>$this->input->post('no_hp', true),
            "kemampuan_bahasa" =>$this->input->post('kemampuan_bahasa', true),
            "alamat" =>$this->input->post('alamat', true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('anggota', $data);
    }
    public function countAllAnggota(){
        return $this->db->get('anggota')->num_rows();
    }
}
?>