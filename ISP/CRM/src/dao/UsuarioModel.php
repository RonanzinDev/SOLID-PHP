<?php 

namespace CRM\dao;

use CRM\BD;
use CRM\Componentes\Log;
use CRM\Componentes\Notificacao;
use CRM\Interfaces\ICadastro;
use CRM\Interfaces\ILog;
use CRM\Interfaces\INotificacao;

class UsuarioModel extends BD implements ICadastro, ILog, INotificacao {
    public function salvar()
    {
        
    }

    public function registrarLog(Log $log)
    {
        
    }
    public function enviarNotificacao(Notificacao $notificacao)
    {
        
    }
}