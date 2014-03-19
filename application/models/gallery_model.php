<?php
class Gallery_model extends Model {
	
	function Gallery_model() {
		parent::Model();
		
	}
	
	function do_upload() {


		
	}
	
	function get_images() {
		
		$files = scandir($this->gallery_path);
		$files = array_diff($files, array('.', '..', 'thumbs'));
		
		$images = array();
		
		foreach ($files as $file) {
			$images []= array (
				'url' => $this->gallery_path_url . $file,
				'thumb_url' => $this->gallery_path_url . 'thumbs/' . $file
			);
		}
		
		return $images;
	}
	
}



