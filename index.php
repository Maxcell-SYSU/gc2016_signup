<html>
<head>
    <meta http-equiv="Content-Type" charset="UTF-8">
    <title>Maxcell 创意大赛 2016 报名</title>
    <link rel="shortcut icon" href="assets/img/maxcell-icon.jpg" type="image/x-jpg">
    <meta id="viewport" name="viewport" content="width=device-width">
    <script src="assets/js/jquery-2.1.1.min.js"></script>
    <script src="assets/js/submit.js"></script>
    <link rel="stylesheet" href="//o5ngisf7c.qnssl.com/source/fontawesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="//o5ngisf7c.qnssl.com/source/bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="//o5ngisf7c.qnssl.com/source/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="//o5ngisf7c.qnssl.com/source/fontawesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/index.css" type="text/css">
</head>
<body id="top" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- nav-bar -->
<nav class="navbar navbar-default navbar-fixed-top" style="">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-maxcell">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="assets/img/maxcell-white-no-content.svg">&nbsp;<big>Maxcell</big>&nbsp;
            </a>
        </div>
        <div class="collapse navbar-collapse" id="nav-maxcell">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://maxcell.com.cn">返回主页</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid dummy-50px"></div>
<div class="container-fluid" id="bg">
    <div class="content container container-inner" id="primary_content">
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6 rep">
                <form class="img-rounded form-horizontal form" id="sign_up_form">
                    <div id="team_type_area" class="form-group">
                        <label class="labels control-label col-sm-3">组别: </label>
                        <div id="special-input " class="col-sm-4 control-label" style="text-align: left;">
                            <input type="radio" name="team_type" id="type_video" value="0"
                                   onchange="typeChange(this.id)"><span
                                class="option_content"> 视频组</span>
                        </div>
                        <div class="col-sm-5 control-label" style="text-align: left;">
                            <input type="radio" name="team_type" id="type_graph" value="1"
                                   onchange="typeChange(this.id)"><span
                                class="option_content"> 平面组</span>
                        </div>
                    </div>
                    <div id="team_name_area" class="form-group">
                        <label class="labels control-label col-sm-3">队伍名称: </label>
                        <div class="input col-sm-9">
                            <input class="form-control" type="text" id="team_name" placeholder="必填">
                        </div>
                    </div>
                    <div id="team_members_area" class="form-group">
                        <label class="labels control-label col-sm-3">队伍人数: </label>
                        <div class="input col-sm-9">
                            <input class="form-control" type="text" id="team_members" placeholder="必填">
                        </div>
                    </div>
                    <div id="captain_name_area" class="form-group">
                        <label class="labels control-label col-sm-3">队长姓名: </label>
                        <div class="input col-sm-9">
                            <input class="form-control" type="text" id="captain_name" placeholder="必填">
                        </div>
                    </div>
                    <div id="schools_area" class="form-group">
                        <label class="labels control-label col-sm-3">学校: </label>
                        <div class="input col-sm-9">
                            <select class="form-control" id="schools">
                                <option id="school_sysu_z" value="sysu_z">中山大学珠海校区</option>
                                <option id="school_sysu_w" value="sysu_w">中山大学东校区</option>
                                <option id="school_sysu_s" value="sysu_s">中山大学南校区</option>
                                <option id="school_sysu_n" value="sysu_n">中山大学北校区</option>
                                <option id="school_bnu" value="bnu">北京师范大学珠海分校</option>
                                <option id="school_bit" value="bit">北京理工大学珠海学院</option>
                                <option id="school_uic" value="uic">北京师范大学—香港浸会大学联合国际学院</option>
                                <option id="school_jnu" value="jnu">暨南大学珠海校区</option>
                                <option id="school_jlu" value="jlu">吉林大学珠海学院</option>
                                <option id="school_zmc" value="zmc">遵义医学院珠海校区</option>
                                <option id="school_gdit" value="gdit">广东科学技术职业学院</option>
                            </select>
                        </div>
                    </div>
                    <div id="student_id_area" class="form-group">
                        <label class="labels control-label col-sm-3">学号: </label>
                        <div class="input col-sm-9">
                            <input class="form-control" type="text" id="student_id">
                        </div>
                    </div>
                    <div id="phone_number_area" class="form-group">
                        <label class="labels control-label col-sm-3">手机号: </label>
                        <div class="input col-sm-9">
                            <input class="form-control" type="text" id="phone_number" placeholder="必填">
                        </div>
                    </div>
                    <div id="qq_number_area" class="form-group">
                        <label class="labels control-label col-sm-3">QQ 号: </label>
                        <div class="input col-sm-9">
                            <input class="form-control" type="text" id="qq_number" placeholder="必填">
                        </div>
                    </div>
                    <div id="wechat_id_area" class="form-group">
                        <label class="labels control-label col-sm-3">微信号: </label>
                        <div class="input col-sm-9">
                            <input class="form-control" type="text" id="wechat_id">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-3 dummy"></div>
            <div class="col-sm-offset-3 col-sm-6 rep">
                <div class="img-rounded form mybtn">
                    <div class="row">
                        <div id="sub-btn" class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn btn-primary" onclick="submit()">提交报名信息</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 dummy"></div>
        </div>
    </div>
</div>
</body>
<footer class="container-fluid text-center">
    <div class="container container-inner">
        <a class="up-arrow" href="#top" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <div class="container-fluid dummy-hr"></div>
        <p>Copyright &copy;2016 Maxcell. All rights reserved.</p>
    </div>
</footer>
<script type="text/javascript" src="//o5ngisf7c.qnssl.com/source/jquery/jquery.bs.js"></script>
<script src="assets/js/index.js"></script>
</html>