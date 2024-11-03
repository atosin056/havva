<?php
// Set your time variable dynamically
$time = "20hrs 30mins"; 
// Replace this with a variable or data from your database

?>
<html>

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link rel="icon" type="image/png" href="images/greenlogo.webp">

	<!-- Sleep Bar -->

	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<link rel="stylesheet" type="text/css" href="css/main.css">

	<title>Havva - All your health care needs in one app with Havva | Register</title>

</head>

<body>

<div id="splash-screen" style="background: white !important;">

	<div>

		<img src="images/roll.gif">

	</div>

</div>

<div id="main-content">

	<div style="padding: 40px 120px;" class="nope">

		<div class="nav">
		
		    <div style="display: flex;">
		        
		        <div class="act acti" data-target="home" title="Home">
		
		            <img src="images/House.webp">
		
		        </div>

		        <div class="act" data-target="circle">
		
		            <img src="images/circle.svg">
		
		        </div>

		
		        <div class="act" data-target="robot" title="MedicBot">
		
		            <img src="images/robot.webp">
		
		        </div>

		        <div class="act" data-target="user">
		
		            <img src="images/user.webp">
		
		        </div>

		        <div class="act" data-target="gear">
		
		            <img src="images/gear.webp">
		
		        </div>  

    		</div>
	
		</div>
		
		<div class="content" id="home" style="gap: 20px;background: transparent;display: flex !important;">

			<div class="row">
				
				<div class="col-lg-5 col-sm-5 col-md-5" style="background: transparent;padding-top: 30px;padding-top: 58px;">
					
					<div>
						
						<h4 class="dash-text">Your vitals are <br>looking great John!</h4>

						<p class="dash-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque ut id congue commodo. Semper malesuada morbi adipiscing tellus posuere. Interdum.</p>

					</div>

					<div style="margin-top: 37px;">
						
						<div class="dash-recent">
							
							<div>
								
								<div>
									
									<h4 class="dash-recent-head">Recent Activity</h4>

									<p class="dash-recent-p">Quick navigations</p>

								</div>

								<div style="display: flex;flex-direction: column;gap: 10px;margin-top: 40px;">
									
									<div class="temp-ch">
										
										<div class="row" style="padding: 0 !important;background: transparent;">
											
											<div style="display: inline-block;width: auto;">
												
												<img src="images/dash.webp">

											</div>

											<div style="display: inline-flex;width: auto;flex-direction: column;gap: 4.5px;padding-top: 4px;padding-left: 0 !important;">
												
												<font class="t-read">Temperature Reading</font>

												<font class="re">The surface temperature is 36.6°C</font>

											</div>

										</div>

									</div>

									<!-- End -->

									<div class="temp-ch">
										
										<div class="row" style="padding: 0 !important;background: transparent;">
											
											<div style="display: inline-block;width: auto;">
												
												<img src="images/dash.webp">

											</div>

											<div style="display: inline-flex;width: auto;flex-direction: column;gap: 4.5px;padding-top: 4px;padding-left: 0 !important;">
												
												<font class="t-read">Temperature Reading</font>

												<font class="re">The surface temperature is 36.6°C</font>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

				<!-- End -->

				<div style="background: transparent;padding-left: 30px;" class="col-lg-7 col-sm-7 col-md-7">
					
					<div style="background: transparent;">
						
						<div style="background: transparent;">
							
							<div class="row" style="justify-content: flex-end;align-items: center;gap: 20px;">
								
								<div class="col-lg-6 col-sm-6 col-md-6 heart">
									
									<div class="row">
										
										<div class="img-cont">
											
											<img src="images/heart.webp">

										</div>

										<div style="display: inline-block;width: auto;display: flex;align-items: center;justify-content: flex-end;flex-grow: 1;">
											
											<font style="color: var(--primary-blue, #007BFF);">21/06/24</font>

										</div>

									</div>

									<div style="flex-grow: 1;background: transparent;display: flex;align-items: flex-end;">
										
										<div style="display: flex;align-items: center;gap: 10px;">
											
											<font class="big-t">72</font><font class="small-t">BPM</font>

										</div>

									</div>

								</div>

								<!-- End for 1 -->

								<div class="col-lg-5 col-sm-5 col-md-5 heart" style="background: #EAFAEE;">

									<div class="row">

										<div class="img-cont">

											<img src="images/moonn.webp">

										</div>

										<div style="display: inline-block;width: auto;display: flex;align-items: center;justify-content: flex-end;flex-grow: 1;">

											<font style="color: var(--primary-blue, #007BFF);">21/06/24</font>

										</div>

									</div>

									<div style="flex-grow: 1;background: transparent;display: flex;align-items: flex-end;">

										<div style="display: flex;align-items: center;gap: 10px;position: relative;">

											<canvas id="progressChart" width="10" height="10"></canvas>

											<div id="progressText">Loading...</div>

											<script type="text/javascript"> 

											const timeInput = "<?php echo $time; ?>"; // For example, $time = "8hrs 30mins";

										    // Set up initial chart
										   
										    const ctx = document.getElementById('progressChart').getContext('2d');
										   
										    const progressChart = new Chart(ctx, {
										   
										      type: 'doughnut',
										   
										      data: {
										   
										        datasets: [{
										   
										          data: [0, 100], // Initial: 0% progress
										   
										          backgroundColor: ['#28A745', '#ADEBBB'],
										   
										          borderWidth: 0
										   
										        }]
										   
										      },
										   
										      options: {
										   
										        rotation: -90,
										   
										        circumference: 360,
										   
										        cutout: '75%',
										   
										        plugins: { tooltip: { enabled: false } }
										   
										      }
										   
										    });

										    // Function to update progress based on timeInput
										   
										    function updateProgress() {
										   
										      const totalMinutes = parseTimeInput(timeInput);
										   
										      const maxMinutes = 24 * 60; // 24 hours in minutes
										   
										      const percentage = (totalMinutes / maxMinutes) * 100;



										      // Update the chart data

										      progressChart.data.datasets[0].data = [percentage, 100 - percentage];

										      progressChart.update();

										      // Update the text inside the chart

										      document.getElementById('progressText').innerText = timeInput || "No Time Provided";

										    }


										    // Helper function to parse time input

										    function parseTimeInput(input) {

										      let hours = 0, minutes = 0;

										      const hourMatch = input.match(/(\d+)\s*hrs?/i);

										      const minuteMatch = input.match(/(\d+)\s*mins?/i);

										      if (hourMatch) hours = parseInt(hourMatch[1]);

										      if (minuteMatch) minutes = parseInt(minuteMatch[1]);

										      return hours * 60 + minutes;

										    }

										    // Call updateProgress on page load

										    updateProgress();

										</script>

									</div>

									</div>

								</div>

								<div class="col-lg-5 col-sm-5 col-md-5 heart" style="background: #EAFAEE;">

									<div class="row">

										<div class="img-cont">

											<img src="images/tempa.webp">

										</div>

										<div style="display: inline-block;width: auto;display: flex;align-items: center;justify-content: flex-end;flex-grow: 1;">

											<font style="color: var(--primary-blue, #28A745);">21/06/24</font>

										</div>

									</div>

									<div style="flex-grow: 1;background: transparent;display: flex;align-items: flex-end;">

										<div style="display: flex;align-items: center;gap: 10px;">

											<font class="big-t">36.6</font><font class="small-t">°C</font>

										</div>

									</div>

								</div>

								<!-- End for 2 -->

								<div class="col-lg-6 col-sm-6 col-md-6 heart" style="background: #E5F2FF;">

									<div class="row">

										<div class="img-cont">

											<img src="images/bp.webp">

										</div>

										<div style="display: inline-block;width: auto;display: flex;align-items: center;justify-content: flex-end;flex-grow: 1;">

											<font style="color: var(--primary-blue, #007BFF);">21/06/24</font>

										</div>

									</div>

									<div style="flex-grow: 1;background: transparent;display: flex;align-items: flex-end;">

										<div style="display: flex;align-items: center;gap: 10px;">

											<font class="big-t" style="font-size: 50px;">120/80</font><font class="small-t">mmHg</font>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

		<div class="content" id="robot">
			
			<div clas="robo-cont" style="background-color: transparent;width: 100% !important;height: 100vh !important;">

				<div style="width: 100% !important;height: 100% !important;display: flex;flex-direction: column;gap: -5px;background: transparent;">

					<div style="background: transparent;width: 100% !important;height: 100% !important;">

						<div>

							<div style="display: flex;gap: 8px;">
								
								<div>
									
									<img src="images/greenlogo.webp">

								</div>

								<div style="display: inline-block;width: auto;">
									
									<h4 class="medic-bot"><font class="colored">Medic</font>Bot</h4>

								</div>

							</div>
							
						</div>

							<div style="display: flex; flex-direction: column;padding-top: 150px; align-items: center; gap: 30px; height: 100%;background: transparent;width: 100% !important;">
						   
							    <!-- The Welcome big text -->
							   
							    <div class="col-lg-7 col-sm-7 col-md-7" id="introMessage" style="background: transparent;">
							   
							        <h4 class="hi typewriter-text">Hi there! Got any health questions or need guidance on a medical issue? I’m here to help!</h4>

							        <div style="display: flex;width: 100% !important;margin-top: 15px;">
									
										<div class="row" style="padding-left: 0 !important;flex-wrap: nowrap;gap: 12px;">
											
											<div style="display: inline-block;width: auto;padding: 0 !important;">
												
												<img src="images/cut.webp">

											</div>

											<div style="display: inline-block;width: auto;padding: 0 !important;">
												
												<img src="images/dizzy.webp">

											</div>

											<div style="display: inline-block;width: auto;padding: 0 !important;">
												
												<img src="images/head.webp">

											</div>

											<div style="display: inline-block;width: auto;padding: 0 !important;">
												
												<img src="images/anxious.webp">

											</div>

										</div>

									</div>

								</div>

							    <!-- The real chat -->
							   
							    <div id="chatBody" style="width: 100%; background: transparent; height: 30%; overflow-y: auto; display: none;">
							   
							        <div style="background: transparent; width: 100%;" class="chat-body">
							   
							            <div id="messagesContainer" style="width: 100%;"></div> <!-- Container for all messages -->
							   
							        </div>
							   
							    </div>

							    <!-- End -->

							    <div style="background: transparent; justify-self: flex-end; width: 100%;background: transparent;">
							   
							        <form method="POST" id="messageForm" style="background: transparent;">
							   
							            <div style="position: relative;">
							   
							                <input type="text" required name="message" class="form-control message-input" placeholder="Message" style="padding-right: 40px;background: transparent !important;">
							   
							                <button type="submit" name="submit" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); border: none; background: none;">
							   
							                    <img src="images/send.webp" alt="Send" style="width: 40px; height: 40px;">
							   
							                </button>
							   
							            </div>
							   
							        </form>
							   
							    </div>

								<!-- end -->

							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
		
		</div>

		<!-- End of content for the CHATBOT -->

		<div style="margin-top: 40px;padding-left: 120px;padding-right: 120px;">
			
			<div>
				
				<div class="row" style="gap: 8px;">
					
					<div class="col-lg-4 col-sm-4 col-md-4 tips">
						
						<div class="" style="display: flex;justify-content: space-between;">
							
							<div style="background: transparent;display: flex;flex-direction: column;justify-content: center;" class="col-lg-6 col-sm-6 col-md-6">
								
								<p class="health">Health Tips</p>

								<font class="did">Did you know?</font>

								<div style="margin-top: 5px;">
									
									<font class="tipe">Washing your hands frequently reduces the risk of infections.</font>

								</div>

							</div>

							<div style="display: inline-block;width: auto;">
								
								<img src="images/health.webp">

							</div>

						</div>

					</div>

					<!-- End -->

					<div class="col-lg-4 col-sm-4 col-md-4 tips">
						
						<div class="" style="justify-content: space-between;display: flex;">
							
							<div style="background: transparent;display: flex;flex-direction: column;justify-content: center;" class="col-lg-6 col-sm-6 col-md-6">
								
								<p class="health">Health Tips</p>

								<font class="did">Did you know?</font>

								<div style="margin-top: 5px;">
									
									<font class="tipe">Washing your hands frequently reduces the risk of infections.</font>

								</div>

							</div>

							<div style="display: inline-block;width: auto;">
								
								<img src="images/health.webp">

							</div>

						</div>

					</div>

					<!-- End -->

					<div class="col-lg-4 col-sm-4 col-md-4 tips">
						
						<div class="" style="justify-content: space-between;display: flex;">
							
							<div style="background: transparent;display: flex;flex-direction: column;justify-content: center;" class="col-lg-6 col-sm-6 col-md-6">
								
								<p class="health">Health Tips</p>

								<font class="did">Did you know?</font>

								<div style="margin-top: 5px;">
									
									<font class="tipe">Washing your hands frequently reduces the risk of infections.</font>

								</div>

							</div>

							<div style="display: inline-block;width: auto;">
								
								<img src="images/health.webp">

							</div>

						</div>

					</div>

					<!-- End -->

				</div>

			</div>

		</div>

	</div>

