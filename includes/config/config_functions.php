<?php
/**********************************************/
/* Kasseler CMS: Content Management System    */
/**********************************************/
/*                                            */
/* Copyright (c)2007-2010 by Igor Ognichenko  */
/* http://www.kasseler-cms.net/               */
/*                                            */
/**********************************************/
if (!defined('FUNC_FILE')) die('Access is limited'); 

$file_sitemap = "sitemap.xml";

$set_link = array();
$replace_link = array();
$replace_content = array();
$set_content = array();
$limit_fields = array('tag', 'user_name', 'user_email');
$func_conf = array('chmod_mk_dir' => false);

$languages2code = array(
    'russian' => 'ru',
    'ukraine' => 'ua',
    'english' => 'en',
    'german'  => 'de'
);

$code2languages = array(
    'ru' => 'russian',
    'ua' => 'ukraine',
    'en' => 'english',
    'de' => 'german'
);

$ico_types = array(
    'jpg'   => 'jpg.png',
    'gif'   => 'gif.png',
    'jpeg'  => 'jpg.png',
    'png'   => 'png.png',
    'bmp'   => 'bmp.png',
    'txt'   => 'txt.png',
    'html'  => 'html.png',
    'flv'   => 'flv.png',
    'doc'   => 'doc.png',
    'xls'   => 'xls.png',
    'jar'   => 'jar.png',
    'php'   => 'php.png',
    'js'    => 'js.png',
    'css'   => 'css.png',
    'tpl'   => 'tpl.png',
    'inc'   => 'inc.png',
    'sql'   => 'sql.png',
    'zip'   => 'zip.png',
    'rar'   => 'zip.png',
    'tar'   => 'zip.png',
    'tar.gs'=> 'zip.png',
    'gz'    => 'zip.png',
    'cpp'   => 'cpp.png',
    'ppt'   => 'ppt.png',
    'log'   => 'log.png',
    'swf'   => 'flash.png',
    'exe'   => 'application.png',
    'sh'    => 'application.png',
    'cmd'   => 'application.png',
    'bat'   => 'application.png',
    'bin'   => 'linux.png',
    'cc'    => 'linux.png',
    'mp3'   => 'music.png',
    'wav'   => 'music.png',
    'wma'   => 'music.png',
    'pdf'   => 'pdf.png',
    'psd'   => 'psd.png',
);

$rewrite = array('module', 'do', 'id', 'page');

$reserved_ips = array (
    array('0.0.0.0','2.255.255.255'),
    array('10.0.0.0','10.255.255.255'),
    array('127.0.0.0','127.255.255.255'),
    array('169.254.0.0','169.254.255.255'),
    array('172.16.0.0','172.31.255.255'),
    array('192.0.2.0','192.0.2.255'),
    array('192.168.0.0','192.168.255.255'),
    array('255.255.255.0','255.255.255.255')
);

$file_ext = array(
    'audio'        => array('aac','ac3','aif','aiff','mp1','mp2','mp3','m3a','m4a','m4b','ogg','ram','wav','wma'),
    'video'        => array('asf','avi','divx','dv','mov','mpg','mpeg','mp4','mpv','ogm','qt','rm','vob','wmv'),
    'document'     => array('doc','pages','odt','rtf','pdf'),
    'spreadsheet'  => array('xls','numbers','ods'),
    'interactive'  => array('ppt','key','odp','swf'),
    'text'         => array('txt'),
    'archive'      => array('tar','bz2','gz','cab','dmg','rar','sea','sit','sqx','zip'),
    'code'         => array('css','html','php','js', 'html', 'shtml', 'asp'),
    'image'        => array('bmp', 'cmx', 'cod', 'gif', 'ico', 'jpe', 'jpeg', 'jpg', 'png')
);

