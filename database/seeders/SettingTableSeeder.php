<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Model;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting1 = new Setting;
        $setting1->option_name="ct_company_name";
        $setting1->option_value="My Company Name";
        $setting1->postal_code="";
        $setting1->save();

        $setting2 = new Setting;
        $setting2->option_name="ct_company_email";
        $setting2->option_value="companyemail@example.com";
        $setting2->postal_code="";
        $setting2->save();

        $setting3 = new Setting;
        $setting3->option_name="ct_company_address";
        $setting3->option_value="SUITE 5A-1204";
        $setting3->postal_code="";
        $setting3->save();

        $setting4 = new Setting;
        $setting4->option_name="ct_company_city";
        $setting4->option_value="TUCSON";
        $setting4->postal_code="";
        $setting4->save();

        $setting5 = new Setting;
        $setting5->option_name="ct_company_state";
        $setting5->option_value="AZ";
        $setting5->postal_code="";
        $setting5->save();

        $setting6 = new Setting;
        $setting6->option_name="ct_company_zip_code";
        $setting6->option_value="85001";
        $setting6->postal_code="";
        $setting6->save();

        $setting7 = new Setting;
        $setting7->option_name="ct_company_country";
        $setting7->option_value="USA";
        $setting7->postal_code="";
        $setting7->save();

        $setting8 = new Setting;
        $setting8->option_name="ct_company_logo";
        $setting8->option_value="";
        $setting8->postal_code="";
        $setting8->save();

        $setting9 = new Setting;
        $setting9->option_name="ct_time_interval";
        $setting9->option_value="30";
        $setting9->postal_code="";
        $setting9->save();

        $setting10 = new Setting;
        $setting10->option_name="ct_min_advance_booking_time";
        $setting10->option_value="60";
        $setting10->postal_code="";
        $setting10->save();

        $setting11 = new Setting;
        $setting11->option_name="ct_max_advance_booking_time";
        $setting11->option_value="6";
        $setting11->postal_code="";
        $setting11->save();

        $setting12 = new Setting;
        $setting12->option_name="ct_booking_padding_time";
        $setting12->option_value="";
        $setting12->postal_code="";
        $setting12->save();

        $setting13 = new Setting;
        $setting13->option_name="ct_setting_padding_time_before";
        $setting13->option_value="";
        $setting13->postal_code="";
        $setting13->save();

        $setting14 = new Setting;
        $setting14->option_name="ct_setting_padding_time_after";
        $setting14->option_value="";
        $setting14->postal_code="";
        $setting14->save();

        $setting15 = new Setting;
        $setting15->option_name="ct_cancellation_buffer_time";
        $setting15->option_value="60";
        $setting15->postal_code="";
        $setting15->save();

        $setting16 = new Setting;
        $setting16->option_name="ct_reshedule_buffer_time";
        $setting16->option_value="60";
        $setting16->postal_code="";
        $setting16->save();

        $setting17 = new Setting;
        $setting17->option_name="ct_currency";
        $setting17->option_value="USD";
        $setting17->postal_code="";
        $setting17->save();

        $setting18 = new Setting;
        $setting18->option_name="ct_currency_symbol_position";
        $setting18->option_value="$100";
        $setting18->postal_code="";
        $setting18->save();

        $setting19 = new Setting;
        $setting19->option_name="ct_price_format_decimal_places";
        $setting19->option_value="2";
        $setting19->postal_code="";
        $setting19->save();

        $setting20 = new Setting;
        $setting20->option_name="ct_tax_vat_status";
        $setting20->option_value="Y";
        $setting20->postal_code="";
        $setting20->save();

        $setting21 = new Setting;
        $setting21->option_name="ct_tax_vat_type";
        $setting21->option_value="F";
        $setting21->postal_code="";
        $setting21->save();

        $setting22 = new Setting;
        $setting22->option_name="ct_tax_vat_value";
        $setting22->option_value="10";
        $setting22->postal_code="";
        $setting22->save();

        $setting23 = new Setting;
        $setting23->option_name="ct_partial_deposit_status";
        $setting23->option_value="N";
        $setting23->postal_code="";
        $setting23->save();

        $setting24 = new Setting;
        $setting24->option_name="ct_partial_deposit_amount";
        $setting24->option_value="50";
        $setting24->postal_code="";
        $setting24->save();

        $setting25 = new Setting;
        $setting25->option_name="ct_partial_deposit_message";
        $setting25->option_value="You only need to pay a deposit to confirm your booking. The remaining amount needs to be paid on arrival.";
        $setting25->postal_code="";
        $setting25->save();

        $setting26 = new Setting;
        $setting26->option_name="ct_thankyou_page_url";
        $setting26->option_value="";
        $setting26->postal_code="";
        $setting26->save();

        $setting27 = new Setting;
        $setting27->option_name="ct_allow_multiple_booking_for_same_timeslot_status";
        $setting27->option_value="Y";
        $setting27->postal_code="";
        $setting27->save();

        $setting28 = new Setting;
        $setting28->option_name="ct_appointment_auto_confirm_status";
        $setting28->option_value="N";
        $setting28->postal_code="";
        $setting28->save();

        $setting29 = new Setting;
        $setting29->option_name="ct_allow_day_closing_time_overlap_booking";
        $setting29->option_value="N";
        $setting29->postal_code="";
        $setting29->save();

        $setting30 = new Setting;
        $setting30->option_name="ct_allow_terms_and_conditions";
        $setting30->option_value="Y";
        $setting30->postal_code="";
        $setting30->save();

        $setting31 = new Setting;
        $setting31->option_name="ct_primary_color";
        $setting31->option_value="#003b46";
        $setting31->postal_code="";
        $setting31->save();

        $setting32 = new Setting;
        $setting32->option_name="ct_secondary_color";
        $setting32->option_value="#187d90";
        $setting32->postal_code="";
        $setting32->save();

        $setting33 = new Setting;
        $setting33->option_name="ct_text_color";
        $setting33->option_value="#666666";
        $setting33->postal_code="";
        $setting33->save();

        $setting34 = new Setting;
        $setting34->option_name="ct_text_color_on_bg";
        $setting34->option_value="#ffffff";
        $setting34->postal_code="";
        $setting34->save();

        $setting35 = new Setting;
        $setting35->option_name="ct_primary_color_admin";
        $setting35->option_value="#003b46";
        $setting35->postal_code="";
        $setting35->save();

        $setting36 = new Setting;
        $setting36->option_name="ct_show_coupons_input_on_checkout";
        $setting36->option_value="on";
        $setting36->postal_code="";
        $setting36->save();

        $setting37 = new Setting;
        $setting37->option_name="ct_hide_faded_already_booked_time_slots";
        $setting37->option_value="off";
        $setting37->postal_code="";
        $setting37->save();

        $setting38 = new Setting;
        $setting38->option_name="ct_guest_user_checkout";
        $setting38->option_value="off";
        $setting38->postal_code="";
        $setting38->save();

        $setting39 = new Setting;
        $setting39->option_name="ct_date_picker_date_format";
        $setting39->option_value="d-M-Y";
        $setting39->postal_code="";
        $setting39->save();

        $setting40 = new Setting;
        $setting40->option_name="ct_all_payment_gateway_status";
        $setting40->option_value="off";
        $setting40->postal_code="";
        $setting40->save();

        $setting41 = new Setting;
        $setting41->option_name="ct_pay_locally_status";
        $setting41->option_value="on";
        $setting41->postal_code="";
        $setting41->save();

        $setting42 = new Setting;
        $setting42->option_name="ct_paypal_express_checkout_status";
        $setting42->option_value="off";
        $setting42->postal_code="";
        $setting42->save();

        $setting43 = new Setting;
        $setting43->option_name="ct_paypal_api_username";
        $setting43->option_value="";
        $setting43->postal_code="";
        $setting43->save();

        $setting44 = new Setting;
        $setting44->option_name="ct_paypal_api_password";
        $setting44->option_value="";
        $setting44->postal_code="";
        $setting44->save();

        $setting45 = new Setting;
        $setting45->option_name="ct_paypal_api_signature";
        $setting45->option_value="";
        $setting45->postal_code="";
        $setting45->save();

        $setting46 = new Setting;
        $setting46->option_name="ct_paypal_guest_payment_status";
        $setting46->option_value="off";
        $setting46->postal_code="";
        $setting46->save();

        $setting47 = new Setting;
        $setting47->option_name="ct_paypal_test_mode_status";
        $setting47->option_value="off";
        $setting47->postal_code="";
        $setting47->save();

        $setting48 = new Setting;
        $setting48->option_name="ct_stripe_payment_form_status";
        $setting48->option_value="off";
        $setting48->postal_code="";
        $setting48->save();

        $setting49 = new Setting;
        $setting49->option_name="ct_stripe_secretkey";
        $setting49->option_value="";
        $setting49->postal_code="";
        $setting49->save();

        $setting50 = new Setting;
        $setting50->option_name="ct_stripe_publishablekey";
        $setting50->option_value="";
        $setting50->postal_code="";
        $setting50->save();

        $setting51 = new Setting;
        $setting51->option_name="ct_admin_email_notification_status";
        $setting51->option_value="N";
        $setting51->postal_code="";
        $setting51->save();
        
        $setting52 = new Setting;
        $setting52->option_name="ct_staff_email_notification_status";
        $setting52->option_value="N";
        $setting52->postal_code="";
        $setting52->save();

        $setting53 = new Setting;
        $setting53->option_name="ct_client_email_notification_status";
        $setting53->option_value="N";
        $setting53->postal_code="";
        $setting53->save();

        $setting54 = new Setting;
        $setting54->option_name="ct_email_sender_name";
        $setting54->option_value="";
        $setting54->postal_code="";
        $setting54->save();

        $setting55 = new Setting;
        $setting55->option_name="ct_email_sender_address";
        $setting55->option_value="admin@kaliba.in";
        $setting55->postal_code="";
        $setting55->save();

        $setting56 = new Setting;
        $setting56->option_name="ct_email_appointment_reminder_buffer";
        $setting56->option_value="60";
        $setting56->postal_code="";
        $setting56->save();

        $setting57 = new Setting;
        $setting57->option_name="ct_sms_setting_status";
        $setting57->option_value="N";
        $setting57->postal_code="";
        $setting57->save();

        $setting58 = new Setting;
        $setting58->option_name="ct_sms_twilio_account_SID";
        $setting58->option_value="";
        $setting58->postal_code="";
        $setting58->save();

        $setting59 = new Setting;
        $setting59->option_name="ct_sms_twilio_auth_token";
        $setting59->option_value="";
        $setting59->postal_code="";
        $setting59->save();

        $setting60 = new Setting;
        $setting60->option_name="ct_sms_twilio_sender_number";
        $setting60->option_value="";
        $setting60->postal_code="";
        $setting60->save();

        $setting61 = new Setting;
        $setting61->option_name="ct_sms_twilio_send_sms_to_setting_provider_status";
        $setting61->option_value="N";
        $setting61->postal_code="";
        $setting61->save();

        $setting62 = new Setting;
        $setting62->option_name="ct_sms_twilio_send_sms_to_client_status";
        $setting62->option_value="N";
        $setting62->postal_code="";
        $setting62->save();

        $setting63 = new Setting;
        $setting63->option_name="ct_sms_twilio_send_sms_to_admin_status";
        $setting63->option_value="N";
        $setting63->postal_code="";
        $setting63->save();

        $setting64 = new Setting;
        $setting64->option_name="ct_sms_twilio_send_sms_to_staff_status";
        $setting64->option_value="N";
        $setting64->postal_code="";
        $setting64->save();

        $setting65 = new Setting;
        $setting65->option_name="ct_sms_twilio_admin_phone_number";
        $setting65->option_value="";
        $setting65->postal_code="";
        $setting65->save();

        $setting66 = new Setting;
        $setting66->option_name="ct_sms_template_admin_notification";
        $setting66->option_value="";
        $setting66->postal_code="";
        $setting66->save();

        $setting67 = new Setting;
        $setting67->option_name="ct_sms_template_setting_provider";
        $setting67->option_value="";
        $setting67->postal_code="";
        $setting67->save();

        $setting68 = new Setting;
        $setting68->option_name="ct_sms_template_client_notification";
        $setting68->option_value="";
        $setting68->postal_code="";
        $setting68->save();

        $setting69 = new Setting;
        $setting69->option_name="ct_time_slots_schedule_type";
        $setting69->option_value="weekly";
        $setting69->postal_code="";
        $setting69->save();

        $setting70 = new Setting;
        $setting70->option_name="ct_choose_time_format";
        $setting70->option_value="12";
        $setting70->postal_code="";
        $setting70->save();

        $setting71 = new Setting;
        $setting71->option_name="ct_secondary_color_admin";
        $setting71->option_value="#187d90";
        $setting71->postal_code="";
        $setting71->save();

        $setting72 = new Setting;
        $setting72->option_name="ct_text_color_admin";
        $setting72->option_value="#ffffff";
        $setting72->postal_code="";
        $setting72->save();

        $setting73 = new Setting;
        $setting73->option_name="ct_postal__code";
        $setting73->option_value="#ffffff";
        $setting73->postal_code="90001,90002,90003,90004,90005,90006,90007,90008,90009,90010,90011,90012,90013";
        $setting73->save();

        $setting74 = new Setting;
        $setting74->option_name="ct_time_format";
        $setting74->option_value="12";
        $setting74->postal_code="";
        $setting74->save();

        $setting75 = new Setting;
        $setting75->option_name="ct_partial_type";
        $setting75->option_value="";
        $setting75->postal_code="";
        $setting75->save();

        $setting76 = new Setting;
        $setting76->option_name="ct_cancelation_policy_status";
        $setting76->option_value="N";
        $setting76->postal_code="";
        $setting76->save();

        $setting77 = new Setting;
        $setting77->option_name="ct_cancel_policy_header";
        $setting77->option_value="ct_cancel_policy_header";
        $setting77->postal_code="";
        $setting77->save();

        $setting78 = new Setting;
        $setting78->option_name="ct_cancel_policy_textarea";
        $setting78->option_value="Full refund if canceled within 24 hours of placing the order. If you cancel the order for more than 24 hours, you  can get a credit note for the amount paid. If canceled less than 24 hours before the time of appointment\/stay or in case of no-show, the order will not be refunded. ";
        $setting78->postal_code="";
        $setting78->save();

        $setting79 = new Setting;
        $setting79->option_name="ct_terms_condition_link";
        $setting79->option_value="";
        $setting79->postal_code="";
        $setting79->save();

        $setting80 = new Setting;
        $setting80->option_name="ct_addons_default_design";
        $setting80->option_value="2";
        $setting80->postal_code="";
        $setting80->save();

        $setting81 = new Setting;
        $setting81->option_name="ct_method_default_design";
        $setting81->option_value="3";
        $setting81->postal_code="";
        $setting81->save();

        $setting82 = new Setting;
        $setting82->option_name="ct_front_desc";
        $setting82->option_value="<div class=\"features\">\n <img class=\"feature-img\" src=\"<?php  echo BASE_URL ?>\/assets\/images\/icon21.png\" alt=\"\">\n <h4 class=\"feature-tittle\">Safety<\/h4>\n  <p class=\"feature-text\">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<\/p>\n<\/div>\n<div class=\"features\">\n <img class=\"feature-img\" src=\"<?php  echo BASE_URL ?>\/assets\/images\/icon31.png\" alt=\"\">\n <h4 class=\"feature-tittle\">Best in Quality<\/h4>\n <p class=\"feature-text\">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<\/p>\n<\/div>\n<div class=\"features\">\n <img class=\"feature-img\" src=\"<?php  echo BASE_URL ?>\/assets\/images\/icon51.png\" alt=\"\">\n <h4 class=\"feature-tittle\">Communication<\/h4>\n <p class=\"feature-text\">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<\/p>\n<\/div>\n<div class=\"features\">\n <img class=\"feature-img\" src=\"<?php  echo BASE_URL ?>\/assets\/images\/icon17.png\" alt=\"\">\n <h4 class=\"feature-tittle\">Saves You Time<\/h4>\n  <p class=\"feature-text\">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<\/p>\n<\/div>\n<div class=\"features\">\n <img class=\"feature-img\" src=\"<?php  echo BASE_URL ?>\/assets\/images\/icon61.png\" alt=\"\">\n <h4 class=\"feature-tittle\">Card Payment<\/h4>\n  <p class=\"feature-text\"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<\/p>\n<\/div>";
        $setting82->postal_code="";
        $setting82->save();

        $setting83 = new Setting;
        $setting83->option_name="ct_subheaders";
        $setting83->option_value="N";
        $setting83->postal_code="";
        $setting83->save();

        $setting84 = new Setting;
        $setting84->option_name="ct_cart_scrollable";
        $setting84->option_value="Y";
        $setting84->postal_code="";
        $setting84->save();

        $setting85 = new Setting;
        $setting85->option_name="ct_setting_default_design";
        $setting85->option_value="1";
        $setting85->postal_code="";
        $setting85->save();

        $setting86 = new Setting;
        $setting86->option_name="ct_privacy_policy_link";
        $setting86->option_value="";
        $setting86->postal_code="";
        $setting86->save();

        $setting87 = new Setting;
        $setting87->option_name="ct_allow_privacy_policy";
        $setting87->option_value="Y";
        $setting87->postal_code="";
        $setting87->save();

        $setting88 = new Setting;
        $setting88->option_name="ct_allow_front_desc";
        $setting88->option_value="Y";
        $setting88->postal_code="";
        $setting88->save();

        $setting89 = new Setting;
        $setting89->option_name="ct_currency_symbol";
        $setting89->option_value="$";
        $setting89->postal_code="";
        $setting89->save();

        $setting90 = new Setting;
        $setting90->option_name="ct_smtp_hostname";
        $setting90->option_value="";
        $setting90->postal_code="";
        $setting90->save();

        $setting91 = new Setting;
        $setting91->option_name="ct_smtp_username";
        $setting91->option_value="";
        $setting91->postal_code="";
        $setting91->save();

        $setting92 = new Setting;
        $setting92->option_name="ct_smtp_password";
        $setting92->option_value="";
        $setting92->postal_code="";
        $setting92->save();

        $setting93 = new Setting;
        $setting93->option_name="ct_smtp_port";
        $setting93->option_value="";
        $setting93->postal_code="";
        $setting93->save();

        $setting94 = new Setting;
        $setting94->option_name="ct_sample_data_status";
        $setting94->option_value="Y";
        $setting94->postal_code="";
        $setting94->save();

        $setting95 = new Setting;
        $setting95->option_name="ct_remove_data_array";
        $setting95->option_value="9,10,11,12,3,3,3,10,3,4";
        $setting95->postal_code="";
        $setting95->save();

        $setting96 = new Setting;
        $setting96->option_name="ct_timezone";
        $setting96->option_value="Europe\/Berlin";
        $setting96->postal_code="";
        $setting96->save();

        $setting97 = new Setting;
        $setting97->option_name="ct_company_country_code";
        $setting97->option_value="+1,us,United States: +1";
        $setting97->postal_code="";
        $setting97->save();

        $setting98 = new Setting;
        $setting98->option_name="ct_language";
        $setting98->option_value="en";
        $setting98->postal_code="";
        $setting98->save();

        $setting99 = new Setting;
        $setting99->option_name="ct_custom_css";
        $setting91->option_value="";
        $setting99->postal_code="";
        $setting99->save();

        $setting100 = new Setting;
        $setting100->option_name="ct_authorizenet_status";
        $setting100->option_value="";
        $setting100->postal_code="";
        $setting100->save();

        $setting101 = new Setting;
        $setting101->option_name="ct_authorizenet_API_login_ID";
        $setting101->option_value="";
        $setting101->postal_code="";
        $setting101->save();

        $setting102 = new Setting;
        $setting102->option_name="ct_authorizenet_transaction_key";
        $setting102->option_value="";
        $setting102->postal_code="";
        $setting102->save();

        $setting103 = new Setting;
        $setting103->option_name="ct_authorize_sandbox_mode";
        $setting103->option_value="";
        $setting103->postal_code="";
        $setting103->save();

        $setting104 = new Setting;
        $setting104->option_name="ct_version";
        $setting104->option_value="7.5";
        $setting104->postal_code="";
        $setting104->save();

        $setting105 = new Setting;
        $setting105->option_name="ct_sms_plivo_account_SID";
        $setting105->option_value="";
        $setting105->postal_code="";
        $setting105->save();

        $setting106 = new Setting;
        $setting106->option_name="ct_sms_plivo_auth_token";
        $setting106->option_value="";
        $setting106->postal_code="";
        $setting106->save();

        $setting107 = new Setting;
        $setting107->option_name="ct_sms_plivo_sender_number";
        $setting107->option_value="";
        $setting107->postal_code="";
        $setting107->save();

        $setting108 = new Setting;
        $setting108->option_name="ct_sms_plivo_send_sms_to_service_provider_status";
        $setting108->option_value="";
        $setting108->postal_code="";
        $setting108->save();

        $setting109 = new Setting;
        $setting109->option_name="ct_sms_plivo_send_sms_to_client_status";
        $setting109->option_value="N";
        $setting109->postal_code="";
        $setting109->save();

        $setting110 = new Setting;
        $setting110->option_name="ct_sms_plivo_send_sms_to_admin_status";
        $setting110->option_value="N";
        $setting110->postal_code="";
        $setting110->save();

        $setting111 = new Setting;
        $setting111->option_name="ct_sms_plivo_send_sms_to_staff_status";
        $setting111->option_value="N";
        $setting111->postal_code="";
        $setting111->save();

        $setting112 = new Setting;
        $setting112->option_name="ct_sms_plivo_admin_phone_number";
        $setting112->option_value="";
        $setting112->postal_code="";
        $setting112->save();

        $setting113 = new Setting;
        $setting113->option_name="ct_vc_status";
        $setting113->option_value="N";
        $setting113->postal_code="";
        $setting113->save();

        $setting114 = new Setting;
        $setting114->option_name="ct_p_status";
        $setting114->option_value="N";
        $setting114->postal_code="";
        $setting114->save();

        $setting115 = new Setting;
        $setting115->option_name="ct_sms_twilio_status";
        $setting115->option_value="N";
        $setting115->postal_code="";
        $setting115->save();

        $setting116 = new Setting;
        $setting116->option_name="ct_sms_plivo_status";
        $setting116->option_value="N";
        $setting116->postal_code="";
        $setting116->save();

        $setting117 = new Setting;
        $setting117->option_name="ct_company_phone";
        $setting117->option_value="";
        $setting117->postal_code="";
        $setting117->save();

        $setting118 = new Setting;
        $setting118->option_name="ct_admin_optional_email";
        $setting118->option_value="";
        $setting118->postal_code="";
        $setting118->save();

        $setting119 = new Setting;
        $setting119->option_name="ct_2checkout_sandbox_mode";
        $setting119->option_value="Y";
        $setting119->postal_code="";
        $setting119->save();

        $setting120 = new Setting;
        $setting120->option_name="ct_2checkout_privatekey";
        $setting120->option_value="";
        $setting120->postal_code="";
        $setting120->save();

        $setting121 = new Setting;
        $setting121->option_name="ct_2checkout_publishkey";
        $setting121->option_value="";
        $setting121->postal_code="";
        $setting121->save();

        $setting122 = new Setting;
        $setting122->option_name="ct_2checkout_sellerid";
        $setting122->option_value="";
        $setting122->postal_code="";
        $setting122->save();

        $setting123 = new Setting;
        $setting123->option_name="ct_2checkout_status";
        $setting123->option_value="N";
        $setting123->postal_code="";
        $setting123->save();

        $setting124 = new Setting;
        $setting124->option_name="ct_postal_code_status";
        $setting124->option_value="Y";
        $setting124->postal_code="";
        $setting124->save();

        $setting125 = new Setting;
        $setting125->option_name="ct_front_image";
        $setting125->option_value="";
        $setting125->postal_code="";
        $setting125->save();

        $setting126 = new Setting;
        $setting126->option_name="ct_login_image";
        $setting126->option_value="";
        $setting126->postal_code="";
        $setting126->save();

        $setting127 = new Setting;
        $setting127->option_name="ct_company_header_address";
        $setting127->option_value="Y";
        $setting127->postal_code="";
        $setting127->save();

        $setting128 = new Setting;
        $setting128->option_name="ct_front_tool_tips_my_bookings";
        $setting128->option_value="";
        $setting128->postal_code="";
        $setting128->save();

        $setting129 = new Setting;
        $setting129->option_name="ct_front_tool_tips_postal__code";
        $setting129->option_value="";
        $setting129->postal_code="";
        $setting129->save();

        $setting130 = new Setting;
        $setting130->option_name="ct_front_tool_tips_services";
        $setting130->option_value="";
        $setting130->postal_code="";
        $setting130->save();

        $setting131 = new Setting;
        $setting131->option_name="ct_front_tool_tips_addons_services";
        $setting131->option_value="";
        $setting131->postal_code="";
        $setting131->save();

        $setting132 = new Setting;
        $setting132->option_name="ct_front_tool_tips_frequently_discount";
        $setting132->option_value="";
        $setting132->postal_code="";
        $setting132->save();

        $setting133 = new Setting;
        $setting133->option_name="ct_front_tool_tips_time_slots";
        $setting133->option_value="";
        $setting133->postal_code="";
        $setting133->save();

        $setting134 = new Setting;
        $setting134->option_name="ct_front_tool_tips_personal_details";
        $setting134->option_value="";
        $setting134->postal_code="";
        $setting134->save();

        $setting135 = new Setting;
        $setting135->option_name="ct_front_tool_tips_promocode";
        $setting135->option_value="";
        $setting135->postal_code="";
        $setting135->save();

        $setting136 = new Setting;
        $setting136->option_name="ct_front_tool_payment_method";
        $setting136->option_value="";
        $setting136->postal_code="";
        $setting136->save();

        $setting137 = new Setting;
        $setting137->option_name="ct_sms_nexmo_status";
        $setting137->option_value="N";
        $setting137->postal_code="";
        $setting137->save();

        $setting138 = new Setting;
        $setting138->option_name="ct_nexmo_api_key";
        $setting138->option_value="";
        $setting138->postal_code="";
        $setting138->save();

        $setting139 = new Setting;
        $setting139->option_name="ct_nexmo_api_secret";
        $setting139->option_value="";
        $setting139->postal_code="";
        $setting139->save();

        $setting140 = new Setting;
        $setting140->option_name="ct_nexmo_from";
        $setting140->option_value="";
        $setting140->postal_code="";
        $setting140->save();

        $setting141 = new Setting;
        $setting141->option_name="ct_nexmo_status";
        $setting141->option_value="";
        $setting141->postal_code="";
        $setting141->save();

        $setting142 = new Setting;
        $setting142->option_name="ct_sms_nexmo_send_sms_to_client_status";
        $setting142->option_value="N";
        $setting142->postal_code="";
        $setting142->save();

        $setting143 = new Setting;
        $setting143->option_name="ct_sms_nexmo_send_sms_to_admin_status";
        $setting143->option_value="N";
        $setting143->postal_code="";
        $setting143->save();

        $setting144 = new Setting;
        $setting144->option_name="ct_sms_nexmo_send_sms_to_staff_status";
        $setting144->option_value="N";
        $setting144->postal_code="";
        $setting144->save();

        $setting145 = new Setting;
        $setting145->option_name="ct_sms_nexmo_admin_phone_number";
        $setting145->option_value="";
        $setting145->postal_code="";
        $setting145->save();

        $setting146 = new Setting;
        $setting146->option_name="ct_front_tool_tips_status";
        $setting146->option_value="";
        $setting146->postal_code="";
        $setting146->save();

        $setting147 = new Setting;
        $setting147->option_name="ct_existing_and_new_user_checkout";
        $setting147->option_value="on";
        $setting147->postal_code="";
        $setting147->save();

        $setting148 = new Setting;
        $setting148->option_name="ct_user_zip_code";
        $setting148->option_value="Y";
        $setting148->postal_code="";
        $setting148->save();

        $setting149 = new Setting;
        $setting149->option_name="ct_payumoney_salt";
        $setting149->option_value="";
        $setting149->postal_code="";
        $setting149->save();

        $setting150 = new Setting;
        $setting150->option_name="ct_payumoney_merchant_key";
        $setting150->option_value="";
        $setting150->postal_code="";
        $setting150->save();

        $setting151 = new Setting;
        $setting151->option_name="ct_payumoney_status";
        $setting151->option_value="N";
        $setting151->postal_code="";
        $setting151->save();

        $setting152 = new Setting;
        $setting152->option_name="ct_company_logo_display";
        $setting152->option_value="N";
        $setting152->postal_code="";
        $setting152->save();

        $setting153 = new Setting;
        $setting153->option_name="ct_sms_textlocal_account_username";
        $setting153->option_value="";
        $setting153->postal_code="";
        $setting153->save();

        $setting154 = new Setting;
        $setting154->option_name="ct_sms_textlocal_account_hash_id";
        $setting154->option_value="";
        $setting154->postal_code="";
        $setting154->save();

        $setting155 = new Setting;
        $setting155->option_name="ct_sms_textlocal_send_sms_to_client_status";
        $setting155->option_value="N";
        $setting155->postal_code="";
        $setting155->save();

        $setting156 = new Setting;
        $setting156->option_name="ct_sms_textlocal_send_sms_to_admin_status";
        $setting156->option_value="N";
        $setting156->postal_code="";
        $setting156->save();

        $setting157 = new Setting;
        $setting157->option_name="ct_sms_textlocal_send_sms_to_staff_status";
        $setting157->option_value="N";
        $setting157->postal_code="";
        $setting157->save();

        $setting158 = new Setting;
        $setting158->option_name="ct_sms_textlocal_admin_phone";
        $setting158->option_value="";
        $setting158->postal_code="";
        $setting158->save();

        $setting159 = new Setting;
        $setting159->option_name="ct_sms_textlocal_status";
        $setting159->option_value="N";
        $setting159->postal_code="";
        $setting159->save();

        $setting160 = new Setting;
        $setting160->option_name="ct_company_service_desc_status";
        $setting160->option_value="Y";
        $setting160->postal_code="";
        $setting160->save();

        $setting161 = new Setting;
        $setting161->option_name="ct_company_willwe_getin_status";
        $setting161->option_value="N";
        $setting161->postal_code="";
        $setting161->save();

        $setting162 = new Setting;
        $setting162->option_name="ct_bank_name";
        $setting162->option_value="";
        $setting162->postal_code="";
        $setting162->save();

        $setting163 = new Setting;
        $setting163->option_name="ct_account_name";
        $setting163->option_value="";
        $setting163->postal_code="";
        $setting163->save();

        $setting164 = new Setting;
        $setting164->option_name="ct_account_number";
        $setting164->option_value="";
        $setting164->postal_code="";
        $setting164->save();

        $setting165 = new Setting;
        $setting165->option_name="ct_branch_code";
        $setting165->option_value="";
        $setting165->postal_code="";
        $setting165->save();

        $setting166 = new Setting;
        $setting166->option_name="ct_ifsc_code";
        $setting166->option_value="";
        $setting166->postal_code="";
        $setting166->save();

        $setting167 = new Setting;
        $setting167->option_name="ct_bank_transfer_status";
        $setting167->option_value="N";
        $setting167->postal_code="";
        $setting167->save();

        $setting168 = new Setting;
        $setting168->option_name="ct_phone_display_country_code";
        $setting168->option_value="";
        $setting168->postal_code="";
        $setting168->save();

        $setting169 = new Setting;
        $setting169->option_name="ct_bank_description";
        $setting169->option_value="";
        $setting169->postal_code="";
        $setting169->save();

        $setting170 = new Setting;
        $setting170->option_name="ct_smtp_encryption";
        $setting170->option_value="";
        $setting170->postal_code="";
        $setting170->save();

        $setting171 = new Setting;
        $setting171->option_name="ct_smtp_authetication";
        $setting171->option_value="false";
        $setting171->postal_code="";
        $setting171->save();

        $setting172 = new Setting;
        $setting172->option_name="ct_bf_first_name";
        $setting172->option_value="on,Y,3,15";
        $setting172->postal_code="";
        $setting172->save();

        $setting173 = new Setting;
        $setting173->option_name="ct_bf_last_name";
        $setting173->option_value="on,Y,3,15";
        $setting173->postal_code="";
        $setting173->save();

        $setting174 = new Setting;
        $setting174->option_name="ct_bf_email";
        $setting174->option_value="on,Y,5,30";
        $setting174->postal_code="";
        $setting174->save();

        $setting175 = new Setting;
        $setting175->option_name="ct_bf_password";
        $setting175->option_value="on,Y,8,10";
        $setting175->postal_code="";
        $setting175->save();

        $setting176 = new Setting;
        $setting176->option_name="ct_bf_phone";
        $setting176->option_value="on,Y,9,15";
        $setting176->postal_code="";
        $setting176->save();

        $setting177 = new Setting;
        $setting177->option_name="ct_bf_address";
        $setting177->option_value="on,Y,10,40";
        $setting177->postal_code="";
        $setting177->save();

        $setting178 = new Setting;
        $setting178->option_name="ct_bf_zip_code";
        $setting178->option_value="on,Y,5,7";
        $setting178->postal_code="";
        $setting178->save();

        $setting179 = new Setting;
        $setting179->option_name="ct_bf_city";
        $setting179->option_value="on,Y,3,15";
        $setting179->postal_code="";
        $setting179->save();

        $setting180 = new Setting;
        $setting180->option_name="ct_bf_state";
        $setting180->option_value="on,Y,3,15";
        $setting180->postal_code="";
        $setting180->save();

        $setting181 = new Setting;
        $setting181->option_name="ct_bf_notes";
        $setting181->option_value="on,N,10,70";
        $setting181->postal_code="";
        $setting181->save();

        $setting182 = new Setting;
        $setting182->option_name="ct_front_language_selection_dropdown";
        $setting182->option_value="Y";
        $setting182->postal_code="";
        $setting182->save();

        $setting183 = new Setting;
        $setting183->option_name="ct_calculation_policy";
        $setting183->option_value="M";
        $setting183->postal_code="";
        $setting183->save();

        $setting184 = new Setting;
        $setting184->option_name="ct_frontend_fonts";
        $setting184->option_value="Open Sans";
        $setting184->postal_code="";
        $setting184->save();

        $setting185 = new Setting;
        $setting185->option_name="ct_favicon_image";
        $setting185->option_value="fevicon.png";
        $setting185->postal_code="";
        $setting185->save();

        $setting186 = new Setting;
        $setting186->option_name="ct_appointment_details_display";
        $setting186->option_value="on";
        $setting186->postal_code="";
        $setting186->save();

        $setting187 = new Setting;
        $setting187->option_name="ct_loader";
        $setting187->option_value="default";
        $setting187->postal_code="";
        $setting187->save();

        $setting188 = new Setting;
        $setting188->option_name="ct_recurrence_booking_status";
        $setting188->option_value="N";
        $setting188->postal_code="";
        $setting188->save();

        $setting189 = new Setting;
        $setting189->option_name="ct_page_title";
        $setting189->option_value="Cleanto Booking";
        $setting189->postal_code="";
        $setting189->save();

        $setting190 = new Setting;
        $setting190->option_name="ct_google_analytics_code";
        $setting190->option_value="";
        $setting190->postal_code="";
        $setting190->save();

        $setting191 = new Setting;
        $setting191->option_name="ct_seo_meta_description";
        $setting191->option_value="";
        $setting191->postal_code="";
        $setting191->save();

        $setting192 = new Setting;
        $setting192->option_name="ct_seo_og_title";
        $setting192->option_value="";
        $setting192->postal_code="";
        $setting192->save();

        $setting193 = new Setting;
        $setting193->option_name="ct_seo_og_type";
        $setting193->option_value="";
        $setting193->postal_code="";
        $setting193->save();

        $setting194 = new Setting;
        $setting194->option_name="ct_seo_og_url";
        $setting194->option_value="";
        $setting194->postal_code="";
        $setting194->save();

        $setting195 = new Setting;
        $setting195->option_name="ct_seo_og_image";
        $setting195->option_value="";
        $setting195->postal_code="";
        $setting195->save();

        $setting196 = new Setting;
        $setting196->option_name="ct_company_title_display";
        $setting196->option_value="Y";
        $setting196->postal_code="";
        $setting196->save();

        $setting197 = new Setting;
        $setting197->option_name="ct_custom_gif_loader";
        $setting197->option_value="";
        $setting197->postal_code="";
        $setting197->save();

        $setting198 = new Setting;
        $setting198->option_name="ct_custom_css_loader";
        $setting198->option_value="";
        $setting198->postal_code="";
        $setting198->save();

        $setting199 = new Setting;
        $setting199->option_name="ct_calendar_defaultView";
        $setting199->option_value="";
        $setting199->postal_code="";
        $setting199->save();

        $setting200 = new Setting;
        $setting200->option_name="ct_calendar_firstDay";
        $setting200->option_value="1";
        $setting200->postal_code="";
        $setting200->save();

        $setting201 = new Setting;
        $setting201->option_name="ct_gc_status";
        $setting201->option_value="N";
        $setting201->postal_code="";
        $setting201->save();

        $setting202 = new Setting;
        $setting202->option_name="ct_gc_id";
        $setting202->option_value="";
        $setting202->postal_code="";
        $setting202->save();

        $setting203 = new Setting;
        $setting203->option_name="ct_gc_client_id";
        $setting203->option_value="";
        $setting203->postal_code="";
        $setting203->save();

        $setting204 = new Setting;
        $setting204->option_name="ct_gc_client_secret";
        $setting204->option_value="";
        $setting204->postal_code="";
        $setting204->save();

        $setting205 = new Setting;
        $setting205->option_name="ct_gc_status_configure";
        $setting205->option_value="";
        $setting205->postal_code="";
        $setting205->save();

        $setting206 = new Setting;
        $setting206->option_name="ct_gc_status_sync_configure";
        $setting206->option_value="";
        $setting206->postal_code="";
        $setting206->save();

        $setting207 = new Setting;
        $setting207->option_name="ct_gc_token";
        $setting207->option_value="";
        $setting207->postal_code="";
        $setting207->save();

        $setting208 = new Setting;
        $setting208->option_name="ct_gc_purchase_status";
        $setting208->option_value="N";
        $setting208->postal_code="";
        $setting208->save();

        $setting209 = new Setting;
        $setting209->option_name="ct_gc_frontend_url";
        $setting209->option_value="";
        $setting209->postal_code="";
        $setting209->save();

        $setting210 = new Setting;
        $setting210->option_name="ct_gc_version";
        $setting210->option_value="";
        $setting210->postal_code="";
        $setting210->save();

        $setting211 = new Setting;
        $setting211->option_name="ct_gc_admin_url";
        $setting211->option_value="";
        $setting211->postal_code="";
        $setting211->save();

        $setting212 = new Setting;
        $setting212->option_name="ct_payway_purchase_status";
        $setting212->option_value="N";
        $setting212->postal_code="";
        $setting212->save();

        $setting213 = new Setting;
        $setting213->option_name="ct_payway_status";
        $setting213->option_value="N";
        $setting213->postal_code="";
        $setting213->save();

        $setting214 = new Setting;
        $setting214->option_name="ct_payway_publishable_key";
        $setting214->option_value="";
        $setting214->postal_code="";
        $setting214->save();

        $setting215 = new Setting;
        $setting215->option_name="ct_payway_secure_key";
        $setting215->option_value="";
        $setting215->postal_code="";
        $setting215->save();

        $setting216 = new Setting;
        $setting216->option_name="ct_payway_version";
        $setting216->option_value="";
        $setting216->postal_code="";
        $setting216->save();

        $setting217 = new Setting;
        $setting217->option_name="ct_payway_merchant_ID";
        $setting217->option_value="";
        $setting217->postal_code="";
        $setting217->save();

        $setting218 = new Setting;
        $setting218->option_name="ct_eway_purchase_status";
        $setting218->option_value="N";
        $setting218->postal_code="";
        $setting218->save();

        $setting219 = new Setting;
        $setting219->option_name="ct_eway_test_mode_status";
        $setting219->option_value="N";
        $setting219->postal_code="";
        $setting219->save();

        $setting220 = new Setting;
        $setting220->option_name="ct_eway_api_username";
        $setting220->option_value="";
        $setting220->postal_code="";
        $setting220->save();

        $setting221 = new Setting;
        $setting221->option_name="ct_eway_api_password";
        $setting221->option_value="";
        $setting221->postal_code="";
        $setting221->save();

        $setting222 = new Setting;
        $setting222->option_name="ct_eway_status";
        $setting222->option_value="N";
        $setting222->postal_code="";
        $setting222->save();

        $setting223 = new Setting;
        $setting223->option_name="ct_eway_version";
        $setting223->option_value="";
        $setting223->postal_code="";
        $setting223->save();

        $setting224 = new Setting;
        $setting224->option_name="ct_payment_extensions";
        $setting224->option_value="a:2:{s:6:\"payway\";a:3:{s:6:\"method\";s:8:\"indirect\";s:12:\"include_path\";s:28:\"\/extension\/payway\/payway.php\";s:11:\"option_name\";s:25:\"ct_payway_purchase_status\";}s:4:\"eway\";a:3:{s:6:\"method\";s:6:\"direct\";s:12:\"include_path\";s:24:\"\/extension\/eway\/eway.php\";s:11:\"option_name\";s:23:\"ct_eway_purchase_status\";}}";
        $setting224->postal_code="";
        $setting224->save();

        $setting225 = new Setting;
        $setting225->option_name="ct_special_offer";
        $setting225->option_value="N";
        $setting225->postal_code="";
        $setting225->save();

        $setting226 = new Setting;
        $setting226->option_name="ct_special_offer_text";
        $setting226->option_value="";
        $setting226->postal_code="";
        $setting226->save();

        $setting227 = new Setting;
        $setting227->option_name="ct_star_show_on_front";
        $setting227->option_value="N";
        $setting227->postal_code="";
        $setting227->save();

        $setting228 = new Setting;
        $setting228->option_name="ct_show_time_duration";
        $setting228->option_value="Y";
        $setting228->postal_code="";
        $setting228->save();

        $setting229 = new Setting;
        $setting229->option_name="ct_api_key";
        $setting229->option_value="1";
        $setting229->postal_code="";
        $setting229->save();

        $setting230 = new Setting;
        $setting230->option_name="ct_stripe_create_plan";
        $setting230->option_value="N";
        $setting230->postal_code="";
        $setting230->save();

        $setting231 = new Setting;
        $setting231->option_name="ct_referral_status";
        $setting231->option_value="N";
        $setting231->postal_code="";
        $setting231->save();

        $setting232 = new Setting;
        $setting232->option_name="ct_referral_type";
        $setting232->option_value="F";
        $setting232->postal_code="";
        $setting232->save();

        $setting233 = new Setting;
        $setting233->option_name="ct_referral_value";
        $setting233->option_value="0";
        $setting233->postal_code="";
        $setting233->save();

        $setting234 = new Setting;
        $setting234->option_name="ct_special_days_status";
        $setting234->option_value="Y";
        $setting234->postal_code="";
        $setting234->save();

        $setting235 = new Setting;
        $setting235->option_name="ct_special_days";
        $setting235->option_value="2020-03-31";
        $setting235->postal_code="";
        $setting235->save();

        $setting236 = new Setting;
        $setting236->option_name="ct_special_days_title";
        $setting236->option_value="black friday";
        $setting236->postal_code="";
        $setting236->save();

        $setting237 = new Setting;
        $setting237->option_name="ct_special_days_value";
        $setting237->option_value="0";
        $setting237->postal_code="";
        $setting237->save();

        $setting238 = new Setting;
        $setting238->option_name="ct_special_day_color";
        $setting238->option_value="#480abd";
        $setting238->postal_code="";
        $setting238->save();

        $setting239 = new Setting;
        $setting239->option_name="ct_refs_type";
        $setting239->option_value="F";
        $setting239->postal_code="";
        $setting239->save();

        $setting240 = new Setting;
        $setting240->option_name="ct_refs_value";
        $setting240->option_value="0";
        $setting240->postal_code="";
        $setting240->save();

        $setting241 = new Setting;
        $setting241->option_name="ct_special_type";
        $setting241->option_value="P";
        $setting241->postal_code="";
        $setting241->save();

        $setting242 = new Setting;
        $setting242->option_name="ct_service_design";
        $setting242->option_value="ct_square";
        $setting242->postal_code="";
        $setting242->save();

        $setting243 = new Setting;
        $setting243->option_name="ct_booking_page_design";
        $setting243->option_value="S";
        $setting243->postal_code="";
        $setting243->save();

        $setting244 = new Setting;
        $setting244->option_name="ct_wallet_section";
        $setting244->option_value="off";
        $setting244->postal_code="";
        $setting244->save();

        $setting245 = new Setting;
        $setting245->option_name="ct_gc_api_key";
        $setting245->option_value="";
        $setting245->postal_code="";
        $setting245->save();

        $setting246 = new Setting;
        $setting246->option_name="ct_google_api_key";
        $setting246->option_value="";
        $setting246->postal_code="";
        $setting246->save();

        $setting247 = new Setting;
        $setting247->option_name="ct_minimum_booking_price";
        $setting247->option_value="0";
        $setting247->postal_code="";
        $setting247->save();

        $setting248 = new Setting;
        $setting248->option_name="ct_quickbooks_status";
        $setting248->option_value="N";
        $setting248->postal_code="";
        $setting248->save();

        $setting249 = new Setting;
        $setting249->option_name="ct_quickbooks_client_ID";
        $setting249->option_value="";
        $setting249->postal_code="";
        $setting249->save();

        $setting250 = new Setting;
        $setting250->option_name="ct_quickbooks_client_secret";
        $setting250->option_value="";
        $setting250->postal_code="";
        $setting250->save();

        $setting251 = new Setting;
        $setting251->option_name="ct_qb_access_token";
        $setting251->option_value="";
        $setting251->postal_code="";
        $setting251->save();

        $setting252 = new Setting;
        $setting252->option_name="ct_qb_refresh_token";
        $setting252->option_value="";
        $setting252->postal_code="";
        $setting252->save();

        $setting253 = new Setting;
        $setting253->option_name="ct_qb_x_refresh_token_expires_in";
        $setting253->option_value="";
        $setting253->postal_code="";
        $setting253->save();

        $setting254 = new Setting;
        $setting254->option_name="ct_qb_expires_in";
        $setting254->option_value="";
        $setting254->postal_code="";
        $setting254->save();

        $setting255 = new Setting;
        $setting255->option_name="ct_qb_session_access_token";
        $setting255->option_value="";
        $setting255->postal_code="";
        $setting255->save();

        $setting256 = new Setting;
        $setting256->option_name="ct_qb_company_id";
        $setting256->option_value="";
        $setting256->postal_code="";
        $setting256->save();

        $setting257 = new Setting;
        $setting257->option_name="ct_qb_company_name";
        $setting257->option_value="";
        $setting257->postal_code="";
        $setting257->save();

        $setting258 = new Setting;
        $setting258->option_name="ct_sms_messagebird_status";
        $setting258->option_value="N";
        $setting258->postal_code="";
        $setting258->save();

        $setting259 = new Setting;
        $setting259->option_name="ct_sms_messagebird_send_sms_to_client_status";
        $setting259->option_value="N";
        $setting259->postal_code="";
        $setting259->save();

        $setting260 = new Setting;
        $setting260->option_name="ct_sms_messagebird_send_sms_to_admin_status";
        $setting260->option_value="N";
        $setting260->postal_code="";
        $setting260->save();

        $setting261= new Setting;
        $setting261->option_name="ct_sms_messagebird_send_sms_to_staff_status";
        $setting261->option_value="N";
        $setting261->postal_code="";
        $setting261->save();

        $setting262 = new Setting;
        $setting262->option_name="ct_sms_messagebird_admin_phone";
        $setting262->option_value="";
        $setting262->postal_code="";
        $setting262->save();

        $setting263 = new Setting;
        $setting263->option_name="ct_sms_messagebird_account_apikey";
        $setting263->option_value="";
        $setting263->postal_code="";
        $setting263->save();

        $setting264 = new Setting;
        $setting264->option_name="ct_qb_account";
        $setting264->option_value="";
        $setting264->postal_code="";
        $setting264->save();

        $setting265 = new Setting;
        $setting265->option_name="ct_razorpay_status";
        $setting265->option_value="N";
        $setting265->postal_code="";
        $setting265->save();

        $setting266 = new Setting;
        $setting266->option_name="ct_razorpay_key_id";
        $setting266->option_value="";
        $setting266->postal_code="";
        $setting266->save();

        $setting267 = new Setting;
        $setting267->option_name="ct_razorpay_secret_id";
        $setting267->option_value="";
        $setting267->postal_code="";
        $setting267->save();    
    }
}
