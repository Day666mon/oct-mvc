<h2>All tasks</h2>
<ul>
    <?php foreach ($this->tasks as $task): ?>
        <li><?= $task['name'] ?></li>
    <?php endforeach; ?>
</ul>
<form>
    <input type="submit" name="submit" value="Добавить"/>
</form>
