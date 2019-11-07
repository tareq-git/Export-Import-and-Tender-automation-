<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCatalogue extends Mailable
{
    use Queueable, SerializesModels;
    public $catalogueItems;
    public $catalogue;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($catalogueItems,$catalogue)
    {
        $this->catalogue = $catalogue;
        $this->catalogueItems = $catalogueItems;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $catalogue = $this->catalogue;
        $catalogueItems = $this->catalogueItems;
        return $this->view('pages.catalogues.print', compact('catalogueItems','catalogue'));
    }
}
