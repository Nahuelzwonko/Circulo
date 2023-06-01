<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class FormularioEnviado extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $rutaArchivoPDF;
    public $rutaArchivoImagen;
    public $rutaTitulo;
    public $rutaPosgrado;
    public $rutaMatricula;
    public $rutaIngresos;
    public $rutaCuit;
    public $rutaSalud;
    public $rutaPoliza;
    public $rutaConsultorio;

    
    public function __construct($data, $rutaArchivoPDF, $rutaArchivoImagen, $rutaTitulo, $rutaPosgrado, $rutaMatricula, $rutaIngresos, $rutaCuit, $rutaSalud, $rutaPoliza, $rutaConsultorio)
    {
        $this->data = $data;
        $this->rutaArchivoPDF = $rutaArchivoPDF;
        $this->rutaArchivoImagen = $rutaArchivoImagen;
        $this->rutaTitulo = $rutaTitulo;
        $this->rutaPosgrado = $rutaPosgrado;
        $this->rutaMatricula = $rutaMatricula;
        $this->rutaIngresos = $rutaIngresos;
        $this->rutaCuit = $rutaCuit;
        $this->rutaSalud = $rutaSalud;
        $this->rutaPoliza = $rutaPoliza;
        $this->rutaPoliza = $rutaConsultorio; 
    }
    public function build()
    {
        $message = $this->markdown('emails.formulario')
        ->subject('Nuevo formulario enviado');

        if ($this->rutaArchivoPDF) {
            $message->attachFromStorageDisk('public', $this->rutaArchivoPDF);
        }

        if ($this->rutaArchivoImagen) {
            $message->attachFromStorageDisk('public', $this->rutaArchivoImagen);
        }

        if($this->rutaTitulo){
            $message->attachFromStorageDisk('public', $this->rutaTitulo);
        }
        if ($this->rutaPosgrado) {
            $message->attachFromStorageDisk('public', $this->rutaPosgrado);
        }
        if ($this->rutaMatricula) {
            $message->attachFromStorageDisk('public', $this->rutaMatricula);
        }
        if ($this->rutaIngresos) {
            $message->attachFromStorageDisk('public', $this->rutaIngresos);
        }
        if ($this->rutaCuit) {
            $message->attachFromStorageDisk('public', $this->rutaCuit);
        }
        if ($this->rutaSalud) {
            $message->attachFromStorageDisk('public', $this->rutaSalud);
        }
        if ($this->rutaPoliza) {
            $message->attachFromStorageDisk('public', $this->rutaPoliza);
        }
        if ($this->rutaConsultorio) {
            $message->attachFromStorageDisk('public', $this->rutaConsultorio);
        }
        return $message;
        
    }
}