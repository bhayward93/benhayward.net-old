<?php
defined('BASEPATH');// OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// If you have post data...
///*		if (!empty($_POST)) {
//			$title = $this->input->post('title');
//			$author = $this->input->post('author');
//			$image = $this->input->post('image');
//			$content = $this->input->post('content');
//			// Checking if everything is there
//			if ($title && $author && $image && $content) {
//				// Loading model
//				$this->load->model('BlogController');
//				$data = array(
//					'title' => $title,
//					'author' => $author,
//					'image' => $image,
//					'content' => $content //update nammes
//				);
//
//				// Calling model
//				$id = $this->BlogController->insert($data);
//
//				// You can do something else here
//			}
//		}*/
		// Loading view
		$this->load->view('../views/index.html');
	}
}
