<?php /* Smarty version 2.6.27, created on 2020-05-01 15:55:22
         compiled from japanese/include/right.tpl */ ?>
<table cellSpacing="0" cellPadding="0" width="212" border="0">
	<tr>
		<td width="212" height="37">
			<table cellSpacing="0" cellPadding="0" width="212" border="0">
				<tr>
					<td width="212" height="6"><img src="/images/bg_search_top.gif" width="212" height="6"></td>
				</tr>
				<tr>
					<td width="212" height="25" bgcolor="#408080" align="center" valign="middle">
						<a href="/japanese/search">
							<img border="0" src="/images/btn_search_big.gif">
						</a>
					</td>
				</tr>
				<tr>
					<td width="212" height="6"><img src="/images/bg_search_bottom.gif" width="212" height="6"></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td height="10"></td>
	</tr>
</table>

<TABLE cellSpacing="0" cellPadding="0" width="212" align="center" border="0">
	<TR>
		<TD width="212"><A href="/japanese/listphoto"><IMG height="24" src="/images/bar_r_photo.gif" width="212" border="0"></A></TD>
	</TR>
	<TR>
		<TD bgColor="#c6c6c6" height="2"></TD>
	</TR>
	<TR>
		<TD align="center" bgColor="#c6c6c6">
			<TABLE cellSpacing="0" cellPadding="0" width="200" border="0">
				<?php $_from = $this->_tpl_vars['app']['photoList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
					<tr>
						<td width="192">
							<a href="#" onclick='popup_photo(<?php echo $this->_tpl_vars['val']['mmFileID']; ?>
)'><img src='<?php echo $this->_tpl_vars['val']['Location_Thumb']; ?>
' border="1" align=left vspace="5" style="border-color:black"></a>
						</td>
					</tr>
					<tr>
						<td height="28">
							<font style="font-size:8pt;"><a href="#" onclick='popup_photo(<?php echo $this->_tpl_vars['val']['mmFileID']; ?>
)' class="branch_a">
									▶
									<?php echo $this->_tpl_vars['val']['TitleJpn']; ?>

								</a></font>
						</td>
					</tr>
				<?php endforeach; endif; unset($_from); ?>
			</TABLE>
		</TD>
	</TR>
	<TR>
		<TD height="10"></TD>
	</TR>
</TABLE>

<TABLE cellSpacing="0" cellPadding="0" width="212" align="center" border="0">
	<tr>
		<td><b><A href="/japanese/listetc?ID=109&amp;chk_etc=section&amp;lvl=1"><IMG height="23" src="/images/bar_r_interview_j.gif" width="212" border="0"></A></b></td>
	</tr>
	<tr>
		<td height="4"></td>
	</tr>
	<tr>
		<td align="center">
			<table cellSpacing="0" cellPadding="0" width="212" border="0">
				<tr>
					<td width="212" bgColor="#c6c6c6" colSpan="6" height="1"></td>
				</tr>
				<tr>
					<td width="1" bgColor="#c6c6c6" height="8"></td>
					<td width="210" colSpan="4"></td>
					<td width="1" bgColor="#c6c6c6"></td>
				</tr>

				<?php $_from = $this->_tpl_vars['app']['interviewList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
					<tr>
						<td width="1" bgColor="#C6C6C6"></td>
						<td width="3"></td>
						<td width="10" valign="top">ㆍ</td>
						<td width="190" valign="top"><a href='/viewarticle?ArticleID=<?php echo $this->_tpl_vars['val']['ArticleID']; ?>
'><?php echo $this->_tpl_vars['val']['Title']; ?>
</a></td>
						<td width="7"></td>
						<td width="1" bgColor="#C6C6C6"></td>
					</tr>
					<tr>
						<td width="1" bgColor="#C6C6C6" height="3"></td>
						<td width="210" colspan="4"></td>
						<td width="1" bgColor="#C6C6C6"></td>
					</tr>
				<?php endforeach; endif; unset($_from); ?>
				
				<tr>
					<td width="1" bgColor="#c6c6c6" height="5"></td>
					<td width="210" colSpan="4"></td>
					<td width="1" bgColor="#c6c6c6"></td>
				</tr>
				<tr>
					<td bgColor="#c6c6c6" colSpan="6" height="1"></td>
				</tr>
			</table>
		</td>
	</tr>
</TABLE>