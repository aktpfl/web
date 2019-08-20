<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateAnswerVote");
$query->setAction("update");
$query->setPriority("");

${'voted_count4_argument'} = new Argument('voted_count', $args->{'voted_count'});
${'voted_count4_argument'}->checkNotNull();
if(!${'voted_count4_argument'}->isValid()) return ${'voted_count4_argument'}->getErrorMessage();
if(${'voted_count4_argument'} !== null) ${'voted_count4_argument'}->setColumnType('number');

${'comment_srl5_argument'} = new ConditionArgument('comment_srl', $args->comment_srl, 'equal');
${'comment_srl5_argument'}->checkFilter('number');
${'comment_srl5_argument'}->checkNotNull();
${'comment_srl5_argument'}->createConditionValue();
if(!${'comment_srl5_argument'}->isValid()) return ${'comment_srl5_argument'}->getErrorMessage();
if(${'comment_srl5_argument'} !== null) ${'comment_srl5_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`voted_count`', ${'voted_count4_argument'})
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`comment_srl`',$comment_srl5_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>