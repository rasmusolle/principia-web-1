<?php

function userlink($user, $prefix = '') {
	return <<<HTML
		<a href="user.php?id={$user[$prefix.'id']}"><span class="t_user">{$user[$prefix.'name']}</span></a>
HTML;
}
