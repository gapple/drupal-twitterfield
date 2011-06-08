<?php
  if (!empty($value)) :
  $widget_type = preg_match('/^@[\w]+$/', $value)? 'profile' : 'search';
?>
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: '<?php print $widget_type; ?>',
<?php
    if ($widget_type == 'search') {
      print "  search: '" . addslashes($value) . "',\n";
      print "  subject: '" . addslashes($value) . "',\n";
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
}).render()<?php if ($widget_type == 'profile') {print ".setUser('" . substr($value, 1) . "')";} ?>.start();
</script>
<?php endif; ?>
