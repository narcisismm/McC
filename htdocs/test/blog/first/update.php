<?php
session_start();
include('conn.php');
//_session[contentid]=3
$contentId=$_GET['contentId'];
$sql=mysqli_query($conn,"select * from contents where contentId='$contentId'");
$row=mysqli_fetch_object($sql);
?>
<script language="javascript">

</script>
<form method="post" action="update_ok.php" name="form1">
	<table border="0" width="600" height="300">
		<tr>
			<td width="100" align="center">修改内容：</td>
			<td width="550" height="250"><textarea name="pastnews_text" id="pastnews_text"   style="width: 300px"><?php echo $row->content;?></textarea><input name="contentId" type="hidden" value="<?php echo $row->contentId;?>"></td>
		</tr>
		<tr>
			<td height="40" align="center" colspan="2">
			<input type="submit" name="submit" id="submit" value="修改"  >
			<input type="reset" name="reset" value="重置">
			</td>
		</tr>
	</table>
</form>
