var swiper = new Swiper(".swiper-container#hero", {
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
});

var swiper = new Swiper(".swiper-container#consult", {
  slidesPerView: 1,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
  },
});

var swiper = new Swiper(".swiper-container#testi", {
  pagination: {
    el: ".swiper-pagination",
  },
});

var swiper = new Swiper(".swiper-container#partners", {
  slidesPerView: 4,
  spaceBetween: 87,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 80,
    },
  },
});

const appointmentform = document.querySelector("#appointmentForm");
const message = document.querySelector("#message");
if (appointmentform) {
  appointmentform.addEventListener("submit", (e) => {
    e.preventDefault();
    let fullname = document.querySelector('input[name="full_name"]').value;
    let email = document.querySelector('input[name="email"]').value;
    let date = document.querySelector('input[name="date"]').value;
    let note = document.querySelector('textarea[name="note"]').value;

    var formatDate = function (timestamp) {
      var date = new Date(timestamp);
      var months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
      ];
      return (
        date.getFullYear() +
        ", " +
        months[date.getMonth()] +
        ", " +
        date.getDate()
      );
    };
    let formdata = new FormData();
    formdata.append("full_name", fullname);
    formdata.append("email", email);
    // formdata.append("date", formatDate(date));
    formdata.append("note", note);
    fetch("http://127.0.0.1:8000/api/appointments/", {
      method: "POST",
      body: formdata,
    })
      .then((res) => res.json())
      .then((data) => {
        const html = `
            <div id="message" class="container">
            <div class="alert alert-success alert-dismissible text-center" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
              <strong>
              Your appointment has been submitted. Please check your inbox for confirmation.
              </strong>
            </div>
          </div>
        `;
        message.innerHTML = html;
        appointmentform.reset();
      })
      .catch((err) => {
        console.log(err);
      });
  });
}
