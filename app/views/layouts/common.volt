<!DOCTYPE html>
<html>
    <head>
        <?php $this->assets->outputJs()?>
        <?php $this->assets->outputCss()?>
    </head>
    <body>
        <div id="header">
            <h1>Layout Template.volt</h1>
        </div>

        <div id="nav">
            {%%}
        </div>
        <div class="container">
            <?=$this->getcontent();?>
        </div>

        <div id="section">

        </div>

        <div id="footer">
            Copyright © Johnny.com
        </div>
    </body>
</html>
