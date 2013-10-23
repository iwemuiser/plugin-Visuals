<?php 
queue_css_file('cloud');
queue_js_file('d3');
queue_js_file('d3.layout.cloud');
echo head(array('title' => __('Browse Wordcloud'),
                'bodyid'=>'cloud',
                'bodyclass' => 'browse')); 
?>


<h1><?php echo __('Browse Wordcloud');?> (<?php echo $totalItems; ?> <?php echo __('total');?>)</h1>

<nav class="items-nav navigation" id="secondary-nav">
    <?php echo public_nav_items(); ?>
</nav>

<div id="primary">

    <link rel="image_src" href="amazing.png">
    <div id="vis"></div>
    <p>Resultaten zijn gebaseerd op de <b>volledige tekst</b> van de gevonden Items.</p>
    <form id="form">
      <p style="position: absolute; right: 0; top: 0" id="status"></p>
      <div style="text-align: center">
        <div id="presets"></div>
        <div id="custom-area">
            <p><textarea id="text">
              <?php print $this->itemCloud() ?>
          </textarea>
          <button type='button' id="go">HERLADEN</button>
          </div>
        </div>        
    <hr>

    <div style="float: right; text-align: right">
      <p><label for="max">Maximum aantal woorden:</label> <input type="number" value="250" min="1" id="max">
      <p><label>Download:</label>
        <a id="download-svg" href="#" target="_blank">SVG</a> |
        <a id="download-png" href="#" target="_blank">PNG</a>
    </div>

    <div style="float: left">
      <p><label>Spiral:</label>
        <label for="archimedean"><input type="radio" name="spiral" id="archimedean" value="archimedean" checked="checked"> Archimedean</label>
        <label for="rectangular"><input type="radio" name="spiral" id="rectangular" value="rectangular"> Rectangular</label>
      <p><label for="scale">Scale:</label>
        <label for="scale-log"><input type="radio" name="scale" id="scale-log" value="log" checked="checked"> log n</label>
        <label for="scale-sqrt"><input type="radio" name="scale" id="scale-sqrt" value="sqrt"> √n</label>
        <label for="scale-linear"><input type="radio" name="scale" id="scale-linear" value="linear"> n</label>
      <p><label for="font">Font:</label> 
          <select id="font" value="Impact">
            <option value="Impact">Impact</option>
            <option value="Times">Times</option>
            <option value="Tahoma">Tahoma</option>
            <option value="Arial">Arial</option>
          </select>
    </div>

    <div id="angles">
      <p><input type="number" id="angle-count" value="5" min="1"> <label for="angle-count">orientaties</label>
        <label for="angle-from">van</label> <input type="number" id="angle-from" value="-60" min="-90" max="90"> °
        <label for="angle-to">tot</label> <input type="number" id="angle-to" value="60" min="-90" max="90"> °
    </div>

    <hr style="clear: both">

    </form>
    <script type="text/javascript" src="<?php echo src("cloudifier", "javascripts", 'js'); ?>"></script>

</div><!-- end primary -->
<?php echo foot(); ?>