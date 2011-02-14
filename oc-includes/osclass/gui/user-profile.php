<?php

    /*
     *      OSCLass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2010 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */

?>

<?php
    $user = $this->_get('user') ;
    $aCountries = $this->_get('aCountries') ;
    $aRegions = $this->_get('aRegions') ;
    $aCities = $this->_get('aCities') ;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
    <head>
        <?php $this->osc_print_head() ; ?>
    </head>
    <body>

        <div class="container">

            <?php $this->osc_print_header() ; ?>

            <div class="content user_account">

                <h1><strong><?php _e('User account manager') ; ?></strong></h1>

                <div id="sidebar">

                    <?php echo osc_private_user_menu() ; ?>

                </div>

                <div id="main" class="modify_profile">
                    <h2><?php _e('Update your profile') ; ?></h2>

                    <form action="<?php osc_base_url(true) ; ?>" method="post">

                        <input type="hidden" name="page" value="user" />
                        <input type="hidden" name="action" value="profile_post" />

                        <fieldset>
                            <p>
                                <label for="name"><?php _e('Name') ; ?></label><br />
                                <?php UserForm::name_text($user) ; ?>
                            </p>

                            <p>
                                <label for="email"><?php _e('E-mail') ; ?></label><br />
                                <span>
                                    <?php echo $user['s_email'] ; ?><br />
                                    <a href="#"><?php _e('Modify e-mail') ; ?></a> <a href="#" ><?php _e('Modify password') ; ?></a>
                                </span>
                            </p>

                            <p>
                                <label for="phoneMobile"><?php _e('Mobile phone') ; ?></label><br />
                                <?php UserForm::mobile_text($user) ; ?>
                            </p>

                            <p>
                                <label for="phoneLand"><?php _e('Land phone') ; ?></label><br />
                                <?php UserForm::phone_land_text($user) ; ?>
                            </p>

                            <p>
                                <label for="country"><?php _e('Country') ; ?></label><br />
                                <?php UserForm::country_select($aCountries, $user) ; ?>
                            </p>

                            <p>
                                <label for="region"><?php _e('Region') ; ?></label><br />
                                <?php UserForm::region_select($aRegions, $user) ; ?>
                            </p>

                            <p>
                                <label for="city"><?php _e('City') ; ?></label><br />
                                <?php UserForm::city_select($aCities, $user) ; ?>
                            </p>

                            <p>
                                <label for="city_area"><?php _e('City Area') ; ?></label><br />
                                <?php UserForm::city_area_text($user) ; ?>
                            </p>

                            <p>
                                <label for="address"><?php _e('Address') ; ?></label><br />
                                <?php UserForm::address_text($user) ; ?>
                            </p>

                            <p>
                                <label for="webSite"><?php _e('Web site') ; ?></label><br />
                                <?php UserForm::website_text($user) ; ?>
                            </p>

                            <p>
                                <label for="info"><?php _e('Additional information') ; ?></label><br />
                                <?php UserForm::info_textarea($user) ; ?>
                            </p>

                            <button type="submit"><?php _e('Update profile') ; ?></button>

                            <?php osc_run_hook('user_form') ; ?>
                        </fieldset>
                    </form>
                </div>
            </div>

            <?php $this->osc_print_footer() ; ?>

        </div>

        <?php osc_show_flash_message() ; ?>

    </body>

</html>