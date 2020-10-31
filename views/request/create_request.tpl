{extends file="views/layouts/app.tpl"}
{block name="content"}
    
    <div class="card">
        <div class="card-header">
            <h4>Форма</h4>
        </div>
    
        <div class="card-body">
            <form class="form-signin" action="?controller=form&action=store" method="POST" enctype="multipart/form-data">
    
                <div class="form-group">
                    <label for="inputEmail">Ваш Email:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                </div>
    
                <div class="form-group">
                    <label for="inputText">Заголовок сообщения:</label>
                    <input type="text" class="form-control" id="inputText" placeholder="Заголовок" name="title">
                </div>
    
                <div class="form-group">
                    <label for="comment">Сообщение:</label>
                    <textarea class="form-control" rows="3" id="comment" placeholder="Сообщение" name="message"></textarea>
                </div>
    
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Как давно вы пользуетесь ресурсом</label>
                    <select class="form-control" id="exampleFormControlSelect2" name="duration_id">
                        {foreach from=$durations item=item key=key name=name}
                            <option value="{$item->id}">{$item->duration}</option>
                        {/foreach}
                    </select>
                </div>
    
    
    
                <div class="form-group">
                    <p>Укажите ваш пол:</p>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="man" checked>Мужской
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="woman">Женский
                        </label>
                    </div>
                </div>
    
    
                <div class="form-group">
                    <label for="inputText">Файловое сообщение:</label>
                    <input type="file" class="form-control-file" id="inputText" placeholder="Файл" name="file">
                </div>
    
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="check();">
                    <label class="form-check-label" for="exampleCheck1">Сделать кнопку активной?</label>
                </div>
    
                <button class="btn btn-lg btn-primary btn-lg" type="submit" name="send" disabled>Отправить</button>
                <button class="btn btn-lg btn-light btn-lg" type="reset">Сброс</button>
            </form>
        </div>
    </div>
    
    <script>
        function check() {
            var submit = document.getElementsByName('send')[0];
            if (document.getElementById('exampleCheck1').checked) {
                submit.disabled = '';
            } else {
                submit.disabled = 'disabled';
            }
        }
    </script>
{/block}