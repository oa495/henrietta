var emailForm = document.querySelector('form');

$(function() {
        dialog = $( "#dialog-form" ).dialog({
            autoOpen: false,
            height: 460,
            width: 450,
            modal: true,
            buttons: {
                Cancel: function() {
                    dialog.dialog( "close" );
                }
            },
            close: function() {
                form[ 0 ].reset();
                allFields.removeClass( "ui-state-error" );
            }
        });


        $( "#email-button" ).on( "click", function() {
            dialog.dialog( "open" );
        });
    });

function validateForm(e) {
  console.log("done");
    var nameField = document.getElementById('name');
    var emailField = document.getElementById('email');
    var subjectField = document.getElementById('subject');
    var messageField = document.getElementById('message');

    var emailLabel = document.querySelectorAll('label')[1];
  var nameValid, emailValid, messageValid;

  if (nameField.value == null || nameField.value == '') {
    nameValid = false;
    nameField.className = "incomplete";
  } else {
    nameValid = true;
    nameField.className = "complete";
  }

  if (emailField.value == null || emailField.value == '') {
    emailValid = false;
    emailField.className = 'incomplete';
  } else if (emailField.value.indexOf('@') == -1) { // if no @ symbol
    emailValid = false;
    emailField.className = 'incomplete';
    emailLabel.textContent = "Please enter a valid email address.";
  } else {
    emailValid = true;
    emailField.className = "complete";
    emailLabel.textContent = "Email";
  }
  if (messageField.value == null || messageField.value == '') {
    messageValid = false;
    messageField.className = "incomplete";
  } else {
    messageValid = true;
    messageField.className = "complete";
  }

  if (nameValid == false || emailValid == false || messageValid == false) {
    e.preventDefault(); // prevent form from being submitted
  }
}

emailForm.addEventListener('submit', validateForm, false);




 