@extends('layouts.base')

@section('title', 'Databale配置生成')

@push('css')
<link rel="stylesheet" href="{{file_path('/include/booleanTools/style/formSelects-v4.css')}}" media="all">
<style>
	.create td{padding: 0;}
	.create td input{border: 0;}
	.create .switch_area{padding-bottom:8px; text-align: center;}
	#textarea {
		display: block;
		margin:0 auto;
		overflow: hidden;
		width: 550px;
		font-size: 14px;
		height: 18px;
		line-height: 24px;
		padding:2px;
	}
	@if (isset($attribute_arr['data_input_form']))
	@if (in_array($attribute_arr['data_input_form'], ['select', 'multiple_select', 'cascade_select', 'tree_select']))
	.data_source{display:block;}
	@else
	.data_source{display:none;}
	@endif
	@else
	.data_source{display:none;}
	@endif
</style>
@endpush

@section('content')
<div class="layui-fluid">
	<div class="layui-row layui-col-space15">
		<div class="layui-col-md12">
			<form id="iframeForm" class="layui-form" action="" method="post">
				@csrf
				<div class="layui-form-item">
					<label class="layui-form-label">输入方式</label>
					<div class="layui-input-inline">
						<select name="data_input_form" lay-filter="data_input_form" lay-verify="required">
							<option value="input">默认（单行文本框）</option>
							@foreach ($data_input_form_dic_arr as $key=>$vo)
							<optgroup label="{{$key}}">
								@foreach ($vo as $k=>$ko)
								<option @if (isset($attribute_arr['data_input_form'])) @if ($attribute_arr['data_input_form'] == $k) selected="selected" @endif  @endif value="{{$k}}" data-width="{{$ko[1]}}">{{$ko[0]}}</option>
								@endforeach
							</optgroup>
							@endforeach
						</select>
					</div>
					<label class="layui-form-label data_source">数据源类型</label>
					<div class="layui-input-inline data_source">
						<select name="data_source_type" lay-filter="" lay-verify="required">
							@foreach ($data_source_dic_arr as $k=>$vo)
							<option @if (isset($attribute_arr['data_source_type'])) @if ($attribute_arr['data_source_type'] == $k) selected="selected" @endif  @endif value="{{$k}}">{{$vo}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="layui-form-item layui-form-text data_source">
					<label class="layui-form-label"></label>
					<div class="layui-input-block">
						<textarea id="data_source" name="data_source" placeholder="请输入数据源" class="layui-textarea">{{isset($attribute_arr['data_source'])?$attribute_arr['data_source']:''}}</textarea>
					</div>
				</div>
				<div class="layui-form-item layui-form-text">
					<label class="layui-form-label">验证规则</label>
					<div class="layui-input-block">
						<select name="validate" lay-filter="" xm-select-skin="normal" xm-select="validate">
							<option value="">请选择</option>
						</select>
					</div>
				</div>
				<div class="layui-form-item layui-form-text">
					<label class="layui-form-label"></label>
					<div class="layui-input-block">
						<button class="layui-btn" lay-submit="" lay-filter="submit">立即提交</button>
						<button type="reset" class="layui-btn layui-btn-primary">重置</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@push('scripts')
<script>
	layui.config({
		base: '{{file_path('/include/booleanTools/lib/')}}',
	}).extend({
		index: 'index',
		formSelects: 'modules/formSelects-v4'
	}).use(['jquery', 'form', 'element', 'formSelects'], function() {
		var $ = layui.$,
			form = layui.form,
			layer = layui.layer,
			layedit = layui.layedit,
			formSelects = layui.formSelects,
			laydate = layui.laydate;

		form.on('select(data_input_form)', function(data){
			//alert(data.attr('data-width'));
			var width = $("[name='data_input_form']").find("option:selected").attr("data-width");
			//alert(width);
			$("[name='dom_width']").val(width);
		});
		
		formSelects.data('validate', 'local', {
			arr: @json($validate_dic_arr)
		});
		formSelects.value('validate', {!!$attribute_arr['validate']!!});
		
		form.on('select(data_input_form)', function(data){
			//alert(data.value);
			if(data.value == 'select'||data.value == 'tree_select'||data.value == 'cascade_select'||data.value == 'multiple_select'){
				$(".data_source").show();
			}else{
				$(".data_source").hide();
			}
		});
		
		//监听提交
		form.on('submit(submit)', function(data){
			return true;
		});
	});
	
	/**
	* 文本框根据输入内容自适应高度
	* @param                {HTMLElement}        输入框元素
	* @param                {Number}                设置光标与输入框保持的距离(默认0)
	* @param                {Number}                设置最大高度(可选)
	*/
	var autoTextarea = function (elem, extra, maxHeight) {
        extra = extra || 15;
        var isFirefox = !!document.getBoxObjectFor || 'mozInnerScreenX' in window,
        isOpera = !!window.opera && !!window.opera.toString().indexOf('Opera'),
                addEvent = function (type, callback) {
                        elem.addEventListener ?
                                elem.addEventListener(type, callback, false) :
                                elem.attachEvent('on' + type, callback);
                },
                getStyle = elem.currentStyle ? function (name) {
                        var val = elem.currentStyle[name];
 
                        if (name === 'height' && val.search(/px/i) !== 1) {
                                var rect = elem.getBoundingClientRect();
                                return rect.bottom - rect.top -
                                        parseFloat(getStyle('paddingTop')) -
                                        parseFloat(getStyle('paddingBottom')) + 'px';        
                        };
 
                        return val;
                } : function (name) {
                                return getComputedStyle(elem, null)[name];
                },
                minHeight = parseFloat(getStyle('height'));
 
        elem.style.resize = 'none';
 
        var change = function () {
                var scrollTop, height,
                        padding = 0,
                        style = elem.style;
 
                if (elem._length === elem.value.length) return;
                elem._length = elem.value.length;
 
                if (!isFirefox && !isOpera) {
                        padding = parseInt(getStyle('paddingTop')) + parseInt(getStyle('paddingBottom'));
                };
                scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
 
                elem.style.height = minHeight + 'px';
                if (elem.scrollHeight > minHeight) {
                        if (maxHeight && elem.scrollHeight > maxHeight) {
                                height = maxHeight - padding;
                                style.overflowY = 'auto';
                        } else {
                                height = elem.scrollHeight - padding;
                                style.overflowY = 'hidden';
                        };
                        style.height = height + extra + 'px';
                        scrollTop += parseInt(style.height) - elem.currHeight;
                        document.body.scrollTop = scrollTop;
                        document.documentElement.scrollTop = scrollTop;
                        elem.currHeight = parseInt(style.height);
                };
        };
 
        addEvent('propertychange', change);
        addEvent('input', change);
        addEvent('focus', change);
        change();
	};
	//textarea高度自适应
	autoTextarea(document.getElementById("cell_style_template"));
	autoTextarea(document.getElementById("data_source"));
</script>
@endpush