<?php 
class cbuku extends CI_Controller{
    public function index(){
        // $this->inputForm();
    }

    function __construct()
		{
			parent::__construct();
            $this->load->model('mbuku');
			$this->load->library('form_validation');
			$this->simple_login->cek_login();
		}

    public function inputForm(){
		$this->load->view('templates/header');
        $this->load->helper('form');
		$this->load->view('templates/footer');
        $options = array(
            'fi'         	=> 'Fiksi',
            'nf'         	=> 'Non-Fiksi',
            'nov'        	=> 'Novel',
            'il'        	=> 'Ilmiah',
        );
        $data['form']="
				".form_open('')."
				<table>
				
                    <tr>
                        <td>
							".form_label('Judul', 'judul')."
						</td>
						<td>
							".form_input('judul', '', 'id = judul')."
						</td>
					</tr>
					<tr>
                        <td>
							".form_label('Pengarang', 'pengarang')."
						</td>
						<td>
							".form_input('pengarang', '', 'id = pengarang')."
						</td>
					</tr>
					<tr>
                        <td>
							".form_label('Penerbit', 'penerbit')."
						</td>
						<td>
							".form_input('penerbit', '', 'id = penerbit')."
						</td>
					</tr>
					<tr>
                        <td>
							".form_label('Tahun Terbit', 'tahun')."
						</td>
						<td>
							".form_input('tahun', '', 'id = tahun')."
						</td>
					</tr>
					<tr>
						<td>
							".form_label('Genre', 'genre')."
						</td>
						<td>
							".form_dropdown('genre', $options, 'none', 'id=genre')."
						</td>
					</tr>
					<tr>
						<td>
							".form_submit('Input', 'Input Data')."
						</td>
					</tr>
				</table>
			";
            $this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
			$this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
			$this->form_validation->set_rules('tahun', 'Tahun Terbit', 'required');
			$this->form_validation->set_rules('genre', 'Genre', 'required');
			if ($this->form_validation->run() == FALSE){
				$this->load->view('buku/vbuku',$data);
				// echo "salah";
			}else{
				$this->mbuku->tambahData();
				$data['judul'] = "Berhasil";
				echo $data;
            	$this->load->view('home/sukses.php');
			}
            
    }
	public function tampilBuku(){
		$data['list']=$this->mbuku->getBuku();
		$data['judul']="List";
		$this->load->view('templates/header');
		$this->load->view('buku/vlistbuku',$data);
		$this->load->view('templates/footer');
	}
	public function edit($id_buku)
		{
			$data['judul'] = 'Edit Buku';
			$data['List'] = $this->mbuku->getBukuById($id_buku);
			$list = $this->mbuku->getBukuById($id_buku);

			$this->load->helper('form');
			$options = [	
						'fi'         	=> 'Fiksi',
						'nf'         	=> 'Non-Fiksi',
						'nov'        	=> 'Novel',
						'il'        	=> 'Ilmiah',
						];

			foreach ($list as $b) {
				$data['form']="
					".form_open('', array('id_buku' => $b['id_buku']))."
					<table>
						<tr>
							<td>
								".form_hidden('id_buku', $b['id_buku'])."
							</td>
						</tr>
						<tr>
							<td>
								".form_label('Judul', 'judul')."
							</td>
							<td>
								".form_input('judul', $b['judul'], 'id = judul')."
							</td>
						</tr>
						<tr>
							<td>
								".form_label('Pengarang', 'pengarang')."
							</td>
							<td>
								".form_input('pengarang', $b['pengarang'], 'id = pengarang')."
							</td>
						</tr>
						<tr>
							<td>
								".form_label('Penerbit', 'penerbit')."
							</td>
							<td>
								".form_input('penerbit', $b['penerbit'], 'id = penerbit')."
							</td>
						</tr>
						<tr>
							<td>
								".form_label('Tahun Terbit', 'tahun')."
							</td>
							<td>
								".form_input('tahun', $b['tahun'], 'id = tahun')."
							</td>
						</tr>
						<tr>
							<td>
								".form_label('Genre', 'genre')."
							</td>
							<td>
								".form_dropdown('genre', $options, $b['genre'], 'id=genre')."
							</td>
						</tr>
						<tr>
							<td>
								".form_submit('simpan', 'Simpan Data')."
							</td>
						</tr>
					</table>
				";
			}
			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
			$this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
			$this->form_validation->set_rules('tahun', 'Tahun Terbit', 'required');
			$this->form_validation->set_rules('genre', 'Genre', 'required');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('templates/header');
				$this->load->view('buku/editBuku', $data);
				$this->load->view('templates/footer');
			}else{
				$this->mbuku->editDataBuku($id_buku);
				// $this->session->set_flashdata('flash', 'Ditambahkan');
				// $data['judul'] = "Berhasil";
				// echo "Berhasil";
            	// $this->load->view('home/sukses.php');
				// $this->load->view('templates/header', $data);
            	$this->load->view('home/sukses.php');
            	//$this->load->view('buku/vlistbuku');
            	$this->load->view('templates/footer');
			}
			$this->load->view('templates/header');
			$this->load->view('templates/footer');
		}
	public function hapus($id_buku)
		{
			$data['judul'] = "Hapus";
			if ($this->mbuku->hapusDataBuku($id_buku)) {
				$this->session->set_flashdata('flash', 'dihapus');
				redirect('/cbuku/tampilBuku');
				// $this->load->view('templates/header', $data);
				// $this->load->view('home/sukses',$data);
				// $this->load->view('templates/footer');
			} else {
				# code...
			}
			
		}
}

?>