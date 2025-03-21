<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json");

include "db_connect.php";

// Fetch news from Supabase
$posts = fetchFromSupabase("news_posts?order=created_at.desc&limit=5");

echo json_encode($posts);
?>