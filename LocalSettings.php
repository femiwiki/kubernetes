<?php
# This file was automatically generated by the MediaWiki 1.27.0
# installer at first.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

$wgSitename = '페미위키';

# The URL base path to the directory containing the wiki;
# defaults for all runtime URL paths are based off of this.
# For more information on customizing the URLs
# (like /w/index.php/Page_title to /wiki/Page_title) please see:
# https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = '';
$wgArticlePath = "/w/$1";

# The protocol and server name to use in fully-qualified URLs
$wgServer = 'https://femiwiki.com';
$wgCanonicalServer = 'https://femiwiki.com';
$wgEnableCanonicalServerLink = true;

# The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

$wgStyleVersion = '20181013_0';
$wgResourceLoaderMaxage = [
	'versioned' => [
		# Squid/Varnish but also any other public proxy cache between the client and MediaWiki
		'server' => 90 * 24 * 60 * 60, # 90 days
		# On the client side (e.g. in the browser cache).
		'client' => 90 * 24 * 60 * 60, # 90 days
	],
	'unversioned' => [
		# 3 minutes
		'server' => 3 * 60,
		# 3 minutes
		'client' => 3 * 60,
	],
];

# Trust an X-Forwarded-For (XFF) header specifying a private IP in requests
# from a trusted forwarding proxy
$wgUsePrivateIPs = true;

# The URL path to the logo.  Make sure you change this from the default,
# or else you'll overwrite your logo when you upgrade!
#
# References:
#   https://www.mediawiki.org/wiki/Manual:$wgLogo
#   https://www.mediawiki.org/wiki/Manual:$wgLogoHD
$wgLogo = "$wgResourceBasePath/skins/Femiwiki/images/logo-1200-630.png";

# UPO means: this is also a user preference option
#
# Reference:
#   https://www.mediawiki.org/wiki/Help:User_preference_option
$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO
$wgAllowHTMLEmail = true;
$wgSMTP = [
	'host' => 'email-smtp.us-east-1.amazonaws.com',
	'IDHost' => 'femiwiki.com',
	'port' => 25,
	'auth' => true,
	'username' => 'AKIAJ472HG7XALTXZ5QA',
];

$wgEmergencyContact = 'admin@femiwiki.com';
$wgPasswordSender = 'admin@femiwiki.com';
$wgUserEmailUseReplyTo = true;

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

# Database settings
$wgDBtype = 'mysql';
$wgDBname = 'femiwiki';

# MySQL specific settings
$wgDBprefix = '';

# MySQL table options to use during installation or update
$wgDBTableOptions = 'ENGINE=InnoDB, DEFAULT CHARSET=binary';

# Shared memory settings
$wgMainCacheType = CACHE_MEMCACHED;
$wgSessionCacheType = CACHE_MEMCACHED;
$wgParserCacheType = CACHE_MEMCACHED;
$wgMessageCacheType = CACHE_MEMCACHED;

# To enable image uploads, make sure the 'images' directory
# is writable, then set this to true:
$wgEnableUploads = true;
$wgFileExtensions[] = 'svg';
$wgAllowTitlesInSVG = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = '/usr/bin/convert';
$wgSVGConverter = 'rsvg';

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

# If you use ImageMagick (or any other shell command) on a
# Linux server, this will need to be set to the name of an
# available UTF-8 locale
$wgShellLocale = 'C.UTF-8';

# Set $wgCacheDirectory to a writable directory on the web server
# to make your wiki go slightly faster. The directory should not
# be publically accessible from the web.
$wgCacheDirectory = '/tmp/cache';
$wgUseFileCache = true;

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = 'ko';
$wgLocaltimezone = 'Asia/Seoul';
date_default_timezone_set( $wgLocaltimezone );
$wgDefaultUserOptions['timecorrection'] = 9;

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = '1';

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = '/usr/bin/diff3';

