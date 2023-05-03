<?php
class ControllerExtensionModuleTemplateSwitcher extends Controller {

	protected $template_engines = array();

	public function __construct($registry) {
		// Call parent constructor
		parent::__construct($registry);

		if (!$this->config->get('module_template_switcher_status')) {
			return;
		}
		
		// Find all available template engines
		$template_engines = array();
		$files = glob(DIR_SYSTEM . 'library/template/*.php');
		if ($files) {
			foreach ($files as $file) {
				if (is_file($file)) {
					$template_engine = basename($file,'.php');
					$template_engines[] = $template_engine;
				}
			}
		}
		$this->template_engines = $template_engines;
	}


	// event handler for catalog/view/*/before 
	public function render(&$route, &$data, &$template) {
		if (!$this->config->get('module_template_switcher_status')) {
			return null;
		}

		// If there is a template buffer from previous view/*/before events then we render
		if ($template) {

			if ($this->factory) {
				// Override Engine installed, which will do the rendering later
				return null;
			}

			$template_engine = $this->config->get('template_engine');

			if ($template_engine == 'twig') {

				// TWIG rendering from the template buffer
				if (version_compare(VERSION,'3.0.3.5','<')) {
				
					// include and register Twig auto-loader
					include_once(DIR_SYSTEM . 'library/template/Twig/Autoloader.php');
					
					Twig_Autoloader::register();
							
					// specify where to look for templates
					$loader = new \Twig_Loader_Filesystem(DIR_TEMPLATE);		
					
					$config = array('autoescape' => false);
					
					if ($this->config->get('template_cache')) {
						$config['cache'] = DIR_CACHE;
					}
					
					// initialize Twig environment
					$twig = new \Twig_Environment($loader, $config);
					return $twig->createTemplate($template)->render($data);

				} else {
					// let OpenCart do the TWIG rendering from the template buffer later on
					return null;
				}

			} else if ($template_engine=='template') {

				// PHP rendering from template buffer
				extract($data);
				ob_start();
				if (in_array('data', stream_get_wrappers()) && ini_get('allow_url_include')) {
					require("data://text/plain,".urlencode($template));
				} else {
					$file = tempnam(DIR_CACHE,'');
					$handle = fopen($file, "w");
					fwrite($handle, $template);
					fseek($handle,0);
					require($file);
					fclose($handle);
				}
				return ob_get_clean();

			} else {

				// render using the normal OpenCart rendering for other template engines
				$template_object = new Template($this->registry->get('config')->get('template_engine'));
				foreach ($data as $key => $value) {
					$template_object->set($key, $value);
				}
				return $template_object->render($this->registry->get('config')->get('template_directory') . $route, $template);		
			}
		}

		return null;
	}


	// event handler for catalog/view/*/before 
	public function override(&$route, &$data, &$template) {
		if (!$this->config->get('module_template_switcher_status')) {
			return null;
		}

		if (!$this->config->get('theme_' . $this->config->get('config_theme') . '_status')) {
			exit('Error: A theme has not been assigned to this store!');
		}

		// If the default theme is selected we need to know which directory its pointing to			
		if ($this->config->get('config_theme') == 'default') {
			$theme = $this->config->get('theme_default_directory');
		} else {
			$theme = $this->config->get('config_theme');
		}
			
		// If there is a theme override we should get it
		$this->load->model('design/theme');
		$theme_info = $this->model_design_theme->getTheme($route, $theme);
		if ($theme_info) {
			$this->config->set( 'template_engine', 'twig' );
			$template = html_entity_decode($theme_info['code'], ENT_QUOTES, 'UTF-8');
			return null;
		}

		// Find the correct template_engine and template_directory for a later rendering
		if ($this->config->get('config_theme') == 'default') {
			$theme = $this->config->get('theme_default_directory');
		} else {
			$theme = $this->config->get('config_theme');
		}
		foreach ($this->template_engines as $template_engine) {
			$ext = ($template_engine == 'template') ? '.tpl' : '.'.$template_engine;
			if (is_file(DIR_TEMPLATE.$theme.'/template/'.$route.$ext)) {
				$this->config->set( 'template_engine', $template_engine );
				$this->config->set( 'template_directory', $theme.'/template/' );
				return null;
			} 
		}
		foreach ($this->template_engines as $template_engine) {
			$ext = ($template_engine == 'template') ? '.tpl' : '.'.$template_engine;
			if (is_file(DIR_TEMPLATE.'default/template/'.$route.$ext)) {
				$this->config->set( 'template_engine', 'twig' );
				$this->config->set( 'template_directory', 'default/template/' );
				return null;
			}
		}
		trigger_error("Cannot find template file for route '$route'");
		exit;
	}


	// event handler for catalog/contoller/*/before 
	public function before( &$route, &$data ) {
		if (!$this->config->get('module_template_switcher_status')) {
			return null;
		}

		// Unregister some standard view/*/before events, we use our own template events from this class
		$this->event->unregister( 'view/*/before', 'event/theme' );
		$this->event->unregister( 'view/*/before', 'event/theme/override' );
		return null;
	}
}
?>
