<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Uri;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public static $services = [
        [
            'uri' => 'Formazione_online',
            'name' => 'Formazione Online',
            'costo' => 500,
            'tempo_di_realizzazione' => '2 settimane',
            'descrizione' => 'I nostri corsi di formazione online sono progettati per fornire una formazione completa e pratica che ti preparerà per una carriera di successo come full stack developer. Siamo appassionati di condividere le nostre conoscenze e aiutarti a raggiungere i tuoi obiettivi professionali.',
            'descrizione_dettaglio1'=> 'Benvenuto nel mio portfolio online! Sono un web full stack developer appassionato e sono qui per condividere con te il mio mondo di creazioni digitali e conoscenze nel campo dello sviluppo web. Inoltre, offro un corso di formazione completo per aiutarti a raggiungere il tuo obiettivo di diventare uno sviluppatore web full stack di successo.',
            'descrizione_dettaglio2'=> 'Nel mio portfolio, troverai una raccolta di progetti reali su cui ho lavorato, dimostrando le mie competenze nel front-end e nel back-end, l integrazione di database e l esperienza utente.',
            'descrizione_dettaglio3'=> 'Oltre a mostrare le mie realizzazioni, offro un corso di formazione completo per aiutarti a imparare le stesse competenze che ho sviluppato nel corso della mia carriera. Il corso è progettato per principianti e professionisti in cerca di un upgrade.',
            'descrizione_dettaglio4'=> 'Come tuo mentore, sarò a tua disposizione per rispondere alle tue domande, guidarti attraverso il percorso di apprendimento e condividere la mia esperienza nel settore.',
            'descrizione_dettaglio5'=> 'Sono impegnato nell aiutarti a raggiungere i tuoi obiettivi nel mondo dello sviluppo web. La mia passione per la creazione digitale e la mia esperienza nel settore saranno il tuo trampolino di lancio verso una carriera di successo. Scopri il mio portfolio e unisciti al mio corso di formazione per iniziare il tuo viaggio verso il web development su PortFolio. Sarà un onore condividere questa avventura con te!',
            't-name' => 'Luca Bianchi',
            't-reference' => 'I corsi di web development offerti da questa piattaforma sono eccezionali. Le risorse didattiche sono chiare e facili da seguire, e mi hanno aiutato a migliorare le mie abilità in programmazione.',
            't-position' => 'Studente universitario',
        ],

        [
            'uri' => 'Gestione_social_media',
            'name' => 'Gestione Social Media',
            'costo' => 800,
            'tempo_di_realizzazione' => '1 settimana',
            'descrizione' => 'Con la nostra esperienza tecnica e la conoscenza delle ultime tendenze nei social media, garantiamo che la tua presenza online sia gestita in modo efficace e professionale.',
            'descrizione_dettaglio1'=> 'Benvenuto nel mio portfolio online! Sono un web full stack developer con una passione per la gestione dei social network, e sono qui per mostrarti come posso aiutarti a far crescere la tua presenza online. Attraverso una combinazione di competenze tecniche avanzate e strategie di marketing efficaci, ho aiutato numerose aziende a raggiungere il successo sui social media.',
            'descrizione_dettaglio2'=> 'Nel mio portfolio, troverai esempi di siti web che ho sviluppato, ottimizzati per l engagement e l interazione social. Questi siti creano una forte presenza online per il tuo brand.',
            'descrizione_dettaglio3'=> 'Offro servizi completi di gestione dei social network, compresi la creazione di contenuti, la pianificazione strategica e la crescita organica degli utenti. Lascia che il tuo brand brilli sui principali social media.',
            'descrizione_dettaglio4'=> 'Utilizzo le mie competenze full stack per integrare efficacemente i tuoi siti web con i tuoi profili social, creando una presenza online coesa e potente.',
            'descrizione_dettaglio5'=> 'Sono appassionato sia di tecnologia che di strategie di marketing digitale. La mia combinazione di competenze tecniche avanzate e conoscenza approfondita dei social media mi permette di offrire un servizio completo per far crescere il tuo brand online. Se vuoi portare la tua presenza sui social media al prossimo livello, esplora il mio portfolio e contattami su PortFolio. Sarà un piacere lavorare con te per raggiungere i tuoi obiettivi digitali.',
            't-name' => 'Marco Verdi',
            't-reference' => 'Hanno creato un sito web personalizzato per il mio ristorante, e sono rimasto estremamente soddisfatto del risultato. Il design è accattivante, e ora i miei clienti possono facilmente prenotare online.',
            't-position' => 'Proprietario di un ristorante',
        ],

        [
            'uri' => 'Design_grafico',
            'name' => 'Design Grafico',
            'costo' => 900,
            'tempo_di_realizzazione' => '1 settimana',
            'descrizione' => 'Siamo una combinazione di talento tecnico e creativo. Con una profonda comprensione delle tendenze di design e delle migliori pratiche di sviluppo web, siamo in grado di creare soluzioni di design grafico che si integrano perfettamente con il tuo marchio e che sono pronte per il mondo digitale.',
            'descrizione_dettaglio1'=> 'Benvenuto nel mio portfolio online! Sono un web full stack developer con una passione per il design grafico, e sono qui per presentarti il mio mondo di creazioni digitali. La mia capacità di unire sviluppo web e design grafico mi consente di offrire soluzioni complete per portare le tue idee online, creando esperienze digitali straordinarie.',
            'descrizione_dettaglio2'=> 'Nel mio portfolio, troverai esempi di siti web che ho creato, ottimizzati sia dal punto di vista tecnico che estetico. Questi siti web offrono un esperienza utente coinvolgente e visivamente accattivante.',
            'descrizione_dettaglio3'=> 'Offro servizi di design grafico per loghi, immagini, grafiche social, materiali pubblicitari e molto altro. Ogni creazione è progettata su misura per rispecchiare la tua identità aziendale o personale.',
            'descrizione_dettaglio4'=>  'La mia esperienza full stack mi permette di integrare il design grafico direttamente nei progetti di sviluppo web, garantendo una coerenza visiva e un esperienza utente senza soluzione di continuità.',
            'descrizione_dettaglio5'=>  'Sono appassionato sia di tecnologia che di design creativo. La mia abilità nel combinare queste due discipline mi permette di offrire soluzioni complete che si distinguono online. Se desideri portare le tue idee al livello successivo e creare esperienze digitali straordinarie, esplora il mio portfolio e contattami su PortFolio. Sarà un piacere collaborare con te per dar vita alle tue visioni.',
            't-name' => 'Elena Ferri',
            't-reference' => 'La creazione del nostro sito web è stata gestita in modo impeccabile da questa azienda. Il sito è professionale e ci ha aiutato a raggiungere nuovi clienti.',
            't-position' => 'Proprietaria di un azienda di servizi legali',
        ],

        [
            'uri' => 'Web_sites',
            'name' => 'Siti Web',
            'costo' => 1000,
            'tempo_di_realizzazione' => '1-2 settimane',
            'descrizione' => 'Con un approccio basato sulla qualità e un impegno per l eccellenza tecnica, garantiamo che il tuo sito web sarà all altezza delle tue aspettative. Abbiamo una vasta esperienza in una varietà di settori e siamo pronti a realizzare la tua visione online.',
            'descrizione_dettaglio1'=> 'Benvenuto nel mio portfolio online! Sono un web full stack developer e sono qui per mostrarti il mio talento e la mia passione per la creazione di siti web straordinari. Se stai cercando un partner affidabile per sviluppare il tuo sito web, sei nel posto giusto.',
            'descrizione_dettaglio2'=> 'Nel mio portfolio, troverai una varietà di progetti di siti web che ho sviluppato, da semplici siti informativi a complesse piattaforme di e-commerce. Ogni progetto è personalizzato per soddisfare le esigenze del cliente.',
            'descrizione_dettaglio3'=> 'Utilizzo le ultime tecnologie e i migliori framework per assicurare che il tuo sito web sia veloce, sicuro e altamente performante.',
            'descrizione_dettaglio4'=> 'Tutti i siti web che sviluppo sono ottimizzati per essere visualizzati su dispositivi desktop, tablet e smartphone, garantendo un esperienza utente impeccabile su ogni dispositivo.',
            'descrizione_dettaglio5'=> 'Sono appassionato dello sviluppo web e dedico ogni giorno a perfezionare le mie competenze per offrire ai clienti siti web di alta qualità. La mia missione è trasformare le tue idee in realtà digitali che abbiano un impatto duraturo. Se desideri un sito web professionale, efficace e su misura per le tue esigenze, esplora il mio portfolio e contattami su [Nome del Sito Portfolio]. Sarà un piacere lavorare con te per realizzare il sito web dei tuoi sogni.',
            't-name' => 'Giuseppe Romano',
            't-reference' => 'Abbiamo collaborato con questo team di sviluppo per diversi progetti, e siamo costantemente soddisfatti dei risultati. La loro competenza è eccezionale e ci hanno aiutato a raggiungere i nostri obiettivi tecnologici.',
            't-position' => 'Direttore IT di un azienda di tecnologia',
        ],

        [
            'uri' => 'Servizi_seo',
            'name' => 'Servizi SEO',
            'costo' => 1200,
            'tempo_di_realizzazione' => '2 settimane',
            'descrizione' => 'Siamo esperti nel campo dell ottimizzazione SEO e comprendiamo l importanza di una presenza online solida. La nostra approfondita conoscenza tecnica e la nostra esperienza nel settore ci permettono di sviluppare strategie SEO personalizzate che funzionano per il tuo business.',
            'descrizione_dettaglio1'=> 'Benvenuto nel mio portfolio online! Sono un web full stack developer con una passione per l ottimizzazione dei motori di ricerca (SEO) e sono qui per mostrarti come posso aiutarti a far brillare il tuo sito web online. La mia combinazione di competenze tecniche avanzate e strategie SEO efficaci può portare il tuo sito in cima ai motori di ricerca e aumentare la visibilità del tuo brand.',
            'descrizione_dettaglio2'=> 'Nel mio portfolio, troverai esempi di siti web che ho sviluppato e ottimizzato per una performance SEO superiore. Questi siti web attirano il traffico organico e migliorano la classifica sui motori di ricerca.',
            'descrizione_dettaglio3'=> 'Offro servizi completi di SEO, compresi miglioramenti on-page, ottimizzazione dei contenuti, analisi delle parole chiave, link building e altro ancora.',
            'descrizione_dettaglio4'=> 'Utilizzo strumenti avanzati per analizzare e monitorare costantemente le prestazioni del tuo sito web e apportare miglioramenti continuativi.',
            'descrizione_dettaglio5'=> 'Sono appassionato di tecnologia e determinato a ottenere risultati tangibili attraverso la SEO. La mia esperienza combinata nel campo dello sviluppo web e della SEO mi consente di offrire soluzioni complete per aumentare la visibilità online del tuo brand. Se desideri posizionare il tuo sito web in cima ai motori di ricerca e ottenere un vantaggio competitivo online, esplora il mio portfolio e contattami su PortFolio. Sarà un piacere collaborare con te per raggiungere i tuoi obiettivi SEO.',
            't-name' => 'Davide Mancini',
            't-reference' => 'I corsi di sviluppo web sono stati un investimento prezioso per il mio futuro. Mi hanno insegnato le competenze necessarie per trovare opportunità di lavoro come sviluppatore web.',
            't-position' => 'Studente universitario',
        ],

        [
            'uri' => 'Sistemi_gestionali',
            'name' => 'Sistema Gestionali',
            'costo' => 1500,
            'tempo_di_realizzazione' => '2 settimane',
            'descrizione' => 'Ottimizza il tuo business con un sistema gestionale personalizzato. Contattaci oggi stesso per una consulenza gratuita e scopri come possiamo semplificare le tue operazioni aziendali.',
            'descrizione_dettaglio1'=> 'Benvenuto nel mio portfolio online! Sono un web full stack developer con una passione per la creazione di sistemi gestionali personalizzati, e sono qui per mostrarti come posso aiutarti a migliorare l efficienza e la produttività della tua azienda. Attraverso soluzioni software su misura, sono in grado di semplificare i processi aziendali e far crescere il tuo business.',
            'descrizione_dettaglio2'=> 'Nel mio portfolio, troverai esempi di sistemi gestionali che ho sviluppato per aziende di diverse dimensioni e settori. Questi sistemi sono progettati per soddisfare le esigenze specifiche del tuo business.',
            'descrizione_dettaglio3'=> 'Posso integrare i sistemi gestionali con i tuoi strumenti aziendali esistenti, migliorando la coerenza e l efficienza operativa.',
            'descrizione_dettaglio4'=> 'Ottimizzo i flussi di lavoro aziendali attraverso l automazione dei processi, consentendoti di risparmiare tempo e risorse preziose.',
            'descrizione_dettaglio5'=> 'Sono appassionato dello sviluppo software e dell ottimizzazione dei processi aziendali. La mia esperienza nel campo dello sviluppo full stack mi consente di creare soluzioni software altamente efficaci e personalizzate per il tuo business. Se desideri semplificare i processi aziendali, migliorare l efficienza e ottenere un vantaggio competitivo, esplora il mio portfolio e contattami su PortFolio. Sarà un piacere collaborare con te per creare un sistema gestionale su misura per la tua azienda.',
            't-name' => 'Anna Esposito',
            't-reference' => 'Grazie ai servizi di web developing, il nostro brand ha ottenuto una forte presenza online. Il loro lavoro è stato fondamentale per la crescita del nostro business.',
            't-position' => 'Proprietaria di un azienda di moda',
        ],

        [
            'uri' => 'Marketing_digitale',
            'name' => 'Marketing Digitale',
            'costo' => 1800,
            'tempo_di_realizzazione' => '2 settimane',
            'descrizione' => 'Investi nel tuo successo online con il nostro servizio di marketing digitale strategico. Contattaci oggi stesso per una consulenza gratuita e scopri come possiamo aiutarti a raggiungere nuovi livelli di crescita e visibilità online.',
            'descrizione_dettaglio1'=> 'Benvenuto nel mio portfolio online! Sono un web full stack developer con una passione per il marketing digitale e sono qui per mostrarti come posso aiutarti a raggiungere il massimo successo online. Unendo competenze tecniche avanzate e strategie di marketing efficaci, posso aiutarti a far crescere la tua presenza online e a raggiungere i tuoi obiettivi di business.',
            'descrizione_dettaglio2'=> 'Nel mio portfolio, troverai esempi di siti web che ho sviluppato e ottimizzato per una performance eccezionale. Questi siti web sono progettati per attirare e coinvolgere il pubblico, oltre a essere ottimizzati per il posizionamento sui motori di ricerca.',
            'descrizione_dettaglio3'=> 'Offro servizi di marketing digitale, inclusi la creazione di contenuti, la gestione delle campagne pubblicitarie, l ottimizzazione dei social media e molto altro.',
            'descrizione_dettaglio4'=> 'Utilizzo analisi dettagliate per monitorare le prestazioni online e apportare miglioramenti costanti per massimizzare il tuo ritorno sugli investimenti.',
            'descrizione_dettaglio5'=> 'Sono appassionato sia di tecnologia che di marketing digitale, e credo che la combinazione di entrambe sia la chiave del successo online. La mia esperienza nel campo dello sviluppo web full stack mi consente di creare siti web altamente performanti, mentre le mie competenze di marketing digitale aiutano a farli brillare online. Se desideri aumentare la tua presenza online, raggiungere nuovi clienti e migliorare la tua visibilità, esplora il mio portfolio e contattami su PortFolio. Sarà un piacere lavorare con te per raggiungere i tuoi obiettivi di marketing digitale.',
            't-name' => 'Laura Giallo',
            't-reference' => 'I servizi di sviluppo di siti e-commerce sono stati fondamentali per la nostra azienda. Grazie a loro, ora gestiamo con successo le vendite online, e il nostro team ha ottenuto un notevole impulso.',
            't-position' => 'Manager di marketing',
        ],

        [
            'uri' => 'Analisi_dati',
            'name' => 'Analisi Dati',
            'costo' => 2200,
            'tempo_di_realizzazione' => '3 settimane',
            'descrizione' => 'Abbiamo l esperienza e le competenze per guidarti nell analisi dei tuoi dati aziendali. La nostra conoscenza tecnica e la nostra capacità di sviluppare soluzioni personalizzate ti aiuteranno a ottenere valore dai tuoi dati e a prendere decisioni basate su dati concreti.',
            'descrizione_dettaglio1'=> 'Benvenuto nel mio portfolio online! Sono un web full stack developer con una passione per l analisi dati, e sono qui per mostrarti come posso aiutarti a trarre il massimo vantaggio dai tuoi dati aziendali. Attraverso una combinazione di competenze tecniche avanzate e capacità di analisi dati, posso aiutarti a ottenere insight preziosi e prendere decisioni più informate.',
            'descrizione_dettaglio2'=> 'Nel mio portfolio, troverai esempi di dashboard e strumenti di visualizzazione dati che ho creato per aziende di vari settori. Queste dashboard offrono una visualizzazione chiara e intuitiva dei tuoi dati aziendali.',
            'descrizione_dettaglio3'=> 'Offro servizi di analisi dati approfondita, tra cui l identificazione di tendenze, il rilevamento di anomalie e la previsione dei comportamenti futuri basati sui dati.',
            'descrizione_dettaglio4'=> 'Posso integrare diverse fonti di dati aziendali in un unico sistema, consentendo un accesso più semplice e una visione completa dei dati.',
            'descrizione_dettaglio5'=> 'Sono appassionato di tecnologia e ho una profonda comprensione dell analisi dati. La mia esperienza nel campo dello sviluppo web full stack mi consente di creare strumenti di analisi dati sofisticati e di integrarli in soluzioni aziendali esistenti. Se desideri ottenere valore dai tuoi dati, scoprire nuove opportunità e prendere decisioni più informate, esplora il mio portfolio e contattami su [Nome del Sito Portfolio]. Sarà un piacere collaborare con te per svelare l incredibile potenziale dei tuoi dati aziendali.',
            't-name' => 'Roberto Neri',
            't-reference' => 'Ho seguito vari corsi online per migliorare le mie abilità di sviluppatore web. I contenuti erano ricchi e ben strutturati. Ora ho una carriera più prospera come freelancer.',
            't-position' => 'Freelancer',
        ],

        [
            'uri' => 'Sviluppo_eCommerce',
            'name' => 'Piattaforma eCommerce',
            'costo' => 2500,
            'tempo_di_realizzazione' => '3 settimane',
            'descrizione' => 'Porta il tuo business online e raggiungi un pubblico più ampio con una soluzione di e-commerce su misura. Contattaci oggi stesso per una consulenza gratuita e scopri come possiamo aiutarti a lanciare o migliorare il tuo negozio online.',
            'descrizione_dettaglio1'=> 'Benvenuto nel mio portfolio online! Sono un web full stack developer e sono qui per mostrarti come posso aiutarti a creare un negozio online di successo. La mia passione è unire tecnologia avanzata e design intuitivo per offrire soluzioni e-commerce che soddisfano le esigenze uniche del tuo business.',
            'descrizione_dettaglio2'=> 'Nel mio portfolio, troverai esempi di negozi online che ho sviluppato, ottimizzati per una user experience eccellente e una conversione dei visitatori in clienti.',
            'descrizione_dettaglio3'=> 'Posso integrare funzionalità avanzate come il carrello della spesa, il pagamento online sicuro, la gestione delle scorte e molto altro, in modo da poter gestire facilmente il tuo negozio online.',
            'descrizione_dettaglio4'=> 'Tutti i siti e-commerce che creo sono completamente responsive, garantendo che i tuoi clienti possano fare acquisti comodamente da qualsiasi dispositivo.',
            'descrizione_dettaglio5'=> 'Sono appassionato di creare esperienze di shopping online di alta qualità. La mia esperienza nel campo dello sviluppo web full stack mi consente di realizzare negozi online che non solo soddisfano le tue aspettative, ma superano anche quelle dei tuoi clienti. Se desideri creare o migliorare il tuo negozio online, esplora il mio portfolio e contattami su PortFolio. Sarà un piacere collaborare con te per realizzare un e-commerce di successo che farà crescere il tuo business.',
            't-name' => 'Maria Rossi',
            't-reference' => 'Grazie ai servizi di web developing forniti da questa azienda, il mio negozio online ha visto un aumento significativo delle vendite. Il loro team professionale ha creato un sito web di alta qualità che ha trasformato il mio business.',
            't-position' => 'Proprietaria di un negozio di abbigliamento online',
        ],
    ];

    public function services() {

        return view('pages.services', ['services' => self::$services]);
    }

    public function detail($uri)
        {
            foreach (self::$services as $service) {
                if ($service['uri'] == $uri) {
                    return view('pages.service-detail', compact('service'));
                }
            }
            abort(404);
        }

    }