# Default skin: you can change the default skin. Use the internal symbolic
# names, ie 'vector', 'monobook':
$wgDefaultSkin = 'femiwiki';

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'Vector' );
wfLoadSkin( 'Femiwiki' );
$wgFemiwikiFacebookAppId = '1937597133150935';

#
# Namespace settings
#
# BBS
define( 'NS_BBS', 3906 );
define( 'NS_BBS_TALK', 3907 );
$wgExtraNamespaces[NS_BBS] = '게시판';
$wgExtraNamespaces[NS_BBS_TALK] = '게시판토론';

# Permission
$wgGroupPermissions['*']['createaccount'] = true;
$wgGroupPermissions['sysop']['usermerge'] = true;
$wgGroupPermissions['sysop']['renameuser'] = true;
$wgGroupPermissions['sysop']['interwiki'] = true;
$wgGroupPermissions['oversight']['deletelogentry'] = true;
$wgGroupPermissions['oversight']['deleterevision'] = true;
$wgGroupPermissions['bot']['patrolmarks'] = true;

# Prevent anonymous users from edit pages
$wgGroupPermissions['*']['edit'] = false;

# Set when users become autoconfirmed users
$wgAutoConfirmCount = 0;
$wgAutoConfirmAge = 3600;

$wgAutopromote = [
	'autoconfirmed' => [ '&',
		[ APCOND_EDITCOUNT, &$wgAutoConfirmCount ],
		[ APCOND_AGE, &$wgAutoConfirmAge ],
	],
];

# Allow autoconfirmed users to edit pages
$wgGroupPermissions['user']['edit'] = false;
$wgGroupPermissions['autoconfirmed']['edit'] = true;

# Add restricted-sysop group
$wgGroupPermissions['restricted-sysop'] = $wgGroupPermissions['sysop'];
$wgGroupPermissions['restricted-sysop']['apihighlimits'] = false;
$wgGroupPermissions['restricted-sysop']['editinterface'] = false;
$wgGroupPermissions['restricted-sysop']['editusercss'] = false;
$wgGroupPermissions['restricted-sysop']['edituserjs'] = false;
$wgGroupPermissions['restricted-sysop']['managechangetags'] = false;
$wgGroupPermissions['restricted-sysop']['move-rootuserpages'] = false;
$wgGroupPermissions['restricted-sysop']['unblockself'] = false;

# FemiwikiTeam is just a list of all Femiwiki team member
$wgGroupPermissions['femiwiki-team']['editprotected'] = true;

# Remain commemorative Seeder group
$wgGroupPermissions['seeder']['read'] = true;

# Show numbers on headings
$wgDefaultUserOptions['numberheadings'] = 1;

# Disable Enhanced RecentChange Filters
$wgDefaultUserOptions['rcenhancedfilters-disable'] = 1;

# Enable ULS compact links beta feature to opt-out
$wgDefaultUserOptions['uls-compact-links'] = 1;

# Hide some Preferences
$wgHiddenPrefs[] = 'gender';
$wgHiddenPrefs[] = 'realname';
# See https://github.com/femiwiki/mediawiki/issues/211
$wgHiddenPrefs[] = 'numberheadings';

# Allow display titles not only to titles that normalize to the same canonical
# DB key as the real page title.
$wgRestrictDisplayTitle = false;

# Open external links in new tab
$wgExternalLinkTarget = '_blank';

# Copyright
$wgRightsPage = '페미위키:저작권';
$wgRightsUrl = 'https://creativecommons.org/licenses/by-sa/4.0/deed.ko';
$wgRightsText = '크리에이티브 커먼즈 저작자표시-동일조건변경허락 4.0 국제 라이선스';
$wgRightsIcon = "$wgResourceBasePath/resources/assets/licenses/cc-by-sa.png";

# User CSS and JS
$wgAllowUserCss = true;
$wgAllowUserJs = true;

# Allow external image link
$wgAllowExternalImages = true;
$wgAllowImageTag = true;

# all pages (that are not redirects) are considered as valid articles
$wgArticleCountMethod = 'any';

