/**
* Template Name: NiceAdmin
* Updated: Mar 12 2024 with Bootstrap v5.3.3
* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach(e => e.addEventListener(type, listener))
    } else {
      select(el, all).addEventListener(type, listener)
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Sidebar toggle
   */
  if (select('.toggle-sidebar-btn')) {
    on('click', '.toggle-sidebar-btn', function (e) {
      select('body').classList.toggle('toggle-sidebar')
    })
  }

  /**
   * Search bar toggle
   */
  if (select('.search-bar-toggle')) {
    on('click', '.search-bar-toggle', function (e) {
      select('.search-bar').classList.toggle('search-bar-show')
    })
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Initiate tooltips
   */
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })

  /**
   * Initiate quill editors
   */
  if (select('.quill-editor-default')) {
    new Quill('.quill-editor-default', {
      theme: 'snow'
    });
  }

  if (select('.quill-editor-bubble')) {
    new Quill('.quill-editor-bubble', {
      theme: 'bubble'
    });
  }

  if (select('.quill-editor-full')) {
    new Quill(".quill-editor-full", {
      modules: {
        toolbar: [
          [{
            font: []
          }, {
            size: []
          }],
          ["bold", "italic", "underline", "strike"],
          [{
            color: []
          },
          {
            background: []
          }
          ],
          [{
            script: "super"
          },
          {
            script: "sub"
          }
          ],
          [{
            list: "ordered"
          },
          {
            list: "bullet"
          },
          {
            indent: "-1"
          },
          {
            indent: "+1"
          }
          ],
          ["direction", {
            align: []
          }],
          ["link", "image", "video"],
          ["clean"]
        ]
      },
      theme: "snow"
    });
  }

  /**
   * Initiate TinyMCE Editor
   */
  const useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
  const isSmallScreen = window.matchMedia('(max-width: 1023.5px)').matches;

  tinymce.init({
    selector: 'textarea.tinymce-editor',
    plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
    editimage_cors_hosts: ['picsum.photos'],
    menubar: 'file edit view insert format tools table help',
    toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    toolbar_sticky: true,
    toolbar_sticky_offset: isSmallScreen ? 102 : 108,
    autosave_ask_before_unload: true,
    autosave_interval: '30s',
    autosave_prefix: '{path}{query}-{id}-',
    autosave_restore_when_empty: false,
    autosave_retention: '2m',
    image_advtab: true,
    link_list: [{
      title: 'My page 1',
      value: 'https://www.tiny.cloud'
    },
    {
      title: 'My page 2',
      value: 'http://www.moxiecode.com'
    }
    ],
    image_list: [{
      title: 'My page 1',
      value: 'https://www.tiny.cloud'
    },
    {
      title: 'My page 2',
      value: 'http://www.moxiecode.com'
    }
    ],
    image_class_list: [{
      title: 'None',
      value: ''
    },
    {
      title: 'Some class',
      value: 'class-name'
    }
    ],
    importcss_append: true,
    file_picker_callback: (callback, value, meta) => {
      /* Provide file and text for the link dialog */
      if (meta.filetype === 'file') {
        callback('https://www.google.com/logos/google.jpg', {
          text: 'My text'
        });
      }

      /* Provide image and alt text for the image dialog */
      if (meta.filetype === 'image') {
        callback('https://www.google.com/logos/google.jpg', {
          alt: 'My alt text'
        });
      }

      /* Provide alternative source and posted for the media dialog */
      if (meta.filetype === 'media') {
        callback('movie.mp4', {
          source2: 'alt.ogg',
          poster: 'https://www.google.com/logos/google.jpg'
        });
      }
    },
    templates: [{
      title: 'New Table',
      description: 'creates a new table',
      content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
    },
    {
      title: 'Starting my story',
      description: 'A cure for writers block',
      content: 'Once upon a time...'
    },
    {
      title: 'New list with dates',
      description: 'New List with dates',
      content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
    }
    ],
    template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
    template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
    height: 600,
    image_caption: true,
    quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
    noneditable_class: 'mceNonEditable',
    toolbar_mode: 'sliding',
    contextmenu: 'link image table',
    skin: useDarkMode ? 'oxide-dark' : 'oxide',
    content_css: useDarkMode ? 'dark' : 'default',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
  });

  /**
   * Initiate Bootstrap validation check
   */
  var needsValidation = document.querySelectorAll('.needs-validation')

  // Array.prototype.slice.call(needsValidation)
  //   .forEach(function (form) {
  //     form.addEventListener('submit', function (event) {
  //       if (!form.checkValidity()) {
  //         event.preventDefault()
  //         event.stopPropagation()
  //       }

  //       form.classList.add('was-validated')
  //     }, false)
  //   })

  /**
   * Initiate Datatables
   */
  const datatables = select('.datatable', true)
  datatables.forEach(datatable => {
    new simpleDatatables.DataTable(datatable, {
      perPageSelect: [5, 10, 15, ["All", -1]],
      columns: [{
        select: 2,
        sortSequence: ["desc", "asc"]
      },
      {
        select: 3,
        sortSequence: ["desc"]
      },
      {
        select: 4,
        cellClass: "green",
        headerClass: "red"
      }
      ]
    });
  })

  /**
   * Autoresize echart charts
   */
  const mainContainer = select('#main');
  if (mainContainer) {
    setTimeout(() => {
      new ResizeObserver(function () {
        select('.echart', true).forEach(getEchart => {
          echarts.getInstanceByDom(getEchart).resize();
        })
      }).observe(mainContainer);
    }, 200);
  }

})();





