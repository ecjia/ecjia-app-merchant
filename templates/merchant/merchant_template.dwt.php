<?php defined('IN_ECJIA') or exit('No permission resources.');?> 
<!-- {extends file="ecjia-merchant.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
	ecjia.merchant.merchant_info.init();
</script>
<!-- {/block} -->

<!-- {block name="home-content"} -->
<div class="page-header">
	<div class="pull-left">
		<h2><!-- {if $ur_here}{$ur_here}{/if} --></h2>
  	</div>
  	<div class="pull-right">
  		{if $action_link}
		<a href="{$action_link.href}" class="btn btn-primary data-pjax">
			<i class="fa fa-reply"></i> {$action_link.text}
		</a>
		{/if}
  	</div>
  	<div class="clearfix"></div>
</div>
<style type="text/css">
.template-content {
	width: 440px;
	height: 444.22px;
	float: left;
}
.template-item {
	width: 200px;
	height: 403.22px;
	float: left;
}
.template-item.m_l30 {
	margin-left: 30px;
}
</style>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                    <form class="cmxform form-horizontal" name="theForm" action="{$form_action}"  method="post" enctype="multipart/form-data" data-toggle='from'>
                  	    <div class="form-group">
                            <label class="control-label col-lg-2">{t}选择模版：{/t}</label>
                            <div class="col-lg-6">
                                <span class="help-block">此模版只适用于门店小程序（点击图片可查看模版大图）</span>
                            </div>
                        </div>
                        <div class="form-group">
                        	<label class="control-label col-lg-2"></label>
                            <div class="col-lg-6">
                                <div class="template-content">
                                	<div class="template-item">
                                		<img src="{$app_url}template_1.png" class="w200"/>
                                		<div class="m_l5">
	                                		<input id="template_1" type="radio" name="shop_template" value="default1" {if $shop_template eq 'default1'} checked{/if}/>
	                                		<label for="template_1">模版样式一</label>
                                		</div>
                                	</div>
                                	<div class="template-item m_l30">
                                		<img src="{$app_url}template_2.png" class="w200"/>
                                		<div class="m_l5">
	                                		<input id="template_2" type="radio" name="shop_template" value="default2" {if $shop_template eq 'default2'} checked{/if}/>
	                                		<label for="template_2">模版样式二</label>
                                		</div>
                                	</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-lg-6 col-md-offset-2">
                                <input class="btn btn-info" type="submit" name="name" value="确定">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- {/block} -->
