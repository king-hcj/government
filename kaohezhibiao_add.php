<?php 
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$company_name=$_POST["company_name"];$number=$_POST["number"];$z1=$_POST["z1"];$z1_weight=$_POST["z1_weight"];$z2=$_POST["z2"];$z2_weight=$_POST["z2_weight"];$z3=$_POST["z3"];$z3_weight=$_POST["z3_weight"];
	$z4=$_POST["z4"];$z4_weight=$_POST["z4_weight"];$z5=$_POST["z5"];$z5_weight=$_POST["z5_weight"];$z6=$_POST["z6"];$z6_weight=$_POST["z6_weight"];$z7=$_POST["z7"];$z7_weight=$_POST["z7_weight"];
	$sql="insert into jqzb(company_name,number,z1,z1_weight,z2,z2_weight,z3,z3_weight,z4,z4_weight,z5,z5_weight,z6,z6_weight,z7,z7_weight) values('$company_name','$number','$z1','$z1_weight','$z2','$z2_weight','$z3','$z3_weight','$z4','$z4_weight','$z5','$z5_weight','$z6','$z6_weight','$z7','$z7_weight') ";
	mysql_query($sql);
	echo "<script>javascript:alert('添加成功!');location.href='kaohezhibiao_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>考核指标</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<body>
<p>添加精确指标： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.leibie.value==""){alert("请输入类别");document.form1.leibie.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="white" style="border-collapse:collapse">    
	<tr>
	<td>公司名称</td><td><input name='company_name' type='text' id='company_name' value='' />&nbsp;*</td>
	</tr>
	<tr>
	<td>编号</td><td><input name='number' type='text' id='number' value='' />&nbsp;*</td>
	</tr>
	<tr>
	<td>是否创优获奖</td><td><input name='z1' type='text' id='z1' value='' />&nbsp;*</td>
	<td>所占权重</td><td><input name='z1_weight' type='text' id='z1_weight' value='0.05' />&nbsp;*</td>
	</tr>
	<tr>
	<td>工程质量优良率</td><td><input name='z2' type='text' id='z2' value='' />&nbsp;*</td>
	<td>所占权重</td><td><input name='z2_weight' type='text' id='z2_weight' value='0.05' />&nbsp;*</td>
	</tr>
	<tr>
	<td>返工损失率</td><td><input name='z3' type='text' id='z3' value='' />&nbsp;*</td>
	<td>所占权重</td><td><input name='z3_weight' type='text' id='z3_weight' value='0.05' />&nbsp;*</td>
	</tr>
	<tr>
	<td>工期实现率</td><td><input name='z4' type='text' id='z4' value='' />&nbsp;*</td>
	<td>所占权重</td><td><input name='z4_weight' type='text' id='z4_weight' value='0.125' />&nbsp;*</td>
	</tr>
	<tr>
	<td>投资节省率</td><td><input name='z5' type='text' id='z5' value='' />&nbsp;*</td>
	<td>所占权重</td><td><input name='z5_weight' type='text' id='z5_weight' value='0.125' />&nbsp;*</td>
	</tr>
	<tr>
	<td>安全事故伤亡率</td><td><input name='z6' type='text' id='z6' value='' />&nbsp;*</td>
	<td>所占权重</td><td><input name='z6_weight' type='text' id='z6_weight' value='0075' />&nbsp;*</td>
	</tr>
	<tr>
	<td>环境事件损失率</td><td><input name='z7' type='text' id='z7' value='' />&nbsp;*</td>
	<td>所占权重</td><td><input name='z7_weight' type='text' id='z7_weight' value='0.075' />&nbsp;*</td>
	</tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="添加" onclick="return check();" />
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

