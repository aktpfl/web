<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateAnswerVoteIP");
$query->setAction("update");
$query->setPriority("");

${'vote_ipaddress1_argument'} = new Argument('vote_ipaddress', $args->{'vote_ipaddress'});
${'vote_ipaddress1_argument'}->checkNotNull();
if(!${'vote_ipaddress1_argument'}->isValid()) return ${'vote_ipaddress1_argument'}->getErrorMessage();
if(${'vote_ipaddress1_argument'} !== null) ${'vote_ipaddress1_argument'}->setColumnType('varchar');

${'comment_srl2_argument'} = new ConditionArgument('comment_srl', $args->comment_srl, 'equal');
${'comment_srl2_argument'}->checkFilter('number');
${'comment_srl2_argument'}->checkNotNull();
${'comment_srl2_argument'}->createConditionValue();
if(!${'comment_srl2_argument'}->isValid()) return ${'comment_srl2_argument'}->getErrorMessage();
if(${'comment_srl2_argument'} !== null) ${'comment_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`vote_ipaddress`', ${'vote_ipaddress1_argument'})
));
$query->setTables(array(
new Table('`xe_kin_answer_vote`', '`kin_answer_vote`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`comment_srl`',$comment_srl2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>