<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Video Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            text-align: center;
        }
        input {
            padding: 10px;
            width: 300px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 15px;
        }
        #result {
            margin-top: 20px;
        }
        .video-thumbnail {
            cursor: pointer;
            position: relative;
            display: inline-block;
        }
    </style>
</head>
<body>

    <h1>Search for the Best YouTube Video</h1>
    <form method="POST">
        <input type="text" name="query" placeholder="Enter your search prompt" required>
        <button type="submit">Search</button>
    </form>

    <div id="result">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $apiKey = 'AIzaSyBK-Elx7q7F4m0jctrG29hDsPnhtjaLIK0'; // Replace with your YouTube API key
            $query = urlencode($_POST['query']);

            // Search for videos
            $searchUrl = "https://www.googleapis.com/youtube/v3/search?part=snippet&q={$query}&key={$apiKey}";
            $searchResponse = file_get_contents($searchUrl);
            $searchData = json_decode($searchResponse, true);

            if (!empty($searchData['items'])) {
                if (isset($searchData['items'][0]['id']['videoId'])) {
        $videoId = $searchData['items'][0]['id']['videoId'];
        // Proceed with your logic to get the video URL and statistics
    } else {
        $videoId = NULL;
    }


                $videoUrl = "https://www.youtube.com/watch?v={$videoId}";
                $embedUrl = "https://www.youtube.com/embed/{$videoId}?autoplay=1"; // Embed URL for iframe
                $thumbnail = $searchData['items'][0]['snippet']['thumbnails']['high']['url']; // Thumbnail URL
                $videoTitle = $searchData['items'][0]['snippet']['title'];

                echo "<div class='slide'>";
                echo "<div class='video-thumbnail' data-video-link='{$embedUrl}'>";
                echo "<img src='{$thumbnail}' alt='" . htmlspecialchars($videoTitle) . "' style='width: 250px; height: 214px;'>";
                echo "<p style='font-family: montserrat; font-weight: 500; font-size: 17px; line-height: 24px; padding-top: 20px;'>" . htmlspecialchars($videoTitle) . "</p>";
                echo "</div></div>";
            } else {
                echo "<p>No videos found for this query.</p>";
            }
 

        }
        ?>
    </div>

    <script>
        document.querySelectorAll('.video-thumbnail').forEach(function(thumbnail) {
            thumbnail.addEventListener('click', function() {
                var videoLink = this.getAttribute('data-video-link');

                // Create iframe for the video
                var iframe = document.createElement('iframe');
                iframe.setAttribute('src', videoLink);
                iframe.setAttribute('frameborder', '0');
                iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
                iframe.setAttribute('allowfullscreen', 'true');
                
                // Style the iframe
                iframe.style.width = '250px';  // Customize width here
                iframe.style.height = '214px'; // Customize height here
                
                // Clear the thumbnail content and append the iframe
                this.innerHTML = ''; // Clear the thumbnail content
                this.appendChild(iframe); // Insert the iframe
            });
        });
    </script>

</body>
</html>
