<div class="k-layouts">
  <?php foreach ($layouts as $layout) : ?>
  <section <?php echo $layout->computedAttrs() ?>>
    <?php foreach ($layout->columns() as $column) : ?>
    <div <?php echo $column->computedAttrs() ?>>
      <?php foreach ($column->blocks() as $block) : ?>
      <div <?php echo $block->computedAttrs() ?>>
        <?php echo $block;?>
      </div>
      <?php endforeach;?>
    </div>
    <?php endforeach;?>
  </section>
  <?php endforeach;?>
</div>
