/*
--------------------------------------------------------------
  Template Name: Orbiter - Responsive Admin Dashboard Template
  File: Core JS File
--------------------------------------------------------------
 */
"use strict";
$(document).ready(function() {


    //made blur in style.css - search .infobar-settings-sidebar-overlay{}
    $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});




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



    //$(".edit").on("click", function(e) 
    //this add class is happining
    $(".infobar-edituser-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-edituser-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-edituser-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-edituser-sidebar").removeClass("sidebarshow");
    });    



    $(".edit").on("click", function(e) 
     {
        //alert($(this).data("id"));
        //ajax call;
        getuserdetails($(this).data("id")); // this function is in respective view

        e.preventDefault();

        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        
        //below lines are added in function getuserdetails() inside success
        // $("#infobar-edituser-sidebar").addClass("sidebarshow");

     }); 







     $(".switchery").on("click", function(e) 
     {
        e.preventDefault();
        if( confirm("Are You Sure , \nYou Want To Change Status Of User "+$(this).data("id")+" ?") )
        { 
            window.location=$(this).data("url")+"?action="+$(this).data("action")+"&id="+$(this).data("id")+"&value="+$(this).data("value");
            $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"}); 
        }
     }); 


     $(".delete").on("click", function(e) 
     {
        e.preventDefault();
        if( confirm("Are You Sure , \nYou Want To Delete User "+$(this).data("id")+" ?") )
        { 
            window.location=$(this).data("url")+"?action="+$(this).data("action")+"&id="+$(this).data("id")+"&value="+$(this).data("value");
            $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"}); 
        }
     }); 





    $("#infobar-addbusiness-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-addbusiness-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-business-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-addbusiness-sidebar").removeClass("sidebarshow");
    });


     $(".infobar-editbusiness-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-editbusiness-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-editbusiness-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-editbusiness-sidebar").removeClass("sidebarshow");
    }); 







     $("#infobar-add-block-floor-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-add-block-floor-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-add-block-floor-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-add-block-floor-sidebar").removeClass("sidebarshow");
    });


     $(".infobar-edit-block-floor-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-edit-block-floor-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-edit-block-floor-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-edit-block-floor-sidebar").removeClass("sidebarshow");
    }); 





     $("#infobar-add-room-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-add-room-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-add-room-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-add-room-sidebar").removeClass("sidebarshow");
    });


     $(".infobar-edit-room-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-edit-room-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-edit-room-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-edit-room-sidebar").removeClass("sidebarshow");
    }); 






   $("#infobar-add-bed-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-add-bed-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-add-bed-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-add-bed-sidebar").removeClass("sidebarshow");
    });


     $(".infobar-edit-bed-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-edit-bed-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-edit-bed-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-edit-bed-sidebar").removeClass("sidebarshow");
    }); 






    $("#infobar-add-charges-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-add-charges-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-add-charges-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-add-charges-sidebar").removeClass("sidebarshow");
    });


     $(".infobar-edit-charges-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-edit-charges-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-edit-charges-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-edit-charges-sidebar").removeClass("sidebarshow");
    }); 




    //for editor
    $('.note-insert').hide();
    $('.note-icon-code').hide();


    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
     if(dd<10){
            dd='0'+dd
        } 
        if(mm<10){
            mm='0'+mm
        } 

    today = yyyy+'-'+mm+'-'+dd;

    //for add sliders only    
    $(".date").attr("min",today);
    $(".date").attr("value",today);



    $('.onlyalphaspace').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) { return true;} else { e.preventDefault(); return false;}
        if (this.value.length > 199) { this.value = this.value.slice(0, 199); }
    });


      $('.phone').keypress(function (e) { if (this.value.length > 9) {this.value = this.value.slice(0, 9);} });  

      $('.gender').append('<option  value="" selected>Select Gender</option><option  value="Male">Male</option><option  value="Female">Female</option><option  value="Other">Other</option>) ');
      
      $('.state').append('<option  value="" selected>Select State</option><option  value="Maharashtra">Maharashtra</option><option  value="Andhra Pradesh">Andhra Pradesh</option><option  value="Gujurat">Gujurat</option><option  value="Karnataka">Karnataka</option>');

      $('.address').keypress(function (e) { if (this.value.length > 299) { this.value = this.value.slice(0, 299); }    });  

      $('.city').keypress(function (e) { if (this.value.length > 49) { this.value = this.value.slice(0, 49); }        });

      $('.zip').keypress(function (e) { if (this.value.length > 5) { this.value = this.value.slice(0, 5); }         }); 
      
      $('.dealvalue').keypress(function (e) { if (this.value.length > 7) { this.value = this.value.slice(0, 7); }         }); 


     



     //$('.dateformat').text(  this.text()+"efefe" );

    // $("[class]").each(function()
    // {
    //     if($(this).attr("class")=="dateformat")
    //     {
    //         var ymd =  $(this).text();
    //         var res = ymd.split("-");
    //         if(res[1]=="01"){res[1]="Jan";}
    //         if(res[1]=="02"){res[1]="Feb";}
    //         if(res[1]=="03"){res[1]="Mar";}
    //         if(res[1]=="04"){res[1]="Apr";}
    //         if(res[1]=="05"){res[1]="May";}
    //         if(res[1]=="06"){res[1]="Jun";}
    //         if(res[1]=="07"){res[1]="Jul";}
    //         if(res[1]=="08"){res[1]="Aug";}
    //         if(res[1]=="09"){res[1]="Sept";}
    //         if(res[1]=="10"){res[1]="Oct";}
    //         if(res[1]=="11"){res[1]="Nov";}
    //         if(res[1]=="12"){res[1]="Dec";}
    //         var dmy =res[2]+'-'+res[1]+'-'+res[0];
    //         dmy = dmy.replace(/ /g,'');

    //         $(this).text( dmy );
    //     }
    // });






    

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