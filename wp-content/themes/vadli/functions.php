<?php 
function enqeue_custom_styles(){
    wp_enqueue_style("custom-styles",get_template_directory_uri().'/style.css');
}
add_action('wp_enqueue_scripts','enqeue_custom_styles');








function change_currency_daily_menu() {
    add_menu_page(
        'Change Currency minetou',
        'Change minetou',
        'manage_options',
        'change-currency-daily',
        'change_currency_daily_page'
    );
}
add_action('admin_menu', 'change_currency_daily_menu');


function change_currency_daily_page() {
    ?>
        <div class="wrap">
            <h2>Change Currency Daily Settings</h2>
            <form class="formtst" method="POST" action="options.php">
                <?php
                // settings_fields('change_currency_daily_options');
                // do_settings_sections('change_currency_daily');
                // submit_button();
                ?>
            
                <h1>Currency Converter</h1>
                <div class="row">
                <div class="col">
                    <select  name="currency" class="currency"> 
                        <option>select</option>
                        <option>MRU</option>
                        <option>EURO</option>
                    </select>
                    <input for="cu" type="text" name="" id="input_currency">
                </div>
                <div class="col">
                    <select name="currency" class="currency">
                        <option>select</option>
                    </select>
                    <input for="cuu" type="text" name="" id="output_currency" >
                </div>
                </div>
                <button type="submit">enregister</button>
        

</div>
        </form>
    </div>
    <?php
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $valeur_champ1 = sanitize_text_field($_POST["cu"]);
    $valeur_champ2 = sanitize_textarea_field($_POST["cuu"]);

    $wpdb->insert(
        $table_name,
        array(
            'champ1' => $valeur_champ1,
            'champ2' => $valeur_champ2,
        )
    );
}


function change_currency_daily_settings() {
    add_settings_section(
        'change_currency_daily_section',
        'Currency Settings',
        'change_currency_daily_section_callback',
        'change_currency_daily'
    );

    add_settings_field(
        'daily_currency',
        'Daily Currency',
        'daily_currency_callback',
        'change_currency_daily',
        'change_currency_daily_section'
    );

    register_setting('change_currency_daily_options', 'daily_currency');
}

function change_currency_daily_section_callback() {
    echo 'Select your daily currency:';
}

function daily_currency_callback() {
    $options = get_option('daily_currency');
    $currencies = array('USD', 'EUR', 'GBP'); // Ajoutez les devises nécessaires
    ?>
    <select name="daily_currency">
        <?php
        foreach ($currencies as $currency) {
            $selected = ($options == $currency) ? 'selected="selected"' : '';
            echo '<option value="' . $currency . '" ' . $selected . '>' . $currency . '</option>';
        }
        ?>
    </select>
    <?php
}
add_action('admin_init', 'change_currency_daily_settings');


function save_daily_currency_option() {
    if (isset($_POST['daily_currency'])) {
        update_option('daily_currency', sanitize_text_field($_POST['daily_currency']));
    }
}
add_action('admin_init', 'save_daily_currency_option');


