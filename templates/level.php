<h1>{{ level.title }}</h1>
<span class="misc">
	  {{ userlink(level, 'u_') }}
	- {{ level.cat | cat_to_type | title }} level
	- {{ level.date | date('M j, Y') }} from {{ level.platform }}</span>
<div class="lvl-box">
	<div class="info">
		<div id="buttons">
			<a class="play" href="principia://play/lvl/db/{{ lid }}">Play</a>
			<a class="play play-edit" href="principia://sandbox/db/{{ lid }}">Edit</a>
		</div>
		<p>{{ level.description | raw }}</p>
	</div>
	<div class="img">
		<img src="assets/placeholder.png">
	</div>
</div>
<div class="lvl-data">
	<p>
		Views: {{ level.views }}
		Downloads: {{ level.downloads }}
		Level ID: {{ level.id }}
	</p>
</div>