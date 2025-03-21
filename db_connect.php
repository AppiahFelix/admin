<?php
define('SUPABASE_URL', 'https://wmfnfmswcatwynvvghwd.supabase.co');  // Replace with your actual Supabase URL
define('SUPABASE_KEY', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6IndtZm5mbXN3Y2F0d3ludnZnaHdkIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NDI1NjgzMDUsImV4cCI6MjA1ODE0NDMwNX0.hoiGq7kNrsAqHR0CT6YSsaSWZ4ry69M1C5IJyxWGsQM');  // Replace with your actual Anon Key

function fetchFromSupabase($endpoint) {
    $url = SUPABASE_URL . "/rest/v1/" . $endpoint;
    $options = [
        "http" => [
            "header" => "apikey: " . SUPABASE_KEY . "\r\nContent-Type: application/json"
        ]
    ];
    $context = stream_context_create($options);
    return json_decode(file_get_contents($url, false, $context), true);
}
?>