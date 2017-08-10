<?php 
namespace Admin\Model;
use Think\Model;

class DownloadModel extends Model{
	protected $pk = 'download_id';
	protected $fields = array(
		'download_ctime','download_moviename','download_link','download_id'
	);
	protected $_auto = array(
		array('download_ctime','time',1,'function')
	);
}


 ?>