// document.getElementById('loginForm').addEventListener('submit', function (event) {
//   event.preventDefault(); // Prevent default form submission behavior
//   // Add any other actions you want to perform here
//   // For example, you can add a redirect to another page:
//   window.location.href = 'user-dashboard.html'; // Replace 'index.html' with the path to your desired page
// });


// Function to create a single card structure




// var ApiURL = 'http://127.0.0.1:8000/api/'
// var projectUrl = 'file:///D:/stageplanWeb/'


var LocalStorageUser = localStorage.getItem('user');
var LocalStorageEmail = JSON.parse(localStorage.getItem('email'));
var LocalStoragePassword = JSON.parse(localStorage.getItem('password'));
var LocalStorageRemember = localStorage.getItem('remember_checked');
var currentURL = window.location.href;
var resetPassToken = null;
const sessionId = getQueryParameter('session_id');
var checkEmail = null;

$(document).ready(function () {
  resetPassToken = getQueryParameter('token');
  

  if (LocalStorageEmail !== null && LocalStoragePassword !== null && LocalStorageRemember !== false) {
    $("#yourUsername").val(LocalStorageEmail);
    $("#yourPassword").val(LocalStoragePassword);
    $('#rememberMe').attr('checked', 'checked');
  }

  if (LocalStorageUser != null && currentURL == projectUrl + 'login.html') {

    if (window.cordova) {
      // Check if cordova is available
      document.addEventListener('deviceready', function () {
        // Navigate to the login page within the Cordova app
        window.location.replace('dashboard.html');
      }, false);
    } else {
      // Fallback for web
      window.location.href = projectUrl + 'dashboard.html';
    }    
  }

  if (LocalStorageUser === null &&
    currentURL !== projectUrl + 'login.html' &&
    currentURL !== projectUrl + 'reset_password.html' &&
    currentURL !== projectUrl + 'register.html' &&
    currentURL !== startsWith(projectUrl + 'otp_verify_register.html?email=') &&
    currentURL !== startsWith(projectUrl + 'user/forgetPasswordLink.html?email=')) {
    // window.location.href = projectUrl + 'login.html';
    if (window.cordova) {
      // Check if cordova is available
      document.addEventListener('deviceready', function () {
        // Navigate to the login page within the Cordova app
        window.location.replace('login.html');
      }, false);
    } else {
      // Fallback for web
      window.location.href = projectUrl + 'login.html';
    }  
  } else {
    
    getUserPayments();

    
    if (sessionId) {
      stripeSuccess(sessionId);
    }
  }

  /*  if (LocalStorageRemember == true) {
      checkCondition = 1;
      window.location.href = projectUrl + 'dashboard.html'
      getUserPayments();
    } else if (LocalStorageRemember == false && LocalStorageUser != null) {
      window.location.href = currentURL;
      getUserPayments();
    } else if (LocalStorageUser == null && currentURL != projectUrl + 'login.html') {
      window.location.href = projectUrl + 'login.html'
    }  */
});

function stripeSuccess(sessionId) {
  if (sessionId) {

    var user = getUser();
    var id = user.id;

    var data = new FormData();

    data.append('user_id', id);
    data.append('session_id', sessionId);

    $.ajax({
      url: ApiURL + 'successfully',
      type: "POST",
      data: data,
      dataType: 'json',
      contentType: false,
      processData: false,
      headers: {
        'Authorization': 'Bearer ' + getToken() // Add the token to the header
      },
      success: function (response) {

        if (response.success) {
          getUserPayments();
          // window.location.href = projectUrl + 'user/user_profile.html';

          if (window.cordova) {
            // Check if cordova is available
            document.addEventListener('deviceready', function () {
              // Navigate to the login page within the Cordova app
              window.location.replace('user/user_profile.html');
            }, false);
          } else {
            // Fallback for web
            window.location.href = projectUrl + 'user/user_profile.html';
          }
        } else {
          console.log('eroorrrrrrrrrrrrrrrrrrrr when strip success');

        }
      },
      error: function (xhr, status, error) {
        // Handle AJAX errors
        console.error('AJAX Error:', error);
        // $('#updateForm').addClass('was-validated');
        // $('#updateForm').text('An error occurred while processing your request. Please try again later.');
      },
      complete: function () {
        // Re-enable the submit button and hide the loader when the request completes
        // $('#loaderSpinnerRegister').hide();
        // $('#registerButton').prop('disabled', false);
      }
    });
  } else {
    console.error('No session_id found in URL');
  }
}

function messageTimeout() {
  setTimeout(function () {
    $('.message_timeout').addClass('d-none');
  }, 5000);
}

function baseURL() {
  var basicURL = window.location.origin;
  return basicURL;
}

function userStore(user) {
  localStorage.setItem('user', JSON.stringify(user));
  sessionStorage.setItem("user", JSON.stringify(user));
}

function rememberStore(email, password, remember) {
  localStorage.setItem('email', JSON.stringify(email));
  localStorage.setItem('password', JSON.stringify(password));
  localStorage.setItem('remember_checked', remember);
}

function tokenStore(token) {
  localStorage.setItem('token', JSON.stringify(token));
  sessionStorage.setItem("token", JSON.stringify(token));
}

function getToken() {
  var storeToken = localStorage.getItem('token');
  if (storeToken) {
    var token = JSON.parse(storeToken);
    return token;
  }
}