</div>	

</div>

</body>

<script>
	
	window.addEventListener('load', function() {
    // After 3 seconds, fade out the splash screen
    setTimeout(function() {
        const splashScreen = document.getElementById('splash-screen');
        const mainContent = document.getElementById('main-content');

        // Fade out the splash screen
        splashScreen.style.opacity = 0;

        // Fade in the main content
        setTimeout(function() {
            splashScreen.style.display = 'none';
            mainContent.style.opacity = 1;
        }, 100); // Wait for 2 seconds for the fade out to complete
    }, 1500); // 3 seconds before the fade-out starts
});



const navItems = document.querySelectorAll('.act');
const contentSections = document.querySelectorAll('.content');

// Function to hide all content sections
function hideAllSections() {
    contentSections.forEach(section => {
        section.style.display = 'none'; // Hide all sections
    });
}

// Add click event listeners to each nav item
navItems.forEach(item => {
    item.addEventListener('click', () => {
        // Clear the active classes from nav items
        navItems.forEach(navItem => navItem.classList.remove('acti'));
        item.classList.add('acti'); // Add 'acti' to the clicked nav item

        // Hide all content sections
        hideAllSections();
        
        // Get the target section from data-target attribute
        const target = item.getAttribute('data-target');
        const targetContent = document.getElementById(target);
        
        // Display the target content if it exists
        if (targetContent) {
            targetContent.style.display = 'flex'; // Show the corresponding section
        }
    });
});
// Show the default home content on window load
window.onload = () => {
    // Hide all sections first
    hideAllSections();

    // Show the home section (assuming it's section1)
    const homeSection = document.getElementById('home');
    if (homeSection) {
        homeSection.style.display = 'block'; // Display home section
    }

    // Optionally, add the active class to the home nav item
    navItems.forEach(item => {
        if (item.getAttribute('data-target') === 'home') {
            item.classList.add('acti'); // Set home nav item as active
        }
    });
};
document.addEventListener('DOMContentLoaded', function () {
    // Ensure there are no misplaced parentheses
    const elements = document.querySelectorAll('.typewriter-text');
    elements.forEach(element => {
        // Always check that functions are invoked correctly
        typewriterEffect(element, 60);
    });
});

