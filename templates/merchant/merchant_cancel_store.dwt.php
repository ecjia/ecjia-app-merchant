<?php defined('IN_ECJIA') or exit('No permission resources.'); ?>
<!-- {extends file="ecjia-merchant.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
    // ecjia.merchant.merchant_info.init();
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
        <section class="panel">
            <div class="panel-body">
                <ul id="validate_wizard-titles" class="stepy-titles clearfix">
                    <li id="step1" class="{if $step eq 1}current-step{/if}">
                        <div>
                            {t domain="merchant"}申请注销{/t}
                        </div>
                        <span class="m_t5">{t domain="merchant"}确保必须满足以下条件{/t}</span><span class="stepNb">1</span>
                    </li>
                    <li id="step2" class="{if $step eq 2}current-step{/if}">
                        <div>
                            {t domain="merchant"}验证手机号{/t}
                        </div>
                        <span class="m_t5">{t domain="merchant"}验证店铺已绑定的手机号码{/t}</span><span class="stepNb">2</span>
                    </li>
                    <li id="step3" class="{if $step eq 3}current-step{/if}">
                        <div>
                            {t domain="merchant"}提交成功{/t}
                        </div>
                        <span class="m_t5">{t domain="merchant"}申请已提交，默认30日等待期{/t}</span><span class="stepNb">3</span>
                    </li>
                </ul>
                <form class="form-horizontal" action="" method="post" name="theForm" enctype="multipart/form-data">
                    <!-- {if $step eq 1} -->

                    <div class="merchant-main-info">
                        <div class="left"><img src="{$store_info.shop_logo}" alt="" width="80" height="80"></div>
                        <div class="right">
                            <p>
                                <span class="bold">{$store_info.merchants_name}</span>
                                {if $store_info.shop_closed eq 1 || $data.shop_close eq 1}
                                <span class="closed">{t domain="merchant"}休息中{/t}</span>
                                {else}
                                <span class="unclose">{t domain="merchant"}营业中{/t}</span>
                                {/if}
                            </p>
                            <p>{t domain="merchant"}负责人：{/t}{$store_info.responsible_person} {if $store_info.contact_mobile}&nbsp;({$store_info.contact_mobile}){/if}</p>
                            <p>{t domain="merchant"}开店时间：{/t}{$store_info.confirm_time}</p>
                            {if $diff}
                            <p>{t domain="merchant"}开店时长：{/t}{$diff}</p>
                            {/if}
                        </div>
                        <a class="link" target="_blank" href="{RC_Uri::url('merchant/mh_franchisee/init')}">店铺详细信息 >></a>
                    </div>

                    <!-- {else if $step eq 2} -->

                    <!-- {else if $step eq 3} -->

                    <!-- {/if} -->

                </form>
            </div>
        </section>
    </div>
</div>

<!-- {/block} -->
