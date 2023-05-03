<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$canonical = $this->url->link('common/home');
			if ($this->config->get('config_seo_pro') && !$this->config->get('config_seopro_addslash')) {
				$canonical = rtrim($canonical, '/');
			}
			$this->document->addLink($canonical, 'canonical');
		}
		$this->load->model('design/banner');
		$this->load->model('tool/image');
		$data['banners'] = array();

		$results = $this->model_design_banner->getBanner(9);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => '/image/'.$result['image']
				);
			}
		}	

		$data['partners'] = array();

		$results = $this->model_design_banner->getBanner(10);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['partners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => '/image/'.$result['image']
				);
			}
		}	
		$this->load->model('blog/category');

		$this->load->model('blog/article');

			$data['quest'] = array();

			$article_data = array(
				'filter_blog_category_id' => 72,
				'sort'               => 'p.date_added',
				'order'              => 'DESC',
				'start'              => 0,
				'limit'              => 4
			);
			
			

			$results = $this->model_blog_article->getArticles($article_data);
			
			

			foreach ($results as $result) {

				$data['quest'][] = array(
					'article_id'  => $result['article_id'],
					'name'        => $result['name'],
					'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('configblog_article_description_length')) . '..',
					'date_added'  => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
					'viewed'      => $result['viewed'],
					'rating'      => $result['rating'],
					'href'        => $this->url->link('blog/article', 'blog_category_id=72&article_id=' . $result['article_id'])
				);
			}
		
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}