<?php

if( !isset($left_nav_active) ){
    $left_nav_active = '';
}
if( !isset($sub_nav_active) ){
    $sub_nav_active = '';
}

?>
<style>
    .left-sidebar {
        position: absolute;
        top: 102px;
        bottom: 0;
        left: 0;
        transition: width .3s;
        background: #fafafa;
        padding: 10px 20px;
        z-index: 2;
        width: 245px;
        overflow: hidden;
        outline: none;
        height: 110%
    }

    .aui-nav-heading{
        font-weight: bold;
        margin-left: 10px;
    }

    .admin-menu-links div .active {
        border-bottom:1px solid #1f78d1;
        color:rgba(0,0,0,0.85);
    }

    .aui-nav li.active a{
        border-bottom:1px solid #1f78d1;
        color:rgba(0,0,0,0.85);

    }



</style>
<aside aria-live="polite" class="js-right-sidebar left-sidebar right-sidebar-expanded affix-top"
       data-spy="affix" tabindex="0"  >
    <div class="issuable-sidebar">

        <div class="admin-menu-links">
            <div class="aui-nav-heading  <? if($sub_nav_active=='setting') echo 'active';?>"><strong>用户管理</strong></div>
            <ul class="aui-nav" resolved="">
                <li class="<? if($left_nav_active=='user') echo 'active';?>"><a href="/admin/user" id="general_configuration">用户</a>
                </li>
                <li class="<? if($left_nav_active=='group') echo 'active';?>"><a href="/admin/group" id="find_more_admin_tools">用户组</a>
                </li>

            </ul>

        </div>
    </div>
</aside>