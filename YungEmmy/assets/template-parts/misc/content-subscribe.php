     <!-- subscribe section  -->
        <div class="subscribe flex justify-center items-center w-full relative" style="height: 80vh;background-position: center; background-size: cover;">
      <div class="overlayContent absolute top-1 flex justify-around p-2 w-full"   style="background-color: #F4F0E7;">
          <div class="font-bold">ALBUM</div>
          <div class="font-bold">VIDEO</div>
      </div>
      <div class="text-center">
          <h2 class="lg:text-4xl text-2xl font-bold text-white mb-4">DON'T MISS OUT</h2>
          <h5 class="text-2xl text-center font-normal text-white py-2">GET THE LATEST MUSIC AND VIDEO</h5>
          <form class="container text-center p-4" id="formId">
              <div class="control text-center">
          <label for="from_name" class="text-white text-center pt-6">Full Name</label>  
          <input type="text" name="from_name" id="from_name" class="w-full bg-transparent border-b-2 border-white outline-none text-white p-3">
              </div>
              <div class="control text-center mb-10">
              <label for="reply_to" class="text-white text-center pt-6">Email Address</label>
          <input type="email" name="reply_to" id="reply_to" class="w-full bg-transparent border-b-2 border-white outline-none text-white p-2" id="email" required>
              </div>
              <button type="submit" class="p-2 text-white w-2/4 text-xl font-normal"  id="button"
              style="background: #032741;">SUBSCRIBE</button>
          </form>
      </div>
  </div>
    <!-- subscribe section ending -->


    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
        <script type="text/javascript">
        emailjs.init('tHq0PnqZUyi9_nwMe');


const btn = document.getElementById('button');

document.getElementById('formId')
.addEventListener('submit', function(event) {
event.preventDefault();

btn.value = 'Sending...';

const serviceID = 'service_2xza0tl';
const templateID = 'template_fcqv9ya';

emailjs.sendForm(serviceID, templateID, this)
.then(() => {
btn.value = 'Send Email';
alert('Your message has be sent!');
}, (err) => {
btn.value = 'Send Email';
alert(JSON.stringify(err));
});
});
      </script>
