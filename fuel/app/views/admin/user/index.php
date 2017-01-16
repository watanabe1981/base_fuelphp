<h2><i class="fa fa-user"></i>&nbsp;ユーザーリスト</h2>

<br />
<br />

<? if ($users): ?>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ログインID</th>
                <th>グループ</th>
                <th>登録日</th>
                <th>更新日</th>
            </tr>
        </thead>
        <tbody>
    <? foreach ($users as $item): ?>
        <? $item = $item->to_array(true); ?>
            <tr class="">
                <td><?= \Arr::get($item, 'id'); ?></td>
                <td><?= \Arr::get($item, 'username'); ?></td>
                <td><?= \Arr::get($item, 'replaced_group'); ?></td>
                <td><?= \Arr::get($item, 'formatted_created_at'); ?></td>
                <td><?= \Arr::get($item, 'formatted_updated_at'); ?></td>
            </tr>
    <? endforeach; ?>
        </tbody>
    </table>
</div><!-- /.table-responsive -->

<? else: ?>
<p>ユーザーが登録されていません。</p>

<? endif; ?>

