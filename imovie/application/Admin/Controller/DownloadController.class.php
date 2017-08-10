<?php 
namespace Admin\Controller;
use Think\Controller;

class DownloadController extends Controller{
	function downloadAdd(){
		if(IS_POST){
			$download_model = D('Download');
			$form_data = $download_model ->create();
			//dump($form_data);
			if(empty($form_data)){
				echo $download_model->getError();
			}else{
				if($download_model -> add($form_data)){
					$this->success('添加链接成功',U('downloadList'),3);
				}else{
					$this->error('添加链接失败',U('downloadAdd'),3);
				}
			}
		}else{
			$this-> display();
		}	
	}

	function downloadList(){
		$download_model = D('Download');
		$download_list = $download_model -> select();
		$this->assign('download_list',$download_list);
		$this-> display();
	}

	function downloadDel(){
		$download_model = D('Download');
		$download_id = I('get.download_id');
		$del_result = $download_model -> where("download_id=$download_id")->delete();
		if($del_result){
			$this->success('删除成功',U('downloadList'),3);
		}else{
			$this->error('删除失败',U('downloadAdd'),3);
		}
	}

	function downloadEdit(){
		$download_model = D('Download');
		$download_id = I('get.download_id');
		//dump($download_id);
		$form_data = $download_model -> where("download_id='$download_id'")->find();
		//dump($form_data);
		$this->assign('form_data',$form_data);
		$this->display();
	}

	function downloadModify(){
		$download_model = D('Download');
		// $download_id = I('post.download_id');
		$form_data = $download_model -> create();
		//dump(I('post.'));
		//dump($form_data);die;
		$result = $download_model -> save($form_data);
		if($result){
			$this -> success('修改成功',U('downloadList'),3);
		}else{
			$this -> error('修改失败',U('downloadEdit'),3);
		}
	}
}



 ?>