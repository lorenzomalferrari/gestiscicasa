# DATABASE

## Diagramma

Vedere file: https://miro.com/welcomeonboard/aWVDWHcxRDdsclpWQ0V5ckZzeFcwaE05ZTE1a0pFUVQ3WDlzaHlIR2swdmwxOG5zRm1FZ2tpTkpOcE90bUhXb3wzNDU4NzY0NTk2NjcxNjY2NjAzfDI=?share_link_id=898490263105

## Regole

Ogni tabella deve avere:
- Colonna "id". Sarà autoincrementale e non sarà nulla
- Se serve colonna codice, scriverla code e renderla univoca e dargli la lunghezza massima a 2 o 3 caratteri (se non per diverse necessità)
- Descrizione della tabella sarà sempre in colonna "name", nel colonna aggiuntiva description per maggiori info (da non scambiare con le note);
- Aggiungere sempre colonna "notes".
- Le tabelle devono iniziare per lm_, seguito da una maiuscola e deve essere l'unico underscore presente;
- Le colonne non devono avere maiuscole ma underscore;
- Ogni tabella deve avere
- Chiave esterna sempre nome_tabella_id
- Due colonne date. Una per indicare l'inserimento e una per indicare l'aggiornamento. Verranno chiamate sempre create_date e update_date.
- Se la tabella mostra voci di sistema aggiungere colonna "by_system" e settarla a bit e default 0. Gli insert di sistema metteranno il bit a 1

Ci saranno dei controlli CI per ogni voce indicata nell'elenco precedente;


# CODICE PHP

- Deve rispettare PHP 8.2 e 8.3, ci saranno CI che controlleranno questo standard

- In model/ la classe che rappresenterà la tabella deve essere scritta al singolare;
- In model/ la classe del tipo deve essere scritta al singolare. es.: "Tipo Categoria" -> "CategoryType";
- Ogni classe deve avere la php doc presente
- Ogni tabella avrà una sua rappresentazione in due aspetti: classe modello e classe table
    - classe modello conterrà le variabili, costruttore, getter, setter, toString e funzioni dedicate e specifiche;
    - classe table rappresenterà "TableName" in Table/ troveremo file principale che richiama tutti i file presenti in Table/list/

# CODICE JS

# CODICE HTML

- Deve rispettare HTML 5, ci sarà CI che controllerà questo standard

# CODICE CSS

# CODICE PYTHON

- Vedere progetti separati che saranno presenti nel CRM come sottomoduli, comunque regola generale è quella di rispettare Python 3, ci sarà CI che controllerà questo standard.
