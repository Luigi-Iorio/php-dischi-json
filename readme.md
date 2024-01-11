# PHP Dischi Json

### Descrizione del Progetto

Il progetto PHP Dischi Json è una web-app che consente di visualizzare una lista di dischi musicali tramite una semplice interfaccia web. La tecnologia utilizzata include HTML, CSS, VueJS (importato tramite CDN), Axios e PHP.

### Funzionalità Chiave

- **Visualizzazione dei Dischi**: La pagina principale mostra una lista di dischi musicali con le relative informazioni, ottenute da un file JSON.

- **Dettagli del Disco Selezionato**: Al cliccare su un disco, l'applicazione recupera e mostra i dettagli del disco selezionato, arricchendo l'esperienza dell'utente.

## Storia Del Progetto

Il progetto è stato sviluppato seguendo un approccio graduale e ha attraversato diverse fasi di sviluppo per garantire una progressione organica. Di seguito sono evidenziate le principali fasi e decisioni prese durante lo sviluppo:

### Fase Iniziale: Setup dell'Applicazione

Inizialmente, mi sono concentrato sul setup dell'applicazione, creando la struttura di base per gestire la comunicazione tra back-end e il front-end.

### Implementazione della Lettura da File JSON

È stata implementata la lettura dei dati da un file JSON contenente le informazioni sui dischi musicali. Ciò ha reso dinamica la visualizzazione dei dischi sulla pagina.

### Aggiunta dei Dettagli del Disco Selezionato

Successivamente, è stata implementata la funzionalità bonus per migliorare l'esperienza utente. Ora, cliccando su un disco, l'applicazione recupera e mostra i dettagli specifici del disco selezionato.

---

### Chiamate API

A scopo didattico, sono state realizzate due chiamate API:

- La prima, `getElencoAlbum()`, ottiene tutte le informazioni sugli album e le assegna alla variabile `this.dischi`.

- La seconda, `albumSelezionato(index)`, utilizza nuovamente la chiamata API per ottenere tutti gli album, ma salva solo l'array del disco selezionato nella variabile `this.albumAttivo`.

_I dati potevano chiaramente essere ottenuti con solo la prima chiamata API, ma, per scopi didattici, è stata effettuata un'altra chiamata per illustrare il processo di salvare solo l'array del disco selezionato in una variabile aggiuntiva._
