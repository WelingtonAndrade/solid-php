<?php
namespace App;

class EmailService{

    private $de;
    private $para;
    private $assunto;
    private $counteudo;

    public function __construct
    (
        string $de           = 'welingtonzin@gmail.com',
        string $para         = 'welingtonzin@gmail.com',
        string $assunto      = 'Principios Solid',
        string $counteudo    = 'APlicando na pratica'
    )
    {
        $this->de            = $de;
        $this->para          = $para;
        $this->assunto       = $assunto;
        $this->counteudo     = $counteudo;
    }

    public static function dispararEmail()
    {
        return "Email disparado Com Sucesso";
    }
}
