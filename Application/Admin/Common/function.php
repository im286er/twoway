<?php
// +----------------------------------------------------------------------
// admin自定义函数
// +----------------------------------------------------------------------

//数字状态转文本状态
function ini_state($state){
    if($state>0){
		return "正常";
	}else{
		return "待审核";
	}
}