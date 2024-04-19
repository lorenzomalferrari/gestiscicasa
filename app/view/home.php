<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Homepage</title>
		<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
		<style>
			.submenu {
				display: none;
			}

			.submenu.active {
				display: block;
			}
		</style>
	</head>
	<body class="bg-gray-100">
		<!-- Header -->
		<header class="bg-white shadow-md p-4 flex justify-between items-center">
			<div>
				<img src="logo.png" alt="Logo" class="h-8">
			</div>
			<div>
				<button class="bg-gray-200 p-2 rounded-full">
					<i class="fas fa-user text-gray-600"></i>
				</button>
			</div>
		</header>

		<!-- Sidebar -->
		<aside class="bg-gray-200 w-1/4 h-screen p-4">
			<!-- Menu -->
			<ul>
				<li class="mb-4">
					<a href="#" class="text-gray-800 font-semibold menu-item">Menu 1</a>
					<ul class="ml-2 submenu">
						<li><a href="#" class="text-gray-600">Sottomenu 1</a></li>
						<li><a href="#" class="text-gray-600">Sottomenu 2</a></li>
					</ul>
				</li>
				<li class="mb-4">
					<a href="#" class="text-gray-800 font-semibold menu-item">Menu 2</a>
					<ul class="ml-2 submenu">
						<li><a href="#" class="text-gray-600">Sottomenu 1</a></li>
						<li><a href="#" class="text-gray-600">Sottomenu 2</a></li>
					</ul>
				</li>
				<!-- Altre voci di menu... -->
			</ul>
		</aside>

		<!-- Contenuto Principale -->
		<main class="flex-grow p-4">
			<!-- Contenuto dinamico -->
			<h1 class="text-2xl font-semibold mb-4">Contenuto Dinamico</h1>
			<!-- Aggiungi il tuo contenuto dinamico qui -->
		</main>

		<!-- Footer -->
		<div id="footerContainer"></div>

		<script>
			const menuItems = document.querySelectorAll('.menu-item');
			const footerContainer = document.getElementById('footerContainer');

			// Funzione per caricare il footer da un file esterno
			function loadFooter() {
				const xhr = new XMLHttpRequest();
				xhr.open('GET', 'footer.html', true);
				xhr.onreadystatechange = function() {
					if (xhr.readyState === 4 && xhr.status === 200) {
						footerContainer.innerHTML = xhr.responseText;
					}
				};
				xhr.send();
			}

        	// Carica il footer quando la pagina è completamente caricata
        	window.addEventListener('load', loadFooter);

			menuItems.forEach(item => {
				item.addEventListener('click', () => {
					const submenu = item.nextElementSibling;
					const isActive = submenu.classList.contains('active');
					closeSubmenus();
					if (!isActive) {
						submenu.classList.add('active');
					}
				});
			});

			function closeSubmenus() {
				const submenus = document.querySelectorAll('.submenu');
				submenus.forEach(submenu => {
					submenu.classList.remove('active');
				});
			}
		</script>
	</body>
</html>
