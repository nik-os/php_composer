<?php
namespace tests;

/**
 * Created by Nikita Kotenko <kotenko@samsonos.com>
 * on 25.11.14 at 16:42
 */
class MainTest extends \PHPUnit_Framework_TestCase
{
    public function testCreate()
    {
        $composer = new \samson\composer\Composer('tests/', 'composer.test');
        $composer->addVendor('samsonos')->setIgnoreKey('samson_module_ignore')->addIgnorePackage('samsonos/php_core');
        $composerModules = $composer->create();
        $modulesExample = array
        (
            'samsonos/php_fs' => 112,
            'samsonos/php_fs_local' => 79,
            'samsonos/php_activerecord' => 35,
            'samsonos/cms_app' => 27,
            'samsonos/js_core' => 11,
            'samsonos/cms_api' => 8,
            'samsonos/php_jquery' => 7,
            'samsonos/cms_input' => 5,
            'samsonos/social_core' => 5,
            'samsonos/php_resourcer' => 5,
            'samsonos/php_jquery_ui' => 3,
            'samsonos/php_treeview' => 3,
            'samsonos/php_email' => 2,
            'samsonos/php_less' => 2,
            'samsonos/php_upload' => 2,
            'samsonos/social_email' => 2,
            'samsonos/php_i18n' => 2,
            'samsonos/js_md5' => 1,
            'samsonos/js_lightbox' => 1,
            'samsonos/js_tabs' => 1,
            'samsonos/php_fs_aws' => 1,
            'samsonos/php_pager' => 1,
            'samsonos/php_parse' => 1,
            'samsonos/php_scale' => 1,
            'samsonos/php_deploy' => 1,
            'samsonos/php_compressor' => 1,
            'samsonos/js_fixedheader' => 1,
            'samsonos/js_tinybox' => 1,
            'samsonos/js_translit' => 1,
            'samsonos/js_select' => 1,
            'samsonos/cms_input_date' => 1,
            'samsonos/cms_app_help' => 1,
            'samsonos/cms_app_material' => 1,
            'samsonos/cms_app_gallery' => 1,
            'samsonos/cms_app_field' => 1,
            'samsonos/cms_app_cleaner' => 1,
            'samsonos/cms_app_export' => 1,
            'samsonos/cms_app_navigation' => 1,
            'samsonos/cms_app_product' => 1,
            'samsonos/cms_input_upload' => 1,
            'samsonos/cms_input_wysiwyg' => 1,
            'samsonos/cms_input_select' => 1,
            'samsonos/cms_app_user' => 1,
            'samsonos/cms_app_relatedmaterial' => 1,
            'samsonos/cms_app_signin' => 1,
            'samsonos/cms_table' => 1
        );
        $this->assertEquals($composerModules, $modulesExample);
    }

    public function testEmpty()
    {
        $composer = new \samson\composer\Composer('tests/', 'composer.test');
        $composer->addVendor('samsonostest');
        $composerModules = $composer->create();
        $modulesExample = array();
        $this->assertEquals($composerModules, $modulesExample);
    }
    public function testNoFile()
    {
        $composer = new \samson\composer\Composer('tests/', 'composer.lock');
        $composer->addVendor('samsonos')->setIgnoreKey('samson_module_ignore')->addIgnorePackage('samsonos/php_core');
        $composerModules = $composer->create();
        $modulesExample = array();
        $this->assertEquals($composerModules, $modulesExample);
    }
}