// Correct initialization for typewriter effect
function typewriterEffect(element, speed = 60) {
    const text = element.textContent;
    element.textContent = ''; // Clear the text
    let index = 0;

    function type() {
        if (index < text.length) {
            element.textContent += text.charAt(index);
            index++;
            setTimeout(type, speed);
        }
    }
    type();
}

// const introMessage = document.getElementById('introMessage');
// const chatBody = document.getElementById('chatBody');
// const messageForm = document.getElementById('messageForm');

// // Listen for the form submission
// messageForm.addEventListener('submit', function(event) {
//     event.preventDefault(); // Prevent the form from submitting

//     // Hide the intro message and show the chat body
//     introMessage.style.display = 'none';
//     chatBody.style.display = 'block';

//     // Get the user message from the input field
//     const messageInput = document.querySelector('.message-input');
//     const userMessage = messageInput.value;

//     // Add user message to chat
//     if (userMessage) {
//         // Create a new outer div for the user message
//         const messageContainer = document.createElement('div');
//         messageContainer.style.width = '100%';
//         messageContainer.style.display = 'flex';
//         messageContainer.style.justifyContent = 'flex-end'; // Align to the right

//         // Create the .to div for the user's message
//         const toDiv = document.createElement('div');
//         toDiv.classList.add('to');

