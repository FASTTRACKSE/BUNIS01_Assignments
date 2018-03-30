<?php 
class servicesAdminController extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->model('servicesAdminModel');
	}

	public function register(){
		$data = array(
			'headerTitle' => 'Services',
		);
		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('insertIndex');
		$this->load->view('admintemplates/footer');
	}

    public function insert()
        {
            $pic_name = $this->input->post('fName');

            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000;
            $config['file_name'] = $pic_name;
     
            $this->load->library('upload', $config);
            $this->upload->overwrite = true;


            if (!$this->upload->do_upload('picFile')){
                $error = array('error' => $this->upload->display_errors());
            }else{

                $upload_data = $this->upload->data();

                $data = array(
					"name" =>$this->input->post("fName"),
					"description" =>$this->input->post("fDesc"),
					"tag" =>$this->input->post("fTag"),
                    "picture" => $upload_data['file_name'],
                );
                
                $this->servicesAdminModel->insert_Data($data);

                redirect('servicesAdminController/view');
            }
        }

    public function update($ID)
        {
            $pic_name = $this->input->post('fName');

            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000;
            $config['file_name'] = $pic_name;
     
            $this->load->library('upload', $config);
            $this->upload->overwrite = true;


            if (!$this->upload->do_upload('picFile')){
                $error = array('error' => $this->upload->display_errors());
            }else{

                $upload_data = $this->upload->data();

                $data = array(
					"name" =>$this->input->post("fName"),
					"description" =>$this->input->post("fDesc"),
					"tag" =>$this->input->post("fTag"),
                    "picture" => $upload_data['file_name'],
                );
                
                $this->servicesAdminModel->update_Data_by_ID($ID,$data);

                redirect('servicesAdminController/view');
            }
        }

	public function view(){

		$config["base_url"] = base_url()."index.php/servicesAdminController/view";
		$config["total_rows"] = $this->db->get('service')->num_rows();
		$config["per_page"] = 5;
		$config["num_limits"] = 5;

		$this->pagination->initialize($config);

		$dataPage['getDataPagination'] = $this->servicesAdminModel->getPagination($config['per_page'],
			$this->uri->segment(3));

		$dataHead = array(
			'headerTitle' => 'Services',
		);

		$data = array_merge($dataPage, $dataHead);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('servicesAdminIndex');
		$this->load->view('admintemplates/footer');
 	}

	public function toDelete($ID){
		$dataHead = array(
			'headerTitle' => 'Services',
		);
		$dataPage['row'] = $this->servicesAdminModel->get_Data_by_ID($ID);

		$data = array_merge($dataHead, $dataPage);

		$this->load->view('admintemplates/head', $data);
		$this->load->view('admintemplates/navbar');
		$this->load->view('deleteIndex');
		$this->load->view('admintemplates/footer');
	}

	public function delete($deleteID){;
		$this->servicesAdminModel->delete_Data_by_ID($deleteID);
		redirect("servicesAdminController/view");
	}

	public function toUpdate($ID){
		$data = array(
			'headerTitle' => 'Services',
		);
		$data["row"] = $this->servicesAdminModel->get_Data_by_ID($ID);
		$this->load->view('admintemplates/head');
		$this->load->view('admintemplates/navbar');
		$this->load->view('updateIndex', $data);
		$this->load->view('admintemplates/footer');
	}
}
?>