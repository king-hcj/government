 
     
      <ul class="style3">
        <li class="first">
         <?php 
					if ($_SESSION['cx']=="" )
					{
				?>
                           
                              <table width="100%" height="68%" bgcolor="#d76017" border="0" cellpadding="0" cellspacing="0"> <form action="userlog_post.php" method="post" name="userlog" id="userlog">
							  
							   <tr>
                                  <td width="12" height="34">&nbsp;</td>
                                  <td width="49"> 用户登录</td>
                                  <td width="109">&nbsp; </td>
                                </tr>
                                <tr>
                                  <td width="12" height="34">&nbsp;</td>
                                  <td width="49">用户名:</td>
                                  <td width="109"><input name="username" type="text" id="username" size="12" style="width:100px; height:16px; border:solid 1px #000000; color:#666666" /></td>
                                </tr>
                                <tr>
                                  <td height="26">&nbsp;</td>
                                  <td>密码:</td>
                                  <td><input name="pwd1" type="password" id="pwd1" size="12" style="width:100px; height:16px; border:solid 1px #000000; color:#666666" /></td>
                                </tr>
								<tr style="display:none">
                                  <td height="26">&nbsp;</td>
                                  <td>权限:</td>
                                  <td><select name="cx" id="cx" style="width:100px; height:16px; border:solid 1px #000000; color:#666666">
                                    <option value="会员">会员</option>
                                     
                                  </select>
                                  </td>
								</tr>
                                <tr>
                                  <td height="38" colspan="3" align="center"><input type="submit" name="Submit" value="登陆" style=" height:19px; border:solid 1px #000000; color:#666666" />
                                      <input type="reset" name="Submit2" value="重置" style=" height:19px; border:solid 1px #000000; color:#666666" />
                                      <a  href="userreg.php">注册</a></td>
                                </tr> </form>
                              </table>
                           
                            <?php 
							}
				  else
				  {
				 ?>
                            <table  bgcolor="#d76017" width="100%" height="200" border="0" bgcolor="" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td align="left">当前用户：<?php echo $_SESSION['username']?></td>
                              </tr>
                              <tr>
                                <td align="left">您的权限：<?php echo $_SESSION['cx']?></td>
                              </tr>
                              <tr>
                                <td align="left">欢迎您的到来!!!</td>
                              </tr>
                              <tr>
                                <td align="center"><input type="button" name="Submit3" value="退出" onclick="javascript:location.href='logout.php';" style=" height:19px; border:solid 1px #000000; color:#666666" />
                                    <input type="button" name="Submit22" value="个人后台" onclick="javascript:location.href='main.php';" style=" height:19px; border:solid 1px #000000; color:#666666" /></td>
                              </tr>
                            </table>
                          <?php } ?>
        </li>
        
      </ul>
 