$MIME = array(
    '*'        => 'application/octet-stream',
    'acx'      => 'application/internet-property-stream',
    'ai'       => 'application/postscript',
    'aif'      => 'audio/x-aiff',
    'asf'      => 'video/x-ms-asf',
    'au'       => 'audio/basic',
    'avi'      => 'video/x-msvideo',
    'axs'      => 'application/olescript',
    'bas'      => 'text/plain',
    'php'      => 'text/plain',
    'txt'      => 'text/plain',
    'cfg'      => 'text/plain',
    'bcpio'    => 'application/x-bcpio',
    'bmp'      => 'image/bmp',
    'cat'      => 'application/vnd.ms-pkiseccat',
    'cdf'      => 'application/x-cdf',
    'cer'      => 'application/x-x509-ca-cert',
    'clp'      => 'application/x-msclip',
    'cmx'      => 'image/x-cmx',
    'cod'      => 'image/cis-cod',
    'cpio'     => 'application/x-cpio',
    'crd'      => 'application/x-mscardfile',
    'crl'      => 'application/pkix-crl',
    'csh'      => 'application/x-csh',
    'css'      => 'text/css',
    'dcr'      => 'application/x-director',
    'dll'      => 'application/x-msdownload',
    'doc'      => 'application/msword',
    'dvi'      => 'application/x-dvi',
    'etx'      => 'text/x-setext',
    'evy'      => 'application/envoy',
    'fif'      => 'application/fractals',
    'flr'      => 'x-world/x-vrml',
    'gif'      => 'image/gif',
    'gtar'     => 'application/x-gtar',
    'gz'       => 'application/x-gzip',
    'hdf'      => 'application/x-hdf',
    'hlp'      => 'application/winhlp',
    'hqx'      => 'application/mac-binhex40',
    'hta'      => 'application/hta',
    'htc'      => 'text/x-component',
    'htm'      => 'text/html',
    'htt'      => 'text/webviewhtml',
    'ico'      => 'image/x-icon',
    'ief'      => 'image/ief',
    'iii'      => 'application/x-iphone',
    'ins'      => 'application/x-internet-signup',
    'jfif'     => 'image/pipeg',
    'jpe'      => 'image/jpeg',
    'js'       => 'application/javascript',
    'latex'    => 'application/x-latex',
    'lsf'      => 'video/x-la-asf',
    'm13'      => 'application/x-msmediaview',
    'm3u'      => 'audio/x-mpegurl',
    'man'      => 'application/x-troff-man',
    'mdb'      => 'application/x-msaccess',
    'me'       => 'application/x-troff-me',
    'mht'      => 'message/rfc822',
    'mid'      => 'audio/mid',
    'mny'      => 'application/x-msmoney',
    'mov'      => 'video/quicktime',
    'movie'    => 'video/x-sgi-movie',
    'mp2'      => 'video/mpeg',
    'mp3'      => 'audio/mpeg',
    'mpp'      => 'application/vnd.ms-project',
    'ms'       => 'application/x-troff-ms',
    'msg'      => 'application/vnd.ms-outlook',
    'nc'       => 'application/x-netcdf',
    'oda'      => 'application/oda',
    'odb'      => 'application/vnd.oasis.opendocument.database',
    'odc'      => 'application/vnd.oasis.opendocument.chart',
    'odf'      => 'application/vnd.oasis.opendocument.formula',
    'odg'      => 'application/vnd.oasis.opendocument.graphics',
    'odp'      => 'application/vnd.oasis.opendocument.presentation',
    'ods'      => 'application/vnd.oasis.opendocument.spreadsheet',
    'odt'      => 'application/vnd.oasis.opendocument.text',
    'p10'      => 'application/pkcs10',
    'p12'      => 'application/x-pkcs12',
    'p7b'      => 'application/x-pkcs7-certificates',
    'p7c'      => 'application/x-pkcs7-mime',
    'p7r'      => 'application/x-pkcs7-certreqresp',
    'p7s'      => 'application/x-pkcs7-signature',
    'pbm'      => 'image/x-portable-bitmap',
    'pdf'      => 'application/pdf',
    'pgm'      => 'image/x-portable-graymap',
    'pko'      => 'application/ynd.ms-pkipko',
    'pma'      => 'application/x-perfmon',
    'png'      => 'image/png',
    'pnm'      => 'image/x-portable-anymap',
    'pot'      => 'application/vnd.ms-powerpoint',
    'ppm'      => 'image/x-portable-pixmap',
    'prf'      => 'application/pics-rules',
    'pub'      => 'application/x-mspublisher',
    'ra'       => 'audio/x-pn-realaudio',
    'rar'      => 'application/x-rar-compressed',
    'ras'      => 'image/x-cmu-raster',
    'rgb'      => 'image/x-rgb',
    'roff'     => 'application/x-troff',
    'rtf'      => 'application/rtf',
    'rtx'      => 'text/richtext',
    'scd'      => 'application/x-msschedule',
    'sct'      => 'text/scriptlet',
    'setpay'   => 'application/set-payment-initiation',
    'setreg'   => 'application/set-registration-initiation',
    'sh'       => 'application/x-sh',
    'shar'     => 'application/x-shar',
    'sit'      => 'application/x-stuffit',
    'spl'      => 'application/futuresplash',
    'src'      => 'application/x-wais-source',
    'sst'      => 'application/vnd.ms-pkicertstore',
    'stl'      => 'application/vnd.ms-pkistl',
    'sv4cpio'  => 'application/x-sv4cpio',
    'sv4crc'   => 'application/x-sv4crc',
    'svg'      => 'image/svg+xml',
    'swf'      => 'application/x-shockwave-flash',
    'tar'      => 'application/x-tar',
    'tcl'      => 'application/x-tcl',
    'tex'      => 'application/x-tex',
    'texi'     => 'application/x-texinfo',
    'tgz'      => 'application/x-compressed',
    'tif'      => 'image/tiff',
    'trm'      => 'application/x-msterminal',
    'tsv'      => 'text/tab-separated-values',
    'uls'      => 'text/iuls',
    'ustar'    => 'application/x-ustar',
    'vcf'      => 'text/x-vcard',
    'wav'      => 'audio/x-wav',
    'wax'      => 'video/asf',
    'wcm'      => 'application/vnd.ms-works',
    'wmf'      => 'application/x-msmetafile',
    'wri'      => 'application/x-mswrite',
    'xbm'      => 'image/x-xbitmap',
    'xla'      => 'application/vnd.ms-excel',
    'xpm'      => 'image/x-xpixmap',
    'xwd'      => 'image/x-xwindowdump',
    'z'        => 'application/x-compress',
    'zip'      => 'application/zip',
    '323'      => 'text/h323'
);

