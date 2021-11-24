<div class="wrap tp-app">
    <h2>Settings</h2>
    <form name="post" action="options.php" method="post" id="post" autocomplete="off">
        <input type="hidden" name="option_page" value="tp_weather_group">
        <input type="hidden" name="action" value="update">
        <input type="hidden" id="_wpnonce" name="_wpnonce" value="64979b800e"><input type="hidden" name="_wp_http_referer" value="/qhshop/wp-admin/options-general.php?page=tp_weather">
        <div class="tp-city-list"></div>

        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row"><label for="city">City</label></th>
                    <td><input type="text" id="city" placeholder="Enter Your City" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row">Search</th>
                    <td id="search-results">
                        Please Input Your City Above.                </td>
                </tr>
                <tr>
                    <th scope="row">Selected</th>
                    <td id="search-selected">
                        N/A                </td>
                </tr>
            </tbody>
        </table>
        <div class="alignleft">
            <button class="button button-primary button-large" id="btnSave" type="submit">Save Changes</button>
        </div>
    </form>
</div>