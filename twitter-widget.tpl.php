<?php if (!empty($twitter_id)) : ?>
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
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
}).render().setUser('<?php print $twitter_id ?>').start();
</script>
<?php endif; ?>
