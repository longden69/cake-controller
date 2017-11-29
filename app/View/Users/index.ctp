<?php
echo "Xin chào cakephp 2.x"; ?>
<form action="http://localhost/cake-2-0/register" method="post">
	<div>
		<label>user name</label>
		<input type="text" name="username" id="username">
		<br>	
	</div>
	<div>
		<label>name</label>
		<input type="text" name="name" id="name">
		<br>	
	</div>
	<div>
		<label>email</label>
		<input type="text" name="email" id="email">
		<br>	
	</div>
	<div>
		<label>age</label>
		<input type="text" name="age" id="age">
		<br>	
	</div>
	<button type="submit">Click here</button>
</form>
<form action="http://localhost/cake-2-0/image" enctype="multipart/form-data" method="post">
	<input type="file" name="image">
	<input type="submit" name="submit" value="submit">
</form>
<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>user name</th>
		<th>email</th>
	</tr>
<?php
foreach ($data as $item) { ?>
	<tr>
		<td><?=$item['User']['id']?></td>
		<td><?=$item['User']['name']?></td>
		<td><?=$item['User']['username']?></td>
		<td><?=$item['User']['email']?></td>
	</tr>
<?php }
echo "</table>";
