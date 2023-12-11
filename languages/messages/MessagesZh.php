<?php
/** Chinese (中文)
 *
 * @file
 * @ingroup Languages
 *
 * @author Kuailong
 * @author PhiLiP
 * @author Shizhao
 * @author Winston Sung
 * @author Wong128hk
 */

# Message file for converter code "zh"

$fallback = 'zh-hans, zh-hant, zh-cn, zh-tw, zh-hk';

# Set namespace names in en by default to prevent fallback to translations of language variants.
$namespaceNames = [
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Special',
	NS_TALK             => 'Talk',
	NS_USER             => 'User',
	NS_USER_TALK        => 'User_talk',
	NS_PROJECT_TALK     => '$1_talk',
	NS_FILE             => 'File',
	NS_FILE_TALK        => 'File_talk',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_talk',
	NS_TEMPLATE         => 'Template',
	NS_TEMPLATE_TALK    => 'Template_talk',
	NS_HELP             => 'Help',
	NS_HELP_TALK        => 'Help_talk',
	NS_CATEGORY         => 'Category',
	NS_CATEGORY_TALK    => 'Category_talk',
];

# T296188: Store namespace aliases of language variants
#  in their message files respectively.
#
# $namespaceAliases = [];

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Allmessages'               => [ '所有消息', '所有訊息', '所有讯息' ],
	'Allpages'                  => [ '所有页面', '所有頁面' ],
	'Ancientpages'              => [ '最早页面', '最早頁面' ],
	'Badtitle'                  => [ '错误标题', '无效标题', '錯誤標題' ],
	'Blankpage'                 => [ '空白页面', '空白頁面' ],
	'BlockList'                 => [ '封禁列表' ],
	'Booksources'               => [ '网络书源', '網絡書源', '網路書源' ],
	'BrokenRedirects'           => [ '受损重定向' ],
	'Categories'                => [ '页面分类', '頁面分類' ],
	'ChangePassword'            => [ '修改密码', '修改密碼' ],
	'Confirmemail'              => [ '确认电子邮件', '確認電子郵件' ],
	'Contributions'             => [ '用户贡献', '用戶貢獻', '使用者貢獻', '使用者贡献' ],
	'CreateAccount'             => [ '创建账户', '創建賬戶', '建立帳戶', '建立帳號', '建立帐号' ],
	'Deadendpages'              => [ '断链页面', '斷鏈頁面', '斷連頁面' ],
	'DeletedContributions'      => [ '删除的贡献' ],
	'Diff'                      => [ '差异', '差異' ],
	'DoubleRedirects'           => [ '双重重定向', '雙重重新導向' ],
	'Emailuser'                 => [ '电邮联系', '電郵聯絡' ],
	'Export'                    => [ '导出页面', '導出頁面', '匯出頁面', '汇出页面' ],
	'Fewestrevisions'           => [ '最少修订页面', '最少修訂頁面' ],
	'Filepath'                  => [ '文件路径', '文件路徑', '檔案路徑', '档案路径' ],
	'Import'                    => [ '导入页面', '導入頁面', '匯入頁面', '汇入页面' ],
	'Invalidateemail'           => [ '不可识别的电邮地址', '不可識別的電郵位址' ],
	'LinkSearch'                => [ '链接搜索', '鏈接搜索', '連結搜尋', '连结搜寻' ],
	'Listadmins'                => [ '管理员列表', '管理員列表' ],
	'Listbots'                  => [ '机器人列表', '機器人清單', '機械人清單' ],
	'Listfiles'                 => [ '文件列表', '檔案列表', '档案列表' ],
	'Listgrouprights'           => [ '群组权限', '群組權限' ],
	'Listredirects'             => [ '重定向页列表', '重定向列表', '重新導向清單' ],
	'Listusers'                 => [ '用户列表', '用戶列表', '使用者清單' ],
	'Log'                       => [ '日志', '日誌' ],
	'Lonelypages'               => [ '孤立页面', '孤立頁面' ],
	'Longpages'                 => [ '长页面', '長頁面' ],
	'MergeHistory'              => [ '合并历史', '合併歷史' ],
	'MIMEsearch'                => [ 'MIME搜索', 'MIME搜尋', 'MIME搜寻' ],
	'Mostcategories'            => [ '最多分类页面', '最多分類頁面' ],
	'Mostimages'                => [ '最多链接文件', '最多鏈接文件', '最多連結檔案' ],
	'Mostlinked'                => [ '最多链接页面', '最多連結頁面' ],
	'Mostlinkedcategories'      => [ '最多链接分类', '最多連結分類' ],
	'Mostlinkedtemplates'       => [ '最多链接模板', '最多連結模板' ],
	'Mostrevisions'             => [ '最多修订页面', '最多修訂頁面' ],
	'Movepage'                  => [ '移动页面', '移動頁面' ],
	'Mycontributions'           => [ '我的贡献', '我的貢獻' ],
	'MyLanguage'                => [ '我的语言', '我的語言' ],
	'Mypage'                    => [ '我的用户页', '我的用戶頁', '我的使用者頁面' ],
	'Mytalk'                    => [ '我的讨论页', '我的討論頁' ],
	'Newimages'                 => [ '新建文件', '新建檔案' ],
	'Newpages'                  => [ '最新页面', '最新頁面' ],
	'PasswordReset'             => [ '重置密码', '重設密碼' ],
	'Preferences'               => [ '参数设置', '偏好設定', '參數設置' ],
	'Prefixindex'               => [ '前缀索引', '前綴索引', '字首索引' ],
	'Protectedpages'            => [ '已保护页面', '已保護頁面' ],
	'Protectedtitles'           => [ '已保护标题', '已保護標題' ],
	'Randompage'                => [ '随机页面', '隨機頁面' ],
	'Recentchanges'             => [ '最近更改', '近期變動' ],
	'Recentchangeslinked'       => [ '链出更改', '鏈出更改', '連出更改' ],
	'Redirect'                  => [ '重定向', '重新導向' ],
	'Renameuser'                => [ '重命名用户', '重新命名用户', '重新命名用戶', '重新命名使用者' ],
	'ResetTokens'               => [ '重置密钥', '重設金鑰' ],
	'Revisiondelete'            => [ '版本删除' ],
	'Search'                    => [ '搜索', '搜尋' ],
	'Shortpages'                => [ '短页面', '短頁面' ],
	'Specialpages'              => [ '特殊页面', '特殊頁面' ],
	'Statistics'                => [ '统计', '统计信息', '統計', '統計資訊' ],
	'Tags'                      => [ '标签', '標籤' ],
	'TrackingCategories'        => [ '追踪分类' ],
	'Uncategorizedcategories'   => [ '未归类分类', '未歸類分類' ],
	'Uncategorizedimages'       => [ '未归类文件', '未歸類文件', '未歸類檔案' ],
	'Uncategorizedpages'        => [ '未归类页面', '未歸類頁面' ],
	'Uncategorizedtemplates'    => [ '未归类模板', '未歸類模板' ],
	'Undelete'                  => [ '恢复被删页面', '恢復被刪頁面' ],
	'Unusedcategories'          => [ '未使用分类', '未使用分類' ],
	'Unusedimages'              => [ '未使用文件', '未使用檔案' ],
	'Unusedtemplates'           => [ '未使用模板' ],
	'Upload'                    => [ '上传文件', '上傳檔案', '上載檔案', '上载档案' ],
	'Userlogin'                 => [ '用户登录', '用戶登入', '使用者登入' ],
	'Userlogout'                => [ '用户退出', '用戶登出', '使用者登出' ],
	'Userrights'                => [ '用户权限', '用戶權限', '使用者權限' ],
	'Version'                   => [ '版本' ],
	'Wantedcategories'          => [ '需要的分类' ],
	'Wantedfiles'               => [ '需要的文件', '需要的檔案' ],
	'Wantedpages'               => [ '需要的页面' ],
	'Wantedtemplates'           => [ '需要的模板' ],
	'Watchlist'                 => [ '监视列表', '監視列表', '監視清单' ],
	'Whatlinkshere'             => [ '链入页面', '鏈入頁面', '連入頁面' ],
];

