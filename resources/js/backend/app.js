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


// Function to fetch the ajax content
function provideContent(idx, stepDirection, stepPosition, selStep, callback) {



    const dynamic_url = $('meta[name=dynamic_url]').attr('content');
    const repo_name = $('#name').val();
    const author_name = $('#author_name').val();
    const repo = $('#repo').val();
    console.log(repo_name);
    console.log(author_name);
    console.log(repo);


    // You can use stepDirection to get ajax content on the forward movement and stepPosition to identify the step position
    if (stepDirection == 'forward' && stepPosition == 'middle') {
        var ajaxURL = dynamic_url+'/api/module-content-step/'+idx +'/' + repo_name + '/' + author_name;

        // Ajax call to fetch your content
        $.ajax({
            method  : "GET",
            url     : ajaxURL,
            beforeSend: function( xhr ) {
                // Show the loader
                $('#smartwizard').smartWizard("loader", "show");
            }
        }).done(function( res ) {
            // Build the content HTML
            var html = res;

            // Resolve the Promise with the tab content
            callback(html);

            // Hide the loader
            $('#smartwizard').smartWizard("loader", "hide");
        }).fail(function(err) {
            // Handle ajax error

            // Hide the loader
            $('#smartwizard').smartWizard("loader", "hide");
        });
    }

    // The callback must called in any case to procced the steps
    // The empty callback will not apply any dynamic contents to the steps
    callback();
}

function onFinish(){
    alert('Finish Clicked');
}
function onCancel(){
    $('#smartwizard').smartWizard("reset");
}

$(function() {
    const dynamic_url = $('meta[name=dynamic_url]').attr('content');
    $('#smartwizard').smartWizard({
        selected: 0, // Initial selected step, 0 = first step
        justified: true, // Nav menu justification. true/false
        getContent: provideContent,
        autoAdjustHeight: true, // Automatically adjust content height
        backButtonSupport: false, // Enable the back button support
        enableUrlHash: true, // Enable selection of the step based on url hash
        transition: {
            animation: '', // Animation effect on navigation, none|fade|slideHorizontal|slideVertical|slideSwing|css(Animation CSS class also need to specify)
            speed: '400', // Animation speed. Not used if animation is 'css'
            easing: '', // Animation easing. Not supported without a jQuery easing plugin. Not used if animation is 'css'
            prefixCss: '', // Only used if animation is 'css'. Animation CSS prefix
            fwdShowCss: '', // Only used if animation is 'css'. Step show Animation CSS on forward direction
            fwdHideCss: '', // Only used if animation is 'css'. Step hide Animation CSS on forward direction
            bckShowCss: '', // Only used if animation is 'css'. Step show Animation CSS on backward direction
            bckHideCss: '', // Only used if animation is 'css'. Step hide Animation CSS on backward direction
        },
        toolbar: {
            position: 'bottom', // none|top|bottom|both
            showNextButton: true, // show/hide a Next button
            showPreviousButton: false, // show/hide a Previous button
            extraHtml: '<a href="'+ dynamic_url + 'admin/module-explorer" class="btn sw-btn success" >Cancel</a>'
        },
        anchor: {
            enableNavigation: false, // Enable/Disable anchor navigation
            enableNavigationAlways: false, // Activates all anchors clickable always
            enableDoneState: true, // Add done state on visited steps
            markPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
            unDoneOnBackNavigation: false, // While navigate back, done state will be cleared
            enableDoneStateNavigation: true // Enable/Disable the done state navigation
        },
        keyboard: {
            keyNavigation: true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
            keyLeft: [37], // Left key code
            keyRight: [39] // Right key code
        },
        lang: { // Language variables for button
            next: 'Next',
            previous: 'Previous'
        },
        disabledSteps: [], // Array Steps disabled
        errorSteps: [], // Array Steps error
        warningSteps: [], // Array Steps warning
        hiddenSteps: [], // Hidden steps
    });
});



