var searchProjects_ = [];

function createCard(data) {
  const dateString = data.created_at.split("T");
  const formattedDate = formatDateString(dateString[0]);

  var cardDiv = document.createElement("div");
  cardDiv.className = "col-xs-6 col-sm-6 col-md-4 col-lg-3 clickable-element projects";

  var editcard_ = document.createElement("input");
  editcard_.setAttribute("type", "hidden");
  editcard_.setAttribute("value", data.id);

  var card = document.createElement("div");
  card.className = "card card-project-custom";

  var cardImg = document.createElement("img");
  cardImg.src = "assets/images/samples/project.jpeg";
  cardImg.className = "card-img-top p-2 project_img";
  cardImg.alt = "Card Image ";

  var cardBody = document.createElement("div");
  cardBody.className = "card-body p-2";

  var cardTitle = document.createElement("h5");
  cardTitle.className = "card-title card-project-title";
  cardTitle.textContent = data.board_name;

  //var trash_icon = `"Created : ` + formattedDate + `" <i class="bi bi-trash-fill trash"></i>`;
  var trash_icon = document.createElement("i");
  trash_icon.className = "bi bi-trash-fill trash";
  trash_icon.setAttribute("onclick", "deleteStage(" + data.id + ")");


  var cardText = document.createElement("p");
  cardText.className = "card-text project-subtitle";
  cardText.textContent = "Created : " + formattedDate;

  cardBody.appendChild(cardTitle);
  cardBody.appendChild(cardText);


  card.appendChild(cardImg);
  card.appendChild(cardBody);
  card.appendChild(trash_icon);
  card.appendChild(editcard_);

  cardDiv.appendChild(card);


  return cardDiv;
}

function createCard_old(data) {

  const dateString = data.created_at.split("T");
  const formattedDate = formatDateString(dateString[0]);

  var html_ = `<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 clickable-element projects">
                  <div class="card card-project-custom">
                    <img src="assets/images/samples/project.jpeg" class="card-img-top p-2" alt="Card Image">
                      <div class="card-body p-2">
                        <input type="hidden" id="">
                        <h5 class="card-title card-project-title">` + data.board_name + `</h5>
                        <p class="card-text project-subtitle">Created : ` + formattedDate + `</p>
                      </div>
                  </div>
                </div>`;
  return html_;
}

// Get the parent div

function formatDateString(dateString) {

  // Create a new Date object from the string date
  const date = new Date(dateString);

  // Convert the date to the desired format using toLocaleDateString
  const options = { day: '2-digit', month: 'long', year: 'numeric' };
  const formattedDate = date.toLocaleDateString('en-GB', options);

  return formattedDate;
}

var base_url = window.location.origin;
var current_url = window.location.href.replace(projectUrl, '');

if (current_url == "dashboard.html") {
  get_projects(1);
}

function display_cards(data) {
  var parentDiv = document.querySelector(".parent-dashoard");
  //var parentDiv = document.getElementById("parentdashboard");
  //parentDiv.innerHTML = "";    

  // Create and append 20 card structures
  for (var i = 0; i < data.length; i++) {
    var cardElement = createCard(data[i]);

    parentDiv.appendChild(cardElement);
  }

  //parentDiv.innerHTML += cardElement;        
}

function displayPaginate_(length) {


  var pages_ = Math.ceil(length / (7));

  var pagination_ = document.getElementById("paginage_");
  $("li.page-item").remove();


  if (pages_ > 0) {

    //Previous li
    var prev_li = document.createElement("li");
    prev_li.id = "prevPage";
    prev_li.className = "page-item";

    //Previous li a
    var prev_li_a = `<a class='page-link' href='#' aria-label='Previous'>
        <span aria-hidden='true'>«</span>
      </a>`;

    prev_li.innerHTML = prev_li_a;
    pagination_.appendChild(prev_li);


    for (var i = 1; i <= pages_; i++) {
      var pageno_ = document.createElement("li");
      pageno_.className = "page-item";

      var pageno_a = `<a class='page-link' href='#'>` + i + `</a>`;

      pageno_.innerHTML = pageno_a;
      pagination_.appendChild(pageno_);
    }

    //Current li
    var curr_li = document.createElement("li");
    curr_li.id = "nextPage";
    curr_li.className = "page-item";

    //Crevious li a
    var curr_li_a = `<a class='page-link' href='#' aria-label='Next'>
      <span aria-hidden='true'>»</span>
    </a>`;

    curr_li.innerHTML = curr_li_a;
    pagination_.appendChild(curr_li);

  }

}

function get_projects(pageno_) {

  $("div.projects").remove();

  $.ajax({
    url:  ApiURL +  'get_projects',
    type: "GET",
    // data: data,
    dataType: 'json',
    contentType: false,
    processData: false,
    headers: {
      'Authorization': 'Bearer ' + getToken() // Add the token to the header
    },
    success: function (response) {

      if (response.success) {
        searchProjects_ = response.data;
        //displayPaginate_(response.data.length);
        display_cards(response.data)
      } else {

      }
    },
    error: function (xhr, status, error) {

    },
    complete: function () {

    }
  });
}

function createProject() {
    
  localStorage.setItem('board_id', "0");
  window.location.href = "user/create_project.html"; // Replace "target-page.html" with your desired page
}

$(document).on('click', '.project_img', function (e) {

  var id_ = e.currentTarget.offsetParent.children[3].value;
  localStorage.setItem('board_id', id_);
  window.location.href = "user/create_project.html"; // Replace "target-page.html" with your desired page

});

function deleteStage(id) {

  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!"
  }).then((result) => {
    if (result.isConfirmed) {

      var data = new FormData();
      data.append('board_id', id);
      data.append('_token', $('meta[name="csrf-token"]').attr('content'));

      $.ajax({
        url: ApiURL + 'delete_project', // Replace with your route URL
        type: 'POST',
        dataType: 'json', // Change the data type if necessary
        data: data,
        contentType: false,
        processData: false,

        headers: {
          'Authorization': 'Bearer ' + getToken() // Add the token to the header
        },
        success: function (response) {
          $("div.projects").remove();
          //displayPaginate_(response.data.length);
          display_cards(response.data)
          Swal.fire({
            title: "Deleted!",
            text: data.success,
            icon: "success"
          });
        },
        error: function (xhr, status, error) {
          // Handle errors
          //console.error(xhr.responseText);
          swalWithBootstrapButtons.fire({
            title: "Error",
            text: "Something went wrong)",
            icon: "error"
          });
        }
      });
    }
  });

}

$(document).on('keyup', '#query', function (event) {
  var search_text_ = document.getElementById("query");
  var filterdata_ = (search_text_.value == "" ? searchProjects_ :
    searchProjects_.filter(item => item.board_name.toLowerCase().includes(search_text_.value)));
  $("div.projects").remove();
  display_cards(filterdata_);
});

// var clickableElements = document.querySelectorAll(".clickable-element");

// // Loop through each element and attach click event listener
// clickableElements.forEach(function(element) {
//   element.addEventListener("click", function() {
//     // Redirect to the desired page
//     window.location.href = "create_project"; // Replace "target-page.html" with your desired page
//   });
// });