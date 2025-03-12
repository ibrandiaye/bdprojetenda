<?php

namespace App\Mail;

use App\Matrice;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TacheMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $matrice;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Matrice $matrice)
    {
        $this->matrice = $matrice;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ibrandiaye@endaecopop.org')
        ->subject('Nouvelle Tâche')
        ->view('matrice.mail')->with([
            'tache' => $this->matrice->tache,
            'datelimite' => $this->matrice->datelimite,
            'personneimplique' => $this->matrice->personneimplique,
            'comentaire' =>$this->matrice->comentaire,
            'projet'=>$this->matrice->appel->titre
        ]);
    }
}
