<?php 
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$company_name=$_POST["company_name"];$number=$_POST["number"];$z8_worse=$_POST["z8_worse"];$z8_bad=$_POST["z8_bad"];$z8_common=$_POST["z8_common"];$z8_good=$_POST["z8_good"];$z8_better=$_POST["z8_better"];$z9_worse=$_POST["z9_worse"];$z9_bad=$_POST["z9_bad"];$z9_common=$_POST["z9_common"];$z9_good=$_POST["z9_good"];$z9_better=$_POST["z9_better"];
	$z10_worse=$_POST["z10_worse"];$z10_bad=$_POST["z10_bad"];$z10_common=$_POST["z10_common"];$z10_good=$_POST["z10_good"];$z10_better=$_POST["z10_better"];$z11_worse=$_POST["z11_worse"];$z11_bad=$_POST["z11_bad"];$z11_common=$_POST["z11_common"];$z11_good=$_POST["z11_good"];$z11_better=$_POST["z11_better"];$z12_worse=$_POST["z12_worse"];$z12_bad=$_POST["z12_bad"];$z12_common=$_POST["z12_common"];$z12_good=$_POST["z12_good"];$z12_better=$_POST["z12_better"];
	$z8=$_POST["z8"];$z9=$_POST["z9"];$z10=$_POST["z10"];$z11=$_POST["z11"];$z12=$_POST["z12"];
	$z8_weight=$_POST["z8_weight"];$z9_weight=$_POST["z9_weight"];$z10_weight=$_POST["z10_weight"];$z11_weight=$_POST["z11_weight"];$z12_weight=$_POST["z12_weight"];

	$sql1="insert into $z8(company_name,number,weight,worse,bad,common,good,better) values('$company_name','$number','$z8_weight','$z8_worse','$z8_bad','$z8_common','$z8_good','$z8_better') ";
	mysql_query($sql1);
	$sql2="insert into $z9(company_name,number,weight,worse,bad,common,good,better) values('$company_name','$number','$z9_weight','$z9_worse','$z9_bad','$z9_common','$z9_good','$z9_better') ";
	mysql_query($sql2);
	$sql3="insert into $z10(company_name,number,weight,worse,bad,common,good,better) values('$company_name','$number','$z10_weight','$z10_worse','$z10_bad','$z10_common','$z10_good','$z10_better') ";
	mysql_query($sql3);
	$sql4="insert into $z11(company_name,number,weight,worse,bad,common,good,better) values('$company_name','$number','$z11_weight','$z11_worse','$z11_bad','$z11_common','$z11_good','$z11_better') ";
	mysql_query($sql4);
	$sql5="insert into $z12(company_name,number,weight,worse,bad,common,good,better) values('$company_name','$number','$z12_weight','$z12_worse','$z12_bad','$z12_common','$z12_good','$z12_better') ";
	mysql_query($sql5);

	echo "<script>javascript:alert('添加成功!');location.href='zhibiaoxinxi_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>指标信息</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
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
<p>添加指标信息： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.company_name.value==""){alert("请输入公司名称");document.form1.company_name.focus();return false;}if(document.form1.weight.value==""){alert("请输入权重");document.form1.weight.focus();return false;}if(document.form1.number.value==""){alert("请输入编号");document.form1.number.focus();return false;}if(document.form1.z8_worse.value==""){alert("请输入很差");document.form1.z8_worse.focus();return false;}if(document.form1.z8_bad.value==""){alert("请输入差");document.form1.z8_bad.focus();return false;}if(document.form1.z8_common.value==""){alert("请输入一般");document.form1.z8_common.focus();return false;}if(document.form1.z8_good.value==""){alert("请输入好");document.form1.z8_good.focus();return false;}if(document.form1.z8_better.value==""){alert("请输入很好");document.form1.z8_better.focus();return false;}if(document.form1.z9_worse.value==""){alert("请输入很差");document.form1.z9_worse.focus();return false;}if(document.form1.z9_bad.value==""){alert("请输入差");document.form1.z9_bad.focus();return false;}if(document.form1.z9_common.value==""){alert("请输入一般");document.form1.z9_common.focus();return false;}if(document.form1.z9_good.value==""){alert("请输入好");document.form1.z9_good.focus();return false;}if(document.form1.z9_better.value==""){alert("请输入很好");document.form1.z9_better.focus();return false;}if(document.form1.z10_worse.value==""){alert("请输入很差");document.form1.z10_worse.focus();return false;}if(document.form1.z10_bad.value==""){alert("请输入差");document.form1.z10_bad.focus();return false;}if(document.form1.z10_common.value==""){alert("请输入一般");document.form1.z10_common.focus();return false;}if(document.form1.z10_good.value==""){alert("请输入好");document.form1.z10_good.focus();return false;}if(document.form1.z10_better.value==""){alert("请输入很好");document.form1.z10_better.focus();return false;}if(document.form1.z11_worse.value==""){alert("请输入很差");document.form1.z11_worse.focus();return false;}if(document.form1.z11_bad.value==""){alert("请输入差");document.form1.z11_bad.focus();return false;}if(document.form1.z11_common.value==""){alert("请输入一般");document.form1.z11_common.focus();return false;}if(document.form1.z11_good.value==""){alert("请输入好");document.form1.z11_good.focus();return false;}if(document.form1.z11_better.value==""){alert("请输入很好");document.form1.z11_better.focus();return false;}if(document.form1.z12_worse.value==""){alert("请输入很差");document.form1.z12_worse.focus();return false;}if(document.form1.z12_bad.value==""){alert("请输入差");document.form1.z12_bad.focus();return false;}if(document.form1.z12_common.value==""){alert("请输入一般");document.form1.z12_common.focus();return false;}if(document.form1.z12_good.value==""){alert("请输入好");document.form1.z12_good.focus();return false;}if(document.form1.z12_better.value==""){alert("请输入很好");document.form1.z12_better.focus();return false;}if(document.form1.z8_weight.value==""){alert("请输入z8权重");document.form1.z8_weight.focus();return false;}if(document.form1.z9_weight.value==""){alert("请输入z9权重");document.form1.z9_weight.focus();return false;}if(document.form1.z10_weight.value==""){alert("请输入z10权重");document.form1.z10_weight.focus();return false;}if(document.form1.z11_weight.value==""){alert("请输入z11权重");document.form1.z11_weight.focus();return false;}if(document.form1.z12_weight.value==""){alert("请输入z12权重");document.form1.z12_weight.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="white" style="border-collapse:collapse">    
	<tr>
	<td>公司名称</td><td><input name='company_name' type='text' id='company_name' value='' size='9' />&nbsp;*</td>
	<td>编号</td><td><input name='number' type='text' id='number' value='' size='9' />&nbsp;*</td>
	</tr>
	<tr>
	<td>资金使用管理</td><td><input name='z8' type='text' id='z8' value='z8' size='9' />&nbsp;*</td>
	<td>权重</td><td><input name='z8_weight' type='text' id='z8_weight' value='0.1' size='9' />&nbsp;*</td>
	<td>很差</td><td><input name='z8_worse' type='text' id='z8_worse' value='' size='9' />&nbsp;*</td>
	<td>差</td><td><input name='z8_bad' type='text' id='z8_bad' value='' size='9' />&nbsp;*</td>
	<td>一般：</td><td><input name='z8_common' type='text' id='z8_common' value='' size='9' />&nbsp;*</td>
	<td>好：</td><td><input name='z8_good' type='text' id='z8_good' value='' size='9' />&nbsp;*</td>
	<td>很好：</td><td><input name='z8_better' type='text' id='z8_better' value='' size='9' />&nbsp;*</td>
	</tr>
	<tr>
	<td>基本建设程序管理</td><td><input name='z9' type='text' id='z9' value='z9' size='9' />&nbsp;*</td>
	<td>权重</td><td><input name='z9_weight' type='text' id='z9_weight' value='0.1' size='9' />&nbsp;*</td>
	<td>很差</td><td><input name='z9_worse' type='text' id='z9_worse' value='' size='9' />&nbsp;*</td>
	<td>差</td><td><input name='z9_bad' type='text' id='z9_bad' value='' size='9' />&nbsp;*</td>
	<td>一般：</td><td><input name='z9_common' type='text' id='z9_common' value='' size='9' />&nbsp;*</td>
	<td>好：</td><td><input name='z9_good' type='text' id='z9_good' value='' size='9' />&nbsp;*</td>
	<td>很好：</td><td><input name='z9_better' type='text' id='z9_better' value='' size='9' />&nbsp;*</td>
	</tr>

	<tr>
	<td>工程招标与发包</td><td><input name='z10' type='text' id='z10' value='z10' size='9' />&nbsp;*</td>
	<td>权重</td><td><input name='z10_weight' type='text' id='z10_weight' value='0.1' size='9' />&nbsp;*</td>
	<td>很差</td><td><input name='z10_worse' type='text' id='z10_worse' value='' size='9' />&nbsp;*</td>
	<td>差</td><td><input name='z10_bad' type='text' id='z10_bad' value='' size='9' />&nbsp;*</td>
	<td>一般：</td><td><input name='z10_common' type='text' id='z10_common' value='' size='9' />&nbsp;*</td>
	<td>好：</td><td><input name='z10_good' type='text' id='z10_good' value='' size='9' />&nbsp;*</td>
	<td>很好：</td><td><input name='z10_better' type='text' id='z10_better' value='' size='9' />&nbsp;*</td>
	</tr>

	<tr>
	<td>项目组织与协调</td><td><input name='z11' type='text' id='z11' value='z11' size='9' />&nbsp;*</td>
	<td>权重</td><td><input name='z11_weight' type='text' id='z11_weight' value='0.075' size='9' />&nbsp;*</td>
	<td>很差</td><td><input name='z11_worse' type='text' id='z11_worse' value='' size='9' />&nbsp;*</td>
	<td>差</td><td><input name='z11_bad' type='text' id='z11_bad' value='' size='9' />&nbsp;*</td>
	<td>一般：</td><td><input name='z11_common' type='text' id='z11_common' value='' size='9' />&nbsp;*</td>
	<td>好：</td><td><input name='z11_good' type='text' id='z11_good' value='' size='9' />&nbsp;*</td>
	<td>很好：</td><td><input name='z11_better' type='text' id='z11_better' value='' size='9' />&nbsp;*</td>
	</tr>

	<tr>
	<td>项目变更情况</td><td><input name='z12' type='text' id='z12' value='z12' size='9' />&nbsp;*</td>
	<td>权重</td><td><input name='z12_weight' type='text' id='z12_weight' value='0.075' size='9' />&nbsp;*</td>
	<td>很差</td><td><input name='z12_worse' type='text' id='z12_worse' value='' size='9' />&nbsp;*</td>
	<td>差</td><td><input name='z12_bad' type='text' id='z12_bad' value='' size='9' />&nbsp;*</td>
	<td>一般：</td><td><input name='z12_common' type='text' id='z12_common' value='' size='9' />&nbsp;*</td>
	<td>好：</td><td><input name='z12_good' type='text' id='z12_good' value='' size='9' />&nbsp;*</td>
	<td>很好：</td><td><input name='z12_better' type='text' id='z12_better' value='' size='9' />&nbsp;*</td>
	</tr>
    <tr>
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

