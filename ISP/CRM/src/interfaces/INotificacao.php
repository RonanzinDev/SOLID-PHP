<?php

namespace CRM\Interfaces;

use CRM\Componentes\Notificacao;

interface INotificacao {
    public function enviarNotificacao(Notificacao $notificacao);
}