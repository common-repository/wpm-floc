=== Disable FLoC ===
Contributors: wpmunich,luehrsen
Tags: privacy,floc,header,federated,cohorts,tracking,google,privacy,gdpr,dsgvo
Requires at least: 5.0
Tested up to: 5.7
Requires PHP: 7.2
License: GPLv2
License URI: https://www.gnu.de/documents/gpl-2.0.html
Stable tag: 1.3.3

A simple zero-config plugin to opt-out of Google "Federated Learning of Cohorts" (FLoC).

== Description ==
## Disable the tracking of your users with FLoC

**Federated Learning of Cohorts** (FLoC) is a replacement for third party cookies in chromium browsers like Chrome to target users with ads based on their interests. The proposed solution is better than using
third party cookies, but it still raises concerns in terms of privacy and data protection.

## How does this plugin work?

This plugin tells your WordPress system to send a special header that disables FLoC on your website. There is no configuration needed besides installing the plugin.

If you are a developer, we encourage you to follow along or [contribute](https://github.com/luehrsenheinrich/wpm-floc) to the development of this plugin [on GitHub](https://github.com/luehrsenheinrich/wpm-floc).

## More about FLoC
- [**The Verge** - What is FLoC on Chrome and why does it matter?](https://www.theverge.com/2021/3/30/22358287/privacy-ads-google-chrome-floc-cookies-cookiepocalypse-finger-printing)
- [**Web.dev** - What is Federated Learning of Cohorts (FLoC)?](https://web.dev/floc/)
- [**Adalytics.io** - Who is sharing data with Google's FLoC ad algorithm?](https://adalytics.io/blog/google-chrome-floc)
- [**Brave Browser** - Why Brave disables FLoC](https://brave.com/why-brave-disables-floc/)
- [The **WICG** Draft for FLoC](https://wicg.github.io/floc/)

## Blocking Methods

This plugin offers different methods implement the FLoC blocking HTTP header.

- **None / Allow FLoC**: This method does not provide an opt-out from FLoC.
- **Simple / PHP**: Works for most WordPress setups. Uses the "wp_headers" filter to provide the HTTP header.
- **Apache / .htaccess**: When you have to circumvent your cache. Only works on apache servers with the "mod_headers" module installed. Writes the HTTP header into the .htaccess file.

## Compatibility with Cache Plugins
This plugin relies on the ability to deliver HTTP headers to the browser. Some Cache Plugins actively strip these HTTP headers and therefore invalidate the purpose of this plugin.

These cache plugins are known to be compatible with the **Simple** method:

- [**WP Super Cache**](https://wordpress.org/plugins/wp-super-cache/) - You have to activate the "*Cache HTTP headers with page content.*" checkbox in the Advanced Tab of the WP Super Cache Settings.

== Installation ==
= From within WordPress =

1. Visit 'Plugins > Add New'
1. Search for 'Disable FLoC'
1. Activate the plugin from your Plugins page.

= Manually =

1. Upload the 'Disable FLoC' folder to the `/wp-content/plugins/` directory
1. Activate 'Disable FLoC' through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==
= How do I check if it is working? =
You can use the 'Check FLoC' link on the *[Plugins](https://wordpress.org/support/article/managing-plugins/)* screen in your WordPress administration. Alternatively use an external tool to crawl your page. On example of such an external tool is the [Uptrends HTTP response header check](https://www.uptrends.com/tools/http-response-header-check). With that tool you have to check if the "Permissions-Policy" header is present and if it contains the value *"interest-cohort=()"*.

= The plugin is active, but the header is not there. =
The most common issues come with caching plugins, that are often stripping headers. Make sure that HTTP Headers get cached with your site in the configuration of your page cache.

= Why should I install this plugin when I'm not using the Chrome browser? =
The plugin does not only stop your browser from tracking with FLoC, but also the browsers from all of your users. So you're not primarily installing the plugin for yourself, but for your users.

== Changelog ==

= 1.3.3 =
* Fixed a minor issue with a whitespace where it should not have been.

= 1.3.2 =
* Refactored the simple blocking method as suggested by @tjnowell in the FLoC discussion in *make core*.

= 1.3.0 =
* Added some proper settings found in the 'Reading' settings.
* Added help text to the 'Reading' page to explain these settings.
* Add the 'apache' method to disable FLoC in complicated hosting settings.

= 1.2.1 =
* Updated the asset art to better fit on social media.
* Resolved a deprecation for jQuery 'click'. (thanks @backups)

= 1.2.0 =
* Added a method to check presence of the FLoC header. The "Check FLoC" Button on your plugins page in wp-admin should do that for you.

= 1.1.1 =
* Removed unneeded dependency.
* Removed inactive JavaScript remains.

= 1.1.0 =
* Added compatibility for [WP Super Cache](https://wordpress.org/plugins/wp-super-cache/)

= 1.0.0 =
* Initial release
