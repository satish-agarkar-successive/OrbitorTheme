/*
--------------------------------------------------------------
  Template Name: Orbiter - Responsive Admin Dashboard Template
  File: Core JS File
--------------------------------------------------------------
 */
"use strict";
$(document).ready(function() {
    /* -- Menu js -- */
    $(function() {
        for (var a = window.location, abc = $(".horizontal-menu a").filter(function() {
            return this.href == a;
        }).addClass("active").parent().addClass("active"); ;) {
            if (!abc.is("li")) break;
            abc = abc.parent().addClass("in").parent().addClass("active");
        }
    });
    /* -- Infobar Setting Sidebar -- */


    $("#infobar-settings-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-settings-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-settings-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-settings-sidebar").removeClass("sidebarshow");
    });


     $("#infobar-adduser-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-adduser-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-adduser-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-adduser-sidebar").removeClass("sidebarshow");
    });


    $("#infobar-edituser-open1").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-edituser-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-edituser-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-edituser-sidebar").removeClass("sidebarshow");
    });
    $("#infobar-edituser-open2").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-edituser-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-edituser-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-edituser-sidebar").removeClass("sidebarshow");
    });
    $("#infobar-edituser-open3").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-edituser-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-edituser-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-edituser-sidebar").removeClass("sidebarshow");
    });
    $("#infobar-edituser-open4").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-edituser-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-edituser-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-edituser-sidebar").removeClass("sidebarshow");
    });
    $("#infobar-edituser-open5").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-edituser-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-edituser-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-edituser-sidebar").removeClass("sidebarshow");
    });




    /* -- Menu Hamburger -- */
    $(".menu-hamburger").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("mobile-left");
        $(".menu-hamburger img").toggle();
    });
    /* -- Menu Topbar Hamburger -- */    
    $(".topbar-toggle-hamburger").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("topbar-toggle-menu");        
        $(".topbar-toggle-hamburger img").toggle();       
    });
    /* -- Switchery -- */
    var setting_first = document.querySelector('.js-switch-setting-first');
    var switchery = new Switchery(setting_first, { color: '#0080ff', size: 'small' });
    var setting_second = document.querySelector('.js-switch-setting-second');
    var switchery = new Switchery(setting_second, { color: '#0080ff', size: 'small' });
    var setting_third = document.querySelector('.js-switch-setting-third');
    var switchery = new Switchery(setting_third, { color: '#0080ff', size: 'small' });
    var setting_fourth = document.querySelector('.js-switch-setting-fourth');
    var switchery = new Switchery(setting_fourth, { color: '#0080ff', size: 'small' });
    var setting_fifth = document.querySelector('.js-switch-setting-fifth');
    var switchery = new Switchery(setting_fifth, { color: '#0080ff', size: 'small' });
    var setting_sixth = document.querySelector('.js-switch-setting-sixth');
    var switchery = new Switchery(setting_sixth, { color: '#0080ff', size: 'small' });
    var setting_seventh = document.querySelector('.js-switch-setting-seventh');
    var switchery = new Switchery(setting_seventh, { color: '#0080ff', size: 'small' });
    var setting_eightth = document.querySelector('.js-switch-setting-eightth');
    var switchery = new Switchery(setting_eightth, { color: '#0080ff', size: 'small' });
    /* -- Bootstrap Popover -- */
    $('[data-toggle="popover"]').popover();
    /* -- Bootstrap Tooltip -- */
    $('[data-toggle="tooltip"]').tooltip();
});