<?php

require_once $global['systemRootPath'] . 'plugin/Plugin.abstract.php';

class Wasaaa extends PluginAbstract {

    public function getDescription() {
        return "Manage Uptobox Videos Informations";
    }

    public function getName() {
        return "Wareeez";
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
        $obj->onlyAdminCanWasabiEmbed = true;
        $obj->USER_TOKEN = 'Your Uptobox User Token';
        return $obj;
    }

    public function getUploadMenuButton(){
        global $global;
        $obj = $this->getDataObject();
        if($obj->onlyAdminCanWasabiEmbed && !User::isAdmin()){
            return '';
        }
        return '<li><a  href="'.$global['webSiteRootURL'].'plugin/Wareeez/search.php" ><span class="fa fa-link"></span> '.__("Uptobox Embed").'</a></li>';
    }
}
