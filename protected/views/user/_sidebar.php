<div class="well well-sm">
    <ul class="nav nav-pills nav-stacked" id="yw1">
        <li <?php if ($this->id == 'user' && $this->action->id == 'index') echo 'class="active"';?>>
            <a href="<?=Yii::app()->createUrl('user/index');?>"><span class="glyphicon glyphicon-dashboard"></span> Διαχείριση</a>
        </li>
        <li <?php if ($this->id == 'institution') echo 'class="active"';?>>
            <a href="<?= Yii::app()->createUrl('institution/index') ?>"><span class="glyphicon glyphicon-map-marker"></span> Ινστιτούτα <span class="badge pull-right"><?=  Institution::model()->count();?></span></a>
        </li>
        <li <?php if (($this->id == 'user') && ($this->action->id == 'admin')) echo 'class="active"';?>>
            <a href="<?= Yii::app()->createUrl('user/admin') ?>"><span class="glyphicon glyphicon-user"></span> Χρήστες <span class="badge pull-right"><?=  User::model()->count();?></span></a>
        </li>
        <li>
            <a href="<?= Yii::app()->createUrl('site/index'); ?>" target="_blank"><span class="glyphicon glyphicon-globe"></span> Frontend</a>
        </li>
        <li>
            <a class="text-danger" href="<?=$this->createUrl('user/logout')?>"><span class="glyphicon glyphicon-off"></span> Αποσύνδεση</a>
        </li>
    </ul>
</div>