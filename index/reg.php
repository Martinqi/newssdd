<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/16
 * Time: 10:25
 */
?>


<!DOCTYPE html>
<html class="ui-page-login">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <link href="../static/css/mui.min.css" rel="stylesheet" />
    <link href="../static/css/validate.css" rel="stylesheet" />
    <script src="../static/js/jquery.min.js"></script>
    <script src="../static/js/jquery.validate.min.js"></script>
    <style>
        .area {
            margin: 20px auto 0 auto;
        }
        .mui-input-group:first-child {
            margin-top: 20px;
        }
        .mui-input-group label {
            width: 22%;
        }
        .mui-input-row label~input,
        .mui-input-row label~select,
        .mui-input-row label~textarea {
            width: 78%;
        }
        .mui-checkbox input[type=checkbox],
        .mui-radio input[type=radio] {
            top: 6px;
        }
        .mui-content-padded {
            margin-top: 25px;
        }
        .mui-btn {
            padding: 10px;
        }
        mui-input-row{
            position: relative;
        }

    </style>
</head>

<body>
<header class="mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" href="admin.php"></a>
    <h1 class="mui-title">注册</h1>
</header>
<div class="mui-content">
    <form id="signupForm" class="mui-input-group" action="checkreg.php">
        <div class="mui-input-row">
            <label>账号</label>
            <input name="name" id='account' type="text" class="mui-input-clear mui-input" placeholder="请输入账号">
        </div>
        <div class="mui-input-row">
            <label>密码</label>
            <input name="pass" id='password1' type="password" class="mui-input-clear mui-input" placeholder="请输入密码">
        </div>
        <div class="mui-input-row">
            <label>确认</label>
            <input  name="qpass" id='password_confirm' type="password" class="mui-input-clear mui-input" placeholder="请确认密码">
        </div>
        <div class="mui-input-row">
            <label>邮箱</label>
            <input name="email" id='email' type="email" class="mui-input-clear mui-input" placeholder="请输入邮箱">
        </div>
        <div class="mui-content-padded">
            <button id='reg' class="mui-btn mui-btn-block mui-btn-primary">注册</button>
        </div>
    </form>
    <div class="mui-content-padded">
        <p>注册真实可用，注册成功后的用户可用于登录，但是示例程序并未和服务端交互，用户相关数据仅存储于本地。</p>
    </div>
</div>
</body>
</html>
<script>
    $("#signupForm").validate({
        rules: {
            name: {
                required: true,
                minlength: 6,
            },
            pass: {
                required: true,
                minlength: 6
            },
            email: {
                required: true,
                email: true
            },
            qpass: {
                required: true,
                minlength: 6,
                equalTo: "#password1"
            }
        },
            messages: {
                name: {
                    required: "请输入用户名",
                    minlength: "用户名长度最少6位",
                },
                pass: {
                    required: "请输入密码",
                    minlength: "密码长度最少6位"
                },
                email: "请输入一个正确的邮箱",
                qpass: {
                    required: "密码必填",
                    minlength: "密码不能少于6位",
                    equalTo: "两次密码要一致"
                }
            },
        });
</script>
