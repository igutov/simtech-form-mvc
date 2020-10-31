{extends file="views/layouts/app.tpl"}
{block name="content"}
    
    <div class="card">
        <div class="card-header">
            <h4>Все обращения</h4>
        </div>
        <div class="card-body">
            <div class="list-group">
                {foreach from=$requests item=item key=key name=name}
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Заголовок: {$item->title}</h5>
                            <small>Id: {$item->id}</small>
                        </div>
                        <p class="mb-1">Сообщение: {$item->message}</p>
                        <small>Email: {$item->email}</small>
                    </a>
                {foreachelse}
                    <p>Ничего не найдено</p>
                {/foreach}
            </div>
        </div>
    </div>
    
{/block}