# Prevent Search for some namespaces
$wgNamespaceRobotPolicies = [
	NS_TALK => 'noindex,nofollow',
	NS_USER => 'noindex,nofollow',
	NS_USER_TALK => 'noindex,nofollow',
	NS_PROJECT_TALK => 'noindex,nofollow',
];
if ( defined( 'NS_TOPIC' ) ) {
	$wgNamespaceRobotPolicies[NS_TOPIC] = 'noindex,nofollow';
}

# Provide Naspace Aliases
$wgNamespaceAliases = [
	'도' => NS_HELP,
	'페' => NS_PROJECT
];

# Parsoid server Setting
$wgVirtualRestConfig['modules']['parsoid'] = [
	'url' => 'http://parsoid:8000',
	'domain' => 'femiwiki.com'
];

# Restbase server Setting
$wgVirtualRestConfig['modules']['restbase'] = [
	'url' => 'http://restbase:7231',
	'domain' => 'femiwiki.com'
];
$wgVisualEditorRestbaseURL = 'https://femiwiki.com/femiwiki.com/v1/page/html/';
$wgVisualEditorFullRestbaseURL = 'https://femiwiki.com/femiwiki.com/';

#
# Extensions
#
# ParserFunction
wfLoadExtension( 'ParserFunctions' );
$wgPFEnableStringFunctions = true;

# AWS
wfLoadExtension( 'AWS' );
$wgAWSRegion = 'ap-northeast-1';
$wgAWSBucketPrefix = 'femiwiki-uploaded-files';
$wgAWSRepoHashLevels = 2;
$wgAWSRepoDeletedHashLevels = 2;

# VisualEditor
wfLoadExtension( 'VisualEditor' );
$wgVisualEditorAvailableNamespaces = [
	NS_SPECIAL => true,
	NS_MAIN => true,
	NS_TALK => true,
	NS_USER => true,
	NS_USER_TALK => true,
	NS_PROJECT => true,
	NS_PROJECT_TALK => true,
	NS_FILE => true,
	NS_FILE_TALK => true,
	NS_MEDIAWIKI => true,
	NS_MEDIAWIKI_TALK => true,
	NS_TEMPLATE => true,
	NS_TEMPLATE_TALK => true,
	NS_HELP => true,
	NS_HELP_TALK => true,
	NS_CATEGORY => true,
	NS_CATEGORY_TALK => true,
	'_merge_strategy' => 'array_plus',
];

# Enable Enhanced recent changes to opt-out
$wgDefaultUserOptions['rcenhancedfilters-disable'] = 0;

# Enable Visual Editor to opt-out
$wgDefaultUserOptions['visualeditor-enable'] = 1;
$wgHiddenPrefs[] = 'visualeditor-enable';
$wgDefaultUserOptions['visualeditor-enable-experimental'] = 1;
$wgVisualEditorSupportedSkins[] = 'femiwiki';

# Enable 2017 Wikitext Editor to opt-out
$wgVisualEditorEnableWikitext = true;
$wgDefaultUserOptions['visualeditor-newwikitext'] = 1;

# Enable Visual diffs on history pages
$wgVisualEditorEnableDiffPage = true;

# Enable Single Edit Tab to opt-out
$wgVisualEditorUseSingleEditTab = true;
$wgDefaultUserOptions['visualeditor-tabs'] = 'multi-tab';

# TemplateData
wfLoadExtension( 'TemplateData' );

# RevisionSlider
wfLoadExtension( 'RevisionSlider' );

# Echo
wfLoadExtension( 'Echo' );
$wgEchoMaxMentionsInEditSummary = 5;

# TwoColConflict
wfLoadExtension( 'TwoColConflict' );
# Enable twocolconflict to opt-out
$wgDefaultUserOptions['twocolconflict'] = true;

# Interwiki
wfLoadExtension( 'Interwiki' );

# Thanks
wfLoadExtension( 'Thanks' );

# Scribunto
wfLoadExtension( 'Scribunto' );
$wgScribuntoDefaultEngine = 'luastandalone';

