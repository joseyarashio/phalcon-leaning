
<h1>User.volt</h1>
<!--print $single data-->
<?php if ($single) { ?>
	<table border="1">
	<thead><tr><td>id</td><td>email</td><td>created at</td><td>updated at</td></tr></thead>
	<tbody>
	<tr>
	<td><?php echo $single->id; ?></td>
	<td><?php echo $single->email; ?></td>
	<td><?php echo $single->created_at; ?></td>
	<td><?php echo $single->updated_at; ?></td>
	</tr>
	</tbody>
	</table>
<?php } ?>

<hr/>
<?php foreach ($single->project as $p) { ?>
	<?php echo $p->id; ?>
	<?php echo $p->title; ?>
<?php } ?>

<hr/>
<!--print all users data-->
<table border="">
<thead><tr><td>id</td><td>email</td><td>created at</td><td>updated at</td></tr></thead>
<tbody>
	<?php foreach ($all as $user) { ?>
		<tr>
		<td><?php echo $user->id; ?></td>
		<td><?php echo $user->email; ?></td>
		<td><?php echo $user->created_at; ?></td>
		<td><?php echo $user->updated_at; ?></td>
		</tr>
	<?php } ?>
</tbody>
</table>
<hr/>
<?php $first = $all->getFirst()->toArray(); ?>
<?php echo $first; ?>
<?php echo $first['id']; ?>
<?php echo ':::'; ?>
<?php echo $first['email']; ?>