function getUser() {
  var storedUser = localStorage.getItem('user');
  if (storedUser == null) {
    return null;
  } else {
    var user = JSON.parse(storedUser);
    return user;
  }
}

function logout() {
  // Clear user-related data from localStorage
  localStorage.removeItem('user');
  localStorage.removeItem('token');
  // Use Cordova-specific method to navigate within the app
  if (window.cordova) {
    // Check if cordova is available
    document.addEventListener('deviceready', function () {
      // Navigate to the login page within the Cordova app
      window.location.replace('login.html');
    }, false);
  } else {
    // Fallback for web
    window.location.href = projectUrl + 'login.html';
  }
}

function userRegister() {

  $('#loaderSpinnerRegister').removeClass('d-none');
  // $('#registerButton').text('Please wait');
  $('#registerButton').prop('disabled', true);

  var name = $("#yourName").val();
  var email = $("#yourEmail").val();
  var password = $("#yourPassword").val();
  var checkbox = $('#acceptTerms').is(':checked');

  checkEmail = email;
  // alert(checkEmail)

  //   var csrfToken = $('meta[name="csrf-token"]').attr('content');
  // alert(csrfToken)

  $.ajax({
    url: ApiURL + 'register',
    type: "POST",
    data: {
      name: name,
      email: email,
      password: password,
      checkbox: checkbox,
    },
    dataType: 'json',
    success: function (response) {
      $('#registerButton').prop('disabled', false);
      $('#loaderSpinnerRegister').addClass('d-none');

      if (response.success) {
        $('#account_success_msg').text(response.success);
        $('#account_success_msg').removeClass('d-none');
        $('#registerForm').removeClass('was-validated');
        // window.location.href = 'login.html';

        if (window.cordova) {
          // Check if cordova is available
          document.addEventListener('deviceready', function () {
            // Navigate to the login page within the Cordova app
            window.location.replace('otp_verify_register.html?email=' + encodeURIComponent(email));
          }, false);
        } else {
          // Fallback for web
          window.location.href = projectUrl + 'otp_verify_register.html?email=' + encodeURIComponent(email);
        }


        

        messageTimeout();
        $('#registerForm')[0].reset();

        // window.location.href = '/';
      } else {
        for (const fieldName in response.errors) {
          if (response.errors.hasOwnProperty(fieldName)) {
            // console.log(fieldName + ':');
            response.errors[fieldName].forEach(errorMessage => {
              $('#registerForm').addClass('was-validated');
              $('#' + fieldName).text(errorMessage);
              if (fieldName === 'emailError') {
                $('#emailError').addClass('d-block');
                $('#registerForm').addClass('was-validated');
                $('#emailError').text(errorMessage);
              }

              if (fieldName === 'passwordError') {
                $('#passwordError').addClass('d-block');
                $('#registerForm').addClass('was-validated');
                $('#passwordError').text(errorMessage);
              }
              console.log(errorMessage);
              // if (fieldName === 'name') {
              //   $('#registerForm').addClass('was-validated');
              //   $('#nameError').text(errorMessage);
              // }
              // if (fieldName === 'email') {
              //   $('#emailError').addClass('d-block');
              //   $('#registerForm').addClass('was-validated');
              //   $('#emailError').text(errorMessage);
              // }
              // if (fieldName === 'password') {
              //   $('#registerForm').addClass('was-validated');
              //   $('#passwordError').text(errorMessage);
              // }

              // if (fieldName === 'checkbox') {
              //   $('#registerForm').addClass('was-validated');
              //   $('#checkError').text(errorMessage);
              // }
            });
          }
        }
      }
    },
    error: function (xhr, status, error) {
      // Handle AJAX errors
      console.error('AJAX Error:', error);
      $('#registerForm').addClass('was-validated');
      $('#nameError').text('An error occurred while processing your request. Please try again later.');
    },
    complete: function () {
      // Re-enable the submit button and hide the loader when the request completes
      // $('#loaderSpinnerRegister').hide();
      // $('#registerButton').prop('disabled', false);
    }
  });
}

