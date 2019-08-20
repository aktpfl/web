<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertKinPoint");
$query->setAction("insert");
$query->setPriority("");

${'document_srl2_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl2_argument'}->checkFilter('number');
${'document_srl2_argument'}->checkNotNull();
if(!${'document_srl2_argument'}->isValid()) return ${'document_srl2_argument'}->getErrorMessage();
if(${'document_srl2_argument'} !== null) ${'document_srl2_argument'}->setColumnType('number');

${'point3_argument'} = new Argument('point', $args->{'point'});
${'point3_argument'}->checkFilter('number');
${'point3_argument'}->checkNotNull();
if(!${'point3_argument'}->isValid()) return ${'point3_argument'}->getErrorMessage();
if(${'point3_argument'} !== null) ${'point3_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl2_argument'})
,new InsertExpression('`point`', ${'point3_argument'})
));
$query->setTables(array(
new Table('`xe_kin_point`', '`kin_point`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>