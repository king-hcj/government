<?php 
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$company_name=$_POST["company_name"];$number=$_POST["number"];
	$sql_1="select * from jqzb where company_name='$company_name' and number = '$number'";
	$query_1=mysql_query($sql_1);
	$array_1=mysql_fetch_array($query_1);
	$sql_8="select * from z8 where company_name='$company_name' and number = '$number'";
	$query_8=mysql_query($sql_8);
	$array_8=mysql_fetch_array($query_8);
	$sql_9="select * from z9 where company_name='$company_name' and number = '$number'";
	$query_9=mysql_query($sql_9);
	$array_9=mysql_fetch_array($query_9);
	$sql_10="select * from z10 where company_name='$company_name' and number = '$number'";
	$query_10=mysql_query($sql_10);
	$array_10=mysql_fetch_array($query_10);
	$sql_11="select * from z11 where company_name='$company_name' and number = '$number'";
	$query_11=mysql_query($sql_11);
	$array_11=mysql_fetch_array($query_11);
	$sql_12="select * from z12 where company_name='$company_name' and number = '$number'";
	$query_12=mysql_query($sql_12);
	$array_12=mysql_fetch_array($query_12);
	$z8_worse=$array_8['worse'];
	$z8_bad=$array_8['bad'];
	$z8_common=$array_8['common'];
	$z8_good=$array_8['good'];
	$z8_better=$array_8['better'];

	$z9_worse=$array_9['worse'];
	$z9_bad=$array_9['bad'];
	$z9_common=$array_9['common'];
	$z9_good=$array_9['good'];
	$z9_better=$array_9['better'];

	$z10_worse=$array_10['worse'];
	$z10_bad=$array_10['bad'];
	$z10_common=$array_10['common'];
	$z10_good=$array_10['good'];
	$z10_better=$array_10['better'];

	$z11_worse=$array_11['worse'];
	$z11_bad=$array_11['bad'];
	$z11_common=$array_11['common'];
	$z11_good=$array_11['good'];
	$z11_better=$array_11['better'];

	$z12_worse=$array_12['worse'];
	$z12_bad=$array_12['bad'];
	$z12_common=$array_12['common'];
	$z12_good=$array_12['good'];
	$z12_better=$array_12['better'];



	//计算max z8
	$myfile = fopen("test.R", "w") or die("Unable to open file!");
	$txt1 = "library(lpSolve)\n";
	$txt2 = "f.obj <- c(0, 0, 0, $z8_good,$z8_better)\n";
	$txt3 = "f.con <- matrix(c($z8_worse, $z8_bad, $z8_common, -$z8_good, -$z8_better, $z9_worse, $z9_bad, $z9_common, -$z9_good, -$z9_better, $z10_worse, $z10_bad, $z10_common, -$z10_good, -$z10_better, $z11_worse, $z11_bad, $z11_common, -$z11_good, -$z11_better, $z12_worse, $z12_bad, $z12_common, -$z12_good, -$z12_better, 0.0, 0.1, 0.3, 0.0, 0.0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1 ), nrow = 11, byrow = TRUE )\n";
	$txt4 = "f.dir <- c('>=', '>=', '>=', '>=', '>=', '=', '>=', '>=', '>=', '>=', '>=')\n";
	$txt5 = "f.rhs <- c(0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0)\n";
	$txt6 = "lp.result <- lp('max', f.obj, f.con, f.dir, f.rhs)\n";
	$txt7 = "lp.result";
	fwrite($myfile, $txt1);
	fwrite($myfile, $txt2);
	fwrite($myfile, $txt3);
	fwrite($myfile, $txt4);
	fwrite($myfile, $txt5);
	fwrite($myfile, $txt6);
	fwrite($myfile, $txt7);
	fclose($myfile);
	$commond="D:\Program Files\R\R-3.2.3\bin\\x64\R.exe --vanilla < test.R > out.txt";
	system($commond);
	$ans = file('out.txt');
	//echo $ans[24];
	$arr = explode(" ", $ans[24]);
	$max_z8 = $arr[5];
	//计算max z9
	$myfile = fopen("test.R", "w") or die("Unable to open file!");
	$txt1 = "library(lpSolve)\n";
	$txt2 = "f.obj <- c(0, 0, 0, $z9_good,$z9_better)\n";
	$txt3 = "f.con <- matrix(c($z8_worse, $z8_bad, $z8_common, -$z8_good, -$z8_better, $z9_worse, $z9_bad, $z9_common, -$z9_good, -$z9_better, $z10_worse, $z10_bad, $z10_common, -$z10_good, -$z10_better, $z11_worse, $z11_bad, $z11_common, -$z11_good, -$z11_better, $z12_worse, $z12_bad, $z12_common, -$z12_good, -$z12_better, 0.0, 0.1, 0.3, 0.0, 0.0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1 ), nrow = 11, byrow = TRUE )\n";
	$txt4 = "f.dir <- c('>=', '>=', '>=', '>=', '>=', '=', '>=', '>=', '>=', '>=', '>=')\n";
	$txt5 = "f.rhs <- c(0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0)\n";
	$txt6 = "lp.result <- lp('max', f.obj, f.con, f.dir, f.rhs)\n";
	$txt7 = "lp.result";
	fwrite($myfile, $txt1);
	fwrite($myfile, $txt2);
	fwrite($myfile, $txt3);
	fwrite($myfile, $txt4);
	fwrite($myfile, $txt5);
	fwrite($myfile, $txt6);
	fwrite($myfile, $txt7);
	fclose($myfile);
	$commond="D:\Program Files\R\R-3.2.3\bin\\x64\R.exe --vanilla < test.R > out.txt";
	system($commond);
	$ans = file('out.txt');
	//echo $ans[24];
	$arr = explode(" ", $ans[24]);
	$max_z9 = $arr[5];
	//echo $max_z9.'<br />';
	
	//计算max z10
	$myfile = fopen("test.R", "w") or die("Unable to open file!");
	$txt1 = "library(lpSolve)\n";
	$txt2 = "f.obj <- c(0, 0, 0, $z10_good,$z10_better)\n";
	$txt3 = "f.con <- matrix(c($z8_worse, $z8_bad, $z8_common, -$z8_good, -$z8_better, $z9_worse, $z9_bad, $z9_common, -$z9_good, -$z9_better, $z10_worse, $z10_bad, $z10_common, -$z10_good, -$z10_better, $z11_worse, $z11_bad, $z11_common, -$z11_good, -$z11_better, $z12_worse, $z12_bad, $z12_common, -$z12_good, -$z12_better, 0.0, 0.1, 0.3, 0.0, 0.0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1 ), nrow = 11, byrow = TRUE )\n";
	$txt4 = "f.dir <- c('>=', '>=', '>=', '>=', '>=', '=', '>=', '>=', '>=', '>=', '>=')\n";
	$txt5 = "f.rhs <- c(0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0)\n";
	$txt6 = "lp.result <- lp('max', f.obj, f.con, f.dir, f.rhs)\n";
	$txt7 = "lp.result";
	fwrite($myfile, $txt1);
	fwrite($myfile, $txt2);
	fwrite($myfile, $txt3);
	fwrite($myfile, $txt4);
	fwrite($myfile, $txt5);
	fwrite($myfile, $txt6);
	fwrite($myfile, $txt7);
	fclose($myfile);
	$commond="D:\Program Files\R\R-3.2.3\bin\\x64\R.exe --vanilla < test.R > out.txt";
	system($commond);
	$ans = file('out.txt');
	//echo $ans[24];
	$arr = explode(" ", $ans[24]);
	$max_z10 = $arr[5];
	//echo $max_z10.'<br />';
	
	//计算max z11
	$myfile = fopen("test.R", "w") or die("Unable to open file!");
	$txt1 = "library(lpSolve)\n";
	$txt2 = "f.obj <- c(0, 0, 0, $z11_good,$z11_better)\n";
	$txt3 = "f.con <- matrix(c($z8_worse, $z8_bad, $z8_common, -$z8_good, -$z8_better, $z9_worse, $z9_bad, $z9_common, -$z9_good, -$z9_better, $z10_worse, $z10_bad, $z10_common, -$z10_good, -$z10_better, $z11_worse, $z11_bad, $z11_common, -$z11_good, -$z11_better, $z12_worse, $z12_bad, $z12_common, -$z12_good, -$z12_better, 0.0, 0.1, 0.3, 0.0, 0.0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1 ), nrow = 11, byrow = TRUE )\n";
	$txt4 = "f.dir <- c('>=', '>=', '>=', '>=', '>=', '=', '>=', '>=', '>=', '>=', '>=')\n";
	$txt5 = "f.rhs <- c(0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0)\n";
	$txt6 = "lp.result <- lp('max', f.obj, f.con, f.dir, f.rhs)\n";
	$txt7 = "lp.result";
	fwrite($myfile, $txt1);
	fwrite($myfile, $txt2);
	fwrite($myfile, $txt3);
	fwrite($myfile, $txt4);
	fwrite($myfile, $txt5);
	fwrite($myfile, $txt6);
	fwrite($myfile, $txt7);
	fclose($myfile);
	$commond="D:\Program Files\R\R-3.2.3\bin\\x64\R.exe --vanilla < test.R > out.txt";
	system($commond);
	$ans = file('out.txt');
	//echo $ans[24];
	$arr = explode(" ", $ans[24]);
	$max_z11 = $arr[5];
	//echo $max_z11.'<br />';
	
	//计算max z12
	$myfile = fopen("test.R", "w") or die("Unable to open file!");
	$txt1 = "library(lpSolve)\n";
	$txt2 = "f.obj <- c(0, 0, 0, $z12_good,$z12_better)\n";
	$txt3 = "f.con <- matrix(c($z8_worse, $z8_bad, $z8_common, -$z8_good, -$z8_better, $z9_worse, $z9_bad, $z9_common, -$z9_good, -$z9_better, $z10_worse, $z10_bad, $z10_common, -$z10_good, -$z10_better, $z11_worse, $z11_bad, $z11_common, -$z11_good, -$z11_better, $z12_worse, $z12_bad, $z12_common, -$z12_good, -$z12_better, 0.0, 0.1, 0.3, 0.0, 0.0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1 ), nrow = 11, byrow = TRUE )\n";
	$txt4 = "f.dir <- c('>=', '>=', '>=', '>=', '>=', '=', '>=', '>=', '>=', '>=', '>=')\n";
	$txt5 = "f.rhs <- c(0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0)\n";
	$txt6 = "lp.result <- lp('max', f.obj, f.con, f.dir, f.rhs)\n";
	$txt7 = "lp.result";
	fwrite($myfile, $txt1);
	fwrite($myfile, $txt2);
	fwrite($myfile, $txt3);
	fwrite($myfile, $txt4);
	fwrite($myfile, $txt5);
	fwrite($myfile, $txt6);
	fwrite($myfile, $txt7);
	fclose($myfile);
	$commond="D:\Program Files\R\R-3.2.3\bin\\x64\R.exe --vanilla < test.R > out.txt";
	system($commond);
	$ans = file('out.txt');
	//echo $ans[24];
	$arr = explode(" ", $ans[24]);
	$max_z12 = $arr[5];
	//echo $max_z12.'<br />';

	$myfile = fopen("cal.R", "w") or die("Unable to open file!");
	$txt2 = "A <- matrix(c($z8, $z9, $z10, $z11, $z11, $z1, $z2, $z3, $z4, $z5, $z6, $z7))\n";
	$txt3 = "A <- t(A)\n";
	$txt4 = "B <- matrix(c($max_z8, $max_z9, $max_z10, $max_z11, $max_z12, $g1, $g2, $g3, $g4, $g5, $g6, $g7))\n";
	$txt5 = "solution <- A %*% B\n";
	$txt6 = "solution";
	fwrite($myfile, $txt2);
	fwrite($myfile, $txt3);
	fwrite($myfile, $txt4);
	fwrite($myfile, $txt5);
	fwrite($myfile, $txt6);
	fclose($myfile);
	$commond="D:\Program Files\R\R-3.2.3\bin\\x64\R.exe < cal.R > cal.txt";
	system($commond);
	$ans = file('cal.txt');
	$arr = explode(" ", $ans[23]);
	$solution = $arr[1];
	$score=$array_1['z1']*$array_1['z1_weight']+$array_1['z2']*$array_1['z2_weight']+$array_1['z3']*$array_1['z3_weight']+$array_1['z4']*$array_1['z4_weight']+$array_1['z5']*$array_1['z5_weight']+$array_1['z6']*$array_1['z6_weight']+$array_1['z7']*$array_1['z7_weight']+$max_8*$array_8['weight']+$max_9*$array_9['weight']+$max_10*$array_10['weight']+$max_11*$array_11['weight']+$max_12*$array_12['weight'];

	echo  $max_8;
	echo  $max_9;

	$sql="insert into jieguo(company_name,number,score) values('$company_name','$number','$score') ";
	mysql_query($sql);
	echo "<script>javascript:alert('计算结果：$score');location.href='jieguo_add.php';</script>";
	//echo "<script>javascript:alert('计算结果：$max_z8 ');location.href='jieguo_add.php';</script>";



}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>代建结果</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>
<p>最终得分计算： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.company_name.value==""){alert("请输入公司名称");document.form1.company_name.focus();return false;}if(document.form1.number.value==""){alert("请输入编号");document.form1.number.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.asp?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="white" style="border-collapse:collapse">    
  公司名称:
  <input name="company_name" type="text" id="company_name" />
  编号:
  <input name="number" type="text" id="number" />

    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="计算" onclick="return check();" />
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

