<?php
/**
 * Quip
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of Quip, a simpel commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * Default snippet properties for Quip
 *
 * @package quip
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'thread',
        'desc' => 'quip.prop_thread_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'parent',
        'desc' => 'quip.prop_parent_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '0',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'threaded',
        'desc' => 'quip.prop_threaded_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'maxDepth',
        'desc' => 'quip.prop_maxdepth_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 5,
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'replyResourceId',
        'desc' => 'quip.prop_replyresourceid_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'threadedPostMargin',
        'desc' => 'quip.prop_threadedpostmargin_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 15,
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'closed',
        'desc' => 'quip.prop_closed_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'closeAfter',
        'desc' => 'quip.prop_closeafter_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 14,
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'dateFormat',
        'desc' => 'quip.prop_dateformat_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '%b %d, %Y at %I:%M %p',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'useMargins',
        'desc' => 'quip.prop_usemargins_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'useCss',
        'desc' => 'quip.prop_usecss_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'rowCss',
        'desc' => 'quip.prop_rowcss_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quip-comment',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'altRowCss',
        'desc' => 'quip.prop_altrowcss_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quip-comment-alt',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'olCss',
        'desc' => 'quip.prop_olcss_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quip-comment-parent',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'unapprovedCss',
        'desc' => 'quip.prop_unapprovedcss_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quip-unapproved',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'nameField',
        'desc' => 'quip.prop_namefield_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'username',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'showAnonymousName',
        'desc' => 'quip.prop_showanonymousname_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'anonymousName',
        'desc' => 'quip.prop_anonymousname_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'allowRemove',
        'desc' => 'quip.prop_allowremove_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'removeThreshold',
        'desc' => 'quip.prop_removethreshold_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 3,
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'allowReportAsSpam',
        'desc' => 'quip.prop_allowreportasspam_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'useGravatar',
        'desc' => 'quip.prop_usegravatar_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'gravatarIcon',
        'desc' => 'quip.prop_gravataricon_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'identicon',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'gravatarSize',
        'desc' => 'quip.prop_gravatarsize_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 50,
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'sortBy',
        'desc' => 'quip.prop_sortby_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'rank',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'sortByAlias',
        'desc' => 'quip.prop_sortbyalias_desc',
        'type' => 'list',
        'options' => array(
            array('text' => 'quip.comment','value' => 'quipComment'),
            array('text' => 'quip.author','value' => 'Author'),
        ),
        'value' => 'quipComment',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'sortDir',
        'desc' => 'quip.prop_sortdir_desc',
        'type' => 'list',
        'options' => array(
            array('text' => 'quip.ascending','value' => 'ASC'),
            array('text' => 'quip.descending','value' => 'DESC'),
        ),
        'value' => 'ASC',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'toPlaceholder',
        'desc' => 'quip.prop_toplaceholder_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'placeholderPrefix',
        'desc' => 'quip.prop_placeholderprefix_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quip',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'tplComment',
        'desc' => 'quip.prop_tplcomment_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quipComment',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'tplCommentOptions',
        'desc' => 'quip.prop_tplcommentoptions_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quipCommentOptions',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'tplComments',
        'desc' => 'quip.prop_tplcomments_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quipComments',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'tplReport',
        'desc' => 'quip.prop_tplreport_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quipReport',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'reportAction',
        'desc' => 'quip.prop_reportaction_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quip_report',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'removeAction',
        'desc' => 'quip.prop_removeaction_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quip_remove',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'idPrefix',
        'desc' => 'quip.prop_idprefix_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'qcom',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'debug',
        'desc' => 'quip.prop_debug_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'debugUser',
        'desc' => 'quip.prop_debuguser_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'debugUserId',
        'desc' => 'quip.prop_debuguserid_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'limit',
        'desc' => 'quip.prop_limit_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 0,
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'start',
        'desc' => 'quip.prop_start_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 0,
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'tplPagination',
        'desc' => 'quip.prop_tplpagination_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quipPagination',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'tplPaginationItem',
        'desc' => 'quip.prop_tplpaginationitem_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quipPaginationItem',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'tplPaginationCurrentItem',
        'desc' => 'quip.prop_tplpaginationcurrentitem_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quipPaginationCurrentItem',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'paginationCls',
        'desc' => 'quip.prop_paginationcls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quip-pagination',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'pageCls',
        'desc' => 'quip.prop_pagecls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quip-page-number',
        'lexicon' => 'quip:properties',
    ),
    array(
        'name' => 'currentPageCls',
        'desc' => 'quip.prop_currentpagecls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'quip-page-current',
        'lexicon' => 'quip:properties',
    ),
);
return $properties;