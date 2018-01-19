## This is the page for the Kendall MediaWiki skin

Thank you for choosing GitHub as a server to download the Kendall MediaWiki skin. Font changes are part of this modernization of the Vector skin.

If you have any questions, please email me at naymyoko AT icloud DOT com (please replace AT with this symbol (@) and DOT with this symbol (.)).

### For users with MediaWiki 1.25 or later

Do not keep Kendall.skin.php as the main file for the boilerplate and definitions, but rather, the bulk of the Kendall skin, as the file includes the skin's code. The file skin.json is the main file for the boilerplate and definitions.

### For users with MediaWiki 1.24 or earlier

Delete the skin.json file (as it will work only on MediaWiki 1.25+) and keep the .php file.

### Installing the skin on your MediaWiki-powered wiki

The best part comes here: installing and internationalizing this skin for your wiki! Add this code to your MediaWiki-powered wiki:

    <?php $this->msgWiki( 'msg-key' ); ?>

To install this skin for your wiki, load it from your wiki's LocalSettings.php:

    wfLoadSkin( "Kendall" );

In older MediaWiki versions, you have to explicitly load this skin's PHP file using require_once(). This is still supported in 1.25 onwards for backwards-compatibility:

    require_once( "$IP/skins/Kendall/Kendall.php" )

Before MediaWiki 1.25, there was an "auto-discovery" mechanism that detected skins in your wiki's "skins" folder and automatically loaded all skins from it; this functionality no longer exists.

To try out this skin you can:

- change $wgDefaultSkin to make this skin the default skin for all users of your wiki
- go to Special:Preferences > Appearance while logged in and either change to the new skin or click its "Preview" link
- add the ?useskin=kendall query string parameter to any wiki URL.

