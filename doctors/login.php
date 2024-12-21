<html>

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link rel="icon" type="image/png" href="../images/greenlogo.webp">

	<!-- Sleep Bar -->

	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<link rel="stylesheet" type="text/css" href="../css/main.css">

	<title>Login as a Doctor | Havva |</title>

</head>

<style> 
	body {
	    background-color: #ffffff;
	    color: #000;
	    transition: background-color 0.3s ease, color 0.3s ease;
    }

        /* Dark mode class */
        .dark-mode {
            background-color: #1D1D1D !important;
            color: #fff !important;
        }

        /* Media query for system default theme */
        @media (prefers-color-scheme: dark) {
            body {
                background-color: #1D1D1D !important;
                color: #fff !important;
            }
        }</style>

<body>

<div style="width: 100% !important;height: 100% !important;">
	
	<div style="width: 100% !important;height: 100% !important;display: flex;justify-content: center;align-items: center;"> 
		
		<div class="col-lg-3 col-sm-3 col-md-3 log-hold" style="background: transparent;">
			
			<div style="display: flex;flex-direction: column;gap: 24px;">
				
				<div>
					
					<h4 class="log-in">Log in to Your Account.</h4>

				</div>

				<div>
					
					<form>
						
						<div style="display: flex;gap: 24px;flex-direction: column;">

							<div class="form-group">
								
								<input type="text" name="email" class="form-control input" placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">

							</div>

							<div class="form-group">
								
								<input type="password" name="password" class="form-control input" placeholder="Password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>">

							</div>

							<div>
								
								<a href="#" class="forgot-p">Forgot Password?</a>	

							</div>	

							<div class="form-group">
								
								<input type="submit" name="submit" value="Log in" class="form-control submi">

							</div>

							<div>
								
								<img src="../images/docor.png">

							</div>

							<div style="display: flex;flex-direction: column;gap: 24px !important;">
								
								<a href="#">
									
									<div class="goog">
										
										<div>
											
											<img src="../images/ggl.png">

										</div>

										<div>
											
											<font style="font-weight: 600;font-size: 12px !important;">Log In</font>

										</div>

									</div>

								</a>

								<a href="#">
									
									<div class="goog">
										
										<div>
											
											<img src="../images/ffc.png">

										</div>

										<div>
											
											<font style="font-weight: 600;font-size: 12px !important;">Log In</font>

										</div>

									</div>

								</a>

							</div>

						</div>

					</form>

				</div>

			</div>

		</div>

	</div>

</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const themeToggle = document.getElementById('themeToggle');
        const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

        // Set initial theme based on system preference
        if (prefersDarkScheme.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }

        // Toggle theme on button click
        themeToggle.addEventListener('click', function () {
            document.body.classList.toggle('dark-mode');
        });

        // Listen for changes in system theme preference and adjust accordingly
        prefersDarkScheme.addEventListener('change', function (e) {
            if (e.matches) {
                document.body.classList.add('dark-mode');
            } else {
                document.body.classList.remove('dark-mode');
            }
        });
    </script>

</html>