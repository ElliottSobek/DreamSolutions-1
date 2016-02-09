<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Business Plan Manager</title>
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <script src="jquery-1.12.0.min.js">
        jQuery(document).ready(function() {
            jQuery('.tabs .tab-links a').on('click', function(e)  {
                var currentAttrValue = jQuery(this).attr('href');

                // Show/Hide Tabs
                jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

                // Change/remove current tab to active
                jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

                e.preventDefault();
            });
        });
    </script>
</head>
<body>
    <div id="header">
        <div id="head" style="display: inline-block;">
            <img src="/images/epl.jpg" alt="EPL logo" style="float: left" width="150" height="132">
            <h1 style="float: right; margin-left: 330px; margin-top: 50px;">Business Plan</h1>

        </div>
        <!--<div style="margin-left: 867px; display: inline">-->
            <input type="text" name="search" placeholder="Search" style="margin-left: 223px;">
        </div>
        <div id="nav">
            <ul>
                <li><a href="#dashboard"  class="active">Dashboard</a></li>
                <li><a href="#viewBP">Business Plan</a></li>
                <li><a href="#manage">Manage</a></li>
                <ul style="float:right;list-style-type:none;">
                    <li><a href="#about">About</a></li>
                    <li><a href="/login">Logout</a></li>
                </ul>
            </ul>
        </div>
        <div style="float: left; /*margin-right: 150px;*/">
            <img src="/images/Empty_Profile_08.png-square" alt="profile picture" width="300"  style="padding-top: 10px">
            <h2>Vicky Varga</h2>
            <h3>IT Department</h3>
        </div>
        <!--<div id="profileNav">-->
            <!--<ul>-->
                <!--<li><a href="#recentActivty">Tasks</a></li>-->
                <!--<li><a href="#tasks" class="selected">Recent Activity</a></li>-->
                <!--&lt;!&ndash;<li><a href="#stats">Statistics</a></li>&ndash;&gt;-->
            <!--</ul>-->
        <!--</div>-->
    <div class="tabs" style="float: right">
        <ul class="tab-links">
            <li class="active"><a href="#tab1">Tasks</a></li>
            <li><a href="#tab2">Recent Activity</a></li>

        </ul>

        <div class="tab-content">
            <div id="tab1" class="tab active">
                <p>Tab #1 content goes here!</p>
                <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis.</p>
            </div>

            <div id="tab2" class="tab">
                <p>Tab #2 content goes here!</p>
                <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
            </div>


        </div>
    </div>


    </div>

</body>
</html>