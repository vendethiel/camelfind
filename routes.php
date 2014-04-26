<?php
return array(
	'' => 'Misc#home',

	'article/new' => 'Article#new',
	'article/:id' => 'Article#show',

    'place/:id' => 'Place#show',

    'login' => 'Session#new',
    'logout' => 'Session#delete',
    'register' => 'User#new',
	
	'profile/:id' => 'User#show'
);