// const btn = document.getElementById("button");

// document.getElementById("form").addEventListener("submit", function (event) {
//   event.preventDefault();

//   btn.value = "Sending...";

//   const serviceID = "default_service";
//   const templateID = "template_grk8qm7";

//   emailjs.sendForm(serviceID, templateID, this).then(
//     () => {
//       btn.value = "Send Email";
//       alert("Your message has been sent, we will contact you shortly.");
//     },
//     (err) => {
//       btn.value = "Send Email";
//       alert(JSON.stringify(err));
//     }
//   );
// });

// witch captcha test
const btn = document.getElementById("button");

document.getElementById("form").addEventListener("submit", function (event) {
  event.preventDefault();

  // Check if CAPTCHA is completed
  const captchaResponse = grecaptcha.getResponse();
  if (!captchaResponse) {
    alert("Please complete the CAPTCHA.");
    return;
  }

  btn.value = "Sending...";

  const serviceID = "default_service";
  const templateID = "template_grk8qm7";

  emailjs.sendForm(serviceID, templateID, this).then(
    () => {
      btn.value = "Send Email";
      alert("Your message has been sent, we will contact you shortly.");
      grecaptcha.reset(); // Reset CAPTCHA
    },
    (err) => {
      btn.value = "Send Email";
      alert(JSON.stringify(err));
    }
  );
});
