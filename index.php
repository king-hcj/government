<?php
session_start();
include_once 'conn.php';
?>
<html>
<head>
<title>政府代建单位绩效评估考核系统</title><LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
.STYLE1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="969"   border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'qttop.php';?>
				
		<br>
		<?php 
					  $sql="select * from dx where leibie='系统公告'";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					   
					  	}
						?>
		
		
		</td>
	</tr>
	<tr>
		<td><table id="__01" width="969"   border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="244" valign="top">
<?php include_once 'qtleft.php';?></td>
            <td width="725" valign="top"><table id="__01" width="725"  border="0" cellpadding="0" cellspacing="0">
          
			  
			  
			  
			  
			       <tr>
                    <td width="725" height="42"  bgcolor="#d76017"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="17%" align="center" class="title"> 欢迎，政府代建单位绩效评估考核系统</td>
                        <td width="83%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
              <tr>
                <td> </td>
              </tr>
			  
			      <tr>
                <td valign="top"><table id="__01" width="758" height="258" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="758" height="42"  bgcolor="#d76017"></td>
                  </tr>
                  <tr>
                    <td  >&nbsp; <span class="STYLE1">政府代建单位绩效评估考核系统</span></td>
                  </tr>
                  <tr>
                    <td>&nbsp; </td>
                  </tr>
                </table></td>
              </tr>
			  
               
            </table></td>
          </tr>
        </table></td>
	</tr>
	<tr>
		<td><?php include_once 'qtdown.php';?></td>
	</tr>
</table>
</body>
</html>
