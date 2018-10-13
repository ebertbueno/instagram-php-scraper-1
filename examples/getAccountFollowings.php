<?php
require __DIR__ . '/../vendor/autoload.php';

$instagram = \Nassajis\InstagramScraper\Instagram::withCredentials('username', 'password', 'path/to/cache/folder');
$instagram->login();
sleep(2); // Delay to mimic user

$username = 'kevin';
$followers = [];
$account = $instagram->getAccount($username);
sleep(1);
$followers = $instagram->getFollowing($account->getId(), 1000, 100, true); // Get 1000 followings of 'kevin', 100 a time with random delay between requests
echo '<pre>' . json_encode($followers, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</pre>';