//         // Create the user div
//         const userDiv = document.createElement('div');
//         userDiv.classList.add('user');
//         userDiv.style.height = '54px';

//         // Add user image
//         const userImage = document.createElement('img');
//         userImage.src = 'images/user.webp';
//         userDiv.appendChild(userImage);

//         // Create the .tomessage div
//         const tomessageDiv = document.createElement('div');
//         tomessageDiv.classList.add('tomessage');

//         // Create a new div for the user's message
//         const userMessageElement = document.createElement('div');
//         userMessageElement.textContent = userMessage; // Set the message text
//         userMessageElement.classList.add('user-message');

//         // Append the user message to the tomessage div
//         tomessageDiv.appendChild(userMessageElement);

//         // Append tomessage div to the to div
//         toDiv.appendChild(userDiv);
//         toDiv.appendChild(tomessageDiv);

//         // Append the entire message container to the chat body
//         messageContainer.appendChild(toDiv);
//         chatBody.appendChild(messageContainer);

//         // Clear the input field after appending the message
//         messageInput.value = '';

//         // Now make an AJAX request to ai.php
//         fetch('ai.php', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/x-www-form-urlencoded',
//             },
//             body: `message=${encodeURIComponent(userMessage)}`
//         })
//         .then(response => response.json())
//         .then(data => {
//             // Create a new outer div for the bot's response
//             const botResponseContainer = document.createElement('div');
//             botResponseContainer.style.width = '100%';
//             botResponseContainer.style.display = 'flex';
//             botResponseContainer.style.justifyContent = 'flex-start'; // Align to the left

