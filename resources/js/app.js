import './bootstrap';
import '/resources/js/main.js';
import '/vendor/bootstrap/js/bootstrap.bundle.min.js';
import '/vendor/glightbox/js/glightbox.min.js';
import '/vendor/swiper/swiper-bundle.min.js';


  //funzioni per scritta dinamica testo
  function mostraEvolviTesto(testo, elemento, intervallo, tempoPausa, tempoScomparsa) {
    let indiceLettera = 0;
    let direzioneAvanti = true;

    function mostraProssimaLettera() {
        if (direzioneAvanti) {
            if (indiceLettera < testo.length) {
                elemento.textContent += testo.charAt(indiceLettera);
                indiceLettera++;
                setTimeout(mostraProssimaLettera, intervallo);
            } else {
                setTimeout(() => {
                    direzioneAvanti = false;
                    nascondiTesto();
                }, tempoPausa);
            }
        } else {
            if (elemento.textContent.length > 0) {
                elemento.textContent = elemento.textContent.slice(0, -1);
                setTimeout(mostraProssimaLettera, intervallo);
            } else {
                direzioneAvanti = true;
                setTimeout(() => {
                    indiceLettera = 0;
                    mostraProssimaLettera();
                }, tempoScomparsa);
            }
        }
    }

    function nascondiTesto() {
        setTimeout(() => {
            direzioneAvanti = false;
            mostraProssimaLettera();
        }, tempoScomparsa);
    }

    mostraProssimaLettera();
}

// Regole di utilizzo:
const elementoTesto = document.getElementById("testo"); // Sostituire "testo" con l'ID dell elemento HTML
const testoDaMostrare = "I'm Emanuele Papale"; // Sostituire con il testo da mostrare
const intervalloTraLettere = 200; // Tempo in millisecondi tra una lettera e l'altra
const tempoPausaTraAnimazioni = 2000; // Tempo in millisecondi tra l'animazione di scrittura e la pausa
const tempoScomparsa = 800; // Tempo in millisecondi per la scomparsa completa del testo

mostraEvolviTesto(testoDaMostrare, elementoTesto, intervalloTraLettere, tempoPausaTraAnimazioni, tempoScomparsa);
