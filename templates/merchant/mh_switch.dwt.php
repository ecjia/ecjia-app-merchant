<?php defined('IN_ECJIA') or exit('No permission resources.');?> 
<!-- {extends file="ecjia-merchant.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
	ecjia.merchant.merchant_info.mh_switch();
</script>
<!-- {/block} -->

<!-- {block name="home-content"} -->
<div class="alert alert-info">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times" data-original-title="" title=""></i></button>
	<strong>温馨提示：</strong>{t}当您的店铺还未完善店铺信息、未完整上架商品以及您临时有事不能正常运营时可暂时下线店铺。{/t}
</div>

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
.trade_time{
	font-size:18px;font-weight:700;margin-right:5px
}
.unclose{
	color:#fff;background-color:#1abc9c;border-radius:4px;padding:5px 8px;font-size:15px
}
.closed{
	color:#fff;background-color:#e74c3c;border-radius:4px;padding:5px 8px;font-size:15px
}
</style>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                {if $tips}
                <h4>{$tips}</h4>
                {else}
				<form class="cmxform form-horizontal" name="theForm" action="{$form_action}"  method="post" enctype="multipart/form-data" data-toggle='from'>
					<div class="form-group">
				        <label class="control-label col-lg-2">{t}营业时间：{/t}</label>
				        <div class="col-lg-6 l_h30">
				        	<span class="trade_time">{$merchant_info.shop_trade_time}</span>
				        	{if $merchant_info.shop_close eq 0}
								<span class="unclose">营业中</span>
				           	{else}
								<span class="closed">休息中</span>
				           	{/if}
				        </div>
				    </div>
				
				    <div class="form-group">
					  	<label class="control-label col-lg-2">手机号码：</label>
					  	<div class="controls col-lg-6">
					      	<input class="form-control" name="mobile" id="mobile" placeholder="请输入手机号码" type="text" value="{$merchant_info.mobile}" readonly/>
					  	</div>
					</div>
				
					<div class="form-group">
					  	<label class="control-label col-lg-2">{t}短信验证码：{/t}</label>
					  	<div class="col-lg-6">
					      	<input class="form-control" name="code" placeholder="请输入手机短信验证码" type="text" />
					  	</div>
					  	<a class="btn btn-primary" data-url="{url path='merchant/merchant/get_code_value'}" id="get_code">获取短信验证码</a>
					</div>
				
					<div class="form-group ">
				        <div class="col-lg-6 col-md-offset-2">
				        	{if $merchant_info.shop_close eq 0}
								<input class="btn btn-info unset_SetRemain" type="submit" name="name" value="店铺打烊">
				           	{else}
								<input class="btn btn-info unset_SetRemain" type="submit" name="name" value="店铺营业">
				           	{/if}
				        </div>
				    </div>
				</form>
                {/if}
                </div>
            </div>
        </section>
    </div>
</div>
<!-- {/block} -->