# Flow
wfLoadExtension( 'Flow' );
$wgFlowEditorList = [ 'visualeditor', 'none' ];
$wgNamespaceContentModels[NS_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_USER_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_PROJECT_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_FILE_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_MEDIAWIKI_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_TEMPLATE_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_HELP_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_CATEGORY_TALK] = 'flow-board';
$wgNamespaceContentModels[275] = 'flow-board'; # Widget talk
$wgNamespaceContentModels[829] = 'flow-board'; # Module talk
$wgNamespaceContentModels[2301] = 'flow-board'; # Gadget talk
$wgNamespaceContentModels[2303] = 'flow-board'; # Gadget definition talk
$wgNamespaceContentModels[NS_BBS] = 'flow-board';
$wgNamespaceContentModels[NS_BBS_TALK] = 'flow-board';
$wgFlowDefaultLimit = 2;

# TemplateStyles
wfLoadExtension( 'TemplateStyles' );

# CategoryTree
wfLoadExtension( 'CategoryTree' );

# Disambiguator
wfLoadExtension( 'Disambiguator' );

# CreateUserPage
wfLoadExtension( 'CreateUserPage' );

# DisableAccount
wfLoadExtension( 'DisableAccount' );
$wgGroupPermissions['sysop']['disableaccount'] = true;

# Cite
wfLoadExtension( 'Cite' );

# CiteThisPage
wfLoadExtension( 'CiteThisPage' );

# CodeEditor
wfLoadExtension( 'CodeEditor' );

# WikiEditor
wfLoadExtension( 'WikiEditor' );
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
$wgDefaultUserOptions['wikieditor-preview'] = 1;
$wgDefaultUserOptions['wikieditor-publish'] = 1;
$wgHiddenPrefs[] = 'usebetatoolbar';

# TemplateWizard
wfLoadExtension( 'TemplateWizard' );
$wgDefaultUserOptions['templatewizard-betafeature'] = 1;

