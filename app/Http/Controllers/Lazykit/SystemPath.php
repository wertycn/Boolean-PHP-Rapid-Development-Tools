<?php
/**
 * 功能名称：获取路径
 * @auther 		boolean Lazykit
 */

namespace App\Http\Controllers\Lazykit;

//use App\Repositories\BlkSystemRepository;

trait SystemPath
{
    /**
     * 获得各类路径及模板
     *
	 * @author    	倒车的螃蟹<yh15229262120@qq.com> 
	 * @access 		private
     * @param  		App\Repositories\BlkSystemRepository $system
     * @return 		array                       
     */
    private function getPath($system){
		//dd($menu_data);routes
		$path = [
			'laravel' => [
				'blk_config' => $system->file_path.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'Blk'.DIRECTORY_SEPARATOR,
				'repository' => $system->file_path.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'Repositories'.DIRECTORY_SEPARATOR,
				'repository_tpl' => $this->getRepositoryTpl('laravel'),
				'request' => $system->file_path.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'Http'.DIRECTORY_SEPARATOR.'Requests'.DIRECTORY_SEPARATOR,
				'route' => $system->file_path.DIRECTORY_SEPARATOR.'routes'.DIRECTORY_SEPARATOR.'web'.DIRECTORY_SEPARATOR,
				'controller' => $system->file_path.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'Http'.DIRECTORY_SEPARATOR.'Controllers'.DIRECTORY_SEPARATOR,
				'controller_datatable_tpl' => $this->getDatatableControllerTpl('laravel'),
				'controller_chart_tpl' => $this->getChartControllerTpl('laravel'),
			]
		];
		
		return $path[$system->framework];
	}
	
	/**
	 * 获得不同框架对应的Controller模板
	 *
	 * @author    	倒车的螃蟹<yh15229262120@qq.com> 
	 * @access 		private
	 * @param  		string 		$framework	 	框架名称
	 * @return 		string                       
	 */
	private function getChartControllerTpl($framework){
		$tpl['laravel'] = '<?php
/**
 | 统计图表：{menu_title} 
 | 该控制器类由 Boolean Lazyer Kit 页面设计器自动生成
 |
 | @auther 		BLK
 | @datetime 	'.date('Y-m-d H:i:s', time()).'
 */

namespace App\Http\Controllers\{module};

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class {NewController} extends Controller
{
    /**
     * {menu_title}
     *
     * @author    	倒车的螃蟹<yh15229262120@qq.com> 
     * @access 		public
     * @param  		\Illuminate\Http\Request $request
     * @return  	mixed
     */
    public function {method}(Request $request)
    {
    	//读取配置统计图表模板
		$chart_config = chart_strat(\'chart_{id}\');
		//
		
		create_chart(\'chart_{id}\', $chart_config, $request);
    }
}';
		return $tpl[$framework];
	}
	
	/**
	 * 获得不同框架对应的Controller模板
	 *
	 * @author    	倒车的螃蟹<yh15229262120@qq.com> 
	 * @access 		private
	 * @param  		string 		$framework	 	框架名称
	 * @return 		string                       
	 */
	private function getDatatableControllerTpl($framework){
		$tpl['laravel'] = '<?php
/**
 | 数据表格：{menu_title} 
 | 该控制器类由 Boolean Lazyer Kit 页面设计器自动生成
 |
 | @auther 		BLK
 | @datetime 	'.date('Y-m-d H:i:s', time()).'
 */

namespace App\Http\Controllers\{module};

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class {NewController} extends Controller
{
    /**
     * {menu_title}
     *
     * @author    	倒车的螃蟹<yh15229262120@qq.com> 
     * @access 		public
     * @param  		\Illuminate\Http\Request $request
     * @return  	mixed
     */
    public function {method}(Request $request)
    {
    	//数据表格附加配置
		$additional_config = [
			//
		];
		
		create_datatable(\'datatable_{id}\', $additional_config, $request);
    }
}';
		return $tpl[$framework];
	}
	
	/**
	 * 获得不同框架对应的数据模型模板
	 *
	 * @author    	倒车的螃蟹<yh15229262120@qq.com> 
	 * @access 		private
	 * @param  		string 		$framework	 	框架名称
	 * @return 		string                       
	 */
	private function getRepositoryTpl($framework){
		$tpl['laravel'] = '<?php
/**
 | 数据表：{table_name}
 | 该控制器类由 Boolean Lazyer Kit 页面设计器自动生成
 |
 | @auther 		BLK
 | @datetime 	'.date('Y-m-d H:i:s', time()).'
 */

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class {New}Repository extends Model 
{
	//软删除Trait
	use SoftDeletes;
	//表名称
	protected $table = \'{table_name}\';
	//主键
	protected $primaryKey = \'id\';
	
	protected $datas = [\'deleted_at\'];
}';
		return $tpl[$framework];
	}	
}