function userLogin() {

  $('#loaderSpinnerLogin').removeClass('d-none');
  $('#loginButton').prop('disabled', true);

  var email = $("#yourUsername").val();
  var password = $("#yourPassword").val();
  var remember = $('#rememberMe').is(':checked');

  // Construct the data object for AJAX call
  var data = {
    email: email,
    password: password,
    _token: $('meta[name="csrf-token"]').attr('content')
  };

  // Append the 'remember' key only if remember is true
  if (remember == true) {
    data.remember = remember;
  }

  $.ajax({
    url: ApiURL + 'login',
    type: "POST",
    data: data,
    dataType: 'json',
    success: function (response) {

      $('#loginButton').prop('disabled', false);
      $('#loaderSpinnerLogin').addClass('d-none');

      if (response.success) {
        userStore(response.user);
        tokenStore(response.data.token);
        if (remember == true) {
          rememberStore(email, password, true);
        } else {
          rememberStore(null, null, false);
        }


        if (window.cordova) {
          // Check if cordova is available
          document.addEventListener('deviceready', function () {
            // Navigate to the login page within the Cordova app
            if (response.user.role_id == 1) {
              window.location.replace('user/users.html');
            } else {
              window.location.replace('dashboard.html');
            }
            
          }, false);
        } else {
          // Fallback for web
          if (response.user.role_id == 1) {
            window.location.href = 'user/users.html';
          } else {
            window.location.href = 'dashboard.html';
          }
        }

        // if (response.user.role_id == 1) {
        //   window.location.href = 'user/users.html';
        // } else {
        //   window.location.href = 'dashboard.html';
        // }


        $('#account_success_msg').text(response.success);
        $('#account_success_msg').removeClass('d-none');
        $('#loginForm').removeClass('was-validated');
        messageTimeout();
        $('#loginForm')[0].reset();
      } else {
        for (const fieldName in response.errors) {
          if (response.errors.hasOwnProperty(fieldName)) {
            // console.log(fieldName + ':');
            response.errors[fieldName].forEach(errorMessage => {
              $('#loginForm').addClass('was-validated');
              $('#' + fieldName).text(errorMessage);
              if (fieldName === 'emailError') {
                $('#emailError').addClass('d-block');
                $('#loginForm').addClass('was-validated');
                $('#emailError').text(errorMessage);
              }

              if (fieldName === 'emailVerifiedError') {
                $('#emailError').addClass('d-block');
                $('#loginForm').addClass('was-validated');
                $('#emailError').text(errorMessage);


                if (window.cordova) {
                  // Check if cordova is available
                  document.addEventListener('deviceready', function () {
                    // Navigate to the login page within the Cordova app
                    window.location.replace('otp_verify_register.html?email=' + encodeURIComponent(email));
                  }, false);
                } else {
                  // Fallback for web
                  window.location.href = projectUrl + 'otp_verify_register.html?email=' + encodeURIComponent(email);
                }
                // window.location.href = projectUrl + 'otp_verify_register.html?email=' + encodeURIComponent(email);

              }


              if (fieldName === 'passwordError') {
                $('#passwordError').addClass('d-block');
                $('#loginForm').addClass('was-validated');
                $('#passwordError').text(errorMessage);
              }
              console.log(errorMessage);
            });
          }
        }
      }
    },
    error: function (xhr, status, error) {
      // Handle AJAX errors
      console.error('AJAX Error:', error);
      $('#loginForm').addClass('was-validated');
      $('#nameError').text('An error occurred while processing your request. Please try again later.');
    },
    complete: function () {
      // Re-enable the submit button and hide the loader when the request completes
      // $('#loaderSpinnerRegister').hide();
      // $('#registerButton').prop('disabled', false);
    }
  });
}

function forgotPassword() {

  $('#loaderSpinnerForgot').removeClass('d-none');
  $('#forgotButton').prop('disabled', true);

  var email = $("#yourEmail").val();

  // Construct the data object for AJAX call
  var data = {
    email: email,
  };

  $.ajax({
    url: ApiURL + 'forgot_password',
    type: "POST",
    data: data,
    dataType: 'json',
    success: function (response) {
      $('#forgotButton').prop('disabled', false);
      $('#loaderSpinnerForgot').addClass('d-none');

      if (response.success) {
        $('#account_success_msg').text(response.success);
        $('#account_success_msg').removeClass('d-none');
        $('#forgotForm').removeClass('was-validated');
        messageTimeout();
        $('#forgotForm')[0].reset();
        // window.location.href = '/dashboard';        

        if (window.cordova) {
          // Check if cordova is available
          document.addEventListener('deviceready', function () {
            // Navigate to the login page within the Cordova app
            window.location.replace('otp_verify.html?email=' + encodeURIComponent(email));
          }, false);
        } else {
          // Fallback for web
          window.location.href = projectUrl + 'otp_verify.html?email=' + encodeURIComponent(email);
        }

      } else {
        for (const fieldName in response.errors) {
          if (response.errors.hasOwnProperty(fieldName)) {
            // console.log(fieldName + ':');
            response.errors[fieldName].forEach(errorMessage => {
              $('#forgotForm').addClass('was-validated');
              $('#' + fieldName).text(errorMessage);
              if (fieldName === 'emailError') {
                $('#emailError').addClass('d-block');
                $('#forgotForm').addClass('was-validated');
                $('#emailError').text(errorMessage);
              }
              console.log(errorMessage);
            });
          }
        }
      }
    },
    error: function (xhr, status, error) {
      // Handle AJAX errors
      console.error('AJAX Error:', error);
      $('#forgotForm').addClass('was-validated');
      $('#forgotForm').text('An error occurred while processing your request. Please try again later.');
    },
    complete: function () {
      // Re-enable the submit button and hide the loader when the request completes
      // $('#loaderSpinnerRegister').hide();
      // $('#registerButton').prop('disabled', false);
    }
  });
}

