<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title><?php echo C('defaultinfo.name');?> - Powered By <?php echo L('AUTHOR');?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content=""/>
	<meta name="author" content="<?php echo L('AUTHOR');?>"/>
	<link type="text/css" href="__PUBLIC__/css/bootstrap.min.css?t=20140830" rel="stylesheet" />
	<link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css?t=20140830" rel="stylesheet">
	<link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css?t=20140830" rel="stylesheet" />
	<link type="text/css" href="__PUBLIC__/css/font-awesome.min.css?t=20140830" rel="stylesheet" />
	<link class="docs" href="__PUBLIC__/css/docs.css?t=20140830" rel="stylesheet"/>
	<link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/>
    <script type="text/javascript">
        var browserInfo = {browser:"", version: ""};
        var ua = navigator.userAgent.toLowerCase();
        if (window.ActiveXObject) {
            browserInfo.browser = "IE";
            browserInfo.version = ua.match(/msie ([\d.]+)/)[1];
            if(browserInfo.version <= 7){
                if(confirm("您的ie浏览器版本过低，建议使用chorme浏览器")){}
            }
        }
    </script>
	<!--[if lt IE 9]>
	<script src="__PUBLIC__/js/respond.min.js" type="text/javascript"></script>
	<![endif]-->
	<script src="__PUBLIC__/js/jquery-1.9.0.min.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/bootstrap.min.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/WdatePicker.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/gototop.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/5kcrm_zh-cn.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/5kcrm.js?t=20140830" type="text/javascript"></script>
	<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css">
	<![endif]-->
	<!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css">
	<![endif]-->
	<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" />
	<![endif]-->
	<!--[if lt IE 9]>
	<link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/>
	<script src="__PUBLIC__/js/ie8-eventlistener.js" type="text/javascript"></script>
	<![endif]-->	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true">
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div>
			<a class="brand" href="<?php echo U('dynamic/index');?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a>
			<?php echo W("Navigation");?>
		</div> 
	</div>
