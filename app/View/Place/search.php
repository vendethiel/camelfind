<?php
if (isset($category))
	include __DIR__ . '/search/result.php';
else
	include __DIR__ . '/search/form.php';
