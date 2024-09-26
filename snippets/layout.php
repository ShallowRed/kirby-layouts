<div class="k-layouts">
  <?php foreach ($layouts as $layout) : ?>
  <section <?php echo $layout->vv_attrs() ?>>
    <?php foreach ($layout->columns() as $column) : ?>
    <div <?php echo $column->vv_attrs() ?>>
      <?php foreach ($column->blocks() as $block) : ?>
      <div <?php echo $block->vv_attrs() ?>>
        <?php echo $block;?>
      </div>
      <?php endforeach;?>
    </div>
    <?php endforeach;?>
  </section>
  <?php endforeach;?>
</div>
