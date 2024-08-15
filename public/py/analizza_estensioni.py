import os
from collections import defaultdict
import unittest

"""
Script per analizzare le estensioni dei file in una cartella e mostrarne la distribuzione.

Questo script esamina tutti i file all'interno di una cartella specificata e delle sue sottocartelle,
conta il numero di file per ciascuna estensione e stampa i risultati ordinati secondo la scelta dell'utente.

L'utente può scegliere tra diversi criteri di ordinamento:
1. Alfabetico crescente (A-Z)
2. Alfabetico decrescente (Z-A)
3. Frequenza crescente (dal numero più piccolo al più grande)
4. Frequenza decrescente (dal numero più grande al più piccolo)

Le scelte dell'utente determinano l'ordinamento dei risultati visualizzati.
"""

# Dizionario dei messaggi tradotti
MESSAGGI = {
    'en': {
        'errore': "Error: The specified path '{percorso}' does not exist.",
        'errore_dir': "Error: The specified path is not a directory.",
        'scelta': """
Choose the display order:
1 - Alphabetical ascending (A-Z)
2 - Alphabetical descending (Z-A)
3 - Frequency ascending (smallest to largest)
4 - Frequency descending (largest to smallest)
""",
        'scelta_default': "Invalid choice, defaulting to frequency descending order.",
        'nessun_file': "The folder does not contain any files.",
        'analisi': "Analyzing folder: {root}",
        'errore_generico': "An error occurred during analysis: {errore}",
        'inserisci_percorso': "Enter the path of the folder to analyze: ",
        'inserisci_lingua': "Enter 'en' for English or 'it' for Italian: "
    },
    'it': {
        'errore': "Errore: Il percorso specificato '{percorso}' non esiste.",
        'errore_dir': "Errore: Il percorso specificato non è una cartella.",
        'scelta': """
Scegli l'ordine di visualizzazione:
1 - Alfabetico crescente (A-Z)
2 - Alfabetico decrescente (Z-A)
3 - Frequenza crescente (dal numero più piccolo al più grande)
4 - Frequenza decrescente (dal numero più grande al più piccolo)
""",
        'scelta_default': "Scelta non valida, verrà applicato l'ordinamento predefinito (frequenza decrescente).",
        'nessun_file': "La cartella non contiene file.",
        'analisi': "Analizzando la cartella: {root}",
        'errore_generico': "Si è verificato un errore durante l'analisi: {errore}",
        'inserisci_percorso': "Inserisci il percorso della cartella da analizzare: ",
        'inserisci_lingua': "Inserisci 'en' per Inglese o 'it' per Italiano: "
    }
}

def stampa_messaggio(chiave, lingua='en', **kwargs):
    """
    Stampa un messaggio tradotto basato sulla chiave e sulla lingua scelta.

    Args:
        chiave (str): La chiave del messaggio da stampare.
        lingua (str, opzionale): La lingua per il messaggio ('en' per inglese, 'it' per italiano). Default è 'en'.
        **kwargs: Parametri aggiuntivi per il messaggio formattato.

    Returns:
        None: La funzione stampa il messaggio sulla console.
    """
    messaggio = MESSAGGI.get(lingua, MESSAGGI['en']).get(chiave, '')
    print(messaggio.format(**kwargs))

def convalida_input(messaggio, opzioni_valide, lingua='en'):
    """
    Chiede all'utente di inserire un'opzione e verifica se è valida.

    Args:
        messaggio (str): Il messaggio da mostrare all'utente.
        opzioni_valide (list): Una lista delle opzioni valide.
        lingua (str, opzionale): La lingua per i messaggi. Default è 'en'.

    Returns:
        str: L'opzione valida inserita dall'utente.
    """
    for _ in range(3):  # Prova fino a 3 volte
        scelta = input(messaggio).strip()
        if scelta in opzioni_valide:
            return scelta

    return opzioni_valide[0]  # Restituisce la prima opzione come default

def scegli_ordine(lingua='en'):
    """
    Mostra la legenda per l'ordinamento e restituisce la scelta dell'utente.

    Args:
        lingua (str, opzionale): La lingua per i messaggi ('en' per inglese, 'it' per italiano). Default è 'en'.

    Returns:
        str: L'ordinamento scelto ('alfabetico_crescente', 'alfabetico_decrescente',
             'frequenza_crescente', 'frequenza_decrescente').
    """
    messaggio = MESSAGGI[lingua]['scelta']
    opzioni_ordine = {
        '1': 'alfabetico_crescente',
        '2': 'alfabetico_decrescente',
        '3': 'frequenza_crescente',
        '4': 'frequenza_decrescente'
    }
    scelta = convalida_input(messaggio, opzioni_ordine.keys(), lingua)
    return opzioni_ordine.get(scelta, 'frequenza_decrescente')

