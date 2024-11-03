<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apiKey = 'AIzaSyBK-Elx7q7F4m0jctrG29hDsPnhtjaLIK0'; // Your YouTube API key
    $query = urlencode(trim($_POST['message'])); // Get the message from the form and trim whitespace

    // Validate the query
    if (empty($query)) {
        echo json_encode(['error' => 'Query cannot be empty']);
        exit;
    }

    // Search for videos (limit to one result)
    $searchUrl = "https://www.googleapis.com/youtube/v3/search?part=snippet&q={$query}&type=video&maxResults=1&key={$apiKey}";
    
    // Make the API call
    $searchResponse = @file_get_contents($searchUrl); // Suppress warnings for now

    if ($searchResponse === FALSE) {
        echo json_encode(['error' => 'Failed to retrieve data from YouTube API']);
        exit; // Exit if there's an issue with the request
    }

    $searchData = json_decode($searchResponse, true);

    // Check if the items array is not empty
    if (!empty($searchData['items'])) {
        $videoId = $searchData['items'][0]['id']['videoId']; // Get the video ID
        $videoUrl = "https://www.youtube.com/watch?v={$videoId}"; // Construct the video URL
        // Also generate the embed URL for the iframe
        $embedUrl = "https://www.youtube.com/embed/{$videoId}"; 
        echo json_encode(['videoUrl' => $videoUrl, 'embedUrl' => $embedUrl]); // Return both URLs as JSON
    } else {
        echo json_encode(['error' => 'No videos found for this query']);
    }
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
