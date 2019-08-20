<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNotSelectedReplies");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
} else
${'module_srl1_argument'} = NULL;if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');
if(isset($args->search_keyword)) {
${'search_keyword2_argument'} = new ConditionArgument('search_keyword', $args->search_keyword, 'like');
${'search_keyword2_argument'}->createConditionValue();
if(!${'search_keyword2_argument'}->isValid()) return ${'search_keyword2_argument'}->getErrorMessage();
} else
${'search_keyword2_argument'} = NULL;if(${'search_keyword2_argument'} !== null) ${'search_keyword2_argument'}->setColumnType('bigtext');
if(isset($args->category_srl)) {
${'category_srl3_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl3_argument'}->checkFilter('number');
${'category_srl3_argument'}->createConditionValue();
if(!${'category_srl3_argument'}->isValid()) return ${'category_srl3_argument'}->getErrorMessage();
} else
${'category_srl3_argument'} = NULL;if(${'category_srl3_argument'} !== null) ${'category_srl3_argument'}->setColumnType('number');
if(isset($args->category_childs)) {
${'category_childs4_argument'} = new ConditionArgument('category_childs', $args->category_childs, 'in');
${'category_childs4_argument'}->createConditionValue();
if(!${'category_childs4_argument'}->isValid()) return ${'category_childs4_argument'}->getErrorMessage();
} else
${'category_childs4_argument'} = NULL;if(${'category_childs4_argument'} !== null) ${'category_childs4_argument'}->setColumnType('number');

${'page7_argument'} = new Argument('page', $args->{'page'});
${'page7_argument'}->ensureDefaultValue('1');
if(!${'page7_argument'}->isValid()) return ${'page7_argument'}->getErrorMessage();

${'page_count8_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count8_argument'}->ensureDefaultValue('10');
if(!${'page_count8_argument'}->isValid()) return ${'page_count8_argument'}->getErrorMessage();

${'list_count9_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count9_argument'}->ensureDefaultValue('20');
if(!${'list_count9_argument'}->isValid()) return ${'list_count9_argument'}->getErrorMessage();

${'sort_index5_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index5_argument'}->ensureDefaultValue('reply.list_order');
if(!${'sort_index5_argument'}->isValid()) return ${'sort_index5_argument'}->getErrorMessage();

${'order_type6_argument'} = new SortArgument('order_type6', $args->order_type);
${'order_type6_argument'}->ensureDefaultValue('asc');
if(!${'order_type6_argument'}->isValid()) return ${'order_type6_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`doc`.`document_srl`')
,new SelectExpression('`doc`.`category_srl`')
,new SelectExpression('`reply`.*')
));
$query->setTables(array(
new Table('`xe_documents`', '`doc`')
,new Table('`xe_comments`', '`reply`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`reply`.`module_srl`',$module_srl1_argument,"equal")
,new ConditionWithoutArgument('`reply`.`document_srl`','`doc`.`document_srl`',"equal", 'and')
,new ConditionWithArgument('`reply`.`content`',$search_keyword2_argument,"like", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`doc`.`category_srl`',$category_srl3_argument,"equal")
,new ConditionWithArgument('`doc`.`category_srl`',$category_childs4_argument,"in", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index5_argument'}, $order_type6_argument)
));
$query->setLimit(new Limit(${'list_count9_argument'}, ${'page7_argument'}, ${'page_count8_argument'}));
return $query; ?>