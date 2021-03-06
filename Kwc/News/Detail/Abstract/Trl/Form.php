<?php
class Kwc_News_Detail_Abstract_Trl_Form extends Kwf_Form
{
    public function __construct($name, $detailClass = null)
    {
        $this->setClass($detailClass);
        parent::__construct('details');
    }

    protected function _initFields()
    {
        parent::_initFields();

        $this->add(new Kwf_Form_Field_TextField('title', trlKwf('Title')))
            ->setAllowBlank(false)
            ->setWidth(300);
        $this->add(new Kwf_Form_Field_ShowField('original_title', trlKwf('Original')))
            ->setData(new Kwf_Data_Trl_OriginalComponentFromData('title'));
        $this->add(new Kwf_Form_Field_TextArea('teaser', trlKwf('Teaser')))
            ->setWidth(300)
            ->setHeight(100);
        $this->add(new Kwf_Form_Field_ShowField('original_teaser', trlKwf('Original')))
            ->setData(new Kwf_Data_Trl_OriginalComponentFromData('teaser'));
    }
}
