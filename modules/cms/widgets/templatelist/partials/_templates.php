<div class="layout-absolute">
    <div class="control-scrollbar" data-control="scrollbar">
        <div
            class="control-filelist <?= $this->controlClass ?>"
            data-control="filelist"
            data-group-status-handler="<?= $this->getEventHandler('onSetCollapseStatus') ?>"
            id="<?= $this->getId('template-list') ?>">
            <?= $this->makePartial('items', ['items' => $data]) ?>
        </div>
    </div>
</div>
