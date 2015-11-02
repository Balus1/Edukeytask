<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title', $title) ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>

    <!-- CSS -->
    <?= $this->Html->css('jquery-ui.css') ?>
    <?= $this->Html->css('textareas.css') ?>

    <!-- JS -->
    <?= $this->Html->script('jquery-2.1.4.js') ?>
    <?= $this->Html->script('jquery.tmpl.js') ?>
    <?= $this->Html->script('jquery-ui.js') ?>

    <?= $this->Html->script('textareas.js') ?>
</head>
<body>
    <h1><?= $this->fetch('title') ?></h1>
    <?= $this->Flash->render() ?>
    <section class="container clearfix">
        <?= $this->fetch('content') ?>
    </section>
    <footer>
    </footer>
</body>
</html>