function resetPassword() {

  $('#loaderSpinnerForgot').removeClass('d-none');
  $('#resetButton').prop('disabled', true);

  var password = $("#yourPassword").val();
  var confirmPassword = $("#confirm_password").val();
  // var token = $("#forgot_token").val();
  var token = resetPassToken;
  var email = $("#hiddenEmail").val();

  // Construct the data object for AJAX call
  var data = {
    password: password,
    confirm_password: confirmPassword,
    token: token,
    email: email
  };

  $.ajax({
    url: ApiURL + 'reset-password',
    type: "POST",
    data: data,
    dataType: 'json',
    success: function (response) {
      $('#resetButton').prop('disabled', false);
      $('#loaderSpinnerForgot').addClass('d-none');

      if (response.success) {
        $('#reset_success_msg').text(response.success);
        $('#reset_success_msg').removeClass('d-none');
        $('#resetForm').removeClass('was-validated');
        messageTimeout();
        $('#resetForm')[0].reset();
        
        if (window.cordova) {
          // Check if cordova is available
          document.addEventListener('deviceready', function () {
            // Navigate to the login page within the Cordova app
            window.location.replace('login.html');
          }, false);
        } else {
          // Fallback for web
          window.location.href = projectUrl + 'login.html';
        }


      } else {
        for (const fieldName in response.errors) {
          if (response.errors.hasOwnProperty(fieldName)) {
            // console.log(fieldName + ':');
            response.errors[fieldName].forEach(errorMessage => {
              $('#resetForm').addClass('was-validated');
              $('#' + fieldName).text(errorMessage);
              if (fieldName === 'passwordError') {
                $('#passwordError').addClass('d-block');
                $('#resetForm').addClass('was-validated');
                $('#passwordError').text(errorMessage);
              }

              if (fieldName === 'confirm_passwordError') {
                $('#confirm_passwordError').addClass('d-block');
                $('#resetForm').addClass('was-validated');
                $('#confirm_passwordError').text(errorMessage);
              }
              console.log(errorMessage);
            });
          }
        }
      }
    },
    error: function (xhr, status, error) {
      // Handle AJAX errors
      console.error('AJAX Error:', error);
      $('#resetForm').addClass('was-validated');
      $('#resetForm').text('An error occurred while processing your request. Please try again later.');
    },
    complete: function () {
      // Re-enable the submit button and hide the loader when the request completes
      // $('#loaderSpinnerRegister').hide();
      // $('#registerButton').prop('disabled', false);
    }
  });
}

var profileImage = null;

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      profileImage = e.target.result;

      // alert(input.files[0].name)
      $('.imagePreview').attr('src', e.target.result);
      $('.profile_image').val(input.files[0].name);
    }

    reader.readAsDataURL(input.files[0]); // Convert the file to data URL
  }
}

function updateProfile() {
  $('#loaderSpinnerUpdate').removeClass('d-none');
  $('#updateButton').prop('disabled', true);

  var file_data = $("#profile-image-upload")[0].files[0];


  var name = $("#name").val();
  var bio = $("#about").val();
  var company = $("#company").val();
  var job = $("#job").val();
  var country = $("#country").val();
  var address = $("#address").val();
  var contact = $("#phone").val();
  var email = $("#email").val();
  var user = getUser();
  var id = user.id;


  var data = new FormData();
  data.append('name', name);
  data.append('bio', bio);
  data.append('company', company);
  data.append('job', job);
  data.append('country', country);
  data.append('address', address);
  data.append('contact', contact);
  data.append('id', id);
  data.append('email', email);

  if (file_data) {
    data.append('avatar', file_data);
  }

  $.ajax({
    url: ApiURL + 'update_profile',
    type: "POST",
    data: data,
    dataType: 'json',
    contentType: false,
    processData: false,
    headers: {
      'Authorization': 'Bearer ' + getToken() // Add the token to the header
    },
    success: function (response) {
      $('#updateButton').prop('disabled', false);
      $('#loaderSpinnerUpdate').addClass('d-none');

      if (response.success) {
        userStore(response.user);
        var user_ = getUser();
        $('.imagePreviewUpdate').attr('src', profileImage);
        $('.name_update').text(user_.name);
        $('.job_update').text(user_.job);
        $('#update_success_msg').text(response.success);
        $('#update_success_msg').removeClass('d-none');
        // $('#updateForm').removeClass('was-validated');
        messageTimeout();
        // $('#updateForm')[0].reset();
        // window.location.href = '/';
      } else {
        for (const fieldName in response.errors) {
          if (response.errors.hasOwnProperty(fieldName)) {
            // console.log(fieldName + ':');
            response.errors[fieldName].forEach(errorMessage => {
              $('#updateForm').addClass('was-validated');
              $('#' + fieldName).text(errorMessage);
              if (fieldName === 'emailError') {
                $('#emailError').addClass('d-block');
                $('#updateForm').addClass('was-validated');
                $('#emailError').text(errorMessage);
              }

              if (fieldName === 'phoneError') {
                $('#phoneError').addClass('d-block');
                $('#updateForm').addClass('was-validated');
                $('#phoneError').text(errorMessage);
              }
              console.log(errorMessage);
            });
          }
        }
      }
    },
    error: function (xhr, status, error) {
      // Handle AJAX errors
      console.error('AJAX Error:', error);
      $('#updateForm').addClass('was-validated');
      $('#updateForm').text('An error occurred while processing your request. Please try again later.');
    },
    complete: function () {
      // Re-enable the submit button and hide the loader when the request completes
      // $('#loaderSpinnerRegister').hide();
      // $('#registerButton').prop('disabled', false);
    }
  });
}

