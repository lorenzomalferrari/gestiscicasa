import os
import sys

def process_php_files(directory):
	# Controlla se la directory esiste
	if not os.path.exists(directory):
		print(f"Directory '{directory}' does not exist.")
		return

	# Cicla tutti i file e le cartelle nella directory specificata
	for root, dirs, files in os.walk(directory):
		for file in files:
			if file.endswith(".php"):
				file_path = os.path.join(root, file)
				print(f"Processing file: {file_path}")  # Messaggio di debug
				try:
					# Legge il contenuto del file
					with open(file_path, 'r', encoding='utf-8') as f:
						content = f.readlines()
				except Exception as e:
					print(f"Error reading file {file_path}: {e}")
					continue

				if content:
					first_line = content[0]
					# Controlla se la prima riga inizia con <?php e non contiene altro prima di un a capo
					if first_line.startswith("<?php") and first_line.strip() == "<?php":
						# Sostituisce la prima riga con <?php declare(strict_types=1);
						content[0] = "<?php declare(strict_types=1);\n"
						try:
							# Scrive di nuovo il contenuto nel file
							with open(file_path, 'w', encoding='utf-8') as f:
								f.writelines(content)
							print(f"Updated: {file_path}")
						except Exception as e:
							print(f"Error writing to file {file_path}: {e}")
					else:
						print(f"No change needed for: {file_path}")
				else:
					print(f"File is empty: {file_path}")

if __name__ == "__main__":
	if len(sys.argv) != 2:
		print("Usage: python3 update_php_files.py <directory_path>")
	else:
		directory_path = sys.argv[1]
		process_php_files(directory_path)
