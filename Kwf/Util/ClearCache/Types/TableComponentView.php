<?php
class Kwf_Util_ClearCache_Types_TableComponentView extends Kwf_Util_ClearCache_Types_Table
{
    public function __construct()
    {
        parent::__construct('cache_comonent');
    }

    public function clearCache($options)
    {
        try {
            $cnt = Zend_Registry::get('db')->query("SELECT COUNT(*) FROM $t WHERE deleted=0")->fetchColumn();
            if ($cnt > 5000) {
                $this->_output("skipped: (won't delete $cnt entries, use clear-view-cache to clear)\n");
                return;
            }
        } catch (Exception $e) {}
        parent::clearCache($options);
    }

    public function getTypeName()
    {
        return 'cache_component';
    }
    public function doesRefresh() { return false; }
    public function doesClear() { return true; }
}