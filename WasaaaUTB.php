<?php

require_once $global['systemRootPath'] . 'plugin/Plugin.abstract.php';

class WasaaaUTB extends PluginAbstract {

    public function getDescription() {
        return "Manage Uptobox Videos Informations";
    }

    public function getName() {
        return "WasaaaUTB";
    }

    public function getUUID() {
        return "da513a20-7ddd-11ea-bc55-0242ac130003";
    }

    public function getPluginVersion() {
        return "1.0";
    }

    public function getTags() {
        return array('free', 'uptobox', 'video');
    }

    public function getEmptyDataObject() {
        $obj = new stdClass();
        $obj->onlyAdminCanUptoboxEmbed = true;
        $obj->USER_TOKEN = 'Your Uptobox User Token';
        return $obj;
    }

    public function getUploadMenuButton(){
        global $global;
        $obj = $this->getDataObject();
        if($obj->onlyAdminCanUptoboxEmbed && !User::isAdmin()){
            return '';
        }
        return '<li><a  href="'.$global['webSiteRootURL'].'plugin/WasaaaUTB/search.php" ><span class="fa fa-link"></span> '.__("Uptobox Embed").'</a></li>';
    }
}