//             // Create the .from div for the bot's response
//             const fromDiv = document.createElement('div');
//             fromDiv.classList.add('from');

//             // Create the .user div for the bot
//             const botUserDiv = document.createElement('div');
//             botUserDiv.classList.add('user');
//             botUserDiv.style.height = '54px';

//             // Add bot image
//             const botImage = document.createElement('img');
//             botImage.src = 'images/robot.webp';
//             botUserDiv.appendChild(botImage);

//             // Main container for bot message
//             const botMessageContainer = document.createElement('div');
//             botMessageContainer.style.width = '100%';

//             // Final container where iframe will be inserted
//             const iframeContainer = document.createElement('div');
//             iframeContainer.style.width = '100%';
//             iframeContainer.style.height = '50vh';

//             if (data.videoUrl) {
//                 // Extract video ID from the URL to create the iframe
//                 const videoId = data.videoUrl.split('v=')[1];
//                 const iframe = document.createElement('iframe');
//                 iframe.width = '100%';
//                 iframe.height = '100%';
//                 iframe.src = `https://www.youtube.com/embed/${videoId}`;
//                 iframe.frameBorder = '0';
//                 iframe.allowFullscreen = true;

//                 // Append the iframe to the bot's specified div
//                 iframeContainer.appendChild(iframe);
//             } else if (data.error) {
//                 const errorMessage = document.createElement('div');
//                 errorMessage.textContent = data.error; // Display the error
//                 iframeContainer.appendChild(errorMessage);
//             } else {
//                 const defaultTextDiv = document.createElement('div');
//                 defaultTextDiv.textContent = 'Havva AI'; // Set the default text
//                 iframeContainer.appendChild(defaultTextDiv);
//             }

//             // Nest the containers
//             botMessageContainer.appendChild(iframeContainer);
//             fromDiv.appendChild(botUserDiv);
//             fromDiv.appendChild(botMessageContainer);
//             botResponseContainer.appendChild(fromDiv);
//             chatBody.appendChild(botResponseContainer);
//         })
//         .catch(error => console.error("Fetch Error:", error));
//     }
// });

document.getElementById('messageForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            const messageInput = this.message.value; // Get the message from input
            const messagesContainer = document.getElementById('messagesContainer');

            // Hide intro message and show chat body if not already done
            if (document.getElementById('introMessage').style.display !== 'none') {
                document.getElementById('introMessage').style.display = 'none';
                document.getElementById('chatBody').style.display = 'block';
            }

            // Create a new message entry for the user's message
            const userMessageDiv = document.createElement('div');
            userMessageDiv.style.display = 'flex';
            userMessageDiv.style.justifyContent = 'flex-end';
            userMessageDiv.innerHTML = `
                <div class="to">
                    <div class="user" style="height: 54px;">
                        <img src="images/user.webp">
                    </div>
                    <div class="tomessage">${messageInput}</div>
                </div>
            `;
            messagesContainer.appendChild(userMessageDiv); // Add user's message to the chat

            // Clear the input field
            this.message.value = '';

            // Send AJAX request to ai.php
            fetch('ai.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'message=' + encodeURIComponent(messageInput) // Send the message
            })
            .then(response => response.json())
            .then(data => {
                if (data.embedUrl) {
                    // Create a new message entry for the AI response
                    const aiMessageDiv = document.createElement('div');
                    aiMessageDiv.style.display = 'flex';
                    aiMessageDiv.style.justifyContent = 'flex-start';
                    aiMessageDiv.innerHTML = `
                        <div class="from">
                            <div class="user" style="height: 54px;">
                                <img src="images/robot.webp">
                            </div>
                            <div style="width: 100%; background: transparent;">
                                <div id="iframeContainer" style="height: auto; width: 100%; background: transparent;">
                                    <iframe src="${data.embedUrl}" width="100%" height="300px" frameBorder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    `;
                    messagesContainer.appendChild(aiMessageDiv); // Add AI response to the chat
                } else {
                    console.error(data.error); // Handle error
                }
            })
            .catch(error => console.error('Error:', error));
        });


</script>

</html>