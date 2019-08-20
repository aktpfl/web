<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = 'dispKinIndex';
$info->setup_index_act='dispKinAdminInsert';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispKinAdminList';
$info->grant = new stdClass;
$info->grant->list = new stdClass;
$info->grant->list->title='목록';
$info->grant->list->default='guest';
$info->grant->write_document = new stdClass;
$info->grant->write_document->title='글 작성';
$info->grant->write_document->default='member';
$info->grant->write_reply = new stdClass;
$info->grant->write_reply->title='의견 작성';
$info->grant->write_reply->default='member';
$info->grant->view = new stdClass;
$info->grant->view->title='열람';
$info->grant->view->default='guest';
$info->action = new stdClass;
$info->action->dispKinIndex = new stdClass;
$info->action->dispKinIndex->type='view';
$info->action->dispKinIndex->grant='guest';
$info->action->dispKinIndex->standalone='true';
$info->action->dispKinIndex->ruleset='';
$info->action->dispKinIndex->method='';
$info->action->dispKinIndex->check_csrf='true';
$info->action->dispKinIndex->meta_noindex='false';
$info->action->dispKinView = new stdClass;
$info->action->dispKinView->type='view';
$info->action->dispKinView->grant='guest';
$info->action->dispKinView->standalone='true';
$info->action->dispKinView->ruleset='';
$info->action->dispKinView->method='';
$info->action->dispKinView->check_csrf='true';
$info->action->dispKinView->meta_noindex='false';
$info->action->dispKinWrite = new stdClass;
$info->action->dispKinWrite->type='view';
$info->action->dispKinWrite->grant='guest';
$info->action->dispKinWrite->standalone='true';
$info->action->dispKinWrite->ruleset='';
$info->action->dispKinWrite->method='';
$info->action->dispKinWrite->check_csrf='true';
$info->action->dispKinWrite->meta_noindex='false';
$info->action->dispKinReply = new stdClass;
$info->action->dispKinReply->type='view';
$info->action->dispKinReply->grant='guest';
$info->action->dispKinReply->standalone='true';
$info->action->dispKinReply->ruleset='';
$info->action->dispKinReply->method='';
$info->action->dispKinReply->check_csrf='true';
$info->action->dispKinReply->meta_noindex='false';
$info->action->dispKinModifyReply = new stdClass;
$info->action->dispKinModifyReply->type='view';
$info->action->dispKinModifyReply->grant='guest';
$info->action->dispKinModifyReply->standalone='true';
$info->action->dispKinModifyReply->ruleset='';
$info->action->dispKinModifyReply->method='';
$info->action->dispKinModifyReply->check_csrf='true';
$info->action->dispKinModifyReply->meta_noindex='false';
$info->action->dispKinPointRank = new stdClass;
$info->action->dispKinPointRank->type='view';
$info->action->dispKinPointRank->grant='guest';
$info->action->dispKinPointRank->standalone='true';
$info->action->dispKinPointRank->ruleset='';
$info->action->dispKinPointRank->method='';
$info->action->dispKinPointRank->check_csrf='true';
$info->action->dispKinPointRank->meta_noindex='false';
$info->action->procKinInsert = new stdClass;
$info->action->procKinInsert->type='controller';
$info->action->procKinInsert->grant='guest';
$info->action->procKinInsert->standalone='true';
$info->action->procKinInsert->ruleset='insertQuestion';
$info->action->procKinInsert->method='';
$info->action->procKinInsert->check_csrf='true';
$info->action->procKinInsert->meta_noindex='false';
$info->action->procKinSelectReply = new stdClass;
$info->action->procKinSelectReply->type='controller';
$info->action->procKinSelectReply->grant='guest';
$info->action->procKinSelectReply->standalone='true';
$info->action->procKinSelectReply->ruleset='';
$info->action->procKinSelectReply->method='';
$info->action->procKinSelectReply->check_csrf='true';
$info->action->procKinSelectReply->meta_noindex='false';
$info->action->procKinInsertReply = new stdClass;
$info->action->procKinInsertReply->type='controller';
$info->action->procKinInsertReply->grant='guest';
$info->action->procKinInsertReply->standalone='true';
$info->action->procKinInsertReply->ruleset='insertReply';
$info->action->procKinInsertReply->method='';
$info->action->procKinInsertReply->check_csrf='true';
$info->action->procKinInsertReply->meta_noindex='false';
$info->action->procKinUpdateReply = new stdClass;
$info->action->procKinUpdateReply->type='controller';
$info->action->procKinUpdateReply->grant='guest';
$info->action->procKinUpdateReply->standalone='true';
$info->action->procKinUpdateReply->ruleset='updateReply';
$info->action->procKinUpdateReply->method='';
$info->action->procKinUpdateReply->check_csrf='true';
$info->action->procKinUpdateReply->meta_noindex='false';
$info->action->procKinDeleteReply = new stdClass;
$info->action->procKinDeleteReply->type='controller';
$info->action->procKinDeleteReply->grant='guest';
$info->action->procKinDeleteReply->standalone='true';
$info->action->procKinDeleteReply->ruleset='';
$info->action->procKinDeleteReply->method='';
$info->action->procKinDeleteReply->check_csrf='true';
$info->action->procKinDeleteReply->meta_noindex='false';
$info->action->procKinQuestionVote = new stdClass;
$info->action->procKinQuestionVote->type='controller';
$info->action->procKinQuestionVote->grant='guest';
$info->action->procKinQuestionVote->standalone='true';
$info->action->procKinQuestionVote->ruleset='';
$info->action->procKinQuestionVote->method='';
$info->action->procKinQuestionVote->check_csrf='true';
$info->action->procKinQuestionVote->meta_noindex='false';
$info->action->procKinAnswerVote = new stdClass;
$info->action->procKinAnswerVote->type='controller';
$info->action->procKinAnswerVote->grant='guest';
$info->action->procKinAnswerVote->standalone='true';
$info->action->procKinAnswerVote->ruleset='';
$info->action->procKinAnswerVote->method='';
$info->action->procKinAnswerVote->check_csrf='true';
$info->action->procKinAnswerVote->meta_noindex='false';
$info->action->procKinDeleteDocument = new stdClass;
$info->action->procKinDeleteDocument->type='controller';
$info->action->procKinDeleteDocument->grant='guest';
$info->action->procKinDeleteDocument->standalone='true';
$info->action->procKinDeleteDocument->ruleset='';
$info->action->procKinDeleteDocument->method='';
$info->action->procKinDeleteDocument->check_csrf='true';
$info->action->procKinDeleteDocument->meta_noindex='false';
$info->action->procKinInsertComment = new stdClass;
$info->action->procKinInsertComment->type='controller';
$info->action->procKinInsertComment->grant='guest';
$info->action->procKinInsertComment->standalone='true';
$info->action->procKinInsertComment->ruleset='insertComment';
$info->action->procKinInsertComment->method='';
$info->action->procKinInsertComment->check_csrf='true';
$info->action->procKinInsertComment->meta_noindex='false';
$info->action->procKinDeleteComment = new stdClass;
$info->action->procKinDeleteComment->type='controller';
$info->action->procKinDeleteComment->grant='guest';
$info->action->procKinDeleteComment->standalone='true';
$info->action->procKinDeleteComment->ruleset='';
$info->action->procKinDeleteComment->method='';
$info->action->procKinDeleteComment->check_csrf='true';
$info->action->procKinDeleteComment->meta_noindex='false';
$info->action->getKinComments = new stdClass;
$info->action->getKinComments->type='model';
$info->action->getKinComments->grant='guest';
$info->action->getKinComments->standalone='true';
$info->action->getKinComments->ruleset='';
$info->action->getKinComments->method='';
$info->action->getKinComments->check_csrf='true';
$info->action->getKinComments->meta_noindex='false';
$info->action->dispKinAdminList = new stdClass;
$info->action->dispKinAdminList->type='view';
$info->action->dispKinAdminList->grant='guest';
$info->action->dispKinAdminList->standalone='true';
$info->action->dispKinAdminList->ruleset='';
$info->action->dispKinAdminList->method='';
$info->action->dispKinAdminList->check_csrf='true';
$info->action->dispKinAdminList->meta_noindex='false';
$info->action->dispKinAdminInsert = new stdClass;
$info->action->dispKinAdminInsert->type='view';
$info->action->dispKinAdminInsert->grant='guest';
$info->action->dispKinAdminInsert->standalone='true';
$info->action->dispKinAdminInsert->ruleset='';
$info->action->dispKinAdminInsert->method='';
$info->action->dispKinAdminInsert->check_csrf='true';
$info->action->dispKinAdminInsert->meta_noindex='false';
$info->action->dispKinAdminCategory = new stdClass;
$info->action->dispKinAdminCategory->type='view';
$info->action->dispKinAdminCategory->grant='guest';
$info->action->dispKinAdminCategory->standalone='true';
$info->action->dispKinAdminCategory->ruleset='';
$info->action->dispKinAdminCategory->method='';
$info->action->dispKinAdminCategory->check_csrf='true';
$info->action->dispKinAdminCategory->meta_noindex='false';
$info->action->dispKinAdminGrant = new stdClass;
$info->action->dispKinAdminGrant->type='view';
$info->action->dispKinAdminGrant->grant='guest';
$info->action->dispKinAdminGrant->standalone='true';
$info->action->dispKinAdminGrant->ruleset='';
$info->action->dispKinAdminGrant->method='';
$info->action->dispKinAdminGrant->check_csrf='true';
$info->action->dispKinAdminGrant->meta_noindex='false';
$info->action->dispKinAdminAdditions = new stdClass;
$info->action->dispKinAdminAdditions->type='view';
$info->action->dispKinAdminAdditions->grant='guest';
$info->action->dispKinAdminAdditions->standalone='true';
$info->action->dispKinAdminAdditions->ruleset='';
$info->action->dispKinAdminAdditions->method='';
$info->action->dispKinAdminAdditions->check_csrf='true';
$info->action->dispKinAdminAdditions->meta_noindex='false';
$info->action->dispKinAdminSkin = new stdClass;
$info->action->dispKinAdminSkin->type='view';
$info->action->dispKinAdminSkin->grant='guest';
$info->action->dispKinAdminSkin->standalone='true';
$info->action->dispKinAdminSkin->ruleset='';
$info->action->dispKinAdminSkin->method='';
$info->action->dispKinAdminSkin->check_csrf='true';
$info->action->dispKinAdminSkin->meta_noindex='false';
$info->action->dispKinAdminDelete = new stdClass;
$info->action->dispKinAdminDelete->type='view';
$info->action->dispKinAdminDelete->grant='guest';
$info->action->dispKinAdminDelete->standalone='true';
$info->action->dispKinAdminDelete->ruleset='';
$info->action->dispKinAdminDelete->method='';
$info->action->dispKinAdminDelete->check_csrf='true';
$info->action->dispKinAdminDelete->meta_noindex='false';
$info->action->dispKinAdminPointList = new stdClass;
$info->action->dispKinAdminPointList->type='view';
$info->action->dispKinAdminPointList->grant='guest';
$info->action->dispKinAdminPointList->standalone='true';
$info->action->dispKinAdminPointList->ruleset='';
$info->action->dispKinAdminPointList->method='';
$info->action->dispKinAdminPointList->check_csrf='true';
$info->action->dispKinAdminPointList->meta_noindex='false';
$info->action->dispKinAdminSkinInfo = new stdClass;
$info->action->dispKinAdminSkinInfo->type='view';
$info->action->dispKinAdminSkinInfo->grant='guest';
$info->action->dispKinAdminSkinInfo->standalone='true';
$info->action->dispKinAdminSkinInfo->ruleset='';
$info->action->dispKinAdminSkinInfo->method='';
$info->action->dispKinAdminSkinInfo->check_csrf='true';
$info->action->dispKinAdminSkinInfo->meta_noindex='false';
$info->action->procKinAdminInsert = new stdClass;
$info->action->procKinAdminInsert->type='controller';
$info->action->procKinAdminInsert->grant='guest';
$info->action->procKinAdminInsert->standalone='true';
$info->action->procKinAdminInsert->ruleset='insertKin';
$info->action->procKinAdminInsert->method='';
$info->action->procKinAdminInsert->check_csrf='true';
$info->action->procKinAdminInsert->meta_noindex='false';
$info->action->procKinAdminDelete = new stdClass;
$info->action->procKinAdminDelete->type='controller';
$info->action->procKinAdminDelete->grant='guest';
$info->action->procKinAdminDelete->standalone='true';
$info->action->procKinAdminDelete->ruleset='deleteKin';
$info->action->procKinAdminDelete->method='';
$info->action->procKinAdminDelete->check_csrf='true';
$info->action->procKinAdminDelete->meta_noindex='false';
return $info;