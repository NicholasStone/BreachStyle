var bgBtn = document.getElementById("bgDetail");
var bgContent = document.getElementById("bg");
var achBtn = document.getElementById("achDetail");
var achContent = document.getElementById("ach");
var moreBtn = document.getElementById("moreBtn");
var more1 = document.getElementById("more1");
var more2 = document.getElementById("more2");
var more3 = document.getElementById("more3");
var moreDetail = document.getElementById("moreDetail");
bgBtn.onclick = function () {
    bgContent.innerHTML = "<span>活动背景 : </span>通过开展高校支部风采展示活动，不断挖掘、深入总结、广泛推广高校基层党支部在开展“两学一做”学习教育和纪念建党95周年“学党史、感党恩、跟党走”主题教育活动中的先锋模范、先进经验、典型案例，发挥典型引领和带动作用，推动“两学一做”学习教育向广大党员拓展、向经常性教育延伸，推动高校基层党支部整体功能提升。";
    bgContent.style.whiteSpace = "normal";
    bgContent.style.overflow = "visible";
    bgContent.style.textOverflow = "clip";
    bgContent.parentNode.style.lineHeight = "28px";
    bgBtn.style.display = "none"
};
achBtn.onclick = function () {
    achContent.innerHTML = "<span>活动荣誉 : </span>各类征集推选成果分为精品作品、优秀作品、入围作品三大类，按一定比例确定名额。结合各地各高校组织参与情况及成绩推选出若干先进集体。教育部将通过多种媒体形式将征集推选成果加以展示推广。";
    achContent.style.whiteSpace = "normal";
    achContent.style.overflow = "visible";
    achContent.style.textOverflow = "clip";
    achContent.parentNode.style.lineHeight = "28px";
    achBtn.style.display = "none"
};
moreBtn.onclick = function () {
    more1.innerHTML = "<span>1.支部工作案例 : </span>工作案例汇集“两微一端”、组织生活会及其他方式的创新工作方法、典型事例、特色主题活动等。各高校根据“两学一做”学习教育精神，要求各教师党支部、大学生党支部深入贯彻落实习近平总书记关于“两学一做”学习教育工作的重要指示，鼓励师生党员创新学习方式、探索实践形式，将有关<b>工作案例</b>、<b>工作经验</b>和<b>先进典型</b>通过网络等多种媒体予以展示。工作案例需包含主题与思路、实施方法与过程、主要成效及经验等，要求文字简洁、重点突出，字数3000字以内 <span style='color:red; font-weight: bolder; font-size: 1.4em;'>提交的材料为图文</span>。";
    more2.innerHTML = "<span>2.微党课 : </span>鼓励各校教师党支部、大学生党支部积极联系实际讲党课，利用<b>微视频</b>、<b>动漫</b>等多种体裁形式，创新党课宣讲模式。党课选题紧扣师生学习生活实践，围绕“两学一做”、纪念建党95周年和红军长征胜利80周年等主题，要求内容完整，主题突出，结构合理，表达流畅，富有时代气息，符合党性要求。微党课视频时长<b>小于10分钟</b>。 <span style='font-weight: bolder;color: red;font-size: 1.4em;'>提交的材料为视频</span>";
    more3.innerHTML = "<span>3.教师党支部、大学生党支部推荐展示 : </span> 各高校根据各教师党支部、大学生党支部开展“两学一做”学习教育的优秀经验和实际成效，评选出在学校能够叫得响、立得住、师生群众公认的教师党支部、大学生党支部，并且把典型材料推荐到活动平台进行展示。平台定期推送“支部风采”展示材料。<span style='color: red; font-weight: bolder; font-size: 1.4em;'> 要求字数3000字以内  提交的材料为图文或者是视频。</span>";
    more2.style.whiteSpace = "normal";
    more2.style.overflow = "visible";
    more2.style.textOverflow = "clip";
    more2.parentNode.style.lineHeight = "28px";
    more3.style.whiteSpace = "normal";
    more3.style.overflow = "visible";
    more3.style.textOverflow = "clip";
    more3.parentNode.style.lineHeight = "28px";
    moreBtn.parentNode.style.display = "none";
    more1.style.whiteSpace = "normal";
    more1.style.overflow = "visible";
    more1.style.textOverflow = "clip";
    more1.parentNode.style.lineHeight = "28px";
    moreDetail.style.whiteSpace = "normal";
    moreDetail.style.overflow = "visible";
    moreDetail.style.textOverflow = "clip";
    moreDetail.innerHTML = "<span>活动内容 : </span>“支部风采”展示活动，包括高校教师党支部和大学生党支部支部的工作案例、微党课和推荐展示等方面。"
};
var myDate = new Date();
var month = myDate.getMonth();
var oDay = myDate.getDate();
if ((month >= 9 && oDay >= 20) && (month >= 11 && oDay <= 15)) {
    var pointA = document.getElementsByClassName("point one")[0];
    var lineA = document.getElementsByClassName("line two")[0];
    var pointB = document.getElementsByClassName("point three")[0];
    var lineB = document.getElementsByClassName("line three")[0];
    pointA.className = "point one";
    lineA.className = "line two";
    pointB.className = "point three active";
    lineB.className = "line three active"
} else {
    if ((month >= 11 && oDay > 15) && (month >= 11 && oDay <= 30)) {
        var pointC = document.getElementsByClassName("point two")[0];
        var lineC = document.getElementsByClassName("line three")[0];
        var pointD = document.getElementsByClassName("point four")[0];
        var lineD = document.getElementsByClassName("line four")[0];
        pointC.className = "point three";
        lineC.className = "line three";
        pointD.className = "point four active";
        lineD.className = "line four active"
    }
}