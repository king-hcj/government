<?php 
include_once 'conn.php';
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>模糊指标信息</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有指标信息列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索:
  公司名称:
  <input name="company_name" type="text" id="company_name" />
  编号:
  <input name="number" type="text" id="number" />
  <input type="submit" name="Submit" value="查找" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="white" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#EBE2FE">序号</td>
    <td bgcolor='#EBE2FE'>编号</td><td bgcolor='#EBE2FE'>公司名称</td><td bgcolor='#EBE2FE'>指标</td><td bgcolor='#EBE2FE'>权重</td><td bgcolor='#EBE2FE'>很差</td><td bgcolor='#EBE2FE'>差</td><td bgcolor='#EBE2FE'>一般</td><td bgcolor='#EBE2FE'>好</td><td bgcolor='#EBE2FE'>很好</td>
    <td width="120" align="center" bgcolor="#EBE2FE">添加时间</td>
    <!--<td width="70" align="center" bgcolor="#EBE2FE">操作</td>-->
  </tr>
  <?php 
  
    $sql1="select * from z8 where 1=1   ";
     if ($_POST["company_name"]!="")
{
  	$nreqcompany_name=$_POST["company_name"];
  	$sql1=$sql1." and company_name like '%$nreqcompany_name%'";
}
  if ($_POST["number"]!="")
{
  	$nreqnumber=$_POST["number"];
  	$sql1=$sql1." and number like '%$nreqnumber%'";
}

  $sql1=$sql1." order by number desc";
  $query1=mysql_query($sql1);

	$sql2="select * from z9 where 1=1   ";
     if ($_POST["company_name"]!="")
{
  	$nreqcompany_name=$_POST["company_name"];
  	$sql2=$sql2." and company_name like '%$nreqcompany_name%'";
}
if ($_POST["number"]!="")
{
  	$nreqnumber=$_POST["number"];
  	$sql2=$sql2." and number like '%$nreqnumber%'";
}
  $sql2=$sql2." order by number desc";
  $query2=mysql_query($sql2);

    $sql3="select * from z10 where 1=1   ";
     if ($_POST["company_name"]!="")
{
  	$nreqcompany_name=$_POST["company_name"];
  	$sql3=$sql3." and company_name like '%$nreqcompany_name%'";
}
if ($_POST["number"]!="")
{
  	$nreqnumber=$_POST["number"];
  	$sql3=$sql3." and number like '%$nreqnumber%'";
}
  $sql3=$sql3." order by number desc";
  $query3=mysql_query($sql3);
    $sql4="select * from z11 where 1=1   ";
     if ($_POST["company_name"]!="")
{
  	$nreqcompany_name=$_POST["company_name"];
  	$sql4=$sql4." and company_name like '%$nreqcompany_name%'";
}
if ($_POST["number"]!="")
{
  	$nreqnumber=$_POST["number"];
  	$sql4=$sql4." and number like '%$nreqnumber%'";
}
  $sql4=$sql4." order by number desc";
  $query4=mysql_query($sql4);
    $sql5="select * from z12 where 1=1   ";
     if ($_POST["company_name"]!="")
{
  	$nreqcompany_name=$_POST["company_name"];
  	$sql5=$sql5." and company_name like '%$nreqcompany_name%'";
}
if ($_POST["number"]!="")
{
  	$nreqnumber=$_POST["number"];
  	$sql5=$sql5." and number like '%$nreqnumber%'";
}
  $sql5=$sql5." order by number desc";
  $query5=mysql_query($sql5);
 $rowscount=mysql_num_rows($query1);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每页行数；
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
  ?>

	<tr>
    <td width="25"><?php echo '1';?></td>
    <td><?php echo mysql_result($query1,$i,number);?></td><td><?php echo mysql_result($query1,$i,company_name);?></td>
	<td><?php echo 'z8';?></td>
	<td><?php echo mysql_result($query1,$i,weight);?></td>
	<td><?php echo mysql_result($query1,$i,worse);?></td>
	<td><?php echo mysql_result($query1,$i,bad);?></td>
	<td><?php echo mysql_result($query1,$i,common);?></td>
	<td><?php echo mysql_result($query1,$i,good);?></td>
	<td><?php echo mysql_result($query1,$i,better);?></td>
    <td width="120" align="center"><?php echo mysql_result($query1,$i,addtime);?></td>
  </tr>
    <tr>
    <td width="25"><?php echo '2';?></td>
    <td><?php echo mysql_result($query2,$i,number);?></td><td><?php echo mysql_result($query2,$i,company_name);?></td>
	<td><?php echo 'z9';?></td>
	</td><td><?php echo mysql_result($query2,$i,weight);?></td>
	<td><?php echo mysql_result($query2,$i,worse);?></td>
	<td><?php echo mysql_result($query2,$i,bad);?></td>
	<td><?php echo mysql_result($query2,$i,common);?></td>
	<td><?php echo mysql_result($query2,$i,good);?></td>
	<td><?php echo mysql_result($query2,$i,better);?></td>
    <td width="120" align="center"><?php echo mysql_result($query2,$i,addtime);?></td>
  </tr>
  <tr>
    <td width="25"><?php echo '3';?></td>
    <td><?php echo mysql_result($query3,$i,number);?></td><td><?php echo mysql_result($query3,$i,company_name);?></td>
	<td><?php echo 'z10';?></td>
	</td><td><?php echo mysql_result($query3,$i,weight);?></td>
	<td><?php echo mysql_result($query3,$i,worse);?></td>
	<td><?php echo mysql_result($query3,$i,bad);?></td>
	<td><?php echo mysql_result($query3,$i,common);?></td>
	<td><?php echo mysql_result($query3,$i,good);?></td>
	<td><?php echo mysql_result($query3,$i,better);?></td>
    <td width="120" align="center"><?php echo mysql_result($query3,$i,addtime);?></td>
  </tr>
    <tr>
    <td width="25"><?php echo '4';?></td>
    <td><?php echo mysql_result($query4,$i,number);?></td><td><?php echo mysql_result($query4,$i,company_name);?></td>
	<td><?php echo 'z11';?></td>
	</td><td><?php echo mysql_result($query4,$i,weight);?></td>
	<td><?php echo mysql_result($query4,$i,worse);?></td>
	<td><?php echo mysql_result($query4,$i,bad);?></td>
	<td><?php echo mysql_result($query4,$i,common);?></td>
	<td><?php echo mysql_result($query4,$i,good);?></td>
	<td><?php echo mysql_result($query4,$i,better);?></td>
    <td width="120" align="center"><?php echo mysql_result($query4,$i,addtime);?></td>
  </tr>
  <tr>
    <td width="25"><?php echo '5';?></td>
    <td><?php echo mysql_result($query5,$i,number);?></td><td><?php echo mysql_result($query5,$i,company_name);?></td>
	<td><?php echo 'z12';?></td>
	</td><td><?php echo mysql_result($query5,$i,weight);?></td>
	<td><?php echo mysql_result($query5,$i,worse);?></td>
	<td><?php echo mysql_result($query5,$i,bad);?></td>
	<td><?php echo mysql_result($query5,$i,common);?></td>
	<td><?php echo mysql_result($query5,$i,good);?></td>
	<td><?php echo mysql_result($query5,$i,better);?></td>
    <td width="120" align="center"><?php echo mysql_result($query5,$i,addtime);?></td>

    <!--<td width="70" align="center"><a href="del.php?id=<?php	echo mysql_result($query5,$i,"number");
	?>&tablename=zhibiaoxinxi" onclick="return confirm('真的要删除？')">删除</a> <a href="zhibiaoxinxi_updt.php?id=<?php
		echo mysql_result($query5,$i,"number");?>">修改</a></td>-->
  </tr>


  	<?php
	}
}
?>
</table>
<p>以上数据共<?php
		echo $rowscount;
	?>条,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" />
</p>
<p align="center"><a href="zhibiaoxinxi_list.php?pagecurrent=1">首页</a>, <a href="zhibiaoxinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="zhibiaoxinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="zhibiaoxinxi_list.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

<p>&nbsp; </p>

</body>
</html>

