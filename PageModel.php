<?php
/**
 * folderpage extension for Contao Open Source CMS
 *
 * @author     silvio pahrig
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 * @link       https://github.com/spahrig/contao-folderpage
 */


class PageModel extends \Contao\PageModel
{
    /**
     *
     * @return \Model The page model
     */
    public function loadDetails(){
        $objPage = parent::loadDetails();

        if(!empty($objPage)){
            if(isset($objPage->folderUrl)){
                $objPage->folderUrl = str_replace("//", "/", $objPage->folderUrl);
                if($objPage->folderUrl == "/") $objPage->folderUrl = "";
            }
        }
        return $objPage;

    }
}