<?php /* Smarty version 2.6.27, created on 2020-05-05 09:35:03
         compiled from japanese/searchpast.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_select_date', 'japanese/searchpast.tpl', 27, false),array('modifier', 'date_format', 'japanese/searchpast.tpl', 63, false),)), $this); ?>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" bgColor="#e2e2e2" height="26">&nbsp;&nbsp;<b>過去の記事</b></td>
								<td align="right" width="398" bgColor="#e2e2e2"></td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
						</table>
						<table cellSpacing="0" cellPadding="0" width="558" bgColor="#ffffff" border="0">
							<tr>
								<td align="center" width="558" height="20">
									<font color="#818181">
										記事の種類、日付を選択してください。
									</font>
								</td>
							</tr>
							<tr>
								<td align="center" width="558" height="40">
									<select name="ddlMedia" id="ddlMedia">
										<option <?php if ($this->_tpl_vars['form']['ddlMedia'] == '0'): ?>selected="selected"<?php endif; ?> value="0">すべて</option>
										<?php $_from = $this->_tpl_vars['app']['mediaList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
											<option <?php if ($this->_tpl_vars['form']['ddlMedia'] == $this->_tpl_vars['val']['MediaID']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['val']['MediaID']; ?>
"><?php echo $this->_tpl_vars['val']['MediaNameJpn']; ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
									</select>
									&nbsp;
									<?php echo smarty_function_html_select_date(array('prefix' => 'ddl','field_order' => 'Y','start_year' => "+0",'end_year' => '1953','time' => $this->_tpl_vars['app']['selectedDate'],'reverse_years' => true,'year_extra' => 'style="height:24px;width:70px;"'), $this);?>
年
									<?php echo smarty_function_html_select_date(array('prefix' => 'ddl','field_order' => 'M','start_year' => "+0",'end_year' => "+0",'time' => $this->_tpl_vars['app']['selectedDate'],'month_format' => "%m",'month_extra' => 'style="height:24px;width:48px;"'), $this);?>
月
									<?php echo smarty_function_html_select_date(array('prefix' => 'ddl','field_order' => 'D','start_year' => "+0",'end_year' => "+0",'time' => $this->_tpl_vars['app']['selectedDate'],'day_extra' => 'style="height:24px;width:50px;"'), $this);?>
日
									<input type="image" name="imgbtnSearch" id="imgbtnSearch" align="absmiddle" src="/images/btn_search.gif" style="border-width:0px;" />
								</td>
							</tr>
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td>
									<?php if ($this->_tpl_vars['form']['ddlMedia'] != ""): ?>
										※ 検索結果 : <FONT color="#cc0000"><?php echo $this->_tpl_vars['app']['articleList']['allListCnt']; ?>
</FONT>件の記事が見つかりました
									<?php endif; ?>
								</td>
							</tr>
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td bgColor="#c6c6c6" height="1"></td>
							</tr>
							<tr>
								<td height="7"></td>
							</tr>
							<tr>
								<td>
									<table class="box" cellspacing="0" border="0" id="DataGrid1" style="width:100%;border-collapse:collapse;">
										<?php $_from = $this->_tpl_vars['app']['articleList']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
										<tr>
											<td align="left">
												ㆍ <a href='/japanese/viewarticle?ArticleID=<?php echo $this->_tpl_vars['val']['ArticleID']; ?>
'>
													<?php echo $this->_tpl_vars['val']['Title']; ?>

												</a>
											</td>
											<td align="right" valign="top" style="width:150px;">
												<?php echo ((is_array($_tmp=$this->_tpl_vars['val']['JunsongDateTime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%m-%d %H:%M")); ?>

											</td>
										</tr>
										<?php endforeach; endif; unset($_from); ?>

										<tr align="center" valign="bottom" style="color:#003296;height:30px;">
											<td colspan="3">
												<?php $_from = $this->_tpl_vars['app']['pager']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>
													<?php if ($this->_tpl_vars['page']['offset'] == $this->_tpl_vars['app']['current']): ?>
														<strong><?php echo $this->_tpl_vars['page']['index']; ?>
</strong>
													<?php else: ?>
														<a href="<?php echo $this->_tpl_vars['app']['link']; ?>
?ddlMedia=<?php echo $this->_tpl_vars['form']['ddlMedia']; ?>
&ddlYear=<?php echo $this->_tpl_vars['form']['ddlYear']; ?>
&ddlMonth=<?php echo $this->_tpl_vars['form']['ddlMonth']; ?>
&ddlDay=<?php echo $this->_tpl_vars['form']['ddlDay']; ?>
&offset=<?php echo $this->_tpl_vars['page']['offset']; ?>
"><?php echo $this->_tpl_vars['page']['index']; ?>
</a>
													<?php endif; ?>
													&nbsp;
												<?php endforeach; endif; unset($_from); ?>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
							<tr>
								<td>&nbsp;&nbsp;<A class="branch_a" href="javascript:history.back();">← Back</A></td>
								<td align="right"><A class="branch_a" href="#t">↑ Top</A>&nbsp;&nbsp;</td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
						</table>