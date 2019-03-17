<table>
	<tr>
		<th>User id</th>
		<th>Answer</th>
		<th>Action</th>
	</tr>
	<?php
			include 'db.php';
			$result=mysqli_query($con,"select user_id,security_question,answer from user_master");
			while($arr=mysqli_fetch_assoc($result)):
	?>
	<form method="get" action="manage.php">
	<tr>
		<td><?php echo $arr["user_id"]; ?></td>
		<td><?php echo $arr["answer"]; ?></td>
		<td>
			<input type="hidden" name="user_id" value="<?php echo $arr["user_id"]; ?>"></input>
			<input type="submit" value="Delete" name="b1"></input>
			<input type="submit" value="Edit" name="b1"></input>
		</td>

	</tr>
	</form>
<?php endwhile; ?>
</table>