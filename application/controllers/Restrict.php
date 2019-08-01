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

	public function ajax_save_course()
	{
		if (!$this->input->is_ajax_request()) {
			exit("Nenhum acesso de script é permitido.");
		}

		$json = array();
		$json["status"] = 1;
		$json["error_list"] = array();

		$this->load->model("courses_model");

		$data = $this->input->post();
		$is_duplicated = $this->courses_model->is_duplicated( "course_name", $data["course_name"], $data["course_id"] );

		if ( empty($data["course_name"]) ){
			$json["error_list"]["#course_name"] = "Nome do curso é obrigatório";
		}else{
			if( $is_duplicated ){
				$json["error_list"]["#course_name"] = "Nome do curso já existente";
			}
		}

		$data["course_duration"] = floatval($data["course_duration"]);
		$is_duration = ( $data["course_duration"] > 0 && $data["course_duration"] < 100 );

		if ( empty( $data["course_duration"] ) ){
			$json["error_list"]["#course_duration"] = "Duração do curso é obrigatório";
		}else{
			if( !( $is_duration ) ){
				$json["error_list"]["#course_duration"] = "Duração do curso deve ser maior que 0 (h) e menor que 100 (h)";
			}
		}

		if ( !empty($json["error_list"]) ){
			$json["status"] = 0;
		}else{
			if( !empty( $data["course_img"] ) ){
				$file_name = basename( $data["course_img"] );
				$old_path = getcwd()."/tmp/".$file_name;
				$new_path = getcwd()."/public/img/courses/".$file_name;

				rename($old_path, $new_path);
				$data["course_img"] = "/public/img/courses/".$file_name;
			}

			if( empty( $data["course_id"] ) ){
				$this->courses_model->insert( $data );
			}else{
				$course_id = $data["course_id"];
				unset( $data["course_id"] );
				$this->courses_model->update( $course_id, $data);
			}

		}

		echo json_encode($json);
	}

	public function ajax_save_member()
	{
		if (!$this->input->is_ajax_request()) {
			exit("Nenhum acesso de script é permitido.");
		}

		$json = array();
		$json["status"] = 1;
		$json["error_list"] = array();

		$this->load->model("team_model");

		$data = $this->input->post();
		$is_duplicated = $this->team_model->is_duplicated( "member_name", $data["member_name"], $data["member_id"] );

		if ( empty($data["member_name"]) ){
			$json["error_list"]["#member_name"] = "Nome do membro é obrigatório";
		}

		if ( !empty($json["error_list"]) ){
			$json["status"] = 0;
		}else{
			if( !empty( $data["member_photo"] ) ){
				$file_name = basename( $data["member_photo"] );
				$old_path = getcwd()."/tmp/".$file_name;
				$new_path = getcwd()."/public/img/team/".$file_name;

				rename($old_path, $new_path);
				$data["member_photo"] = "/public/img/team/".$file_name;
			}

			if( empty( $data["member_id"] ) ){
				$this->team_model->insert( $data );
			}else{
				$member_id = $data["member_id"];
				unset( $data["member_id"] );
				$this->team_model->update( $member_id, $data);
			}

		}

		echo json_encode($json);
	}

	public function ajax_save_user()
	{
		if (!$this->input->is_ajax_request()) {
			exit("Nenhum acesso de script é permitido.");
		}

		$json = array();
		$json["status"] = 1;
		$json["error_list"] = array();

		$this->load->model("team_model");

		$data = $this->input->post();
		$is_duplicated = $this->user_model->is_duplicated( "member_name", $data["member_name"], $data["member_id"] );

		if ( empty($data["user_name"]) ){
			$json["error_list"]["#user_name"] = "Nome do membro é obrigatório";
		}else{
			if( $is_duplicated ){
				$json["error_list"]["#user_name"] = "Nome do membro já existente";
			}
		}

		if ( !empty($json["error_list"]) ){
			$json["status"] = 0;
		}else{
			if( !empty( $data["member_photo"] ) ){
				$file_name = basename( $data["member_photo"] );
				$old_path = getcwd()."/tmp/".$file_name;
				$new_path = getcwd()."/public/img/team/".$file_name;

				rename($old_path, $new_path);
				$data["member_photo"] = "/public/img/team/".$file_name;
			}

			if( empty( $data["member_id"] ) ){
				$this->team_model->insert( $data );
			}else{
				$course_id = $data["member_id"];
				unset( $data["member_id"] );
				$this->team_model->update( $course_id, $data);
			}

		}

		echo json_encode($json);
	}
}
