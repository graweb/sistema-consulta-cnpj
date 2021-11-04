<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function consultar()
	{
		$cnpj = $this->input->post('cnpj');

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://www.receitaws.com.br/v1/cnpj/{$cnpj}");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$outpout = curl_exec($ch);
		curl_close($ch);

		$dados['dados'] = json_decode($outpout, true);
		$this->load->view('resposta', $dados);
	}
}
