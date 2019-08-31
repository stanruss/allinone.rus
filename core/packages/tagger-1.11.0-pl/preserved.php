<?php return array (
  '3f9e765db9518d175a4722d7a9f81767' => 
  array (
    'criteria' => 
    array (
      'name' => 'tagger',
    ),
    'object' => 
    array (
      'name' => 'tagger',
      'path' => '{core_path}components/tagger/',
      'assets_path' => '{assets_path}components/tagger/',
    ),
  ),
  '3c79e3ee0ee909d714f7190c421e89fc' => 
  array (
    'criteria' => 
    array (
      'key' => 'tagger.place_above_content_header',
    ),
    'object' => 
    array (
      'key' => 'tagger.place_above_content_header',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'tagger',
      'area' => 'places',
      'editedon' => NULL,
    ),
  ),
  'c2d28d2f1935639e55ab771bfea64d11' => 
  array (
    'criteria' => 
    array (
      'key' => 'tagger.place_below_content_header',
    ),
    'object' => 
    array (
      'key' => 'tagger.place_below_content_header',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'tagger',
      'area' => 'places',
      'editedon' => NULL,
    ),
  ),
  '3aa252c40aeda3de2a1a766ee5bd4145' => 
  array (
    'criteria' => 
    array (
      'key' => 'tagger.place_bottom_page_header',
    ),
    'object' => 
    array (
      'key' => 'tagger.place_bottom_page_header',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'tagger',
      'area' => 'places',
      'editedon' => NULL,
    ),
  ),
  '4b12fff81b77b214b1be850807d480e4' => 
  array (
    'criteria' => 
    array (
      'key' => 'tagger.place_in_tab_label',
    ),
    'object' => 
    array (
      'key' => 'tagger.place_in_tab_label',
      'value' => 'tagger.tab.label',
      'xtype' => 'textfield',
      'namespace' => 'tagger',
      'area' => 'places',
      'editedon' => NULL,
    ),
  ),
  '89d3a77670e434a45bc1a339242dd470' => 
  array (
    'criteria' => 
    array (
      'key' => 'tagger.place_tvs_tab_label',
    ),
    'object' => 
    array (
      'key' => 'tagger.place_tvs_tab_label',
      'value' => 'tagger.tab.label',
      'xtype' => 'textfield',
      'namespace' => 'tagger',
      'area' => 'places',
      'editedon' => NULL,
    ),
  ),
  'd705ac2af4ab477d3fcc61c4185df785' => 
  array (
    'criteria' => 
    array (
      'key' => 'tagger.place_above_content_label',
    ),
    'object' => 
    array (
      'key' => 'tagger.place_above_content_label',
      'value' => 'tagger.tab.label',
      'xtype' => 'textfield',
      'namespace' => 'tagger',
      'area' => 'places',
      'editedon' => NULL,
    ),
  ),
  'fda0fdce47ef6c966a7a3c89b3fd777b' => 
  array (
    'criteria' => 
    array (
      'key' => 'tagger.place_below_content_label',
    ),
    'object' => 
    array (
      'key' => 'tagger.place_below_content_label',
      'value' => 'tagger.tab.label',
      'xtype' => 'textfield',
      'namespace' => 'tagger',
      'area' => 'places',
      'editedon' => NULL,
    ),
  ),
  '99eb15297a36baa4e7f1aa0a55af3358' => 
  array (
    'criteria' => 
    array (
      'key' => 'tagger.place_bottom_page_label',
    ),
    'object' => 
    array (
      'key' => 'tagger.place_bottom_page_label',
      'value' => 'tagger.tab.label',
      'xtype' => 'textfield',
      'namespace' => 'tagger',
      'area' => 'places',
      'editedon' => NULL,
    ),
  ),
  'c4c3b4fc5f18f9b2b3cac48092b70971' => 
  array (
    'criteria' => 
    array (
      'category' => 'Tagger',
    ),
    'object' => 
    array (
      'id' => 6,
      'parent' => 0,
      'category' => 'Tagger',
      'rank' => 0,
    ),
  ),
  '3676564ce21b4eb50207faaac9643177' => 
  array (
    'criteria' => 
    array (
      'name' => 'TaggerGetTags',
    ),
    'object' => 
    array (
      'id' => 6,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'TaggerGetTags',
      'description' => '',
      'editor_type' => 0,
      'category' => 6,
      'cache_type' => 0,
      'snippet' => '/**
 * TaggerGetTags
 *
 * DESCRIPTION
 *
 * This Snippet allows you to list tags for resource(s), group(s) and all tags
 *
 * PROPERTIES:
 *
 * &resources       string  optional    Comma separated list of resources for which will be listed Tags
 * &parents         string  optional    Comma separated list of parents for which will be listed Tags
 * &groups          string  optional    Comma separated list of Tagger Groups for which will be listed Tags
 * &rowTpl          string  optional    Name of a chunk that will be used for each Tag. If no chunk is given, array with available placeholders will be rendered
 * &outTpl          string  optional    Name of a chunk that will be used for wrapping all tags. If no chunk is given, tags will be rendered without a wrapper
 * &separator       string  optional    String separator, that will be used for separating Tags
 * &limit           int     optional    Limit number of returned tag Tags
 * &offset          int     optional    Offset the output by this number of Tags
 * &totalPh         string  optional    Placeholder to output the total number of Tags regardless of &limit and &offset
 * &target          int     optional    An ID of a resource that will be used for generating URI for a Tag. If no ID is given, current Resource ID will be used
 * &showUnused      int     optional    If 1 is set, Tags that are not assigned to any Resource will be included to the output as well
 * &showUnpublished int     optional    If 1 is set, Tags that are assigned only to unpublished Resources will be included to the output as well
 * &showDeleted     int     optional    If 1 is set, Tags that are assigned only to deleted Resources will be included to the output as well
 * &contexts        string  optional    If set, will display only tags for resources in given contexts. Contexts can be separated by a comma
 * &toPlaceholder   string  optional    If set, output will return in placeholder with given name
 * &sort            string  optional    Sort options in JSON. Example {"tag": "ASC"} or multiple sort options {"group_id": "ASC", "tag": "ASC"}
 * &friendlyURL     int     optional    If set, will be used instead of friendly_urls system setting to generate URL
 *
 * USAGE:
 *
 * [[!TaggerGetTags? &showUnused=`1`]]
 *
 *
 * @package tagger
 */

/** @var Tagger $tagger */
$tagger = $modx->getService(\'tagger\',\'Tagger\',$modx->getOption(\'tagger.core_path\',null,$modx->getOption(\'core_path\').\'components/tagger/\').\'model/tagger/\',$scriptProperties);
if (!($tagger instanceof Tagger)) return \'\';

$resources = $modx->getOption(\'resources\', $scriptProperties, \'\');
$parents = $modx->getOption(\'parents\', $scriptProperties, \'\');
$groups = $modx->getOption(\'groups\', $scriptProperties, \'\');
$target = (int) $modx->getOption(\'target\', $scriptProperties, $modx->resource->id, true);
$showUnused = (int) $modx->getOption(\'showUnused\', $scriptProperties, \'0\');
$showUnpublished = (int) $modx->getOption(\'showUnpublished\', $scriptProperties, \'0\');
$showDeleted = (int) $modx->getOption(\'showDeleted\', $scriptProperties, \'0\');
$contexts = $modx->getOption(\'contexts\', $scriptProperties, \'\');
$translate = (int) $modx->getOption(\'translate\', $scriptProperties, \'0\');

$defaultRowTpl = $modx->getOption(\'rowTpl\', $scriptProperties, \'\');
$outTpl = $modx->getOption(\'outTpl\', $scriptProperties, \'\');
$wrapIfEmpty = $modx->getOption(\'wrapIfEmpty\', $scriptProperties, 1);
$separator = $modx->getOption(\'separator\', $scriptProperties, \'\');
$limit = intval($modx->getOption(\'limit\', $scriptProperties, 0));
$offset = intval($modx->getOption(\'offset\', $scriptProperties, 0));
$totalPh = $modx->getOption(\'totalPh\', $scriptProperties, \'tags_total\');

$weight = (int) $modx->getOption(\'weight\', $scriptProperties, \'0\');

$friendlyURL = $modx->getOption(\'friendlyURL\', $scriptProperties, $modx->getOption(\'friendly_urls\', null, 0));

$sort = $modx->getOption(\'sort\', $scriptProperties, \'{}\');
$sort = $modx->fromJSON($sort);
if ($sort === null || $sort == \'\' || count($sort) == 0) {
    $sort = array(
        \'tag\' => \'ASC\'
    );
}

$resources = $tagger->explodeAndClean($resources);
$parents = $tagger->explodeAndClean($parents);
$groups = $tagger->explodeAndClean($groups);
$contexts = $tagger->explodeAndClean($contexts);
$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, \'\');

$c = $modx->newQuery(\'TaggerTag\');

$c->leftJoin(\'TaggerTagResource\', \'Resources\');
$c->leftJoin(\'TaggerGroup\', \'Group\');
$c->leftJoin(\'modResource\', \'Resource\', array(\'Resources.resource = Resource.id\'));

if (!empty($parents)) {
    $c->where(array(
        \'Resource.parent:IN\' => $parents,
    ));
}

if (!empty($contexts)) {
    $c->where(array(
        \'Resource.context_key:IN\' => $contexts,
    ));
}

if ($showUnpublished == 0) {
    $c->where(array(
        \'Resource.published\' => 1,
        \'OR:Resource.published:IN\' => null,
    ));
}

if ($showDeleted == 0) {
    $c->where(array(
        \'Resource.deleted\' => 0,
        \'OR:Resource.deleted:IS\' => null,
    ));
}

if ($showUnused == 0) {
    $c->having(array(
        \'cnt > 0\',
    ));
}

if (!empty($resources)) {
    $c->where(array(
        \'Resources.resource:IN\' => $resources
    ));
}

if ($groups) {
    $c->where(array(
        \'Group.id:IN\' => $groups,
        \'OR:Group.name:IN\' => $groups,
        \'OR:Group.alias:IN\' => $groups,
    ));
}
$c->select($modx->getSelectColumns(\'TaggerTag\', \'TaggerTag\'));
$c->select($modx->getSelectColumns(\'TaggerGroup\', \'Group\', \'group_\'));
$c->select(array(\'cnt\' => \'COUNT(Resources.tag)\'));
$c->groupby($modx->getSelectColumns(\'TaggerTag\', \'TaggerTag\') . \',\' . $modx->getSelectColumns(\'TaggerGroup\', \'Group\'));

$c->prepare();

$countQuery = new xPDOCriteria($modx, "SELECT COUNT(*) as total, MAX(cnt) as max_cnt FROM ({$c->toSQL(false)}) cq", $c->bindings, $c->cacheFlag);
$stmt = $countQuery->prepare();

if ($stmt && $stmt->execute()) {
    $fetchedData = $stmt->fetch(PDO::FETCH_ASSOC);
    $total = intval($fetchedData[\'total\']);
    $maxCnt = intval($fetchedData[\'max_cnt\']);
} else {
    $total = 0;
    $maxCnt = 0;
}

$modx->setPlaceholder($totalPh, $total);

foreach ($sort as $field => $dir) {
    $dir = (strtolower($dir) == \'asc\') ? \'asc\' : \'desc\';
    $c->sortby($field, $dir);
}

$c->limit($limit, $offset);

$tags = $modx->getIterator(\'TaggerTag\', $c);

$out = array();

// prep for &tpl_N
$keys = array_keys($scriptProperties);
$nthTpls = array();
foreach($keys as $key) {
    $keyBits = $tagger->explodeAndClean($key, \'_\');
    if (isset($keyBits[0]) && $keyBits[0] === \'tpl\') {
        if ($i = (int) $keyBits[1]) $nthTpls[$i] = $scriptProperties[$key];
    }
}
ksort($nthTpls);

$idx = 1;
$currentTags = $tagger->getCurrentTags();

foreach ($tags as $tag) {
    /** @var TaggerTag $tag */
    $phs = $tag->toArray();

    $group = $tag->Group;

    if ($friendlyURL == 1) {
        $uri = rtrim($modx->makeUrl($target, \'\', \'\'), \'/\') . \'/\' . $group->alias . \'/\' . $tag->alias . \'/\';
    } else {
        $uri = $modx->makeUrl($target, \'\', $group->alias . \'=\' . $tag->alias);
    }

    $phs[\'uri\'] = $uri;
    $phs[\'idx\'] = $idx;
    $phs[\'target\'] = $target;
    $phs[\'max_cnt\'] = $maxCnt;
    
    if (isset($currentTags[$group->alias][\'tags\'][$tag->alias])) {
        $phs[\'active\'] = 1;    
    } else {
        $phs[\'active\'] = 0;
    }

    if ($weight > 0) {
        $phs[\'weight\'] = intval(ceil($phs[\'cnt\'] / ($maxCnt / $weight)));
    }

    if ($translate == 1) {
        $groupNameTranslated = $modx->lexicon(\'tagger.custom.\' . $phs[\'group_alias\']);
        $groupDescriptionTranslated = $modx->lexicon(\'tagger.custom.\' . $phs[\'group_alias\'] . \'_desc\');

        $phs[\'group_name_translated\'] = ($groupNameTranslated == \'tagger.custom.\' . $phs[\'group_alias\']) ? $phs[\'group_name\'] : $groupNameTranslated;
        $phs[\'group_description_translated\'] = ($groupDescriptionTranslated == \'tagger.custom.\' . $phs[\'group_alias\'] . \'_desc\') ? $phs[\'group_description\'] : $groupDescriptionTranslated;
    }

    $rowTpl = $defaultRowTpl;
    $phs[\'sp\'] = $scriptProperties;

    if ($rowTpl == \'\') {
        $out[] = \'<pre>\' . print_r($phs, true) . \'</pre>\';
    } else {
        if (isset($nthTpls[$idx])) {
            $rowTpl = $nthTpls[$idx];
        } else {
            foreach ($nthTpls as $int => $tpl) {
                if ( ($idx % $int) === 0 ) $rowTpl = $tpl;
            }
        }

        $out[] = $tagger->getChunk($rowTpl, $phs);
    }

    $idx++;
}

$out = implode($separator, $out);

if ($outTpl != \'\') {
    if (!empty($out) || $wrapIfEmpty) {
        $noActiveTags = (int)(count($currentTags) === 0);
        $out = $tagger->getChunk($outTpl, array(\'tags\' => $out, \'sp\' => $scriptProperties, \'noActiveTags\' => $noActiveTags));
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $out);
    return \'\';
}

return $out;',
      'locked' => 0,
      'properties' => 'a:15:{s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:29:"tagger.gettags.resources_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:6:"groups";a:7:{s:4:"name";s:6:"groups";s:4:"desc";s:26:"tagger.gettags.groups_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:6:"rowTpl";a:7:{s:4:"name";s:6:"rowTpl";s:4:"desc";s:26:"tagger.gettags.rowTpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:6:"outTpl";a:7:{s:4:"name";s:6:"outTpl";s:4:"desc";s:26:"tagger.gettags.outTpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:9:"separator";a:7:{s:4:"name";s:9:"separator";s:4:"desc";s:29:"tagger.gettags.separator_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:6:"target";a:7:{s:4:"name";s:6:"target";s:4:"desc";s:26:"tagger.gettags.target_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:10:"showUnused";a:7:{s:4:"name";s:10:"showUnused";s:4:"desc";s:30:"tagger.gettags.showUnused_desc";s:4:"type";s:11:"numberfield";s:7:"options";s:0:"";s:5:"value";s:1:"0";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:35:"tagger.gettags.showUnpublished_desc";s:4:"type";s:11:"numberfield";s:7:"options";s:0:"";s:5:"value";s:1:"0";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:31:"tagger.gettags.showDeleted_desc";s:4:"type";s:11:"numberfield";s:7:"options";s:0:"";s:5:"value";s:1:"0";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:8:"contexts";a:7:{s:4:"name";s:8:"contexts";s:4:"desc";s:28:"tagger.gettags.contexts_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:33:"tagger.gettags.toPlaceholder_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:25:"tagger.gettags.limit_desc";s:4:"type";s:11:"numberfield";s:7:"options";s:0:"";s:5:"value";s:1:"0";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:6:"offset";a:7:{s:4:"name";s:6:"offset";s:4:"desc";s:26:"tagger.gettags.offset_desc";s:4:"type";s:11:"numberfield";s:7:"options";s:0:"";s:5:"value";s:1:"0";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:7:"totalPh";a:7:{s:4:"name";s:7:"totalPh";s:4:"desc";s:27:"tagger.gettags.totalPh_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:10:"tags_total";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:4:"sort";a:7:{s:4:"name";s:4:"sort";s:4:"desc";s:24:"tagger.gettags.sort_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:14:"{"tag": "asc"}";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * TaggerGetTags
 *
 * DESCRIPTION
 *
 * This Snippet allows you to list tags for resource(s), group(s) and all tags
 *
 * PROPERTIES:
 *
 * &resources       string  optional    Comma separated list of resources for which will be listed Tags
 * &parents         string  optional    Comma separated list of parents for which will be listed Tags
 * &groups          string  optional    Comma separated list of Tagger Groups for which will be listed Tags
 * &rowTpl          string  optional    Name of a chunk that will be used for each Tag. If no chunk is given, array with available placeholders will be rendered
 * &outTpl          string  optional    Name of a chunk that will be used for wrapping all tags. If no chunk is given, tags will be rendered without a wrapper
 * &separator       string  optional    String separator, that will be used for separating Tags
 * &limit           int     optional    Limit number of returned tag Tags
 * &offset          int     optional    Offset the output by this number of Tags
 * &totalPh         string  optional    Placeholder to output the total number of Tags regardless of &limit and &offset
 * &target          int     optional    An ID of a resource that will be used for generating URI for a Tag. If no ID is given, current Resource ID will be used
 * &showUnused      int     optional    If 1 is set, Tags that are not assigned to any Resource will be included to the output as well
 * &showUnpublished int     optional    If 1 is set, Tags that are assigned only to unpublished Resources will be included to the output as well
 * &showDeleted     int     optional    If 1 is set, Tags that are assigned only to deleted Resources will be included to the output as well
 * &contexts        string  optional    If set, will display only tags for resources in given contexts. Contexts can be separated by a comma
 * &toPlaceholder   string  optional    If set, output will return in placeholder with given name
 * &sort            string  optional    Sort options in JSON. Example {"tag": "ASC"} or multiple sort options {"group_id": "ASC", "tag": "ASC"}
 * &friendlyURL     int     optional    If set, will be used instead of friendly_urls system setting to generate URL
 *
 * USAGE:
 *
 * [[!TaggerGetTags? &showUnused=`1`]]
 *
 *
 * @package tagger
 */

/** @var Tagger $tagger */
$tagger = $modx->getService(\'tagger\',\'Tagger\',$modx->getOption(\'tagger.core_path\',null,$modx->getOption(\'core_path\').\'components/tagger/\').\'model/tagger/\',$scriptProperties);
if (!($tagger instanceof Tagger)) return \'\';

$resources = $modx->getOption(\'resources\', $scriptProperties, \'\');
$parents = $modx->getOption(\'parents\', $scriptProperties, \'\');
$groups = $modx->getOption(\'groups\', $scriptProperties, \'\');
$target = (int) $modx->getOption(\'target\', $scriptProperties, $modx->resource->id, true);
$showUnused = (int) $modx->getOption(\'showUnused\', $scriptProperties, \'0\');
$showUnpublished = (int) $modx->getOption(\'showUnpublished\', $scriptProperties, \'0\');
$showDeleted = (int) $modx->getOption(\'showDeleted\', $scriptProperties, \'0\');
$contexts = $modx->getOption(\'contexts\', $scriptProperties, \'\');
$translate = (int) $modx->getOption(\'translate\', $scriptProperties, \'0\');

$defaultRowTpl = $modx->getOption(\'rowTpl\', $scriptProperties, \'\');
$outTpl = $modx->getOption(\'outTpl\', $scriptProperties, \'\');
$wrapIfEmpty = $modx->getOption(\'wrapIfEmpty\', $scriptProperties, 1);
$separator = $modx->getOption(\'separator\', $scriptProperties, \'\');
$limit = intval($modx->getOption(\'limit\', $scriptProperties, 0));
$offset = intval($modx->getOption(\'offset\', $scriptProperties, 0));
$totalPh = $modx->getOption(\'totalPh\', $scriptProperties, \'tags_total\');

$weight = (int) $modx->getOption(\'weight\', $scriptProperties, \'0\');

$friendlyURL = $modx->getOption(\'friendlyURL\', $scriptProperties, $modx->getOption(\'friendly_urls\', null, 0));

$sort = $modx->getOption(\'sort\', $scriptProperties, \'{}\');
$sort = $modx->fromJSON($sort);
if ($sort === null || $sort == \'\' || count($sort) == 0) {
    $sort = array(
        \'tag\' => \'ASC\'
    );
}

$resources = $tagger->explodeAndClean($resources);
$parents = $tagger->explodeAndClean($parents);
$groups = $tagger->explodeAndClean($groups);
$contexts = $tagger->explodeAndClean($contexts);
$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, \'\');

$c = $modx->newQuery(\'TaggerTag\');

$c->leftJoin(\'TaggerTagResource\', \'Resources\');
$c->leftJoin(\'TaggerGroup\', \'Group\');
$c->leftJoin(\'modResource\', \'Resource\', array(\'Resources.resource = Resource.id\'));

if (!empty($parents)) {
    $c->where(array(
        \'Resource.parent:IN\' => $parents,
    ));
}

if (!empty($contexts)) {
    $c->where(array(
        \'Resource.context_key:IN\' => $contexts,
    ));
}

if ($showUnpublished == 0) {
    $c->where(array(
        \'Resource.published\' => 1,
        \'OR:Resource.published:IN\' => null,
    ));
}

if ($showDeleted == 0) {
    $c->where(array(
        \'Resource.deleted\' => 0,
        \'OR:Resource.deleted:IS\' => null,
    ));
}

if ($showUnused == 0) {
    $c->having(array(
        \'cnt > 0\',
    ));
}

if (!empty($resources)) {
    $c->where(array(
        \'Resources.resource:IN\' => $resources
    ));
}

if ($groups) {
    $c->where(array(
        \'Group.id:IN\' => $groups,
        \'OR:Group.name:IN\' => $groups,
        \'OR:Group.alias:IN\' => $groups,
    ));
}
$c->select($modx->getSelectColumns(\'TaggerTag\', \'TaggerTag\'));
$c->select($modx->getSelectColumns(\'TaggerGroup\', \'Group\', \'group_\'));
$c->select(array(\'cnt\' => \'COUNT(Resources.tag)\'));
$c->groupby($modx->getSelectColumns(\'TaggerTag\', \'TaggerTag\') . \',\' . $modx->getSelectColumns(\'TaggerGroup\', \'Group\'));

$c->prepare();

$countQuery = new xPDOCriteria($modx, "SELECT COUNT(*) as total, MAX(cnt) as max_cnt FROM ({$c->toSQL(false)}) cq", $c->bindings, $c->cacheFlag);
$stmt = $countQuery->prepare();

if ($stmt && $stmt->execute()) {
    $fetchedData = $stmt->fetch(PDO::FETCH_ASSOC);
    $total = intval($fetchedData[\'total\']);
    $maxCnt = intval($fetchedData[\'max_cnt\']);
} else {
    $total = 0;
    $maxCnt = 0;
}

$modx->setPlaceholder($totalPh, $total);

foreach ($sort as $field => $dir) {
    $dir = (strtolower($dir) == \'asc\') ? \'asc\' : \'desc\';
    $c->sortby($field, $dir);
}

$c->limit($limit, $offset);

$tags = $modx->getIterator(\'TaggerTag\', $c);

$out = array();

// prep for &tpl_N
$keys = array_keys($scriptProperties);
$nthTpls = array();
foreach($keys as $key) {
    $keyBits = $tagger->explodeAndClean($key, \'_\');
    if (isset($keyBits[0]) && $keyBits[0] === \'tpl\') {
        if ($i = (int) $keyBits[1]) $nthTpls[$i] = $scriptProperties[$key];
    }
}
ksort($nthTpls);

$idx = 1;
$currentTags = $tagger->getCurrentTags();

foreach ($tags as $tag) {
    /** @var TaggerTag $tag */
    $phs = $tag->toArray();

    $group = $tag->Group;

    if ($friendlyURL == 1) {
        $uri = rtrim($modx->makeUrl($target, \'\', \'\'), \'/\') . \'/\' . $group->alias . \'/\' . $tag->alias . \'/\';
    } else {
        $uri = $modx->makeUrl($target, \'\', $group->alias . \'=\' . $tag->alias);
    }

    $phs[\'uri\'] = $uri;
    $phs[\'idx\'] = $idx;
    $phs[\'target\'] = $target;
    $phs[\'max_cnt\'] = $maxCnt;
    
    if (isset($currentTags[$group->alias][\'tags\'][$tag->alias])) {
        $phs[\'active\'] = 1;    
    } else {
        $phs[\'active\'] = 0;
    }

    if ($weight > 0) {
        $phs[\'weight\'] = intval(ceil($phs[\'cnt\'] / ($maxCnt / $weight)));
    }

    if ($translate == 1) {
        $groupNameTranslated = $modx->lexicon(\'tagger.custom.\' . $phs[\'group_alias\']);
        $groupDescriptionTranslated = $modx->lexicon(\'tagger.custom.\' . $phs[\'group_alias\'] . \'_desc\');

        $phs[\'group_name_translated\'] = ($groupNameTranslated == \'tagger.custom.\' . $phs[\'group_alias\']) ? $phs[\'group_name\'] : $groupNameTranslated;
        $phs[\'group_description_translated\'] = ($groupDescriptionTranslated == \'tagger.custom.\' . $phs[\'group_alias\'] . \'_desc\') ? $phs[\'group_description\'] : $groupDescriptionTranslated;
    }

    $rowTpl = $defaultRowTpl;
    $phs[\'sp\'] = $scriptProperties;

    if ($rowTpl == \'\') {
        $out[] = \'<pre>\' . print_r($phs, true) . \'</pre>\';
    } else {
        if (isset($nthTpls[$idx])) {
            $rowTpl = $nthTpls[$idx];
        } else {
            foreach ($nthTpls as $int => $tpl) {
                if ( ($idx % $int) === 0 ) $rowTpl = $tpl;
            }
        }

        $out[] = $tagger->getChunk($rowTpl, $phs);
    }

    $idx++;
}

$out = implode($separator, $out);

if ($outTpl != \'\') {
    if (!empty($out) || $wrapIfEmpty) {
        $noActiveTags = (int)(count($currentTags) === 0);
        $out = $tagger->getChunk($outTpl, array(\'tags\' => $out, \'sp\' => $scriptProperties, \'noActiveTags\' => $noActiveTags));
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $out);
    return \'\';
}

return $out;',
    ),
  ),
  'e8784c7d4c3ca9a66c8e4730c5bb374a' => 
  array (
    'criteria' => 
    array (
      'name' => 'TaggerGetResourcesWhere',
    ),
    'object' => 
    array (
      'id' => 7,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'TaggerGetResourcesWhere',
      'description' => '',
      'editor_type' => 0,
      'category' => 6,
      'cache_type' => 0,
      'snippet' => '/**
 * TaggerGetResourcesWhere
 *
 * DESCRIPTION
 *
 * This snippet generate SQL Query that can be used in WHERE condition in getResources snippet
 *
 * PROPERTIES:
 *
 * &tags            string  optional    Comma separated list of Tags for which will be generated a Resource query. By default Tags from GET param will be loaded
 * &groups          string  optional    Comma separated list of Tagger Groups. Only from those groups will Tags be allowed
 * &where           string  optional    Original getResources where property. If you used where property in your current getResources call, move it here
 * &likeComparison  int     optional    If set to 1, tags will compare using LIKE
 * &tagField        string  optional    Field that will be used to compare with given tags. Default: alias
 * &matchAll        int     optional    If set to 1, resource must have all specified tags. Default: 0
 * &field           string  optional    modResource field that will be used to compare with assigned resource ID
 *
 * USAGE:
 *
 * [[!getResources? &where=`[[!TaggerGetResourcesWhere? &tags=`Books,Vehicles` &where=`{"isfolder": 0}`]]`]]
 *
 */

$tagger = $modx->getService(\'tagger\',\'Tagger\',$modx->getOption(\'tagger.core_path\',null,$modx->getOption(\'core_path\').\'components/tagger/\').\'model/tagger/\',$scriptProperties);
if (!($tagger instanceof Tagger)) return \'\';

$tags = $modx->getOption(\'tags\', $scriptProperties, \'\');
$where = $modx->getOption(\'where\', $scriptProperties, \'\');
$tagField = $modx->getOption(\'tagField\', $scriptProperties, \'alias\');
$likeComparison = (int) $modx->getOption(\'likeComparison\', $scriptProperties, 0);
$matchAll = (int) $modx->getOption(\'matchAll\', $scriptProperties, 0);
$field = $modx->getOption(\'field\', $scriptProperties, \'id\');
$where = $modx->fromJSON($where);
if ($where == false) {
    $where = array();
}

$tagsCount = 0;

if ($tags == \'\') {
    $gc = $modx->newQuery(\'TaggerGroup\');
    $gc->select($modx->getSelectColumns(\'TaggerGroup\', \'\', \'\', array(\'alias\')));

    $groups = $modx->getOption(\'groups\', $scriptProperties, \'\');
    $groups = $tagger->explodeAndClean($groups);
    if (!empty($groups)) {
        $gc->where(array(
            \'name:IN\' => $groups,
            \'OR:alias:IN\' => $groups,
            \'OR:id:IN\' => $groups,
        ));
    }

    $gc->prepare();
    $gc->stmt->execute();
    $groups = $gc->stmt->fetchAll(PDO::FETCH_COLUMN, 0);

    $conditions = array();
    foreach ($groups as $group) {
        if (isset($_GET[$group])) {
            $groupTags = $tagger->explodeAndClean($_GET[$group]);
            if (!empty($groupTags)) {
                $like = array(\'AND:alias:IN\' => $groupTags);

                if ($likeComparison == 1) {
                    foreach ($groupTags as $tag) {
                        $like[] = array(\'OR:alias:LIKE\' => \'%\' . $tag . \'%\');
                    }
                }

                $conditions[] = array(
                    \'OR:Group.alias:=\' => $group,
                    $like
                );
                $tagsCount += count($groupTags);
            }
        }
    }

    if (count($conditions) == 0) {
        return $modx->toJSON($where);
    }

    $c = $modx->newQuery(\'TaggerTag\');
    $c->leftJoin(\'TaggerGroup\', \'Group\');

    $c->where($conditions);
} else {
    $tags = $tagger->explodeAndClean($tags);

    if (empty($tags)) {
        return $modx->toJSON($where);
    }

    $tagsCount = count($tags);

    $groups = $modx->getOption(\'groups\', $scriptProperties, \'\');

    $groups = $tagger->explodeAndClean($groups);

    $c = $modx->newQuery(\'TaggerTag\');
    $c->select($modx->getSelectColumns(\'TaggerTag\', \'TaggerTag\', \'\', array(\'id\')));

    $compare = array(
        $tagField . \':IN\' => $tags
    );

    if ($likeComparison == 1) {
        foreach ($tags as $tag) {
            $compare[] = array(\'OR:\' . $tagField . \':LIKE\' => \'%\' . $tag . \'%\');
        }
    }

    $c->where($compare);

    if (!empty($groups)) {
        $c->leftJoin(\'TaggerGroup\', \'Group\');
        $c->where(array(
            \'Group.id:IN\' => $groups,
            \'OR:Group.name:IN\' => $groups,
            \'OR:Group.alias:IN\' => $groups,
        ));
    }
}

$c->prepare();
$c->stmt->execute();
$tagIDs = $c->stmt->fetchAll(PDO::FETCH_COLUMN, 0);

if (count($tagIDs) == 0) {
    $tagIDs[] = 0;
}

if ($matchAll == 0) {
    $where[] = "EXISTS (SELECT 1 FROM {$modx->getTableName(\'TaggerTagResource\')} r WHERE r.tag IN (" . implode(\',\', $tagIDs) . ") AND r.resource = modResource." . $field . ")";
} else {
    $where[] = "EXISTS (SELECT 1 as found FROM {$modx->getTableName(\'TaggerTagResource\')} r WHERE r.tag IN (" . implode(\',\', $tagIDs) . ") AND r.resource = modResource." . $field . " GROUP BY found HAVING count(found) = " . $tagsCount . ")";
}

return $modx->toJSON($where);',
      'locked' => 0,
      'properties' => 'a:6:{s:4:"tags";a:7:{s:4:"name";s:4:"tags";s:4:"desc";s:34:"tagger.getresourceswhere.tags_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:6:"groups";a:7:{s:4:"name";s:6:"groups";s:4:"desc";s:36:"tagger.getresourceswhere.groups_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:35:"tagger.getresourceswhere.where_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:14:"likeComparison";a:7:{s:4:"name";s:14:"likeComparison";s:4:"desc";s:44:"tagger.getresourceswhere.likeComparison_desc";s:4:"type";s:11:"numberfield";s:7:"options";s:0:"";s:5:"value";s:1:"0";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:8:"tagField";a:7:{s:4:"name";s:8:"tagField";s:4:"desc";s:38:"tagger.getresourceswhere.tagField_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:5:"alias";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}s:8:"matchAll";a:7:{s:4:"name";s:8:"matchAll";s:4:"desc";s:38:"tagger.getresourceswhere.matchAll_desc";s:4:"type";s:11:"numberfield";s:7:"options";s:0:"";s:5:"value";s:1:"0";s:7:"lexicon";s:17:"tagger:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * TaggerGetResourcesWhere
 *
 * DESCRIPTION
 *
 * This snippet generate SQL Query that can be used in WHERE condition in getResources snippet
 *
 * PROPERTIES:
 *
 * &tags            string  optional    Comma separated list of Tags for which will be generated a Resource query. By default Tags from GET param will be loaded
 * &groups          string  optional    Comma separated list of Tagger Groups. Only from those groups will Tags be allowed
 * &where           string  optional    Original getResources where property. If you used where property in your current getResources call, move it here
 * &likeComparison  int     optional    If set to 1, tags will compare using LIKE
 * &tagField        string  optional    Field that will be used to compare with given tags. Default: alias
 * &matchAll        int     optional    If set to 1, resource must have all specified tags. Default: 0
 * &field           string  optional    modResource field that will be used to compare with assigned resource ID
 *
 * USAGE:
 *
 * [[!getResources? &where=`[[!TaggerGetResourcesWhere? &tags=`Books,Vehicles` &where=`{"isfolder": 0}`]]`]]
 *
 */

$tagger = $modx->getService(\'tagger\',\'Tagger\',$modx->getOption(\'tagger.core_path\',null,$modx->getOption(\'core_path\').\'components/tagger/\').\'model/tagger/\',$scriptProperties);
if (!($tagger instanceof Tagger)) return \'\';

$tags = $modx->getOption(\'tags\', $scriptProperties, \'\');
$where = $modx->getOption(\'where\', $scriptProperties, \'\');
$tagField = $modx->getOption(\'tagField\', $scriptProperties, \'alias\');
$likeComparison = (int) $modx->getOption(\'likeComparison\', $scriptProperties, 0);
$matchAll = (int) $modx->getOption(\'matchAll\', $scriptProperties, 0);
$field = $modx->getOption(\'field\', $scriptProperties, \'id\');
$where = $modx->fromJSON($where);
if ($where == false) {
    $where = array();
}

$tagsCount = 0;

if ($tags == \'\') {
    $gc = $modx->newQuery(\'TaggerGroup\');
    $gc->select($modx->getSelectColumns(\'TaggerGroup\', \'\', \'\', array(\'alias\')));

    $groups = $modx->getOption(\'groups\', $scriptProperties, \'\');
    $groups = $tagger->explodeAndClean($groups);
    if (!empty($groups)) {
        $gc->where(array(
            \'name:IN\' => $groups,
            \'OR:alias:IN\' => $groups,
            \'OR:id:IN\' => $groups,
        ));
    }

    $gc->prepare();
    $gc->stmt->execute();
    $groups = $gc->stmt->fetchAll(PDO::FETCH_COLUMN, 0);

    $conditions = array();
    foreach ($groups as $group) {
        if (isset($_GET[$group])) {
            $groupTags = $tagger->explodeAndClean($_GET[$group]);
            if (!empty($groupTags)) {
                $like = array(\'AND:alias:IN\' => $groupTags);

                if ($likeComparison == 1) {
                    foreach ($groupTags as $tag) {
                        $like[] = array(\'OR:alias:LIKE\' => \'%\' . $tag . \'%\');
                    }
                }

                $conditions[] = array(
                    \'OR:Group.alias:=\' => $group,
                    $like
                );
                $tagsCount += count($groupTags);
            }
        }
    }

    if (count($conditions) == 0) {
        return $modx->toJSON($where);
    }

    $c = $modx->newQuery(\'TaggerTag\');
    $c->leftJoin(\'TaggerGroup\', \'Group\');

    $c->where($conditions);
} else {
    $tags = $tagger->explodeAndClean($tags);

    if (empty($tags)) {
        return $modx->toJSON($where);
    }

    $tagsCount = count($tags);

    $groups = $modx->getOption(\'groups\', $scriptProperties, \'\');

    $groups = $tagger->explodeAndClean($groups);

    $c = $modx->newQuery(\'TaggerTag\');
    $c->select($modx->getSelectColumns(\'TaggerTag\', \'TaggerTag\', \'\', array(\'id\')));

    $compare = array(
        $tagField . \':IN\' => $tags
    );

    if ($likeComparison == 1) {
        foreach ($tags as $tag) {
            $compare[] = array(\'OR:\' . $tagField . \':LIKE\' => \'%\' . $tag . \'%\');
        }
    }

    $c->where($compare);

    if (!empty($groups)) {
        $c->leftJoin(\'TaggerGroup\', \'Group\');
        $c->where(array(
            \'Group.id:IN\' => $groups,
            \'OR:Group.name:IN\' => $groups,
            \'OR:Group.alias:IN\' => $groups,
        ));
    }
}

$c->prepare();
$c->stmt->execute();
$tagIDs = $c->stmt->fetchAll(PDO::FETCH_COLUMN, 0);

if (count($tagIDs) == 0) {
    $tagIDs[] = 0;
}

if ($matchAll == 0) {
    $where[] = "EXISTS (SELECT 1 FROM {$modx->getTableName(\'TaggerTagResource\')} r WHERE r.tag IN (" . implode(\',\', $tagIDs) . ") AND r.resource = modResource." . $field . ")";
} else {
    $where[] = "EXISTS (SELECT 1 as found FROM {$modx->getTableName(\'TaggerTagResource\')} r WHERE r.tag IN (" . implode(\',\', $tagIDs) . ") AND r.resource = modResource." . $field . " GROUP BY found HAVING count(found) = " . $tagsCount . ")";
}

return $modx->toJSON($where);',
    ),
  ),
  '03fb99a19384196d9f4330948a1be6c7' => 
  array (
    'criteria' => 
    array (
      'name' => 'TaggerGetRelatedWhere',
    ),
    'object' => 
    array (
      'id' => 8,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'TaggerGetRelatedWhere',
      'description' => '',
      'editor_type' => 0,
      'category' => 6,
      'cache_type' => 0,
      'snippet' => '/**
 * TaggerGetRelatedWhere
 *
 * DESCRIPTION
 *
 * This snippet generates a SQL Query that can be used in WHERE condition in getResources snippet
 * to get related resources, which have the same tags 
 *
 * PROPERTIES:
 *
 * &resources       string  optional    Comma separated list of resources for which will be listed Tags. Default: current resource
 * &groups          string  optional    Comma separated list of Tagger Groups for which will be listed Tags
 * &showUnused      int     optional    If 1 is set, Tags that are not assigned to any Resource will be included to the output as well
 * &showUnpublished int     optional    If 1 is set, Tags that are assigned only to unpublished Resources will be included to the output as well
 * &showDeleted     int     optional    If 1 is set, Tags that are assigned only to deleted Resources will be included to the output as well
 * &contexts        string  optional    If set, will display only tags for resources in given contexts. Contexts can be separated by a comma
 * 
 * TaggerGetResourcesWhere - PROPERTIES:
 * 
 * &tags            string  optional    Comma separated list of Tags for which will be generated a Resource query. By default Tags from GET param will be loaded
 * &groups          string  optional    Comma separated list of Tagger Groups. Only from those groups will Tags be allowed
 * &where           string  optional    Original getResources where property. If you used where property in your current getResources call, move it here
 * &likeComparison  int     optional    If set to 1, tags will compare using LIKE
 * &tagField        string  optional    Field that will be used to compare with given tags. Default: alias
 * &matchAll        int     optional    If set to 1, resource must have all specified tags. Default: 0 
 *
 * USAGE:
 *
 * [[!TaggerGetRelatedWhere? &groups=`1` ]]
 *
 *
 * @package tagger
 */

/** @var Tagger $tagger */
$tagger = $modx->getService(\'tagger\', \'Tagger\', $modx->getOption(\'tagger.core_path\', null, $modx->getOption(\'core_path\') . \'components/tagger/\') . \'model/tagger/\', $scriptProperties);
if (!($tagger instanceof Tagger))
    return \'\';

$resources = $modx->getOption(\'resources\', $scriptProperties, is_object($modx->resource) ? $modx->resource->get(\'id\') : \'\');
$groups = $modx->getOption(\'groups\', $scriptProperties, \'\');
$showUnused = (int)$modx->getOption(\'showUnused\', $scriptProperties, \'0\');
$showUnpublished = (int)$modx->getOption(\'showUnpublished\', $scriptProperties, \'0\');
$showDeleted = (int)$modx->getOption(\'showDeleted\', $scriptProperties, \'0\');
$contexts = $modx->getOption(\'contexts\', $scriptProperties, \'\');

$totalPh = $modx->getOption(\'totalPh\', $scriptProperties, \'tags_total\');

$resources = $tagger->explodeAndClean($resources);
$groups = $tagger->explodeAndClean($groups);
$contexts = $tagger->explodeAndClean($contexts);

$c = $modx->newQuery(\'TaggerTag\');

$c->leftJoin(\'TaggerTagResource\', \'Resources\');
$c->leftJoin(\'TaggerGroup\', \'Group\');
$c->leftJoin(\'modResource\', \'Resource\', array(\'Resources.resource = Resource.id\'));


if (!empty($contexts)) {
    $c->where(array(\'Resource.context_key:IN\' => $contexts, ));
}

if ($showUnpublished == 0) {
    $c->where(array(
        \'Resource.published\' => 1,
        \'OR:Resource.published:IN\' => null,
        ));
}

if ($showDeleted == 0) {
    $c->where(array(
        \'Resource.deleted\' => 0,
        \'OR:Resource.deleted:IS\' => null,
        ));
}

if ($showUnused == 0) {
    $c->having(array(\'cnt > 0\', ));
}

if ($resources) {
    $c->where(array(\'Resources.resource:IN\' => $resources));
}

if ($groups) {
    $c->where(array(
        \'Group.id:IN\' => $groups,
        \'OR:Group.name:IN\' => $groups,
        \'OR:Group.alias:IN\' => $groups,
        ));
}
$c->select($modx->getSelectColumns(\'TaggerTag\', \'TaggerTag\'));
//$c->select($modx->getSelectColumns(\'TaggerGroup\', \'Group\', \'group_\'));
$c->select(array(\'cnt\' => \'COUNT(Resources.tag)\'));
$c->groupby($modx->getSelectColumns(\'TaggerTag\', \'TaggerTag\') . \',\' . $modx->getSelectColumns(\'TaggerGroup\', \'Group\'));

$c->prepare();
$countQuery = new xPDOCriteria($modx, "SELECT COUNT(*) FROM ({$c->toSQL(false)}) cq", $c->bindings, $c->cacheFlag);
$stmt = $countQuery->prepare();
if ($stmt && $stmt->execute()) {
    $total = intval($stmt->fetchColumn());
} else {
    $total = 0;
}

$modx->setPlaceholder($totalPh, $total);

$tags = array();

if ($collection = $modx->getIterator(\'TaggerTag\', $c)) {
    foreach ($collection as $tag) {
        $tags[] = $tag->get(\'alias\');
    }
}

$wherecondition = array(\'id:not IN\' => $resources);

$scriptProperties[\'where\'] = $modx->toJson($wherecondition);

$output = \'{"template":"99999999"}\';

if (count($tags)) {
    $scriptProperties[\'tags\'] = implode(\',\', $tags);
    $output = $modx->runSnippet(\'TaggerGetResourcesWhere\', $scriptProperties);
}

return $output;',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * TaggerGetRelatedWhere
 *
 * DESCRIPTION
 *
 * This snippet generates a SQL Query that can be used in WHERE condition in getResources snippet
 * to get related resources, which have the same tags 
 *
 * PROPERTIES:
 *
 * &resources       string  optional    Comma separated list of resources for which will be listed Tags. Default: current resource
 * &groups          string  optional    Comma separated list of Tagger Groups for which will be listed Tags
 * &showUnused      int     optional    If 1 is set, Tags that are not assigned to any Resource will be included to the output as well
 * &showUnpublished int     optional    If 1 is set, Tags that are assigned only to unpublished Resources will be included to the output as well
 * &showDeleted     int     optional    If 1 is set, Tags that are assigned only to deleted Resources will be included to the output as well
 * &contexts        string  optional    If set, will display only tags for resources in given contexts. Contexts can be separated by a comma
 * 
 * TaggerGetResourcesWhere - PROPERTIES:
 * 
 * &tags            string  optional    Comma separated list of Tags for which will be generated a Resource query. By default Tags from GET param will be loaded
 * &groups          string  optional    Comma separated list of Tagger Groups. Only from those groups will Tags be allowed
 * &where           string  optional    Original getResources where property. If you used where property in your current getResources call, move it here
 * &likeComparison  int     optional    If set to 1, tags will compare using LIKE
 * &tagField        string  optional    Field that will be used to compare with given tags. Default: alias
 * &matchAll        int     optional    If set to 1, resource must have all specified tags. Default: 0 
 *
 * USAGE:
 *
 * [[!TaggerGetRelatedWhere? &groups=`1` ]]
 *
 *
 * @package tagger
 */

/** @var Tagger $tagger */
$tagger = $modx->getService(\'tagger\', \'Tagger\', $modx->getOption(\'tagger.core_path\', null, $modx->getOption(\'core_path\') . \'components/tagger/\') . \'model/tagger/\', $scriptProperties);
if (!($tagger instanceof Tagger))
    return \'\';

$resources = $modx->getOption(\'resources\', $scriptProperties, is_object($modx->resource) ? $modx->resource->get(\'id\') : \'\');
$groups = $modx->getOption(\'groups\', $scriptProperties, \'\');
$showUnused = (int)$modx->getOption(\'showUnused\', $scriptProperties, \'0\');
$showUnpublished = (int)$modx->getOption(\'showUnpublished\', $scriptProperties, \'0\');
$showDeleted = (int)$modx->getOption(\'showDeleted\', $scriptProperties, \'0\');
$contexts = $modx->getOption(\'contexts\', $scriptProperties, \'\');

$totalPh = $modx->getOption(\'totalPh\', $scriptProperties, \'tags_total\');

$resources = $tagger->explodeAndClean($resources);
$groups = $tagger->explodeAndClean($groups);
$contexts = $tagger->explodeAndClean($contexts);

$c = $modx->newQuery(\'TaggerTag\');

$c->leftJoin(\'TaggerTagResource\', \'Resources\');
$c->leftJoin(\'TaggerGroup\', \'Group\');
$c->leftJoin(\'modResource\', \'Resource\', array(\'Resources.resource = Resource.id\'));


if (!empty($contexts)) {
    $c->where(array(\'Resource.context_key:IN\' => $contexts, ));
}

if ($showUnpublished == 0) {
    $c->where(array(
        \'Resource.published\' => 1,
        \'OR:Resource.published:IN\' => null,
        ));
}

if ($showDeleted == 0) {
    $c->where(array(
        \'Resource.deleted\' => 0,
        \'OR:Resource.deleted:IS\' => null,
        ));
}

if ($showUnused == 0) {
    $c->having(array(\'cnt > 0\', ));
}

if ($resources) {
    $c->where(array(\'Resources.resource:IN\' => $resources));
}

if ($groups) {
    $c->where(array(
        \'Group.id:IN\' => $groups,
        \'OR:Group.name:IN\' => $groups,
        \'OR:Group.alias:IN\' => $groups,
        ));
}
$c->select($modx->getSelectColumns(\'TaggerTag\', \'TaggerTag\'));
//$c->select($modx->getSelectColumns(\'TaggerGroup\', \'Group\', \'group_\'));
$c->select(array(\'cnt\' => \'COUNT(Resources.tag)\'));
$c->groupby($modx->getSelectColumns(\'TaggerTag\', \'TaggerTag\') . \',\' . $modx->getSelectColumns(\'TaggerGroup\', \'Group\'));

$c->prepare();
$countQuery = new xPDOCriteria($modx, "SELECT COUNT(*) FROM ({$c->toSQL(false)}) cq", $c->bindings, $c->cacheFlag);
$stmt = $countQuery->prepare();
if ($stmt && $stmt->execute()) {
    $total = intval($stmt->fetchColumn());
} else {
    $total = 0;
}

$modx->setPlaceholder($totalPh, $total);

$tags = array();

if ($collection = $modx->getIterator(\'TaggerTag\', $c)) {
    foreach ($collection as $tag) {
        $tags[] = $tag->get(\'alias\');
    }
}

$wherecondition = array(\'id:not IN\' => $resources);

$scriptProperties[\'where\'] = $modx->toJson($wherecondition);

$output = \'{"template":"99999999"}\';

if (count($tags)) {
    $scriptProperties[\'tags\'] = implode(\',\', $tags);
    $output = $modx->runSnippet(\'TaggerGetResourcesWhere\', $scriptProperties);
}

return $output;',
    ),
  ),
  'ff669d7a791dd0b51b25df15d4d71055' => 
  array (
    'criteria' => 
    array (
      'name' => 'TaggerGetCurrentTag',
    ),
    'object' => 
    array (
      'id' => 9,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'TaggerGetCurrentTag',
      'description' => '',
      'editor_type' => 0,
      'category' => 6,
      'cache_type' => 0,
      'snippet' => '/**
 * TaggerGetCurrentTag
 *
 * DESCRIPTION
 *
 *
 * PROPERTIES:
 * 
 * &tagTpl          string  optional    Name of a chunk that will be used for each Tag. If no chunk is given, array with available placeholders will be rendered
 * &groupTpl        string  optional    Name of a chunk that will be used for each Tag. If no chunk is given, array with available placeholders will be rendered
 * &tagSeparator    string  optional    String separator, that will be used for separating Tags
 * &groupSeparator  string  optional    String separator, that will be used for separating Groups
 *
 * USAGE:
 *
 * [[!TaggerGetCurrentTag? &groupTpl=`currentGroup` &tagTpl=`@INLINE [[+tag]]` &tagSeparator=`, ` ]]
 *
 *
 * @package tagger
 */

/** @var Tagger $tagger */
$tagger = $modx->getService(\'tagger\', \'Tagger\', $modx->getOption(\'tagger.core_path\', null, $modx->getOption(\'core_path\') . \'components/tagger/\') . \'model/tagger/\', $scriptProperties);
if (!($tagger instanceof Tagger))
    return \'\';

$tagTpl = $modx->getOption(\'tagTpl\', $scriptProperties, \'\');
$groupTpl = $modx->getOption(\'groupTpl\', $scriptProperties, \'\');
$tagSeparator = $modx->getOption(\'tagSeparator\', $scriptProperties, \'\');
$groupSeparator = $modx->getOption(\'groupSeparator\', $scriptProperties, \'\');

$currentTags = $tagger->getCurrentTags();

$output = array();

foreach ($currentTags as $currentTag) {
    if (!isset($currentTag[\'tags\'])) continue;

    $tags = array();
    foreach ($currentTag[\'tags\'] as $tag) {
        $phs = array (
            \'tag\' => $tag[\'tag\'],
            \'alias\' => $tag[\'alias\'],
            \'group_name\' => $currentTag[\'group\'],
            \'group_alias\' => $currentTag[\'alias\'],
        );

        if (empty($tagTpl)) {
            $tags[] = \'<pre>\' . print_r($phs, true) . \'</pre>\';
        } else {
            $tags[] = $tagger->getChunk($tagTpl, $phs);
        }
    }
    
    $groupPhs = array(
        \'name\' => $currentTag[\'group\'],
        \'alias\' => $currentTag[\'alias\'],
        \'multipleTags\' => intval(count($tags) > 1),
        \'tags\' => implode($tagSeparator, $tags)
    );

    if (empty($groupTpl)) {
        $output[] = \'<pre>\' . print_r($groupPhs, true) . \'</pre>\';
    } else {
        $output[] = $tagger->getChunk($groupTpl, $groupPhs);
    }
}

return implode($groupSeparator, $output);',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * TaggerGetCurrentTag
 *
 * DESCRIPTION
 *
 *
 * PROPERTIES:
 * 
 * &tagTpl          string  optional    Name of a chunk that will be used for each Tag. If no chunk is given, array with available placeholders will be rendered
 * &groupTpl        string  optional    Name of a chunk that will be used for each Tag. If no chunk is given, array with available placeholders will be rendered
 * &tagSeparator    string  optional    String separator, that will be used for separating Tags
 * &groupSeparator  string  optional    String separator, that will be used for separating Groups
 *
 * USAGE:
 *
 * [[!TaggerGetCurrentTag? &groupTpl=`currentGroup` &tagTpl=`@INLINE [[+tag]]` &tagSeparator=`, ` ]]
 *
 *
 * @package tagger
 */

/** @var Tagger $tagger */
$tagger = $modx->getService(\'tagger\', \'Tagger\', $modx->getOption(\'tagger.core_path\', null, $modx->getOption(\'core_path\') . \'components/tagger/\') . \'model/tagger/\', $scriptProperties);
if (!($tagger instanceof Tagger))
    return \'\';

$tagTpl = $modx->getOption(\'tagTpl\', $scriptProperties, \'\');
$groupTpl = $modx->getOption(\'groupTpl\', $scriptProperties, \'\');
$tagSeparator = $modx->getOption(\'tagSeparator\', $scriptProperties, \'\');
$groupSeparator = $modx->getOption(\'groupSeparator\', $scriptProperties, \'\');

$currentTags = $tagger->getCurrentTags();

$output = array();

foreach ($currentTags as $currentTag) {
    if (!isset($currentTag[\'tags\'])) continue;

    $tags = array();
    foreach ($currentTag[\'tags\'] as $tag) {
        $phs = array (
            \'tag\' => $tag[\'tag\'],
            \'alias\' => $tag[\'alias\'],
            \'group_name\' => $currentTag[\'group\'],
            \'group_alias\' => $currentTag[\'alias\'],
        );

        if (empty($tagTpl)) {
            $tags[] = \'<pre>\' . print_r($phs, true) . \'</pre>\';
        } else {
            $tags[] = $tagger->getChunk($tagTpl, $phs);
        }
    }
    
    $groupPhs = array(
        \'name\' => $currentTag[\'group\'],
        \'alias\' => $currentTag[\'alias\'],
        \'multipleTags\' => intval(count($tags) > 1),
        \'tags\' => implode($tagSeparator, $tags)
    );

    if (empty($groupTpl)) {
        $output[] = \'<pre>\' . print_r($groupPhs, true) . \'</pre>\';
    } else {
        $output[] = $tagger->getChunk($groupTpl, $groupPhs);
    }
}

return implode($groupSeparator, $output);',
    ),
  ),
  'bd506708949c63f1c0a5768db6a9d730' => 
  array (
    'criteria' => 
    array (
      'name' => 'Tagger',
    ),
    'object' => 
    array (
      'id' => 5,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Tagger',
      'description' => '',
      'editor_type' => 0,
      'category' => 6,
      'cache_type' => 0,
      'plugincode' => '/**
 * Tagger
 *
 * DESCRIPTION
 *
 * This plugin inject JS to add Tab with tag groups into Resource panel
 */

$corePath = $modx->getOption(\'tagger.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/tagger/\');
/** @var Tagger $tagger */
$tagger = $modx->getService(
    \'tagger\',
    \'Tagger\',
    $corePath . \'model/tagger/\',
    array(
        \'core_path\' => $corePath
    )
);

$className = \'Tagger\' . $modx->event->name;
$modx->loadClass(\'TaggerPlugin\', $tagger->getOption(\'modelPath\') . \'tagger/events/\', true, true);
$modx->loadClass($className, $tagger->getOption(\'modelPath\') . \'tagger/events/\', true, true);

if (class_exists($className)) {
    /** @var TaggerPlugin $handler */
    $handler = new $className($modx, $scriptProperties);
    $handler->run();
}

return;',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Tagger
 *
 * DESCRIPTION
 *
 * This plugin inject JS to add Tab with tag groups into Resource panel
 */

$corePath = $modx->getOption(\'tagger.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/tagger/\');
/** @var Tagger $tagger */
$tagger = $modx->getService(
    \'tagger\',
    \'Tagger\',
    $corePath . \'model/tagger/\',
    array(
        \'core_path\' => $corePath
    )
);

$className = \'Tagger\' . $modx->event->name;
$modx->loadClass(\'TaggerPlugin\', $tagger->getOption(\'modelPath\') . \'tagger/events/\', true, true);
$modx->loadClass($className, $tagger->getOption(\'modelPath\') . \'tagger/events/\', true, true);

if (class_exists($className)) {
    /** @var TaggerPlugin $handler */
    $handler = new $className($modx, $scriptProperties);
    $handler->run();
}

return;',
    ),
  ),
  '140dc8e1266340f198ea4d7dc82daa0b' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 5,
      'event' => 'OnDocFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 5,
      'event' => 'OnDocFormSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '2c7f0644916325475906acbeebd7d28c' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 5,
      'event' => 'OnDocFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 5,
      'event' => 'OnDocFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'd1170e05b589b11eaa78e6b86101a314' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 5,
      'event' => 'OnResourceDuplicate',
    ),
    'object' => 
    array (
      'pluginid' => 5,
      'event' => 'OnResourceDuplicate',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '6282626245bdb8da1fecca3c552521cd' => 
  array (
    'criteria' => 
    array (
      'namespace' => 'tagger',
      'controller' => 'index',
    ),
    'object' => 
    array (
      'id' => 3,
      'namespace' => 'tagger',
      'controller' => 'index',
      'haslayout' => 1,
      'lang_topics' => 'tagger:default',
      'assets' => '',
      'help_url' => '',
    ),
  ),
  '2210e72801521262164bc26005aba874' => 
  array (
    'criteria' => 
    array (
      'text' => 'tagger.menu.tagger',
    ),
    'object' => 
    array (
      'text' => 'tagger.menu.tagger',
      'parent' => 'components',
      'action' => '3',
      'description' => 'tagger.menu.tagger_desc',
      'icon' => '',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'core',
    ),
  ),
);