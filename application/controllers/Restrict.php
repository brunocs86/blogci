<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }

    public function index()
    {
        /*$this->load->model("users_model");
        print_r($this->users_model->get_user_data("bruno"));*/
        if( $this->session->userdata("user_id") ){
            $data = array(
                "scripts" => array(
                    "util.js",
                    "restrict.js"
                )
            );
            $this->template->show('restrict.php', $data);
        }else{
            $data = array(
                "scripts" => array(
                    "util.js",
                    "login.js"
                )
            );
            $this->template->show('login.php', $data);
        }
    }

    public function logoff()
    {
        $this->session->sess_destroy();
        header("Location: ".base_url()."restrict");
    }

    public function ajax_login()
    {
        if( !$this->input->is_ajax_request() ){
            exit("Nenhum acesso de script é permitido.");
        }
        $json = array();
        $json["status"] = 1;
        $json["error_list"] = array();

        $username = $this->input->post("username");
        $password = $this->input->post("password");

        if(empty($username)){
            $json["status"] = 0;
            $json["error_list"]["#username"] = "Usuário não pode ser vazio!";
        }else{
            $this->load->model("users_model");
            $result = $this->users_model->get_user_data($username);
            if($result){
                $user_id = $result->user_id;
                $password_hash = $result->password_hash;
                if (password_verify($password, $password_hash)){
                    $this->session->set_userdata("user_id", $user_id);
                }else{
                    $json["status"] = 0;
                }
            }else{
                $json["status"] = 0;
            }
            if ($json["status"] == 0){
                $json["error_list"]["#btn-login"] = "Usuário e/ou senha incorreto/os!";
            }
        }
        echo json_encode($json);
    }

	public function ajax_import_image()
	{
		if (!$this->input->is_ajax_request()) {
			exit("Nenhum acesso de script é permitido.");
		}

		$config["upload_path"] = "./tmp/";
		$config["allowed_types"] = "gif|png|jpg|jpeg";
		$config["overwrite"] = TRUE;

		$this->load->library("upload", $config);

		$json = array();
		$json["status"] = 1;

		if( !$this->upload->do_upload("image_file") ){
			$json["status"] = 0;
			$json["error"] = $this->upload->display_errors("","");
		}else{
			if( $this->upload->data()["file_size"] <= 1024 ){
				$file_name = $this->upload->data()["file_name"];
				$json["img_path"] = base_url()."tmp/".$file_name;
			} else{
				$json["status"] = 0;
				$json["error"] = "Arquivo não pode ser maior que 1MB!";
			}

		}

		echo json_encode($json);
	}
}
