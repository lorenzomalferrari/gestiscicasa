import os
from collections import defaultdict

def analizza_estensioni(cartella):
    estensioni = defaultdict(int)

    # Cammina attraverso tutti i file e le directory nella cartella specificata
    for root, dirs, files in os.walk(cartella):
        for file in files:
            # Ottieni l'estensione del file
            estensione = os.path.splitext(file)[1]
            estensioni[estensione] += 1

    # Stampa il risultato
    for estensione, count in estensioni.items():
        print(f"{estensione} = {count}")

# Chiedi all'utente di inserire il percorso della cartella
cartella = input("Inserisci il percorso della cartella da analizzare: ")
analizza_estensioni(cartella)
