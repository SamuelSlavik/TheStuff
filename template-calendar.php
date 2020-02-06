<?php /* Template Name: Kalendár */ ?>

<?php get_header() ?>
<?php include("components/logo.php") ?>

<div class="page-content">
    <div style="" class="div_light lineHeightMedium alignCenter ">
        <br class="blank"><br class="blank">
        <h1><?php _e("Kalendár kolokvií a podujatí", "colloquium-theme")?></h1>
        <br/>
        <br/>
        <br/>
    </div>
    <div class="div_light alignCenter  calendarWrapper" style="padding: 2% 10% 2% 10%">
        <?php echo WP_FullCalendar::calendar($args); ?>
    </div>
</div>

<?php get_footer() ?>

