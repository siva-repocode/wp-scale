<?php exit; ?>{
    "version": "2.8.10",
    "cluster.messagebus.debug": false,
    "cluster.messagebus.enabled": false,
    "cluster.messagebus.sns.region": "",
    "cluster.messagebus.sns.api_key": "",
    "cluster.messagebus.sns.api_secret": "",
    "cluster.messagebus.sns.topic_arn": "",
    "dbcache.configuration_overloaded": false,
    "dbcache.debug": false,
    "dbcache.debug_purge": false,
    "dbcache.enabled": false,
    "dbcache.engine": "file",
    "dbcache.file.gc": 3600,
    "dbcache.file.locking": false,
    "dbcache.lifetime": 180,
    "dbcache.memcached.persistent": true,
    "dbcache.memcached.aws_autodiscovery": false,
    "dbcache.memcached.servers": [
        "127.0.0.1:11211"
    ],
    "dbcache.memcached.username": "",
    "dbcache.memcached.password": "",
    "dbcache.memcached.binary_protocol": true,
    "dbcache.redis.persistent": true,
    "dbcache.redis.servers": [
        "127.0.0.1:6379"
    ],
    "dbcache.redis.verify_tls_certificates": true,
    "dbcache.redis.password": "",
    "dbcache.redis.dbid": 0,
    "dbcache.redis.timeout": 0,
    "dbcache.redis.retry_interval": 0,
    "dbcache.redis.read_timeout": 0,
    "dbcache.use_filters": false,
    "dbcache.reject.constants": [
        "APP_REQUEST",
        "DOING_CRON",
        "DONOTCACHEDB",
        "SHORTINIT",
        "XMLRPC_REQUEST"
    ],
    "dbcache.reject.cookie": [],
    "dbcache.reject.logged": true,
    "dbcache.reject.sql": [
        "gdsr_",
        "wp_rg_",
        "_wp_session_",
        "_wc_session_"
    ],
    "dbcache.reject.uri": [],
    "dbcache.reject.words": [
        "^\\s*insert\\b",
        "^\\s*delete\\b",
        "^\\s*update\\b",
        "^\\s*replace\\b",
        "^\\s*create\\b",
        "^\\s*alter\\b",
        "^\\s*show\\b",
        "^\\s*set\\b",
        "\\bautoload\\s+=\\s+'yes'",
        "\\bsql_calc_found_rows\\b",
        "\\bfound_rows\\(\\)"
    ],
    "dbcache.wpcli_disk": false,
    "docroot_fix.enable": false,
    "lazyload.enabled": false,
    "lazyload.threshold": "",
    "lazyload.process_img": true,
    "lazyload.process_background": true,
    "lazyload.googlemaps.google_maps_easy": false,
    "lazyload.googlemaps.wp_google_maps": false,
    "lazyload.googlemaps.wp_google_map_plugin": false,
    "lazyload.exclude": [
        "avia-bg-style-fixed",
        "data-bgposition=",
        "data-envira-src=",
        "data-large_image=",
        "data-lazy-original=",
        "data-lazy-src=",
        "data-lazyload=",
        "data-lazysrc=",
        "data-no-lazy=",
        "data-src=",
        "data-srcset=",
        "fullurl=",
        "lazy-slider-img=",
        "loading=\"eager\"",
        "no-lazy",
        "rev-slidebg",
        "skip-lazy",
        "soliloquy-image",
        "swatch-img",
        "w3-total-cache",
        "woocommerce\/assets\/images\/placeholder.png",
        "wpcf7_captcha"
    ],
    "lazyload.embed_method": "async_head",
    "objectcache.configuration_overloaded": false,
    "objectcache.enabled": false,
    "objectcache.debug": false,
    "objectcache.debug_purge": false,
    "objectcache.file.gc": 600,
    "objectcache.enabled_for_wp_admin": false,
    "objectcache.fallback_transients": true,
    "objectcache.engine": "file",
    "objectcache.file.locking": false,
    "objectcache.memcached.servers": [
        "127.0.0.1:11211"
    ],
    "objectcache.memcached.persistent": true,
    "objectcache.memcached.aws_autodiscovery": false,
    "objectcache.memcached.username": "",
    "objectcache.memcached.password": "",
    "objectcache.memcached.binary_protocol": true,
    "objectcache.redis.persistent": true,
    "objectcache.redis.servers": [
        "127.0.0.1:6379"
    ],
    "objectcache.redis.verify_tls_certificates": true,
    "objectcache.redis.password": "",
    "objectcache.redis.dbid": 0,
    "objectcache.redis.timeout": 0,
    "objectcache.redis.retry_interval": 0,
    "objectcache.redis.read_timeout": 0,
    "objectcache.groups.global": [],
    "objectcache.groups.nonpersistent": [
        "counts",
        "plugins"
    ],
    "objectcache.lifetime": 180,
    "objectcache.purge.all": false,
    "objectcache.wpcli_disk": false,
    "pgcache.configuration_overloaded": false,
    "pgcache.enabled": false,
    "pgcache.comment_cookie_ttl": 1800,
    "pgcache.debug": false,
    "pgcache.debug_purge": false,
    "pgcache.engine": "file_generic",
    "pgcache.file.gc": 3600,
    "pgcache.file.nfs": false,
    "pgcache.file.locking": false,
    "pgcache.lifetime": 3600,
    "pgcache.memcached.servers": [
        "127.0.0.1:11211"
    ],
    "pgcache.memcached.persistent": true,
    "pgcache.memcached.aws_autodiscovery": false,
    "pgcache.memcached.username": "",
    "pgcache.memcached.password": "",
    "pgcache.memcached.binary_protocol": true,
    "pgcache.redis.persistent": true,
    "pgcache.redis.servers": [
        "127.0.0.1:6379"
    ],
    "pgcache.redis.verify_tls_certificates": true,
    "pgcache.redis.password": "",
    "pgcache.redis.dbid": 0,
    "pgcache.redis.timeout": 0,
    "pgcache.redis.retry_interval": 0,
    "pgcache.redis.read_timeout": 0,
    "pgcache.cache.query": false,
    "pgcache.cache.home": true,
    "pgcache.cache.feed": false,
    "pgcache.cache.nginx_handle_xml": true,
    "pgcache.cache.ssl": true,
    "pgcache.cache.404": false,
    "pgcache.cache.headers": [
        "Last-Modified",
        "Content-Type",
        "X-Pingback",
        "P3P",
        "Link"
    ],
    "pgcache.compatibility": false,
    "pgcache.remove_charset": false,
    "pgcache.accept.uri": [
        "sitemap(_index)?\\.xml(\\.gz)?",
        "([a-z0-9_\\-]+)?sitemap\\.xsl",
        "[a-z0-9_\\-]+-sitemap([0-9]+)?\\.xml(\\.gz)?"
    ],
    "pgcache.accept.files": [
        "wp-comments-popup.php",
        "wp-links-opml.php",
        "wp-locations.php"
    ],
    "pgcache.accept.qs": [
        "ScCid",
        "_branch_match_id",
        "_bta_c",
        "_bta_tid",
        "_ga",
        "_gl",
        "_ke",
        "adgroupid",
        "adid",
        "age-verified",
        "ao_noptimize",
        "campaignid",
        "campid",
        "click_id",
        "cn-reloaded",
        "customid",
        "dicbo",
        "dm_i",
        "ef_id",
        "epik",
        "fb_action_ids",
        "fb_action_types",
        "fb_source",
        "fbclid",
        "gclid",
        "gclsrc",
        "gdffi",
        "gdfms",
        "gdftrk",
        "hsa_acc",
        "hsa_ad",
        "hsa_cam",
        "hsa_grp",
        "hsa_kw",
        "hsa_mt",
        "hsa_net",
        "hsa_src",
        "hsa_tgt",
        "hsa_ver",
        "igshid",
        "li_fat_id",
        "matomo_campaign",
        "matomo_cid",
        "matomo_content",
        "matomo_group",
        "matomo_keyword",
        "matomo_medium",
        "matomo_placement",
        "matomo_source",
        "mc_cid",
        "mc_eid",
        "mkcid",
        "mkevt",
        "mkrid",
        "mkwid",
        "msclkid",
        "mtm_campaign",
        "mtm_cid",
        "mtm_content",
        "mtm_group",
        "mtm_keyword",
        "mtm_medium",
        "mtm_placement",
        "mtm_source",
        "pcrid",
        "piwik_campaign",
        "piwik_keyword",
        "piwik_kwd",
        "pk_campaign",
        "pk_cid",
        "pk_content",
        "pk_keyword",
        "pk_kwd",
        "pk_medium",
        "pk_source",
        "pp",
        "redirect_log_mongo_id",
        "redirect_mongo_id",
        "ref",
        "s_kwcid",
        "sb_referer_host",
        "si",
        "sscid",
        "tblci",
        "toolid",
        "trk_contact",
        "trk_module",
        "trk_msg",
        "trk_sid",
        "ttclid",
        "twclid",
        "usqp",
        "utm_campaign",
        "utm_content",
        "utm_expid",
        "utm_id",
        "utm_medium",
        "utm_source",
        "utm_term",
        "wbraid"
    ],
    "pgcache.migrated.qsexempts": 1753385333,
    "pgcache.late_init": false,
    "pgcache.late_caching": false,
    "pgcache.mirrors.enabled": false,
    "pgcache.mirrors.home_urls": [],
    "pgcache.reject.front_page": false,
    "pgcache.reject.logged": true,
    "pgcache.reject.logged_roles": false,
    "pgcache.reject.roles": [],
    "pgcache.reject.uri": [
        "wp-.*\\.php",
        "index\\.php"
    ],
    "pgcache.reject.categories": [],
    "pgcache.reject.tags": [],
    "pgcache.reject.authors": [],
    "pgcache.reject.custom": [],
    "pgcache.reject.ua": [],
    "pgcache.reject.cookie": [
        "wptouch_switch_toggle"
    ],
    "pgcache.reject.request_head": false,
    "pgcache.purge.front_page": false,
    "pgcache.purge.home": true,
    "pgcache.purge.post": true,
    "pgcache.purge.comments": false,
    "pgcache.purge.author": false,
    "pgcache.purge.terms": false,
    "pgcache.purge.archive.daily": false,
    "pgcache.purge.archive.monthly": false,
    "pgcache.purge.archive.yearly": false,
    "pgcache.purge.feed.blog": true,
    "pgcache.purge.feed.comments": false,
    "pgcache.purge.feed.author": false,
    "pgcache.purge.feed.terms": false,
    "pgcache.purge.feed.types": [
        "rss2"
    ],
    "pgcache.purge.postpages_limit": 10,
    "pgcache.purge.pages": [],
    "pgcache.purge.sitemap_regex": "([a-z0-9_\\-]*?)sitemap([a-z0-9_\\-]*)?\\.(?:xml|xsl)",
    "pgcache.prime.enabled": false,
    "pgcache.prime.interval": 900,
    "pgcache.prime.limit": 10,
    "pgcache.prime.sitemap": "",
    "pgcache.prime.post.enabled": false,
    "pgcache.prime.post.update.enabled": false,
    "pgcache.rest": "",
    "pgcache.cookiegroups.enabled": false,
    "pgcache.cookiegroups.groups": {
        "mobile": {
            "enabled": false,
            "cache": true,
            "cookies": [
                "wptouch-pro-view=mobile",
                "wptouch-pro-cache-state=mobile"
            ]
        },
        "loggedin": {
            "enabled": false,
            "cache": true,
            "cookies": [
                "wordpress_logged_in_.*"
            ]
        },
        "subscribers": {
            "enabled": false,
            "cache": true,
            "cookies": [
                "role=subscriber",
                "role=member"
            ]
        }
    },
    "stats.enabled": false,
    "stats.slot_seconds": 60,
    "stats.slots_count": 60,
    "stats.cpu.enabled": false,
    "stats.access_log.enabled": false,
    "stats.access_log.filename": "",
    "stats.access_log.format": "$remote_addr - $remote_user [$time_local] \"$request\" $status $body_bytes_sent \"$http_referer\" \"$http_user_agent\"",
    "stats.access_log.webserver": "nginx",
    "minify.configuration_overloaded": false,
    "minify.enabled": false,
    "minify.auto": true,
    "minify.debug": false,
    "minify.engine": "file",
    "minify.error.notification": "",
    "minify.file.gc": 86400,
    "minify.file.nfs": false,
    "minify.file.locking": false,
    "minify.memcached.servers": [
        "127.0.0.1:11211"
    ],
    "minify.memcached.persistent": true,
    "minify.memcached.aws_autodiscovery": false,
    "minify.memcached.username": "",
    "minify.memcached.password": "",
    "minify.memcached.binary_protocol": true,
    "minify.redis.persistent": true,
    "minify.redis.servers": [
        "127.0.0.1:6379"
    ],
    "minify.redis.verify_tls_certificates": true,
    "minify.redis.password": "",
    "minify.redis.dbid": 0,
    "minify.redis.timeout": 0,
    "minify.redis.retry_interval": 0,
    "minify.redis.read_timeout": 0,
    "minify.rewrite": true,
    "minify.options": [],
    "minify.symlinks": [],
    "minify.lifetime": 86400,
    "minify.upload": true,
    "minify.html.enable": false,
    "minify.html.engine": "html",
    "minify.html.reject.feed": false,
    "minify.html.inline.css": false,
    "minify.html.inline.js": false,
    "minify.html.strip.crlf": false,
    "minify.html.comments.ignore": [
        "google_ad_",
        "RSPEAK_",
        "mfunc"
    ],
    "minify.css.enable": true,
    "minify.css.engine": "css",
    "minify.css.method": "both",
    "minify.css.http2push": false,
    "minify.css.strip.comments": false,
    "minify.css.strip.crlf": false,
    "minify.css.embed": false,
    "minify.css.imports": "",
    "minify.css.groups": [],
    "minify.js.http2push": false,
    "minify.js.enable": true,
    "minify.js.engine": "js",
    "minify.js.method": "both",
    "minify.js.combine.header": false,
    "minify.js.header.embed_type": "blocking",
    "minify.js.combine.body": false,
    "minify.js.body.embed_type": "blocking",
    "minify.js.combine.footer": false,
    "minify.js.footer.embed_type": "blocking",
    "minify.js.strip.comments": false,
    "minify.js.strip.crlf": false,
    "minify.js.groups": [],
    "minify.yuijs.path.java": "java",
    "minify.yuijs.path.jar": "yuicompressor.jar",
    "minify.yuijs.options.line-break": 5000,
    "minify.yuijs.options.nomunge": false,
    "minify.yuijs.options.preserve-semi": false,
    "minify.yuijs.options.disable-optimizations": false,
    "minify.yuicss.path.java": "java",
    "minify.yuicss.path.jar": "yuicompressor.jar",
    "minify.yuicss.options.line-break": 5000,
    "minify.ccjs.path.java": "java",
    "minify.ccjs.path.jar": "compiler.jar",
    "minify.ccjs.options.compilation_level": "SIMPLE_OPTIMIZATIONS",
    "minify.ccjs.options.formatting": "",
    "minify.csstidy.options.remove_bslash": true,
    "minify.csstidy.options.compress_colors": false,
    "minify.csstidy.options.compress_font-weight": false,
    "minify.csstidy.options.lowercase_s": false,
    "minify.csstidy.options.optimise_shorthands": 0,
    "minify.csstidy.options.remove_last_;": false,
    "minify.csstidy.options.remove_space_before_important": false,
    "minify.csstidy.options.case_properties": 1,
    "minify.csstidy.options.sort_properties": false,
    "minify.csstidy.options.sort_selectors": false,
    "minify.csstidy.options.merge_selectors": 0,
    "minify.csstidy.options.discard_invalid_selectors": false,
    "minify.csstidy.options.discard_invalid_properties": false,
    "minify.csstidy.options.css_level": "CSS3.0",
    "minify.csstidy.options.preserve_css": false,
    "minify.csstidy.options.timestamp": false,
    "minify.csstidy.options.template": "highest_compression",
    "minify.htmltidy.options.clean": false,
    "minify.htmltidy.options.hide-comments": true,
    "minify.htmltidy.options.wrap": 0,
    "minify.reject.logged": false,
    "minify.reject.ua": [],
    "minify.reject.uri": [],
    "minify.reject.files.js": [],
    "minify.reject.files.css": [],
    "minify.cache.files": [
        ""
    ],
    "minify.cache.files_regexp": false,
    "cdn.configuration_overloaded": false,
    "cdn.enabled": false,
    "cdn.debug": false,
    "cdn.flush_manually": false,
    "cdn.engine": "",
    "cdn.uploads.enable": true,
    "cdn.includes.enable": true,
    "cdn.includes.files": "*.css;*.js;*.gif;*.png;*.jpg;*.xml",
    "cdn.theme.enable": true,
    "cdn.theme.files": "*.css;*.js;*.gif;*.png;*.jpg;*.ico;*.ttf;*.otf;*.woff;*.woff2;*.less",
    "cdn.minify.enable": true,
    "cdn.custom.enable": true,
    "cdn.custom.files": [
        "favicon.ico",
        "{wp_content_dir}\/gallery\/*",
        "{wp_content_dir}\/uploads\/avatars\/*",
        "{plugins_dir}\/wordpress-seo\/css\/xml-sitemap.xsl",
        "{plugins_dir}\/wp-minify\/min*",
        "{plugins_dir}\/*.js",
        "{plugins_dir}\/*.css",
        "{plugins_dir}\/*.gif",
        "{plugins_dir}\/*.jpg",
        "{plugins_dir}\/*.png"
    ],
    "cdn.import.files": false,
    "cdn.queue.interval": 900,
    "cdn.queue.limit": 25,
    "cdn.force.rewrite": false,
    "cdn.autoupload.enabled": false,
    "cdn.autoupload.interval": 3600,
    "cdn.canonical_header": false,
    "cdn.admin.media_library": false,
    "cdn.cors_header": true,
    "cdn.ftp.host": "",
    "cdn.ftp.type": "",
    "cdn.ftp.user": "",
    "cdn.ftp.pass": "",
    "cdn.ftp.path": "",
    "cdn.ftp.pasv": false,
    "cdn.ftp.domain": [],
    "cdn.ftp.ssl": "auto",
    "cdn.ftp.default_keys": true,
    "cdn.ftp.pubkey": "",
    "cdn.ftp.privkey": "",
    "cdn.google_drive.client_id": "",
    "cdn.google_drive.refresh_token": "",
    "cdn.google_drive.folder.id": "",
    "cdn.google_drive.folder.title": "",
    "cdn.google_drive.folder.url": "",
    "cdn.s3.key": "",
    "cdn.s3.secret": "",
    "cdn.s3.bucket": "",
    "cdn.s3.bucket.location": "us-east-1",
    "cdn.s3.cname": [],
    "cdn.s3.ssl": "auto",
    "cdn.s3.public_objects": "enabled",
    "cdn.s3_compatible.api_host": "auto",
    "cdn.cf.key": "",
    "cdn.cf.secret": "",
    "cdn.cf.bucket": "",
    "cdn.cf.bucket.location": "us-east-1",
    "cdn.cf.id": "",
    "cdn.cf.cname": [],
    "cdn.cf.ssl": "auto",
    "cdn.cf.public_objects": "enabled",
    "cdn.cf2.key": "",
    "cdn.cf2.secret": "",
    "cdn.cf2.id": "",
    "cdn.cf2.cname": [],
    "cdn.cf2.ssl": "",
    "cdn.rscf.user": "",
    "cdn.rscf.key": "",
    "cdn.rscf.location": "us",
    "cdn.rscf.container": "",
    "cdn.rscf.cname": [],
    "cdn.rscf.ssl": "auto",
    "cdn.rackspace_cdn.user_name": "",
    "cdn.rackspace_cdn.api_key": "",
    "cdn.rackspace_cdn.region": "",
    "cdn.rackspace_cdn.service.access_url": "",
    "cdn.rackspace_cdn.service.id": "",
    "cdn.rackspace_cdn.service.name": "",
    "cdn.rackspace_cdn.service.protocol": "http",
    "cdn.rackspace_cdn.domains": [],
    "cdn.azure.user": "",
    "cdn.azure.key": "",
    "cdn.azure.container": "",
    "cdn.azure.cname": [],
    "cdn.azure.ssl": "auto",
    "cdn.azuremi.user": "",
    "cdn.azuremi.clientid": "",
    "cdn.azuremi.container": "",
    "cdn.azuremi.cname": [],
    "cdn.azuremi.ssl": "auto",
    "cdn.mirror.domain": [],
    "cdn.mirror.ssl": "auto",
    "cdn.cotendo.username": "",
    "cdn.cotendo.password": "",
    "cdn.cotendo.zones": [],
    "cdn.cotendo.domain": [],
    "cdn.cotendo.ssl": "auto",
    "cdn.akamai.username": "",
    "cdn.akamai.password": "",
    "cdn.akamai.email_notification": [],
    "cdn.akamai.action": "invalidate",
    "cdn.akamai.zone": "production",
    "cdn.akamai.domain": [],
    "cdn.akamai.ssl": "auto",
    "cdn.edgecast.account": "",
    "cdn.edgecast.token": "",
    "cdn.edgecast.domain": [],
    "cdn.edgecast.ssl": "auto",
    "cdn.att.account": "",
    "cdn.att.token": "",
    "cdn.att.domain": [],
    "cdn.att.ssl": "auto",
    "cdn.reject.admins": false,
    "cdn.reject.logged_roles": false,
    "cdn.reject.roles": [],
    "cdn.reject.ua": [],
    "cdn.reject.uri": [],
    "cdn.reject.files": [
        "{uploads_dir}\/wpcf7_captcha\/*",
        "{uploads_dir}\/imagerotator.swf",
        "{plugins_dir}\/wp-fb-autoconnect\/facebook-platform\/channel.html"
    ],
    "cdn.reject.ssl": false,
    "cdnfsd.enabled": false,
    "cdnfsd.engine": "",
    "cdnfsd.debug": false,
    "cdnfsd.cloudfront.access_key": "",
    "cdnfsd.cloudfront.secret_key": "",
    "cdnfsd.cloudfront.distribution_id": "",
    "cdnfsd.transparentcdn.client_id": "",
    "cdnfsd.transparentcdn.client_secret": "",
    "cdnfsd.transparentcdn.company_id": "",
    "varnish.configuration_overloaded": false,
    "varnish.enabled": false,
    "varnish.debug": false,
    "varnish.servers": [],
    "browsercache.configuration_overloaded": false,
    "browsercache.enabled": true,
    "browsercache.rewrite": false,
    "browsercache.no404wp": false,
    "browsercache.no404wp.exceptions": [
        "robots\\.txt",
        "[a-z0-9_\\-]*sitemap[a-z0-9_\\.\\-]*\\.(xml|xsl|html)(\\.gz)?"
    ],
    "browsercache.cssjs.last_modified": true,
    "browsercache.cssjs.compression": true,
    "browsercache.cssjs.brotli": false,
    "browsercache.cssjs.expires": true,
    "browsercache.cssjs.lifetime": 31536000,
    "browsercache.cssjs.nocookies": true,
    "browsercache.cssjs.cache.control": false,
    "browsercache.cssjs.cache.policy": "cache_public_maxage",
    "browsercache.cssjs.etag": true,
    "browsercache.cssjs.w3tc": false,
    "browsercache.cssjs.replace": false,
    "browsercache.cssjs.querystring": false,
    "browsercache.html.compression": true,
    "browsercache.html.brotli": false,
    "browsercache.html.last_modified": true,
    "browsercache.html.expires": false,
    "browsercache.html.lifetime": 3600,
    "browsercache.html.cache.control": false,
    "browsercache.html.cache.policy": "cache_public_maxage",
    "browsercache.html.etag": true,
    "browsercache.html.w3tc": false,
    "browsercache.html.replace": false,
    "browsercache.other.last_modified": true,
    "browsercache.other.compression": true,
    "browsercache.other.brotli": false,
    "browsercache.other.expires": true,
    "browsercache.other.lifetime": 31536000,
    "browsercache.other.nocookies": true,
    "browsercache.other.cache.control": false,
    "browsercache.other.cache.policy": "cache_public_maxage",
    "browsercache.other.etag": true,
    "browsercache.other.w3tc": false,
    "browsercache.other.replace": false,
    "browsercache.other.querystring": false,
    "browsercache.replace.exceptions": [],
    "browsercache.security.session.cookie_httponly": "",
    "browsercache.security.session.cookie_secure": "",
    "browsercache.security.session.use_only_cookies": "",
    "browsercache.hsts": false,
    "browsercache.security.hsts.directive": "maxage",
    "browsercache.security.xfo": false,
    "browsercache.security.xfo.directive": "same",
    "browsercache.security.xfo.allow": "",
    "browsercache.security.xss": false,
    "browsercache.security.xss.directive": "block",
    "browsercache.security.xcto": false,
    "browsercache.security.pkp": false,
    "browsercache.security.pkp.pin": "",
    "browsercache.security.pkp.pin.backup": "",
    "browsercache.security.pkp.extra": "maxage",
    "browsercache.security.pkp.report.url": "",
    "browsercache.security.pkp.report.only": "0",
    "browsercache.security.referrer.policy": "false",
    "browsercache.security.referrer.policy.directive": "no-referrer-when-downgrade",
    "browsercache.security.csp": false,
    "browsercache.security.csp.reporturi": "",
    "browsercache.security.csp.reportto": "",
    "browsercache.security.csp.base": "",
    "browsercache.security.csp.frame": "",
    "browsercache.security.csp.connect": "",
    "browsercache.security.csp.font": "",
    "browsercache.security.csp.script": "",
    "browsercache.security.csp.style": "",
    "browsercache.security.csp.img": "",
    "browsercache.security.csp.media": "",
    "browsercache.security.csp.object": "",
    "browsercache.security.csp.plugin": "",
    "browsercache.security.csp.form": "",
    "browsercache.security.csp.frame.ancestors": "",
    "browsercache.security.csp.sandbox": "",
    "browsercache.security.csp.child": "",
    "browsercache.security.csp.manifest": "",
    "browsercache.security.csp.scriptelem": "",
    "browsercache.security.csp.scriptattr": "",
    "browsercache.security.csp.styleelem": "",
    "browsercache.security.csp.styleattr": "",
    "browsercache.security.csp.worker": "",
    "browsercache.security.csp.default": "",
    "browsercache.security.cspro": false,
    "browsercache.security.cspro.reporturi": "",
    "browsercache.security.cspro.reportto": "",
    "browsercache.security.cspro.base": "",
    "browsercache.security.cspro.frame": "",
    "browsercache.security.cspro.connect": "",
    "browsercache.security.cspro.font": "",
    "browsercache.security.cspro.script": "",
    "browsercache.security.cspro.style": "",
    "browsercache.security.cspro.img": "",
    "browsercache.security.cspro.media": "",
    "browsercache.security.cspro.object": "",
    "browsercache.security.cspro.plugin": "",
    "browsercache.security.cspro.form": "",
    "browsercache.security.cspro.frame.ancestors": "",
    "browsercache.security.cspro.sandbox": "",
    "browsercache.security.cspro.child": "",
    "browsercache.security.cspro.manifest": "",
    "browsercache.security.cspro.scriptelem": "",
    "browsercache.security.cspro.scriptattr": "",
    "browsercache.security.cspro.styleelem": "",
    "browsercache.security.cspro.styleattr": "",
    "browsercache.security.cspro.worker": "",
    "browsercache.security.cspro.default": "",
    "browsercache.security.fp": false,
    "browsercache.security.fp.values": [],
    "mobile.configuration_overloaded": false,
    "mobile.enabled": false,
    "mobile.rgroups": {
        "tablets": {
            "theme": "",
            "enabled": false,
            "redirect": "",
            "agents": [
                "a1-32ab0",
                "a210",
                "a211",
                "b6000-h",
                "b8000-h",
                "bnrv200",
                "bntv400",
                "darwin",
                "gt-n8005",
                "gt-p3105",
                "gt-p6810",
                "gt-p7510",
                "hmj37",
                "hp-tablet",
                "hp\\sslate",
                "hp\\sslatebook",
                "ht7s3",
                "ideatab_a1107",
                "ideataba2109a",
                "ideos\\ss7",
                "imm76d",
                "ipad",
                "k00f",
                "kfjwi",
                "kfot",
                "kftt",
                "kindle",
                "l-06c",
                "lg-f200k",
                "lg-f200l",
                "lg-f200s",
                "m470bsa",
                "m470bse",
                "maxwell",
                "me173x",
                "mediapad",
                "midc497",
                "msi\\senjoy\\s10\\splus",
                "mz601",
                "mz616",
                "nexus",
                "nookcolor",
                "pg09410",
                "pg41200",
                "pmp5570c",
                "pmp5588c",
                "pocketbook",
                "qmv7a",
                "sgp311",
                "sgpt12",
                "shv-e230k",
                "shw-m305w",
                "shw-m380w",
                "sm-p605",
                "smarttab",
                "sonysgp321",
                "sph-p500",
                "surfpad",
                "tab07-200",
                "tab10-201",
                "tab465euk",
                "tab474",
                "tablet",
                "tegranote",
                "tf700t",
                "thinkpad",
                "viewpad",
                "voltaire"
            ]
        },
        "phones": {
            "theme": "",
            "enabled": false,
            "redirect": "",
            "agents": [
                "(android|bb\\d+|meego).+mobile",
                "240x320",
                "2.0\\ mmp",
                "\\bppc\\b",
                "acer\\ s100",
                "alcatel",
                "amoi",
                "archos5",
                "asus",
                "au-mic",
                "audiovox",
                "avantgo",
                "bada",
                "benq",
                "bird",
                "blackberry",
                "blazer",
                "cdm",
                "cellphone",
                "cupcake",
                "danger",
                "ddipocket",
                "docomo",
                "docomo\\ ht-03a",
                "dopod",
                "dream",
                "elaine\/3.0",
                "ericsson",
                "eudoraweb",
                "fly",
                "froyo",
                "googlebot-mobile",
                "haier",
                "hiptop",
                "hp.ipaq",
                "htc",
                "htc\\ hero",
                "htc\\ magic",
                "htc_dream",
                "htc_magic",
                "huawei",
                "i-mobile",
                "iemobile",
                "iemobile\/7",
                "iemobile\/7.0",
                "iemobile\/9",
                "incognito",
                "iphone",
                "ipod",
                "j-phone",
                "kddi",
                "konka",
                "kwc",
                "kyocera\/wx310k",
                "lenovo",
                "lg",
                "lg\/u990",
                "lg-gw620",
                "lge\\ vx",
                "liquid\\ build",
                "maemo",
                "midp",
                "midp-2.0",
                "mmef20",
                "mmp",
                "mobilephone",
                "mot-mb200",
                "mot-mb300",
                "mot-v",
                "motorola",
                "msie\\ 10.0",
                "netfront",
                "newgen",
                "newt",
                "nexus\\ 7",
                "nexus\\ one",
                "nintendo\\ ds",
                "nintendo\\ wii",
                "nitro",
                "nokia",
                "novarra",
                "openweb",
                "opera\\ mini",
                "opera\\ mobi",
                "opera.mobi",
                "p160u",
                "palm",
                "panasonic",
                "pantech",
                "pdxgw",
                "pg",
                "philips",
                "phone",
                "playbook",
                "playstation\\ portable",
                "portalmmm",
                "proxinet",
                "psp",
                "qtek",
                "s8000",
                "sagem",
                "samsung",
                "samsung-s8000",
                "sanyo",
                "sch",
                "sch-i800",
                "sec",
                "sendo",
                "series60.*webkit",
                "series60\/5.0",
                "sgh",
                "sharp",
                "sharp-tq-gx10",
                "small",
                "smartphone",
                "softbank",
                "sonyericsson",
                "sonyericssone10",
                "sonyericssonu20",
                "sonyericssonx10",
                "sph",
                "symbian",
                "symbian\\ os",
                "symbianos",
                "t-mobile\\ mytouch\\ 3g",
                "t-mobile\\ opal",
                "tattoo",
                "toshiba",
                "touch",
                "treo",
                "ts21i-10",
                "up.browser",
                "up.link",
                "uts",
                "vertu",
                "vodafone",
                "wap",
                "webmate",
                "webos",
                "willcome",
                "windows\\ ce",
                "windows.ce",
                "winwap",
                "xda",
                "xoom",
                "zte"
            ]
        }
    },
    "referrer.configuration_overloaded": false,
    "referrer.enabled": false,
    "referrer.rgroups": {
        "search_engines": {
            "theme": "",
            "enabled": false,
            "redirect": "",
            "referrers": [
                "google\\.com",
                "yahoo\\.com",
                "bing\\.com",
                "ask\\.com",
                "msn\\.com"
            ]
        }
    },
    "common.track_usage": true,
    "common.tweeted": false,
    "config.check": true,
    "config.path": "",
    "widget.latest.items": 3,
    "widget.latest_news.items": 5,
    "widget.pagespeed.access_token": "",
    "widget.pagespeed.w3tc_pagespeed_key": "",
    "timelimit.email_send": 180,
    "timelimit.varnish_purge": 300,
    "timelimit.cache_flush": 600,
    "timelimit.cache_gc": 600,
    "timelimit.cdn_upload": 600,
    "timelimit.cdn_delete": 300,
    "timelimit.cdn_purge": 300,
    "timelimit.cdn_import": 600,
    "timelimit.cdn_test": 300,
    "timelimit.domain_rename": 120,
    "timelimit.minify_recommendations": 600,
    "common.instance_id": 2459687645,
    "common.force_master": true,
    "extensions.active": [],
    "extensions.active_frontend": [],
    "extensions.active_dropin": [],
    "plugin.license_key": "",
    "plugin.type": "",
    "jquerymigrate.disabled": false,
    "imageservice": {
        "compression": "lossy",
        "auto": "enabled",
        "visibility": "never"
    },
    "imageservice.configuration_overloaded": true,
    "fragmentcache": {
        "engine": "file"
    }
}