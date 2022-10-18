<?php
class ControllerExtensionModuleNewsletter extends Controller {
	private $error = array();
	public function install() {
		$this->db->query("CREATE TABLE IF NOT EXISTS `oc_newsletter` (
			`newsletter_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
			`email` varchar(99) NOT NULL,
			`date_added` datetime NOT NULL
			)");
	}

	public function index() {
		
		$this->install();
		$this->load->language('extension/module/newsletter');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_newsletter', $this->request->post);
			$this->model_setting_setting->editSetting('module_newsletter_text', $this->request->post);
			$this->model_setting_setting->editSetting('module_newsletter_text_color', $this->request->post);
			$this->model_setting_setting->editSetting('module_newsletter_button_color', $this->request->post);
			$this->model_setting_setting->editSetting('module_newsletter_image', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/newsletter', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/newsletter', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_newsletter_status'])) {
			$data['module_newsletter_status'] = $this->request->post['module_newsletter_status'];
		} else {
			$data['module_newsletter_status'] = $this->config->get('module_newsletter_status');
		}

		if (isset($this->request->post['module_newsletter_text'])) {
			$data['module_newsletter_text'] = $this->request->post['module_newsletter_text'];
		} else {
			$data['module_newsletter_text'] = $this->config->get('module_newsletter_text');
		}

		if (isset($this->request->post['module_newsletter_text_color'])) {
			$data['module_newsletter_text_color'] = $this->request->post['module_newsletter_text_color'];
		} else {
			$data['module_newsletter_text_color'] = $this->config->get('module_newsletter_text_color');
		}

		if (isset($this->request->post['module_newsletter_button_color'])) {
			$data['module_newsletter_button_color'] = $this->request->post['module_newsletter_button_color'];
		} else {
			$data['module_newsletter_button_color'] = $this->config->get('module_newsletter_button_color');
		}

		if (isset($this->request->post['module_newsletter_image'])) {
			$data['module_newsletter_image'] = $this->request->post['module_newsletter_image'];
		} else {
			$data['module_newsletter_image'] = $this->config->get('module_newsletter_image');
		}

		$this->load->model('tool/image');
		
		if (isset($this->request->post['module_newsletter_image']) && is_file(DIR_IMAGE . $this->request->post['module_newsletter_image'])) {
			$data['newsletter_image'] = $this->model_tool_image->resize($this->request->post['module_newsletter_image'], 100, 100);
		} elseif (!empty($this->config->get('module_newsletter_image')) && is_file(DIR_IMAGE . $this->config->get('module_newsletter_image'))) {
			$data['newsletter_image'] = $this->model_tool_image->resize($this->config->get('module_newsletter_image'), 100, 100);
		} else {
			$data['newsletter_image'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		// get newsletter button
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

		$this->response->setOutput($this->load->view('extension/module/newsletter', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/newsletter')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}