/**
 * Created by Jerry on 2016/10/27.
 */
var teamType = null;
function submit() {
    var isOK = true;
    $(".warning").remove();


    //if ($("#type_video").checked==true) teamType = 0;
    //if ($("#type_graph").checked==true) teamType = 1;
    if (teamType == null) {
        $("#team_type_area").append("<label class='warning control-label col-sm-offset-3 col-sm-9' style='text-align: left;'>请选择组别!</label>");
        isOK = false;
    }

    var teamName = $("#team_name").val();
    teamName = teamName.replace(/\s+/g, ' ');
    if (teamName == "" || teamName == " ") {
        $("#team_name_area").append("<label class='warning control-label col-sm-offset-3 col-sm-9' style='text-align: left;'>队伍名称不能为空!</label>");
        isOK = false;
    }

    var teamNum = parseInt($("#team_members").val());
    if (isNaN(teamNum) || teamNum == false) {
        $("#team_members_area").append("<label class='warning control-label col-sm-offset-3 col-sm-9' style='text-align: left;'>人数不能为空!</label>");
        isOK = false;
    }
    if (teamNum < 1 || teamNum > 6) {
        $("#team_members_area").append("<label class='warning control-label col-sm-offset-3 col-sm-9' style='text-align: left;'>人数超出限制范围!</label>");
        isOK = false;
    }

    var capName = $("#captain_name").val();
    capName = capName.replace(/\s+/g, ' ');
    if (capName == "" || capName == " ") {
        $("#captain_name_area").append("<label class='warning control-label col-sm-offset-3 col-sm-9' style='text-align: left;'>队长名称不能为空!</label>");
        isOK = false;
    }

    var school = $("#schools option:selected").val();
    if (school == null || school == "") {
        $("#schools_area").append("<label class='warning control-label col-sm-offset-3 col-sm-9' style='text-align: left;'>请选择学校!</label>");
        isOK = false;
    }

    var stuID = $("#student_id").val();

    var phone = $("#phone_number").val();
    phone = phone.replace(/\s+/g, ' ');
    if (phone == "" || phone == " ") {
        $("#phone_number_area").append("<label class='warning control-label col-sm-offset-3 col-sm-9' style='text-align: left;'>必须输入手机号!</label>");
        isOK = false;
    }

    var QQ = $("#qq_number").val();
    if (isNaN(parseInt(QQ)) || parseInt(QQ) == null || QQ == "") {
        $("#qq_number_area").append("<label class='warning control-label col-sm-offset-3 col-sm-9' style='text-align: left;'>输入的 QQ 号不正确!</label>")
    }

    var wechat = $("#wechat_id").val();
    wechat = wechat.replace(/\s+/g, '');
    if (wechat == "") {
        $("#wechat_id_area").append("<label class='warning control-label col-sm-offset-3 col-sm-9' style='text-align: left;'>必须输入微信号!</label>");
        isOK = false;
    }

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
                'wechat': wechat,
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
                    alert(ret['msg']);
                } else {
                    alert(ret['msg']);
                }
            }
        });
    }
}

function typeChange(id) {
    if (id == "type_video") {
        $("#team_members").attr("placeholder", "必须为 1~6 人");
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