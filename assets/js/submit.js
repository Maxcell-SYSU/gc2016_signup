/**
 * Created by Jerry on 2016/10/27.
 */
function warning(ele, tex) {
    if (document.getElementById("bg").offsetWidth < 540) {
        $(ele).append("<label class='warning control-label col-sm-12' style='text-align: left;'>" + tex + "</label>");
    } else {
        $(ele).append("<label class='warning control-label col-sm-offset-3 col-sm-9' style='text-align: left;'>" + tex + "</label>");
    }
};

var teamType = null;
function submit() {
    var isOK = true;
    $(".warning").remove();


    //if ($("#type_video").checked==true) teamType = 0;
    //if ($("#type_graph").checked==true) teamType = 1;
    if (teamType == null) {
        warning("#team_type_area", "请选择组别!");
        isOK = false;
    }

    var teamName = $("#team_name").val();
    teamName = teamName.replace(/\s+/g, ' ');
    if (teamName == "" || teamName == " ") {
        warning("#team_name_area","队伍名称不能为空!");
        isOK = false;
    }

    var teamNum = parseInt($("#team_members").val());
    if (isNaN(teamNum) || teamNum == false) {
        warning("#team_members_area","人数不能为空!");
        isOK = false;
    } else if (teamNum < 1) {
        warning("#team_members_area","参赛人数必须大于1！");
        isOK = false;
    }

    var capName = $("#captain_name").val();
    capName = capName.replace(/\s+/g, ' ');
    if (capName == "" || capName == " ") {
        warning("#captain_name_area","队长名称不能为空!");
        isOK = false;
    }

    var school = $("#schools option:selected").val();
    if (school == null || school == "") {
        warning("#schools_area","请选择学校!");
        isOK = false;
    }

    var stuID = $("#student_id").val();

    var phone = $("#phone_number").val();
    phone = phone.replace(/\s+/g, ' ');
    if (phone == "" || phone == " ") {
        warning("#phone_number_area","必须输入手机号!");
        isOK = false;
    }

    var QQ = $("#qq_number").val();
    if (isNaN(parseInt(QQ)) || parseInt(QQ) == null || QQ == "") {
        warning("#qq_number_area","输入的 QQ 号不正确!")
    }

    var wechat = $("#wechat_id").val();

    console.log(teamType, teamName, teamNum, capName, school, stuID, phone, QQ, wechat);

    if (isOK == true) {
        $.ajax({
            type: 'post',
            url: 'signup.php',
            data: {
                'teamType': teamType,
                'teamName': teamName,
                'teamNum': teamNum,
                'capName': capName,
                'school': school,
                'stuID': stuID,
                'phone': phone,
                'QQ': QQ,
                'wechat': wechat
            },
            success: function (msg) {
                console.log(msg);
                var ret = JSON.parse(msg);
                if (ret['status'] == true) {
                    $("#team_name").val("");
                    $("#team_members").val("");
                    $("#student_id").val("");
                    $("#captain_name").val("");
                    $("#phone_number").val("");
                    $("#qq_number").val("");
                    $("#wechat_id").val("");
                    alert(ret['msg'] + "有问题请联系Maxcell公众号");
                } else {
                    alert(ret['msg'] + "有问题请联系Maxcell公众号");
                }
            }
        });
    }
}

function typeChange(id) {
    if (id == "type_video") {
        $("#team_members").attr("placeholder", "> 1 人");
        $("#team_members").val("");
        $("#team_members").removeAttr("disabled");
        teamType = 0;
        console.log("type_video clicked");
    }
    if (id == "type_graph") {
        $("#team_members").attr("placeholder", "");
        $("#team_members").val("1");
        $("#team_members").attr("disabled", "");
        teamType = 1;
        console.log("type graph clicked");
    }
}