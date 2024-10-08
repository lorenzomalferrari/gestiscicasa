<div class="navbar navbar-expand nav-top-bar1 nav-bar-fixed">
	<div class="top-bar-menu collapse navbar-collapse" id="mobile-navbar">
		<ul class="navbar-nav">
			<li class="nav-toggle-btn d-none d-lg-block">
				<button class="btn-icon" id="dsy-aside-toggler">
					<span></span>
					<span></span>
					<span></span>
				</button>
			</li>
			<li class="nav-toggle-btn d-lg-none">
				<button class="btn-icon sidebar-toggle-mobile">
					<span></span>
					<span></span>
					<span></span>
				</button>
			</li>
			<li class="nav-search-bar">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search......">
					<div class="input-group-append">
						<button class="item-btn" type="button"><i class="flaticon-null-15"></i></button>
					</div>
				</div>
			</li>
		</ul>
		<ul class="navbar-nav">
			<!--
			<li class="navbar-item dropdown nav-language">
				<a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><img src="<?php echo PATH; ?>public/vendor/media/figure/flag.jpg" alt="">En-UK<i class="flaticon-null-16"></i></a>
				<div class="dropdown-menu">
					<a class="dropdown-item text-13" href="#"><img src="<?php echo PATH; ?>public/vendor/media/figure/flag_6.jpg" alt="Sp">Sp-Sp</a>
					<a class="dropdown-item text-13" href="#"><img src="<?php echo PATH; ?>public/vendor/media/figure/flag_7.jpg" alt="Du">Du-Gm</a>
					<a class="dropdown-item text-13" href="#"><img src="<?php echo PATH; ?>public/vendor/media/figure/flag_8.jpg" alt="Du">Du-It</a>
					<a class="dropdown-item text-13" href="#"><img src="<?php echo PATH; ?>public/vendor/media/figure/flag_9.jpg" alt="Rus">Rus-Rs</a>
				</div>
			</li>
			-->
			<li class="navbar-item dropdown nav-message">
				<a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
					<i class="flaticon-null-18"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<h5 class="main-heading text-body text-bold mb-1">Messages</h5>
					<div class="sub-heading text-12 text-manatee">You have 4 unread messages</div>
					<div class="nofify-list">
						<a href="#" class="media">
							<div class="item-img">
								<img src="<?php echo PATH; ?>public/vendor/media/figure/img_1.jpg" alt="thumb">
							</div>
							<div class="media-body">
								<h6 class="item-title text-14 text-bold mb-1">Thomas Henry</h6>
								<p class="text-13">There many variations dumm more the of available.</p>
								<div class="text-12 text-manatee">Mar 15 3:55 PM</div>
							</div>
						</a>
						<a href="#" class="media">
							<div class="item-img">
								<img src="<?php echo PATH; ?>public/vendor/media/figure/img_4.jpg" alt="thumb">
							</div>
							<div class="media-body">
								<h6 class="item-title text-14 text-bold mb-1">Tom Black</h6>
								<p class="text-13">There many variations dumm more the of available.</p>
								<div class="text-12 text-manatee">Mar 17 6:12 PM</div>
							</div>
						</a>
						<a href="#" class="media">
							<div class="item-img">
								<img src="<?php echo PATH; ?>public/vendor/media/figure/admin.jpg" alt="thumb">
							</div>
							<div class="media-body">
								<h6 class="item-title text-14 text-bold mb-1">Jasmine Roberts</h6>
								<p class="text-13">There many variations dumm more the of available.</p>
								<div class="text-12 text-manatee">Mar 18 2:36 PM</div>
							</div>
						</a>
					</div>
					<div class="view-btn">
						<a href="#">VIEW ALL</a>
					</div>
				</div>
			</li>
			<li class="navbar-item dropdown nav-notification">
				<a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
					<i class="flaticon-null-17"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<div class="d-flex align-items-center justify-content-between">
						<h5 class="text-body text-bold mb-1">Notification</h5>
						<a href="#" class="text-12 text-manatee text-bold">Mark All</a>
					</div>
					<div class="nofify-list">
						<a href="#" class="media">
							<div class="item-img">
								<img src="<?php echo PATH; ?>public/vendor/media/figure/img_13.jpg" alt="thumb">
							</div>
							<div class="media-body">
								<h6 class="item-title text-13 text-bold mb-1">Requested to Widthdrawl</h6>
								<div class="sub-title text-12 text-manatee">2 Hrs Ago</div>
							</div>
						</a>
						<a href="#" class="media">
							<div class="item-img">
								<img src="<?php echo PATH; ?>public/vendor/media/figure/img_14.jpg" alt="thumb">
							</div>
							<div class="media-body">
								<h6 class="item-title text-13 text-bold mb-1">New user registered.</h6>
								<div class="sub-title text-12 text-manatee">5 Hrs Ago</div>
							</div>
						</a>
						<a href="#" class="media">
							<div class="item-img">
								<img src="<?php echo PATH; ?>public/vendor/media/figure/admin.jpg" alt="thumb">
							</div>
							<div class="media-body">
								<h6 class="item-title text-13 text-bold mb-1">Thomas Henry Added!</h6>
								<div class="sub-title text-12 text-manatee">5 Hrs Ago</div>
							</div>
						</a>
					</div>
					<div class="view-btn">
						<a href="#">VIEW ALL</a>
					</div>
				</div>
			</li>
			<li class="navbar-item dropdown nav-admin">
				<a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><img src="<?php echo PATH; ?>public/vendor/media/figure/admin.jpg" alt=""><? echo $nome_cognome; ?><i class="flaticon-null-16"></i></a>
				<div class="dropdown-menu dropdown-menu-right">
					<h5 class="text-bold text-body mb-0"><? echo $nome_cognome; ?></h5>
					<div class="text-14 text-manatee">Graphic Design</div>
					<ul class="settings-list">
						<li><a href="profile.php"><i class="far fa-user"></i>View Profile</a></li>
						<li><a href="<?php echo CONFIG['helpdesk']['link'] ?>"><i class="far fa-user"></i>Apri Ticket</a></li>
						<li><a href="#"><i class="fas fa-edit"></i>Account Setting</a></li>
						<!--<li><a href="#"><i class="fas fa-question"></i>Help Center</a></li>
						<li><a href="#"><i class="fas fa-lock"></i>Lock screen</a></li>-->
					</ul>
					<div class="sign-btn">
						<a href="javascript:void(0);" onclick="logout()">Esci</a>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>