# AbuseFilter
wfLoadExtension( 'AbuseFilter' );
$wgGroupPermissions['sysop']['abusefilter-modify'] = true;
$wgGroupPermissions['*']['abusefilter-log-detail'] = true;
$wgGroupPermissions['*']['abusefilter-view'] = true;
$wgGroupPermissions['*']['abusefilter-log'] = true;
$wgGroupPermissions['sysop']['abusefilter-private'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['sysop']['abusefilter-revert'] = true;

# ConfirmEdit
wfLoadExtensions( [ 'ConfirmEdit', 'ConfirmEdit/QuestyCaptcha' ] );
$wgCaptchaQuestions = [
	'나는 페미니스트입니다.' => [
		# 마침표 있음
		'나는 페미니스트입니다.',
		'나는페미니스트입니다.',
		'나는페미니스트 입니다.',
		# 마침표 없음
		'나는 페미니스트입니다',
		'나는페미니스트입니다',
		'나는페미니스트 입니다',
	]
];
$wgCaptchaTriggers['edit'] = false;
$wgCaptchaTriggers['create'] = false;
$wgCaptchaTriggers['addurl'] = false;
$wgCaptchaTriggers['createaccount'] = true;
$wgCaptchaTriggers['badlogin'] = false;

# Gadgets
wfLoadExtension( 'Gadgets' );
$wgGadgetsRepoClass = 'GadgetDefinitionNamespaceRepo';
$wgGroupPermissions['interface-admin']['gadgets-edit'] = true;
$wgGroupPermissions['interface-admin']['gadgets-definition-edit'] = true;

# Widgets
require_once "$IP/extensions/Widgets/Widgets.php";
$wgNamespaceContentModels[274] = CONTENT_MODEL_TEXT;

# Graph
wfLoadExtension( 'Graph' );

# CheckUser
wfLoadExtension( 'CheckUser' );

# UserMerge
wfLoadExtension( 'UserMerge' );

# Renameuser
wfLoadExtension( 'Renameuser' );

# Poem
wfLoadExtension( 'Poem' );

# SyntaxHighlight
wfLoadExtension( 'SyntaxHighlight_GeSHi' );

# CharInsert
wfLoadExtension( 'CharInsert' );

# CodeMirror
wfLoadExtension( 'CodeMirror' );

# EmbedVideo
wfLoadExtension( 'EmbedVideo' );

# InputBox
wfLoadExtension( 'InputBox' );

# Description2
wfLoadExtension( 'Description2' );

# OpenGraphMeta
wfLoadExtension( 'OpenGraphMeta' );

# PageImages
wfLoadExtension( 'PageImages' );

# LocalisationUpdate
wfLoadExtension( 'LocalisationUpdate' );

# FacetedCategory
wfLoadExtension( 'FacetedCategory' );

# UnifiedExtensionForFemiwiki --it requires the CategoryTree extension
wfLoadExtension( 'UnifiedExtensionForFemiwiki' );
$wgSpecialPages['Uncategorizedcategories'] = 'SpecialUncategorizedCategoryTree';
$wgSpecialPages['Whatlinkshere'] = 'SpecialOrderedWhatlinkshere';
$wgGoogleAnalyticsTrackingID = 'UA-82072330-1';

# IntersectionSearch
wfLoadExtension( 'CategoryIntersectionSearch' );

# SimpleMathJax
wfLoadExtension( 'SimpleMathJax' );

# HTMLTags
require_once "$IP/extensions/HTMLTags/HTMLTags.php";
$wgHTMLTagsAttributes['a'] = [ 'href', 'class', 'itemprop' ];
$wgHTMLTagsAttributes['link'] = [ 'href', 'itemprop' ];
$wgHTMLTagsAttributes['meta'] = [ 'content', 'itemprop' ];
$wgHTMLTagsAttributes['iframe'] = [ 'src', 'class', 'style' ];

# Josa
wfLoadExtension( 'Josa' );

# Sanction
wfLoadExtension( 'Sanctions' );

# BetaFeatures
wfLoadExtension( 'BetaFeatures' );

# UniversalLanguageSelector
wfLoadExtension( 'UniversalLanguageSelector' );
$wgULSPosition = 'interlanguage';
$wgULSIMEEnabled = false;
$wgULSCompactLinksEnableAnon = true;

# Translate
include_once "$IP/extensions/Translate/Translate.php";
$wgGroupPermissions['autoconfirmed']['translate'] = true;
$wgGroupPermissions['translationadmin']['pagetranslation'] = true;
$wgGroupPermissions['translationadmin']['translate-manage'] = true;
$wgGroupPermissions['translationadmin']['translate-messagereview'] = true;
$wgTranslatePageTranslationULS = true;
$wgPageTranslationLanguageList = 'sidebar-always';

$wgTranslatePermissionUrl = 'Project:번역';
$wgTranslateSecondaryPermissionUrl = 'Project:번역';

#
# Load secret.php
#
require_once '/a/secret.php';

#
# Debug Mode
#
if ( defined( 'DEBUG_MODE' ) ) {
	# 도메인 변경
	$wgServer = 'http://' . DEBUG_MODE;
	$wgCanonicalServer = 'http://' . DEBUG_MODE;
	$wgVirtualRestConfig['modules']['restbase']['url'] = 'http://restbase:7231';
	$wgVisualEditorRestbaseURL = 'http://' . DEBUG_MODE . '/femiwiki.com/v1/page/html/';
	$wgVisualEditorFullRestbaseURL = 'http://' . DEBUG_MODE . '/femiwiki.com/';

	# 디버그 툴 활성화
	$wgShowExceptionDetails = true;
	$wgDebugToolbar = true;
	$wgShowDBErrorBacktrace = true;

	# File Cache가 비활성화되어있어야 디버그 툴을 쓸 수 있음
	$wgUseFileCache = false;

	# AWS 플러그인 비활성화
	$wgAWSBucketName = null;
	$wgAWSBucketPrefix = null;
}
