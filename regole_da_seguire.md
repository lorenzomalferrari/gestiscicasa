# DATABASE

## Diagramma

Vedere file: https://miro.com/welcomeonboard/aWVDWHcxRDdsclpWQ0V5ckZzeFcwaE05ZTE1a0pFUVQ3WDlzaHlIR2swdmwxOG5zRm1FZ2tpTkpOcE90bUhXb3wzNDU4NzY0NTk2NjcxNjY2NjAzfDI=?share_link_id=898490263105

## Regole

Ogni tabella deve avere:
- colonna "id". Sarà autoincrementale e non nulla
- se serve colonna codice, scriverla code e renderla univoca e dargli la lunghezza massima a 2 o 3 caratteri (se non per diverse necessità)
- la descrizione della tabella sarà sempre in colonna "name";
- aggiungere sempre colonna "note". Non deve avere la "s" -> "notes"
- due colonne date. Una per indicare l'inserimento e una per indicare l'aggiornamento.
Verranno chiamate sempre creationDate e updateDate. Ci sarà una CI che controllerà che ogni create table abbia queste due colonne


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

- Vedere progetti separati che saranno presenti nel CRM come sottomoduli, comunque regola generale è quella di rispettare Python 3, ci sarà CI che controllerà questo standard
