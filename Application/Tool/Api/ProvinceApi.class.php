<?php
// .-----------------------------------------------------------------------------------
// | WE TRY THE BEST WAY
// |-----------------------------------------------------------------------------------
// | Author: 贝贝 <hebiduhebi@163.com>
// | Copyright (c) 2013-2015, http://www.gooraye.net. All Rights Reserved.
// |-----------------------------------------------------------------------------------

namespace Tool\Api;
use Common\Api\Api;
use Tool\Model\ProvinceModel;


class ProvinceApi extends Api{
	
	protected function _init(){
		$this->model = new ProvinceModel();
	}
}
