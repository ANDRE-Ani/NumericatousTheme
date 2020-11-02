<!-- add block at the top with widgets -->

<div class="col-sm-4">
<?php
if (is_active_sidebar('sidebar-h1')) {
    dynamic_sidebar('sidebar-h1');
}
?>
</div>


<div class="col-sm-8">
<?php
if (is_active_sidebar('sidebar-h2')) {
    dynamic_sidebar('sidebar-h2');
}
?>
</div>


<div class="col-sm-12">
<?php
if (is_active_sidebar('sidebar-h3')) {
    dynamic_sidebar('sidebar-h3');
}
?>
</div>