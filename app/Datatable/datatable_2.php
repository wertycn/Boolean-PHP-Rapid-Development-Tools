<?php return array (
  'id' => 2,
  'title' => '用户表',
  'pid' => 30,
  'model' => 'datatable',
  'url' => '/lazykit/user/index',
  'method' => 'UserController@index',
  'module_id' => '1',
  'main_table' => 'tools_user',
  'associated_type' => '',
  'associated_table' => '',
  'external_field' => '',
  'datatable_set' => 
  array (
    'password' => 
    array (
      'sorting' => NULL,
      'fixed' => NULL,
      'title' => '管理后台密码',
      'field' => 'password',
      'field_from' => 'main_table',
      'width' => NULL,
    ),
    'id' => 
    array (
      'sorting' => '1',
      'fixed' => NULL,
      'title' => '主键',
      'field' => 'id',
      'field_from' => 'main_table',
      'width' => NULL,
    ),
    'username' => 
    array (
      'sorting' => '2',
      'fixed' => NULL,
      'title' => '管理后台账号',
      'field' => 'username',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'search' => 'on',
    ),
    'realname' => 
    array (
      'sorting' => '3',
      'fixed' => NULL,
      'title' => '真实姓名',
      'field' => 'realname',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'search' => 'on',
    ),
    'structure_id' => 
    array (
      'sorting' => '4',
      'fixed' => NULL,
      'title' => '部门',
      'field' => 'structure_id',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'search' => 'on',
    ),
    'post_id' => 
    array (
      'sorting' => '5',
      'fixed' => NULL,
      'title' => '岗位',
      'field' => 'post_id',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'search' => 'on',
    ),
    'phone_number' => 
    array (
      'sorting' => '6',
      'fixed' => NULL,
      'title' => '手机号码',
      'field' => 'phone_number',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'search' => 'on',
    ),
    'email' => 
    array (
      'sorting' => '7',
      'fixed' => NULL,
      'title' => '邮箱',
      'field' => 'email',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
      'search' => 'on',
    ),
    'status' => 
    array (
      'sorting' => '8',
      'fixed' => NULL,
      'title' => '状态,1启用0禁用',
      'field' => 'status',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
    ),
    'remark' => 
    array (
      'sorting' => '9',
      'fixed' => NULL,
      'title' => '用户备注',
      'field' => 'remark',
      'field_from' => 'main_table',
      'width' => NULL,
      'create' => 'on',
      'update' => 'on',
      'read' => 'on',
    ),
    'login_time' => 
    array (
      'sorting' => '10',
      'fixed' => NULL,
      'title' => '登录时间',
      'field' => 'login_time',
      'field_from' => 'main_table',
      'width' => NULL,
      'read' => 'on',
    ),
    'created_at' => 
    array (
      'sorting' => '999',
      'fixed' => NULL,
      'title' => '创建时间',
      'field' => 'created_at',
      'field_from' => 'main_table',
      'width' => NULL,
      'read' => 'on',
    ),
    'updated_at' => 
    array (
      'sorting' => '999',
      'fixed' => NULL,
      'title' => '修改时间',
      'field' => 'updated_at',
      'field_from' => 'main_table',
      'width' => NULL,
      'read' => 'on',
    ),
    'deleted_at' => 
    array (
      'sorting' => '999',
      'fixed' => NULL,
      'title' => '删除时间',
      'field' => 'deleted_at',
      'field_from' => 'main_table',
      'width' => NULL,
      'read' => 'on',
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
      'route' => NULL,
    ),
    'create' => 
    array (
      'text' => '新增',
      'icon' => 'layui-icon-add-1',
      'must' => 'on',
      'width' => '100%',
      'height' => '100%',
      'route' => NULL,
    ),
    'update' => 
    array (
      'text' => '修改',
      'icon' => 'layui-icon-edit',
      'must' => 'on',
      'width' => '100%',
      'height' => '100%',
      'route' => NULL,
    ),
    'delete' => 
    array (
      'text' => '删除',
      'icon' => 'layui-icon-delete',
      'must' => 'on',
      'width' => NULL,
      'height' => NULL,
      'route' => NULL,
    ),
    'recycle' => 
    array (
      'text' => '回收站',
      'icon' => 'layui-icon-delete',
      'must' => 'on',
      'width' => '100%',
      'height' => '100%',
      'route' => NULL,
    ),
    'recovery' => 
    array (
      'text' => '数据恢复',
      'icon' => 'layui-icon-delete',
      'must' => 'on',
      'width' => NULL,
      'height' => NULL,
      'route' => NULL,
    ),
  ),
  'other_set' => 
  array (
    'limit' => '20',
    'cell_min_width' => '160',
  ),
  'new_head_menu' => NULL,
  'line_button' => NULL,
);?>