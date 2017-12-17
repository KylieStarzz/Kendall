<?php
/**
 * Kendall skin
 *
 * @file
 * @ingroup Skins
 * @author KylieStarzz (http://www.mediawiki.org/wiki/User:Little_Jackie)
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 3.0
 */
// Continue adding the code below
// ...

// Continued from above

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This is an extension to the MediaWiki package and cannot be run standalone.' );
}

$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'Kendall', // name as shown under [[Special:Version]]
	'namemsg' => 'skinname-kendall', // used since MW 1.24, see the section on "Localisation messages" below
	'version' => '1.0',
	'url' => 'https://www.mediawiki.org/wiki/Skin:Kendall',
	'author' => '[https://mediawiki.org/wiki/User:Little_Jackie]',
	'descriptionmsg' => 'foobar-desc', // see the section on "Localisation messages" below
	'license' => 'GPL-3.0',
);

// Continued from above
$wgValidSkinNames['kendall'] = 'Kendall';

$wgAutoloadClasses['SkinKendall'] = __DIR__ . '/Kendall.skin.php';
$wgMessagesDirs['Kendall'] = __DIR__ . '/i71a';
$wgExtensionMessagesFiles['Kendall'] = __DIR__ . '/Kendall.i71a.php';

// Continued from above
$wgResourceModules['skins.kendall'] = array(
	'styles' => array(
		'resources/screen.css' => array( 'media' => 'screen' ),
		'resources/print.css' => array( 'media' => 'print' ),
	),
	'remoteSkinPath' => 'Kendall',
	'localBasePath' => __DIR__,
);

// Continued from above
$wgResourceModules['skins.kendall.js'] = array(
	'scripts' => array(
		'Kendall/resources/cool.js',
		'Kendall/resources/awesome.js',
	),
	'dependencies' => array(
		// In this example, awesome.js needs the jQuery UI dialog stuff
		'jquery.ui.dialog',
	),
	'remoteBasePath' => &$GLOBALS['wgStylePath'],
	'localBasePath' => &$GLOBALS['wgStyleDirectory'],
);

<?php
/**
 * Skin file for the skin Kendall.
 *e
 * @file
 * @ingroup Skins
 */

// [...]

/**
 * SkinTemplate class for the Kendall skin
 * @ingroup Skins
 */
class SkinKendall extends SkinTemplate {
	var $skinname = 'kendall', $stylename = 'Kendall',
		$template = 'KendallTemplate', $useHeadElement = true;

	/**
	 * This function adds JavaScript via ResourceLoader
	 *
	 * Use this function if your skin has a JS file(s).
	 * Otherwise you won't need this function and you can safely delete it.
	 *
	 * @param OutputPage $out
	 */
	
	public function initPage( OutputPage $out ) {
		parent::initPage( $out );
		$out->addModules( 'skins.kendall.js' );
		/* 'skins.foobar.js' is the name you used in your skin.json file */
	}

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( array(
			'mediawiki.skinning.interface', 'skins.kendall'
			/* 'skins.kendall' is the name used in the skin.json file */
		) );
	}
}

// [...]

<?php
/**
 * BaseTemplate class for the Kendall skin
 *
 * @ingroup Skins
 */
class KendallTemplate extends BaseTemplate {
	/**
	 * Outputs the entire contents of the page
	 */
	public function execute() {
		$this->html( 'headelement' ); ?>

/** The skin's code goes here.
  * The rest of this page explains what to write here.
**/

<?php $this->printTrail(); ?>
</body>
</html><?php
	}
}


