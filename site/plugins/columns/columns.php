<?php
  kirbytext::$pre[] = function($kirbytext, $text) {

  $text = preg_replace_callback('!\(Spalten(…|\.{3})\)(.*?)\((…|\.{3})Spalten\)!is', function($matches) use($kirbytext) {

    $columns = preg_split('!\R\+{4}\s+\R!', $matches[2]);
    $html    = array();

    foreach($columns as $column) {
      $field = new Field($kirbytext->field->page, null, trim($column));
      $html[] = '<div class="' . c::get('columns.item', 'column') . '">' . kirbytext($field) . '</div>';
    }

    return '<div class="' . c::get('columns.container', 'columns') . ' ' . c::get('columns.container', 'columns') . '-' . count($columns) . '">' . implode($html) . '</div>';

  }, $text);

  return $text;

};

