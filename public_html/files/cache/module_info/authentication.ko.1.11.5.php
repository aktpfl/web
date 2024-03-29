<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispAuthenticationAdminConfig';
$info->action = new stdClass;
$info->action->dispAuthenticationAdminConfig = new stdClass;
$info->action->dispAuthenticationAdminConfig->type='view';
$info->action->dispAuthenticationAdminConfig->grant='guest';
$info->action->dispAuthenticationAdminConfig->standalone='true';
$info->action->dispAuthenticationAdminConfig->ruleset='';
$info->action->dispAuthenticationAdminConfig->method='';
$info->action->dispAuthenticationAdminConfig->check_csrf='true';
$info->action->dispAuthenticationAdminConfig->meta_noindex='false';
$info->action->dispAuthenticationAdminAuthcodeList = new stdClass;
$info->action->dispAuthenticationAdminAuthcodeList->type='view';
$info->action->dispAuthenticationAdminAuthcodeList->grant='guest';
$info->action->dispAuthenticationAdminAuthcodeList->standalone='true';
$info->action->dispAuthenticationAdminAuthcodeList->ruleset='';
$info->action->dispAuthenticationAdminAuthcodeList->method='';
$info->action->dispAuthenticationAdminAuthcodeList->check_csrf='true';
$info->action->dispAuthenticationAdminAuthcodeList->meta_noindex='false';
$info->action->dispAuthenticationAdminMemberList = new stdClass;
$info->action->dispAuthenticationAdminMemberList->type='view';
$info->action->dispAuthenticationAdminMemberList->grant='guest';
$info->action->dispAuthenticationAdminMemberList->standalone='true';
$info->action->dispAuthenticationAdminMemberList->ruleset='';
$info->action->dispAuthenticationAdminMemberList->method='';
$info->action->dispAuthenticationAdminMemberList->check_csrf='true';
$info->action->dispAuthenticationAdminMemberList->meta_noindex='false';
$info->action->dispAuthenticationAdminXLSDownload = new stdClass;
$info->action->dispAuthenticationAdminXLSDownload->type='view';
$info->action->dispAuthenticationAdminXLSDownload->grant='guest';
$info->action->dispAuthenticationAdminXLSDownload->standalone='true';
$info->action->dispAuthenticationAdminXLSDownload->ruleset='';
$info->action->dispAuthenticationAdminXLSDownload->method='';
$info->action->dispAuthenticationAdminXLSDownload->check_csrf='true';
$info->action->dispAuthenticationAdminXLSDownload->meta_noindex='false';
$info->action->dispAuthenticationAdminSkinInfo = new stdClass;
$info->action->dispAuthenticationAdminSkinInfo->type='view';
$info->action->dispAuthenticationAdminSkinInfo->grant='guest';
$info->action->dispAuthenticationAdminSkinInfo->standalone='true';
$info->action->dispAuthenticationAdminSkinInfo->ruleset='';
$info->action->dispAuthenticationAdminSkinInfo->method='';
$info->action->dispAuthenticationAdminSkinInfo->check_csrf='true';
$info->action->dispAuthenticationAdminSkinInfo->meta_noindex='false';
$info->action->dispAuthenticationAdminDesign = new stdClass;
$info->action->dispAuthenticationAdminDesign->type='view';
$info->action->dispAuthenticationAdminDesign->grant='guest';
$info->action->dispAuthenticationAdminDesign->standalone='true';
$info->action->dispAuthenticationAdminDesign->ruleset='';
$info->action->dispAuthenticationAdminDesign->method='';
$info->action->dispAuthenticationAdminDesign->check_csrf='true';
$info->action->dispAuthenticationAdminDesign->meta_noindex='false';
$info->action->procAuthenticationAdminConfig = new stdClass;
$info->action->procAuthenticationAdminConfig->type='controller';
$info->action->procAuthenticationAdminConfig->grant='guest';
$info->action->procAuthenticationAdminConfig->standalone='true';
$info->action->procAuthenticationAdminConfig->ruleset='';
$info->action->procAuthenticationAdminConfig->method='';
$info->action->procAuthenticationAdminConfig->check_csrf='true';
$info->action->procAuthenticationAdminConfig->meta_noindex='false';
$info->action->procAuthenticationAdminMigrateFromMXE = new stdClass;
$info->action->procAuthenticationAdminMigrateFromMXE->type='controller';
$info->action->procAuthenticationAdminMigrateFromMXE->grant='guest';
$info->action->procAuthenticationAdminMigrateFromMXE->standalone='true';
$info->action->procAuthenticationAdminMigrateFromMXE->ruleset='';
$info->action->procAuthenticationAdminMigrateFromMXE->method='';
$info->action->procAuthenticationAdminMigrateFromMXE->check_csrf='true';
$info->action->procAuthenticationAdminMigrateFromMXE->meta_noindex='false';
$info->action->procAuthenticationAdminDesignConfig = new stdClass;
$info->action->procAuthenticationAdminDesignConfig->type='controller';
$info->action->procAuthenticationAdminDesignConfig->grant='guest';
$info->action->procAuthenticationAdminDesignConfig->standalone='true';
$info->action->procAuthenticationAdminDesignConfig->ruleset='';
$info->action->procAuthenticationAdminDesignConfig->method='';
$info->action->procAuthenticationAdminDesignConfig->check_csrf='true';
$info->action->procAuthenticationAdminDesignConfig->meta_noindex='false';
$info->action->getAuthenticationAdminNumber = new stdClass;
$info->action->getAuthenticationAdminNumber->type='model';
$info->action->getAuthenticationAdminNumber->grant='guest';
$info->action->getAuthenticationAdminNumber->standalone='true';
$info->action->getAuthenticationAdminNumber->ruleset='';
$info->action->getAuthenticationAdminNumber->method='';
$info->action->getAuthenticationAdminNumber->check_csrf='true';
$info->action->getAuthenticationAdminNumber->meta_noindex='false';
$info->action->procAuthenticationSendAuthCode = new stdClass;
$info->action->procAuthenticationSendAuthCode->type='controller';
$info->action->procAuthenticationSendAuthCode->grant='guest';
$info->action->procAuthenticationSendAuthCode->standalone='true';
$info->action->procAuthenticationSendAuthCode->ruleset='send_authcode';
$info->action->procAuthenticationSendAuthCode->method='';
$info->action->procAuthenticationSendAuthCode->check_csrf='true';
$info->action->procAuthenticationSendAuthCode->meta_noindex='false';
$info->action->procAuthenticationVerifyAuthCode = new stdClass;
$info->action->procAuthenticationVerifyAuthCode->type='controller';
$info->action->procAuthenticationVerifyAuthCode->grant='guest';
$info->action->procAuthenticationVerifyAuthCode->standalone='true';
$info->action->procAuthenticationVerifyAuthCode->ruleset='verify_authcode';
$info->action->procAuthenticationVerifyAuthCode->method='';
$info->action->procAuthenticationVerifyAuthCode->check_csrf='true';
$info->action->procAuthenticationVerifyAuthCode->meta_noindex='false';
$info->action->procAuthenticationUpdateStatus = new stdClass;
$info->action->procAuthenticationUpdateStatus->type='controller';
$info->action->procAuthenticationUpdateStatus->grant='guest';
$info->action->procAuthenticationUpdateStatus->standalone='true';
$info->action->procAuthenticationUpdateStatus->ruleset='';
$info->action->procAuthenticationUpdateStatus->method='';
$info->action->procAuthenticationUpdateStatus->check_csrf='true';
$info->action->procAuthenticationUpdateStatus->meta_noindex='false';
return $info;