<div class="<?=$this->cssClass;?>">
    <?= $this->component($this->data->getChildComponent('-mail')); ?>
    <?= $this->componentLink($this->data->parent->getPage(), '&laquo '.$this->data->trlKwf('Back'))?>
</div>