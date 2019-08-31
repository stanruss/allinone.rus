<?php return array (
  'f260ccebd457d433ccc7744e23c9bdfb' => 
  array (
    'criteria' => 
    array (
      'name' => 'personalize',
    ),
    'object' => 
    array (
      'name' => 'personalize',
      'path' => '{core_path}components/personalize/',
      'assets_path' => '',
    ),
  ),
  '0899ec3ea44ef23cf61ab453f6477ef2' => 
  array (
    'criteria' => 
    array (
      'category' => 'personalize',
    ),
    'object' => 
    array (
      'id' => 16,
      'parent' => 0,
      'category' => 'personalize',
      'rank' => 0,
    ),
  ),
  'b65ea24db98ebfeaffae6b3580149f14' => 
  array (
    'criteria' => 
    array (
      'name' => 'Personalize',
    ),
    'object' => 
    array (
      'id' => 65,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Personalize',
      'description' => 'Snippet to show different chunks to logged-in- and not-logged-in users.',
      'editor_type' => 0,
      'category' => 16,
      'cache_type' => 0,
      'snippet' => '/**
 * Personalize snippet for MODx Revolution
 *
 * Personalize is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Personalize is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Personalize; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package personalize
 */
/**
 * MODx Personalize Snippet
 *
 *
 * @package personalize
 *
 * Properties
 *
 *    @property yesChunk string (REQUIRED) Name of chunk or
 *        inline HTML to show for LOGGED-in users
 *
 *    @property noChunk string (optional) Name of chunk or
 *        inline HTML to show for NOT logged-in users
 *
 *    @property ph string (optional) Placeholder for placing
 *        the username
 *        ATTENTION!: ph placeholder will *not* be set in noChunk!
 *
 *    @property fullName boolean (optional) Use full name
 *        instead of username in placeholder
 *
 *    @property ifIds string (optional) comma separated 
 *        list of users ids; yesChunk will only be shown
 *        to users in the list
 *
 *    @property allowedGroups string (optional) comma separated 
 *        list of allowed groups; yesChunk will only only shows 
 *        users are in one of these groups
 *
 *    @property context (optional) context the user must be
 *        logged in to to see the yesChunk; defaults to
 *        current context.
 *
 *
 */
/* Personalize Snippet for Revolution */

/* ::::::::::::::::::::::::::::::::::::::::
 * Snippet Name: Personalize
 * Short Desc: returns a chunk if the user is logged in, otherwise calls another
 *::::::::::::::::::::::::::::::::::::::::
 * Description:
 * Checks to see if users are logged in and displays yesChunk if the user
 * is logged or noChunk if user is not logged. Insert only the chunk name as
 * param, without any tags. Can use a placeholder to output the username.
 *
 * TESTED: can be used more than once per page.
 * TESTED: chunks can contain snippets.
 *
 * Example Usage:
 *
 *    [[!Personalize?
 *        &yesChunk=`HelloUser`
 *         &noChunk=`Register`
 *         &ph=`name`
 *     ]]
 *
 * Create Chunks named HelloUser and Register, the first will be
 * shown to a user logged on in the current context,
 * the second to other users.
 *
 * ADDED in 3.3.1 by Vasia123:
 *    
 *    1. &noChunk=`@CODE:<b>Please login!</b>` - inline snippets
 *    2. &ifIds=`1,3` - additional check for users ids. yesChunk will
 *         only be shown to logged-in users in the list.
 *    
 * ADDED in 3.6.0 by Vasia123:
 *    
 *    1. &allowedGroups=`Editor,Administrator` - check if user is
 *       in any allowed group
 *    
 *    
 * Placeholder [[+name]] will show the user\'s name in the yesChunk or
 * elsewhere on the page.
 *
 *
 *:::::::::::::::::::::::::::::::::::::::: */
/* @var $modx modX */
/* @var $profile modUserProfile */

/* Prepare params and variables */
$output = \'\';
$sp =& $scriptProperties;

$yesChunk = $modx->getOption(\'yesChunk\',$sp, null);
$noChunk = $modx->getOption(\'noChunk\',$scriptProperties, null);
$fullName = $modx->getOption(\'fullName\', $sp, null);
$firstName = $modx->getOption(\'firstName\', $sp, null);
$ph = $modx->getOption(\'ph\',$sp, null);
$ifIds = $modx->getOption(\'ifIds\',$sp, null);
$allowedGroups = $modx->getOption(\'allowedGroups\',$sp, null);
$context = $modx->getOption(\'context\', $sp, $modx->context->get(\'key\') );

if( !empty ($fullName) ) {
    $profile = $modx->user->getOne(\'Profile\');
}

/* check if user logged in */
$is_logged_in = $modx->user->hasSessionContext($context);

/* Set $ifIds to true if user id is allowed or ifIds is not set */
$ifIds = array_filter(array_map(\'trim\',explode(\',\',$ifIds)));
$ifIds = (!empty($ifIds)) ? in_array($modx->user->get(\'id\'), $ifIds) : true;

// Set $groups to true is use in in allowed group or $groups is not set
$groups = array_filter(array_map(\'trim\',explode(\',\',$allowedGroups)));
if (!empty($groups)) {
    $inGroups = false;
    foreach($groups as $group) {
        if ($modx->user->isMember($group)) $inGroups = true;
    }
} else {
    $inGroups = true;
}

/* Do the work */
if ($is_logged_in && $ifIds && $inGroups) {
    if (preg_match(\'/^@CODE:/\',$yesChunk)) {
        $output =  substr($yesChunk, 6);
    } else {
        $output =  $modx->getChunk($yesChunk, $scriptProperties);
    }
    if (! empty($ph)) {
        if ($fullName && $profile) {
            $name = trim($profile->get(\'fullname\'));
        } elseif ($firstName && $profile) {
            $full = trim($profile->get(\'fullname\'));
            $pos = strpos($full, \' \');
            $name = ($pos === false) ? $full : substr($full, 0, $pos);
        } else {
            $name = $modx->user->get(\'username\');
        }
        $modx->setPlaceholder($ph, $name);
    }
} elseif( !empty ($noChunk) ) {
    if (preg_match(\'/^@CODE:/\',$noChunk)) {
        $output =  substr($noChunk, 6);
    } else {
        $output =  $modx->getChunk($noChunk);
    }
}
return empty($output)? \'\': $output;',
      'locked' => 0,
      'properties' => 'a:6:{s:8:"yesChunk";a:7:{s:4:"name";s:8:"yesChunk";s:4:"desc";s:25:"personalize_yeschunk_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:22:"personalize:properties";s:4:"area";s:0:"";}s:7:"noChunk";a:7:{s:4:"name";s:7:"noChunk";s:4:"desc";s:24:"personalize_nochunk_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:22:"personalize:properties";s:4:"area";s:0:"";}s:2:"ph";a:7:{s:4:"name";s:2:"ph";s:4:"desc";s:19:"personalize_ph_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:22:"personalize:properties";s:4:"area";s:0:"";}s:8:"fullName";a:7:{s:4:"name";s:8:"fullName";s:4:"desc";s:25:"personalize_fullname_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:22:"personalize:properties";s:4:"area";s:0:"";}s:9:"firstName";a:7:{s:4:"name";s:9:"firstName";s:4:"desc";s:26:"personalize_firstname_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:22:"personalize:properties";s:4:"area";s:0:"";}s:5:"ifIds";a:7:{s:4:"name";s:5:"ifIds";s:4:"desc";s:22:"personalize_ifIds_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:22:"personalize:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Personalize snippet for MODx Revolution
 *
 * Personalize is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Personalize is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Personalize; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package personalize
 */
/**
 * MODx Personalize Snippet
 *
 *
 * @package personalize
 *
 * Properties
 *
 *    @property yesChunk string (REQUIRED) Name of chunk or
 *        inline HTML to show for LOGGED-in users
 *
 *    @property noChunk string (optional) Name of chunk or
 *        inline HTML to show for NOT logged-in users
 *
 *    @property ph string (optional) Placeholder for placing
 *        the username
 *        ATTENTION!: ph placeholder will *not* be set in noChunk!
 *
 *    @property fullName boolean (optional) Use full name
 *        instead of username in placeholder
 *
 *    @property ifIds string (optional) comma separated 
 *        list of users ids; yesChunk will only be shown
 *        to users in the list
 *
 *    @property allowedGroups string (optional) comma separated 
 *        list of allowed groups; yesChunk will only only shows 
 *        users are in one of these groups
 *
 *    @property context (optional) context the user must be
 *        logged in to to see the yesChunk; defaults to
 *        current context.
 *
 *
 */
/* Personalize Snippet for Revolution */

/* ::::::::::::::::::::::::::::::::::::::::
 * Snippet Name: Personalize
 * Short Desc: returns a chunk if the user is logged in, otherwise calls another
 *::::::::::::::::::::::::::::::::::::::::
 * Description:
 * Checks to see if users are logged in and displays yesChunk if the user
 * is logged or noChunk if user is not logged. Insert only the chunk name as
 * param, without any tags. Can use a placeholder to output the username.
 *
 * TESTED: can be used more than once per page.
 * TESTED: chunks can contain snippets.
 *
 * Example Usage:
 *
 *    [[!Personalize?
 *        &yesChunk=`HelloUser`
 *         &noChunk=`Register`
 *         &ph=`name`
 *     ]]
 *
 * Create Chunks named HelloUser and Register, the first will be
 * shown to a user logged on in the current context,
 * the second to other users.
 *
 * ADDED in 3.3.1 by Vasia123:
 *    
 *    1. &noChunk=`@CODE:<b>Please login!</b>` - inline snippets
 *    2. &ifIds=`1,3` - additional check for users ids. yesChunk will
 *         only be shown to logged-in users in the list.
 *    
 * ADDED in 3.6.0 by Vasia123:
 *    
 *    1. &allowedGroups=`Editor,Administrator` - check if user is
 *       in any allowed group
 *    
 *    
 * Placeholder [[+name]] will show the user\'s name in the yesChunk or
 * elsewhere on the page.
 *
 *
 *:::::::::::::::::::::::::::::::::::::::: */
/* @var $modx modX */
/* @var $profile modUserProfile */

/* Prepare params and variables */
$output = \'\';
$sp =& $scriptProperties;

$yesChunk = $modx->getOption(\'yesChunk\',$sp, null);
$noChunk = $modx->getOption(\'noChunk\',$scriptProperties, null);
$fullName = $modx->getOption(\'fullName\', $sp, null);
$firstName = $modx->getOption(\'firstName\', $sp, null);
$ph = $modx->getOption(\'ph\',$sp, null);
$ifIds = $modx->getOption(\'ifIds\',$sp, null);
$allowedGroups = $modx->getOption(\'allowedGroups\',$sp, null);
$context = $modx->getOption(\'context\', $sp, $modx->context->get(\'key\') );

if( !empty ($fullName) ) {
    $profile = $modx->user->getOne(\'Profile\');
}

/* check if user logged in */
$is_logged_in = $modx->user->hasSessionContext($context);

/* Set $ifIds to true if user id is allowed or ifIds is not set */
$ifIds = array_filter(array_map(\'trim\',explode(\',\',$ifIds)));
$ifIds = (!empty($ifIds)) ? in_array($modx->user->get(\'id\'), $ifIds) : true;

// Set $groups to true is use in in allowed group or $groups is not set
$groups = array_filter(array_map(\'trim\',explode(\',\',$allowedGroups)));
if (!empty($groups)) {
    $inGroups = false;
    foreach($groups as $group) {
        if ($modx->user->isMember($group)) $inGroups = true;
    }
} else {
    $inGroups = true;
}

/* Do the work */
if ($is_logged_in && $ifIds && $inGroups) {
    if (preg_match(\'/^@CODE:/\',$yesChunk)) {
        $output =  substr($yesChunk, 6);
    } else {
        $output =  $modx->getChunk($yesChunk, $scriptProperties);
    }
    if (! empty($ph)) {
        if ($fullName && $profile) {
            $name = trim($profile->get(\'fullname\'));
        } elseif ($firstName && $profile) {
            $full = trim($profile->get(\'fullname\'));
            $pos = strpos($full, \' \');
            $name = ($pos === false) ? $full : substr($full, 0, $pos);
        } else {
            $name = $modx->user->get(\'username\');
        }
        $modx->setPlaceholder($ph, $name);
    }
} elseif( !empty ($noChunk) ) {
    if (preg_match(\'/^@CODE:/\',$noChunk)) {
        $output =  substr($noChunk, 6);
    } else {
        $output =  $modx->getChunk($noChunk);
    }
}
return empty($output)? \'\': $output;',
    ),
  ),
);