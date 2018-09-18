<?php if (!defined('THINK_PATH')) exit();?><form class="form-horizontal" action="<?php echo U('index/widget_add');?>" method="post" >
	<div class="control-group">
		<label class="control-label"><?php echo L('COMPONENT_NAME');?></label>
		<div class="controls">
			<input type="text" id="title" name="title"/>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">选择组件</label>
		<div class="controls">
			<select name="widget" id="widget">
				<?php if(is_array($widget_module)): $i = 0; $__LIST__ = $widget_module;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option mod="<?php echo ($vo["module"]); ?>" act="<?php echo ($vo["action"]); ?>" value="<?php echo ($vo["tag"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">数据来源</label>
		<div class="controls">
			<select name="level" id="level" disabled>
				<option selected="selected" value="1">自己和下属</option>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label"></label>
		<div class="controls">
			<input name="submit" class="btn btn-primary" type="submit" value="<?php echo L('SAVE');?>"/> &nbsp;
			<input name="submit" class="btn" type="button" onclick="javascript:$('#dialog-message').dialog('close');" value="<?php echo L('CANCEL');?>"/>
		</div>
	</div>
</form>
<script type="text/javascript">
	/**
	 * 页面加载时根据操作人权限去除部分无需设置权限的数据来源
	 **/
	$(document).ready(function(){
		var widget = $('#widget').val();
		if(widget == 'Notepad'){
			$('#level option:first').html('自己');
		}else{
			$('#level option:first').html('自己和下属');
		}
	});
	
	/**
	 * level值改变时根据操作人权限去除部分无需设置权限的数据来源
	 **/
	$('#widget').change(function(){
		var widget = $('#widget').val();
		if(widget == 'Notepad'){
			$('#level option:first').html('自己');
		}else{
			$('#level option:first').html('自己和下属');
		}
	});
</script>