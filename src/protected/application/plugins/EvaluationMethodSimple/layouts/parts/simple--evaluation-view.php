<?php use MapasCulturais\i; ?>
<div ng-controller="SimpleEvaluationForm">
    <div ng-if="data.registration">
        <?php i::_e('Avaliação'); ?>: <strong>{{getStatusLabel(data.registration)}}</strong>
    </div>
</div>
