<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>contle de usuários </title>
</head>
<body>
    <?php

    // 1 - Classe Usuario
    class Usuario {
        public $userName;
        public $userLogin;
        public $userPass;
        
        public function __construct($userName, $userLogin, $userPass) {
            $this->userName = $userName;
            $this->userLogin = $userLogin;
            $this->userPass = $userPass;
        }
    }

    class Session {
        public $sessionId;
        public $status;
        public $usuario; // minha referencia para um objeto Usuario
        public $dataHoraInicio;
        public $dataHoraUltimoAcesso;
        
        public function __construct($sessionId, $usuario) {
            $this->sessionId = $sessionId;
            $this->usuario = $usuario;
            $this->status = 1; // se for  1 para ativo, se  0 para inativo
            $this->dataHoraInicio = new DateTime();
            $this->dataHoraUltimoAcesso = new DateTime();
        }
        
        public function iniciaSessao() {
            $this->status = 1;
            $this->dataHoraInicio = new DateTime();
            $this->dataHoraUltimoAcesso = new DateTime();
            return true;
        }
        
        public function finalizaSessao() {
            $this->status = 0;
            return true;
        }
        
        public function getUsuarioSessao() {
            return $this->usuario;
        }
    }

    
    $usuario = new Usuario("Mariana", "mariana123", "senhaSegura");
    $sessao = new Session("sessao123", $usuario);

    // Iniciar a sessão
    $sessao->iniciaSessao();
    ?>

    <h1>Detalhes da Sessão</h1>
    
    <p><strong>usuario:</strong> <?php echo $sessao->getUsuarioSessao()->userName; ?></p>
    <p><strong>login:</strong> <?php echo $sessao->getUsuarioSessao()->userLogin; ?></p>
    <p><strong>status da Sessão:</strong> <?php echo $sessao->status ? "Ativa" : "Inativa"; ?></p>
    <p><strong>Data/Hora de Início:</strong> <?php echo $sessao->dataHoraInicio->format('Y-m-d H:i:s'); ?></p>
    <p><strong>Último Acesso:</strong> <?php echo $sessao->dataHoraUltimoAcesso->format('Y-m-d H:i:s'); ?></p>

    <?php
    // Finalizar a sessão
    $sessao->finalizaSessao();
    ?>
    
    <p><strong>Status da Sessão após finalização:</strong> <?php echo $sessao->status ? "Ativa" : "Inativa"; ?></p>
</body>
</html>
