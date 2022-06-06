<?php
class mbuku extends CI_Model{
    public function tambahData(){
        $data= [
            "id_buku" => "",
            "judul" => $this->input->post('judul', true),
            "pengarang" => $this->input->post('pengarang', true),
            "penerbit" => $this->input->post('penerbit', true),
            "tahun" => $this->input->post('tahun', true),
            "genre" => $this->input->post('genre', true),
        ];
        $this->db->insert('buku', $data);
    }

    public function getBuku(){
        $this->db->select('*');
			$this->db->from('buku');
			$this->db->join('genre', 'genre.id_genre = buku.genre');
			$query = $this->db->get();
        return $query->result_array();
    }

    public function getBukuById($id_buku = ''){
        $query = $this->db->get_where('buku', array('id_buku' => $id_buku));
        return $query->result_array();
    }

    public function editDataBuku($id_buku)
		{
            $data= [
                "id_buku" =>  $this->input->post('id_buku', true),
                "judul" => $this->input->post('judul', true),
                "pengarang" => $this->input->post('pengarang', true),
                "penerbit" => $this->input->post('penerbit', true),
                "tahun" => $this->input->post('tahun', true),
                "genre" => $this->input->post('genre', true),
            ];
			echo $data['id_buku'];

			$this->db->set($data);
			$this->db->where('id_buku', $id_buku);
			$this->db->update('buku');
		}
    public function hapusDataBuku($id_buku='')
		{
			return $this->db->delete('buku', array('id_buku' => $id_buku));
		}
}
?>