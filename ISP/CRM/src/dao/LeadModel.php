<?php 

namespace CRM\dao;

use CRM\BD;
use CRM\Interfaces\ICadastro;
use CRM\Componentes\Notificacao;
use CRM\Interfaces\INotificacao;

class LeadModel extends BD implements ICadastro, INotificacao{
    public function salvar()
    {
        
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        
    }
}