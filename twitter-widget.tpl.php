<?php
  if (!empty($value)) :

  $widget_type = 'search';
  if (preg_match('/^@[\w]+$/', $value)) {
    $widget_type = 'profile';
    $widget_chain = ".setUser('" . substr($value, 1) . "')";
  }
  elseif (preg_match('/^@([\w]+)\/([\w]+)$/', $value, $matches)) {
    $widget_type = 'list';
    $widget_chain = ".setList('" . $matches[1] . "', '" . $matches[2] . "')";
  }
?>

<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: '<?php print $widget_type; ?>',
<?php
    switch ($widget_type) {
      case 'search':
        print "  search: '" . addslashes($value) . "',\n";
        // fall through to add subject.
      case 'list':
        print "  subject: '" . addslashes($value) . "',\n";
        break;
      default:
        break;
    }
?>
  rpp: 5,
  interval: 6000,
  width: 'auto',
  height: 300,
  theme: {
    shell: {
      background: '#BFD6EF',
      color: '#787879'
    },
    tweets: {
      background: '#BFD6EF',
      color: '#787879',
      links: '#eb9807'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render()<?php print empty($widget_chain)? '' : $widget_chain; ?>.start();
</script>
<?php endif; ?>
