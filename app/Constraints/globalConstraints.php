<?php

// ### Define tipos de usuários ####################################################

/**
 * USER_ROLE_ADMIN : Reponsável por administrar toda a aplicação
 */
define('USER_ROLE_ADMIN', 'admin');


// ### Definir estatus do usuário #################################################
/**
 * USER_STATUS_BANNED : Usuário banido do sistema
 */
define('USER_STATUS_BANNED', -1);
/**
 * USER_STATUS_INACTIVE : Usuário inativo no sistema
 */
define('USER_STATUS_INACTIVE', 0);
/**
 * USER_STATUS_ACTIVE : Usuário ativo no sistema
 */
define('USER_STATUS_ACTIVE', 1);