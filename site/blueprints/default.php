<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  hidecta:
    label: Kontakt-Banner verstecken
    type: checkbox
  revisions:
    label: Revisions
    type: revisions
