<div>
    <h3>Добавить задачу</h3>
</div>
<?php if (!empty($this->error)): ?>
    <div>
        <?= $this->error ?>
    </div>
<?php endif; ?>
<form method="POST" action="/tasks/add">
    <input type="text" name="tasks"/>
    <button>Добавить</button>
</form>