def verifica_percorso(cartella, lingua='en'):
    """
    Verifica se il percorso specificato esiste ed è una cartella valida.

    Args:
        cartella (str): Il percorso della cartella da verificare.
        lingua (str, opzionale): La lingua per i messaggi di errore ('en' per inglese, 'it' per italiano). Default è 'en'.

    Returns:
        bool: True se il percorso esiste e è una cartella, False altrimenti.
    """
    if not os.path.exists(cartella):
        stampa_messaggio('errore', lingua, percorso=cartella)
        return False
    
    if not os.path.isdir(cartella):
        stampa_messaggio('errore_dir', lingua)
        return False
    
    return True

def ordina_e_stampa_estensioni(estensioni, ordine, lingua='en'):
    """
    Ordina le estensioni dei file secondo il criterio scelto e stampa i risultati.

    Args:
        estensioni (dict): Un dizionario con le estensioni dei file come chiavi e il loro numero di occorrenze come valori.
        ordine (str): Il criterio di ordinamento scelto ('alfabetico_crescente', 'alfabetico_decrescente',
                      'frequenza_crescente', 'frequenza_decrescente').
        lingua (str, opzionale): La lingua per i messaggi ('en' per inglese, 'it' per italiano). Default è 'en'.

    Returns:
        None: La funzione stampa i risultati ordinati sulla console.
    """
    if ordine == 'alfabetico_crescente':
        sorted_estensioni = sorted(estensioni.items(), key=lambda item: item[0])
    elif ordine == 'alfabetico_decrescente':
        sorted_estensioni = sorted(estensioni.items(), key=lambda item: item[0], reverse=True)
    elif ordine == 'frequenza_crescente':
        sorted_estensioni = sorted(estensioni.items(), key=lambda item: item[1])
    else:  # Default: 'frequenza_decrescente'
        sorted_estensioni = sorted(estensioni.items(), key=lambda item: item[1], reverse=True)

    for estensione, count in sorted_estensioni:
        print(f".{estensione} = {count}")

def gestisci_errore(errore, lingua='en'):
    """
    Gestisce e stampa l'errore in base alla lingua scelta.

    Args:
        errore (Exception): L'errore da gestire.
        lingua (str, opzionale): La lingua per i messaggi di errore ('en' per inglese, 'it' per italiano). Default è 'en'.
    """
    stampa_messaggio('errore_generico', lingua, errore=str(errore))

def analizza_estensioni(cartella, debug=False, ordine='frequenza_decrescente', lingua='en'):
    """
    Analizza le estensioni dei file in una cartella e stampa i risultati ordinati.

    Args:
        cartella (str): Il percorso della cartella da analizzare.
        debug (bool, opzionale): Se True, stampa informazioni aggiuntive per il debug. Default è False.
        ordine (str, opzionale): Il criterio di ordinamento ('alfabetico_crescente', 'alfabetico_decrescente',
                                  'frequenza_crescente', 'frequenza_decrescente'). Default è 'frequenza_decrescente'.
        lingua (str, opzionale): La lingua per i messaggi ('en' per inglese, 'it' per italiano). Default è 'en'.

    Returns:
        None: La funzione stampa i risultati ordinati sulla console.
    """
    if not verifica_percorso(cartella, lingua):
        return
    
    estensioni = defaultdict(int)
    
    try:
        for root, dirs, files in os.walk(cartella):
            if debug:
                stampa_messaggio('analisi', lingua, root=root)

            for file in files:
                estensione = os.path.splitext(file)[1][1:]
                estensioni[estensione] += 1

        if not estensioni:
            stampa_messaggio('nessun_file', lingua)
            return

        ordina_e_stampa_estensioni(estensioni, ordine, lingua)

    except Exception as e:
        gestisci_errore(e, lingua)

def scegli_lingua():
    """
    Chiede all'utente di inserire la lingua e restituisce la scelta valida.

    La lingua viene richiesta fino a 3 volte. Se l'input è non valido, viene utilizzata la lingua predefinita.

    Returns:
        str: La lingua scelta ('en' per inglese, 'it' per italiano). Default è 'en'.
    """
    lingue_valide = ['en', 'it']
    for _ in range(3):
        lingua = input(MESSAGGI['en']['inserisci_lingua']).strip().lower()
        if lingua in lingue_valide:
            return lingua
    
    return 'en'

def main():
    """
    Funzione principale per eseguire l'analisi delle estensioni dei file.

    Chiede all'utente di inserire la lingua, il percorso della cartella e l'ordinamento,
    quindi esegue l'analisi delle estensioni dei file.
    
    Returns:
        None
    """
    lingua = scegli_lingua()
    cartella = input(MESSAGGI[lingua]['inserisci_percorso'])
    ordine = scegli_ordine(lingua)
    analizza_estensioni(cartella, debug=True, ordine=ordine, lingua=lingua)

if __name__ == '__main__':
    main()
