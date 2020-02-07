<?php

/*
 * This file is part of Crawler Detect - the web crawler detection library.
 *
 * (c) Mark Beech <m@rkbee.ch>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Jaybizzle\CrawlerDetect\Fixtures;

class Crawlers extends AbstractProvider
{
    /**
     * Array of regular expressions to match against the user agent.
     *
     * @var array
     */
    protected $data = array(
        '.*Java.*outbrain',
        ' YLT',
        '^b0t$',
        '^bluefish ',
        '^Calypso v\/',
        '^COMODO DCV',
        '^DangDang',
        '^DavClnt',
        '^FDM ',
        '^git\/',
        '^Goose\/',
        '^Grabber',
        '^HTTPClient\/',
        '^Java\/',
        '^Jeode\/',
        '^Jetty\/',
        '^Mail\/',
        '^Mget',
        '^MicroMessenger\/',
        '^Microsoft URL Control',
        '^NG\/[0-9\.]',
        '^NING\/',
        '^PHP\/[0-9]',
        '^RMA\/',
        '^Ruby|Ruby\/[0-9]',
        '^VSE\/[0-9]',
        '^WordPress\.com',
        '^XRL\/[0-9]',
        '^ZmEu',
        '008\/',
        '13TABS',
        '192\.comAgent',
        '2ip\.ru',
        '404enemy',
        '7Siters',
        '80legs',
        'a\.pr-cy\.ru',
        'a3logics\.in',
        'A6-Indexer',
        'Abonti',
        'Aboundex',
        'aboutthedomain',
        'Accoona-AI-Agent',
        'acoon',
        'acrylicapps\.com\/pulp',
        'Acunetix',
        'AdAuth\/',
        'adbeat',
        'AddThis',
        'ADmantX',
        'AdminLabs',
        'adressendeutschland',
        'adscanner',
        'Adstxtaggregator',
        'adstxt-worker',
        'adstxt\.com',
        'agentslug',
        'AHC',
        'aihit',
        'aiohttp\/',
        'Airmail',
        'akka-http\/',
        'akula\/',
        'alertra',
        'alexa site audit',
        'Alibaba\.Security\.Heimdall',
        'Alligator',
        'allloadin',
        'AllSubmitter',
        'alyze\.info',
        'amagit',
        '^Amazon Simple Notification Service Agent$',
        'Anarchie',
        'AndroidDownloadManager',
        'Anemone',
        'AngleSharp',
        'annotate_google',
        'Ant\.com',
        'Anturis Agent',
        'AnyEvent-HTTP\/',
        'Apache Droid',
        'Apache OpenOffice',
        'Apache-HttpAsyncClient',
        'Apache-HttpClient',
        'ApacheBench',
        'Apexoo',
        'APIs-Google',
        'AportWorm\/',
        'AppBeat\/',
        'AppEngine-Google',
        'AppleSyndication',
        'AppStoreScraperZ',
        'Aprc\/[0-9]',
        'Arachmo',
        'arachnode',
        'Arachnophilia',
        'aria2',
        'Arukereso',
        'asafaweb',
        'AskQuickly',
        'Ask Jeeves',
        'ASPSeek',
        'Asterias',
        'Astute',
        'asynchttp',
        'Attach',
        'attohttpc',
        'autocite',
        'AutomaticWPTester',
        'Autonomy',
        'axios\/',
        'AWS Security Scanner',
        'B-l-i-t-z-B-O-T',
        'Backlink-Ceck',
        'backlink-check',
        'BacklinkHttpStatus',
        'BackStreet',
        'BackWeb',
        'Bad-Neighborhood',
        'Badass',
        'baidu\.com',
        'Bandit',
        'basicstate',
        'BatchFTP',
        'Battleztar Bazinga',
        'baypup\/',
        'BazQux',
        'BBBike',
        'BCKLINKS',
        'BDFetch',
        'BegunAdvertising',
        'Bewica-security-scan',
        'Bidtellect',
        'BigBozz',
        'Bigfoot',
        'biglotron',
        'BingLocalSearch',
        'BingPreview',
        'binlar',
        'biNu image cacher',
        'Bitacle',
        'biz_Directory',
        'Black Hole',
        'Blackboard Safeassign',
        'BlackWidow',
        'BlockNote\.Net',
        'BlogBridge',
        'Bloglines',
        'Bloglovin',
        'BlogPulseLive',
        'BlogSearch',
        'Blogtrottr',
        'BlowFish',
        'boitho\.com-dc',
        'Boost\.Beast',
        'BPImageWalker',
        'Braintree-Webhooks',
        'Branch Metrics API',
        'Branch-Passthrough',
        'Brandprotect',
        'BrandVerity',
        'Brandwatch',
        'Brodie\/',
        'Browsershots',
        'BUbiNG',
        'Buck\/',
        'Buddy',
        'BuiltWith',
        'Bullseye',
        'BunnySlippers',
        'Burf Search',
        'Butterfly\/',
        'BuzzSumo',
        'CAAM\/[0-9]',
        'CakePHP',
        'Calculon',
        'Canary%20Mail',
        'CaretNail',
        'catexplorador',
        'CC Metadata Scaper',
        'Cegbfeieh',
        'censys',
        'Cerberian Drtrs',
        'CERT\.at-Statistics-Survey',
        'cg-eye',
        'changedetection',
        'ChangesMeter',
        'Charlotte',
        'CheckHost',
        'checkprivacy',
        'CherryPicker',
        'ChinaClaw',
        'Chirp\/',
        'chkme\.com',
        'Chlooe',
        'Chromaxa',
        'CirrusExplorer',
        'CISPA Vulnerability Notification',
        'Citoid',
        'CJNetworkQuality',
        'Clarsentia',
        'clips\.ua\.ac\.be',
        'Cloud mapping',
        'CloudEndure',
        'CloudFlare-AlwaysOnline',
        'Cloudinary',
        'cmcm\.com',
        'coccoc',
        'cognitiveseo',
        'colly -',
        'CommaFeed',
        'Commons-HttpClient',
        'commonscan',
        'contactbigdatafr',
        'contentkingapp',
        'convera',
        'CookieReports',
        'copyright sheriff',
        'CopyRightCheck',
        'Copyscape',
        'cortex\/',
        'Cosmos4j\.feedback',
        'Covario-IDS',
        'Craw\/',
        'Crescent',
        'Crowsnest',
        'Criteo',
        'CSHttp',
        'CSSCheck',
        'curb',
        'Curious George',
        'curl',
        'cuwhois\/',
        'cybo\.com',
        'DAP\/NetHTTP',
        'DareBoost',
        'DatabaseDriverMysqli',
        'DataCha0s',
        'Datafeedwatch',
        'Datanyze',
        'DataparkSearch',
        'dataprovider',
        'DataXu',
        'Daum(oa)?[ \/][0-9]',
        'dBpoweramp',
        'ddline',
        'deeris',
        'delve\.ai',
        'Demon',
        'DeuSu',
        'developers\.google\.com\/\+\/web\/snippet\/',
        'Devil',
        'Digg',
        'Digincore',
        'DigitalPebble',
        'Dirbuster',
        'Discourse Forum Onebox',
        'Disqus\/',
        'Dispatch\/',
        'DittoSpyder',
        'dlvr',
        'DMBrowser',
        'DNSPod-reporting',
        'docoloc',
        'Dolphin http client',
        'DomainAppender',
        'DomainLabz',
        'Donuts Content Explorer',
        'dotMailer content retrieval',
        'dotSemantic',
        'downforeveryoneorjustme',
        'Download Wonder',
        'downnotifier',
        'DowntimeDetector',
        'Drip',
        'drupact',
        'Drupal \(\+http:\/\/drupal\.org\/\)',
        'DTS Agent',
        'dubaiindex',
        'DuplexWeb-Google',
        'EARTHCOM',
        'Easy-Thumb',
        'EasyDL',
        'Ebingbong',
        'ec2linkfinder',
        'eCairn-Grabber',
        'eCatch',
        'ECCP',
        'eContext\/',
        'Ecxi',
        'EirGrabber',
        'ElectricMonk',
        'elefent',
        'EMail Exractor',
        'EMail Wolf',
        'EmailWolf',
        'Embarcadero',
        'Embed PHP Library',
        'Embedly',
        'endo\/',
        'europarchive\.org',
        'evc-batch',
        'EventMachine HttpClient',
        'Everwall Link Expander',
        'Evidon',
        'Evrinid',
        'ExactSearch',
        'ExaleadCloudview',
        'Excel\/',
        'exif',
        'ExoRank',
        'Exploratodo',
        'Express WebPictures',
        'Extreme Picture Finder',
        'EyeNetIE',
        'ezooms',
        'facebookexternalhit',
        'facebookexternalua',
        'facebookplatform',
        'fairshare',
        'Faraday v',
        'fasthttp',
        'Faveeo',
        'Favicon downloader',
        'faviconkit',
        'faviconarchive',
        'FavOrg',
        'Feed Wrangler',
        'Feedable\/',
        'Feedbin',
        'FeedBooster',
        'FeedBucket',
        'FeedBunch\/',
        'FeedBurner',
        'feeder',
        'Feedly',
        'FeedshowOnline',
        'Feedspot',
        'Feedwind\/',
        'FeedZcollector',
        'feeltiptop',
        'Fetch API',
        'Fetch\/[0-9]',
        'Fever\/[0-9]',
        'FHscan',
        'Fimap',
        'findlink',
        'findthatfile',
        'FlashGet',
        'FlipboardBrowserProxy',
        'FlipboardProxy',
        'FlipboardRSS',
        'Flock\/',
        'fluffy',
        'Flunky',
        'flynxapp',
        'forensiq',
        'FoundSeoTool',
        'http:\/\/www.neomo.de\/', //'Francis [Bot]'
        'free thumbnails',
        'Freeuploader',
        'Funnelback',
        'Fuzz Faster U Fool',
        'G-i-g-a-b-o-t',
        'g00g1e\.net',
        'ganarvisitas',
        'geek-tools',
        'Genieo',
        'GentleSource',
        'GetCode',
        'Getintent',
        'GetLinkInfo',
        'getprismatic',
        'GetRight',
        'getroot',
        'GetURLInfo\/',
        'GetWeb',
        'Geziyor',
        'Ghost Inspector',
        'GigablastOpenSource',
        'GIS-LABS',
        'github-camo',
        'github\.com',
        'Go [\d\.]* package http',
        'Go http package',
        'Go-Ahead-Got-It',
        'Go-http-client',
        'Go!Zilla',
        'gobyus',
        'gofetch',
        'GomezAgent',
        'gooblog',
        'Goodzer\/',
        'Google AppsViewer',
        'Google Desktop',
        'Google favicon',
        'Google Keyword Suggestion',
        'Google Keyword Tool',
        'Google Page Speed Insights',
        'Google PP Default',
        'Google Search Console',
        'Google Web Preview',
        'Google-Adwords',
        'Google-Apps-Script',
        'Google-Calendar-Importer',
        'Google-HotelAdsVerifier',
        'Google-HTTP-Java-Client',
        'Google-Publisher-Plugin',
        'Google-Read-Aloud',
        'Google-SearchByImage',
        'Google-Site-Verification',
        'Google-Structured-Data-Testing-Tool',
        'Google-Youtube-Links',
        'google-xrawler',
        'GoogleDocs',
        'GoogleHC\/',
        'GoogleProducer',
        'GoogleSites',
        'Google-Transparency-Report',
        'Gookey',
        'GoScraper',
        'GoSpotCheck',
        'gosquared-thumbnailer',
        'Gotit',
        'GoZilla',
        'grabify',
        'GrabNet',
        'Grafula',
        'Grammarly',
        'GrapeFX',
        'GreatNews',
        'Gregarius',
        'GRequests',
        'grokkit',
        'grouphigh',
        'grub-client',
        'gSOAP\/',
        'GT::WWW',
        'GTmetrix',
        'GuzzleHttp',
        'gvfs\/',
        'HAA(A)?RTLAND http client',
        'Haansoft',
        'hackney\/',
        'Hadi Agent',
        'HappyApps-WebCheck',
        'Hatena',
        'Havij',
        'HaxerMen',
        'HeadlessChrome',
        'HEADMasterSEO',
        'HeartRails_Capture',
        'help@dataminr\.com',
        'heritrix',
        'Hexometer',
        'historious',
        'hkedcity',
        'hledejLevne\.cz',
        'Hloader',
        'HMView',
        'Holmes',
        'HonesoSearchEngine',
        'HootSuite Image proxy',
        'Hootsuite-WebFeed',
        'hosterstats',
        'HostTracker',
        'ht:\/\/check',
        'htdig',
        'HTMLparser',
        'htmlyse',
        'HTTP Banner Detection',
        'HTTP_Compression_Test',
        'http_request2',
        'http_requester',
        'http-get',
        'HTTP-Header-Abfrage',
        'http-kit',
        'http-request\/',
        'HTTP-Tiny',
        'HTTP::Lite',
        'http\.rb\/',
        'http_get',
        'HttpComponents',
        'httphr',
        'HTTPMon',
        'HTTPie',
        'httpRequest',
        'httpscheck',
        'httpssites_power',
        'httpunit',
        'HttpUrlConnection',
        'httrack',
        'huaweisymantec',
        'HubSpot ',
        'Humanlinks',
        'i2kconnect\/',
        'Iblog',
        'ichiro',
        'Id-search',
        'IdeelaborPlagiaat',
        'IDG Twitter Links Resolver',
        'IDwhois\/',
        'Iframely',
        'igdeSpyder',
        'IlTrovatore',
        'Image Fetch',
        'Image Sucker',
        'ImageEngine\/',
        'ImageVisu\/',
        'Imagga',
        'imagineeasy',
        'imgsizer',
        'InAGist',
        'inbound\.li parser',
        'InDesign%20CC',
        'Indy Library',
        'InetURL',
        'infegy',
        'infohelfer',
        'InfoTekies',
        'InfoWizards Reciprocal Link',
        'inpwrd\.com',
        'instabid',
        'Instapaper',
        'Integrity',
        'integromedb',
        'Intelliseek',
        'InterGET',
        'internet_archive',
        'Internet Ninja',
        'InternetSeer',
        'internetVista monitor',
        'internetwache',
        'intraVnews',
        'IODC',
        'IOI',
        'iplabel',
        'ips-agent',
        'IPS\/[0-9]',
        'IPWorks HTTP\/S Component',
        'iqdb\/',
        'Iria',
        'Irokez',
        'isitup\.org',
        'iskanie',
        'isUp\.li',
        'iThemes Sync\/',
        'IZaBEE',
        'iZSearch',
        'JAHHO',
        'janforman',
        'Jaunt\/',
        'Jbrofuzz',
        'Jersey\/',
        'JetCar',
        'Jigsaw',
        'Jobboerse',
        'JobFeed discovery',
        'Jobg8 URL Monitor',
        'jobo',
        'Jobrapido',
        'Jobsearch1\.5',
        'JoinVision Generic',
        'JolokiaPwn',
        'Joomla',
        'Jorgee',
        'JS-Kit',
        'JustView',
        'Kaspersky Lab CFR link resolver',
        'Kelny\/',
        'Kerrigan\/',
        'KeyCDN',
        'Keyword Density',
        'Keywords Research',
        'khttp\/',
        'KickFire',
        'KimonoLabs\/',
        'Kml-Google',
        'knows\.is',
        'KOCMOHABT',
        'kouio',
        'kubectl',
        'kube-probe',
        'kulturarw3',
        'KumKie',
        'L\.webis',
        'Larbin',
        'Lavf\/',
        'LeechFTP',
        'LeechGet',
        'letsencrypt',
        'Lftp',
        'LibVLC',
        'LibWeb',
        'Libwhisker',
        'libwww',
        'Licorne',
        'Liferea\/',
        'Lightspeedsystems',
        'Lighthouse',
        'Likse',
        'limber\.io',
        'Link Valet',
        'link_thumbnailer',
        'LinkAlarm\/',
        'linkCheck',
        'linkdex',
        'LinkExaminer',
        'linkfluence',
        'linkpeek',
        'LinkPreviewGenerator',
        'LinkScan',
        'LinksManager',
        'LinkTiger',
        'LinkWalker',
        'Lipperhey',
        'Litemage_walker',
        'livedoor ScreenShot',
        'LoadImpactRload',
        'localsearch-web',
        'LongURL API',
        'longurl-r-package',
        'looid\.com',
        'looksystems\.net',
        'ltx71',
        'lua-resty-http',
        'lwp-request',
        'lwp-trivial',
        'LWP::Simple',
        'lycos',
        'LYT\.SR',
        'mabontland',
        'Mag-Net',
        'MagpieRSS',
        'Mail\.Ru',
        'MailChimp',
        'Majestic12',
        'makecontact\/',
        'Mandrill',
        'MapperCmd',
        'marketinggrader',
        'MarkMonitor',
        'MarkWatch',
        'Mass Downloader',
        'masscan\/',
        'Mata Hari',
        'Mediametric',
        'Mediapartners-Google',
        'mediawords',
        'MegaIndex\.ru',
        'MeltwaterNews',
        'Melvil Rawi',
        'MemGator',
        'Metaspinner',
        'MetaURI',
        'MFC_Tear_Sample',
        'Microsearch',
        'Microsoft Office ',
        'Microsoft Outlook',
        'Microsoft Windows Network Diagnostics',
        'Microsoft-WebDAV-MiniRedir',
        'Microsoft Data Access',
        'MIDown tool',
        'MIIxpc',
        'Mindjet',
        'Miniature\.io',
        'Miniflux',
        'Mister PiX',
        'mixdata dot com',
        'mixed-content-scan',
        'Mixmax-LinkPreview',
        'mixnode',
        'Mnogosearch',
        'mogimogi',
        'Mojeek',
        'Mojolicious \(Perl\)',
        'Monit\/',
        'monitis',
        'Monitority\/',
        'montastic',
        'MonTools',
        'Moreover',
        'Morfeus Fucking Scanner',
        'Morning Paper',
        'MovableType',
        'mowser',
        'Mrcgiguy',
        'MS Web Services Client Protocol',
        'MSFrontPage',
        'mShots',
        'MuckRack\/',
        'muhstik-scan',
        'MVAClient',
        'MxToolbox\/',
        'nagios',
        'Najdi\.si',
        'Name Intelligence',
        'Nameprotect',
        'Navroad',
        'NearSite',
        'Needle',
        'Nessus',
        'Net Vampire',
        'NetAnts',
        'NETCRAFT',
        'NetLyzer',
        'NetMechanic',
        'NetNewsWire',
        'Netpursual',
        'netresearch',
        'NetShelter ContentScan',
        'Netsparker',
        'NetTrack',
        'Netvibes',
        'NetZIP',
        'Neustar WPM',
        'NeutrinoAPI',
        'NewRelicPinger',
        'NewsBlur .*Finder',
        'NewsGator',
        'newsme',
        'newspaper\/',
        'NetSystemsResearch',
        'Nexgate Ruby Client',
        'NG-Search',
        'Nibbler',
        'NICErsPRO',
        'Nikto',
        'nineconnections',
        'NLNZ_IAHarvester',
        'Nmap Scripting Engine',
        'node-superagent',
        'node-urllib',
        'node\.io',
        'Nodemeter',
        'NodePing',
        'nominet\.org\.uk',
        'nominet\.uk',
        'Norton-Safeweb',
        'Notifixious',
        'notifyninja',
        'NotionEmbedder',
        'nuhk',
        'nutch',
        'Nuzzel',
        'nWormFeedFinder',
        'nyawc\/',
        'Nymesis',
        'NYU',
        'Ocelli\/',
        'Octopus',
        'oegp',
        'Offline Explorer',
        'Offline Navigator',
        'OgScrper',
        'og-scraper',
        'okhttp',
        'omgili',
        'OMSC',
        'Online Domain Tools',
        'OpenCalaisSemanticProxy',
        'Openfind',
        'OpenLinkProfiler',
        'Openstat\/',
        'OpenVAS',
        'OPPO A33',
        'Optimizer',
        'Orbiter',
        'OrgProbe\/',
        'orion-semantics',
        'OSPScraper',
        'Outlook-Express',
        'Outlook-iOS',
        'ow\.ly',
        'Owler',
        'ownCloud News',
        'OxfordCloudService',
        'Page Valet',
        'page_verifier',
        'page scorer',
        'page2rss',
        'PageGrabber',
        'PagePeeker',
        'PageScorer',
        'Pagespeed\/',
        'Panopta',
        'panscient',
        'Papa Foto',
        'parsijoo',
        'Pavuk',
        'PayPal IPN',
        'pcBrowser',
        'Pcore-HTTP',
        'Pearltrees',
        'PECL::HTTP',
        'peerindex',
        'Peew',
        'PeoplePal',
        'Perlu -',
        'PhantomJS Screenshoter',
        'PhantomJS\/',
        'Photon\/',
        'phpservermon',
        'Pi-Monster',
        'Picscout',
        'Picsearch',
        'PictureFinder',
        'Pimonster',
        'ping\.blo\.gs',
        'Pingability',
        'PingAdmin\.Ru',
        'Pingdom',
        'Pingoscope',
        'PingSpot',
        'pinterest\.com',
        'Pixray',
        'Pizilla',
        'Plagger\/',
        'Ploetz \+ Zeller',
        'Plukkie',
        'plumanalytics',
        'PocketImageCache',
        'PocketParser',
        'Pockey',
        'POE-Component-Client-HTTP',
        'Polymail\/',
        'Pompos',
        'Porkbun',
        'Port Monitor',
        'postano',
        'PostmanRuntime',
        'PostPost',
        'postrank',
        'PowerPoint\/',
        'Priceonomics Analysis Engine',
        'PrintFriendly',
        'PritTorrent',
        'Prlog',
        'probethenet',
        'Project 25499',
        'prospectb2b',
        'Protopage',
        'ProWebWalker',
        'proximic',
        'PRTG Network Monitor',
        'pshtt, https scanning',
        'PTST ',
        'PTST\/[0-9]+',
        'Pulsepoint XT3 web scraper',
        'Pump',
        'python-httpx',
        'Python-httplib2',
        'python-requests',
        'Python-urllib',
        'Qirina Hurdler',
        'QQDownload',
        'QrafterPro',
        'Qseero',
        'Qualidator',
        'QueryN Metasearch',
        'queuedriver',
        'Quora Link Preview',
        'Qwantify',
        'Radian6',
        'RankActive',
        'RankFlex',
        'RankSonicSiteAuditor',
        'Re-re Studio',
        'ReactorNetty',
        'Readability',
        'RealDownload',
        'RealPlayer%20Downloader',
        'RebelMouse',
        'Recorder',
        'RecurPost\/',
        'redback\/',
        'ReederForMac',
        'Reeder\/',
        'ReGet',
        'RepoMonkey',
        'request\.js',
        'reqwest\/',
        'ResponseCodeTest',
        'RestSharp',
        'Riddler',
        'Rival IQ',
        'Robosourcer',
        'Robozilla',
        'ROI Hunter',
        'RPT-HTTPClient',
        'RSSOwl',
        'RyowlEngine',
        'safe-agent-scanner',
        'SalesIntelligent',
        'Saleslift',
        'Sendsay\.Ru',
        'SauceNAO',
        'SBIder',
        'sc-downloader',
        'scalaj-http',
        'Scamadviser-Frontend',
        'scan\.lol',
        'ScanAlert',
        'Scoop',
        'scooter',
        'ScoutJet',
        'ScoutURLMonitor',
        'ScrapeBox Page Scanner',
        'SimpleScraper',
        'Scrapy',
        'Screaming',
        'ScreenShotService',
        'Scrubby',
        'Scrutiny\/',
        'search\.thunderstone',
        'Search37',
        'searchenginepromotionhelp',
        'Searchestate',
        'SearchExpress',
        'SearchSight',
        'Seeker',
        'semanticdiscovery',
        'semanticjuice',
        'Semiocast HTTP client',
        'Semrush',
        'sentry\/',
        'SEO Browser',
        'Seo Servis',
        'seo-nastroj\.cz',
        'seo4ajax',
        'Seobility',
        'SEOCentro',
        'SeoCheck',
        'SEOkicks',
        'SEOlizer',
        'Seomoz',
        'SEOprofiler',
        'SEOsearch',
        'seoscanners',
        'seositecheckup',
        'SEOstats',
        'servernfo',
        'sexsearcher',
        'Seznam',
        'Shelob',
        'Shodan',
        'Shoppimon',
        'ShopWiki',
        'shortURL lengthener',
        'ShortLinkTranslate',
        'shrinktheweb',
        'Sideqik',
        'SimplePie',
        'SimplyFast',
        'Siphon',
        'SISTRIX',
        'Site-Shot\/',
        'Site Sucker',
        'Site24x7',
        'SiteBar',
        'Sitebeam',
        'Sitebulb\/',
        'SiteCondor',
        'SiteExplorer',
        'SiteGuardian',
        'Siteimprove',
        'SiteIndexed',
        'Sitemap(s)? Generator',
        'SitemapGenerator',
        'SiteMonitor',
        'Siteshooter B0t',
        'SiteSnagger',
        'SiteSucker',
        'SiteTruth',
        'Sitevigil',
        'sitexy\.com',
        'SkypeUriPreview',
        'Slack\/',
        'slider\.com',
        'slurp',
        'SlySearch',
        'SmartDownload',
        'SMRF URL Expander',
        'SMUrlExpander',
        'Snake',
        'Snappy',
        'SnapSearch',
        'Snarfer\/',
        'SniffRSS',
        'sniptracker',
        'Snoopy',
        'SnowHaze Search',
        'sogou web',
        'SortSite',
        'Sottopop',
        'sovereign\.ai',
        'SpaceBison',
        'SpamExperts',
        'Spammen',
        'Spanner',
        'spaziodati',
        'SPDYCheck',
        'Specificfeeds',
        'speedy',
        'SPEng',
        'Spinn3r',
        'spray-can',
        'Sprinklr ',
        'spyonweb',
        'sqlmap',
        'Sqlworm',
        'Sqworm',
        'SSL Labs',
        'ssl-tools',
        'StackRambler',
        'Statastico\/',
        'StatusCake',
        'Steeler',
        'Stratagems Kumo',
        'Stroke\.cz',
        'StudioFACA',
        'StumbleUpon',
        'suchen',
        'Sucuri',
        'summify',
        'SuperHTTP',
        'Surphace Scout',
        'Suzuran',
        'SwiteScraper',
        'Symfony BrowserKit',
        'Symfony2 BrowserKit',
        'SynHttpClient-Built',
        'Sysomos',
        'sysscan',
        'Szukacz',
        'T0PHackTeam',
        'tAkeOut',
        'Tarantula\/',
        'Taringa UGC',
        'TarmotGezgin',
        'Teleport',
        'Telesoft',
        'Telesphoreo',
        'Telesphorep',
        'Tenon\.io',
        'teoma',
        'terrainformatica',
        'Test Certificate Info',
        'testuri',
        'Tetrahedron',
        'TextRazor Downloader',
        'The Drop Reaper',
        'The Expert HTML Source Viewer',
        'The Knowledge AI',
        'The Intraformant',
        'theinternetrules',
        'TheNomad',
        'Thinklab',
        'Thumbshots',
        'ThumbSniper',
        'Thumbor',
        'timewe\.net',
        'TinEye',
        'Tiny Tiny RSS',
        'TLSProbe\/',
        'Toata',
        'topster',
        'touche\.com',
        'Traackr\.com',
        'tracemyfile',
        'Trackuity',
        'TrapitAgent',
        'Trendiction',
        'Trendsmap',
        'trendspottr',
        'truwoGPS',
        'TryJsoup',
        'TulipChain',
        'Turingos',
        'Turnitin',
        'tweetedtimes',
        'Tweetminster',
        'Tweezler\/',
        'twibble',
        'Twice',
        'Twikle',
        'Twingly',
        'Twisted PageGetter',
        'Typhoeus',
        'ubermetrics-technologies',
        'uclassify',
        'UdmSearch',
        'unchaos',
        'unirest-java',
        'UniversalFeedParser',
        'Unshorten\.It',
        'Untiny',
        'UnwindFetchor',
        'updated',
        'updown\.io daemon',
        'Upflow',
        'Uptimia',
        'Urlcheckr',
        'URL Verifier',
        'URLitor',
        'urlresolver',
        'Urlstat',
        'URLTester',
        'UrlTrends Ranking Updater',
        'URLy Warning',
        'URLy\.Warning',
        'Vacuum',
        'Vagabondo',
        'VB Project',
        'vBSEO',
        'VCI',
        'via ggpht\.com GoogleImageProxy',
        'VidibleScraper',
        'Virusdie',
        'visionutils',
        'vkShare',
        'VoidEYE',
        'Voil',
        'voltron',
        'voyager\/',
        'VSAgent\/',
        'VSB-TUO\/',
        'Vulnbusters Meter',
        'VYU2',
        'w3af\.org',
        'W3C_Unicorn',
        'W3C-checklink',
        'W3C-mobileOK',
        'WAC-OFU',
        'Wallpapers\/[0-9]+',
        'WallpapersHD',
        'wangling',
        'Wappalyzer',
        'WatchMouse',
        'WbSrch\/',
        'WDT\.io',
        'web-capture\.net',
        'Web-sniffer',
        'Web Auto',
        'Web Collage',
        'Web Enhancer',
        'Web Fetch',
        'Web Fuck',
        'Web Pix',
        'Web Sauger',
        'Web spyder',
        'Web Sucker',
        'Webalta',
        'Webauskunft',
        'WebAuto',
        'WebCapture',
        'WebClient\/',
        'webcollage',
        'WebCookies',
        'WebCopier',
        'WebCorp',
        'WebDataStats',
        'WebDoc',
        'WebEnhancer',
        'WebFetch',
        'WebFuck',
        'WebGazer',
        'WebGo IS',
        'WebImageCollector',
        'WebImages',
        'WebIndex',
        'webkit2png',
        'WebLeacher',
        'webmastercoffee',
        'webmon ',
        'WebPix',
        'WebReaper',
        'WebSauger',
        'webscreenie',
        'Webshag',
        'Webshot',
        'Website Quester',
        'websitepulse agent',
        'WebsiteQuester',
        'Websnapr',
        'WebSniffer',
        'Webster',
        'WebStripper',
        'WebSucker',
        'Webthumb\/',
        'WebThumbnail',
        'WebWhacker',
        'WebZIP',
        'WeLikeLinks',
        'WEPA',
        'WeSEE',
        'wf84',
        'Wfuzz\/',
        'wget',
        'WhatsApp',
        'WhatsMyIP',
        'WhatWeb',
        'WhereGoes\?',
        'Whibse',
        'WhoRunsCoinHive',
        'Whynder Magnet',
        'Windows-RSS-Platform',
        'WinPodder',
        'wkhtmlto',
        'wmtips',
        'Woko',
        'Wolfram HTTPClient',
        'woorankreview',
        'Word\/',
        'WordPress\/',
        'worldping-api',
        'WordupinfoSearch',
        'wotbox',
        'WP Engine Install Performance API',
        'wpif',
        'wprecon\.com survey',
        'WPScan',
        'wscheck',
        'Wtrace',
        'WWW-Collector-E',
        'WWW-Mechanize',
        'WWW::Document',
        'WWW::Mechanize',
        'www\.monitor\.us',
        'WWWOFFLE',
        'x09Mozilla',
        'x22Mozilla',
        'XaxisSemanticsClassifier',
        'Xenu Link Sleuth',
        'XING-contenttabreceiver',
        'xpymep([0-9]?)\.exe',
        'Y!J-(ASR|BSC)',
        'Y\!J-BRW',
        'Yaanb',
        'yacy',
        'Yahoo Link Preview',
        'YahooCacheSystem',
        'YahooYSMcm',
        'YandeG',
        'Yandex(?!Search)',
        'yanga',
        'yeti',
        'Yo-yo',
        'Yoleo Consumer',
        'yoogliFetchAgent',
        'YottaaMonitor',
        'Your-Website-Sucks',
        'yourls\.org',
        'YoYs\.net',
        'YP\.PL',
        'Zabbix',
        'Zade',
        'Zao',
        'Zauba',
        'Zemanta Aggregator',
        'Zend_Http_Client',
        'Zend\\\\Http\\\\Client',
        'Zermelo',
        'Zeus ',
        'zgrab',
        'ZnajdzFoto',
        'ZnHTTP',
        'Zombie\.js',
        'Zoom\.Mac',
        'ZyBorg',
        '[a-z0-9\-_]*(bot|crawl|archiver|transcoder|spider|uptime|validator|fetcher|cron|checker|reader|extractor|monitoring|analyzer)',
    );
}
