<?php
namespace Opencart\Admin\Controller\Extension\vqmodxmlInstaller\Module;
class vqmodxmlInstaller extends \Opencart\System\Engine\Controller {

	public function index(): void {

		$this->load->language('extension/vqmodxmlInstaller/module/vqmodxml_installer');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/vqmodxmlInstaller/module/vqmodxml_installer', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['config_file_max_size'] = ((int)preg_filter('/[^0-9]/', '', ini_get('upload_max_filesize')) * 1024 * 1024);
		$data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		$data['user_token']= $this->session->data['user_token'];
		
		$data['files'] = [];

		$directory = scandir(DIR_OPENCART .'vqmod/xml/');
		$results = array_filter($directory,function($dir){
			return !in_array($dir,['.','..']);
		});

		foreach ($results as $result) {
		
			$last_alph = substr($result,-1);

			if($last_alph != '_'){
				$name = $result;
				$status = 0;
			}else{
				$name = substr($result, 0, -1);
				$status = 1;
			}
			
			// read xml
			$xmldata = simplexml_load_file(DIR_OPENCART .'vqmod/xml/'.$result) or die("Failed to load");
			
			// count Operations
			$operations = 0;
			foreach($xmldata as $file){
				$operation = $file->operation->count();
				$operations = $operations + $operation;
			}
			
			$data['files'][] = [
				'name'       => $name,
				'files'      => $xmldata->file->count(),
				'operation'  => $operations,
				'status'	 => $status,
				'enable'     => $this->url->link('extension/vqmodxmlInstaller/module/vqmodxml_installer|enable', 'user_token=' . $this->session->data['user_token'] . '&file=' . $result),
				'disable'     => $this->url->link('extension/vqmodxmlInstaller/module/vqmodxml_installer|disable', 'user_token=' . $this->session->data['user_token'] . '&file=' . $result),
				'delete'     => $this->url->link('extension/vqmodxmlInstaller/module/vqmodxml_installer|delete', 'user_token=' . $this->session->data['user_token'] . '&file=' . $result),
				'view'     => $this->url->link('extension/vqmodxmlInstaller/module/vqmodxml_installer|view', 'user_token=' . $this->session->data['user_token'] . '&file=' . $result)
				];
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/vqmodxmlInstaller/module/installer_vqmodxml', $data));
	}

	public function upload(): void {
		$this->load->language('extension/vqmodxmlInstaller/module/vqmodxml_installer');

		$json = [];

		// Check user has permission
		if (!$this->user->hasPermission('modify', 'extension/vqmodxmlInstaller/module/vqmodxml_installer')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (empty($this->request->files['file']['name']) || !is_file($this->request->files['file']['tmp_name'])) {
			$json['error'] = $this->language->get('error_upload');
		}

		if (!$json) {
			// Sanitize the filename
			$filename = basename(html_entity_decode($this->request->files['file']['name'], ENT_QUOTES, 'UTF-8'));

			// Validate the filename length
			if ((utf8_strlen($filename) < 3) || (utf8_strlen($filename) > 128)) {
				$json['error'] = $this->language->get('error_filename');
			}

			// Allowed file extension types

			$allowed = [];

			$extension_allowed = array('xml');

			$filetypes = $extension_allowed;
			foreach ($filetypes as $filetype) {
				$allowed[] = trim($filetype);
			}


			if (!in_array(strtolower(substr(strrchr($filename, '.'), 1)), $allowed)) {
				$json['error'] = $this->language->get('error_file_type');
			}

			// Return any upload error
			if ($this->request->files['file']['error'] != UPLOAD_ERR_OK) {
				$json['error'] = $this->language->get('error_upload_' . $this->request->files['file']['error']);
			}
		}

		if (!$json) {
			$file = $filename.'_';
			move_uploaded_file($this->request->files['file']['tmp_name'], DIR_OPENCART .'vqmod/xml/'. $file);

			$json['filename'] = $file;

			$json['success'] = $this->language->get('text_upload');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function delete():void {
		$this->load->language('extension/vqmodxmlInstaller/module/vqmodxml_installer');

		$json = [];

		if (isset($this->request->get['file'])) {
			$file_name = $this->request->get['file'];
		} else {
			$file_name = '';
		}

		// Check user has permission
		if (!$this->user->hasPermission('modify', 'extension/vqmodxmlInstaller/module/vqmodxml_installer')) {
			$json['error'] = $this->language->get('error_permission');
		}
		if($file_name){
        $dir = DIR_OPENCART .'vqmod/xml/';   

        $dirHandle = opendir($dir);   

        while ($file = readdir($dirHandle)) {    
            if($file==$file_name) {
                unlink($dir."/".$file);//give correct path,
				$json['success'] = $this->language->get('text_delete_success');
            }
        }   

        closedir($dirHandle);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function disable():void {
		$this->load->language('extension/vqmodxmlInstaller/module/vqmodxml_installer');

		$json = [];

		if (isset($this->request->get['file'])) {
			$file_name = $this->request->get['file'];
		} else {
			$file_name = '';
		}

		// Check user has permission
		if (!$this->user->hasPermission('modify', 'extension/vqmodxmlInstaller/module/vqmodxml_installer')) {
			$json['error'] = $this->language->get('error_permission');
		}
		if($file_name){
        $dir = DIR_OPENCART .'vqmod/xml/';   

        $dirHandle = opendir($dir);   

        while ($file = readdir($dirHandle)) {    
            if($file==$file_name) {
                rename($dir."/".$file,$dir."/".$file."_");
				$json['success'] = $this->language->get('text_disable_success');
            }
        }   

        closedir($dirHandle);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function enable():void {
		$this->load->language('extension/vqmodxmlInstaller/module/vqmodxml_installer');

		$json = [];

		if (isset($this->request->get['file'])) {
			$file_name = $this->request->get['file'];
		} else {
			$file_name = '';
		}

		// Check user has permission
		if (!$this->user->hasPermission('modify', 'extension/vqmodxmlInstaller/module/vqmodxml_installer')) {
			$json['error'] = $this->language->get('error_permission');
		}
		if($file_name){
        $dir = DIR_OPENCART .'vqmod/xml/';   

        $dirHandle = opendir($dir);   

        while ($file = readdir($dirHandle)) {    
            if($file==$file_name) {
				$newfile_name = substr($file_name, 0, -1);
                rename($dir."/".$file,$dir."/".$newfile_name);
				$json['success'] = $this->language->get('text_enable_success');
            }
        }   

        closedir($dirHandle);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function view(): void {

		$this->load->language('extension/vqmodxmlInstaller/module/vqmodxml_installer');

		$this->document->setTitle($this->language->get('text_view'));

		if (isset($this->request->get['file'])) {
			$file_name = $this->request->get['file'];
		} else {
			$file_name = '';
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/vqmodxmlInstaller/module/vqmodxml_installer', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_view'),
			'href' => $this->url->link('extension/vqmodxmlInstaller/module/vqmodxml_installer|view', 'user_token=' . $this->session->data['user_token']. '&file=' . $file_name, true)
		];

		$data['xmls'] = [];

		// read xml
		$xmldata = simplexml_load_file(DIR_OPENCART .'vqmod/xml/'.$file_name) or die("Failed to load");

		foreach($xmldata->file as $singlefile){
			$file_name=$singlefile['name'];
			$operation=$singlefile->operation->count();
			
			$data['xmls'][] = [
				'file' => $file_name,
				'operation' => $operation,
			];
		}
		// var_dump($data['xmls']);die;

		$data['back'] = $this->url->link('extension/vqmodxmlInstaller/module/vqmodxml_installer', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		$data['user_token']= $this->session->data['user_token'];
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/vqmodxmlInstaller/module/view_vqmodxml', $data));
	}
}