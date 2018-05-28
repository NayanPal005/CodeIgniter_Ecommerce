<div class="row-fluid">

    <div class="box">
        <div class="box-header">
            <h2><i class="halflings-icon list-alt"></i><span class="break"></span>Chart with points</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div id="sincos"  class="center" style="height:300px;" ></div>
            <p id="hoverdata">Mouse position at (<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></p>
        </div>
    </div>

    <div class="box">
        <div class="box-header">
            <h2><i class="halflings-icon list-alt"></i><span class="break"></span>Flot</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div id="flotchart" class="center" style="height:300px"></div>
        </div>
    </div>

    <div class="box">
        <div class="box-header">
            <h2><i class="halflings-icon list-alt"></i><span class="break"></span>Stack Example</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div id="stackchart" class="center" style="height:300px;"></div>

            <p class="stackControls center">
                <input class="btn" type="button" value="With stacking">
                <input class="btn" type="button" value="Without stacking">
            </p>

            <p class="graphControls center">
                <input class="btn-primary" type="button" value="Bars">
                <input class="btn-primary" type="button" value="Lines">
                <input class="btn-primary" type="button" value="Lines with steps">
            </p>
        </div>
    </div>

</div><!--/row-->

<div class="row-fluid sortable">
    <div class="box span6">
        <div class="box-header">
            <h2><i class="halflings-icon list-alt"></i><span class="break"></span>Pie</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div id="piechart" style="height:300px"></div>
        </div>
    </div>

    <div class="box span6">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon list-alt"></i><span class="break"></span>Donut</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div id="donutchart" style="height: 300px;"></div>
        </div>
    </div>

</div><!--/row-->

<hr>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header">
            <h2><i class="halflings-icon list-alt"></i><span class="break"></span>Realtime</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div id="realtimechart" style="height:190px;"></div>
            <p>You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
            <p>Time between updates: <input id="updateInterval" type="text" value="" style="text-align: right; width:5em"> milliseconds</p>
        </div>
    </div>
</div><!--/row-->

<div class="row-fluid">

    <div class="widget span6" onTablet="span6" onDesktop="span6">
        <h2><span class="glyphicons facebook"><i></i></span>Facebook Fans</h2>
        <hr>
        <div class="content">
            <div id="facebookChart" style="height:300px" ></div>
        </div>
    </div><!--/span-->

    <div class="widget span6" onTablet="span6" onDesktop="span6">
        <h2><span class="glyphicons twitter"><i></i></span>Twitter Followers</h2>
        <hr>
        <div class="content">
            <div id="twitterChart" style="height:300px" ></div>
        </div>
    </div><!--/span-->

</div>



</div><!--/.fluid-container-->

<!-- end: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->

<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>