function saveInquery() {


  var name = $("#name").val();
  var email = $("#email").val();
  var subject = $("#subject").val();
  var message = $("#message").val();  

  var data = new FormData();
  data.append('name', name);
  data.append('email', email);
  data.append('subject', subject);
  data.append('message', message);  

  $('#name_error').text("");
  $('#email_error').text("");
  $('#subject_error').text("");

  if(name == "") {
    $('#name_error').addClass('d-block');
    $('#contact_form').addClass('was-validated');
    $('#name_error').text("The name field is required.");
  } if (email == "") {
    $('#email_error').addClass('d-block');
    $('#contact_form').addClass('was-validated');
    $('#email_error').text("The email field is required.");
  } if (subject == "") {
    $('#subject_error').addClass('d-block');
    $('#contact_form').addClass('was-validated');
    $('#subject_error').text("The subject field is required.");
  } 
  

  if(name != "" && email != "" && subject != "") {

    $('#loaderSpinnerUpdate').removeClass('d-none');
    $('#updateButton').prop('disabled', true);  

    $.ajax({
      url: ApiURL + 'save_inquery',
      type: "POST",
      data: data,
      dataType: 'json',
      contentType: false,
      processData: false,
      headers: {
        'Authorization': 'Bearer ' + getToken() // Add the token to the header
      },
      success: function (response) {
        $('#updateButton').prop('disabled', false);
        $('#loaderSpinnerUpdate').addClass('d-none');
        
        $('#name').val("");
        $('#email').val("");
        $('#subject').val("");
        $('#message').val("");

        $('#update_success_msg').text(response.message);
        $('#update_success_msg').removeClass('d-none');       
        messageTimeout();
      },
      error: function (xhr, status, error) {
        // Handle AJAX errors
        console.error('AJAX Error:', error);
        $('#contact_form').addClass('was-validated');
        $('#contact_form').text('An error occurred while processing your request. Please try again later.');
      },
      complete: function () {
      }
    });
  }

  


}

function changePassword() {
  $('#loaderSpinnerChangePassword').removeClass('d-none');
  $('#changePasswordButton').prop('disabled', true);

  var current_password = $("#currentPassword").val();
  var password = $("#newPassword").val();
  var confirm_password = $("#renewPassword").val();


  var data = new FormData();
  data.append('current_password', current_password);
  data.append('password', password);
  data.append('confirm_password', confirm_password);

  $.ajax({
    url: ApiURL + 'change_password',
    type: "POST",
    data: data,
    dataType: 'json',
    contentType: false,
    processData: false,
    headers: {
      'Authorization': 'Bearer ' + getToken() // Add the token to the header
    },
    success: function (response) {
      $('#changePasswordButton').prop('disabled', false);
      $('#loaderSpinnerChangePassword').addClass('d-none');

      if (response.success) {
        $('#changePassword_success_msg').text(response.success);
        $('#changePassword_success_msg').removeClass('d-none');
        $('#changePassword').removeClass('was-validated');
        messageTimeout();
        $('#changePassword')[0].reset();
        // window.location.href = '/';
      } else {
        for (const fieldName in response.errors) {
          if (response.errors.hasOwnProperty(fieldName)) {
            // console.log(fieldName + ':');
            response.errors[fieldName].forEach(errorMessage => {
              $('#changePassword').addClass('was-validated');
              $('#' + fieldName).text(errorMessage);
              if (fieldName === 'currentPasswordError') {
                $('#currentPasswordError').addClass('d-block');
                $('#changePassword').addClass('was-validated');
                $('#currentPasswordError').text(errorMessage);
              }

              if (fieldName === 'passwordError') {
                $('#passwordError').addClass('d-block');
                $('#changePassword').addClass('was-validated');
                $('#passwordError').text(errorMessage);
              }

              if (fieldName === 'confirm_passwordError') {
                $('#confirm_passwordError').addClass('d-block');
                $('#changePassword').addClass('was-validated');
                $('#confirm_passwordError').text(errorMessage);
              }



              console.log(errorMessage);
            });
          }
        }
      }
    },
    error: function (xhr, status, error) {
      // Handle AJAX errors
      console.error('AJAX Error:', error);
      $('#changePassword').addClass('was-validated');
      $('#changePassword').text('An error occurred while processing your request. Please try again later.');
    },
    complete: function () {
      // Re-enable the submit button and hide the loader when the request completes
      // $('#loaderSpinnerRegister').hide();
      // $('#registerButton').prop('disabled', false);
    }
  });
}


function formatDate(dateString) {
  var dateObject = new Date(dateString);

  var day = dateObject.getDate();
  var month = dateObject.toLocaleString('default', { month: 'long' });
  var year = dateObject.getFullYear();

  var formattedDate = day + ' ' + month + ', ' + year;

  return formattedDate;
}

function getUserPayments() {
  $.ajax({
    url: ApiURL + 'get_user_payments',
    type: "GET",
    dataType: 'json',
    headers: {
      'Authorization': 'Bearer ' + getToken() // Add the token to the header
    },
    success: function (response) {
      console.log('User payments:', response);
      if (response.user_payments && response.user_payments.length > 0) {
        response.user_payments.forEach(payment => {
          var start_date = formatDate(payment.start_date);
          var end_date = formatDate(payment.end_date);

          if (payment.status == 'paid' && payment.gateway == 'free') {
            var textContent = "You are currently on a <span class='highlight'>7-day trial version</span>. Your trial started on " + start_date + " and will end on <span class='highlight'>" + end_date + "</span>. We kindly remind you to consider subscribing before the end date to continue enjoying our services seamlessly.";
          } else if (payment.status == 'paid' && payment.gateway != 'free') {
            var textContent = "You are currently subscribed to our services. Your subscription started on " + start_date + " and will continue until <span class='highlight'>" + end_date + "</span>. Thank you for choosing our services";

            $('#stripeContent').hide();
            $('#paypalContent').hide();
            $('#subs_checkbox').hide();
            $('#cancelButton').removeClass('d-none');
          }


          $('#payment_info').html(textContent);

          console.log(payment);
        })
      }
    },
    error: function (xhr, status, error) {
      console.error('AJAX Error:', error);
    },
    complete: function () {
    }
  });
}

