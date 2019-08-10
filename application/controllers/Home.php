<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model("courses_model");
		$this->load->model("team_model");

		$courses = $this->courses_model->show_courses();
		$team = $this->team_model->show_team();


		$data = array(
			"courses" => $courses,
			"team" => $team
		);

		$this->template->show('home', $data);
	}
}
