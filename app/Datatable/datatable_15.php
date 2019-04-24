<?php return array (
  'id' => 15,
  'title' => 'Datatable完整演示',
  'id_prefix' => 'demo_',
  'pid' => 31,
  'model' => '2',
  'function_type' => '1',
  'url' => 'lazykit/demo/index',
  'method' => 'DemoController@index',
  'inheritance' => NULL,
  'inheritance_note' => NULL,
  'main_table' => 'blk_demo',
  'associated_type' => NULL,
  'associated_table' => NULL,
  'external_field' => NULL,
  'datatable_set' => 
  array (
    'id' => 
    array (
      'field_type' => 'int',
      'field_length' => '11',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => NULL,
      'field' => 'id',
      'field_from' => 'main_table',
      'width' => NULL,
      'attribute' => 
      array (
        'align' => 'left',
        'data_input_form' => 'input',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'url_type' => 'window',
        'url' => '',
        'cell_style_template' => '',
        'verify' => '',
      ),
    ),
    'the_title' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '50',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '标题',
      'field' => 'the_title',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'search' => 'on',
      'attribute' => 
      array (
        'align' => 'left',
        'data_input_form' => 'input',
        'data_source_type' => 'method',
        'data_source' => NULL,
        'validate' => 'bail,required',
        'dic_static' => NULL,
        'dic_table' => NULL,
        'dic_key' => NULL,
        'dic_value' => NULL,
        'function' => NULL,
        'sort' => 'on',
        'window_title' => 'on',
        'isurl' => 'on',
        'url_type' => 'window',
        'url' => NULL,
        'cell_style_template' => NULL,
      ),
    ),
    'text' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '250',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '文本',
      'field' => 'text',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'search' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'input',
        'validation_rules' => '',
        'can_sorted' => 'on',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_id' => '',
        'cell_style_template' => '',
      ),
    ),
    'textarea' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '250',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '文本区域',
      'field' => 'textarea',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'textarea',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_id' => '',
        'cell_style_template' => '',
      ),
    ),
    'select' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '20',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '下拉选择',
      'field' => 'select',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'search' => 'on',
      'attribute' => 
      array (
        'align' => 'left',
        'data_input_form' => 'select',
        'data_source_type' => 'method',
        'data_source' => 'App\\Http\\Controllers\\Lazykit\\DemoController->attributeSelect',
        'validate' => NULL,
        'dic_static' => NULL,
        'dic_table' => NULL,
        'dic_key' => NULL,
        'dic_value' => NULL,
        'function' => NULL,
        'url_type' => 'window',
        'url' => NULL,
        'cell_style_template' => NULL,
      ),
    ),
    'tree_select' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '20',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '树下拉选择',
      'field' => 'tree_select',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'search' => 'on',
      'attribute' => 
      array (
        'align' => 'left',
        'data_input_form' => 'tree_select',
        'data_source_type' => 'method',
        'data_source' => 'App\\Http\\Controllers\\Lazykit\\DemoController->attributeTreeSelect',
        'validate' => NULL,
        'dic_static' => NULL,
        'dic_table' => NULL,
        'dic_key' => NULL,
        'dic_value' => NULL,
        'function' => NULL,
        'url_type' => 'window',
        'url' => NULL,
        'cell_style_template' => NULL,
      ),
    ),
    'multiple_select' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '20',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '下拉多选',
      'field' => 'multiple_select',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'search' => 'on',
      'attribute' => 
      array (
        'align' => 'left',
        'data_input_form' => 'multiple_select',
        'data_source_type' => 'json',
        'data_source' => '[{
	"name": "陕西",
	"value": "1",
	"children": [{
		"name": "西安",
		"value": "2",
		"children": [{
			"name": "灞桥区",
			"value": "3"
		}, {
			"name": "长安区",
			"value": "4"
		}, {
			"name": "未央区",
			"value": "5"
		}]
	}, {
		"name": "汉中",
		"value": "6"
	}, {
		"name": "咸阳",
		"value": "7"
	}]
}, {
	"name": "甘肃",
	"value": "8",
	"children": [{
		"name": "武威",
		"value": "9",
		"children": [{
			"name": "古浪县",
			"value": "10"
		}, {
			"name": "民勤县",
			"value": "11"
		}]
	}, {
		"name": "天水",
		"value": "12"
	}, {
		"name": "庆阳",
		"value": "13"
	}]
}]',
        'dic_static' => NULL,
        'dic_table' => NULL,
        'dic_key' => NULL,
        'dic_value' => NULL,
        'function' => NULL,
        'url_type' => 'window',
        'url' => NULL,
        'cell_style_template' => NULL,
      ),
    ),
    'cascade_select' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '20',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '级联选择',
      'field' => 'cascade_select',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'search' => 'on',
      'attribute' => 
      array (
        'align' => 'left',
        'data_input_form' => 'cascade_select',
        'data_source_type' => 'method',
        'data_source' => 'App\\Http\\Controllers\\Lazykit\\DemoController->attributeTreeSelect',
        'validate' => NULL,
        'dic_static' => NULL,
        'dic_table' => NULL,
        'dic_key' => NULL,
        'dic_value' => NULL,
        'function' => NULL,
        'url_type' => 'window',
        'url' => NULL,
        'cell_style_template' => NULL,
      ),
    ),
    'editormd' => 
    array (
      'field_type' => 'text',
      'field_length' => 'no_limit',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => 'Markdown 编辑器',
      'field' => 'editormd',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'editormd',
        'dom_width' => '',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_id' => '',
        'cell_style_template' => '',
      ),
    ),
    'layui_editer' => 
    array (
      'field_type' => 'text',
      'field_length' => 'no_limit',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => 'layui 编辑器',
      'field' => 'layui_editer',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'layui_editer',
        'dom_width' => '',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_id' => '',
        'cell_style_template' => '',
      ),
    ),
    'layui_editer_simple' => 
    array (
      'field_type' => 'text',
      'field_length' => 'no_limit',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => 'layui 编辑器精简版',
      'field' => 'layui_editer_simple',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'layui_editer_simple',
        'dom_width' => '',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_id' => '',
        'cell_style_template' => '',
      ),
    ),
    'single_photo_upload' => 
    array (
      'field_type' => 'text',
      'field_length' => 'no_limit',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '单图上传',
      'field' => 'single_photo_upload',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'single_photo_upload',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_template' => '{{#  if(d.single_photo_upload){ }}
{{#  layui.each(JSON.parse(d.single_photo_upload), function(index, item){ }}
  <img height="25" src="{{ item.src }}" />
{{#  }); }}
{{#  } }}',
      ),
    ),
    'photos_upload' => 
    array (
      'field_type' => 'text',
      'field_length' => 'no_limit',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '多图上传',
      'field' => 'photos_upload',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'photos_upload',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_template' => '{{#  if(d.photos_upload){ }}
{{#  layui.each(JSON.parse(d.photos_upload), function(index, item){ }}
<img height="25" src="{{ item.src }}" />
{{#  }); }}
{{#  } }}',
      ),
    ),
    'single_file_upload' => 
    array (
      'field_type' => 'text',
      'field_length' => 'no_limit',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '单文件上传',
      'field' => 'single_file_upload',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'single_file_upload',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_template' => '{{#  if(d.single_file_upload){ }}
<ul>
{{#  layui.each(JSON.parse(d.single_file_upload), function(index, item){ }}
  <li>
     <i class="layui-icon layui-icon-file-b"></i>   
     <a href="{{ item.src }}" >{{ item.name}}</a>
  </li>
{{#  }); }}
</ul>
{{#  } }}',
      ),
    ),
    'files_upload' => 
    array (
      'field_type' => 'text',
      'field_length' => 'no_limit',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '多文件上传',
      'field' => 'files_upload',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'files_upload',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_template' => '{{#  if(d.files_upload){ }}
<ul>
{{#  layui.each(JSON.parse(d.files_upload), function(index, item){ }}
  <li>
    <i class="layui-icon layui-icon-file-b"></i>
    <a href="{{ item.src }}" >{{ item.name}}</a>
  </li>
{{#  }); }}
</ul>
{{#  } }}',
      ),
    ),
    'year' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '50',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '年选择器',
      'field' => 'year',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'year',
        'dom_width' => '',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_id' => '',
        'cell_style_template' => '',
      ),
    ),
    'year_mouth' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '50',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '年月选择器',
      'field' => 'year_mouth',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'year_mouth',
        'dom_width' => '',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_id' => '',
        'cell_style_template' => '',
      ),
    ),
    'date' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '50',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '日期选择器',
      'field' => 'date',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'date',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_id' => '',
        'cell_style_template' => '',
      ),
    ),
    'time' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '50',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '时间选择器',
      'field' => 'time',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'time',
        'dom_width' => '',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_id' => '',
        'cell_style_template' => '',
      ),
    ),
    'datetime' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '50',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '日期时间选择器',
      'field' => 'datetime',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'datetime',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_id' => '',
        'cell_style_template' => '',
      ),
    ),
    'date_scope' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '50',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '日期范围',
      'field' => 'date_scope',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'date_scope',
        'dom_width' => '',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_id' => '',
        'cell_style_template' => '',
      ),
    ),
    'year_scope' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '50',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '年范围',
      'field' => 'year_scope',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'year_scope',
        'dom_width' => '',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_id' => '',
        'cell_style_template' => '',
      ),
    ),
    'year_mouth_scope' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '50',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '年月范围',
      'field' => 'year_mouth_scope',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'year_mouth_scope',
        'dom_width' => '',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_id' => '',
        'cell_style_template' => '',
      ),
    ),
    'time_scope' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '50',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '时间范围',
      'field' => 'time_scope',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'time_scope',
        'dom_width' => '',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_id' => '',
        'cell_style_template' => '',
      ),
    ),
    'datetime_scope' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '50',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '日期时间范围',
      'field' => 'datetime_scope',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'datetime_scope',
        'dom_width' => '',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_id' => '',
        'cell_style_template' => '',
      ),
    ),
    'color_choices' => 
    array (
      'field_type' => 'varchar',
      'field_length' => '50',
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '颜色选择',
      'field' => 'color_choices',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'attribute' => 
      array (
        'data_input_form' => 'color_choices',
        'validation_rules' => '',
        'dic_type' => 'no_dic',
        'dic_static' => '',
        'dic_table' => '',
        'dic_key' => '',
        'dic_value' => '',
        'function' => '',
        'cell_style_id' => '',
        'cell_style_template' => '',
      ),
    ),
    'created_at' => 
    array (
      'field_type' => 'datetime',
      'field_length' => 'no_limit',
      'sorting' => '999',
      'fixed' => NULL,
      'title' => '创建时间',
      'field' => 'created_at',
      'field_from' => 'main_table',
      'width' => NULL,
      'read' => 'on',
      'attribute' => NULL,
    ),
    'updated_at' => 
    array (
      'field_type' => 'datetime',
      'field_length' => 'no_limit',
      'sorting' => '999',
      'fixed' => NULL,
      'title' => '修改时间',
      'field' => 'updated_at',
      'field_from' => 'main_table',
      'width' => NULL,
      'read' => 'on',
      'attribute' => NULL,
    ),
    'deleted_at' => 
    array (
      'field_type' => 'datetime',
      'field_length' => 'no_limit',
      'sorting' => '999',
      'fixed' => NULL,
      'title' => '删除时间',
      'field' => 'deleted_at',
      'field_from' => 'main_table',
      'width' => NULL,
      'read' => 'on',
      'attribute' => NULL,
    ),
  ),
  'head_menu' => 
  array (
    'search' => 
    array (
      'text' => '搜索',
      'icon' => 'layui-icon-search',
      'must' => 'on',
      'width' => '800px',
      'height' => '90%',
      'method' => NULL,
    ),
    'create' => 
    array (
      'text' => '新增',
      'icon' => 'layui-icon-add-1',
      'must' => 'on',
      'width' => '100%',
      'height' => '100%',
      'method' => NULL,
    ),
    'update' => 
    array (
      'text' => '修改',
      'icon' => 'layui-icon-edit',
      'must' => 'on',
      'width' => '100%',
      'height' => '100%',
      'method' => NULL,
    ),
    'delete' => 
    array (
      'text' => '删除',
      'icon' => 'layui-icon-delete',
      'must' => 'on',
      'width' => NULL,
      'height' => NULL,
      'method' => NULL,
    ),
    'recycle' => 
    array (
      'text' => '回收站',
      'icon' => 'layui-icon-fonts-del',
      'must' => 'on',
      'width' => '100%',
      'height' => '100%',
      'method' => NULL,
    ),
    'recovery' => 
    array (
      'text' => '数据恢复',
      'icon' => 'layui-icon-prev',
      'must' => 'on',
      'width' => NULL,
      'height' => NULL,
      'method' => NULL,
    ),
  ),
  'other_set' => 
  array (
    'limit' => '20',
    'cell_min_width' => '160',
    'line_button_area_width' => '160',
  ),
  'route' => 
  array (
    'route_path' => 'lazykit/demo/',
    'route_name' => 'index',
    'controller' => 'App\\Http\\Controllers\\Lazykit\\DemoController',
    'method' => 'index',
  ),
  'new_head_menu' => NULL,
  'line_button' => NULL,
);?>