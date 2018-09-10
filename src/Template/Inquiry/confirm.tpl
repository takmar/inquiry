{include file="`$TEMPLATE_DIR`/Common/header.tpl"}

{$this->Form->create(NULL, ['type' => 'POST', 'url' => ['action' => 'submit'], 'class' => 'form-horizontal'])}

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">お問い合わせ内容確認</div>
        <div class="panel-body">
            <!-- <form method="POST" action="inquiry/confirm" class="form-horizontal"> -->
            <div class="form-group">
                <label class="col-sm-2">お問い合わせ種類</label>
                <div class="col-sm-10">{$kind_info->kind_name}</div>
            </div>
            <div class="form-group">
                <label class="col-sm-2">名前</label>
                <div class="col-sm-10">{h($name)}</div>
            </div>
            <div class="form-group">
                <label class="col-sm-2">メールアドレス</label>
                <div class="col-sm-10">{h($mail_address)}</div>
            </div>
            <div class="form-group">
                <label class="col-sm-2">内容</label>
                <div class="col-sm-10">{h($content)}</div>
            </div>
            <br />
            <input type="submit" value="送信" class="btn btn-default" style="margin-right: 20px" onClick="javascript:double(this)">
            <input type="button" value="戻る" class="btn btn-default" onClick="javascript:history.back();">
            <!-- </form> -->
            <input type="hidden" name="kind_id" value="{$kind_info->id}">
            <input type="hidden" name="name" value="{h($name)}">
            <input type="hidden" name="mail_address" value="{h($mail_address)}">
            <input type="hidden" name="content" value="{h($content)}">
        </div>
    </div>
</div>

<script>
    function double(btn){
        btn.disabled=true;
    }
</script>

{$this->Form->end()}

{include file="`$TEMPLATE_DIR`/Common/footer.tpl"}
