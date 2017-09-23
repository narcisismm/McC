<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注册界面</title>
<link rel="stylesheet" href="css/alert.css">
<link rel="stylesheet" href="css/base.css">
<style>
	table{
		width:950px;
		margin-left: 185px;
		border-collapse: collapse;
        margin-bottom: 25px;
	}
	tr td,th{                           /*行列样式*/
	border-style: solid;
	border-color: #eff2f5;
    border-width: 1px 1px 1px 1px; 
                 /*上  右  下  左*/
    }
	th{
		color:#828894;
	}
	td{
    padding: 8px;
    vertical-align: middle;
	}
	input[type=text],
    input[type=password],
    textarea,
    select{
	background-color: #fff;
    border: 1px solid #ccd6de;
    color: #828894;
    font-family: "Lucida Grande", "Verdana";
    font-size: 13px;
    padding: 4px;
    }
	
	input[type=text],
    input[type=password]{
    width: 100%;
    height: 30px;
    line-height: 22px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;    
    }
	.label{
		color: #5b646a;
        text-align: right;
        width: 20%;
	}
	.desc{
		color: #5b646a;
        font-size: 11px;
		width: 25%;
	}
	#captcha{
		text-align: center;
	}
	#reg{
		float:right;
		margin-right: 185px;
		font-size: 25px;
		margin-top: 0px;
	}
</style>
<script src="js/jquery.min.js"></script>
<script language="javascript">
function newalert(str2){
	var str1="<p>",str3="</p>";
	$("#alert1").text("");  //如果存在多次出现alert，要先清除上次append产生的文本
    $("#alert1").append(str1.concat(str2,str3));//js的连接字符串函数
	$("#alert1").fadeIn(1000);
	$('#alert1').fadeOut(2000);//注意这里是数字的时候不带引号
}
function checkinfo(){
		if(form1.name.value==""){
	        alert("请输入姓名!");
   		    form1.name.select();
			return(false);
         }		
		if(form1.password.value.length<=5||form1.password.value.length>=13){
	        alert("请输入符合要求的密码!");
			form1.password.select();
			return(false);
		 }
        if(form1.password.value!=form1.password2.value){
		    alert("您输入的密码和验证密码不符！");
			form1.password2.select();
			return(false);
		 }
	     if(form1.email.value.indexOf("@")==-1){
			 alert("请输入正确格式的邮箱!");
			 form1.email.select();
			 return (false);
	     }
	    var gender=document.getElementsByName("gender");
	    if(gender[0].checked==false&&gender[1].checked==false){
			alert("请选择性别!");
		    return (false);	
		} 
  if(document.getElementById("day").selectedIndex==0||document.getElementById("month").selectedIndex==0||document.getElementById("year").selectedIndex==0){
		  newalert("请填写出生日月!");
		  return (false);
	   }	   
	   if(form1.studyarea.value==""){
	        newalert("请输入学习领域!");
   		    form1.studyarea.select();
			return(false);
       }	
}
//判断照片大小
function getPhotoSize(obj){
  photoExt=obj.value.substr(obj.value.lastIndexOf(".")).toLowerCase();//获得文件后缀名
  if(photoExt!=".png"&&photoExt!=".jpg"){
    alert("请上传后缀名为jpg或png的照片!");
	obj.outerHTML=obj.outerHTML; //对象重新赋值的一个操作.原理和FORM.RESET()一样,将用户操作去掉
	 return (false);
  }
  var fileSize = 0;
  var isIE = /msie/i.test(navigator.userAgent) && !window.opera;      
  if (isIE && !obj.files) {     
     var filePath = obj.value;      
     var fileSystem = new ActiveXObject("Scripting.FileSystemObject");  
     var file = fileSystem.GetFile (filePath);        
     fileSize = file.Size;     
  }else { 
     fileSize = obj.files[0].size;   
  } 
  fileSize=Math.round(fileSize/1024*100)/100; //单位为KB
  if(fileSize>=100){
    alert("照片最大尺寸为100KB，请重新上传!");
	  obj.outerHTML=obj.outerHTML;
    return (false);
  }
}
</script>
</head>
<body>
<div id="alert1" class="alert-box"></div>
<form id="form1" name="form1" method="post" action="sign-up.php" onSubmit="return checkinfo();" enctype="multipart/form-data">
    <table>
	<tr><th colspan="3">基本信息</th></tr>
	<tr>
        <td class="label">姓名</td>
        <td><input name="name" type="text" id="name"/></td>
        <td class="desc">请填写真实姓名</td>
    </tr>
    <tr>
        <td class="label">密码</td>
        <td><input name="password" type="password" id="password"/></td>
        <td class="desc">应为6-12位的字符、数字或字母</td>
    </tr>
    <tr>
        <td class="label">再次输入密码</td>
        <td><input name="password2" type="password" id="password2"/></td>
		<td class="desc"></td>
    </tr>
    <tr>
        <td class="label">邮箱</td>
        <td><input name="email" type="text" id="email"/></td>
        <td class="desc"></td>
    </tr>
    <tr>
        <td class="label">性别</td>
        <td><label><input name="gender" type="radio" value="0" id="gender" />男</label>
			<label><input name="gender" type="radio" value="1" id="gender" />女</label></td>    <!--value的值即为php中post的值-->
        <td class="desc"></td>
    </tr>
    <tr>
        <td class="label">出生年月</td>
		<td>
                            <select name="day" type="text" id="day"><option value="">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                            <select name="month" type="text" id="month"><option value="">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>
                            <select name="year" type="text" id="year"><option value="">Year</option>
                            <option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option>
                            <option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option>
                            <option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option>
                            <option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option>
                        </td>
        <td class="desc"></td>
    </tr>
    <tr>
        <td class="label">学习领域</td>
        <td><input name="studyArea" type="text" id="studyarea"/></td>
        <td class="desc"></td>
    </tr>
    <tr><th colspan="3">选填</th></tr>
	<tr>
        <td class="label">用户照片</td>
        <td><input name="avatar" type="file" id="imgFile"  onchange="getPhotoSize(this)" /></td>
        <td class="desc">格式为jpg或png</td>
	</tr>
    <tr>
        <td class="label">个人简介</td>
        <td><textarea cols="60" rows="7" name="introduce"></textarea></td>
        <td class="desc"></td>
    </tr>
    <tr><th colspan="3">验证码</th></tr>
    <tr id="captcha">
         <td colspan="3">
                        <div style=""><img src="captcha.php" id="siimage"></div>
                        <div style="padding-top: 10px;"><input name="captchaField" id="input" type="text" style="width:100px;" /></div></td>
    </tr>       
    </table>
    <!--  <input type="submit "class="first-button" id="reg" value="注册"/> 这个地方有毛病 -->
    <button type="submit" class="first-button" id="reg" value="submit">注册</button>
	</form>
</body>
</html>
