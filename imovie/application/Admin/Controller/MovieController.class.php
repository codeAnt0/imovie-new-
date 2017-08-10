<?php 
namespace Admin\Controller;
use Think\Controller;

class MovieController extends Controller{
	function movieList(){
		$movie_model = D('Movie');
		$form_data = $movie_model -> select();
		// dump($form_data);
		$this->assign('form_data',$form_data);
		$this->display();
	}

	function movieAdd(){
		if(IS_POST){
			$movie_model = D('Movie');
			$form_info = I('post.');
			//dump($form_info);die;
			$result = $movie_model -> add($form_info);
			if($result){
				$this->success('成功');
			}
		}else{
			$this->display();
		}	
	}

	function movieDel(){
		$movie_model = D('Movie');
		$movie_id = I('get.movie_id');
		//dump($movie_id);
		$result = $movie_model -> where("movie_id=$movie_id")->delete();
		if($result){
			$this->success('删除成功',U('movieList'),3);
		}else{
			$this->error('删除失败',U('movieList'),3);
		}
	}
}


 ?>