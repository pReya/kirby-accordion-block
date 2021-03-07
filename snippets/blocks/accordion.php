<details class="k-block-type-accordion" <?php e($block->toggle()->bool(), 'open') ?>>
  <?php if ($block->summary()->isNotEmpty()) : ?>
    <summary><?= $block->summary() ?></summary>
  <?php endif ?>
  <?php if ($block->details()->isNotEmpty()) : ?>
    <p><?= $block->details()->text() ?></p>
  <?php endif ?>
</details>