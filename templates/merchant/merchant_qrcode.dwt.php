<?php defined('IN_ECJIA') or exit('No permission resources.');?> 
<!-- {extends file="ecjia-merchant.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
	ecjia.merchant.merchant_qrcode.init();
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

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
        	<div class="qrcode-content">
        		<div class="left-side">
        			<div class="store-logo"><img src="{$merchant_info.shop_logo}"></div>
        			<div class="store-name">{$merchant_info.merchants_name}</div>
        			<div class="qrcode"><img src="{$merchant_qrcode}"></div>
        			<div class="info">微信扫描二维码进行买单</div>
        		</div>
        		
        		<div class="right-side">
        			<div class="right-head">{$ur_here}</div>
        			<div class="right-content">
        				<p>此收款码用于商家收款使用，二维码收款是客户向商家转账的一种方式，客户在店内消费后使用微信“扫一扫”，则直接是哟红微信支付转账给商家，方便、快捷、减少客户等待时间。</p>
        				<p>打印尺寸：110mmx145mm</p>
        				<p>使用说明：先将二维码下载并打印后，可张贴在店铺内桌子、服务台等处、方便用户扫码。</p>
        			</div>
        			<div class="right-handle">
        				<a class="btn btn-primary" href="{$refresh_url}" data-toggle="ajaxremove" data-msg="您确定要刷新该收款二维码吗？">刷新二维码</a>
        				<a class="btn btn-info m_l10 download_qrcode" href="{$download_url}" data-qrcode="{$merchant_qrcode}">下载素材</a>
        			</div>
        		</div>
        	</div>
        </div>
    </div>
</div>
<!-- {/block} -->