function cancelSubscription() {

  var data = new FormData();
  // data.append('_token', $('meta[name="csrf-token"]').attr('content'));

  $.ajax({
    url: ApiURL + 'cancel_subscription',
    type: "POST",
    data: data,
    dataType: 'json',
    contentType: false,
    processData: false,
    headers: {
      'Authorization': 'Bearer ' + getToken() // Add the token to the header
    },
    success: function (response) {
      $('#subscriptionButton').prop('disabled', false);
      $('#loaderSpinnercancelsubs').addClass('d-none');

      if (response.success) {
        $('#subs_success_msg').text(response.success);
        $('#subs_success_msg').removeClass('d-none');
        $('#payment_info').hide();
        $('#subs_checkbox').show();
        $('#cancelButton').hide();
        $('#stripeContent').show();
        messageTimeout();
        // $('#changePassword')[0].reset();
        // window.location.href = '/';
      }
    },
    // error: function (xhr, status, error) {
    //   // Handle AJAX errors
    //   console.error('AJAX Error:', error);
    //   $('#subscription').text('An error occurred while processing your request. Please try again later.');
    // },
    complete: function () {
      // Re-enable the submit button and hide the loader when the request completes
      // $('#loaderSpinnerRegister').hide();
      // $('#registerButton')prop('disabled', false);
    }
  });
}

function getQueryParameter(name) {
  const urlParams = new URLSearchParams(window.location.search);
  return urlParams.get(name);
}

function paypalSuccess(records) {
  $('#loaderSpinnerUpdate').removeClass('d-none');
  $('#updateButton').prop('disabled', true);

  // var file_data = $("#profile-image-upload")[0].files[0];


  // var data = $("#name").val();
  // var bio = $("#about").val();
  // var company = $("#company").val();
  // var job = $("#job").val();
  // var country = $("#country").val();
  // var address = $("#address").val();
  // var contact = $("#phone").val();
  // var email = $("#email").val();
  var user = getUser();
  var user_id = user.id;


  var data = new FormData();
  data.append('records', JSON.stringify(records));
  data.append('user_id', user_id);
  // data.append('company', company);
  // data.append('job', job);
  // data.append('country', country);
  // data.append('address', address);
  // data.append('contact', contact);
  // data.append('id', id);
  // data.append('email', email);

  // if (file_data) {
  //   data.append('avatar', file_data);
  // }

  $.ajax({
    url: ApiURL + 'paypal_success',
    type: "POST",
    data: data,
    dataType: 'json',
    contentType: false,
    processData: false,
    headers: {
      'Authorization': 'Bearer ' + getToken() // Add the token to the header
    },
    success: function (response) {
      $('#updateButton').prop('disabled', false);
      $('#loaderSpinnerUpdate').addClass('d-none');

      if (response.success) {
        alert('suceesss')
        userStore(response.user);
        var user_ = getUser();
        $('.imagePreviewUpdate').attr('src', profileImage);
        $('.name_update').text(user_.name);
        $('.job_update').text(user_.job);
        $('#update_success_msg').text(response.success);
        $('#update_success_msg').removeClass('d-none');
        // $('#updateForm').removeClass('was-validated');
        messageTimeout();
        // $('#updateForm')[0].reset();
        // window.location.href = '/';
      } else {
        for (const fieldName in response.errors) {
          if (response.errors.hasOwnProperty(fieldName)) {
            // console.log(fieldName + ':');
            response.errors[fieldName].forEach(errorMessage => {
              $('#updateForm').addClass('was-validated');
              $('#' + fieldName).text(errorMessage);
              if (fieldName === 'emailError') {
                $('#emailError').addClass('d-block');
                $('#updateForm').addClass('was-validated');
                $('#emailError').text(errorMessage);
              }

              if (fieldName === 'phoneError') {
                $('#phoneError').addClass('d-block');
                $('#updateForm').addClass('was-validated');
                $('#phoneError').text(errorMessage);
              }
              console.log(errorMessage);
            });
          }
        }
      }
    },
    error: function (xhr, status, error) {
      // Handle AJAX errors
      console.error('AJAX Error:', error);
      $('#updateForm').addClass('was-validated');
      $('#updateForm').text('An error occurred while processing your request. Please try again later.');
    },
    complete: function () {
      // Re-enable the submit button and hide the loader when the request completes
      // $('#loaderSpinnerRegister').hide();
      // $('#registerButton').prop('disabled', false);
    }
  });
}

function resendOtp() {
  // Construct the data object for AJAX call
  var email = $("#hiddenEmail").val();
  var type = $("#type").val();

  // Construct the data object for AJAX call
  var data = {
    email: email,
    type: type
  };

  $.ajax({
    url: ApiURL + 'resend_otp',
    type: "POST",
    data: data,
    dataType: 'json',
    success: function (response) {
      // $('#resetButton').prop('disabled', false);
      // $('#loaderSpinnerForgot').addClass('d-none');

      if (response.success) {
        $('#reset_success_msg').text(response.success);
        $('#reset_success_msg').removeClass('d-none');
        $('#resetForm').removeClass('was-validated');
        messageTimeout();
        // $('#resetForm')[0].reset();
        // window.location.href = projectUrl + 'forgotPasswordLink.html';
      } else {
        for (const fieldName in response.errors) {
          if (response.errors.hasOwnProperty(fieldName)) {
            // console.log(fieldName + ':');
            response.errors[fieldName].forEach(errorMessage => {
              $('#resetForm').addClass('was-validated');
              $('#' + fieldName).text(errorMessage);
              if (fieldName === 'passwordError') {
                $('#passwordError').addClass('d-block');
                $('#resetForm').addClass('was-validated');
                $('#passwordError').text(errorMessage);
              }

              if (fieldName === 'confirm_passwordError') {
                $('#confirm_passwordError').addClass('d-block');
                $('#resetForm').addClass('was-validated');
                $('#confirm_passwordError').text(errorMessage);
              }
              console.log(errorMessage);
            });
          }
        }
      }
    },
    error: function (xhr, status, error) {
      // Handle AJAX errors
      console.error('AJAX Error:', error);
      $('#resetForm').addClass('was-validated');
      $('#resetForm').text('An error occurred while processing your request. Please try again later.');
    },
    complete: function () {
      // Re-enable the submit button and hide the loader when the request completes
      // $('#loaderSpinnerRegister').hide();
      // $('#registerButton').prop('disabled', false);
    }
  });
}

