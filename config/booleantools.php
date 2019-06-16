<?php

return [

    /*
	|--------------------------------------------------------------------------
	| 附件前端输出的域名
	|--------------------------------------------------------------------------
	| 用于生成访问上传文件的绝对路径，当运行环境配置文件中没有设置“BT_FILE_URL”的值
	| 时，取“APP_URL”的值
	*/
    
	'filedomain' => env('BT_FILE_URL', env('APP_URL', '')),
	
	/*
	|--------------------------------------------------------------------------
	| 允许的文件类型
	|--------------------------------------------------------------------------
	| 文件类型分为依次分为“图片、压缩包、常用文档、视频、音频”等五种类型，分为二维数
	| 组便于阅读与编辑，文件类型不区分大小写
	*/
    
	'ext' => [
		['jpg', 'jpeg', 'png', 'gif'],
		['zip', '7z', 'rar'],
		['pdf', 'txt', 'doc', 'ppt', 'xls', 'docx', 'pptx', 'xlsx'],
		['flv', 'mp4', 'mvb', 'rmvb', 'avi', 'rm', 'dat', 'asf', 'wmv', 'mid', 'mpg', 'mpeg'],
		['wma', 'mp3']
	],
	
	//
];