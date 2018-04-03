<?php
namespace Concrete\Package\SimpleFileExport;

use Concrete\Core\Backup\ContentImporter;
use Package;

class Controller extends Package
{
    /**
     * @var string package handle
     */
    protected $pkgHandle = 'simple_file_export';

    /**
     * @var string required concrete5 version
     */
    protected $appVersionRequired = '8.2';

    /**
     * @var string package version
     */
    protected $pkgVersion = '0.1';

    /**
     * Returns the translated package description.
     *
     * @return string
     */
    public function getPackageDescription()
    {
        return t('Add simple "Export Files" button in your dashboard.');
    }

    /**
     * Returns the translated package name.
     *
     * @return string
     */
    public function getPackageName()
    {
        return t("Simple Files Export");
    }


    /**
     * Install process of the package.
     */
    public function install()
    {
        $pkg = parent::install();
        $ci = new ContentImporter();
        $ci->importContentFile($pkg->getPackagePath() . '/config/dashboard.xml');

        return $pkg;
    }
}
