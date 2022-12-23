<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
		$this->load->helper('url');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->data['website'] = $this->db->get('tbl_website')->row();
		$this->data['cw'] = $this->db->get('tbl_chat_wa')->row();
		$this->data['pop_up'] = $this->db->get('tbl_pop_up')->row();
		$this->data['sosmed'] = $this->db->get('tbl_sosmed')->result();
		$this->data['homeweb'] = $this->db->get('tbl_homeweb')->row();
		$this->data['slider_home'] = $this->db->get('tbl_slider_home')->result();
		$this->data['kompetensi'] = $this->db->get('tbl_kompetensi')->result();
		$this->data['mitra'] = $this->db->get('tbl_mitra')->result();
		$this->data['slider_tentang_kami'] = $this->db->get('tbl_slider_tentang_kami')->result();
		$this->data['visi'] = $this->db->get_where('tbl_visi_misi', array('id' => 1))->row();
		$this->data['misi'] = $this->db->get_where('tbl_visi_misi', array('id' => 2))->row();
		$this->data['s_visi'] = $this->db->get_where('tbl_slider_visi_misi', array('posisi' => 'Visi'))->result();
		$this->data['s_misi'] = $this->db->get_where('tbl_slider_visi_misi', array('posisi' => 'Misi'))->result();


		$this->data['k1'] = $this->db->get_where('tbl_keunggulan', array('id' => 1))->row();
		$this->data['k2'] = $this->db->get_where('tbl_keunggulan', array('id' => 2))->row();
		$this->data['k3'] = $this->db->get_where('tbl_keunggulan', array('id' => 3))->row();
		$this->data['k4'] = $this->db->get_where('tbl_keunggulan', array('id' => 4))->row();
		$this->data['k5'] = $this->db->get_where('tbl_keunggulan', array('id' => 5))->row();
		$this->data['k6'] = $this->db->get_where('tbl_keunggulan', array('id' => 6))->row();
		$this->data['k7'] = $this->db->get_where('tbl_keunggulan', array('id' => 7))->row();
		$this->data['k8'] = $this->db->get_where('tbl_keunggulan', array('id' => 8))->row();

		$this->data['ekskul'] = $this->db->get('tbl_ekskul')->result();
		$this->data['prestasi'] = $this->db->get('tbl_prestasi')->result();
		$this->data['gallery'] = $this->db->get('tbl_gallery')->result();
		$this->data['kesan_pesan'] = $this->db->get('tbl_kesan_pesan')->result();
		$this->data['contact'] = $this->db->get('tbl_contact')->result();

		$this->data['dc1'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 1))->row();
		$this->data['dc2'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 2))->row();

		$this->data['note'] = $this->db->get('tbl_note')->row();

		$this->data['link1'] = $this->db->get_where('tbl_link', array('id' => 1))->row();
		$this->data['link2'] = $this->db->get_where('tbl_link', array('id' => 2))->row();

		$this->web = 'content/v_home';
		// $this->data['navigation']=$this->db->get_where('tbl_navigation');
		$this->layout();
	}
	public function formPost()

	{

		$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));



		$userIp = $this->input->ip_address();



		$secret = $this->config->item('google_secret');



		$url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptchaResponse . "&remoteip=" . $userIp;



		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$output = curl_exec($ch);

		curl_close($ch);



		$status = json_decode($output, true);



		if ($status['success']) {

			print_r('Google Recaptcha Successful');

			exit;
		} else {

			$this->session->set_flashdata('flashError', 'Sorry Google Recaptcha Unsuccessful!!');
		}



		redirect('form', 'refresh');
	}



	public function add_user()
	{
		$nama = $this->input->post('nama');
		$telp = $this->input->post('telp');
		$namaLogistics = $this->input->post('namaLogistics');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$domisili = $this->input->post('domisili');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'nama' => $nama,
			'noTelp' => $telp,
			'namaLogistics' => $namaLogistics,
			'alamat' => $alamat,
			'email' => $email,
			'domisili' => $domisili,
			'keterangan' => $keterangan
		);
		$this->M_data->input_data($data, 'log_user');
		// echo "<script>alert('Success');</script>";
		redirect('../thank_you', 'refresh');
	}

	public function download()
	{
		force_download('upload/Promo-List-EMCO.pdf', NULL);
	}
}