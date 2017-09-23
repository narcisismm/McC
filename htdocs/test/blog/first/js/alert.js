function newalert(str2){
var str1="<p>",str3="</p>";
$("#alert1").text("");  //如果存在多次出现alert，要先清除上次append产生的文本
    $("#alert1").append(str1.concat(str2,str3));//js的连接字符串函数
$("#alert1").fadeIn(500);
$('#alert1').fadeOut(2000);//注意这里是数字的时候不带引号
}