</div>
<script type="text/javascript" src="__PUBLIC__/js/kindeditor-all-min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/zh_CN.js"></script>
<script src="__PUBLIC__/js/PCASClass.js" type="text/javascript"></script>
<script type="text/javascript" src="__PUBLIC__/js/formValidator-4.0.1.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="__PUBLIC__/js/formValidatorRegex.js" charset="UTF-8"></script>
<link rel="stylesheet" href="__PUBLIC__/css/kindeditor.css" type="text/css" />
<link rel="stylesheet" href="__PUBLIC__/css/jquery.fileupload.css" type="text/css" />
<div class="container">
	<!-- Docs nav ================================================== -->
	<div class="page-header">
			<h4><?php echo L('PRODUCTION_EDITOR');?></h4>
		</div>
	<div class="row">
		<div class="span12">
			<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
		</div>
		<div class="span12">
			<form id="form1" action="<?php echo U('product/edit', 'id='.$product['product_id']);?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="product_id" value="<?php echo ($product["product_id"]); ?>"/>
			<table class="table" width="95%" border="0" cellspacing="1" cellpadding="0">
				<tfoot>
					<tr>
						<td style="text-align:center;" colspan="4"><input name="submit" class="btn btn-primary" type="submit" value="<?php echo L('SAVE');?>"/>&nbsp; 
						<input class="btn" type="button" onclick="javascript:history.go(-1)" value="<?php echo L('RETURN');?>"/></td>
					</tr>
				</tfoot>
				<tbody>
					<tr><th colspan="4"><?php echo L('BASIC_INFORMATION');?></th></tr>
						<?php $j=0; ?>
						<?php if(is_array($field_list['main'])): $i = 0; $__LIST__ = $field_list['main'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $j++; ?>
                        <?php if($vo['form_type'] == 'textarea' or $vo['form_type'] == 'editor' or $vo['form_type'] == 'address'): if($i%2 == 0): ?><td colspan="2">&nbsp;</td>
                            </tr><?php endif; ?>
                            <tr>
                                <td class="tdleft" width="15%"><?php echo ($vo["name"]); ?>:</td>
                                <td colspan="3"><?php echo ($vo["html"]); ?></td>
                            </tr>
                            <?php if($i%2 != 0 && count($field_list['main']) != $j): $i++; endif; ?>
                        <?php else: ?>
                            <?php if($i%2 != 0): ?><tr><?php endif; ?>
                                <td class="tdleft" width="15%"><?php echo ($vo["name"]); ?>:</td>
                                <td width="35%"><?php echo ($vo["html"]); ?></td>
                            <?php if($i%2 == 0): ?></tr><?php endif; ?>
                            <?php if($i%2 != 0 && count($field_list['main']) == $j): ?><td colspan="2">&nbsp;</td>
                                </tr><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
						<tr><th  colspan="4"><?php echo L('PRODUCT_PICTURE');?></th></tr>
						<tr>
							<td class="tdleft" height="100">主图</td>
							<td colspan="3" height="100">
								<input type="hidden" name="main_images_id" value="<?php echo ($product["images"]["main"]["images_id"]); ?>"/>
								<table  class="table table-striped">
									<tbody>
										<tr>
											<td width="20%">
												<div class="thumbnail thumb80">
													<?php if(empty($product['images']['main']['path'])): ?><img id="main_pic_prev" class="thumb80" />
													<?php else: ?>
														<a href="<?php echo ($product["images"]["main"]["path"]); ?>" target="_self" class="litebox">
															<img id="main_pic_prev" src="<?php echo ($product["images"]["main"]["path"]); ?>" class="thumb80" />
														</a><?php endif; ?>
												</div>
											</td>
											<td width="35%">
												<p>
													<span id="main_pic_prev_name">
														<?php if(empty($product['images']['main']['name'])): ?>无<?php else: echo ($product["images"]["main"]["name"]); endif; ?>
													</span>
												</p>
											</td>
											<td width="25%">
												<p>
													<span id="main_pic_prev_size">
														<?php if(empty($product['images']['main']['size'])): ?>0<?php else: echo ($product["images"]["main"]["size"]); endif; ?>
													</span> KB
												</p>
											</td>
											<td width="30%">
												<div class="btn btn-success fileinput-button">
													<span>选择文件</span>
													<input type="file" name="main_pic[]" id="main_pic">
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
						<tr>
							<td class="tdleft" style="min-height:50">副图</td>
							<td colspan="3" style="min-height:50">
								<?php if(!empty($product['images']['secondary'])): if(is_array($product['images']['secondary'])): $i = 0; $__LIST__ = $product['images']['secondary'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="box-secondary" id="box-list-<?php echo ($vo["images_id"]); ?>">
											<a href="<?php echo ($vo["path"]); ?>" target="_self" class="litebox" data-litebox-group="group-1">
												<img src="<?php echo ($vo["path"]); ?>" class="thumbnail thumb80">
												<a href="javascript:del_img(<?php echo ($vo["images_id"]); ?>);"><i class="icon-remove del_parts"></i></a>
											</a>
										</div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
								<div class="div_add">
									<a class="btn btn-primary pull-right" id="btn_add_files" href="javascript:void(0);">
										<i class="icon-plus"></i>&nbsp;&nbsp;新增
									</a>
								</div>
							</td>
						</tr>
						<tr><th  colspan="4"><?php echo L('ADDITIONAL_INFORMATION');?></th></tr>
						<?php $j=0; ?>
						<?php if(is_array($field_list['data'])): $i = 0; $__LIST__ = $field_list['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $j++; ?>
                        <?php if($vo['form_type'] == 'textarea' or $vo['form_type'] == 'editor' or $vo['form_type'] == 'address'): if($i%2 == 0): ?><td colspan="2">&nbsp;</td>
                            </tr><?php endif; ?>
                            <tr>
                                <td class="tdleft" width="15%"><?php echo ($vo["name"]); ?>:</td>
                                <td colspan="3"><?php echo ($vo["html"]); ?></td>
                            </tr>
                            <?php if($i%2 != 0 && count($field_list['data']) != $j): $i++; endif; ?>
                        <?php else: ?>
                            <?php if($i%2 != 0): ?><tr><?php endif; ?>
                                <td class="tdleft" width="15%"><?php echo ($vo["name"]); ?>:</td>
                                <td width="35%"><?php echo ($vo["html"]); ?></td>
                            <?php if($i%2 == 0): ?></tr><?php endif; ?>
                            <?php if($i%2 != 0 && count($field_list['data']) == $j): ?><td colspan="2">&nbsp;</td>
                                </tr><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
            <input name="a" type="hidden" value="edit">
            <input name="product_id" type="hidden" value="<?php echo ($product['product_id']); ?>">
			</form>
		</div>
	</div>
</div>
<div class="hide" id="dialog-validate" title="<?php echo L('PRODUCT_TEST_RESULTS');?>">
	<?php echo L('SELECT_ALL_OF_CUSTOMERS');?>
	<div id="search_content"></div>
</div>
<script type="text/javascript" src="__PUBLIC__/js/uploadPreview.js"></script>
<link href="__PUBLIC__/css/litebox.css" rel="stylesheet" type="text/css">
<script src="__PUBLIC__/js/litebox.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/images-loaded.min.js" type="text/javascript"></script>
<script type="text/javascript">
//初始化上传图片
$("body").on('click','input[type="file"]', function(){
	var selector = $(this).attr('id');
	$("#"+selector).uploadPreview({ Img: selector+"_prev", Width: 120, Height: 120 });
});
//初始化图片查看插件
$('.litebox').liteBox({
  revealSpeed: 400,
  background: 'rgba(0,0,0,.8)',
  overlayClose: true,
  escKey: true,
  navKey: true,
  errorMessage: '图片加载失败.'
});

//删除图片
function del_img(param){
	if(param){
		if(confirm('<?php echo L("CONFIRM_DELETE");?>')){
			$.ajax({
				'type':'get',
				'dataType':'json',
				'url':'<?php echo U("product/delImg");?>',
				'data':{images_id:param},
				'success':function(data){
					if(data.status == 1){
						//删除图片DOM
						$('#box-list-'+param).remove();
					}else{
						alert(data.info);
					}
				}
			});
		}else{
			return false;
		}
	}else{
		alert('<?php echo L("PARAMETER_ERROR");?>');
	}
}
$("#dialog-validate").dialog({
	autoOpen: false,
	modal: true,
	width: 400,
	maxHeight: 400,
	buttons: { 
		"<?php echo L('CONFIRM');?>": function () {
			$(this).dialog("close"); 
		}
	},
	position: ["center", 100]
});
$(function(){
	$('#name').blur(
		function(){
			name = $('#name').val();
			if(name!=''){
				$.post('<?php echo U("product/check");?>',
					{
					name:name
					},
					function(data){
						if(data.data != 0){
							$result = '';
							$.each(data.data, function(k, v){
								$result += (k+1)+'、'+v+'</br>';
							});
							$('#dialog-validate').dialog('open');
							$("#search_content").html($result);
						}
					},
				'json');
			} else {
				alert('<?php echo L('PLEASE_FILL_OUT_THE_PRODUCT_NAME');?>');
			}
		}
	)
	$('#owner_name').click(
		function(){
			$('#dialog-role-list').dialog('open');
			$('#dialog-role-list').load("<?php echo U('user/listDialog');?>");
		}
	);
	$('#validate').click(
		function(){
			name = $('#name').val();
			if(name!=''){
				$.post('<?php echo U("product/validate");?>',
					{
						name:name
					},
					function(data){
						if(data.data == 0){
							alert(data.info);
						}else{
							$result = '';
							$.each(data.data, function(k, v){
								$result += (k+1)+'、'+v+'</br>';
							});
							$('#dialog-validate').dialog('open');
							$("#search_content").html($result);
						}
					},
				'json');
			} else {
				alert('<?php echo L('PLEASE_FILL_OUT_THE_PRODUCT_NAME');?>');
			}
		}
	);
});
$(function(){
    $.formValidator.initConfig({formID:"form1",debug:false,submitOnce:true,
        onError:function(msg,obj,errorlist){
        alert(msg);
    },
    submitAfterAjaxPrompt : '<?php echo L('THERE_ARE_DATA_ARE_ASYNCHRONOUS_VALIDATION');?>'
});
<?php if(is_array($field_list[main])): $i = 0; $__LIST__ = $field_list[main];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['is_validate'] == 1): if($vo['form_type'] != 'box'): ?>$("#<?php echo ($vo[field]); ?>").formValidator({
	            tipID:"<?php echo ($vo[field]); ?>Tip",
	            <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('WILL_OPTIONS');?></span>",
				empty:false,
	            <?php else: ?>
	            onShow:" ",
				empty:true,<?php endif; ?>
	            onFocus:" ",
	            onCorrect:"<span style='color:green;'>√</span>",
				defaultValue:"<?php echo ($product[$vo['field']]); ?>"
	        }).inputValidator({
	            <?php if($vo['is_null'] == 1): ?>min:1,max:<?php echo (($vo[max_length])?($vo[max_length]):"255"); ?>,
	            onshow:"<?php echo L('NOT NULL',array($vo[name]));?>",
	            <?php else: ?>
	            min:0,max:<?php echo (($vo[max_length])?($vo[max_length]):"255"); ?>,<?php endif; ?>
	            onErrorMin:"<?php echo L('NOT NULL',array($vo[name]));?>",
	            onErrorMax:"<?php echo L('MAXIMUM_REQUEST_LENGTH_EXCEEDED',array($vo[name]));?>"
	         });
            <?php if($vo['form_type'] == 'email'): ?>$("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"email",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });
            <?php elseif($vo['form_type'] == 'mobile'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"mobile",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });
            <?php elseif($vo['form_type'] == 'phone'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"tel",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });
            <?php elseif($vo['form_type'] == 'datetime'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"date",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });
            <?php elseif($vo['form_type'] == 'number'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"num",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });<?php endif; ?>
             <?php if($vo['is_unique'] == 1 && $vo['field']!='name'): ?>$("#<?php echo ($vo[field]); ?>").ajaxValidator({
                dataType : "json",
                type : "GET",
                async : false,
                isValid : true,
                data : {
                    id:<?php echo ($product["product_id"]); ?>
                    },
                url : "<?php echo U('product/validate');?>",
                success : function(data){
                    if( data.status == 1 ) return false;
                    if( data.status == 0 ) return true;
                    return false;
                },
                error: function(jqXHR, textStatus, errorThrown){alert("{:L('THE_SERVER_DID_NOT_RETURN_DATA_MAY_BE_THE_SERVER_BUSY_PLEASE_TRY_AGAIN')}"+errorThrown);},
                onError : "<?php echo L('THIS_DISABLED_PLEASE_CHANGE',array($vo[name],$vo[name]));?>",
                onWait : "<?php echo L('LEGITIMACY_CHECKING_PLEASE_WAIT',array($vo[name]));?>"
            });<?php endif; ?>
         <?php else: ?>
             <?php if($vo['setting']['type'] == 'checkbox'): ?>$(":checkbox[name='<?php echo ($vo['field']); ?>[]']").formValidator({
                 tipID:"<?php echo ($vo[field]); ?>Tip",
                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('WILL_OPTIONS');?></span>",
                 <?php else: ?>
                 onShow:" ",<?php endif; ?>
                 onFocus:" ",
                 onCorrect:"<span style='color:green;'>√</span>"
             }).inputValidator({
             	<?php if($vo['is_null'] == 1): ?>min:1,
                 <?php else: ?>
                 min:0,<?php endif; ?>
             	onError:"<?php echo L('PLEASE_SELECT',array($vo[name]));?>"
             });
             <?php elseif($vo['setting']['type'] == 'select'): ?>
	        	 $("#<?php echo ($vo[field]); ?>").formValidator({
	                 tipID:"<?php echo ($vo[field]); ?>Tip",
	                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('WILL_OPTIONS');?></span>",
	                 <?php else: ?>
	                 onShow:" ",<?php endif; ?>
	                 onFocus:" ",
	                 onCorrect:"<span style='color:green;'>√</span>"
	             }).inputValidator({
	             	<?php if($vo['is_null'] == 1): ?>min:1,
	                 <?php else: ?>
	                 min:0,<?php endif; ?>
	             	onError:"<?php echo L('PLEASE_SELECT',array($vo[name]));?>"
	             });
             <?php else: ?>
	             $(":radio[name='<?php echo ($vo['field']); ?>']").formValidator({
	                 tipID:"<?php echo ($vo[field]); ?>Tip",
	                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('WILL_OPTIONS');?></span>",
	                 <?php else: ?>
	                 onShow:" ",<?php endif; ?>
	                 onFocus:" ",
	                 onCorrect:"<span style='color:green;'>√</span>"
	             }).inputValidator({
	             	<?php if($vo['is_null'] == 1): ?>min:1,
	                 <?php else: ?>
	                 min:0,<?php endif; ?>
	             	onError:"<?php echo L('PLEASE_SELECT',array($vo[name]));?>"
	             });<?php endif; endif; endif; endforeach; endif; else: echo "" ;endif; ?>
<?php if(is_array($field_list[data])): $i = 0; $__LIST__ = $field_list[data];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['is_validate'] == 1): if($vo['form_type'] != 'box'): ?>$("#<?php echo ($vo[field]); ?>").formValidator({
	            tipID:"<?php echo ($vo[field]); ?>Tip",
	            <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('WILL_OPTIONS');?></span>",
				empty:false,
	            <?php else: ?>
	            onShow:" ",
				empty:true,<?php endif; ?>
	            onFocus:" ",
	            onCorrect:"<span style='color:green;'>√</span>",
				defaultValue:"<?php echo ($product[$vo['field']]); ?>"
	        }).inputValidator({
	            <?php if($vo['is_null'] == 1): ?>min:1,max:<?php echo (($vo[max_length])?($vo[max_length]):"255"); ?>,
	            onshow:"<?php echo L('NOT NULL',array($vo[name]));?>",
	            <?php else: ?>
	            min:0,max:<?php echo (($vo[max_length])?($vo[max_length]):"255"); ?>,<?php endif; ?>
	            onErrorMin:"<?php echo L('NOT NULL',array($vo[name]));?>",
	            onErrorMax:"<?php echo L('MAXIMUM_REQUEST_LENGTH_EXCEEDED',array($vo[name]));?>"
	         });
            <?php if($vo['form_type'] == 'email'): ?>$("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"email",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });
            <?php elseif($vo['form_type'] == 'mobile'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"mobile",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });
            <?php elseif($vo['form_type'] == 'phone'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"tel",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });
            <?php elseif($vo['form_type'] == 'datetime'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"date",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });
            <?php elseif($vo['form_type'] == 'number'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"num",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });<?php endif; ?>
             <?php if($vo['is_unique'] == 1 && $vo['field']!='name'): ?>$("#<?php echo ($vo[field]); ?>").ajaxValidator({
                dataType : "json",
                type : "GET",
                async : false,
                isValid : true,
                data : {
                    id:<?php echo ($product["product_id"]); ?>
                    },
                url : "<?php echo U('product/validate');?>",
                success : function(data){
                    if( data.status == 1 ) return false;
                    if( data.status == 0 ) return true;
                    return false;
                },
                error: function(jqXHR, textStatus, errorThrown){alert("{:L('THE_SERVER_DID_NOT_RETURN_DATA_MAY_BE_THE_SERVER_BUSY_PLEASE_TRY_AGAIN')}"+errorThrown);},
                onError : "<?php echo L('THIS_DISABLED_PLEASE_CHANGE',array($vo[name],$vo[name]));?>",
                onWait : "<?php echo L('LEGITIMACY_CHECKING_PLEASE_WAIT',array($vo[name]));?>"
            });<?php endif; ?>
         <?php else: ?>
             <?php if($vo['setting']['type'] == 'checkbox'): ?>$(":checkbox[name='<?php echo ($vo['field']); ?>[]']").formValidator({
                 tipID:"<?php echo ($vo[field]); ?>Tip",
                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('WILL_OPTIONS');?></span>",
                 <?php else: ?>
                 onShow:" ",<?php endif; ?>
                 onFocus:" ",
                 onCorrect:"<span style='color:green;'>√</span>"
             }).inputValidator({
             	<?php if($vo['is_null'] == 1): ?>min:1,
                 <?php else: ?>
                 min:0,<?php endif; ?>
             	onError:"<?php echo L('PLEASE_SELECT',array($vo[name]));?>"
             });
             <?php elseif($vo['setting']['type'] == 'select'): ?>
	        	 $("#<?php echo ($vo[field]); ?>").formValidator({
	                 tipID:"<?php echo ($vo[field]); ?>Tip",
	                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('WILL_OPTIONS');?></span>",
	                 <?php else: ?>
	                 onShow:" ",<?php endif; ?>
	                 onFocus:" ",
	                 onCorrect:"<span style='color:green;'>√</span>"
	             }).inputValidator({
	             	<?php if($vo['is_null'] == 1): ?>min:1,
	                 <?php else: ?>
	                 min:0,<?php endif; ?>
	             	onError:"<?php echo L('PLEASE_SELECT',array($vo[name]));?>"
	             });
             <?php else: ?>
	             $(":radio[name='<?php echo ($vo['field']); ?>']").formValidator({
	                 tipID:"<?php echo ($vo[field]); ?>Tip",
	                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('WILL_OPTIONS');?></span>",
	                 <?php else: ?>
	                 onShow:" ",<?php endif; ?>
	                 onFocus:" ",
	                 onCorrect:"<span style='color:green;'>√</span>"
	             }).inputValidator({
	             	<?php if($vo['is_null'] == 1): ?>min:1,
	                 <?php else: ?>
	                 min:0,<?php endif; ?>
	             	onError:"<?php echo L('PLEASE_SELECT',array($vo[name]));?>"
	             });<?php endif; endif; endif; endforeach; endif; else: echo "" ;endif; ?>
});
</script>

</body>
</html>