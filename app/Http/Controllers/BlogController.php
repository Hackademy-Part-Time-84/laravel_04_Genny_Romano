<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class BlogController extends Controller
{
    private array $articoli = [
        ['id'=>1,'titolo'=>'Il piacere di leggere lentamente','slug'=>'leggere-lentamente','autore'=>'Genny Romano','data'=>'14 novembre 2026','categoria'=>'Libri','immagine'=>'https://images.unsplash.com/photo-1512820790803-83ca734da794?w=900','estratto'=>'Rallentare la lettura significa concedersi il tempo di entrare davvero nelle storie.','contenuto'=>'Un libro non è una corsa: è uno spazio personale in cui fermarsi, osservare e lasciarsi sorprendere. Leggere lentamente permette di assaporare le parole, ritrovare dettagli e costruire un rapporto più profondo con le storie.'],
        ['id'=>2,'titolo'=>'Le città raccontate dai libri','slug'=>'citta-e-libri','autore'=>'Marco Bianchi','data'=>'12 novembre 2026','categoria'=>'Viaggi','immagine'=>'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=900','estratto'=>'Ci sono città che conosciamo prima ancora di visitarle, grazie alle pagine di un romanzo.','contenuto'=>'Le pagine di un romanzo possono diventare mappe: ci accompagnano in strade sconosciute, piazze immaginarie e luoghi che un giorno potremmo visitare davvero.'],
        ['id'=>3,'titolo'=>'Come scegliere la prossima lettura','slug'=>'scegliere-prossima-lettura','autore'=>'Sara Verdi','data'=>'10 novembre 2026','categoria'=>'Consigli','immagine'=>'https://images.unsplash.com/photo-1519682337058-a94d519337bc?w=900','estratto'=>'Ascolta la curiosità, esplora generi diversi e lasciati guidare dalle domande.','contenuto'=>'Non esiste una formula perfetta per scegliere un libro. Puoi partire da un tema che ti incuriosisce, da un consiglio ricevuto o semplicemente da una copertina che cattura la tua attenzione.'],
        ['id'=>4,'titolo'=>'Piccole librerie, grandi storie','slug'=>'piccole-librerie','autore'=>'Luca Neri','data'=>'8 novembre 2026','categoria'=>'Cultura','immagine'=>'https://images.unsplash.com/photo-1507842217343-583bb7270b66?w=900','estratto'=>'Le librerie indipendenti sono luoghi di incontro, scoperta e comunità.','contenuto'=>'Entrare in una libreria indipendente significa spesso incontrare una selezione personale, ascoltare suggerimenti e scoprire autori che non stavamo cercando.'],
        ['id'=>5,'titolo'=>'Il valore di un diario di lettura','slug'=>'diario-di-lettura','autore'=>'Anna Rossi','data'=>'6 novembre 2026','categoria'=>'Idee','immagine'=>'https://images.unsplash.com/photo-1455390582262-044cnej?w=900','estratto'=>'Annotare impressioni e citazioni aiuta a conservare il dialogo con ogni libro.','contenuto'=>'Un diario di lettura non deve essere perfetto. Bastano poche righe: una frase, una sensazione, una domanda. Col tempo diventerà una piccola mappa del nostro percorso.'],
        ['id'=>6,'titolo'=>'Leggere insieme','slug'=>'leggere-insieme','autore'=>'Paolo Blu','data'=>'4 novembre 2026','categoria'=>'Comunità','immagine'=>'https://images.unsplash.com/photo-1521587760476-6c12a4b040da?w=900','estratto'=>'Un gruppo di lettura trasforma un’esperienza individuale in una conversazione.','contenuto'=>'Condividere un libro significa scoprire interpretazioni diverse, confrontarsi e magari cambiare idea. La lettura resta personale, ma si arricchisce di nuove voci.'],
    ];

    public function home(): View
    {
        return view('home', ['articoli' => array_slice($this->articoli, 0, 3)]);
    }

    public function index(): View
    {
        return view('articoli.index', ['articoli' => $this->articoli]);
    }

    public function show(string $slug): View
    {
        $articolo = collect($this->articoli)->firstWhere('slug', $slug);
        abort_if(!$articolo, 404);

        return view('articoli.show', compact('articolo'));
    }
}
