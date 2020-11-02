<?php
// Custom settings
function custom_settings_add_menu()
{
    add_theme_page('Paramètres', 'Paramètres', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
add_action('admin_menu', 'custom_settings_add_menu');


// Create Custom Global Settings
function custom_settings_page()
{?>
  <div class="wrap">
    <h1>Paramètres</h1>
    <form method="post" action="options.php">
       <?php
    settings_fields('section');
    do_settings_sections('theme-options');
    submit_button();
    ?>
    </form>
  </div>
<?php }

// Twitter
function setting_twitter()
{?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
<?php }


function setting_github()
{?>
  <input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }


function setting_linkedin()
{?>
  <input type="text" name="linkedin" id="linkedin" value="<?php echo get_option('linkedin'); ?>" />
<?php }


function custom_settings_page_setup()
{
    add_settings_section('section', 'Réseaux sociaux', null, 'theme-options');
    add_settings_field('twitter', 'Page Twitter', 'setting_twitter', 'theme-options', 'section');
    add_settings_field('github', 'Dépôt GitHub', 'setting_github', 'theme-options', 'section');
    add_settings_field('linkedin', 'Page Linkedin', 'setting_linkedin', 'theme-options', 'section');

    register_setting('section', 'twitter');
    register_setting('section', 'github');
    register_setting('section', 'linkedin');
}
add_action('admin_init', 'custom_settings_page_setup');


