{include file="`$TEMPLATE_DIR`/Common/header.tpl"}

{$this->Form->create(NULL, ['type' => 'POST', 'url' => ['action' => 'confirm'], 'id' => 'inquiry_form', 'class' => 'form-horizontal'])}

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">お問い合わせフォーム</div>
        <div class="panel-body">
            <div id="kind" class="form-group">
                <label class="col-sm-2 control-label">お問い合わせ種類</label>
                <div class="col-sm-10">
                    <select name="kind_id" class="form-control">
                        {foreach $kind_info as $info}
                        <option value="{$info->id}">{$info->kind_name}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">名前</label>
                <div class="col-sm-10">
                    <input name="name"
                           class="form-control"
                           data-validation="required"
                           data-validation-error-msg="*名前を入力してください"
                           type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">メールアドレス</label>
                <div class="col-sm-10">
                    <input name="mail_address"
                           class="form-control"
                           data-validation="email"
                           data-validation-error-msg="*メールアドレスを入力してください"
                           type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">内容</label>
                <div class="col-sm-10">
                    <textarea name="content"
                              data-validation="required"
                              data-validation-error-msg="*内容を入力してください"
                              class="form-control"></textarea>
                </div>
            </div>
            <button class="btn btn-default" type="submit">送信</button>
        </div>
    </div>
</div>

{$this->Form->end()}

{literal}
<script>
    $.validate();
</script>
{/literal}

{include file="`$TEMPLATE_DIR`/Common/footer.tpl"}
