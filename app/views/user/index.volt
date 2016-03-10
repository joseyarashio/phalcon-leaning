
<h1>User.volt</h1>
<!--print $single data-->
{% if single %}
	<table border="1">
	<thead><tr><td>id</td><td>email</td><td>created at</td><td>updated at</td></tr></thead>
	<tbody>
	<tr>
	<td>{{ single.id }}</td>
	<td>{{ single.email }}</td>
	<td>{{ single.created_at }}</td>
	<td>{{ single.updated_at }}</td>
	</tr>
	</tbody>
	</table>
{% endif %}

<hr/>
{% for p in single.project %}
	{{ p.id }}
	{{ p.title }}
{% endfor %}

<hr/>
<!--print all users data-->
<table border="">
<thead><tr><td>id</td><td>email</td><td>created at</td><td>updated at</td></tr></thead>
<tbody>
	{% for user in all%}
		<tr>
		<td>{{ user.id }}</td>
		<td>{{ user.email }}</td>
		<td>{{ user.created_at }}</td>
		<td>{{ user.updated_at }}</td>
		</tr>
	{% endfor %}
</tbody>
</table>
<hr/>
{%set first=all.getFirst().toArray() %}
{{first}}
{{first['id']}}
{{':::'}}
{{first['email']}}
