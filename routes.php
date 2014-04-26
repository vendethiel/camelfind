<?php
return array(
	'' => 'Misc#home',

	'article/new' => 'Article#new',
	'article/:id' => 'Article#show',

    'place/search' => 'Place#search',
    'place/:id' => 'Place#show',
    'place/:place_id/comment/new' => 'Comment#new',

    'category/:category_id/json' => 'Place#json',

    'login' => 'Session#new',
    'logout' => 'Session#delete',
    
    'register' => 'User#new',
	'profile/:id' => 'User#show'
);