<!-- Codice JavaScript -->
<script>
	function logout() {
		// Controlla se l'utente ha disattivato la conferma in precedenza
		let skipConfirmation = localStorage.getItem('skipLogoutConfirmation') === 'true';

		if (skipConfirmation) {
			// Esegui il logout immediatamente se la conferma è stata disattivata
			executeLogout();
		} else {
			// Crea il messaggio di conferma con una checkbox
			let confirmationBox = document.createElement('div');
			confirmationBox.style.position = 'fixed';
			confirmationBox.style.top = '50%';
			confirmationBox.style.left = '50%';
			confirmationBox.style.transform = 'translate(-50%, -50%)';
			confirmationBox.style.padding = '20px';
			confirmationBox.style.backgroundColor = 'white';
			confirmationBox.style.border = '1px solid #ccc';
			confirmationBox.style.zIndex = '1000';

			confirmationBox.innerHTML = `
				<p>Sei sicuro di voler effettuare il logout?</p>
				<label>
					<input type="checkbox" id="skipConfirmationCheckbox">
					Non chiedere più conferma
				</label>
				<br><br>
				<button onclick="confirmLogout(true)">Sì</button>
				<button onclick="confirmLogout(false)">No</button>
			`;

			document.body.appendChild(confirmationBox);
		}
	}

	function confirmLogout(confirm) {
		if (confirm) {
			let skipConfirmation = document.getElementById('skipConfirmationCheckbox').checked;
			if (skipConfirmation) {
				localStorage.setItem('skipLogoutConfirmation', 'true');
			}

			executeLogout();
		} else {
			document.body.removeChild(document.body.lastElementChild);
		}
	}

	function executeLogout() {
		//alert("Logout effettuato con successo!");
		window.location.href = '../controller/logout.php';
	}
</script>
