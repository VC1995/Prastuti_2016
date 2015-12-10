// Preloader //

jQuery(document).ready(function($) {  

$(window).load(function(){
  $('#preloader').fadeOut('slow',function(){$(this).remove();});
});

});
/*
$.validator.setDefaults({
    submitHandler: function() {
      alert("submitted!");
    }
  });
*/
// Scrolls to the selected menu item on the page
$(document).ready(function(){
  // code here
  // validate form on keyup and submit
  $("#reg_biZcraft").validate({
    rules: {
      team_name: {
        required: true,
        minlength: 2
      },
      college: {
        required: true,
        minlength: 3
      },
      member1_name: {
        required: true,
        minlength: 2
      },
      member1_email: {
        required: true,
        email: true
      },
      member1_number: {
        required: true,
        minlength: 10,
        maxlength: 11,
        digits: true
      }
    },
    messages: {
      team_name: {
        required: "Please enter a team name",
        minlength: "Your team name must consist of at least 2 characters"
      },
      college: {
        required: "Please enter your college name"
      },
      member1_name: {
        required: "Please enter member's name",
        minlength: "Name must be 2 characters long"
      },
      member1_email: "Please enter a valid email address",
      member1_number: {
        required: "Please enter a 10 digit mobile number",
        minlength: "Please enter a valid 10 digit mobile number",
        maxlength: "Please enter a valid 10 digit mobile number",
        digits: "Please enter a valid 10 digit mobile number"
      }
    }
  });
  $("#reg_consilium").validate({
    rules: {
      team_name: {
        required: true,
        minlength: 2
      },
      college: {
        required: true,
        minlength: 3
      },
      member1_name: {
        required: true,
        minlength: 2
      },
      member1_email: {
        required: true,
        email: true
      },
      member1_number: {
        required: true,
        minlength: 10,
        maxlength: 11,
        digits: true
      },
      member2_name: {
        required: true,
        minlength: 2
      }
    },
    messages: {
      team_name: {
        required: "Please enter a team name",
        minlength: "Your team name must consist of at least 2 characters"
      },
      college: {
        required: "Please enter your college name"
      },
      member1_name: {
        required: "Please enter member's name",
        minlength: "Name must be 2 characters long"
      },
      member1_email: "Please enter a valid email address",
      member1_number: {
        required: "Please enter a 10 digit mobile number",
        minlength: "Please enter a valid 10 digit mobile number",
        maxlength: "Please enter a valid 10 digit mobile number",
        digits: "Please enter a valid 10 digit mobile number"
      },
      member2_name: {
        required: "Please enter member's name",
        minlength: "Name must be 2 characters long"
      }
    }
  });
  $("#reg_idp").validate({
    rules: {
      team_name: {
        required: true,
        minlength: 2
      },
      college: {
        required: true,
        minlength: 3
      },
      member1_name: {
        required: true,
        minlength: 2
      },
      member1_email: {
        required: true,
        email: true
      },
      member1_number: {
        required: true,
        minlength: 10,
        maxlength: 11,
        digits: true
      }
    },
    messages: {
      team_name: {
        required: "Please enter a team name",
        minlength: "Your team name must consist of at least 2 characters"
      },
      college: {
        required: "Please enter your college name"
      },
      member1_name: {
        required: "Please enter member's name",
        minlength: "Name must be 2 characters long"
      },
      member1_email: "Please enter a valid email address",
      member1_number: {
        required: "Please enter a 10 digit mobile number",
        minlength: "Please enter a valid 10 digit mobile number",
        maxlength: "Please enter a valid 10 digit mobile number",
        digits: "Please enter a valid 10 digit mobile number"
      }
    }
  });
  $("#reg_poster").validate({
    rules: {
      team_name: {
        required: true,
        minlength: 2
      },
      college: {
        required: true,
        minlength: 3
      },
      member1_name: {
        required: true,
        minlength: 2
      },
      member1_email: {
        required: true,
        email: true
      },
      member1_number: {
        required: true,
        minlength: 10,
        maxlength: 11,
        digits: true
      }
    },
    messages: {
      team_name: {
        required: "Please enter a team name",
        minlength: "Your team name must consist of at least 2 characters"
      },
      college: {
        required: "Please enter your college name"
      },
      member1_name: {
        required: "Please enter member's name",
        minlength: "Name must be 2 characters long"
      },
      member1_email: "Please enter a valid email address",
      member1_number: {
        required: "Please enter a 10 digit mobile number",
        minlength: "Please enter a valid 10 digit mobile number",
        maxlength: "Please enter a valid 10 digit mobile number",
        digits: "Please enter a valid 10 digit mobile number"
      }
    }
  });
  $("#reg_paper").validate({
    rules: {
      team_name: {
        required: true,
        minlength: 2
      },
      college: {
        required: true,
        minlength: 3
      },
      member1_name: {
        required: true,
        minlength: 2
      },
      member1_email: {
        required: true,
        email: true
      },
      member1_number: {
        required: true,
        minlength: 10,
        maxlength: 11,
        digits: true
      }
    },
    messages: {
      team_name: {
        required: "Please enter a team name",
        minlength: "Your team name must consist of at least 2 characters"
      },
      college: {
        required: "Please enter your college name"
      },
      member1_name: {
        required: "Please enter member's name",
        minlength: "Name must be 2 characters long"
      },
      member1_email: "Please enter a valid email address",
      member1_number: {
        required: "Please enter a 10 digit mobile number",
        minlength: "Please enter a valid 10 digit mobile number",
        maxlength: "Please enter a valid 10 digit mobile number",
        digits: "Please enter a valid 10 digit mobile number"
      }
    }
  });
  $("#reg_recog").validate({
    rules: {
      team_name: {
        required: true,
        minlength: 2
      },
      college: {
        required: true,
        minlength: 3
      },
      member1_name: {
        required: true,
        minlength: 2
      },
      member1_email: {
        required: true,
        email: true
      },
      member1_number: {
        required: true,
        minlength: 10,
        maxlength: 11,
        digits: true
      }
    },
    messages: {
      team_name: {
        required: "Please enter a team name",
        minlength: "Your team name must consist of at least 2 characters"
      },
      college: {
        required: "Please enter your college name"
      },
      member1_name: {
        required: "Please enter member's name",
        minlength: "Name must be 2 characters long"
      },
      member1_email: "Please enter a valid email address",
      member1_number: {
        required: "Please enter a 10 digit mobile number",
        minlength: "Please enter a valid 10 digit mobile number",
        maxlength: "Please enter a valid 10 digit mobile number",
        digits: "Please enter a valid 10 digit mobile number"
      }
    }
  });
  $("#reg_simulim").validate({
    rules: {
      team_name: {
        required: true,
        minlength: 2
      },
      college: {
        required: true,
        minlength: 3
      },
      member1_name: {
        required: true,
        minlength: 2
      },
      member1_email: {
        required: true,
        email: true
      },
      member1_number: {
        required: true,
        minlength: 10,
        maxlength: 11,
        digits: true
      }
    },
    messages: {
      team_name: {
        required: "Please enter a team name",
        minlength: "Your team name must consist of at least 2 characters"
      },
      college: {
        required: "Please enter your college name"
      },
      member1_name: {
        required: "Please enter member's name",
        minlength: "Name must be 2 characters long"
      },
      member1_email: "Please enter a valid email address",
      member1_number: {
        required: "Please enter a 10 digit mobile number",
        minlength: "Please enter a valid 10 digit mobile number",
        maxlength: "Please enter a valid 10 digit mobile number",
        digits: "Please enter a valid 10 digit mobile number"
      }
    }
  });
  $("#reg_sos").validate({
    rules: {
      team_name: {
        required: true,
        minlength: 2
      },
      college: {
        required: true,
        minlength: 3
      },
      member1_name: {
        required: true,
        minlength: 2
      },
      member1_email: {
        required: true,
        email: true
      },
      member1_number: {
        required: true,
        minlength: 10,
        maxlength: 11,
        digits: true
      }
    },
    messages: {
      team_name: {
        required: "Please enter a team name",
        minlength: "Your team name must consist of at least 2 characters"
      },
      college: {
        required: "Please enter your college name"
      },
      member1_name: {
        required: "Please enter member's name",
        minlength: "Name must be 2 characters long"
      },
      member1_email: "Please enter a valid email address",
      member1_number: {
        required: "Please enter a 10 digit mobile number",
        minlength: "Please enter a valid 10 digit mobile number",
        maxlength: "Please enter a valid 10 digit mobile number",
        digits: "Please enter a valid 10 digit mobile number"
      }
    }
  });
})