# Set magic words in en by default to prevent fallback to translations of language variants.
# Store magic word aliases of language variants in their message files respectively.

/** @phpcs-require-sorted-array */
$magicWords = [
	'!'                       => [ 1, '!' ],
	'anchorencode'            => [ 0, 'ANCHORENCODE' ],
	'articlepath'             => [ 0, 'ARTICLEPATH' ],
	'basepagename'            => [ 1, 'BASEPAGENAME' ],
	'basepagenamee'           => [ 1, 'BASEPAGENAMEE' ],
	'bidi'                    => [ 0, 'BIDI:' ],
	'canonicalurl'            => [ 0, 'CANONICALURL:' ],
	'canonicalurle'           => [ 0, 'CANONICALURLE:' ],
	'cascadingsources'        => [ 1, 'CASCADINGSOURCES' ],
	'contentlanguage'         => [ 1, 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'currentday'              => [ 1, 'CURRENTDAY' ],
	'currentday2'             => [ 1, 'CURRENTDAY2' ],
	'currentdayname'          => [ 1, 'CURRENTDAYNAME' ],
	'currentdow'              => [ 1, 'CURRENTDOW' ],
	'currenthour'             => [ 1, 'CURRENTHOUR' ],
	'currentmonth'            => [ 1, 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'           => [ 1, 'CURRENTMONTH1' ],
	'currentmonthabbrev'      => [ 1, 'CURRENTMONTHABBREV' ],
	'currentmonthname'        => [ 1, 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'     => [ 1, 'CURRENTMONTHNAMEGEN' ],
	'currenttime'             => [ 1, 'CURRENTTIME' ],
	'currenttimestamp'        => [ 1, 'CURRENTTIMESTAMP' ],
	'currentversion'          => [ 1, 'CURRENTVERSION' ],
	'currentweek'             => [ 1, 'CURRENTWEEK' ],
	'currentyear'             => [ 1, 'CURRENTYEAR' ],
	'defaultsort'             => [ 1, 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'defaultsort_noerror'     => [ 0, 'noerror' ],
	'defaultsort_noreplace'   => [ 0, 'noreplace' ],
	'directionmark'           => [ 1, 'DIRECTIONMARK', 'DIRMARK' ],
	'displaytitle'            => [ 1, 'DISPLAYTITLE' ],
	'displaytitle_noerror'    => [ 0, 'noerror' ],
	'displaytitle_noreplace'  => [ 0, 'noreplace' ],
	'expectunusedcategory'    => [ 1, '__EXPECTUNUSEDCATEGORY__', ],
	'filepath'                => [ 0, 'FILEPATH:' ],
	'forcetoc'                => [ 0, '__FORCETOC__' ],
	'formatdate'              => [ 0, 'formatdate', 'dateformat' ],
	'formatnum'               => [ 0, 'FORMATNUM' ],
	'fullpagename'            => [ 1, 'FULLPAGENAME' ],
	'fullpagenamee'           => [ 1, 'FULLPAGENAMEE' ],
	'fullurl'                 => [ 0, 'FULLURL:' ],
	'fullurle'                => [ 0, 'FULLURLE:' ],
	'gender'                  => [ 0, 'GENDER:' ],
	'grammar'                 => [ 0, 'GRAMMAR:' ],
	'hiddencat'               => [ 1, '__HIDDENCAT__' ],
	'img_alt'                 => [ 1, 'alt=$1' ],
	'img_baseline'            => [ 1, 'baseline' ],
	'img_border'              => [ 1, 'border' ],
	'img_bottom'              => [ 1, 'bottom' ],
	'img_center'              => [ 1, 'center', 'centre' ],
	'img_class'               => [ 1, 'class=$1' ],
	'img_framed'              => [ 1, 'frame', 'framed', 'enframed' ],
	'img_frameless'           => [ 1, 'frameless' ],
	'img_lang'                => [ 1, 'lang=$1' ],
	'img_left'                => [ 1, 'left' ],
	'img_link'                => [ 1, 'link=$1' ],
	'img_manualthumb'         => [ 1, 'thumbnail=$1', 'thumb=$1' ],
	'img_middle'              => [ 1, 'middle' ],
	'img_none'                => [ 1, 'none' ],
	'img_page'                => [ 1, 'page=$1', 'page $1' ],
	'img_right'               => [ 1, 'right' ],
	'img_sub'                 => [ 1, 'sub' ],
	'img_super'               => [ 1, 'super', 'sup' ],
	'img_text_bottom'         => [ 1, 'text-bottom' ],
	'img_text_top'            => [ 1, 'text-top' ],
	'img_thumbnail'           => [ 1, 'thumb', 'thumbnail' ],
	'img_top'                 => [ 1, 'top' ],
	'img_upright'             => [ 1, 'upright', 'upright=$1', 'upright $1' ],
	'img_width'               => [ 1, '$1px' ],
	'index'                   => [ 1, '__INDEX__' ],
	'int'                     => [ 0, 'INT:' ],
	'language'                => [ 0, '#LANGUAGE:' ],
	'lc'                      => [ 0, 'LC:' ],
	'lcfirst'                 => [ 0, 'LCFIRST:' ],
	'localday'                => [ 1, 'LOCALDAY' ],
	'localday2'               => [ 1, 'LOCALDAY2' ],
	'localdayname'            => [ 1, 'LOCALDAYNAME' ],
	'localdow'                => [ 1, 'LOCALDOW' ],
	'localhour'               => [ 1, 'LOCALHOUR' ],
	'localmonth'              => [ 1, 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'             => [ 1, 'LOCALMONTH1' ],
	'localmonthabbrev'        => [ 1, 'LOCALMONTHABBREV' ],
	'localmonthname'          => [ 1, 'LOCALMONTHNAME' ],
	'localmonthnamegen'       => [ 1, 'LOCALMONTHNAMEGEN' ],
	'localtime'               => [ 1, 'LOCALTIME' ],
	'localtimestamp'          => [ 1, 'LOCALTIMESTAMP' ],
	'localurl'                => [ 0, 'LOCALURL:' ],
	'localurle'               => [ 0, 'LOCALURLE:' ],
	'localweek'               => [ 1, 'LOCALWEEK' ],
	'localyear'               => [ 1, 'LOCALYEAR' ],
	'msg'                     => [ 0, 'MSG:' ],
	'msgnw'                   => [ 0, 'MSGNW:' ],
	'namespace'               => [ 1, 'NAMESPACE' ],
	'namespacee'              => [ 1, 'NAMESPACEE' ],
	'namespacenumber'         => [ 1, 'NAMESPACENUMBER' ],
	'newsectionlink'          => [ 1, '__NEWSECTIONLINK__' ],
	'nocommafysuffix'         => [ 0, 'NOSEP' ],
	'nocontentconvert'        => [ 0, '__NOCONTENTCONVERT__', '__NOCC__' ],
	'noeditsection'           => [ 0, '__NOEDITSECTION__' ],
	'nogallery'               => [ 0, '__NOGALLERY__' ],
	'noindex'                 => [ 1, '__NOINDEX__' ],
	'nonewsectionlink'        => [ 1, '__NONEWSECTIONLINK__' ],
	'notitleconvert'          => [ 0, '__NOTITLECONVERT__', '__NOTC__' ],
	'notoc'                   => [ 0, '__NOTOC__' ],
	'ns'                      => [ 0, 'NS:' ],
	'nse'                     => [ 0, 'NSE:' ],
	'numberingroup'           => [ 1, 'NUMBERINGROUP', 'NUMINGROUP' ],
	'numberofactiveusers'     => [ 1, 'NUMBEROFACTIVEUSERS' ],
	'numberofadmins'          => [ 1, 'NUMBEROFADMINS' ],
	'numberofarticles'        => [ 1, 'NUMBEROFARTICLES' ],
	'numberofedits'           => [ 1, 'NUMBEROFEDITS' ],
	'numberoffiles'           => [ 1, 'NUMBEROFFILES' ],
	'numberofpages'           => [ 1, 'NUMBEROFPAGES' ],
	'numberofusers'           => [ 1, 'NUMBEROFUSERS' ],
	'padleft'                 => [ 0, 'PADLEFT' ],
	'padright'                => [ 0, 'PADRIGHT' ],
	'pageid'                  => [ 0, 'PAGEID' ],
	'pagelanguage'            => [ 1, 'PAGELANGUAGE' ],
	'pagename'                => [ 1, 'PAGENAME' ],
	'pagenamee'               => [ 1, 'PAGENAMEE' ],
	'pagesincategory'         => [ 1, 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesincategory_all'     => [ 0, 'all' ],
	'pagesincategory_files'   => [ 0, 'files' ],
	'pagesincategory_pages'   => [ 0, 'pages' ],
	'pagesincategory_subcats' => [ 0, 'subcats' ],
	'pagesinnamespace'        => [ 1, 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'pagesize'                => [ 1, 'PAGESIZE' ],
	'plural'                  => [ 0, 'PLURAL:' ],
	'protectionexpiry'        => [ 1, 'PROTECTIONEXPIRY' ],
	'protectionlevel'         => [ 1, 'PROTECTIONLEVEL' ],
	'raw'                     => [ 0, 'RAW:' ],
	'rawsuffix'               => [ 1, 'R' ],
	'redirect'                => [ 0, '#REDIRECT' ],
	'revisionday'             => [ 1, 'REVISIONDAY' ],
	'revisionday2'            => [ 1, 'REVISIONDAY2' ],
	'revisionid'              => [ 1, 'REVISIONID' ],
	'revisionmonth'           => [ 1, 'REVISIONMONTH' ],
	'revisionmonth1'          => [ 1, 'REVISIONMONTH1' ],
	'revisionsize'            => [ 1, 'REVISIONSIZE' ],
	'revisiontimestamp'       => [ 1, 'REVISIONTIMESTAMP' ],
	'revisionuser'            => [ 1, 'REVISIONUSER' ],
	'revisionyear'            => [ 1, 'REVISIONYEAR' ],
	'rootpagename'            => [ 1, 'ROOTPAGENAME' ],
	'rootpagenamee'           => [ 1, 'ROOTPAGENAMEE' ],
	'safesubst'               => [ 0, 'SAFESUBST:' ],
	'scriptpath'              => [ 0, 'SCRIPTPATH' ],
	'server'                  => [ 0, 'SERVER' ],
	'servername'              => [ 0, 'SERVERNAME' ],
	'sitename'                => [ 1, 'SITENAME' ],
	'special'                 => [ 0, 'special' ],
	'speciale'                => [ 0, 'speciale' ],
	'staticredirect'          => [ 1, '__STATICREDIRECT__' ],
	'stylepath'               => [ 0, 'STYLEPATH' ],
	'subjectpagename'         => [ 1, 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'        => [ 1, 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'subjectspace'            => [ 1, 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'           => [ 1, 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'subpagename'             => [ 1, 'SUBPAGENAME' ],
	'subpagenamee'            => [ 1, 'SUBPAGENAMEE' ],
	'subst'                   => [ 0, 'SUBST:' ],
	'tag'                     => [ 0, 'tag' ],
	'talkpagename'            => [ 1, 'TALKPAGENAME' ],
	'talkpagenamee'           => [ 1, 'TALKPAGENAMEE' ],
	'talkspace'               => [ 1, 'TALKSPACE' ],
	'talkspacee'              => [ 1, 'TALKSPACEE' ],
	'toc'                     => [ 0, '__TOC__' ],
	'uc'                      => [ 0, 'UC:' ],
	'ucfirst'                 => [ 0, 'UCFIRST:' ],
	'urlencode'               => [ 0, 'URLENCODE:' ],
	'url_path'                => [ 0, 'PATH' ],
	'url_query'               => [ 0, 'QUERY' ],
	'url_wiki'                => [ 0, 'WIKI' ],
];
