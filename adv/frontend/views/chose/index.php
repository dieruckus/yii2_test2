

<h1>Привет!!!</h1>

<form class="ctl">
    <label for="country">Country</label>
    <select id="country">
        <?php foreach($c as $country): ?>
        <option data-cid="<?= $country->cid ?>"><?= $country->country ?></option>
        <?php endforeach; ?>
    </select>

    <label for="town">Town</label>
    <select id="town">
      <!--  <?php foreach($t as $town): ?>
            <option value="<?= $town->tid ?>" data-country="<?= $town->country->cid ?>" data-lang="<?php $a=array(); foreach($town->langs as $v) { $a[]=$v->lid;}?><?= implode('+',$a)?>"><?= $town->town ?></option>
        <?php endforeach; ?>

        -->
    </select>

    <div class="hidden" id="languages">
        <?php foreach($l as $lang): ?>
            <div data-lid="<?= $lang->lid ?>" data-town="<?php $a=array(); foreach($lang->towns as $v) { $a[]=$v->tid;}?><?= implode('+',$a)?>"><?= $lang->lang ?></div>
        <?php endforeach; ?>
    </div>


</form>