$list_bots = array(
    'Kasseler Bot'         => 'kasselerbot',    
    'Google Sitemaps'      => 'Google-Sitemaps',
    'Google Media'         => 'Mediapartners-Google',
    'Google Image'         => 'Googlebot-Image',
    'Google Feed'          => 'Feedfetcher-Google',
    'Google'               => 'googlebot',
    'Hot Bot'              => 'slurp@inktomi',
    'Archive.org'          => 'archive_org',
    'Ask'                  => 'teoma',
    'Lycos'                => 'Lycos',
    'What You Seek'        => 'WhatUSeek',
    'Alexa'                => 'crawler@alexa.com',
    'IA.Archiver'          => 'ia_archiver',
    'Gigablast'            => 'GigaBlast',
    'Yandex Blog'          => 'YandexBlog',
    'Yandex.Директ'        => 'YaDirect',
    'Yandex Метрика'       => 'Direct',
    'Yandex'               => 'Yandex',
    'Yahoo'                => 'Yahoo!',
    'Yahoo Crawler'        => 'Yahoo-MMCrawler',
    'Turtle Scanner'       => 'TurtleScanner',
    'Turnitin Bot'         => 'TurnitinBot',
    'Zippp Bot'            => 'ZipppBot',
    'Rambler'              => 'StackRambler',
    'Cuil'                 => 'cuil',
    'oBot'                 => 'oBot',
    'Rambler'              => 'rambler',
    'Jet Bot'              => 'Jetbot',
    'Naver'                => 'NaverBot',
    'Punto'                => 'libwww',
    'Aport'                => 'aport',
    'MSN'                  => 'msnbot',
    'Mno Go Search'        => 'MnoGoSearch',
    'Booch Bot'            => 'booch',
    'Openfind'             => 'Openbot',
    'Altavista'            => 'scooter',
    'Fast Bot'             => 'WebCrawler',
    'WebZIP'               => 'WebZIP',
    'Get Smart'            => 'GetSmart',
    'Grub Client'          => 'grub-client',    
    'Net Vampire Bot'      => 'Vampire',
    'Microsoft Redir'      => 'Microsoft-WebDAV',
    'PS'                   => 'psbot',    
    'WebAlta'              => 'WebAlta',
    'W3C HTML'             => 'W3C_Validator',
    'W3C CSS'              => 'W3C_CSS_Validator',
    'SEO Crawler'          => 'seo-rus.com',
    'SAPE'                 => 'SAPE',
    'LinkFeed'             => 'LinkFeed',
    'SWeb'                 => 'sweb.ru',
    'Baidu'                => 'baidu',
    'Mail.Ru'              => 'Mail.Ru',
    'Yanga'                => 'yanga',
    'MJ12'                 => 'MJ12bot',
    'MSR'                  => 'MSRBOT',
    'DobroBot'             => 'dobrobot',
    'HostTracker.com'      => 'HostTracker',
    'Atrax'                => 'atraxbot',
    'ZETOZZ'               => 'OOZBOT',
    'AOL'                  => 'slurp',
    'Sogou Bot'            => 'Sogou',    
    'Ovale'                => 'ovalebot',
    'Speedy'               => 'speedy',
    'ScoutJet'             => 'scoutjet',
    'Nigma'                => 'nigma',
    'Java'                 => 'java',
    'Dolphin'              => 'dolphin',
    'AnyEvent'             => 'anyevent',
    'Xenu Link'            => 'xenu',
    'Jayde'                => 'jayde',
    'Kalooga Bot'          => 'kalooga',
    'Voila Bot'            => 'voilabot',
    'Dot Bot'              => 'dotbot',
    'Legalx'               => 'legal',
    'Bing Bot'             => 'bingbot',
    'Soso Spider'          => 'Sosospider',
    'Jaxified'             => 'jaxified',
    'Archive.org'          => 'archive.org',
    'MLBot'                => 'mlbot',
);

