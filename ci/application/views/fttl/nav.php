<!-- This is the navgation section for FTTL -->

<nav class="navbar navbar-default navbar-inverse top-nav">
    <div class="container-fluid">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">

                <li><a href="<?php echo base_url('fttl'); ?>">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo base_url('fttl/aircrafts'); ?>">Aircrafts</a></li>
                <li><a href="<?php echo base_url('fttl/pilots'); ?>">Pilots</a></li>
                
                <li class="dropdown">

                    <a href="<?php echo base_url('fttl/adventures'); ?>" id="adventures" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Adventures <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url('fttl/chopper'); ?>" class="adventures">Chopper</a></li>
                        <li><a href="<?php echo base_url('fttl/glider'); ?>" class="adventures">Glider</a></li>
                        <li><a href="<?php echo base_url('fttl/fixed_wing'); ?>" class="adventures">Fixed Wing</a></li>
                    </ul>  

                </li>

                <li><a href="<?php echo base_url('fttl/gallery'); ?>">Gallery</a></li>     
                 
            </ul> 

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
