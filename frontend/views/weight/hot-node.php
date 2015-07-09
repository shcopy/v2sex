<?php $HotNode = \common\models\Node::HotNode();?>
<?php if(!empty($HotNode)):?>
    <section class="mt20">
        <div class="block-header">最热节点</div>
        <article class="node block-content">
            <?php $HotNode = \common\models\Node::HotNode();?>
            <?php foreach ($HotNode as $n):?>
                <a href="/node/<?= $n->enname?>"><?= $n->name?></a>
            <?php endforeach?>
        </article>
    </section>
<?php endif?>