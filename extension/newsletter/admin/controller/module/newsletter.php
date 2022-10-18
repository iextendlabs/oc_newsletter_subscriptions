<?php
namespace Opencart\Admin\Controller\Extension\newsletter\Module;
class NewsLetter extends \Opencart\System\Engine\Controller {
	
	public function install(): void {
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "newsletter` (
			`newsletter_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
			`email` varchar(99) NOT NULL,
			`date_added` datetime NOT NULL
			)");
	}

	public function index(): void {
		
		$this->install();

		$this->load->language('extension/newsletter/module/newsletter');

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
			'href' => $this->url->link('extension/newsletter/module/newsletter', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['save']  = $this->url->link('extension/newsletter/module/newsletter|save', 'user_token=' . $this->session->data['user_token'], true);
		$data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$data['module_newsletter_status'] = $this->config->get('module_newsletter_status');
		$data['module_newsletter_text'] = $this->config->get('module_newsletter_text');
		$data['module_newsletter_text_color'] = $this->config->get('module_newsletter_text_color');
		$data['module_newsletter_button_color'] = $this->config->get('module_newsletter_button_color');
		$data['module_newsletter_image'] = $this->config->get('module_newsletter_image');
		
		$this->load->model('tool/image');

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		
		if (!empty($this->config->get('module_newsletter_image')) && is_file(DIR_IMAGE . $this->config->get('module_newsletter_image'))) {
			$data['newsletter_image'] = $this->model_tool_image->resize($this->config->get('module_newsletter_image'), 100, 100);
		} else {
			$data['newsletter_image'] = $data['placeholder'];
		}

		$data['newsletters'] = array();

		$results = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "newsletter")->rows;

		foreach ($results as $result) {
			$data['newsletters'][] = array(
				'email' => $result['email'],
				'date_added'     => $result['date_added'],
				'newsletter_id' => $result['newsletter_id']
			);
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/newsletter/module/newsletter', $data));
	}

	public function save(): void {
		$this->load->language('extension/newsletter/module/newsletter');

		$json = [];

		if (!$this->user->hasPermission('modify', 'extension/newsletter/module/newsletter')) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}

		if (!$json) {
			$this->load->model('setting/setting');
			$this->model_setting_setting->editSetting('module_newsletter', $this->request->post);

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}