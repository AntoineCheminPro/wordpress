<?php

if ( ! class_exists( 'Hustle_SShare_Admin' ) ) :

	class Hustle_SShare_Admin extends Hustle_Module_Page_Abstract {

		protected function set_page_properties() {

			$this->module_type = Hustle_Module_Model::SOCIAL_SHARING_MODULE;

			$this->page_title = Opt_In_Utils::get_module_type_display_name( $this->module_type, false, true );

			$this->page_template_path      = '/admin/sshare/listing';
			$this->page_edit_template_path = '/admin/sshare/wizard';
		}

		/**
		 * Gets the JS variables to be localized in Wizard for Social Sharing modules.
		 *
		 * @since 4.3.0
		 *
		 * @return array
		 */
		protected function get_wizard_js_variables_to_localize() {
			$variables = array(
				'social_platforms'                => Opt_In_Utils::get_social_platform_names(),
				'social_platforms_with_endpoints' => Hustle_SShare_Model::get_sharing_endpoints(),
				'social_platforms_with_api'       => Hustle_SShare_Model::get_networks_counter_endpoint(),
				'social_platforms_data'           => array(
					'email_message_default' => __( "I've found an excellent article on {page_url} which may interest you.", 'hustle' ),
				),
				'palettes'                        => array(
					'sshare_defaults' => $this->module->get_design()->defaults,
				),
			);
			return $variables;
		}

		/**
		 * Get the args for the wizard page.
		 *
		 * @since 4.0.1
		 * @return array
		 */
		protected function get_page_edit_template_args() {

			$current_section = Hustle_Module_Admin::get_current_section();

			return array(
				'section'   => ( ! $current_section ) ? 'services' : $current_section,
				'module_id' => $this->module->module_id,
				'module'    => $this->module,
				'is_active' => (bool) $this->module->active,
			);
		}
	}

endif;
