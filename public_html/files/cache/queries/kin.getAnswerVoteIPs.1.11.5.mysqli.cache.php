<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAnswerVoteIPs");
$query->setAction("select");
$query->setPriority("");
if(isset($args->comment_srl)) {
${'comment_srl1_argument'} = new ConditionArgument('comment_srl', $args->comment_srl, 'equal');
${'comment_srl1_argument'}->checkFilter('number');
${'comment_srl1_argument'}->createConditionValue();
if(!${'comment_srl1_argument'}->isValid()) return ${'comment_srl1_argument'}->getErrorMessage();
} else
${'comment_srl1_argument'} = NULL;if(${'comment_srl1_argument'} !== null) ${'comment_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`vote_ipaddress`', '`vote_ipaddress`')
));
$query->setTables(array(
new Table('`xe_kin_answer_vote`', '`kin_answer_vote`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`comment_srl`',$comment_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>