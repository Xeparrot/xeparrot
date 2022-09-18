import 'alpinejs'

window.$ = window.jQuery = require('jquery');
window.Swal = require('sweetalert2');

require('smartwizard');

// CoreUI
require('@coreui/coreui');

// Boilerplate
require('../plugins');


var $ = require( "jquery" );
require( "smartwizard/dist/css/smart_wizard_all.css");
const smartWizard = require("smartwizard");


window.onload = function () {
    $('#loader').hide();
 console.log('Loaded');
};

$(function() {
    $('#smartwizard').smartWizard();
});



