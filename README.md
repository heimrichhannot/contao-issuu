# ISSUU

Watch responsive ISSUU documents within contao. 
For more information visit: http://issuu.com

## Features

- tl_content element
- tl_news support 

Add the following markup to your news template (e.g. news_full) 
```
<div data-configid="<?php echo $this->issuuConfigID; ?>" style="width:650px; height:459px;" class="issuuembed"></div>
<script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
```