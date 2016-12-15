<?php
/**
* @package   WarpTheme Based Theme(WarpTheme.com)
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get theme configuration
include($this['path']->path('layouts:theme.config.php'));
?>
<!DOCTYPE HTML>
<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>"  data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>
<head>
  <?php echo $this['template']->render('head'); ?>
</head>
<body class="<?php echo $this['config']->get('body_classes'); ?>">
  <?php if ($this['widgets']->count('toolbar-l + toolbar-r')) : ?>
    <div class="tm-toolbar uk-clearfix uk-hidden-small">
      <div class="uk-container uk-container-center">
        <?php if ($this['widgets']->count('toolbar-l')) : ?>
          <div class="uk-float-left"><?php echo $this['widgets']->render('toolbar-l'); ?></div>
        <?php endif; ?>
        <?php if ($this['widgets']->count('toolbar-r')) : ?>
          <div class="uk-float-right"><?php echo $this['widgets']->render('toolbar-r'); ?></div>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('logo + menu + search')) : ?>
    <nav class="tm-navbar uk-navbar">
      <div class="uk-container uk-container-center">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
          <?php if ($this['widgets']->count('logo')) : ?>
          <div class="tm-nav-logo uk-hidden-small">
              <a class="tm-logo uk-hidden-small uk-responsive-width uk-responsive-height" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['widgets']->render('logo'); ?></a>
          </div>
          <?php endif; ?>
          <?php if ($this['widgets']->count('menu')) : ?>
            <div class="tm-nav uk-hidden-small">
              <div class="tm-nav-wrapper"><?php echo $this['widgets']->render('menu'); ?></div>
            </div>
          <?php endif; ?>
          <?php if ($this['widgets']->count('search')) : ?>
          <div class="tm-search uk-text-right uk-hidden-small uk-hidden-medium">
              <?php echo $this['widgets']->render('search'); ?>
          </div>
          <?php endif; ?>
          <?php if ($this['widgets']->count('offcanvas')) : ?>
            <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
          <?php endif; ?>
          <?php if ($this['widgets']->count('logo-small')) : ?>
            <div class="uk-navbar-content uk-navbar-center uk-visible-small"><a class="tm-logo-small" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['widgets']->render('logo-small'); ?></a></div>
          <?php endif; ?>
        </div>
      </div>
    </nav>
  <?php endif; ?>

  <?php if ($this['widgets']->count('top-a')) : ?>
  <div class="tm-block tm-top-a">
      <div class="uk-container uk-container-center">
          <section class="<?php echo $classes['grid.top-a']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
              <?php echo $this['widgets']->render('top-a', array('layout'=>$this['config']->get('grid.top-a.layout'))); ?>
          </section>
      </div>
  </div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('top-b')) : ?>
  <div class="tm-block tm-top-b">
      <div class="uk-container uk-container-center">
          <section class="<?php echo $classes['grid.top-b']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
              <?php echo $this['widgets']->render('top-b', array('layout'=>$this['config']->get('grid.top-b.layout'))); ?>
          </section>
      </div>
  </div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('top-c')) : ?>
  <div class="tm-block tm-top-c">
      <div class="uk-container uk-container-center">
          <section class="<?php echo $classes['grid.top-c']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
              <?php echo $this['widgets']->render('top-c', array('layout'=>$this['config']->get('grid.top-c.layout'))); ?>
          </section>
      </div>
  </div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('top-d')) : ?>
  <div class="tm-block tm-top-d">
      <div class="uk-container uk-container-center">
          <section class="<?php echo $classes['grid.top-d']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
              <?php echo $this['widgets']->render('top-d', array('layout'=>$this['config']->get('grid.top-d.layout'))); ?>
          </section>
      </div>
  </div>
  <?php endif; ?>

  <?php if ($this['widgets']->count('main-top + main-bottom + sidebar-a + sidebar-b') || $this['config']->get('system_output', true)) : ?>
    <div class="tm-block tm-block-main">
      <div class="uk-container uk-container-center">
        <div class="tm-middle uk-grid" data-uk-grid-match data-uk-grid-margin>
          <?php if ($this['widgets']->count('main-top + main-bottom') || $this['config']->get('system_output', true)) : ?>
            <div class="<?php echo $columns['main']['class'] ?>">
              <?php if ($this['widgets']->count('main-top')) : ?>
              <section class="tm-main-top <?php echo $classes['grid.main-top']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
                  <?php echo $this['widgets']->render('main-top', array('layout'=>$this['config']->get('grid.main-top.layout'))); ?>
              </section>
              <?php endif; ?>
              <?php if ($this['config']->get('system_output', true)) : ?>
                <main class="tm-content">
                  <?php if ($this['widgets']->count('breadcrumbs')) : ?>
                    <?php echo $this['widgets']->render('breadcrumbs'); ?>
                  <?php endif; ?>
                  <?php echo $this['template']->render('content'); ?>

                </main>
              <?php endif; ?>
              <?php if ($this['widgets']->count('main-bottom')) : ?>
              <section class="tm-main-bottom <?php echo $classes['grid.main-bottom']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
                  <?php echo $this['widgets']->render('main-bottom', array('layout'=>$this['config']->get('grid.main-bottom.layout'))); ?>
              </section>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php foreach($columns as $name => &$column) : ?>
            <?php if ($name != 'main' && $this['widgets']->count($name)) : ?>
              <aside class="<?php echo $column['class'] ?>"><?php echo $this['widgets']->render($name) ?></aside>
            <?php endif ?>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('bottom-a')) : ?>
  <div class="tm-block tm-block-bottom-a">
      <div class="uk-container uk-container-center">
          <section class="<?php echo $classes['grid.bottom-a']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
              <?php echo $this['widgets']->render('bottom-a', array('layout'=>$this['config']->get('grid.bottom-a.layout'))); ?>
          </section>
      </div>
  </div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('bottom-b')) : ?>
  <div class="tm-block tm-block-bottom-b">
      <div class="uk-container uk-container-center">
          <section class="<?php echo $classes['grid.bottom-b']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
              <?php echo $this['widgets']->render('bottom-b', array('layout'=>$this['config']->get('grid.bottom-b.layout'))); ?>
          </section>
      </div>
  </div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('bottom-c')) : ?>
  <div class="tm-block tm-block-bottom-c">
      <div class="uk-container uk-container-center">
          <section class="<?php echo $classes['grid.bottom-c']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
              <?php echo $this['widgets']->render('bottom-c', array('layout'=>$this['config']->get('grid.bottom-c.layout'))); ?>
          </section>
      </div>
  </div>
  <?php endif; ?>
  <?php if ($this['widgets']->count('bottom-d')) : ?>
  <div class="tm-block tm-block-bottom-d">
      <div class="uk-container uk-container-center">
          <section class="<?php echo $classes['grid.bottom-d']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
              <?php echo $this['widgets']->render('bottom-d', array('layout'=>$this['config']->get('grid.bottom-d.layout'))); ?>
          </section>
      </div>
  </div>
  <?php endif; ?>

  <?php if ($this['widgets']->count('footer + debug') || $this['config']->get('warp_branding', true) || $this['config']->get('totop_scroller', true)) : ?>
    <footer class="tm-footer uk-text-center uk-text-contrast">
      <?php
      echo $this['widgets']->render('footer');
      $this->output('warp_branding');
      echo $this['widgets']->render('debug');
      ?>
      <?php if ($this['config']->get('totop_scroller', true)) : ?>
        <div>
          <a class="tm-totop-scroller uk-text-center uk-link-muted uk-margin-top" data-uk-smooth-scroll href="#"></a>
        <?php endif; ?>
      </div>
    </footer>
  <?php endif; ?>
  <?php echo $this->render('footer'); ?>
  <?php if ($this['widgets']->count('offcanvas')) : ?>
    <div id="offcanvas" class="uk-offcanvas">
      <div class="uk-offcanvas-bar"><?php echo $this['widgets']->render('offcanvas'); ?></div>
    </div>
  <?php endif; ?>
</body>
</html>
