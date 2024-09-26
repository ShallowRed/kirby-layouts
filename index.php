<?php

Kirby::plugin('shallowred/layouts', [

  'snippets' => [
    'layouts' => __DIR__ . '/snippets/layouts.php',
  ],

  'layoutMethods' => [
    'computedAttrs' => function () {
      $classes = $this->kirby()->apply('shallowred.layouts.layoutClassList', ['attrs' => $this->attrs()], 'attrs');
      return attr([
        'id' => $this->attrs()->id(),
        'class' => A::join(A::merge(['k-row'], $classes, [$this->class()]), ' '),
      ]);
    },
  ],

  'layoutColumnMethods' => [
    'computedAttrs' => function () {
      return attr([
        'class' => A::join([
          'k-column',
          ('k-column--span-' . $this->span(6)),
        ], ' '),
      ]);
    },
  ],

  'blockMethods' => [
    'computedAttrs' => function () {
      return attr([
        'class' => A::join([
          'k-block',
          $this->class()
        ], ' '),
      ]);
    },
  ],

]);
