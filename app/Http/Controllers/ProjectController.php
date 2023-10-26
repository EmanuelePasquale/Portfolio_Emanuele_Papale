<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Uri;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Summary of projects
     * @var array
     */
    public static $projects = [
        [
            'uri' => 'Sito-di-annunci',
            'immagine' => 'Presto_1.png',
            'name' => 'Presto.it',
            'images'=> [
                'Presto_2.png', 'Presto_3.png', 'Presto_4.png', 'Presto_5.png',
            ],
            'tipo' => 'Front-End',
            'Database' => 'no',
            'Linguaggi/Framework/Librerie'=> 'HTML, CSS, Javascript/Bootstrap /JQuery',
            'descrizione' => 'Sito di annunci dal design colorato ed accattivante con possibilità di registrazione, login, ricerca tramite filtri ed Form invio Contact mail.',
            'descrizione-progetto'=> 'Benvenuti su Presto.it, il luogo perfetto per scoprire e pubblicare annunci in un ambiente vibrante e accattivante. Il nostro sito web presenta un design vivace e colorato che catturerà la tua attenzione fin dal primo istante. Con Presto.it, potrai facilmente navigare tra annunci di ogni genere, dalla vendita di oggetti usati alla ricerca di servizi locali.',
            'caratteristica_1'=> 'Gli utenti possono creare un account personale in pochi passaggi, consentendo loro di pubblicare annunci, seguire gli annunci preferiti e gestire
            il
            proprio profilo.',
            'caratteristica_2'=> 'Grazie ai potenti filtri di ricerca, troverai ciò che stai cercando in
            un attimo. Filtra gli annunci per categoria, località, prezzo e altro ancora,
            garantendo
            che tu possa trovare esattamente ciò di cui hai bisogno.',
            'caratteristica_3'=> 'Il nostro sito è progettato per essere visivamente stimolante, con
            colori brillanti e un layout intuitivo. Non solo troverai facilmente ciò che
            desideri,
            ma lo farai con stile.',
            'caratteristica_4'=> 'Vuoi saperne di più su un annuncio o contattare un venditore? Il
            nostro modulo di invio di contatti ti permette di farlo in modo semplice e
            veloce.
            Riceverai risposte dirette nella tua casella di posta elettronica.',
            'tecnologia_1'=> 'Abbiamo utilizzato HTML, CSS e JavaScript per creare un esperienza utente
            coinvolgente.
            Abbiamo incorporato il framework Bootstrap per garantire che il sito sia
            completamente
            reattivo e adatto a qualsiasi dispositivo.',
            'tecnologia_2'=> 'Abbiamo arricchito il sito con l uso di jQuery per aggiungere elementi
            dinamici che migliorano l usabilità e l esperienza utente.',
            'tecnologia_3'=> 'Non utilizziamo un database in questo progetto poiché ci concentriamo sulla
            visualizzazione e la gestione degli annunci, ma ciò potrebbe essere un opzione
            per sviluppi futuri.',

        ],

        [
            'uri' => 'Sito-di-annunci-completo',
            'immagine' => 'Fluid_1.png',
            'name' => 'Fluid',
            'images'=> [
                'Fluid_2.png', 'Fluid_3.png', 'Fluid_4.png', 'Fluid_5.png',
            ],
            'tipo' => 'Front-End',
            'Database' => 'no',
            'Linguaggi/Framework/Librerie'=> 'HTML, CSS, Javascript/Bootstrap /SwiperJs',
            'descrizione' => 'Sito di annunci dal design dinamico, con animazioni "fluide". Possibilità di registrazione, login, ricerca tramite filtri ed Form invio Contact mail.',
            'descrizione-progetto'=> 'Fluid è un progetto ambizioso dedicato agli amanti degli annunci e delle opportunità. Questa piattaforma innovativa è progettata per connettere acquirenti e venditori in modo rapido ed efficiente, senza alcun limite. Scopri le caratteristiche chiave e le tecnologie che rendono Fluid un esperienza unica.',
            'caratteristica_1'=> 'Con Fluid, non ci sono restrizioni sulla quantità o sulla tipologia di annunci che puoi pubblicare. Vendere, comprare o scambiare - è tutto possibile.',
            'caratteristica_2'=> 'La potente funzione di ricerca ti permette di trovare annunci in base a parole chiave, categoria, prezzo e posizione. Trova ciò di cui hai bisogno in pochi click.',
            'caratteristica_3'=> 'L interfaccia utente di Fluid è semplice da usare e offre una navigazione fluida tra gli annunci. Troverai tutto ciò di cui hai bisogno a portata di mano.',
            'caratteristica_4'=> 'Comunica con i venditori direttamente dalla piattaforma grazie al modulo di contatto integrato. Pianifica incontri, fai domande o negozia i dettagli dell acquisto senza sforzo.',
            'tecnologia_1'=> 'Fluid è stato sviluppato con una combinazione di HTML, CSS e JavaScript per garantire un esperienza utente piacevole e reattiva.',
            'tecnologia_2'=> 'Abbiamo creato un framework personalizzato per gestire il layout e l interattività del sito, garantendo un esperienza fluida per gli utenti.',
            'tecnologia_3'=> 'Anche se il progetto non utilizza un database, abbiamo implementato una solida gestione dei dati per mantenere gli annunci organizzati e facilmente accessibili.',
        ],

        [
            'uri' => 'Sito-di-streaming',
            'immagine' => 'Fakeflix_1.png',
            'images'=> [
                'Fakeflix_2.png', 'Fakeflix_3.png', 'Fakeflix_4.png',
            ],
            'name' => 'Fakeflix',
            'tipo' => 'Front-End/Back-End',
            'Database' => 'no',
            'Linguaggi/Framework/Librerie'=> 'HTML, CSS, Javascript/Bootstrap',
            'descrizione' => 'Sito in stile "Netflix", più che altro un esercizio di stile.',
            'descrizione-progetto'=> 'Fakeflix è la tua destinazione di intrattenimento online, dove puoi guardare film e telefilm in streaming in modo semplice e gratuito. Scopri cosa rende Fakeflix un punto di riferimento per gli amanti del cinema e delle serie TV.',
            'caratteristica_1'=> 'Fakeflix offre una vasta libreria di film e telefilm di diversi generi. Che tu sia interessato a film d azione, commedie, drammatici o serie TV, troverai una selezione eclettica di contenuti da esplorare.',
            'caratteristica_2'=> 'Nessuna necessità di abbonamenti o costi nascosti. Fakeflix è completamente gratuito e aperto a tutti gli utenti che vogliono godersi il loro intrattenimento preferito.',
            'caratteristica_3'=> 'L interfaccia utente di Fakeflix è progettata per essere intuitiva e facile da navigare. Troverai facilmente i film e le serie TV che desideri guardare, senza confusione.',
            'caratteristica_4'=> 'Non c è bisogno di creare un account o fornire informazioni personali. Basta visitare il sito e iniziare a guardare immediatamente.',
            'tecnologia_1'=> 'Fakeflix è stato sviluppato utilizzando HTML, CSS e JavaScript per fornire un esperienza di streaming fluida e intuitiva.',
            'tecnologia_2'=> 'Anche se il progetto non utilizza un database, è stato implementato un sistema di gestione dei contenuti per organizzare e presentare i film e le serie TV in modo efficace.',
            'tecnologia_3'=> 'Abbiamo utilizzato un player video integrato per consentire la riproduzione in streaming dei contenuti, offrendo agli utenti un esperienza di visualizzazione di alta qualità.',
        ],

        [
            'uri' => 'Sito-libreria',
            'immagine' => 'Library_1.png',
            'images'=> [
                'Library_2.png', 'Library_3.png', 'Library_4.png', 'Library_5.png'
            ],
            'name' => 'Library',
            'tipo' => 'Front-End/Back-End(deep)',
            'Database' => 'sì',
            'Linguaggi/Framework/Librerie'=> 'HTML, CSS, Javascript, MySQL / Bootstrap, Laravel/ AOS.js, Swiper.js, GLightBox.js,',
            'descrizione' => 'Sito articolato. Registrazione e login con autenticazione per alcuni contenuti, CDUR accessibile previa registrazione su database relazionale tipologia "many-to-many".',
            'descrizione-progetto'=> 'Library è un progetto web articolato che ti offre la possibilità di gestire la tua libreria personale in modo intuitivo e completo. Questa piattaforma unisce un interfaccia utente accattivante a un potente back-end, permettendoti di registrarti, accedere a contenuti esclusivi e organizzare la tua collezione di libri in modo efficace.',
            'caratteristica_1'=> 'Gli utenti possono registrare un account personale e accedere in modo sicuro al sito. L autenticazione è necessaria per accedere a funzionalità esclusive e interagire con altri membri della community..',
            'caratteristica_2'=> 'Una volta registrati, gli utenti possono aggiungere, rimuovere e modificare i libri nella propria libreria personale. Il database relazionale "many-to-many" permette una catalogazione dettagliata e flessibile dei libri.',
            'caratteristica_3'=> 'La piattaforma offre una vasta gamma di libri tra cui scegliere. Gli utenti possono esplorare libri, leggere recensioni, visualizzare anteprime e aggiungerli alla loro libreria personale.',
            'caratteristica_4'=> 'L interfaccia utente di Library è stata progettata per essere accattivante e reattiva. L utilizzo di animazioni fluide e l integrazione di strumenti come AOS.js, Swiper.js e GLightBox.js garantiscono un esperienza coinvolgente.',
            'tecnologia_1'=> 'HTML, CSS e JavaScript: Sono stati utilizzati per creare l aspetto e il comportamento interattivo del sito web, assicurando una user experience fluida e coinvolgente.',
            'tecnologia_2'=> 'Il framework Bootstrap è stato implementato per garantire una progettazione reattiva e coerente su dispositivi di diverse dimensioni.',
            'tecnologia_3'=> 'La piattaforma Laravel è stata utilizzata per gestire il back-end del sito, inclusi l accesso degli utenti, la gestione dei contenuti e l interazione con il database MySQL.',
        ],
    ];

    public function projects() {

        return view('pages.projects', ['projects' => self::$projects]);
    }

    public function detail($uri)
        {
            foreach (self::$projects as $project) {
                if ($project['uri'] == $uri) {
                    return view('pages.project-detail', compact('project'));
                }
            }
            abort(404);
        }

    }

