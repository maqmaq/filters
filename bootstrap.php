<?php

require_once 'autoloader.php';

$root = new FilterModel();
$root->setVisibityConditions((new FilterVisibilityConditions())->setType(FilterVisibilityConditions::TYPE_ALWAYS_VISIBLE));
$root->setId('offerTypeFilter');
$root->setType('select');
$root->setData('/offerTypes');
$root->setLabel('Typ oferty');

$countryFilter = new FilterModel();
$countryFilter->setVisibityConditions((new FilterVisibilityConditions())->setType(FilterVisibilityConditions::TYPE_DEPENDS_ON_PARENT_VALUE_EQUALS)->setExpectedValue('Narty'));
$countryFilter->setId('countryFilter');
$countryFilter->setType('tree');
$countryFilter->setData('/offerTypes/[parentValue]/countries');
$countryFilter->setLabel('Kraj');

$root->addSuccesor($countryFilter);

$feedingFilter = new FilterModel();
$feedingFilter->setVisibityConditions((new FilterVisibilityConditions())->setType(FilterVisibilityConditions::TYPE_DEPENDS_ON_PARENT_VALUE_EQUALS)->setExpectedValue('Egzotyka'));
$feedingFilter->setId('feedingFilter');
$feedingFilter->setType('radio');
$feedingFilter->setData('/offerTypes/[parentValue]/feedingType');
$feedingFilter->setLabel('Wyżywienie');

$root->addSuccesor($feedingFilter);

// no di at this moment so do it manually
$filterVisibilityDecisionStrategyResolver = new FilterVisibilityDecisionStrategyResolver();
$filterVisibilityDecisionManager = new FilterVisibilityDecisionManager($filterVisibilityDecisionStrategyResolver);
$filterRendererService = new FilterRendererService($filterVisibilityDecisionManager);

$content = $filterRendererService->renderFilter($root);

echo $content;

