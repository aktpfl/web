<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertAnswerVoteIP");
$query->setAction("insert");
$query->setPriority("");

${'comment_srl2_argument'} = new Argument('comment_srl', $args->{'comment_srl'});
${'comment_srl2_argument'}->checkFilter('number');
${'comment_srl2_argument'}->checkNotNull();
if(!${'comment_srl2_argument'}->isValid()) return ${'comment_srl2_argument'}->getErrorMessage();
if(${'comment_srl2_argument'} !== null) ${'comment_srl2_argument'}->setColumnType('number');

${'vote_ipaddress3_argument'} = new Argument('vote_ipaddress', $args->{'vote_ipaddress'});
${'vote_ipaddress3_argument'}->checkNotNull();
if(!${'vote_ipaddress3_argument'}->isValid()) return ${'vote_ipaddress3_argument'}->getErrorMessage();
if(${'vote_ipaddress3_argument'} !== null) ${'vote_ipaddress3_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`comment_srl`', ${'comment_srl2_argument'})
,new InsertExpression('`vote_ipaddress`', ${'vote_ipaddress3_argument'})
));
$query->setTables(array(
new Table('`xe_kin_answer_vote`', '`kin_answer_vote`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>