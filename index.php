<html>
<head>
    <meta http-equiv="Content-Type" charset="UTF-8">
    <title>Maxcell 广创 2016</title>
    <script src="jquery-2.1.1.min.js"></script>
    <script src="submit.js"></script>
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="stylesheet" href="//o5ngisf7c.qnssl.com/source/fontawesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="//o5ngisf7c.qnssl.com/source/bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="//o5ngisf7c.qnssl.com/source/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid" id="bg">
    <div class="content container container-inner" id="primary_content">
        <div class="row">
            <div class="col-sm-6" id="dummy_1"></div>
            <div class="col-sm-6" id="form_1">
                <form class="img-rounded form-horizontal form" id="sign_up_form">
                    <div id="team_type_area" class="form-group">
                        <label class="labels control-label col-sm-3">组别: </label>
                        <div id="special-input " class="col-sm-3 control-label" style="text-align: left;">
                            <input type="radio" name="team_type" id="type_video" value="0"
                                   onchange="typeChange(this.id)"><span
                                class="option_content"> 视频组</span>
                        </div>
                        <div class="col-sm-6 control-label" style="text-align: left;">
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
                                <option id="school_sysu" value="sysu">中山大学珠海校区</option>
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
                            <input class="form-control" type="text" id="wechat_id" placeholder="必填">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-6" id="dummy_2"></div>
            <div class="col-sm-6" id="form_2">
                <div class="img-rounded form mybtn">
                    <div class="row">
                        <div id="sub-btn" class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn btn-primary" onclick="submit()">提交报名信息</button>
                        </div>
                    </div>
                </div>
            </div>
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
<script src="index.js"></script>
</html>