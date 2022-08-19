<?php

namespace CRM\Interfaces;

use CRM\Componentes\Log;

interface ILog {
    public function registrarLog(Log $log);
}