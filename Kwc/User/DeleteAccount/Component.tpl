<div class="<?=$this->cssClass?>">
    <div class="webStandard">
        <div class="back"><?=$this->componentLink($this->userProfile, $this->data->trlKwf('Show my Profile'))?></div>
        <h1 class="mainHeadline"><?=$this->data->trlKwf('Delete Account')?></h1>
    </div>
    <?=$this->component($this->form)?>
</div>