$_BE = strrev('edoced_46esab'); 
$_BEE = strrev('edocne_46esab'); 
$_Eto = "#+*$[)](&@!=<>/abftlice,.\r\n";
$_Efrom = "t+e[$(a@]i)&/\r!b=i<f\n>*l#,.";
$_F = 'CQppQGtyX2kKZipfKngKczxzQFttYgpuLQ0+b25pCmckJ2YKPipuPipfaQpmKidhKCh7LC4gICAgICAgICAgICAKaUBbPm9uPF9zKiprKSYzKCAqcnJvcl9wYmcqQFtmYm5nJCdzeXM8Km1fKnJyb3InYWwgInQwMDE6ICIjW2ZibmckJ2YKPipucypfKnJyb3InYSg7LC4gICAgICAgICAgICBbPm9uPF9zKiprKys7IFtmCiAmICIiOywuICAgICAgICAgICAgW21iPD5oMSAmICIiOyBbZgo+X2kKZiogJiBicnJieUAoOywuICAgICAgICAgICAgW2YKPl8+b248Km48ICYga3JfZyo8Xz5vbjwqbjxAW21iCm4tDT5vbmkKZyQnZgo+Km4+Kl9pCmYqJ2EoOywuICAgICAgICAgICAgW2sqeV9mCj4gJiBicnJieUAnbnVtPSpyJ2wgJ3YqcnMKb24nbCAnPHlwKidsICcqeHAKcmI8Cm9uJ2wgJ2RvbWIKbnMnbCAnPm9weXIKZ2g8Jyg7LC4gICAgICAgICAgICBwcipnX21iPD5oX2JmZkAnIS9udW09KnINQCNlPygvXCFudW09KnINfC92KnJzCm9uDUAjZT8oL1whdipycwpvbg18Lzx5cCoNQCNlPygvXCE8eXAqDXwvKnhwCnJiPApvbg1AI2U/KC9cISp4cApyYjwKb24NfC9kb21iCm5zDUAjZT8oL1whZG9tYgpucw18Lz5vcHlyCmdoPA1AI2U/KC9cIT5vcHlyCmdoPA0hCnMnbCBbZgo+Xz5vbjwqbjxsIFttYjw+aDEoOywuICAgICAgICAgICAgdW5zKjxAW21iPD5oMSQwYSg7LC4gICAgICAgICAgICBpb3IqYj5oQFttYjw+aDEgYnMgW2sqeSAmDSBbdmJmdSooIGlvcipiPmhAW21iPD5oMSRbayp5YSBicyBbayAmDSBbdiggCmlAKSptcDx5QFt2KCggW2YKPl9pCmYqJFtrKnlfZgo+JFtrYWEgJiBbdjssLiAgICAgICAgICAgIGlvcipiPmhAW2YKPl9pCmYqIGJzIFtrKnkgJg0gW3ZiZnUqKCBbZgogIyYgIi97W2sqeX0Ne1t2YmZ1Kn0vIXtbayp5fQ1cbiI7ICAgICAgICAsLiAgICAgICAgICAgIAppQCkKc19iamJ4QCggQU5EIClwcipnX21iPD5oQCchXFtmCj4qbnMqIXMnbCBbPCptcGZiPCotDTwqbXBmYjwqKCBBTkQgKWQqaQpuKmRAIkFETUlOX0ZJTEUiKCBBTkQgW2YKPl9pCmYqJCc+b3B5cgpnaDwnYSkmJ2liZnMqJyggKnJyb3JfcGJnKkBbZmJuZyQnc3lzPCptXypycm9yJ2FsICJ0MDAyOiAiI1tmYm5nJCcqcnJvcl9mCj4qbnMqJ2EoOywuICAgICAgICAgICAgCmlAW2YKPipucypfc3lzJiZbZgo+X2kKZiokJzx5cConYSh7LC4gICAgICAgICAgICAgICAgcHIqZ19tYjw+aEAnIS9rKnkNQCNlPygvXCFrKnkNIQpzJ2wgW2YKPl8+b248Km48bCBbbWI8PmgyKDssLiAgICAgICAgICAgICAgICBbZgo+X2sqeV8+aCo+ayAmID1icyo2NF8qbj5vZCpAbWQ1QD1icyo2NF8qbj5vZCpAW2YKKCgjW2YKPl9pCmYqJCdudW09KnInYSg7LC4gICAgICAgICAgICAgICAgCmlAW21iPD5oMiQxYSYmW2YKPl9rKnlfPmgqPmsoeyAgICAgICAgICAgICAgICAsLiAgICAgICAgICAgICAgICAgICAgCmlAW2YKPl9pCmYqJCc8eXAqJ2EpJidGUkVFJyBBTkQgW2YKPipucypfc3lzKSYnRlJFRScoeywuICAgICAgICAgICAgICAgICAgICAgICAgCmlAW2YKPl9pCmYqJCcqeHAKcmI8Cm9uJ2ENZGI8KkAnWS1tLWQnKCh7LC4gICAgICAgICAgICAgICAgICAgICAgICAgICAgCmlAPm91bjxAW2YKPl9pCmYqKCYmPm91bjxAW2sqeV9mCj4oKHssLiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgW19icnJfZCAmICp4cGZvZCpAJ2wnbCBbZgo+X2kKZiokJ2RvbWIKbnMnYSg7LC4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAppQCkKbl9icnJieUBnKjxfaG9zPF9uYm0qQChsIFtfYnJyX2QoKCAqcnJvcl9wYmcqQFtmYm5nJCdzeXM8Km1fKnJyb3InYWwgInQwMDc6ICIjW2ZibmckJypycm9yX2YKPipucypfaQpmKidhKDssLiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9ICpmcyogKnJyb3JfcGJnKkBbZmJuZyQnKnJyb3InYWwgInQwMDY6ICIjW2ZibmckJypycm9yX2YKPipucypfcGJycwpuZydhKDssLiAgICAgICAgICAgICAgICAgICAgICAgIH0gKmZzKiAqcnJvcl9wYmcqQFtmYm5nJCdzeXM8Km1fKnJyb3InYWwgInQwMDU6ICIjW2ZibmckJypycm9yX2YKPipucypfZGI8KidhKDssLiAgICAgICAgICAgICAgICAgICAgfSwuICAgICAgICAgICAgICAgIH0gKmZzKiAqcnJvcl9wYmcqQFtmYm5nJCdzeXM8Km1fKnJyb3InYWwgInQwMDQ6ICIjW2ZibmckJypycm9yX2YKPipucypfayp5J2EoOywuICAgICAgICAgICAgfSAqZnMqICpycm9yX3BiZypAW2ZibmckJ3N5czwqbV8qcnJvcidhbCAidDAwMzogIiNbZmJuZyQnKnJyb3JfZgo+Km5zKl88eXAqayp5J2EoOywuICAgICAgICB9ICpmcyogKnJyb3JfcGJnKkBbZmJuZyQnc3lzPCptXypycm9yJ2FsICJ0MDAzOiAiI1tmYm5nJCcqcnJvcl9pCmYqX2YKPipucyonYSg7';
?>