function verify_forgot_password() {
  
  // Construct the data object for AJAX call
  var email = $("#hiddenEmail").val();
  const otp = Array.from(document.querySelectorAll('.otp-field > input')).map(input => input.value).join('');

  // Construct the data object for AJAX call
  var data = {
    email: email,
    otp: otp
  };

  $.ajax({
    url: ApiURL + 'verify_forgot_password',
    type: "POST",
    data: data,
    dataType: 'json',
    success: function (response) {
      // $('#resetButton').prop('disabled', false);
      // $('#loaderSpinnerForgot').addClass('d-none');

      if (response.success) {
        
        $('#reset_success_msg').text(response.success);
        $('#reset_success_msg').removeClass('d-none');
        $('#resetForm').removeClass('was-validated');
        messageTimeout();
        $('#resetForm')[0].reset();        

        if (window.cordova) {
          // Check if cordova is available
          document.addEventListener('deviceready', function () {
            // Navigate to the login page within the Cordova app
            window.location.replace('user/forgetPasswordLink.html?email=' + encodeURIComponent(email));
          }, false);
        } else {
          // Fallback for web
          window.location.href = projectUrl + 'user/forgetPasswordLink.html?email=' + encodeURIComponent(email);
        }

      } else {
        
        for (const fieldName in response.errors) {
          if (response.errors.hasOwnProperty(fieldName)) {
            // console.log(fieldName + ':');
            response.errors[fieldName].forEach(errorMessage => {
              $('#resetForm').addClass('was-validated');
              $('#' + fieldName).text(errorMessage);
              if (fieldName === 'otpError') {
                $('#reset_error_msg').text(errorMessage);
                $('#reset_error_msg').removeClass('d-none');
                $('#reset_error_msg').removeClass('d-none');
                messageTimeout();
                // $('#resetForm')[0].reset();

              }
            });
          }
        }
      }
    },
    error: function (xhr, status, error) {
      // Handle AJAX errors
      console.error('AJAX Error:', error);
      $('#resetForm').addClass('was-validated');
      $('#resetForm').text('An error occurred while processing your request. Please try again later.');
    },
    complete: function () {
      // Re-enable the submit button and hide the loader when the request completes
      // $('#loaderSpinnerRegister').hide();
      // $('#registerButton').prop('disabled', false);
    }
  });
}

function verify_register() {
  
  // Construct the data object for AJAX call
  var email = $("#hiddenEmail").val();
  const otp = Array.from(document.querySelectorAll('.otp-field > input')).map(input => input.value).join('');

  // Construct the data object for AJAX call
  var data = {
    email: email,
    otp: otp
  };

  $.ajax({
    url: ApiURL + 'verify_register',
    type: "POST",
    data: data,
    dataType: 'json',
    success: function (response) {
      // $('#resetButton').prop('disabled', false);
      // $('#loaderSpinnerForgot').addClass('d-none');

      if (response.success) {
        
        $('#reset_success_msg').text(response.success);
        $('#reset_success_msg').removeClass('d-none');
        $('#resetForm').removeClass('was-validated');
        messageTimeout();
        $('#resetForm')[0].reset();

        if (window.cordova) {
          // Check if cordova is available
          document.addEventListener('deviceready', function () {
            // Navigate to the login page within the Cordova app
            window.location.replace('login.html');
          }, false);
        } else {
          // Fallback for web
          window.location.href = projectUrl + 'login.html';
        }

      } else {
        
        for (const fieldName in response.errors) {
          if (response.errors.hasOwnProperty(fieldName)) {
            // console.log(fieldName + ':');
            response.errors[fieldName].forEach(errorMessage => {
              $('#resetForm').addClass('was-validated');
              $('#' + fieldName).text(errorMessage);
              if (fieldName === 'otpError') {
                $('#reset_error_msg').text(errorMessage);
                $('#reset_error_msg').removeClass('d-none');
                $('#reset_error_msg').removeClass('d-none');
                messageTimeout();
                // $('#resetForm')[0].reset();

              }
            });
          }
        }
      }
    },
    error: function (xhr, status, error) {
      // Handle AJAX errors
      console.error('AJAX Error:', error);
      $('#resetForm').addClass('was-validated');
      $('#resetForm').text('An error occurred while processing your request. Please try again later.');
    },
    complete: function () {
      // Re-enable the submit button and hide the loader when the request completes
      // $('#loaderSpinnerRegister').hide();
      // $('#registerButton').prop('disabled', false);
    }
  });
}


