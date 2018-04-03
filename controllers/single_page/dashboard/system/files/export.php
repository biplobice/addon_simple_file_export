<?php
namespace Concrete\Package\SimpleFileExport\Controller\SinglePage\Dashboard\System\Files;

class Export extends \Concrete\Core\Page\Controller\DashboardPageController
{
    public function view()
    {
    }

    public function download($token = '')
    {
        if ($this->token->validate('', $token)) {
            // @TODO: Error handling
            $zh = $this->app->make('helper/zip');
            $fh = $this->app->make('helper/file');

            $zipPath = DIR_APPLICATION . 'files_' . date('Ymd') . '.zip';
            $zh->zip(DIR_FILES_UPLOADED_STANDARD, $zipPath);

            $fh->forceDownload($zipPath);
            $fh->unfilename($zipPath);
        } else {
            $this->error->add($this->token->getErrorMessage());
        }

        $this->view();
    }
}
